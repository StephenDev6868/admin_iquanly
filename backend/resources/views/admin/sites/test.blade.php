<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>

        :root {
            --black:#000000;
            --white:#FFFFFF;

            --main-color-1: #222;
            --sub-color-1: #e93314;
            --text-color-1:#FFFFFF;
            --sub-bg-color-1: #292929;
            --active-head-1:#999;
            --bg-direct-1: #f5f5f5;
            --bg-comment-1:#e5e7eb;

            --main-color-2:#0088cb;
            --sub-color-2: #252525;
            --sub-bg-color-2: #161b2b;
            --head-color-2:#091524;
            --text-main-color-2:#FFFFFF;
            --text-sub-color-2:#d0d0d0;
            --bg-slider-2: #fbf8f5;
            --text-au-color-2: #777;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: var(--white);
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }

        .sticky > .content {
            padding-top: 102px;
        }

        .h01-menu{
            background-color: var(--main-color-1);
            color: var(--text-color-1);
            padding: 10px 30px;
            font-size: 18px;
            font-weight: bold;
            min-width: 100%;

        }

        .h01-menu-lap{
            background-color: var(--main-color-1);
            color: var(--text-color-1);
        }

        .subMenu-01 {
            color: var(--sub-bg-color-1);
            font-size: 18px;
            font-weight: bold;
        }
        .subMenu-01 .active {
            color: var(--active-head-1);
            background-color: unset;
        }

        .sub-item{
            position: absolute;
            left:0;
            top:18px;
            opacity: 0;
            z-index: -5;
            min-width: 180px;
            display: none;
        }

        .subMenu:hover{
            opacity: 0.7;
            transition: 0.5s all;
        }
        .has-sub:hover svg{
            transform: rotate(-180deg);
            transition: 0.3s all;
        }
        .has-sub:hover .sub-item{
            opacity: 1;
            transition: 0.5s all;
            z-index: 11;
            display: block;
        }

        .deactive{
            opacity:0;
            transition: 0.5s ease-in-out;
        }
        .activeMenu{
            opacity: 1;
            transition: 0.5s ease-in-out;
            z-index: 11;
        }
        .unde-01{
            border-color: var(--sub-color-1);
            position:absolute;
            top:-2px;
        }

        .active-01:nth-child(2){
            border-radius: 0 0 0 0;
        }
        .active-01:nth-child(3){
            border-radius: 0 0 0 0;
        }
        .active-01:last-child{
            border-radius: 0 5px 5px 0;
        }
        .svgColor-01{
            fill: var(--sub-color-1);
            cursor: pointer;
        }
        .bgNew-01{
            background-color: var(--main-color-1);
            color: var(--text-color-1);
            text-align: center;
            font-size: 14px;
            font-weight: 500;
        }
        .bgPopular-01{
            background-color: var(--main-color-1);
            color: var(--text-color-1);
            text-align: center;
            font-size: 14px;
            font-weight: 500;
        }
        .bgNew-01:hover{
            background-color: var(--sub-color-1);
        }
        .title-01{
            color:var(--main-color-1);
            font-size: 24px;
            font-weight: bold;
            text-transform:capitalize;
        }
        .title-sub-01{
            color: var(--sub-bg-color-1);
            font-size: 16px;
            font-weight: 600;
        }

        .title-post-01{
            color:var(--main-color-1);
            font-size: 18px;
            font-weight: bold;
            text-transform:capitalize;
            cursor: pointer;
        }
        .title-post-01:hover{
            color: var(--sub-color-1);
        }
        .title-post-new-01{
            color:var(--main-color-1);
            font-size: 14px;
            font-weight: bold;
            text-transform:capitalize;
            cursor: pointer;
        }
        .title-post-new-01:hover{
            color: var(--sub-color-1);
        }

        .content-01{
            color:var(--sub-bg-color-1);
            font-size: 14px;
            font-weight: 400;
            text-transform:capitalize;
        }
        .content-01 span{
            color:var(--active-head-1);
            font-size: 15px;
            font-weight: 600;
        }
        .content-price-01{
            color:var(--active-head-1);
            font-size: 15px;
            font-weight: bold;
        }
        p{
            color:var(--active-head-1);
            font-size: 15px;
            font-weight: 600;
            line-height: 25px;
        }

        .day-01{
            color:var(--sub-bg-color-1);
            font-size: 12px;
            font-weight: 600;
            text-transform:uppercase;
        }
        .day-01 p{
            font-style: italic;
            font-size: 11px;
        }
        .count-01{
            color:var(--sub-bg-color-1);
            font-size: 12px;
            font-weight: 600;
        }
        .author-01{
            color: var(--main-color-1);
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .tag-01{
            color:var(--main-color-1);
            font-size: 20px;
            font-weight: bold;
            text-transform:capitalize;
        }
        img:hover{
            opacity: 0.7;
            transition: 0.5s all;
            cursor: pointer;
        }

        .sub-direct-01{
            font-size: 16px;
            font-weight: bold;
            color:var(--active-head-1);
            background-color: var(--bg-direct-1);
        }
        .sub-direct-01 span{
            color:var(--sub-color-1)
        }
        .sub-direct-01 a:hover{
            color:var(--main-color-1)
        }
        .sub-direct-01 .active{
            color:var(--main-color-1)
        }
        .sub-cate-01{
            color: var(--active-head-1);
            font-weight: bold;
            border-color: var(--active-head-1);
        }
        .sub-cate-01:hover{
            color: var(--main-color-1);
        }
        .pagination-01{
            color: var(--text-color-1);
            background-color: var(--main-color-1);
        }
        .pagination-01 li:hover{
            background-color: var(--sub-color-1);
        }

        .content-post-01 p:first-child:first-letter{
            float: left;
            color: var(--sub-color-1);
            font-size: 80px;
            line-height: 50px;
            padding:14px 8px 0 0;

            font-family: Georgia, serif;
        }
        .detail-product-01{
            background-color: var(--bg-direct-1);
        }
        .button-cart-01{
            background-color: var(--main-color-1);
            color:var(--text-color-1);
            text-transform: uppercase;
            font-weight: bold;
        }
        .button-reply-01{
            background-color: var(--main-color-1);
            color:var(--text-color-1);
            text-transform: uppercase;
            font-weight: bold;
        }
        .button-cart-01:hover{
            background-color: var(--sub-color-1);
        }
        .button-cart-01:hover > svg {
            fill: var(--text-color-1);
        }
        .button-cart-01 p{
            color:var(--text-color-1);
            text-transform: uppercase;
            font-weight: bold;
        }
        .button-reply-01 p{
            color:var(--text-color-1);
            text-transform: uppercase;
            font-weight: bold;
        }
        .button-reply-01 p:hover{
            color:var(--sub-color-1);
        }
        .button-load-01{
            color: var(--text-color-1);
            background-color: var(--main-color-1);
            transition: 0.5s ease-in-out;
        }
        .button-load-01:hover{
            background-color: var(--sub-color-1);
        }
        .cate-count-01{
            background-color: var(--sub-color-1);
            color:var(--text-color-1);
            font-size: 12px;
        }
        .subTitle-01{
            background-color: var(--sub-color-1);
            color:var(--text-color-1)
        }
        .label-img-01{
            background-color: var(--sub-color-1);
            color:var(--text-color-1)
        }
        .subTitle-01:hover{
            background-color: var(--main-color-1);
        }
        .rating-01 .fa{
            color: var(--sub-color-1)
        }

        strong {
            color: var(--sub-color-1)
        }
        .a01-button{
            background-color: var(--sub-color-1);
            color: var(--text-color-1);
            border:1px solid var(--text-color-1);
        }
        .a01-button svg:hover{
            fill: var(--text-color-1);
        }

        .f01-title{
            color:var(--text-color-1);
            font-size: 16px;
            font-weight:bold;
            text-transform:uppercase;
        }
        .f01-content{
            color:var(--text-color-1);
            font-size: 14px;
            font-weight:500;
        }
        .f01-button{
            background-color: var(--sub-color-1);
            color: var(--text-color-1);
            border:1px solid var(--text-color-1);
            font-size: 16px;
            font-weight:bold;
        }
        .f01-button:hover{
            background-color: var(--sub-bg-color-1);
            color: var(--text-color-1);
            transition: 0.3 all;
        }
        .f01-sub-bg{
            background-color: var(--sub-bg-color-1);
            color: var(--text-color-1)
        }
        .f01-bg {
            background-color: var(--main-color-1);
            color: var(--text-color-1)
        }
        .f01-bg p{
            color: var(--text-color-1)
        }
        .f01-policy{
            font-weight: bold;
        }
        .f01-policy a:hover{
            color: var(--sub-color-1)
        }
        .active-01{
            background-color: var(--sub-color-1);
            color: var(--text-color-1)
        }

        .rating-box-01 {
            display: inline-block;

        }
        .rating-container-01 {
            direction: rtl !important;

        }
        label {
            display: inline-block;
            margin: 15px 0;
            border-color: var(--sub-color-1);
            color: var(--sub-bg-color-1);
            cursor: pointer;
            font-size: 14px;
            transition: color 0.2s;
        }
        input[type="radio"] {
            display: none;
        }
        label:hover, label:hover ~ label, input:checked ~ label  {
            color: var(--sub-color-1);
        }
        .comment-01{
            background-color: var(--bg-comment-1);
        }
        .tip {
            width: 0px;
            height: 0px;
            position: absolute;
            background: transparent;
            border: 10px solid var(--bg-comment-1);
        }
        .tip-left {
            top: 25px;
            left: -20px;
            border-top-color: transparent;
            border-left-color: transparent;
            border-bottom-color: transparent;
        }
        .about-img-hotifer-01:before {
            font-family: Font Awesome\ 5 Pro;
            content: "\f10e";
            bottom: 30px;
            right: 20px;
            position: absolute;
            color: #fff;
            font-size: 19px;
            font-weight: bold;
        }
        .border-center-01::before{
            content: "";
            border-right: 1px solid var(--active-head-1);
        }
        .about-author-01{
            color: var(--text-color-1);
            font-weight: 500;
        }
        .about-author-01 h2{
            text-transform: capitalize;
            font-size: 18px;
        }
        .about-author-01 span{
            text-transform: uppercase;
            font-size: 12px;
        }
        .about-author-01 div{
            background-color: var(--text-color-1);
        }
        .about-author-01 div span{
            text-transform: uppercase;
            font-size: 12px;
            color: var(--main-color-1);
        }

        .intro-author-01{
            background-color: var(--bg-direct-1);
        }
        .intro-author-01 h2{
            color: var(--main-color-1);
            font-size: 18px;
            font-weight: bold;
        }
        .intro-author-01 .about-author-01{
            background-color: var(--text-color-1);
        }
        .intro-author-01 a:hover > span{
            color: var(--sub-color-1);
        }

        .follow-01 h3{
            color: var(--main-color-1);
            font-size: 16px;
            font-weight: bold;
        }

        .h02-menu{
            background-color: var(--white);
            color: var(--black);
            padding: 10px 30px;
            font-size: 20px;
            font-weight: 600;
            min-width: 100%;
        }

        .h02-menu-lap{
            background-color: var(--white);
            color: var(--head-color-2);
        }
        .h02-menu-lap li a:hover{
            color: var(--main-color-2);
            transition: 0.5s all;
        }
        .subMenu-02 {
            color: var(--head-color-2);
            font-size: 20px;
            font-weight: 500;
        }
        .has-sub-02 > svg{
            fill: var(--head-color-2);
        }

        .active .subMenu-02{
            color: var(--main-color-2)
        }
        .active .svgHead-02{
            fill: var(--main-color-2)
        }

        .has-sub-02:hover .subMenu-02{
            color: var(--main-color-2);
        }

        .sub-item-02{
            position: absolute;
            left:0;
            top:20px;
            opacity: 0;
            z-index: -5;
            transition: 0.5s all;
            min-width: 180px;
            display: none;
        }

        .has-sub-02:hover svg{
            fill: var(--main-color-2);
            transform: rotate(-180deg);
            transition: 0.3s all;
        }

        .has-sub-02:hover .sub-item-02{
            opacity: 1;
            transition: 0.5s all;
            z-index: 11;
            color: var(--main-color-2);
            fill: var(--main-color-2);
            display: block;
        }

        .deactive-02 > ul{
            opacity: 0;
            transition: 0.5s ease-in-out;
            top: -65px;
            z-index: -1;
        }
        .activeMenu-02{
            opacity: 1;
        }
        .activeMenu-02 > ul{
            transition: 0.5s ease-in-out;
            top: 50px;
            z-index: 11;
        }

        .title-02{
            color:var(--head-color-2);
            font-size: 40px;
            font-weight: 500;
            text-transform:capitalize;
        }
        .sub-title-02{
            color:var(--head-color-2);
            font-size: 24px;
            font-weight: 500;
        }
        .bg-slider-02{
            background-color: var(--bg-slider-2);
        }
        .unde-02{
            position:absolute;
            top:5px;
        }
        .under-02{
            border-color: var(--main-color-2);
            position:absolute;
            top:-2px;
        }
        .bg-white-02{
            background-color: var(--white);
        }
        .btn-view-02{
            background-color: var(--main-color-2);
            color:var(--text-main-color-2);
            font-weight:500;

        }
        .btn-view-02:hover{
            background-color: var(--black);
        }

        .infor-image-02 h2{
            font-size: 24px;
            color:var(--white);
            font-weight: 600;
        }

        .infor-image-02 h2 a{
            background-image: linear-gradient(to bottom, var(--white) 0%, var(--white) 100%);
            background-size: 0 1px;
            background-repeat: no-repeat;
            background-position: left 100%;
            transition: all 0.7s;
        }

        .infor-image-02 h2 a:hover{
            background-size: 100% 1px;
        }

        .infor-image-02 span{
            font-size: 16px;
            color:var(--white);
        }
        .infor-image-02 div > svg{
            fill:var(--white)
        }
        .infor-image-02 div span a{
            font-size: 16px;
        }
        .infor-image-02 div span a:hover{
            color:var(--main-color-2)
        }
        .infor-slider-02 h3{
            font-size: 20px;
            color:var(--black);
            font-weight: 500;
        }
        .infor-slider-02 span{
            font-size: 16px;
            color:var(--text-au-color-2);
        }
        .infor-slider-02 div > svg{
            fill:var(--text-au-color-2)
        }
        .infor-slider-02 h3 a{
            background-image: linear-gradient(to bottom, var(--black) 0%, var(--black) 100%);
            background-size: 0 1px;
            background-repeat: no-repeat;
            background-position: left 100%;
            transition: all 0.7s;
        }
        .infor-slider-02 h3 a:hover{
            background-size: 100% 1px;
        }
        .infor-slider-02 div span a:hover{
            color:var(--main-color-2)
        }

        .text-post-02 h2{
            color: var(--text-au-color-2);
            font-size: 20px;
            text-transform: uppercase;
        }

        .text-post-02 p a{
            background-image: linear-gradient(to bottom, var(--black) 0%, var(--black) 100%);
            background-size: 0 1px;
            background-repeat: no-repeat;
            background-position: left 100%;
            transition: all 0.7s;
        }

        .text-post-02 p a:hover{
            background-size: 100% 1px;
        }

        .text-post-02 p{
            color: var(--black);
            font-size: 18px;
        }
        .text-post-02 span{
            color: var(--text-au-color-2);
            font-size: 18px;
        }
        .text-post-02 span a:hover{
            color: var(--main-color-2);

        }
        .text-post-02 div > svg{
            fill:var(--text-au-color-2)
        }
        .icon-02 div h3{
            color:var(--sub-color-2);
            font-weight: 500;
            font-size: 16px;
        }
        .icon-02 div span{
            color:var(--text-sub-color-2);
            font-size: 18px;
            font-weight: 500;
        }
        .icon-02 .svg-02:hover{
            opacity: 0.7;
        }
        .view-more-02 svg{
            fill:var(--text-sub-color-2)
        }
        .view-more-02 span{
            color:var(--text-sub-color-2);
            font-size: 18px;
            text-transform: capitalize;
        }
        .view-more-02:hover span{
            color:var(--main-color-2);
            transition: 0.5s all;
        }
        .view-more-02:hover svg{
            fill:var(--main-color-2);
            transition: 0.5s all;
        }

        .text-cate-02 h2{
            color: var(--sub-color-2);
            font-size:24px;
            font-weight: 600;
        }
        .text-cate-02 h2 a{
            background-image: linear-gradient(to bottom, var(--black) 0%, var(--black) 100%);
            background-size: 0 1px;
            background-repeat: no-repeat;
            background-position: left 100%;
            transition: all 0.7s;
        }
        .text-cate-02 h2 a:hover{
            background-size: 100% 1px;
        }

        .text-cate-02 p{
            color: var(--text-au-color-2);
            font-size: 18px;
            font-weight: 400;
        }
        .text-cate-02 span{
            color: var(--text-au-color-2);
            font-size: 18px;
            text-transform: capitalize;
        }
        .text-cate-02 span a:hover{
            color: var(--main-color-2);

        }
        .text-cate-02 div > svg{
            fill: var(--text-au-color-2);
        }
        .text-img-cate-02{
            color: var(--white);
            text-transform: uppercase;
            font-weight: 600;
            font-size: 20px;
        }
        .text-img-cate-02 a strong{
            color: var(--white);
            font-size: 28px;
        }

        .main-img-02{
            position: relative;
        }
        .overlay-02 {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: var(--black);
            overflow: hidden;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-transition: .5s ease;
            transition: .5s ease;
            opacity: 0.5;
        }

        .overlay-02 svg{
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .main-img-02:hover .overlay-02{
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .sub-direct-02{
            font-size: 18px;
            background-color: var(--bg-slider-2);
        }
        .sub-direct-02 h2{
            font-size: 40px;
            font-weight: 600;
            color:var(--sub-color-2);
        }
        .sub-direct-02 a{
            color:var(--text-sub-color-2);
            font-weight:400;
        }
        .sub-direct-02 span{

            color:var(--sub-color-2);
            font-weight:500;
        }
        .about-02 p{
            color:var(--black);
            font-weight: 500;
            font-size: 18px;
            opacity: 0.7;
        }
        .about-02 h2{
            color:var(--sub-color-2);
            font-weight:500;
            font-size: 28px;
        }

        .about-02 ul li {
            list-style-type: disc;
            margin-left: 20px;
        }
        .about-02 ul li a{
            color:var(--sub-color-2);
            font-weight:600;
            font-size: 18px;

        }
        .about-02 ul li a:hover{
            color:var(--text-sub-color-2);
            transition: 0.5s all;
        }

        .search-02 svg:hover{
            fill:var(--main-color-2);
            transition: 0.5s all;
        }
        .text-comment-02 h2{
            font-weight: bold;
            text-transform: capitalize;
            font-size: 16px;
            color: var(--black);
        }
        .text-comment-02 span{
            font-size: 14px;
            color: var(--text-sub-color-2);
        }
        .text-comment-02 p{
            font-size: 18px;
            color: var(--sub-color-2);
            font-weight: 400;
        }
        .tag-02 li a{
            font-weight: 600;
            color: var(--text-au-color-2);
        }
        .tag-02 li:hover{
            background-color: var(--main-color-2);
            transition: 0.5s all;
        }
        .tag-02 li:hover > a{
            color: var(--text-main-color-2);
        }
        .infor-post-02 span a{
            font-size: 18px;
            font-weight: 500;
            color: var(--black);
        }
        .infor-post-02 h3{
            color: var(--black);
            font-size: 36px;
            font-weight: 600;
        }
        .infor-post-02 p{
            color: var(--text-au-color-2);
            font-size: 16px;
            font-weight: 400;
        }
        .infor-post-02 span {
            font-size: 18px;
            color: var(--text-au-color-2);
        }
        .infor-post-02 svg{
            fill: var(--text-au-color-2);
        }
        .infor-post-02 button{
            font-weight: 600;
            font-size: 20px;
        }
        .infor-post-02 h3 a:hover{
            color: var(--main-color-2);
            transition: 0.5s all;
        }
        .infor-post-02 button:hover{
            color: var(--text-main-color-2);
            background-color: var(--main-color-2);
            transition: 0.5s all;
        }
        .infor-post-02 h2{
            color: var(--sub-color-2);
            font-size: 24px;
            font-weight: 500;
        }
        .infor-post-detail-02 h3{
            color: var(--black);
            font-size: 36px;
            font-weight: 600;
        }
        .infor-post-detail-02 p{
            color: var(--text-au-color-2);
            font-size: 18px;
            font-weight: 400;
        }
        .infor-post-detail-02 ul li::marker{
            content: '✓';
            color: var(--sub-color-2);
        }
        .infor-post-detail-02 ul li a{
            font-size: 18px;
            font-weight: 500;
            color: var(--black);
        }
        .infor-post-detail-02 span{
            color: var(--text-au-color-2);
            font-size: 18px;
            font-weight: 400;
        }
        .infor-post-detail-02 span a:hover{
            color: var(--main-color-2);

        }
        .comment-02 h3{
            font-size: 18px;
            font-weight: 600;
            color: var(--black);
        }
        .comment-02 span{
            font-size: 16px;
            font-weight: 400;
            color: var(--text-au-color-2);
        }
        .comment-02 p{
            font-size: 18px;
            font-weight: 400;
            color: var(--text-au-color-2);
        }
        .comment-02 svg{
            fill:var(--text-au-color-2);
        }
        .comment-02 button{
            font-size: 18px;
            font-weight: 500;
            color: var(--text-au-color-2);
        }
        .comment-02 button:hover{
            color: var(--text-main-color-2);
            background-color: var(--main-color-2);
            transition: 0.5s all;
        }
        .rep-02{
            font-size: 20px;
            font-weight: 300;
            color: var(--text-au-color-2);
        }
        .rep-02 textarea{
            background-color: var(--bg-slider-2);
        }
        .rep-02 input{
            background-color: var(--bg-slider-2);
        }
        .rep-02 button{
            font-size: 18px;
            color: var(--text-main-color-2);
            background-color: var(--main-color-2);
        }
        .rep-02 button:hover{
            opacity: 0.7;
            transition: 0.5s all;
        }
        .rating-02 i{
            color: var(--main-color-2);
        }
        .tag-02 li > a svg {
            fill: var(--text-au-color-2);
        }
        .tag-02 li:hover > a svg {
            fill: var(--white);
        }
        .pagination-02 {
            font-weight: 600;
        }
        .pagination-02 ul li:hover{
            background-color: var(--main-color-2);
            transition: 0.5s all;
            border-color: var(--main-color-2);
        }
        .pagination-02 ul li:hover a{
            color: var(--text-main-color-2);
        }
        .pagination-02 button:hover{
            background-color: var(--main-color-2);
            transition: 0.5s all;
            color: var(--text-main-color-2);
            border-color: var(--main-color-2);
        }
        .product-02 {
            font-weight: 500;
        }
        .product-02 h3{
            font-size: 30px;
        }
        .product-02 h3:hover{
            color: var(--main-color-2);
        }
        .product-02 p{
            font-size: 18px;
            color: var(--text-au-color-2);
            font-weight: 400;
        }
        .product-02 span{
            font-size: 16px;
            color: var(--text-au-color-2);
            font-style: italic;
        }
        .product-02 h2{
            font-size: 20px;
        }
        .product-02 button:hover{
            background-color: var(--main-color-2);
            color: var(--text-main-color-2);
            transition: 0.5s all;
        }
        .product-02 svg{
            fill: var(--text-au-color-2);
        }
        .label-img-02{
            background-color: var(--main-color-2);
            color:var(--text-main-color-2)
        }
        .f02-title{
            color:var(--text-main-color-2);
            font-size: 24px;
            font-weight:600;
        }
        .f02-content{
            color:var(--text-main-color-2);
            font-size: 16px;
            font-weight:500;
        }
        .f02-content a{
            background-image: linear-gradient(to bottom, var(--main-color-2) 0%, var(--main-color-2) 100%);
            background-size: 0 1px;
            background-repeat: no-repeat;
            background-position: left 100%;
            transition: all 0.7s;
        }
        .f02-content a:hover{
            color: var(--main-color-2);
            background-size: 100% 1px;
            margin-left: 4px;
        }

        .f02-content-main{
            color:var(--text-sub-color-2);
            font-size: 16px;
            font-weight:500;
        }
        .f02-button{
            background-color: var(--main-color-2);
            color: var(--text-main-color-2);
            font-size: 12px;
            font-weight:bold;
        }
        .f02-button:hover{
            background-color: var(--black);
            transition: 0.3s all;
        }
        .f02-bg{
            background-color: var(--sub-bg-color-2)
        }
        .f02-bg-svg{
            background-color: var(--black);
        }
        .f02-bg-svg:hover{
            background-color: var(--main-color-2);
            transition: 0.3s all;
        }
        .f02-policy {
            color: var(--text-main-color-2);
            font-size: 18px;
            text-transform: capitalize;
        }
        .f02-policy a:hover{
            color: var(--main-color-2);
            transition: 0.5s all;
        }

        .a02-button{
            background-color: var(--main-color-2);
        }
        .rating-box-02 {
            display: inline-block;

        }
        .rating-container-02 {
            direction: rtl !important;

        }
        label {
            display: inline-block;
            margin: 15px 0;
            border-color: var(--sub-color-1);
            color: var(--sub-bg-color-1);
            cursor: pointer;
            font-size: 14px;
            transition: color 0.2s;
        }

        label:hover, label:hover ~ label, input:checked ~ label  {
            color: var(--main-color-2);
        }
    </style>
</head>
<body>
<button
    class="a01-button fixed right-[8px] bottom-[40px] rounded-md p-3 z-[1] opacity-0 transition-all duration-200" id="top-btn"
>
    <svg
        version="1.1"
        class="w-4 h-4"
        id="Capa_1"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px"
        y="0px"
        viewBox="0 0 384.923 384.923"
        xml:space="preserve"
    >
      <g>
          <path
              id="Arrow_Upward"
              d="M321.337,122.567L201.046,3.479c-4.776-4.728-12.391-4.547-17.179,0l-120.291,119.1
          c-4.74,4.704-4.74,12.319,0,17.011c4.752,4.704,12.439,4.704,17.191,0l99.551-98.552v331.856c0,6.641,5.438,12.03,12.151,12.03
          s12.151-5.39,12.151-12.03V41.025l99.551,98.552c4.74,4.704,12.439,4.704,17.179,0C326.089,134.886,326.089,127.27,321.337,122.567
          z"
          />
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
          <g></g>
      </g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
    </svg>
</button>
<header class="py-2 z-[10]" id="myHeader">
    <div class="flex justify-between items-center px-2 md:px-8 xl:px-[88px]">
        <div class="w-[34px] h-[34px]">
            <a href="/"
            ><img
                    src="../../../../public/admin/sites/img/1.jpg"
                    alt="logo"
                    class="w-[34px] h-[34px] object-cover"
                /></a>
        </div>
        <nav>
            <div class="deactive lg:hidden" id="menu-mobile">
                <ul class="absolute top-[50px] right-0 h01-menu">
                    <li class="has-sub active">
                        <span class="arrow"></span> <a href="/" class="">Trang chủ</a>
                    </li>
                    <li class="has-sub">
                        <span class="arrow"></span>
                        <a href="/content1/about.html" class="">Giới thiệu</a>
                    </li>
                    <li class="has-sub">
                        <span class="arrow"></span>
                        <a href="/content1/post.html" class=""> Bài viết</a>
                    </li>
                    <li class="has-sub">
                        <span class="arrow"></span>
                        <a href="/content1/shop.html"> Sản phẩm</a>
                    </li>
                    <li class="has-sub">
                        <span class="arrow"></span>
                        <a href="/content1/policy.html" class="">Điều khoản chính sách</a>
                    </li>
                </ul>
            </div>

            <div class="hidden lg:block">
                <ul class="flex items-center gap-4 subMenu-01 relative">
                    <li class="has-sub active flex items-center gap-2">
                        <a href="/" class="subMenu">Trang chủ</a>
                        <svg
                            version="1.1"
                            class="transition-all duration-500 w-2 h-2 svgColor-01"
                            id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            viewBox="0 0 386.257 386.257"
                            style="enable-background: new 0 0 386.257 386.257"
                            xml:space="preserve"
                        >
                  <polygon points="0,96.879 193.129,289.379 386.257,96.879 " />
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                </svg>

                        <div class="sub-item pt-5">
                            <ul class="h01-menu-lap px-2 py-4">
                                <li><a href="#">Sub-1</a></li>
                                <li><a href="#">Sub-2</a></li>
                                <li><a href="#">Sub-3</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="has-sub">
                        <span class="arrow"></span>
                        <a href="/content1/about.html" class="subMenu">Giới thiệu</a>
                    </li>
                    <li class="has-sub relative flex items-center gap-2">
                        <a href="/content1/post.html" class="subMenu"
                        > Bài viết</a
                        ><svg
                            version="1.1"
                            class=" transition-all duration-500 w-2 h-2 svgColor-01"
                            id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            viewBox="0 0 386.257 386.257"
                            style="enable-background: new 0 0 386.257 386.257"
                            xml:space="preserve"
                        >
                  <polygon points="0,96.879 193.129,289.379 386.257,96.879 " />
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                </svg>
                        <div class="sub-item pt-5">
                            <ul class="h01-menu-lap px-2 py-4">
                                <li><a href="/content1/author-single.html">Authors</a></li>
                                <li><a href="/content1/about.html">About us</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="has-sub relative flex items-center gap-2">
                        <a href="/content1/shop.html" class="subMenu"
                        > Sản phẩm</a
                        ><svg
                            version="1.1"
                            class="transition-all duration-500 w-2 h-2 svgColor-01"
                            id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            viewBox="0 0 386.257 386.257"
                            style="enable-background: new 0 0 386.257 386.257"
                            xml:space="preserve"
                        >
                  <polygon points="0,96.879 193.129,289.379 386.257,96.879 " />
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                </svg>
                        <div class="sub-item pt-5">
                            <ul class="h01-menu-lap px-2 py-4">
                                <li><a href="/content1/product-single.html">Chi tiết sản phẩm</a></li>
                                <li><a href="#">Giỏ hàng</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="has-sub">
                        <span class="arrow"></span>
                        <a href="/content1/policy.html" class="subMenu">Điều khoản chính sách</a>
                    </li>
                </ul>
            </div>
        </nav>

        <button
            class="border-[1px] rounded-md outline-none lg:hidden relative"
            onclick="showMenu()"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                x="0px"
                y="0px"
                width="30"
                height="30"
                viewBox="0 0 30 30"
                style="fill: #000000"
            >
                <path
                    d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z"
                ></path>
            </svg>
        </button>

    </div>
</header>



<script>
    window.onscroll = function () {
        myFunction();
    };

    var header = document.querySelector("#myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        let topBtn = document.querySelector("#top-btn");
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
        topBtn.onclick = () => window.scrollTo({ top: 0, behavior: "smooth" });
        if (window.scrollY > 500) {
            topBtn.style.opacity = 1;
        } else {
            topBtn.style.opacity = 0;
        }
    }

    function showMenu() {
        var menu = document.querySelector("#menu-mobile");
        if (menu.classList.contains("deactive")) {
            menu.classList.remove("deactive");
            menu.classList.add("activeMenu");
        } else {
            menu.classList.remove("activeMenu");
            menu.classList.add("deactive");
        }
    }
</script>
<script src="../../include.js"></script>
</body>
</html>
