@extends('user_layout.master')
@section('content')
    <div class="content w-full">
        <section>
            <div class="mt-[100px]">
                <div class="grid grid-cols-1 md:grid-cols-12 md:gap-3 px-[20px] max-w-[1390px] mx-auto w-full">
                    <div class="col-span-9">
                        <div class="border-[1px] border-dashed p-4">
                            <div class="flex flex-col">
                                <div class="breadcrumb flex items-center gap-2 flex-wrap md:flex-nowrap">
                                    <a href="#" class="whitespace-nowrap">HapoDigital</a>
                                    <span>>></span>
                                    <a href="#" class="whitespace-nowrap">FaceBook Marketing</a>
                                    <span>>></span>
                                    <div class="truncate ">
                                        <a href="#">Khung giờ vàng đăng bài bán hàng trên mạng xã hội facebook</a>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 py-6">
                                    <div class="flex items-center gap-1">
                                        <div class="w-[23px] h-[23px] rounded-full">
                                            <img src="{{ URL::asset('assets/images/4577cd12308d6920372848b74896d8d1.png') }}"
                                                 class="w-full rounded-full" alt="">
                                        </div>
                                        <span class="text-sm text-[#525252]">{{ $post->userName()->full_name }}</span>
                                    </div>
                                    <span class="text-sm text-[#525252]">{{ \Carbon\Carbon::parse($post->created_at)}}</span>
                                </div>
                                <div class="text-center py-4">
                                    <h1 class="text-3xl font-bold text-[#61AA11]">{{ optional($post)->title }}</h1>
                                </div>
                                <div class="content-post flex flex-col gap-4">
                                        <p>
                                            {!! html_entity_decode(optional($post)->content) !!}
                                        </p>
                                    <ul class="social flex items-center gap-2">
                                        <li
                                            class="w-[45px] h-[45px] bg-[#3b5998] flex items-center justify-center rounded-[4px] hover:opacity-70 transition-all duration-200 cursor-pointer">
                                            <a href="#"><svg fill="#fff" class="w-5 h-5" viewBox="0 0 24 24"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z" />
                                                </svg></a>
                                        </li>
                                        <li
                                            class="flex items-center justify-center w-[45px] h-[45px] rounded-[4px] hover:opacity-70 transition-all duration-200 bg-[#1da1f2] cursor-pointer">
                                            <a href="#"><svg class="w-5 h-5" viewBox="0 -2 20 20" version="1.1"
                                                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                                    <title>twitter [#154]</title>
                                                    <desc>Created with Sketch.</desc>
                                                    <defs>

                                                    </defs>
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)"
                                                           fill="#fff">
                                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                                <path
                                                                    d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705"
                                                                    id="twitter-[#154]">

                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></a>
                                        </li>
                                        <li
                                            class="flex items-center justify-center w-[45px] h-[45px] rounded-[4px] hover:opacity-70 transition-all duration-200 bg-[#0077b5] cursor-pointer">
                                            <a href="#"><svg fill="#fff" class="w-5 h-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                             viewBox="0 0 310 310" xml:space="preserve">
                                           <g id="XMLID_801_">
                                               <path id="XMLID_802_" d="M72.16,99.73H9.927c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5H72.16c2.762,0,5-2.238,5-5V104.73
                                                   C77.16,101.969,74.922,99.73,72.16,99.73z"/>
                                               <path id="XMLID_803_" d="M41.066,0.341C18.422,0.341,0,18.743,0,41.362C0,63.991,18.422,82.4,41.066,82.4
                                                   c22.626,0,41.033-18.41,41.033-41.038C82.1,18.743,63.692,0.341,41.066,0.341z"/>
                                               <path id="XMLID_804_" d="M230.454,94.761c-24.995,0-43.472,10.745-54.679,22.954V104.73c0-2.761-2.238-5-5-5h-59.599
                                                   c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5h62.097c2.762,0,5-2.238,5-5v-98.918c0-33.333,9.054-46.319,32.29-46.319
                                                   c25.306,0,27.317,20.818,27.317,48.034v97.204c0,2.762,2.238,5,5,5H305c2.762,0,5-2.238,5-5V194.995
                                                   C310,145.43,300.549,94.761,230.454,94.761z"/>
                                           </g>
                                           </svg></a>
                                        </li>
                                    </ul>
                                    <div class="comments flex flex-col md:flex-row items-center gap-4 md:gap-8">
                                        <div class="w-[101px]">
                                            <div class="w-[100px] h-[100px] rounded-full">
                                                <img src="../images/ceo-phong-nguyen-300x300.jpg" class="w-full rounded-full" alt="">
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <h4 class="text-2xl font-medium text-center md:text-left">Phong Nguyen - SEO Expert</h4>
                                            <span class="text-[#0D8CC1] text-[15px] italic">Trong SEO, chiến lược bài bản, giá trị hữu ích mang lại cho người dùng sẽ giúp bạn chiến thắng cả trên thứ hạng tìm kiếm và kết quả chuyển đổi.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="sticky top-[88px] w-full">
                            <a href="#"><img src="{{ URL::asset('assets/images/banner-hapodigital-2.jpg') }}" class="w-full object-contain" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="px-[20px] max-w-[1390px] mx-auto w-full my-10">
                <div class="text-center py-10">
                    <h2 class="uppercase text-4xl font-medium text-[#61AA11]">Khách Hàng Nói Gì Về HapoDigital</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-10">
                    <div class="border-2 border-[#61AA11] border-double">
                        <div class="slider">
                            <section>
                                <div class="flex flex-col justify-center  p-4">
                                    <span class="text-lg text-center italic">
                                        Chúng tôi đánh giá Hapodigital là 1 dịch vụ tốt và có tâm. Nhiều dự án rất khó lên và tuyệt vọng thì tôi thường tìm đến Hapo như 1 giải pháp cứu cánh của mình. Và chưa bao giờ để tôi thất vọng.</span>
                                    <div class="flex justify-center items-center gap-4">
                                        <div class="w-[51px]">
                                            <div class="w-[50px] h-[50px] rounded-full">
                                                <img src="{{ URL::asset('assets/images/tran-thang.jpg') }}" class="w-full rounded-full" alt="">
                                            </div>
                                        </div>
                                        <div class="flex flex-col my-10">
                                            <h3 class="font-medium">Trần Thắng</h3>
                                            <span class="capitalize text-[#61AA11] font-medium">CEO của Viết Bài Xuyên Việt</span>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div class="flex flex-col justify-center  p-4">
                                    <span class="text-lg text-center italic">
						Chúng tôi đánh giá Hapodigital là 1 dịch vụ tốt và có tâm. Nhiều dự án rất khó lên và tuyệt vọng thì tôi thường tìm đến Hapo như 1 giải pháp cứu cánh của mình. Và chưa bao giờ để tôi thất vọng.</span>
                                    <div class="flex justify-center items-center gap-4">
                                        <div class="w-[51px]">
                                            <div class="w-[50px] h-[50px] rounded-full">
                                                <img src="{{ URL::asset('assets/images/tran-thang.jpg') }}" class="w-full rounded-full" alt="">
                                            </div>
                                        </div>
                                        <div class="flex flex-col my-10">
                                            <h3 class="font-medium">Bảo Điền</h3>
                                            <span class="capitalize text-[#61AA11] font-medium">CEO của IM Thiên Phúc</span>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div class="flex flex-col justify-center  p-4">
                                    <span class="text-lg text-center italic">
						Ngách mình thuộc vào dạng khó, có nhiều đối thủ cạnh tranh trên Google, mình đã tìm hiểu về SEO trước đó và có sử dụng dịch vụ SEO của đơn vị trước đó nhưng không hiệu quả. Nhưng nhờ HapoDigital  mà giờ toàn bộ từ khóa đang Top 1 và top 2.
					</span>
                                    <div class="flex justify-center items-center gap-4">
                                        <div class="w-[51px]">
                                            <div class="w-[50px] h-[50px] rounded-full">
                                                <img src="{{ URL::asset('assets/images/nhung-nguyen.jpg') }}" class="w-full rounded-full" alt="">
                                            </div>
                                        </div>
                                        <div class="flex flex-col my-10">
                                            <h3 class="font-medium">Nguyễn Nhung</h3>
                                            <span class="capitalize text-[#61AA11] font-medium">Khách hàng</span>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="border-2 border-[#61AA11] border-double">
                        <div class="slider">
                            <section>
                                <div class="flex flex-col justify-center  p-4">
                                    <span class="text-lg text-center italic">
						Sau một thời gian hợp tác lâu dài với HaPoDigital thì mình rất tin tưởng con người ở đây. Các bạn rất nhiệt tình, có trách nhiệm và đặc biệt là luôn hoàn thành tốt không việc. Thiết kế website chuẩn seo, dịch vụ SEO lên top - Tính tiền  theo hiệu quả rồi mới lấy tiền khiến mình rất yên tầm.</span>
                                    <div class="flex justify-center items-center gap-4">
                                        <div class="w-[51px]">
                                            <div class="w-[50px] h-[50px] rounded-full">
                                                <img src="{{ URL::asset('assets/images/pham-ngoc-son.jpg') }}" class="w-full rounded-full" alt="">
                                            </div>
                                        </div>
                                        <div class="flex flex-col my-10">
                                            <h3 class="font-medium">Phạm Ngọc Sơn</h3>
                                            <span class="capitalize text-[#61AA11] font-medium">Founder của WP.mentor</span>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div class="flex flex-col justify-center  p-4">
                                    <span class="text-lg text-center italic">

						Mình đang sử dụng dịch vụ backlink của HapoDgital. Các bạn tư vấn rất nhiệt tình và đặc biệt kĩ thuật SEO bền vững và an toàn. Các dự án SEO khó được HapoDigital triển khai rất bài bản và lên TOP tốt. Hy vọng hợp tác lâu dài!</span>
                                    <div class="flex justify-center items-center gap-4">
                                        <div class="w-[51px]">
                                            <div class="w-[50px] h-[50px] rounded-full">
                                                <img src="{{ URL::asset('assets/images/tan-rua.jpg') }}" class="w-full rounded-full" alt="">
                                            </div>
                                        </div>
                                        <div class="flex flex-col my-10">
                                            <h3 class="font-medium">Tân Rùa</h3>
                                            <span class="capitalize text-[#61AA11] font-medium">Khách hàng</span>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div class="flex flex-col justify-center  p-4">
                                    <span class="text-lg text-center italic">

                                        Mình làm về sức khỏe. Sau khi hợp tác đẩy SEO cho website thì chỉ sau 8 tháng website mình đã tăng traffic gấp 10 lần trước. Bây giờ traffic 1 ngày cũng lên tới 3000/ngày, khách hàng rất nhiều. Cám ơn HapoDigital.
					</span>
                                    <div class="flex justify-center items-center gap-4">
                                        <div class="w-[51px]">
                                            <div class="w-[50px] h-[50px] rounded-full">
                                                <img src="{{ URL::asset('assets/images/khach-hang-thu-may.jpg') }}" class="w-full rounded-full" alt="">
                                            </div>
                                        </div>
                                        <div class="flex flex-col my-10">
                                            <h3 class="font-medium">Thu Mây</h3>
                                            <span class="capitalize text-[#61AA11] font-medium">Khách hàng Thu Mây</span>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="px-[20px] max-w-[1390px] mx-auto w-full">
                <div>
                    <h3 class="text-[#61AA11] text-2xl">Bài viết liên quan:</h3>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-8 md:gap-y-[35px] my-8">
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
                                <a href="{{ route('user.category.detail', ['slug' => $category->slug, 'post' => $post->id]) }}" class="font-medium uppercase text-sm text-[#009EE2]">Xem thêm >></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="mx-auto max-w-[280px] z-30">
            <a href="#"
               class="flex justify-center text-white uppercase rounded-[4px] py-[15px] px-[30px] whitespace-nowrap font-medium items-center gap-3 bg-[#FF5A00]"><svg
                    fill="#fff" class="w-6 h-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z" />
                </svg> Cộng đồng hỗ trợ Seo</a>
        </div>
    </div>
@endsection
