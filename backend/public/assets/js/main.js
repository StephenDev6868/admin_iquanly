$(document).ready(function() {
    var arrQuest =[{
        title:`<div class="p-12 py-4 text-base md:text-xl">Traffic user là lượt truy cập được tạo nên từ lượt người dùng thật truy cập vào website của bạn bằng cách tìm từ khóa từ Google.</div>`
    },{
        title:`<div class="p-12 py-4 text-base md:text-xl">
        Đây là câu hỏi rất được nhiều bạn quan tâm. <br><br>

Để sử dụng Traffic User hiệu quả cần 2 yếu cố cơ bản sau: <br><br>
<ul>
<li class="list-disc ml-4"><span>Nguồn traffic chất lượng.</span></li>
<li  class="list-disc ml-4"><span>Cách triển khai traffic đúng quy trình.</span></li>
</ul>
<br>


Traffic User tại TrafficSEO.net cung cấp cam kết chất lượng và uy tín hàng đầu Việt Nam.
<br><br>

Để triển khai traffic đúng quy trình, hãy lên hệ ngay với chúng tôi để được tư vấn chi tiết hơn.
    </div>`
    },{
        title:`   <div class="p-12 py-4 text-base md:text-xl">Nguồn traffic user của TrafficSEO.net bán từ các website, youtube, facebook,… chia sẻ phần mềm, tài liệu,…</div>`
    },{
        title:` <div class="p-12 py-4 text-base md:text-xl">
        Không phải chạy nhiều traffic user là tốt và sẽ lên top. <br><br>

Để đạt hiệu quả tốt nhất thì nên chạy số traffic vừa đủ đối với từng từ khóa khác nhau. <br><br>

Vì mỗi keyword có một vollum khác nhau tùy vào từng thời điểm, nên cần phân tích số lượng cụ thể để chạy traffic trong 1 ngày, 1 tuần hoặc 1 tháng. <br><br>

Bạn có thể sử dụng công cụ phân tích của chúng tôi để xem từ khóa của bạn cần chạy bao nhiêu. <br><br>

Hoặc liên hệ với chúng tôi để được tư vấn chi tiết hơn.
    </div>`
    },{
        title:`<div class="p-12 py-4 text-base md:text-xl">
        Giá traffic user tại TrafficSEO xem chi tiết tại đây <br><br>

Hoặc liên hệ với chúng tôi để tư vấn chi tiết: <br><br>

<ul class="contact">
<li><span>Email: </span> <a href="#">info@trafficseo.net</a>
</li>
<li><span>Zalo: </span> <a href="#">0982.186.140</a>
</li>
<li><span>Telegram: </span> <a href="#">https://t.me/trafficseo_net</a>
</li>
<li><span>Facebook: </span> <a href="#">https://fb.me/trafficseo.net</a>
</li>
</ul>

    </div>`
    }
    ]
    $('.quest li').on('click', function(){
        $('.answer').html('');
        $('.quest li').removeClass('active');
        $(this).addClass('active');
        if($(this).hasClass('active')){
            for (let i = 0; i < arrQuest.length; i++) {
                if($(this).data('key') === i){
                    $(this).children(".answer").html(arrQuest[i].title)
                }
            }
        }

    })
    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots:true,
        arrows:false,
        autoplay: true,
        autoplaySpeed: 2000,
    });
})
