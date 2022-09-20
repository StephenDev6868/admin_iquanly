<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Site;
use App\Services\Upload\UploadService;
use Dotlogics\Grapesjs\App\Traits\EditorTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller
{
    use EditorTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $sites = Site::query()
            ->select(['*'])
            ->paginate(10);
        return view('admin.sites.list', compact('sites'));
    }

    public function editor(Request $request, Site $site)
    {
        $config = Config::query()->where('id', 3)->get(['*']);
        //dd($config);
        //dd($site);
        return $this->show_gjs_editor($request, $site);
    }

    public function test()
    {
        $config = Config::query()->where('id', 3)->get(['*']);
        return view('admin.sites.builder', compact('config'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $configs = Config::query()
            ->get(['*'])
            ->toArray();
        $headers = $this->filterTemplate($configs, 'header');
        $footers = $this->filterTemplate($configs, 'footer');
        $homes = $this->filterTemplate($configs, 'home');
        $abouts = $this->filterTemplate($configs, 'about');
        $authors = $this->filterTemplate($configs, 'author');
        $products = $this->filterTemplate($configs, 'product');
        $product_details = $this->filterTemplate($configs, 'product-single');
        $posts = $this->filterTemplate($configs, 'post');
        $post_details = $this->filterTemplate($configs, 'post-single');
        $policys = $this->filterTemplate($configs, 'policy');

        return view('admin.sites.add',
            compact(
                'headers',
                'footers',
                'homes',
                'abouts',
                'authors',
                'products',
                'product_details',
                'posts' ,
                'post_details',
                'policys'
            )
        );
    }

    /**
     * filterTemplate
     *
     * @param array  $configs
     * @param string $key
     *
     * @return mixed
    */
    public function filterTemplate(array $configs, string $key)
    {
        return array_filter($configs, function ($item) use ($key) {
            return  $item['name'] == $key;
        });
    }

    /**
     *
     * @param Config $config Config
     *
     * @return mixed
    */
    public function previewTemplate(Config $config)
    {
        //$html = view('admin.sites.preview', compact('config'))->render();
        //$html = html_entity_decode($html);
//        File::makeDirectory(public_path(). '/test.com.vn');
//        File::put('test.com.vn/test'. rand(1,10) . '.html',
//            view('admin.sites.preview', compact('config'))
//                ->with(['CardSave' => $html, 'message' => 'Success'])
//                ->render()
//        );

        $view = view('admin.sites.preview', compact('config'))->render();
        //dd($view);
        return view('admin.sites.preview', compact('config'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $inputs = $request->all();

        $validator = Validator::make($inputs, [
            'title'          => 'required|max:255',
            'description'    => 'nullable|max:255',
            'domain'         => 'required|max:255|unique:sites,domain',
            'logo'           => 'nullable|mimes:jpeg,jpg,png',
            'header'         => 'required',
            'footer'         => 'required',
            'home'           => 'required',
            'about'          => 'required',
            'author'         => 'nullable',
            'post'           => 'nullable',
            'post_single'    => 'nullable',
            'product'        => 'nullable',
            'product_single' => 'nullable',
            'policy'         => 'nullable',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }

        $file_logo = $request->file('logo') ?? '';
        if ($file_logo) {
            $file_logo_url = UploadService::upload('logo', $file_logo);
            $inputs['logo'] = $file_logo_url;
        }
        $inputs['config'] = [
            'header'        => $inputs['header'] ?? '',
            'footer'        => $inputs['footer'] ?? '',
            'home'          => $inputs['home'] ?? '',
            'about'         => $inputs['about'] ?? '',
            'author'        => $inputs['author'] ?? '',
            'post'          => $inputs['post'] ?? '',
            'post_single'   => $inputs['post_single'] ?? '',
            'product'       => $inputs['product'] ?? '',
            'product_single' => $inputs['product_single'] ?? '',
            'policy'        => $inputs['policy'] ?? '',
        ];
        $inputs['user_id'] = Auth::guard('user')->user()->id;
        //$this->addConfigToNginx($inputs['domain']);

        $result = site::query()
            ->create($inputs);

        $this->generateFile($inputs['config'], $inputs['domain']);
        $this->generateSiteMap($inputs);

        return Redirect::route('admin.sites.list')
            ->with('success', 'Tạo site thành công');
    }

    /**
     * Generate Site Map
     *
     * @param array $inputs Inputs
     *
     * @return mixed
    */
    public function generateSiteMap(array $inputs)
    {
        $domain = $inputs['domain'];
        $sitemap = App::make('sitemap');
        foreach ($inputs['config'] as $key => $value) {
            if (!empty($value)) {
                if (env('APP_ENV') == 'local') {
                    $sitemap->add(env('APP_URL') . '/template/' . $domain . '/' . $key . '.php', Carbon::now(), '1.0', 'daily');
                } else {
                    $sitemap->add('https://' . $domain  .'/'. $key . '.php', Carbon::now(), '1.0', 'daily');
                }
            }
        }

        $sitemap->store('xml', '/template/' . $domain . '/sitemap');
        if (File::exists(public_path() .'/template/'. $domain . '/sitemap.xml')) {
            chmod(public_path() .'/template/'. $domain . '/sitemap.xml', 0777);
        }
    }

    /**
    */
    public function generateFile(array $config, string $folderName)
    {
        $header = get_template($config['header']);
        $footer = get_template($config['footer']);
        unset($config['header']);
        unset($config['footer']);

        if (! File::exists(public_path(). '/template/'  . $folderName)){
            File::makeDirectory(public_path(). '/template/' . $folderName);
        }

        // Copy img and css
        if (
            (! File::exists(public_path() . '/template/' . $folderName . '/css')) ||
            (! File::exists(public_path() . '/template/' . $folderName . '/img'))
        ){
            File::copyDirectory(public_path(). '/template/css', public_path() . '/template/' . $folderName . '/css');
            File::copyDirectory(public_path(). '/template/img', public_path() . '/template/' . $folderName . '/img');
        }
        $newConfig = [];
        foreach ($config as $key => $value) {
            if (!empty($value)) {
                $item = get_template($value);
                $newConfig['style'] = $header->style;
                $newConfig['html'] = $header->html . $item->html . $footer->html;
                $newConfig['js_handle'] = $item->js_handle;
                File::put(public_path(). '/template/' . $folderName . '/'. $key . '.php',
                    view('admin.sites.generate', compact('newConfig'))
                        ->render()
                );
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\site  $site
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(site $site)
    {
        $configs = Config::query()
            ->get(['*'])
            ->toArray();
        $headers = $this->filterTemplate($configs, 'header');
        $footers = $this->filterTemplate($configs, 'footer');
        $homes = $this->filterTemplate($configs, 'home');
        $abouts = $this->filterTemplate($configs, 'about');
        $authors = $this->filterTemplate($configs, 'author');
        $products = $this->filterTemplate($configs, 'product');
        $product_details = $this->filterTemplate($configs, 'product-single');
        $posts = $this->filterTemplate($configs, 'post');
        $post_details = $this->filterTemplate($configs, 'post-single');
        $policys = $this->filterTemplate($configs, 'policy');

        return view('admin.sites.edit', compact(
            'site',
            'headers',
            'footers',
            'homes',
            'abouts',
            'authors',
            'products',
            'product_details',
            'posts' ,
            'post_details',
            'policys',
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\site  $site
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(site $site, Request $request)
    {
        $inputs = $request->all();

        $validator = Validator::make($inputs, [
            'title'         => 'required|max:255',
            'description'   => 'nullable|max:255',
            'domain'        => 'required|max:255',
            'logo'          => 'nullable|mimes:jpeg,jpg,png',
            'header'        => 'required',
            'footer'        => 'required',
            'home'          => 'required',
            'about'         => 'required',
            'author'        => 'nullable',
            'post'          => 'nullable',
            'post_single'   => 'nullable',
            'product'       => 'nullable',
            'product_single' => 'nullable',
            'policy'        => 'nullable',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }

        $file_logo = $request->file('logo') ?? '';
        if ($file_logo) {
            $file_logo_url = UploadService::upload('logo', $file_logo);
            $inputs['logo'] = $file_logo_url;
        }
        $inputs['config'] = [
            'header'        => $inputs['header'] ?? '',
            'footer'        => $inputs['footer'] ?? '',
            'home'          => $inputs['home'] ?? '',
            'about'         => $inputs['about'] ?? '',
            'author'        => $inputs['author'] ?? '',
            'post'          => $inputs['post'] ?? '',
            'post_single'   => $inputs['post_single'] ?? '',
            'product'       => $inputs['product'] ?? '',
            'product_single' => $inputs['product_single'] ?? '',
            'policy'        => $inputs['policy'] ?? '',
        ];
        $inputs['user_id'] = Auth::guard('user')->user()->id;

        $site->update($inputs);

        $this->generateFile($inputs['config'], $inputs['domain']);

        return Redirect::route('admin.sites.list')
            ->with('success', 'Sửa site thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\site  $site
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(site $site)
    {
        if (File::exists(public_path() . '/template/' . $site->domain)) {
            File::deleteDirectories(public_path() . '/template/' . $site->domain);
        }
        $site->delete();

        return Redirect::route('admin.sites.list')
            ->with('success', 'Xoá site thành công');
    }

    /**
    */
    public function addConfigToNginx($domain)
    {
        $configs = File::get('/var/www/docker/nginx/sites/default.conf');
        $newConfig = '
server {
    listen 80;

    server_name www.' . $domain . ' '  . $domain . ';
    root /var/www/backend/public/template/'. $domain .';
    index home.php index.php index.html index.htm;

    location / {
        try_files $uri $uri/ /index.php$is_args$args;
    }

    location ~ \.php$ {
        try_files $uri /index.php =404;
        fastcgi_pass php-upstream;
        fastcgi_index index.php;
        fastcgi_buffers 16 16k;
        fastcgi_buffer_size 32k;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;

        # Fixes Timeout
        fastcgi_read_timeout 600;
        include fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }

    location /.well-known/acme-challenge/ {
        root /var/www/letsencrypt/;
        log_not_found off;
    }

    error_log /var/log/nginx/ultrapc_api_error.log;
    access_log /var/log/nginx/ultrapc_api_access.log;
}';
        File::put('/var/www/docker/nginx/sites/default.conf', $configs . $newConfig);
    }
}
