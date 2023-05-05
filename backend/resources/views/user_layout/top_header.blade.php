{{--@php--}}
{{--dd($categorys[0]->hasSubCategories);--}}
{{--@endphp--}}
<header>
    <div class="z-50 fixed w-full top-0 left-0 shadow-sm border-b-[1px] py-4 bg-white">
        <div class="flex items-center justify-between px-[20px] xl:px-6">
            <div class="w-[250px] md:h-[50px]">
                <a href="./index.html" class="block">
                    <img src="{{ asset('assets/images/logo-hapo-digital.png') }}" alt="Logo" class="w-full object-contain">
                </a>
            </div>
            <ul class="nav-menu w-full lg:flex items-center justify-center lg:flex-wrap gap-y-4 hidden ">
                @foreach($categorys as $category)
                    @if($category->hasSubCategories()->count() > 0)
                        <li class="has-child"><a href="{{ route('user.category.list', ['slug' => $category->slug, 'type' => 'parent']) }}">{{$category->name}}</a>
                            <div class="sub-menu absolute top-[50px]">
                                <ul>
                                    @foreach($category->hasSubCategories()->get() as $item)
                                        <li><a href="{{ route('user.category.list', ['slug' => $item->slug, 'type' => 'sub']) }}">{{ $item->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    @else
                        <li><a href="{{ route('user.category.list', ['slug' => $category->slug, 'type' => 'parent']) }}">{{$category->name}}</a></li>
                    @endif


                @endforeach
{{--                <li class="active"><a href="#">Dịch vụ seo</a></li>--}}
{{--                <li><a href="#">Cộng đồng seo</a></li>--}}
{{--                <li><a href="#">Dịch vụ backlink báo</a></li>--}}
{{--                <li class="has-child"><a href="#">Dịch vụ backlink</a>--}}
{{--                    <div class="sub-menu absolute top-[50px]">--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">Dịch vụ viết bài Pr</a></li>--}}
{{--                            <li><a href="#">Dịch vụ backlink</a></li>--}}
{{--                            <li><a href="#">Dịch vụ backlink entity [Hot]</a></li>--}}
{{--                            <li><a href="#">Dịch vụ chăm sóc website</a></li>--}}
{{--                            <li><a href="#">Dịch vụ thiết kế website</a></li>--}}
{{--                            <li><a href="#">Dịch vụ book báo</a></li>--}}
{{--                            <li><a href="#">Dịch vụ guest post</a></li>--}}
{{--                            <li><a href="#">Báo điện tử</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li><a href="#">Báo giá seo</a></li>--}}
{{--                <li><a href="#">Đào tạo seo</a></li>--}}
{{--                <li class="has-child"><a href="#">Tin tức</a>--}}
{{--                    <div class="sub-menu absolute top-[50px] min-w-[200px]">--}}
{{--                        <ul>--}}
{{--                            <li><a href="#" style="text-transform: none;">Kinh nghiệm Seo</a></li>--}}
{{--                            <li><a href="#" style="text-transform: none;">Facebook Marketing</a></li>--}}
{{--                            <li><a href="#" style="text-transform: none;">Báo điện tử</a></li>--}}
{{--                            <li><a href="#" style="text-transform: none;">Case Study</a></li>--}}
{{--                        </ul>--}}

{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="has-child"><a href="#">Về chúng tôi</a>--}}
{{--                    <div class="sub-menu absolute top-[50px] min-w-[200px]">--}}
{{--                        <ul>--}}
{{--                            <li><a href="#" style="text-transform: none;">Giới thiệu</a></li>--}}
{{--                            <li><a href="#" style="text-transform: none;">Đội ngũ chuyên gia</a></li>--}}
{{--                            <li><a href="#" style="text-transform: none;">Tuyển dụng</a></li>--}}
{{--                            <li><a href="#" style="text-transform: none;">Liên hệ</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

{{--                </li>--}}
            </ul>
            <div id="menuToggle" class="lg:!hidden">
                <input type="checkbox" id="checkMenu" />
                <span></span>
                <span></span>
                <span></span>
                <ul id="menu-mobile">
                    <li class="active"><a href="#">Dịch vụ seo</a></li>
                    <li><a href="#">Cộng đồng seo</a></li>
                    <li><a href="#">Dịch vụ backlink báo</a></li>
                    <li class="has-child"><a href="#">Dịch vụ backlink</a>
                        <div class="sub-menu absolute top-[50px]">
                            <ul>
                                <li><a href="#">Dịch vụ viết bài Pr</a></li>
                                <li><a href="#">Dịch vụ backlink</a></li>
                                <li><a href="#">Dịch vụ backlink entity [Hot]</a></li>
                                <li><a href="#">Dịch vụ chăm sóc website</a></li>
                                <li><a href="#">Dịch vụ thiết kế website</a></li>
                                <li><a href="#">Dịch vụ book báo</a></li>
                                <li><a href="#">Dịch vụ guest post</a></li>
                                <li><a href="#">Báo điện tử</a></li>
                            </ul>

                        </div>
                    </li>
                    <li><a href="#">Báo giá seo</a></li>
                    <li><a href="#">Đào tạo seo</a></li>
                    <li class="has-child"><a href="#">Tin tức</a>
                        <div class="sub-menu absolute top-[50px] min-w-[200px]">
                            <ul>
                                <li><a href="#" style="text-transform: none;">Kinh nghiệm Seo</a></li>
                                <li><a href="#" style="text-transform: none;">Facebook Marketing</a></li>
                                <li><a href="#" style="text-transform: none;">Báo điện tử</a></li>
                                <li><a href="#" style="text-transform: none;">Case Study</a></li>
                            </ul>

                        </div>
                    </li>
                    <li class="has-child"><a href="#">Về chúng tôi</a>
                        <div class="sub-menu absolute top-[50px] min-w-[200px]">
                            <ul>
                                <li><a href="#" style="text-transform: none;">Giới thiệu</a></li>
                                <li><a href="#" style="text-transform: none;">Đội ngũ chuyên gia</a></li>
                                <li><a href="#" style="text-transform: none;">Tuyển dụng</a></li>
                                <li><a href="#" style="text-transform: none;">Liên hệ</a></li>
                            </ul>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
