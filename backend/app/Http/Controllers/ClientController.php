<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use App\Models\UserSalary;
use App\Models\WorkQuantity;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index()
    {
//        $categorys = Category::query()
//            ->where('status', 1)
//            ->get();
        return view('staff.index');
        //return view('tables-');
    }

    public function info()
    {
        $user = Auth::guard('user')->user();
        return view('staff.info', compact('user'));
    }

    public function salary()
    {
        $userInfo = Auth::guard('user')->user();
        $middleMonth = Carbon::now()->year . '-' . Carbon::now()->month . '-' . '15';
        $firstMonth = Carbon::now()->year . '-' . Carbon::now()->month . '-' . '01';
        $lastMonth = Carbon::now()->subMonths(1)->format('Y-m');

        $start = Carbon::parse($lastMonth)->firstOfMonth()->format('Y-m-d');
        $end = Carbon::parse($lastMonth)->endOfMonth()->format('Y-m-d');
        $salaryBasic = UserSalary::query()
            ->where('user_id', $userInfo->id)
            ->whereDate('end_at', '<=', $middleMonth)
            ->get()->toArray();

        $query = WorkQuantity::query()
            ->join('product_steps', 'product_steps.id', '=', 'work_quantities.product_step_id')
            ->join('users', 'users.id', '=', 'work_quantities.user_id')
            ->where('work_quantities.user_id', $userInfo->id)
            ->whereDate('date_work', '>=', $start)
            ->whereDate('date_work', '<=', $end)
            ->select([
                'users.id as user_id',
                'users.full_name as userFullName',
                'product_steps.id as productStepId',
                'product_steps.name as productStepName',
                'product_steps.unit_price as unitPrice',
                'product_steps.coefficient as coefficient',
                'work_quantities.quantity as quantity',
                'work_quantities.date_work as dateWork',
            ]);
        $datas = $query->get()->toArray();
        $salaries = [];
        foreach ($datas as $key => $data) {
            if (!isset($salaries[$data['user_id']])) {
                $salaries[$data['user_id']] = [
                    'sumSalaryProduct' =>  $data['unitPrice'] * $data['quantity'] * $data['coefficient'],
                    'userFullName' => $data['userFullName'],
                    'dateWorkNow' => \Carbon\Carbon::parse($data['dateWork'])->format('m/Y')
                ];
                $salaries[$data['user_id']]['productStepInfo'][] = [
                    'step_name' => $data['productStepName'],
                    'quantity' => $data['quantity'],
                    'dateWork' => $data['dateWork'],
                    'coefficient' => $data['coefficient'],
                    'unitPrice' => $data['unitPrice'],
                ];
            } else {
                $salaries[$data['user_id']]['productStepInfo'][] = [
                    'step_name' => $data['productStepName'],
                    'quantity' => $data['quantity'],
                    'dateWork' => $data['dateWork'],
                    'coefficient' => $data['coefficient'],
                    'unitPrice' => $data['unitPrice'],
                ];
                $salaries[$data['user_id']]['sumSalaryProduct'] +=  ($data['unitPrice'] * $data['quantity'] * $data['coefficient']);
            }
        }
        $salary = count($salaries) > 0 ? $salaries[$userInfo->id < 10 ? $userInfo->id : $userInfo->id] : [];
        $salaryBasic = count($salaryBasic) > 0 ? $salaryBasic[0] : [];
        return view('staff.salary', compact('salary', 'salaryBasic'));
    }

    public function category(string $slug, string $type)
    {
        $categorys = Category::query()
            ->where('status', 1)
            ->get();
        if ($type == 'sub') {
            $category = SubCategory::query()
                ->where('slug', 'like', '%' . $slug . '%')
                ->first();
            $posts = Post::query()
                ->where('category_id', $category->getKey())
                ->paginate(10);
            $nameCategory = $category->name;
        } else {
            $category = Category::query()
                ->where('slug', 'like', '%' . $slug . '%')
                ->pluck('id')
                ->toArray();
            $categoryIds = array_values($category);
            $sub_category = SubCategory::query()
                ->whereIn('category_id', $categoryIds)
                ->pluck('id')
                ->toArray();
            $sub_categoryIds = array_values($sub_category);
            $posts = Post::query()
                ->whereIn('category_id', $sub_categoryIds)
                ->paginate(10);
            $nameCategory = $slug;
        }

        foreach ($posts as $post) {
            $post->avatar = getenv('APP_URL') . '/upload/Posts/' . $post->avatar;
        }
        return view('user.category',compact('posts', 'categorys', 'nameCategory'));
    }

    public function detail(string $slug, Post $post)
    {
        $categorys = Category::query()
            ->where('status', 1)
            ->get();
        $category = SubCategory::query()
            ->where('slug', 'like', '%' . $slug . '%')
            ->first();
        $posts = Post::query()
            ->where('category_id', $category->getKey())
            ->where('id', '<>', $post->getKey())
            ->latest()
            ->limit(10)
            ->get();

        $post = Post::query()
            ->where('id', '=', $post->getKey())
            ->first();
        foreach ($posts as $post) {
            $post->avatar = getenv('APP_URL') . '/upload/Posts/' . $post->avatar;
        }
        return view('user.detail',compact('post', 'categorys', 'posts', 'category'));
    }
}
