@extends('user_layout.master')
@section('content')
    <div class="content">
        <section>
            <div class="mt-[85px] category-title">
                <div class="overlay">

                </div>
                <div class="relative z-10 px-[20px] max-w-[1390px] mx-auto py-20">
                    <h2 class="uppercase text-white text-3xl">{{ $nameCategory }}</h2>
                </div>
            </div>
        </section>
        <section>
            <div class="px-[20px] max-w-[1390px] mx-auto">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-8 md:gap-y-[35px] my-10">
                    @foreach($posts as $post)
                        <div class="card">
                            <div class="w-full h-[200px] md:h-[240px] lg:h-[308px]">
                                <a href="#"><img src={{ $post->avatar }} class="w-full" alt=""></a>
                            </div>
                            <div class="p-2 flex flex-col">
                                <div class="py-4">
                                    <a href="#"><h2 class="text-lg font-bold line-clamp-2">{{ $post->title }}</h2></a>
                                    <span class="line-clamp-2 text-sm">{!! html_entity_decode($post->sort_description) !!}</span>
                                </div>
                                <a href="{{ route('user.category.detail', ['slug' => $post->category->slug, 'post' => $post->id]) }}" class="font-medium uppercase text-sm text-[#009EE2]">Xem thêm >></a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pb-10">
{{--                    {{ $posts->links() }}--}}
{{--                    <ul class=" pagination flex justify-center items-center gap-2">--}}
{{--                        <li class="active"><a href="#" class="text-lg">1</a></li>--}}
{{--                        <li><a href="#" class="text-lg">2</a></li>--}}
{{--                    </ul>--}}
                </div>
            </div>
        </section>
        <div class="mx-auto max-w-[280px] z-30">
            <a href="#" class="flex justify-center text-white uppercase rounded-[4px] py-[15px] px-[30px] whitespace-nowrap font-medium items-center gap-3 bg-[#FF5A00]"><svg fill="#fff" class="w-6 h-6" viewBox="0 0 24 24"
                                                                                                                                                                              xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z" />
                </svg> Cộng đồng hỗ trợ Seo</a>
        </div>
    </div>
@endsection
