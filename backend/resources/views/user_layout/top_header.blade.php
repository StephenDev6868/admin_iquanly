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
{{--            <ul class="nav-menu w-full lg:flex items-center justify-center lg:flex-wrap gap-y-4 hidden ">--}}
{{--                @foreach($categorys as $category)--}}
{{--                    @if($category->hasSubCategories()->count() > 0)--}}
{{--                        <li class="has-child"><a href="{{ route('user.category.list', ['slug' => $category->slug, 'type' => 'parent']) }}">{{$category->name}}</a>--}}
{{--                            <div class="sub-menu absolute top-[50px]">--}}
{{--                                <ul>--}}
{{--                                    @foreach($category->hasSubCategories()->get() as $item)--}}
{{--                                        <li><a href="{{ route('user.category.list', ['slug' => $item->slug, 'type' => 'sub']) }}">{{ $item->name }}</a></li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @else--}}
{{--                        <li><a href="{{ route('user.category.list', ['slug' => $category->slug, 'type' => 'parent']) }}">{{$category->name}}</a></li>--}}
{{--                    @endif--}}


{{--                @endforeach--}}
{{--            </ul>--}}
{{--            <div id="menuToggle" class="lg:!hidden">--}}
{{--                <input type="checkbox" id="checkMenu" />--}}
{{--                <span></span>--}}
{{--                <span></span>--}}
{{--                <span></span>--}}
{{--                <ul id="menu-mobile">--}}
{{--                    @foreach($categorys as $category)--}}
{{--                        @if($category->hasSubCategories()->count() > 0)--}}
{{--                            <li class="has-child"><a href="{{ route('user.category.list', ['slug' => $category->slug, 'type' => 'parent']) }}">{{$category->name}}</a>--}}
{{--                                <div class="sub-menu absolute top-[50px]">--}}
{{--                                    <ul>--}}
{{--                                        @foreach($category->hasSubCategories()->get() as $item)--}}
{{--                                            <li><a href="{{ route('user.category.list', ['slug' => $item->slug, 'type' => 'sub']) }}">{{ $item->name }}</a></li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @else--}}
{{--                            <li><a href="{{ route('user.category.list', ['slug' => $category->slug, 'type' => 'parent']) }}">{{$category->name}}</a></li>--}}
{{--                        @endif--}}

{{--                    @endforeach--}}
{{--                    s--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </div>
</header>
