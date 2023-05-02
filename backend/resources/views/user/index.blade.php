@extends('user_layout.master')
@section('content')
    <div class="content">
        <section>
            <div class="px-[20px] max-w-[1390px] mx-auto grid grid-cols-1 md:grid-cols-2 my-[86px] lg:my-[100px] place-items-center">
                <div class="flex flex-col">
                    <h3 class="uppercase text-[#78A936] text-2xl font-bold">DỊCH VỤ MARKETING ONLINE TỔNG THỂ</h3>
                    <span class="text-lg py-4"><strong>HaPo Digital</strong> tự hào là công ty cung cấp giải pháp SEO, Tư vấn SEO, <strong class="text-[#ff5a00]">đơn vị Agency BÁO LỚN</strong> , Marketing giúp mang lại hiệu quả kinh doanh và thành công vượt trội cho hàng nghìn khách hàng.</span>
                    <div class="bt-top mt-4 relative">
                        <ul class="services my-6">
                            <li><a href="#" class="flex items-center gap-3 uppercase"><svg xmlns="http://www.w3.org/2000/svg" fill="#ff5a00" class="w-4 h-4" viewBox="0 0 24 24"><path d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.11 0 2-.9 2-2V5c0-1.1-.89-2-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg> Dịch vụ seo tổng thể</a></li>
                            <li><a href="#" class="flex items-center gap-3 uppercase"><svg xmlns="http://www.w3.org/2000/svg" fill="#ff5a00" class="w-4 h-4" viewBox="0 0 24 24"><path d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.11 0 2-.9 2-2V5c0-1.1-.89-2-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg> Dịch vụ Backlink báo</a></li>
                            <li><a href="#" class="flex items-center gap-3 uppercase"><svg xmlns="http://www.w3.org/2000/svg" fill="#ff5a00" class="w-4 h-4" viewBox="0 0 24 24"><path d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.11 0 2-.9 2-2V5c0-1.1-.89-2-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg> Dịch vụ guest post</a></li>
                            <li><a href="#" class="flex items-center gap-3 uppercase"><svg xmlns="http://www.w3.org/2000/svg" fill="#ff5a00" class="w-4 h-4" viewBox="0 0 24 24"><path d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.11 0 2-.9 2-2V5c0-1.1-.89-2-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg> Dịch vụ book báo pr</a></li>
                        </ul>
                    </div>
                    <a href="#" class="flex items-center gap-[6px] whitespace-nowrap max-w-[190px] bg-[#FF5A00] py-3 px-6 shadow-xl rounded-full uppercase text-sm font-medium text-white">  <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.4 20.75H18.17C15.5788 20.4681 13.0893 19.5846 10.9 18.17C8.86618 16.8747 7.13938 15.1513 5.84 13.12C4.42216 10.925 3.53852 8.42823 3.26 5.83001C3.22816 5.52011 3.2596 5.20696 3.35243 4.90958C3.44525 4.6122 3.59752 4.33677 3.8 4.10001C3.99694 3.86008 4.24002 3.66211 4.51486 3.51782C4.78969 3.37354 5.09068 3.28587 5.4 3.26001H8C8.56312 3.26058 9.10747 3.46248 9.53476 3.82925C9.96205 4.19602 10.2441 4.70349 10.33 5.26001C10.425 5.97489 10.6028 6.67628 10.86 7.35001C11.0164 7.77339 11.0487 8.23264 10.9531 8.67375C10.8574 9.11485 10.6378 9.51947 10.32 9.84001L9.71 10.45C10.6704 11.9662 11.9587 13.2477 13.48 14.2L14.09 13.6C14.4105 13.2822 14.8152 13.0626 15.2563 12.9669C15.6974 12.8713 16.1566 12.9036 16.58 13.06C17.2545 13.3148 17.9556 13.4926 18.67 13.59C19.236 13.6751 19.7515 13.9638 20.1198 14.402C20.488 14.8403 20.6837 15.3978 20.67 15.97V18.37C20.67 18.9942 20.4227 19.593 19.9823 20.0353C19.5419 20.4776 18.9442 20.7274 18.32 20.73L18.4 20.75ZM8 4.75001H5.61C5.49265 4.75777 5.37809 4.78924 5.27325 4.84252C5.1684 4.8958 5.07545 4.96979 5 5.06001C4.92658 5.14452 4.871 5.24302 4.83663 5.34957C4.80226 5.45612 4.7898 5.56852 4.8 5.68001C5.04249 8.03679 5.83362 10.304 7.11 12.3C8.28664 14.1467 9.85332 15.7134 11.7 16.89C13.6973 18.1798 15.967 18.9878 18.33 19.25C18.4529 19.2569 18.5759 19.2383 18.6912 19.1953C18.8065 19.1522 18.9117 19.0857 19 19C19.1592 18.8368 19.2489 18.6181 19.25 18.39V16C19.2545 15.7896 19.1817 15.5848 19.0453 15.4244C18.9089 15.2641 18.7184 15.1593 18.51 15.13C17.6839 15.0189 16.8724 14.8177 16.09 14.53C15.9359 14.4724 15.7686 14.4596 15.6075 14.4933C15.4464 14.5269 15.2982 14.6055 15.18 14.72L14.18 15.72C14.0629 15.8342 13.912 15.9076 13.7499 15.9292C13.5877 15.9508 13.423 15.9195 13.28 15.84C11.1462 14.6342 9.37997 12.8715 8.17 10.74C8.08718 10.598 8.05402 10.4324 8.07575 10.2694C8.09748 10.1065 8.17286 9.95538 8.29 9.84001L9.29 8.84001C9.40468 8.72403 9.48357 8.57751 9.51726 8.41793C9.55095 8.25835 9.53802 8.09244 9.48 7.94001C9.19119 7.15799 8.98997 6.34637 8.88 5.52001C8.85519 5.30528 8.75133 5.10747 8.58865 4.96513C8.42597 4.82278 8.21613 4.7461 8 4.75001Z"
                                fill="#fff" />
                        </svg> Liên hệ tư vấn</a>
                </div>
                <div class="w-full h-[550px] hidden md:block">
                    <img src="{{ URL::asset('assets/images/shape_2-1.png') }}" class="w-full object-contain" alt="">
                </div>
            </div>
        </section>
        <section>
            <div class="w-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="fill-[#61CE70]" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3
                    c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3
                    c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
                </svg>
            </div>
            <div class="bg-[#61CE70]">
                <div class="grid grid-cols-1 md:grid-cols-12 px-[20px] max-w-[1390px] mx-auto place-items-center py-6">
                    <div class="col-span-4 p-4 text-center md:text-left">
                        <h3 class="text-white font-bold uppercase text-4xl md:text-2xl lg:text-4xl xl:text-5xl">HAPO DIGITAL </h3>
                        <h4 class="text-white font-bold text-xl lg:text-2xl xl:text-3xl ">Marketing Online Tổng Thể</h4>
                    </div>
                    <div class="col-span-8 md:border-l-2 border-white p-4">
                        <span class="text-white text-base lg:text-lg"><strong class="text-[#ff5a00]">HaPo Digital</strong>  là đơn vị Agency Marketing của Google, chúng tôi mong muốn đem lại giá trị bền vững cho doanh nghiệp của bạn. Hapo Digital tập trung vào đem lại giải pháp SEO hiệu quả cho doanh nghiệp, giúp doanh nghiệp tăng trưởng bền vững. Bạn có thể xem thêm dịch vụ bên dưới của chúng tôi để lựa chọn gói dịch vụ phù hợp. Nếu bạn có gì thắc mắc, vui lòng liên hệ theo số Hotline để được giải đáp.</span>
                    </div>
                </div>
                <div class=" text-center w-full  py-6">
                    <div class="ser relative">
                        <h3 class="text-white font-bold text-4xl md:text-5xl">DỊCH VỤ CỦA HAPODIGITAL</h3>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 xl:gap-12 px-[20px] md:px-[40px] my-10">
                    <div class="p-4 box flex flex-col gap-4 shadow-xl hover:shadow-2xl transition-all duration-200 ">
                        <div class="w-[58px] mx-auto">
                            <svg version="1.1" class="w-14 h-14 fill-[#ff5a00]" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 viewBox="0 0 512 512"  xml:space="preserve">
                       <style type="text/css">
                           .st0{fill:#FF5a00;}
                       </style>
                                <g>
                                    <path class="st0" d="M497.946,86.465c-7.768,0-14.055,6.285-14.055,14.054v312.41c-0.012,11.282-9.127,20.368-20.368,20.382H48.477
                               c-11.241-0.014-20.355-9.1-20.368-20.382V85.668L62.01,99.71c3.416,1.414,7.342,1.414,10.76,0l47.97-19.86l47.955,19.86
                               c3.417,1.414,7.342,1.414,10.76,0l47.941-19.86l47.943,19.86c3.416,1.414,7.329,1.414,10.746,0l48.01-19.86l48.052,19.86
                               c3.417,1.414,7.315,1.414,10.734,0l33.996-14.054v296.173c0,7.768,6.286,14.054,14.054,14.054s14.054-6.286,14.054-14.054V64.641
                               c0-4.693-2.333-9.072-6.244-11.679c-3.899-2.621-8.839-3.116-13.176-1.304l-48.052,19.86l-48.051-19.86
                               c-3.418-1.426-7.316-1.426-10.734,0l-48.01,19.846l-47.941-19.846c-3.418-1.426-7.344-1.426-10.762,0l-47.942,19.846L126.12,51.658
                               c-3.432-1.426-7.344-1.426-10.76,0L67.39,71.504L19.434,51.658c-4.351-1.798-9.279-1.317-13.19,1.29
                               C2.333,55.569,0,59.948,0,64.641V412.93c0,26.791,21.699,48.477,48.477,48.491h415.046c26.778-0.014,48.477-21.7,48.477-48.491
                               V100.52C512,92.75,505.701,86.465,497.946,86.465z"/>
                                    <path class="st0" d="M81.197,166.757v125.612H211.97V166.757H81.197z M189.488,269.888h-85.81v-80.649h85.81V269.888z"/>
                                    <rect x="260.351" y="166.564" class="st0" width="111.763" height="22.482"/>
                                    <rect x="260.351" y="222.673" class="st0" width="111.763" height="22.482"/>
                                    <rect x="260.351" y="278.808" class="st0" width="111.763" height="22.482"/>
                                    <rect x="81.197" y="334.916" class="st0" width="290.917" height="22.482"/>
                                </g>
                       </svg>
                        </div>

                        <h3 class="text-black uppercase text-center font-medium text-xl xl:text-2xl">Dịch vụ toplist</h3>
                        <span class="text-lg text-center">HapoDigital giúp doanh nghiệp xuất hiện tại các vị trí Top đầu (1, 2, 3,…) trong các bài viết review doanh nghiệp đã lên Top sẵn trên trang tìm kiếm của Google. Giúp doanh nghiệp tiếp cận lượng lớn khách hàng tiềm năng, đồng thời gia tăng độ uy tín cho thương hiệu của doanh nghiệp.</span>
                    </div>
                    <div class="p-4 box flex flex-col gap-4 shadow-xl hover:shadow-2xl transition-all duration-200 ">
                        <div class="w-[58px] mx-auto">
                            <svg fill="#FF5a00" class="w-14 h-14" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.706 9.663c0-1.394 1.162-1.931 3.025-1.931 2.713 0 6.156 0.831 8.869 2.294v-8.393c-2.956-1.181-5.906-1.631-8.863-1.631-7.231 0-12.050 3.775-12.050 10.087 0 9.869 13.55 8.269 13.55 12.525 0 1.65-1.431 2.181-3.419 2.181-2.95 0-6.763-1.219-9.756-2.844v8.031c3.079 1.329 6.396 2.017 9.75 2.025 7.413 0 12.519-3.188 12.519-9.6 0-10.637-13.625-8.731-13.625-12.744z"/>
                            </svg>
                        </div>

                        <h3 class="text-black uppercase text-center font-medium text-xl xl:text-2xl">DỊCH VỤ SEO TỔNG THỂ</h3>
                        <span class="text-lg text-center">Dịch vụ SEO tổng thể là một trong những gói dịch vụ SEO website chuyên nghiệp mà Hapo Digital cung cấp. Đây là giải pháp dịch vụ SEO mà các dự án quy mô lớn, hay các doanh nghiệp có nhu cầu quảng bá thương hiệu bền vững và lâu dài thông qua công cụ tìm kiếm giúp lên TOP hàng ngàn từ khóa.</span>
                    </div>
                    <div class="p-4 box flex flex-col gap-4 shadow-xl hover:shadow-2xl transition-all duration-200 ">
                        <div class="w-[58px] mx-auto">
                            <svg class="w-14 h-14" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none">

                                <g fill="#FF5a00">

                                    <path d="M6.75 9.5a.75.75 0 000 1.5h4.5a.75.75 0 000-1.5h-4.5zM6 12.75a.75.75 0 01.75-.75h2.5a.75.75 0 010 1.5h-2.5a.75.75 0 01-.75-.75z"/>

                                    <path fill-rule="evenodd" d="M7.25 2.5C6.56 2.5 6 3.06 6 3.75v3.5c0 .69.56 1.25 1.25 1.25h4.5c.69 0 1.25-.56 1.25-1.25v-3.5c0-.69-.56-1.25-1.25-1.25h-4.5zM7.5 7V4h4v3h-4z" clip-rule="evenodd"/>

                                    <path fill-rule="evenodd" d="M2.75 16h10.5a2.25 2.25 0 002.25-2.25V2.25A2.25 2.25 0 0013.25 0h-7.5A2.25 2.25 0 003.5 2.25V3.5h-.75A2.25 2.25 0 00.5 5.75v8A2.25 2.25 0 002.75 16zM14 2.25v11.5a.75.75 0 01-.75.75H4.872c.083-.235.128-.487.128-.75V2.25a.75.75 0 01.75-.75h7.5a.75.75 0 01.75.75zM2.75 14.5a.75.75 0 00.75-.75V5h-.75a.75.75 0 00-.75.75v8c0 .414.336.75.75.75z" clip-rule="evenodd"/>

                                </g>

                            </svg>

                        </div>

                        <h3 class="text-black uppercase text-center font-medium text-xl xl:text-2xl">DỊCH VỤ BACKLINK BÁO</h3>
                        <span class="text-lg text-center">Hapo Digital cung cấp giải pháp SEO Offpage hiệu quả từ nguồn backlink chất lượng nhất hiện nay là backlink báo. Chúng tôi cung cấp backlink từ gần 40 trang báo lớn giúp tăng trust, tăng TOP khi mà SEO ONPage của bạn đã hoàn chỉnh. Số lượng backlink lớn, SEO hàng loạt từ khóa, GIÁ RẺ.</span>
                    </div>
                    <div class="p-4 box flex flex-col gap-4 shadow-xl hover:shadow-2xl transition-all duration-200 ">
                        <div class="w-[58px] mx-auto">
                            <svg class="w-14 h-14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4265 1.18077C11.7709 0.939744 12.2291 0.939744 12.5735 1.18077L22.5735 8.18077C22.8408 8.3679 23 8.67369 23 9V16C23 16.3263 22.8408 16.6321 22.5735 16.8192L12.5735 23.8192C12.2291 24.0603 11.7709 24.0603 11.4265 23.8192L1.42654 16.8192C1.15921 16.6321 1 16.3263 1 16V9C1 8.67369 1.15921 8.3679 1.42654 8.18077L11.4265 1.18077ZM3 10.9207V14.0793L5.25621 12.5L3 10.9207ZM7 13.7207L3.74379 16L11 21.0793V16.5207L7 13.7207ZM13 16.5207V21.0793L20.2562 16L17 13.7207L13 16.5207ZM18.7438 12.5L21 14.0793V10.9207L18.7438 12.5ZM20.2562 9L17 11.2793L13 8.47934V3.92066L20.2562 9ZM11 3.92066V8.47934L7 11.2793L3.74379 9L11 3.92066ZM12 10.2207L8.74379 12.5L12 14.7793L15.2562 12.5L12 10.2207Z" fill="#FF5a00"/>
                            </svg>
                        </div>

                        <h3 class="text-black uppercase text-center font-medium text-xl xl:text-2xl">DỊCH VỤ BACKLINK SOCIAL</h3>
                        <span class="text-lg text-center">HaPo Digital là đơn vị hàng đầu trong tư vấn chiến lược seo và backlink cho khách hàng hiện nay. Với kinh nghiệm hơn 5 năm trong việc xây dựng hệ thống 500 backlink Social Entity kết hợp với PR Báo đã thúc đẩy hàng nghìn website đạt thứ hạng cao. Backlink Social chất lượng cao, DA, PA trên 50.</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-10 xl:gap-20 px-[20px] max-w-[1390px] mx-auto py-10">
                    <div class="p-4 box flex flex-col gap-4 shadow-xl hover:shadow-2xl transition-all duration-200 ">
                        <div class="w-[58px] mx-auto">
                            <svg fill="#ff5a00" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 class="w-14 h-14" viewBox="0 0 440.624 440.624"
                                 xml:space="preserve">
                       <g>
                           <path d="M428.153,85.991H12.471C5.587,85.991,0,91.578,0,98.462v243.7c0,6.881,5.587,12.471,12.471,12.471h415.682
                               c6.881,0,12.471-5.59,12.471-12.471v-243.7C440.624,91.578,435.045,85.991,428.153,85.991z M121.768,315.681l-49.115-34.447
                               l49.115-34.445V315.681z M166.085,315.681v-68.899l49.115,34.44L166.085,315.681z M366.841,286.562
                               c-13.201,0-23.906-10.698-23.906-23.899s10.705-23.906,23.906-23.906s23.906,10.705,23.906,23.906S380.042,286.562,366.841,286.562
                               z M304.58,325.015c-13.201,0-23.906-10.698-23.906-23.899s10.705-23.906,23.906-23.906s23.906,10.705,23.906,23.906
                               S317.781,325.015,304.58,325.015z M398.018,191.474c0,6.884-5.584,12.471-12.471,12.471H48.841
                               c-6.884,0-12.471-5.587-12.471-12.471V133.28c0-6.884,5.587-12.471,12.471-12.471h336.706c6.887,0,12.471,5.587,12.471,12.471
                               V191.474z"/>
                       </g>
                       </svg>
                        </div>

                        <h3 class="text-black uppercase text-center font-medium text-xl lg:text-2xl">DỊCH VỤ PR BÁO</h3>
                        <span class="text-lg text-center">HapoDigital cung cấp đầy đủ các báo: Dantri.com.vn, Vnexpress.net, 24hcom.vn, Zing.vn, Kenh14.vn,... Book bài PR trên các trang báo điện tử có 1 vai trò rất lớn giúp cho doanh nghiệp có cơ hội tiếp cận đến một lượng lớn người tiêu dùng, bạn đọc, tăng thương hiệu, GIÚP SEO hiệu quả.</span>
                    </div>
                    <div class="p-4 box flex flex-col gap-4 shadow-xl hover:shadow-2xl transition-all duration-200 ">
                        <div class="w-[58px] mx-auto">
                            <svg fill="#ff5a00" class="w-14 h-14" viewBox="0 -32 576 576" xmlns="http://www.w3.org/2000/svg"><path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"/></svg>

                        </div>

                        <h3 class="text-black uppercase text-center font-medium text-xl lg:text-2xl">DỊCH VỤ GUEST POST</h3>
                        <span class="text-lg text-center">Với 100 GUEST POST chất lượng cao cho tất cả lĩnh vực SEO, HaPo Digital tự hào là đơn vị cung cấp GUEST POST lớn trên thị trường hiện nay. Các GUEST POST chúng tôi cung cấp có chỉ số PA, DA cao trên 15, traffic lớn, số lượng từ khóa lên TOP lớn nên nhận được sự tin tưởng từ Google</span>
                    </div>
                    <div class="p-4 box flex flex-col gap-4 shadow-xl hover:shadow-2xl transition-all duration-200 ">
                        <div class="w-[58px] mx-auto">
                            <svg fill="#ff5a00" class="w-14 h-14" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <title>search-plus</title>
                                <path d="M30.885 29.115l-10.103-10.103c1.538-1.911 2.468-4.368 2.468-7.042 0-6.229-5.050-11.279-11.279-11.279s-11.279 5.050-11.279 11.279c0 6.229 5.050 11.279 11.279 11.279 2.674 0 5.13-0.93 7.063-2.485l-0.022 0.017 10.103 10.103c0.226 0.226 0.539 0.366 0.884 0.366 0.691 0 1.251-0.56 1.251-1.251 0-0.345-0.14-0.658-0.366-0.884l0 0zM3.25 12c0-4.832 3.918-8.75 8.75-8.75s8.75 3.918 8.75 8.75c0 4.832-3.918 8.75-8.75 8.75v0c-4.83-0.005-8.745-3.92-8.75-8.749v-0.001zM16 10.75h-2.75v-2.75c0-0.69-0.56-1.25-1.25-1.25s-1.25 0.56-1.25 1.25v0 2.75h-2.75c-0.69 0-1.25 0.56-1.25 1.25s0.56 1.25 1.25 1.25v0h2.75v2.75c0 0.69 0.56 1.25 1.25 1.25s1.25-0.56 1.25-1.25v0-2.75h2.75c0.69 0 1.25-0.56 1.25-1.25s-0.56-1.25-1.25-1.25v0z"></path>
                            </svg>
                        </div>

                        <h3 class="text-black uppercase text-center font-medium text-xl lg:text-2xl">DỊCH VỤ SEO AUDIT</h3>
                        <span class="text-lg text-center">Dịch vụ SEO Audit website chuyên nghiệp, uy tín, chất lượng giải quyết vấn đề rủi ro khi Google upadte thuật toán. Website của bạn sẽ trở nên thân thiện hơn trên công cụ tìm kiếm. Các chuyên gia SEO hàng đầu trên thế giới khuyến khích thực hiện SEO Audit mỗi 6 tháng/lần.</span>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="fill-[#61CE70]" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                    c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                    c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
        </section>
        <section>
            <div class=" text-center w-full  py-6">
                <div class="ser relative">
                    <h3 class="text-black font-bold text-4xl md:text-5xl">TẠI SAO CHỌN DỊCH VỤ CỦA HAPODIGITAL</h3>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-8 place-items-center px-[20px] max-w-[1390px] mx-auto my-10">
                <div class="flex flex-col gap-4 order-last lg:order-first">
                    <div class="flex items-center gap-4">
                        <div class="w-[57px]">
                            <svg class="w-14 h-14" viewBox="0 0 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="M9.979 12.011l-1.573 1.583-0.312 0.312c-0.917 0.906-2.198 1.219-3.364 0.927-0.22 0.959-1.074 1.667-2.094 1.667-1.177 0-2.136-0.959-2.136-2.146 0-1.009 0.698-1.864 1.646-2.082-0.302-1.178 0.010-2.47 0.927-3.386l0.125-0.125 1.573 1.584-0.114 0.114c-0.521 0.51-0.51 1.343 0 1.863 0.51 0.511 1.344 0.511 1.854 0l0.313-0.312 1.573-1.584 1.677-1.666 1.573 1.584-1.668 1.667zM8.219 3.365l-1.583 1.582-0.126-0.125c-0.51-0.51-1.344-0.51-1.854 0-0.51 0.511-0.51 1.355 0 1.865l3.552 3.552-1.572 1.583-1.677-1.667-1.573-1.582-0.313-0.312c-0.959-0.948-1.25-2.313-0.886-3.532-0.958-0.208-1.666-1.062-1.666-2.083 0-1.188 0.959-2.146 2.136-2.146 1.073 0 1.948 0.781 2.114 1.792 1.156-0.271 2.417 0.053 3.323 0.947l0.125 0.126zM14.625 4.771c0.344 1.197 0.041 2.541-0.906 3.489l-0.125 0.125-1.573-1.584 0.125-0.124c0.51-0.511 0.51-1.345 0-1.855-0.51-0.51-1.344-0.51-1.854 0l-3.563 3.564-1.583-1.584 1.677-1.667 1.583-1.582 0.302-0.313c0.948-0.947 2.302-1.25 3.511-0.895 0.145-1.043 1.041-1.845 2.125-1.845 1.177 0 2.136 0.959 2.136 2.146-0.001 1.083-0.813 1.979-1.855 2.125zM14.364 16.5c-1.041 0-1.906-0.739-2.104-1.719-1.208 0.374-2.594 0.084-3.552-0.875l-0.114-0.125 1.573-1.583 0.125 0.124c0.51 0.511 1.344 0.511 1.854 0 0.51-0.51 0.51-1.343 0-1.854l-0.312-0.313-3.251-3.249 1.583-1.584 3.25 3.251 0.303 0.312c0.906 0.906 1.229 2.188 0.937 3.354 1.042 0.146 1.844 1.032 1.844 2.114 0 1.188-0.958 2.147-2.136 2.147z" fill="#78A936" />
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <h3 class="text-2xl text-[#FF5A00] uppercase font-medium">BÀI BẢN TRONG QUY TRÌNH</h3>
                            <span >Chúng tôi nghiên cứu, phân tích và tư vấn, cùng bạn tìm ra những giải pháp Digital Marketing, chú trọng trên Google đem lại hiệu quả cho doanh nghiệp.</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-[57px]">
                            <svg fill="#78A936" class="w-14 h-14" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <title>sketch</title>
                                <path d="M7.797 12.251l8.164 17.103 8.241-17.103zM16 29.434l-0.039-0.071-0.010 0.015zM30.996 12.251h-5.631l-9.401 17.108 0.036 0.075zM24.435 3.504l1.042 7.898 5.518 0.85zM1.004 12.251l14.944 17.124 0.010-0.017-9.402-17.106zM7.565 3.504l-6.561 8.747 5.518-0.85zM16 2.566l-8.435 0.937v7.357zM16 2.566l-7.56 8.747h15.121zM16 2.566l8.435 8.294v-7.357z"></path>
                            </svg>

                        </div>
                        <div class="flex flex-col">
                            <h3 class="text-2xl text-[#FF5A00] uppercase font-medium">TỔNG THỂ TRONG GIẢI PHÁP</h3>
                            <span >Lấy Google làm nền tảng trọng tâm, HaPo Digital giúp bạn triển khai hệ thống SEO tổng thể để tối ưu chi phí, phát triển doanh thu/lợi nhuận/thương hiệu doanh nghiệp một cách bền vững.</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-[57px]">
                            <svg fill="#78A936" class="w-14 h-14" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <title>atom</title>
                                <path d="M29.207 8.375c-1.167-2.020-3.979-2.715-7.56-2.158-1.308-3.38-3.315-5.467-5.647-5.467-2.34 0-4.353 2.104-5.66 5.505-0.211-0.033-0.437-0.095-0.644-0.12-3.389-0.406-5.837 0.392-6.902 2.24-1.067 1.849-0.531 4.369 1.511 7.099 0.132 0.177 0.308 0.35 0.451 0.527-0.143 0.176-0.319 0.35-0.451 0.527-2.042 2.729-2.578 5.25-1.512 7.098 1.039 1.447 2.717 2.379 4.613 2.379 0.228 0 0.453-0.013 0.674-0.040l-0.027 0.003c0.581-0.002 1.152-0.038 1.712-0.109l-0.068 0.007c0.207-0.025 0.432-0.087 0.644-0.12 1.307 3.401 3.32 5.505 5.66 5.505 2.333 0 4.342-2.091 5.65-5.476 0.672 0.116 1.45 0.186 2.243 0.194l0.008 0c0.196 0.024 0.423 0.037 0.653 0.037 1.908 0 3.599-0.931 4.642-2.365l0.011-0.016c1.166-2.019 0.361-4.802-1.913-7.625 2.274-2.822 3.078-5.605 1.913-7.625zM24.004 8.524c1.529 0 2.621 0.377 3.039 1.101 0.549 0.953-0.018 2.62-1.472 4.5-0.781-0.748-1.618-1.459-2.496-2.118l-0.070-0.051c-0.151-1.274-0.359-2.397-0.634-3.493l0.040 0.188c0.473-0.073 1.024-0.119 1.585-0.127l0.009-0zM18.375 20.113c-0.789 0.455-1.583 0.868-2.374 1.238-0.781-0.364-1.575-0.776-2.376-1.238-0.789-0.455-1.543-0.937-2.259-1.437-0.075-0.858-0.116-1.752-0.116-2.677s0.041-1.819 0.116-2.677c0.716-0.5 1.47-0.981 2.259-1.437v-0.001c0.806-0.465 1.602-0.867 2.387-1.233 0.787 0.369 1.578 0.78 2.363 1.234v-0.001c0.801 0.462 1.554 0.945 2.259 1.439 0.075 0.858 0.116 1.751 0.116 2.675s-0.041 1.817-0.116 2.675c-0.706 0.494-1.459 0.976-2.259 1.439zM20.146 21.961c-0.063 0.297-0.132 0.584-0.204 0.865-0.285-0.080-0.573-0.166-0.867-0.261 0.183-0.101 0.368-0.182 0.551-0.288 0.179-0.103 0.346-0.211 0.521-0.316zM12.891 22.558c-0.28 0.090-0.56 0.181-0.835 0.258-0.072-0.284-0.141-0.573-0.205-0.872 0.179 0.108 0.342 0.228 0.524 0.333 0.173 0.1 0.344 0.185 0.516 0.281zM8.763 16.585c-0.215-0.194-0.429-0.388-0.631-0.585 0.201-0.197 0.416-0.39 0.631-0.585-0.003 0.196-0.013 0.387-0.013 0.585s0.010 0.389 0.013 0.585zM11.851 10.053c0.064-0.299 0.133-0.587 0.205-0.87 0.274 0.077 0.552 0.167 0.831 0.257-0.171 0.095-0.341 0.182-0.512 0.281-0.182 0.105-0.345 0.225-0.524 0.333zM19.077 9.435c0.294-0.095 0.58-0.178 0.865-0.258 0.071 0.281 0.14 0.566 0.203 0.861-0.175-0.105-0.342-0.213-0.52-0.316v-0.001c-0.181-0.105-0.366-0.185-0.548-0.286zM23.237 15.42c0.214 0.194 0.433 0.387 0.631 0.58-0.198 0.193-0.417 0.386-0.631 0.58 0.003-0.194 0.013-0.383 0.013-0.58s-0.010-0.386-0.013-0.58zM16 3.25c1.101 0 2.264 1.32 3.165 3.521-1.285 0.377-2.347 0.77-3.377 1.225l0.175-0.069c-0.835-0.371-1.878-0.752-2.949-1.069l-0.194-0.049c0.903-2.225 2.074-3.559 3.181-3.559zM4.959 9.625c0.409-0.709 1.524-1.094 3.084-1.094 0.481 0.002 0.952 0.033 1.414 0.092l-0.057-0.006c0.061 0.007 0.128 0.027 0.189 0.036-0.238 0.92-0.448 2.055-0.586 3.213l-0.013 0.13c-0.935 0.706-1.761 1.412-2.542 2.165l0.009-0.008c-0.046-0.059-0.107-0.117-0.151-0.176-1.364-1.823-1.868-3.449-1.348-4.351zM9.4 23.383c-2.264 0.27-3.922-0.105-4.442-1.008-0.52-0.9-0.016-2.527 1.349-4.35 0.044-0.059 0.106-0.118 0.152-0.177 0.773 0.744 1.598 1.45 2.464 2.106l0.069 0.050c0.15 1.287 0.361 2.423 0.639 3.531l-0.040-0.189c-0.061 0.008-0.129 0.028-0.189 0.036zM16 28.75c-1.107 0-2.278-1.334-3.181-3.559 1.266-0.367 2.31-0.748 3.323-1.188l-0.177 0.069c0.857 0.385 1.921 0.775 3.014 1.098l0.192 0.049c-0.901 2.208-2.067 3.532-3.169 3.532zM27.043 22.375c-0.551 0.952-2.277 1.3-4.634 0.979 0.236-0.91 0.445-2.034 0.583-3.181l0.013-0.13c0.948-0.709 1.785-1.42 2.577-2.177l-0.010 0.009c1.455 1.879 2.022 3.547 1.472 4.5zM16 12.75c-1.795 0-3.25 1.455-3.25 3.25s1.455 3.25 3.25 3.25c1.795 0 3.25-1.455 3.25-3.25v0c-0.002-1.794-1.456-3.248-3.25-3.25h-0zM16 16.75c-0.414 0-0.75-0.336-0.75-0.75s0.336-0.75 0.75-0.75c0.414 0 0.75 0.336 0.75 0.75v0c-0.001 0.414-0.336 0.749-0.75 0.75h-0z"></path>
                            </svg>

                        </div>
                        <div class="flex flex-col">
                            <h3 class="text-2xl text-[#FF5A00] uppercase font-medium">MINH BẠCH TRONG TRIỂN KHAI</h3>
                            <span >Các dự án thực hiện với khách hàng đều có báo cáo cụ thể, kế hoạch chi tiết thống nhất báo cáo hàng tháng giữa 2 bên.</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-[57px]">
                            <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 class="w-14 h-14" viewBox="0 0 512 512"  xml:space="preserve">
<style type="text/css">
    .st0{fill:#78A936;}
</style>
                                <g>
                                    <path class="st0" d="M117.443,416.762c-6.141,6.125-16.078,6.125-22.203,0.016l0,0c-6.141-6.141-6.141-16.079,0-22.219
		l116.547-116.547c6.141-6.125,16.078-6.125,22.203,0l0,0c6.125,6.125,6.125,16.063,0,22.203L117.443,416.762z"/>
                                    <path class="st0" d="M167.318,197.699l-60.047,82.125c0,0-11.406-9.781-34.797-6.719c-34.578,4.516-49.25,44.547-56.547,52.781
		c-7.547,5.188-31.641-46.313-0.125-93.734C69.037,152.058,167.318,197.699,167.318,197.699z"/>
                                    <path class="st0" d="M314.303,344.699l-82.125,60.031c0,0,9.766,11.391,6.703,34.797c-4.516,34.578-44.531,49.234-52.781,56.547
		c-5.172,7.531,46.328,31.641,93.734,0.125C359.943,442.965,314.303,344.699,314.303,344.699z"/>
                                    <path class="st0" d="M465.068,168.402c17.266-38.844,17.531-78.328-1.969-104.859c0.188-0.172,0.375-0.359,0.547-0.547
		c30.484-30.469,51.906-58.453,47.859-62.5s-32.047,17.375-62.516,47.844c-0.188,0.188-0.359,0.359-0.547,0.547
		c-26.5-19.484-65.969-19.234-104.766-2.016c14.047,22.672,32.094,45.75,53.906,67.547
		C419.365,136.199,442.428,154.355,465.068,168.402z"/>
                                    <path class="st0" d="M380.053,131.949c-23.531-23.547-43.172-48.5-58.422-73.359c-12.641,7.859-24.953,17.438-36.391,28.875
		c-37.391,37.375-175.297,219.813-175.297,219.813l24.609,24.609l65.547-65.563c12.563-12.563,33.016-12.563,45.578,0
		s12.563,33,0,45.563l-65.563,65.563l24.609,24.609c0,0,182.422-137.922,219.813-175.297c11.469-11.469,21.063-23.813,28.938-36.5
		C428.6,174.996,403.631,155.496,380.053,131.949z M295.334,216.667c-15.063-15.063-15.063-39.469,0-54.531s39.469-15.063,54.531,0
		s15.063,39.469,0,54.531S310.396,231.73,295.334,216.667z"/>
                                </g>
</svg>

                        </div>
                        <div class="flex flex-col">
                            <h3 class="text-2xl text-[#FF5A00] uppercase font-medium">CAM KẾT HIỆU QUẢ TỐI ĐA</h3>
                            <span >HaPo Digital luôn cố gắng đối với từng dự án. Các dịch vụ của chúng tôi đều đạt hiệu quả tốt nhất và được khách hàng hài lòng. Có cam kết KPIs cụ thể.</span>
                        </div>
                    </div>
                </div>
                <div class="w-full md:h-[340px] lg:h-[550px] order-first lg:order-last">
                    <img src="{{ URL::asset('assets/images/phn.png') }}" class="w-full object-contain" alt="">
                </div>
            </div>
        </section>
        <section>
            <div class="banner">
                <div class="overlay">

                </div>
                <div class="flex flex-col relative z-10 py-10 smd:py-20">
                    <div class="text-center  text-white text-2xl xl:text-4xl  font-medium ">
                        THÀNH QUẢ 3 NĂM CỦA HAPODIGITAL
                    </div>
                    <div class="text-center py-6">
                        <div class="star-rating" title="5/5" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating"><i class="star-full">★</i><i class="star-full">★</i><i class="star-full">★</i><i class="star-full">★</i><i class="star-full">★</i>
                        </div>
                    </div>
                    <div class="text-center">
                        <span class="text-white text-lg font-medium">HAPO DIGITAL hân hạnh được phục vụ!</span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 place-items-center gap-y-6 md:gap-20 py-10 px-[20px] max-w-[1390px] mx-auto">
                        <div class="flex flex-col justify-center items-center">
                            <h3 class="text-5xl text-white font-bold">+3</h3>
                            <span class="text-xl text-white font-medium text-center">Năm tư vấn và triển khai</span>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <h3 class="text-5xl text-white font-bold">39+</h3>
                            <span class="text-xl text-white font-medium text-center">Nhân sự chuyên gia</span>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <h3 class="text-5xl text-white font-bold">3000+</h3>
                            <span class="text-xl text-white font-medium text-center">Khách hàng lớn nhỏ</span>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <h3 class="text-5xl text-white font-bold">6500+</h3>
                            <span class="text-xl text-white font-medium text-center">Chiến dịch backlink được triển khai</span>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <h3 class="text-5xl text-white font-bold">3.000.000+</h3>
                            <span class="text-xl text-white font-medium text-center">Backlink được thiết lập</span>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <h3 class="text-5xl text-white font-bold">95%</h3>
                            <span class="text-xl text-white font-medium text-center">Khách hàng hài lòng</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section>
            <div class=" grid grid-cols-1 lg:grid-cols-2 max-w-[1390px] mx-auto place-items-center px-[20px] my-10">
                <div class="w-full md:h-[340px] lg:h-[550px]">
                    <img src="{{ URL::asset('assets/images/quest.jpg') }}" class="w-full object-contain" alt="">
                </div>
                <div class="flex flex-col bg-[#fcf7fc] rounded-[10px] p-4 md:p-8">
                    <span class="mb-[10px] text-[#4cca8d] font-medium text-xl md:text-2xl">FAQ</span>
                    <h3 class="text-2xl md:text-4xl font-medium py-4">Câu hỏi thường gặp</h3>
                    <span class="text-[#0c1636] text-base md:text-xl">Một số câu hỏi thường gặp khi mua traffic user tại
                        TrafficSEO</span>
                    <ul class="quest my-4">
                        <li class="active" data-key="0"><a href="javascript:void(0)" class="flex items-center gap-4"><svg
                                    fill="#0c1636" class="w-4 h-4" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 330 330" xml:space="preserve">
                                    <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                           c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                           s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                </svg> Traffic User là gì?</a>
                            <div class="answer">
                                <div class="p-12 py-4 text-xl">Traffic user là lượt truy cập được tạo nên từ lượt người dùng thật truy cập vào website của bạn bằng cách tìm từ khóa từ Google.</div>
                            </div>
                        </li>
                        <li data-key="1"><a href="javascript:void(0)" class="flex items-center gap-4"><svg fill="#0c1636"
                                                                                                           class="w-4 h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                                                                           xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330"
                                                                                                           xml:space="preserve">
                                    <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                           c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                           s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                </svg>Traffic User có an toàn không?</a>
                            <div class="answer">


                            </div>
                        </li>
                        <li data-key="2"><a href="javascript:void(0)" class="flex items-center gap-4"><svg fill="#0c1636"
                                                                                                           class="w-4 h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                                                                           xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330"
                                                                                                           xml:space="preserve">
                                    <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                           c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                           s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                </svg>Nguồn traffic từ đâu?</a>
                            <div class="answer">

                            </div>
                        </li>
                        <li  data-key="3"><a href="javascript:void(0)" class="flex items-center gap-4"><svg fill="#0c1636"
                                                                                                            class="w-4 h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330"
                                                                                                            xml:space="preserve">
                                    <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                           c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                           s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                </svg>Chạy bao nhiêu traffic user là đủ?</a>
                            <div class="answer">

                            </div>
                        </li>
                        <li  data-key="4"><a href="javascript:void(0)" class="flex items-center gap-4"><svg fill="#0c1636"
                                                                                                            class="w-4 h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330"
                                                                                                            xml:space="preserve">
                                    <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                           c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                           s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                </svg>Mua traffic user giá bao nhiêu?</a>
                            <div class="answer">

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <div class="px-[20px] max-w-[1390px] mx-auto">
                <div class=" text-center w-full  py-6">
                    <div class="ser relative">
                        <h3 class="text-black font-bold text-4xl md:text-5xl">HAPO DIGITAL MARKETING TIPS</h3>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-8 md:gap-y-[35px] my-10">
                    <div class="card">
                        <div class="w-full h-[200px] md:h-[240px] lg:h-[308px]">
                            <a href="#"><img src="{{ URL::asset('assets/images/thiet-ke-website-thi-trac-nghiem-1.png')  }}" class="w-full" alt=""></a>
                        </div>
                        <div class="p-2 flex flex-col">
                            <div class="py-4">
                                <a href="#"><h2 class="text-lg font-bold line-clamp-2">Dịch vụ thiết kế website thi trắc nghiệm uy tín, hiệu quả cao</h2></a>
                                <span class="line-clamp-2 text-sm">Thi trắc nghiệm qua hình thức online quá quen thuộc với giáo viên và học sinh trong vài năm trở lại đây. Có thể thấy</span>
                            </div>
                            <a href="#" class="font-medium uppercase text-sm text-[#FF5A00]">Xem thêm >></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="w-full h-[200px] md:h-[240px] lg:h-[308px]">
                            <a href="#"><img src="{{ URL::asset('assets/images/thiet-ke-website-3d-6.png')  }}" class="w-full" alt=""></a>
                        </div>
                        <div class="p-2 flex flex-col">
                            <div class="py-4">
                                <a href="#"><h2 class="text-lg font-bold line-clamp-2">Thiết kế website 3D | 360 độ | Thực tế ảo tăng cường độc đáo</h2></a>
                                <span class="line-clamp-2 text-sm">Hiện nay, thiết kế website 3D đã không còn quá xa lạ, website đã là một phần quan trọng không thể thiếu của mỗi đơn</span>
                            </div>
                            <a href="#" class="font-medium uppercase text-sm text-[#FF5A00]">Xem thêm >></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="w-full h-[200px] md:h-[240px] lg:h-[308px]">
                            <a href="#"><img src="{{ URL::asset('assets/images/thiet-ke-website-quan-ly-nhan-su-4.png')  }}" class="w-full" alt=""></a>
                        </div>
                        <div class="p-2 flex flex-col">
                            <div class="py-4">
                                <a href="#"><h2 class="text-lg font-bold line-clamp-2">Thiết kế website quản lý nhân sự chuyên nghiệp, khoa học</h2></a>
                                <span class="line-clamp-2 text-sm">Nhân sự được xem là yếu tố quan trọng và tiên quyết, ảnh hưởng đến sự thành công của mọi doanh nghiệp. Vậy nên với</span>
                            </div>
                            <a href="#" class="font-medium uppercase text-sm text-[#FF5A00]">Xem thêm >></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="w-full h-[200px] md:h-[240px] lg:h-[308px]">
                            <a href="#"><img src="{{ URL::asset('assets/images/thiet-ke-website-me-va-be-3.jpg')  }}" class="w-full" alt=""></a>
                        </div>
                        <div class="p-2 flex flex-col">
                            <div class="py-4">
                                <a href="#"><h2 class="text-lg font-bold line-clamp-2">Thiết kế website mẹ và bé đẹp mắt, thu hút hàng triệu khách hàng</h2></a>
                                <span class="line-clamp-2 text-sm">Thực tế các sản phẩm cho mẹ và bé luôn chiếm một phần không nhỏ trong chi tiêu gia đình. Đây cũng chính là lý</span>
                            </div>
                            <a href="#" class="font-medium uppercase text-sm text-[#FF5A00]">Xem thêm >></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="w-full h-[200px] md:h-[240px] lg:h-[308px]">
                            <a href="#"><img src="{{ URL::asset('assets/images/thiet-ke-website-may-tinh-2.png')  }}" class="w-full" alt=""></a>
                        </div>
                        <div class="p-2 flex flex-col">
                            <div class="py-4">
                                <a href="#"><h2 class="text-lg font-bold line-clamp-2">Dịch vụ thiết kế website máy tính uy tín, khoa học, dễ tiếp cận</h2></a>
                                <span class="line-clamp-2 text-sm">Ngày nay, máy tính được xem là dòng thiết bị mang tính công nghệ phát triển và hiện đại. Vì vậy việc thiết kế website</span>
                            </div>
                            <a href="#" class="font-medium uppercase text-sm text-[#FF5A00]">Xem thêm >></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="w-full h-[200px] md:h-[240px] lg:h-[308px]">
                            <a href="#"><img src="{{ URL::asset('assets/images/thiet-ke-website-xe-may-4.jpg') }}" class="w-full" alt=""></a>
                        </div>
                        <div class="p-2 flex flex-col">
                            <div class="py-4">
                                <a href="#"><h2 class="text-lg font-bold line-clamp-2">Dịch vụ thiết kế website xe máy uy tín tại HapoDigital</h2></a>
                                <span class="line-clamp-2 text-sm">Thiết kế website xe máy là dịch vụ đặc thù dành cho các công ty, cửa hàng, cá nhân kinh doanh xe máy. Nhằm nâng</span>
                            </div>
                            <a href="#" class="font-medium uppercase text-sm text-[#FF5A00]">Xem thêm >></a>
                        </div>
                    </div>
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

