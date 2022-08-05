<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configs')->truncate();
        DB::table('configs')->insert([
            [
                'name' => 'header',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>',
                'js_handle' => '<script>
    window.onscroll = function () {
      myFunction();
    };

    var header = document.querySelector("#myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
      let topBtn = document.querySelector("#top-btn");
      if (window.pageYOffset > 200) {
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
      if (menu.classList.contains("deactive-02")) {
        menu.classList.remove("deactive-02");
        menu.classList.add("activeMenu-02");
      } else {
        menu.classList.remove("activeMenu-02");
        menu.classList.add("deactive-02");
      }
    }
  </script>',
                'html' => '<button class="a02-button fixed right-[8px] bottom-[40px] rounded-md p-3 z-[1] opacity-0 transition-all duration-200"
    id="top-btn">
    <svg version="1.1" class="w-4 h-4" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 384.923 384.923" style="fill: #ffffff"
      xml:space="preserve">
      <g>
        <path id="Arrow_Upward" d="M321.337,122.567L201.046,3.479c-4.776-4.728-12.391-4.547-17.179,0l-120.291,119.1
          c-4.74,4.704-4.74,12.319,0,17.011c4.752,4.704,12.439,4.704,17.191,0l99.551-98.552v331.856c0,6.641,5.438,12.03,12.151,12.03
          s12.151-5.39,12.151-12.03V41.025l99.551,98.552c4.74,4.704,12.439,4.704,17.179,0C326.089,134.886,326.089,127.27,321.337,122.567
          z" />
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
  <header class=" py-3 " id="myHeader">
    <div class="flex justify-between items-center px-2 md:px-8 xl:px-[120px]">
      <div class="w-[34px] h-[34px]">
        <a href="/"><img src="../img/1.jpg" alt="logo" class="w-[34px] h-[34px] object-cover" /></a>
      </div>
      <nav>
        <div class="deactive-02 lg:hidden" id="menu-mobile">
          <ul class="absolute top-[50px] right-0 h02-menu">
            <li class="has-sub-02 ">
              <span class="arrow"></span> <a href="./home.php" class="">Trang chủ</a>
            </li>
            <li class="has-sub-02">
              <span class="arrow"></span>
              <a href="./about.php" class="">Giới thiệu</a>
            </li>
            <li class="has-sub-02">
              <span class="arrow"></span>
              <a href="./post.php" class=""> Bài viết</a>
            </li>
            <li class="has-sub-02">
              <span class="arrow"></span>
              <a href="./product.php"> Sản phẩm</a>
            </li>
            <li class="has-sub-02">
              <span class="arrow"></span>
              <a href="./policy.php" class="">Điều khoản chính sách</a>
            </li>
          </ul>
        </div>

        <div class="hidden lg:block">
          <ul class="flex items-center gap-4 subMenu-02 relative">
            <li class="has-sub-02 active-02 flex items-center gap-2">
              <a href="./home.php" class="subMenu-02">Trang chủ</a>
              <svg version="1.1" class="svgHead-02 transition-all duration-500 w-2 h-2" id="Layer_1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 386.257 386.257" style="enable-background: new 0 0 386.257 386.257" xml:space="preserve">
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

              <div class="sub-item-02 pt-5">
                <ul class="h02-menu-lap px-2 py-4">
                  <li><a href="#">Sub-1</a></li>
                  <li><a href="#">Sub-2</a></li>
                  <li><a href="#">Sub-3</a></li>
                </ul>
              </div>
            </li>
            <li class="has-sub-02">
              <span class="arrow"></span>
              <a href="./about.php" class="subMenu-02">Giới thiệu</a>
            </li>
            <li class="has-sub-02 relative flex items-center gap-2">
              <a href="./post.php" class="subMenu-02"> Bài viết</a><svg version="1.1"
                class=" transition-all duration-500 w-2 h-2" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 386.257 386.257"
                style="enable-background: new 0 0 386.257 386.257" xml:space="preserve">
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
              <div class="sub-item-02 pt-5">
                <ul class="h02-menu-lap px-2 py-4">
                  <li><a href="./author.php">Tác giả</a></li>
                  <li><a href="./about.php">Về chúng tôi</a></li>
                </ul>
              </div>
            </li>
            <li class="has-sub-02 relative flex items-center gap-2">
              <a href="./product.php" class="subMenu-02"> Sản phẩm</a><svg version="1.1"
                class="transition-all duration-500 w-2 h-2" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 386.257 386.257"
                style="enable-background: new 0 0 386.257 386.257" xml:space="preserve">
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
              <div class="sub-item-02 pt-5">
                <ul class="h02-menu-lap px-2 py-4">
                  <li><a href="./product_single.php">Chi tiết sản phẩm</a></li>
                  <li><a href="#">Giỏ hàng</a></li>
                </ul>
              </div>
            </li>
            <li class="has-sub-02">
              <span class="arrow"></span>
              <a href="./policy.php" class="subMenu-02">Điều khoản chính sách</a>
            </li>
          </ul>
        </div>
      </nav>

      <button class="border-[1px] rounded-md outline-none lg:hidden relative" onclick="showMenu()">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 30 30"
          style="fill: #000000">
          <path
            d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z">
          </path>
        </svg>
      </button>
      <div class="hidden lg:block">
      </div>
    </div>
  </header>',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'footer',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'html' => '<footer>
    <div class="f02-bg py-5 px-2 md:px-8 xl:px-[120px]">
      <div class="flex flex-col lg:flex-row justify-start items-start lg:gap-4">
        <div class="py-5">
          <div class="w-[34px] h-[34px]">
            <img src="../img/1.jpg" class="object-cover w-full h-full" />
          </div>
          <p class="py-5 f02-content-main">
            We have lots of courses and programs from the main market experts.
          </p>
          <div class="py-2">
            <h3 class="pb-3 f02-content-main text-[16px]">
              Follow us
            </h3>
            <ul class="flex gap-2">
              <li class="p-3  rounded-full f02-bg-svg">
                <a href="#">
                  <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                    viewBox="0 0 24 24" style="fill: #ffffff">
                    <path
                      d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z">
                    </path>
                  </svg>
                </a>
              </li>
              <li class="p-3  rounded-full f02-bg-svg">
                <a href="#">
                  <svg version="1.1" class="w-4 h-4" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999"
                    style="fill: #ffffff" xml:space="preserve">
                    <g>
                      <g>
                        <path d="M507.77,96.789c-3.92-4.669-9.903-6.958-15.769-6.358c2.345-4.855,4.354-9.891,6.016-15.091
        c2.279-7.127-0.123-15.046-5.97-19.699c-5.849-4.662-14.103-5.232-20.545-1.416c-14.758,8.753-30.599,15.287-47.157,19.455
        c-21.035-18.575-48.714-29.128-76.82-29.128c-63.816,0-115.735,51.917-115.735,115.731c0,0.714,0.006,1.428,0.019,2.142
        c-64.801-8.793-124.951-42.372-166.494-93.332c-3.765-4.618-9.554-7.099-15.467-6.617C43.922,62.94,38.597,66.283,35.6,71.42
        c-10.258,17.603-15.68,37.727-15.68,58.199c0,18.054,4.218,35.74,12.145,51.67c-1.32,0.393-2.602,0.936-3.818,1.634
        c-5.477,3.138-8.967,9.007-9.111,15.299c-0.013,0.551-0.014,1.102-0.014,1.659c0,32.878,14.268,64.167,38.287,85.933
        c-3.841,4.722-5.072,11.157-3.206,16.976c9.946,31.053,32.666,56.265,61.702,69.726C92.746,383.153,67.381,388.7,41.425,388.7
        c-7.086,0-14.204-0.416-21.147-1.238c-8.439-1.004-16.336,3.885-19.202,11.89c-2.863,8,0.132,16.789,7.282,21.373
        c47.672,30.566,102.793,46.722,159.404,46.722c111.254,0,180.924-52.547,219.777-96.631
        c48.338-54.836,76.06-127.446,76.06-199.211c0-1.265-0.008-2.537-0.024-3.811c17.576-13.928,32.828-30.48,45.386-49.265
        C513.42,111.86,512.927,102.917,507.77,96.789z M447.131,154.728c-2.645,1.993-4.158,5.147-4.057,8.456
        c0.086,2.799,0.129,5.633,0.129,8.425c0,66.867-25.866,134.561-70.965,185.723c-36.075,40.928-100.834,89.716-204.475,89.716
        c-49.475,0-97.73-13.257-140.171-38.423c4.596,0.316,9.222,0.475,13.837,0.475c37.456,0,73.838-10.387,105.213-30.038
        c3.502-2.195,5.335-6.287,4.64-10.361c-0.697-4.075-3.783-7.326-7.816-8.234c-31.581-7.104-57.553-30.05-68.608-60.322
        c1.701,0.258,3.412,0.473,5.115,0.644c4.75,0.466,9.202-2.416,10.699-6.954c1.497-4.539-0.358-9.508-4.462-11.956
        c-28.06-16.734-45.763-46.996-46.651-79.439c3.985,2.013,8.121,3.766,12.341,5.228c4.347,1.505,9.163-0.084,11.758-3.882
        c2.597-3.797,2.33-8.861-0.651-12.365c-14.629-17.197-22.685-39.144-22.685-61.799c0-15.768,3.9-31.279,11.306-45.069
        c47.495,56.842,116.675,93.062,190.337,99.529c3.076,0.267,6.105-0.866,8.244-3.091s3.155-5.3,2.764-8.36
        c-0.519-4.065-0.782-8.219-0.782-12.344c0-52.566,42.768-95.332,95.336-95.332c24.725,0,49.052,9.914,66.741,27.198
        c2.46,2.403,5.965,3.408,9.323,2.665c18.548-4.087,36.34-10.801,52.975-19.987c-4.049,10.366-9.853,19.856-17.303,28.281
        c-3.006,3.399-3.405,8.376-0.978,12.211c2.426,3.835,7.097,5.607,11.453,4.344c6.018-1.74,11.985-3.781,17.819-6.092
        C476.151,129.269,462.58,143.088,447.131,154.728z" />
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M89.95,145.834c-2.153-1.605-4.298-3.258-6.377-4.91c-4.409-3.506-10.826-2.774-14.331,1.636
        c-3.505,4.409-2.773,10.825,1.636,14.331c2.241,1.782,4.554,3.564,6.874,5.294c1.832,1.366,3.97,2.025,6.091,2.025
        c3.11,0,6.182-1.418,8.183-4.102C95.394,155.592,94.465,149.203,89.95,145.834z" />
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M222.328,196.399c-36.715-3.223-73.142-14.6-105.344-32.9c-4.898-2.783-11.123-1.07-13.907,3.828
        c-2.783,4.898-1.07,11.123,3.828,13.907c34.73,19.738,74.026,32.009,113.639,35.487c0.304,0.026,0.605,0.04,0.904,0.04
        c5.229,0,9.682-4,10.148-9.309C232.088,201.84,227.939,196.892,222.328,196.399z" />
                      </g>
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
                </a>
              </li>
              <li class="p-3  rounded-full f02-bg-svg">
                <a href="#">
                  <svg version="1.1" class="w-4 h-4" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                    viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                    <g>
                      <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                 c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                      <path
                        d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                      <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                 C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                </a>
              </li>
              <li class="p-3  rounded-full f02-bg-svg">
                <a href="#">
                  <svg version="1.1" class="w-4 h-4" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 304.36 304.36"
                    style="fill: #ffffff" xml:space="preserve">
                    <g id="XMLID_1_">
                      <path id="XMLID_807_" style="fill-rule: evenodd; clip-rule: evenodd" d="M261.945,175.576c10.096,9.857,20.752,19.131,29.807,29.982
      c4,4.822,7.787,9.798,10.684,15.394c4.105,7.955,0.387,16.709-6.746,17.184l-44.34-0.02c-11.436,0.949-20.559-3.655-28.23-11.474
      c-6.139-6.253-11.824-12.908-17.727-19.372c-2.42-2.642-4.953-5.128-7.979-7.093c-6.053-3.929-11.307-2.726-14.766,3.587
      c-3.523,6.421-4.322,13.531-4.668,20.687c-0.475,10.441-3.631,13.186-14.119,13.664c-22.414,1.057-43.686-2.334-63.447-13.641
      c-17.422-9.968-30.932-24.04-42.691-39.971C34.828,153.482,17.295,119.395,1.537,84.353C-2.01,76.458,0.584,72.22,9.295,72.07
      c14.465-0.281,28.928-0.261,43.41-0.02c5.879,0.086,9.771,3.458,12.041,9.012c7.826,19.243,17.402,37.551,29.422,54.521
      c3.201,4.518,6.465,9.036,11.113,12.216c5.142,3.521,9.057,2.354,11.476-3.374c1.535-3.632,2.207-7.544,2.553-11.434
      c1.146-13.383,1.297-26.743-0.713-40.079c-1.234-8.323-5.922-13.711-14.227-15.286c-4.238-0.803-3.607-2.38-1.555-4.799
      c3.564-4.172,6.916-6.769,13.598-6.769h50.111c7.889,1.557,9.641,5.101,10.721,13.039l0.043,55.663
      c-0.086,3.073,1.535,12.192,7.07,14.226c4.43,1.448,7.35-2.096,10.008-4.905c11.998-12.734,20.561-27.783,28.211-43.366
      c3.395-6.852,6.314-13.968,9.143-21.078c2.096-5.276,5.385-7.872,11.328-7.757l48.229,0.043c1.43,0,2.877,0.021,4.262,0.258
      c8.127,1.385,10.354,4.881,7.844,12.817c-3.955,12.451-11.65,22.827-19.174,33.251c-8.043,11.129-16.645,21.877-24.621,33.072
      C252.26,161.544,252.842,166.697,261.945,175.576L261.945,175.576z M261.945,175.576" />
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
                </a>
              </li>
              <li class="p-3  rounded-full f02-bg-svg">
                <a href="#">
                  <svg version="1.1" class="w-4 h-4" id="Layer_1" xmlns="http://www.w3.org/2000/svgCapa_1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 50.141 50.141" style="fill: #ffffff" xml:space="preserve">
                    <g>
                      <path d="M44.092,12.485c-0.76-2.567-1.98-4.728-3.732-6.606c-1.713-1.837-3.684-3.23-6.026-4.259
      c-2.668-1.169-5.761-1.737-8.716-1.6c-1.078,0.049-2.131,0.106-3.163,0.255c-2.908,0.416-5.469,1.283-7.828,2.65
      C11.616,4.673,9.265,7.049,7.64,9.989c-0.844,1.53-1.675,4.228-2.028,5.99c-0.418,2.078-0.05,5.681,0.789,7.713
      c1.048,2.533,1.91,3.656,4.013,5.223c0.013,0.009,1.313,0.945,2.179,0.931c1.577-0.03,1.891-1.539,2.041-2.264
      c0.028-0.137,0.056-0.272,0.089-0.399c0.029-0.112,0.067-0.232,0.106-0.357c0.223-0.72,0.526-1.706,0.023-2.58
      c-0.189-0.328-0.413-0.583-0.61-0.807c-0.107-0.122-0.215-0.24-0.302-0.37c-0.748-1.111-1.127-2.501-1.127-4.131
      c0-2.139,0.484-4.077,1.481-5.923c1.808-3.349,4.808-5.462,8.677-6.114c2.202-0.369,4.768-0.214,6.693,0.402
      c1.759,0.564,3.256,1.561,4.33,2.886c1.137,1.402,1.787,3.18,1.931,5.286c0.094,1.344-0.028,2.698-0.129,3.597
      c-0.389,3.461-1.396,6.247-2.994,8.282c-1.309,1.67-2.72,2.507-4.315,2.561c-1.027,0.04-1.795-0.17-2.489-0.667
      c-0.655-0.467-1.045-1.043-1.229-1.81c-0.208-0.876,0.043-1.784,0.31-2.746l0.043-0.154c0.233-0.846,0.477-1.619,0.716-2.38
      c0.376-1.199,0.766-2.438,1.087-3.876c0.363-1.623,0.411-2.934,0.148-4.005c-0.324-1.33-1.039-2.326-2.125-2.962
      c-1.149-0.67-2.777-0.799-4.144-0.329c-2.037,0.695-3.591,2.545-4.264,5.075c-0.341,1.285-0.44,2.634-0.293,4.006
      c0.113,1.076,0.354,2.054,0.799,3.235c-0.015,0.051-0.031,0.105-0.047,0.157c-0.032,0.105-0.061,0.207-0.083,0.294
      c-0.479,2-0.945,3.972-1.41,5.94c-0.441,1.869-0.883,3.735-1.334,5.62l-0.102,0.422c-0.462,1.92-0.938,3.906-1.049,6.277
      l-0.05,0.99c-0.098,1.842-0.197,3.747,0.05,5.509c0.049,0.344,0.157,1.115,0.916,1.384c0.227,0.17,0.445,0.242,0.657,0.242
      c0.635,0,1.2-0.645,1.681-1.192c1.569-1.784,2.903-4.037,4.079-6.885c0.526-1.274,0.875-2.645,1.212-3.971l0.203-0.79
      c0.246-0.944,0.487-1.901,0.726-2.848l0.016-0.063c0.443,0.388,0.955,0.738,1.548,1.063c1.255,0.695,2.671,1.1,4.207,1.203
      c1.44,0.098,2.956-0.087,4.629-0.567c1.271-0.362,2.487-0.913,3.617-1.636c4.054-2.596,6.817-7.137,7.781-12.786
      c0.289-1.688,0.412-3.045,0.412-4.537C44.703,15.41,44.498,13.846,44.092,12.485z M42.32,21.332
      c-0.869,5.088-3.315,9.15-6.889,11.438c-0.966,0.619-2.005,1.088-3.09,1.398c-1.446,0.416-2.738,0.577-3.942,0.495
      c-1.261-0.085-2.364-0.398-3.379-0.96c-1.015-0.555-1.673-1.158-2.135-1.955l-1.226-2.118l-1.105,4.337
      c-0.237,0.941-0.477,1.893-0.722,2.832l-0.205,0.802c-0.335,1.315-0.65,2.558-1.123,3.7c-1.053,2.552-2.229,4.571-3.589,6.163
      c-0.106-1.355-0.026-2.875,0.052-4.352l0.051-1.002c0.101-2.182,0.556-4.073,0.995-5.902l0.103-0.425
      c0.451-1.886,0.893-3.755,1.335-5.625c0.465-1.967,0.93-3.937,1.408-5.932c0.014-0.056,0.034-0.122,0.055-0.191
      c0.12-0.403,0.245-0.82,0.076-1.243c-0.429-1.099-0.655-1.976-0.756-2.932c-0.12-1.13-0.041-2.234,0.238-3.282
      c0.498-1.873,1.583-3.22,2.979-3.696c0.346-0.119,0.708-0.169,1.056-0.169c0.567,0,1.093,0.136,1.431,0.333
      c0.607,0.356,0.997,0.914,1.19,1.71c0.185,0.756,0.133,1.797-0.156,3.094c-0.304,1.355-0.663,2.5-1.044,3.713
      c-0.246,0.782-0.495,1.576-0.735,2.446l-0.042,0.152c-0.308,1.109-0.656,2.366-0.328,3.744c0.298,1.248,0.956,2.22,2.011,2.974
      c1.048,0.749,2.278,1.084,3.72,1.039c2.191-0.074,4.149-1.193,5.821-3.325c1.831-2.332,2.978-5.458,3.409-9.295
      c0.108-0.978,0.241-2.452,0.137-3.957c-0.174-2.524-0.972-4.68-2.373-6.408c-1.319-1.627-3.143-2.848-5.273-3.531
      c-2.211-0.709-5.137-0.891-7.635-0.471c-4.5,0.758-7.994,3.225-10.106,7.136c-1.158,2.146-1.721,4.394-1.721,6.873
      c0,2.036,0.493,3.801,1.467,5.247c0.134,0.2,0.294,0.386,0.46,0.574c0.149,0.17,0.29,0.33,0.376,0.479
      c0.061,0.163-0.113,0.727-0.197,0.998c-0.047,0.153-0.092,0.3-0.128,0.437c-0.042,0.16-0.078,0.331-0.114,0.503
      c-0.039,0.188-0.099,0.479-0.162,0.639c-0.237-0.093-0.67-0.331-0.904-0.504c-1.797-1.338-2.456-2.199-3.358-4.382
      c-0.677-1.641-1.013-4.888-0.677-6.556c0.375-1.869,1.174-4.248,1.818-5.417c1.447-2.619,3.546-4.739,6.239-6.301
      c2.133-1.236,4.457-2.022,7.109-2.401c0.943-0.137,1.943-0.19,2.971-0.237c2.65-0.125,5.429,0.385,7.819,1.433
      c2.088,0.917,3.844,2.157,5.367,3.792c1.536,1.646,2.607,3.546,3.277,5.81c0.351,1.177,0.528,2.55,0.528,4.078
      C42.703,18.505,42.588,19.761,42.32,21.332z" />
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
                </a>
              </li>
            </ul>
          </div>

        </div>
        <div class="flex flex-col justify-start items-start gap-2 w-full">
          <h2 class="py-5 w-full f02-title">Categories</h2>

          <ul class="py-2 f02-content">
            <li>
              <a href="#">Politics</a>
            </li>
            <li>
              <a href="#">Politics</a>
            </li>
          </ul>
        </div>
        <div class="flex flex-col justify-start items-start gap-2 w-full">
          <h2 class="py-5 w-full f02-title">Quick links</h2>

          <ul class="py-2 f02-content">
            <li>
              <a href="#">Politics</a>
            </li>
            <li>
              <a href="#">Politics</a>
            </li>
          </ul>
        </div>
        <div class="flex flex-col justify-start items-start gap-2 w-full">
          <h2 class="py-5 w-full f02-title">Newsletter</h2>

          <p class="py-2 f02-content-main">
            Subscribe to our mailing list to
            get the new updates!
          </p>

          <div class="flex flex-col justify-between items-start w-full gap-2">
            <input type="email" placeholder="Enter your email"
              class="w-full p-3 rounded-sm border-b-[1px] bg-transparent text-white outline-none" />
            <button class="p-3 px-6 f02-button rounded-sm md:px-20 lg:px-6">
              Subscribe
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="f02-bg py-5 px-2 md:px-8 xl:px-[88px] border-t-[1px]">
      <div class="flex justify-between items-center flex-wrap gap-5">
        <p class="f02-policy">© 2022 All Copyright Reserved.</p>
        <div class="f02-policy flex justify-center items-center gap-4 ">
          <a href="#"> Terms & Conditions </a>
          <a href="#"> Privacy Policy </a>
        </div>
      </div>
    </div>
  </footer>',
                'js_handle' => '',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'home',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'html' => '<div class="content">
    <section>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 px-2 md:px-8 xl:px-[120px]">
        <div class="col-span-12 lg:col-span-6">
          <div class="slider h-[650px] md:h-[500px]">
            <section>
              <div class="h-[650px] md:h-[500px] relative bg-black">
                <div class="h-[300px] md:h-[500px]">
                  <img src="../img/1.jpg" class="w-full h-full object-cover" alt="" />
                </div>

                <div class="infor-image-02 md:absolute md:left-[25px] md:bottom-[25px] p-4">
                  <div class="p-1 px-3 bg-pink-500 w-[95px]">
                    <span class="uppercase text-white text-[16px]">Politics</span>
                  </div>
                  <div class="py-4 max-h-[145px] overflow-hidden ">
                    <h2 class="">
                      <a href="#" class="xl:text-[36px] font-bold">Well designed and well printed only for you and the
                        audience.
                      </a>
                    </h2>
                  </div>
                  <div class="flex justify-start items-center gap-4 flex-wrap">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[30px] h-[30px] rounded-full">
                        <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                      </div>
                      <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                        c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                        c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span>March 26, 2022</span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg class="w-5 h-5" viewBox="0 -2 28 28" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="m14 2c-.038 0-.083-.001-.128-.001-2.098 0-4.102.399-5.942 1.124l.11-.038c-1.74.644-3.217 1.645-4.4 2.922l-.007.007c-.99 1.036-1.608 2.436-1.633 3.98v.005c.013 1.258.432 2.415 1.131 3.351l-.011-.015c.835 1.131 1.885 2.053 3.096 2.719l.049.025 1.36.782-.426 1.498c-.272 1.021-.646 1.915-1.122 2.741l.029-.054c1.651-.691 3.071-1.59 4.313-2.686l-.017.014.672-.594.89.094c.607.077 1.312.122 2.028.125h.004c.038 0 .083.001.128.001 2.098 0 4.102-.399 5.942-1.124l-.11.038c1.74-.644 3.217-1.645 4.4-2.922l.007-.007c1.009-1.025 1.632-2.432 1.632-3.984s-.623-2.96-1.633-3.985l.001.001c-1.19-1.284-2.666-2.286-4.329-2.904l-.078-.025c-1.73-.687-3.735-1.086-5.833-1.086-.044 0-.088 0-.132.001h.007zm14 8c-.012 1.924-.72 3.681-1.884 5.033l.009-.01c-1.349 1.592-3.059 2.837-5.008 3.611l-.086.03c-2.023.846-4.374 1.337-6.839 1.337-.068 0-.135 0-.202-.001h.01c-.8-.002-1.588-.047-2.363-.134l.097.009c-1.981 1.759-4.399 3.072-7.069 3.756l-.118.026c-.503.145-1.107.266-1.726.339l-.055.005h-.08c-.163 0-.311-.062-.422-.164-.123-.111-.212-.258-.249-.424l-.001-.005v-.016c-.017-.029-.027-.064-.027-.102 0-.033.008-.063.021-.091l-.001.001c.02-.047.031-.101.031-.159 0-.001 0-.001 0-.002q-.008-.031.07-.149l.094-.141.11-.133.125-.141q.11-.125.484-.539l.539-.594q.164-.18.484-.617c.174-.231.343-.493.491-.767l.017-.033q.187-.359.422-.922c.137-.317.276-.712.39-1.117l.017-.07c-1.558-.861-2.852-2.018-3.844-3.405l-.024-.035c-.878-1.216-1.407-2.735-1.414-4.377v-.002c.012-1.924.72-3.681 1.884-5.033l-.009.01c1.349-1.592 3.059-2.837 5.008-3.611l.086-.03c2.023-.846 4.374-1.337 6.839-1.337.068 0 .135 0 .202.001h-.01c.057-.001.125-.001.192-.001 2.465 0 4.816.491 6.959 1.381l-.12-.044c2.034.804 3.745 2.048 5.078 3.622l.015.018c1.155 1.342 1.863 3.099 1.875 5.021v.003z" />
                      </svg>
                      <span>95 Comments</span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="h-[650px] md:h-[500px] relative bg-black">
                <div class="h-[300px] md:h-[500px]">
                  <img src="../img/3.jpg" class="w-full h-full object-cover" alt="" />
                </div>

                <div class="infor-image-02 md:absolute md:left-[25px] md:bottom-[25px] p-4">
                  <div class="p-1 px-3 bg-pink-500 w-[95px]">
                    <span class="uppercase text-white text-[16px]">Politics</span>
                  </div>
                  <div class="py-4 max-h-[145px] overflow-hidden ">
                    <h2 class="">
                      <a href="#" class="xl:text-[36px] font-bold">Well designed and well printed only for you and the
                        audience.
                      </a>
                    </h2>
                  </div>
                  <div class="flex justify-start items-center gap-4 flex-wrap">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[30px] h-[30px] rounded-full">
                        <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                      </div>
                      <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                        c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                        c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span>March 26, 2022</span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg class="w-5 h-5" viewBox="0 -2 28 28" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="m14 2c-.038 0-.083-.001-.128-.001-2.098 0-4.102.399-5.942 1.124l.11-.038c-1.74.644-3.217 1.645-4.4 2.922l-.007.007c-.99 1.036-1.608 2.436-1.633 3.98v.005c.013 1.258.432 2.415 1.131 3.351l-.011-.015c.835 1.131 1.885 2.053 3.096 2.719l.049.025 1.36.782-.426 1.498c-.272 1.021-.646 1.915-1.122 2.741l.029-.054c1.651-.691 3.071-1.59 4.313-2.686l-.017.014.672-.594.89.094c.607.077 1.312.122 2.028.125h.004c.038 0 .083.001.128.001 2.098 0 4.102-.399 5.942-1.124l-.11.038c1.74-.644 3.217-1.645 4.4-2.922l.007-.007c1.009-1.025 1.632-2.432 1.632-3.984s-.623-2.96-1.633-3.985l.001.001c-1.19-1.284-2.666-2.286-4.329-2.904l-.078-.025c-1.73-.687-3.735-1.086-5.833-1.086-.044 0-.088 0-.132.001h.007zm14 8c-.012 1.924-.72 3.681-1.884 5.033l.009-.01c-1.349 1.592-3.059 2.837-5.008 3.611l-.086.03c-2.023.846-4.374 1.337-6.839 1.337-.068 0-.135 0-.202-.001h.01c-.8-.002-1.588-.047-2.363-.134l.097.009c-1.981 1.759-4.399 3.072-7.069 3.756l-.118.026c-.503.145-1.107.266-1.726.339l-.055.005h-.08c-.163 0-.311-.062-.422-.164-.123-.111-.212-.258-.249-.424l-.001-.005v-.016c-.017-.029-.027-.064-.027-.102 0-.033.008-.063.021-.091l-.001.001c.02-.047.031-.101.031-.159 0-.001 0-.001 0-.002q-.008-.031.07-.149l.094-.141.11-.133.125-.141q.11-.125.484-.539l.539-.594q.164-.18.484-.617c.174-.231.343-.493.491-.767l.017-.033q.187-.359.422-.922c.137-.317.276-.712.39-1.117l.017-.07c-1.558-.861-2.852-2.018-3.844-3.405l-.024-.035c-.878-1.216-1.407-2.735-1.414-4.377v-.002c.012-1.924.72-3.681 1.884-5.033l-.009.01c1.349-1.592 3.059-2.837 5.008-3.611l.086-.03c2.023-.846 4.374-1.337 6.839-1.337.068 0 .135 0 .202.001h-.01c.057-.001.125-.001.192-.001 2.465 0 4.816.491 6.959 1.381l-.12-.044c2.034.804 3.745 2.048 5.078 3.622l.015.018c1.155 1.342 1.863 3.099 1.875 5.021v.003z" />
                      </svg>
                      <span>95 Comments</span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="h-[650px] md:h-[500px] relative bg-black">
                <div class="h-[300px] md:h-[500px]">
                  <img src="../img/1.jpg" class="w-full h-full object-cover" alt="" />
                </div>

                <div class="infor-image-02 md:absolute md:left-[25px] md:bottom-[25px] p-4">
                  <div class="p-1 px-3 bg-pink-500 w-[95px]">
                    <span class="uppercase text-white text-[16px]">Politics</span>
                  </div>
                  <div class="py-4 max-h-[145px] overflow-hidden ">
                    <h2 class="">
                      <a href="#" class="xl:text-[36px] font-bold">Well designed and well printed only for you and the
                        audience.
                      </a>
                    </h2>
                  </div>
                  <div class="flex justify-start items-center gap-4 flex-wrap">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[30px] h-[30px] rounded-full">
                        <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                      </div>
                      <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                        c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                        c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span>March 26, 2022</span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg class="w-5 h-5" viewBox="0 -2 28 28" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="m14 2c-.038 0-.083-.001-.128-.001-2.098 0-4.102.399-5.942 1.124l.11-.038c-1.74.644-3.217 1.645-4.4 2.922l-.007.007c-.99 1.036-1.608 2.436-1.633 3.98v.005c.013 1.258.432 2.415 1.131 3.351l-.011-.015c.835 1.131 1.885 2.053 3.096 2.719l.049.025 1.36.782-.426 1.498c-.272 1.021-.646 1.915-1.122 2.741l.029-.054c1.651-.691 3.071-1.59 4.313-2.686l-.017.014.672-.594.89.094c.607.077 1.312.122 2.028.125h.004c.038 0 .083.001.128.001 2.098 0 4.102-.399 5.942-1.124l-.11.038c1.74-.644 3.217-1.645 4.4-2.922l.007-.007c1.009-1.025 1.632-2.432 1.632-3.984s-.623-2.96-1.633-3.985l.001.001c-1.19-1.284-2.666-2.286-4.329-2.904l-.078-.025c-1.73-.687-3.735-1.086-5.833-1.086-.044 0-.088 0-.132.001h.007zm14 8c-.012 1.924-.72 3.681-1.884 5.033l.009-.01c-1.349 1.592-3.059 2.837-5.008 3.611l-.086.03c-2.023.846-4.374 1.337-6.839 1.337-.068 0-.135 0-.202-.001h.01c-.8-.002-1.588-.047-2.363-.134l.097.009c-1.981 1.759-4.399 3.072-7.069 3.756l-.118.026c-.503.145-1.107.266-1.726.339l-.055.005h-.08c-.163 0-.311-.062-.422-.164-.123-.111-.212-.258-.249-.424l-.001-.005v-.016c-.017-.029-.027-.064-.027-.102 0-.033.008-.063.021-.091l-.001.001c.02-.047.031-.101.031-.159 0-.001 0-.001 0-.002q-.008-.031.07-.149l.094-.141.11-.133.125-.141q.11-.125.484-.539l.539-.594q.164-.18.484-.617c.174-.231.343-.493.491-.767l.017-.033q.187-.359.422-.922c.137-.317.276-.712.39-1.117l.017-.07c-1.558-.861-2.852-2.018-3.844-3.405l-.024-.035c-.878-1.216-1.407-2.735-1.414-4.377v-.002c.012-1.924.72-3.681 1.884-5.033l-.009.01c1.349-1.592 3.059-2.837 5.008-3.611l.086-.03c2.023-.846 4.374-1.337 6.839-1.337.068 0 .135 0 .202.001h-.01c.057-.001.125-.001.192-.001 2.465 0 4.816.491 6.959 1.381l-.12-.044c2.034.804 3.745 2.048 5.078 3.622l.015.018c1.155 1.342 1.863 3.099 1.875 5.021v.003z" />
                      </svg>
                      <span>95 Comments</span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="h-[650px] md:h-[500px] relative bg-black">
                <div class="h-[300px] md:h-[500px]">
                  <img src="../img/3.jpg" class="w-full h-full object-cover" alt="" />
                </div>

                <div class="infor-image-02 md:absolute md:left-[25px] md:bottom-[25px] p-4">
                  <div class="p-1 px-3 bg-pink-500 w-[95px]">
                    <span class="uppercase text-white text-[16px]">Politics</span>
                  </div>
                  <div class="py-4 max-h-[145px] overflow-hidden ">
                    <h2 class="">
                      <a href="#" class="xl:text-[36px] font-bold">Well designed and well printed only for you and the
                        audience.
                      </a>
                    </h2>
                  </div>
                  <div class="flex justify-start items-center gap-4 flex-wrap">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[30px] h-[30px] rounded-full">
                        <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                      </div>
                      <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                        c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                        c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span>March 26, 2022</span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg class="w-5 h-5" viewBox="0 -2 28 28" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="m14 2c-.038 0-.083-.001-.128-.001-2.098 0-4.102.399-5.942 1.124l.11-.038c-1.74.644-3.217 1.645-4.4 2.922l-.007.007c-.99 1.036-1.608 2.436-1.633 3.98v.005c.013 1.258.432 2.415 1.131 3.351l-.011-.015c.835 1.131 1.885 2.053 3.096 2.719l.049.025 1.36.782-.426 1.498c-.272 1.021-.646 1.915-1.122 2.741l.029-.054c1.651-.691 3.071-1.59 4.313-2.686l-.017.014.672-.594.89.094c.607.077 1.312.122 2.028.125h.004c.038 0 .083.001.128.001 2.098 0 4.102-.399 5.942-1.124l-.11.038c1.74-.644 3.217-1.645 4.4-2.922l.007-.007c1.009-1.025 1.632-2.432 1.632-3.984s-.623-2.96-1.633-3.985l.001.001c-1.19-1.284-2.666-2.286-4.329-2.904l-.078-.025c-1.73-.687-3.735-1.086-5.833-1.086-.044 0-.088 0-.132.001h.007zm14 8c-.012 1.924-.72 3.681-1.884 5.033l.009-.01c-1.349 1.592-3.059 2.837-5.008 3.611l-.086.03c-2.023.846-4.374 1.337-6.839 1.337-.068 0-.135 0-.202-.001h.01c-.8-.002-1.588-.047-2.363-.134l.097.009c-1.981 1.759-4.399 3.072-7.069 3.756l-.118.026c-.503.145-1.107.266-1.726.339l-.055.005h-.08c-.163 0-.311-.062-.422-.164-.123-.111-.212-.258-.249-.424l-.001-.005v-.016c-.017-.029-.027-.064-.027-.102 0-.033.008-.063.021-.091l-.001.001c.02-.047.031-.101.031-.159 0-.001 0-.001 0-.002q-.008-.031.07-.149l.094-.141.11-.133.125-.141q.11-.125.484-.539l.539-.594q.164-.18.484-.617c.174-.231.343-.493.491-.767l.017-.033q.187-.359.422-.922c.137-.317.276-.712.39-1.117l.017-.07c-1.558-.861-2.852-2.018-3.844-3.405l-.024-.035c-.878-1.216-1.407-2.735-1.414-4.377v-.002c.012-1.924.72-3.681 1.884-5.033l-.009.01c1.349-1.592 3.059-2.837 5.008-3.611l.086-.03c2.023-.846 4.374-1.337 6.839-1.337.068 0 .135 0 .202.001h-.01c.057-.001.125-.001.192-.001 2.465 0 4.816.491 6.959 1.381l-.12-.044c2.034.804 3.745 2.048 5.078 3.622l.015.018c1.155 1.342 1.863 3.099 1.875 5.021v.003z" />
                      </svg>
                      <span>95 Comments</span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="h-[650px] md:h-[500px] relative bg-black">
                <div class="h-[300px] md:h-[500px]">
                  <img src="../img/2.jpg" class="w-full h-full object-cover" alt="" />
                </div>

                <div class="infor-image-02 md:absolute md:left-[25px] md:bottom-[25px] p-4">
                  <div class="p-1 px-3 bg-pink-500 w-[95px]">
                    <span class="uppercase text-white text-[16px]">Politics</span>
                  </div>
                  <div class="py-4 max-h-[145px] overflow-hidden ">
                    <h2 class="">
                      <a href="#" class="xl:text-[36px] font-bold">Well designed and well printed only for you and the
                        audience.
                      </a>
                    </h2>
                  </div>
                  <div class="flex justify-start items-center gap-4 flex-wrap">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[30px] h-[30px] rounded-full">
                        <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                      </div>
                      <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                        c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                        c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span>March 26, 2022</span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg class="w-5 h-5" viewBox="0 -2 28 28" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="m14 2c-.038 0-.083-.001-.128-.001-2.098 0-4.102.399-5.942 1.124l.11-.038c-1.74.644-3.217 1.645-4.4 2.922l-.007.007c-.99 1.036-1.608 2.436-1.633 3.98v.005c.013 1.258.432 2.415 1.131 3.351l-.011-.015c.835 1.131 1.885 2.053 3.096 2.719l.049.025 1.36.782-.426 1.498c-.272 1.021-.646 1.915-1.122 2.741l.029-.054c1.651-.691 3.071-1.59 4.313-2.686l-.017.014.672-.594.89.094c.607.077 1.312.122 2.028.125h.004c.038 0 .083.001.128.001 2.098 0 4.102-.399 5.942-1.124l-.11.038c1.74-.644 3.217-1.645 4.4-2.922l.007-.007c1.009-1.025 1.632-2.432 1.632-3.984s-.623-2.96-1.633-3.985l.001.001c-1.19-1.284-2.666-2.286-4.329-2.904l-.078-.025c-1.73-.687-3.735-1.086-5.833-1.086-.044 0-.088 0-.132.001h.007zm14 8c-.012 1.924-.72 3.681-1.884 5.033l.009-.01c-1.349 1.592-3.059 2.837-5.008 3.611l-.086.03c-2.023.846-4.374 1.337-6.839 1.337-.068 0-.135 0-.202-.001h.01c-.8-.002-1.588-.047-2.363-.134l.097.009c-1.981 1.759-4.399 3.072-7.069 3.756l-.118.026c-.503.145-1.107.266-1.726.339l-.055.005h-.08c-.163 0-.311-.062-.422-.164-.123-.111-.212-.258-.249-.424l-.001-.005v-.016c-.017-.029-.027-.064-.027-.102 0-.033.008-.063.021-.091l-.001.001c.02-.047.031-.101.031-.159 0-.001 0-.001 0-.002q-.008-.031.07-.149l.094-.141.11-.133.125-.141q.11-.125.484-.539l.539-.594q.164-.18.484-.617c.174-.231.343-.493.491-.767l.017-.033q.187-.359.422-.922c.137-.317.276-.712.39-1.117l.017-.07c-1.558-.861-2.852-2.018-3.844-3.405l-.024-.035c-.878-1.216-1.407-2.735-1.414-4.377v-.002c.012-1.924.72-3.681 1.884-5.033l-.009.01c1.349-1.592 3.059-2.837 5.008-3.611l.086-.03c2.023-.846 4.374-1.337 6.839-1.337.068 0 .135 0 .202.001h-.01c.057-.001.125-.001.192-.001 2.465 0 4.816.491 6.959 1.381l-.12-.044c2.034.804 3.745 2.048 5.078 3.622l.015.018c1.155 1.342 1.863 3.099 1.875 5.021v.003z" />
                      </svg>
                      <span>95 Comments</span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-6">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 xl:h-[500px]">
            <div class="col-span-12">
              <section>
                <div class="h-[450px] md:h-[250px] lg:h-[280px] bg-black relative">
                  <div class=" h-[130px] md:h-[250px] lg:h-[280px]">
                    <img src="../img/1.jpg" class="w-full h-full object-cover" alt="" />
                    <div class="infor-image-02 md:absolute md:left-[25px] md:bottom-[25px] p-4">
                      <div class="p-1 px-3 bg-pink-500 w-[95px]">
                        <span class="uppercase text-white text-[16px]">Politics</span>
                      </div>
                      <div class="py-4 max-h-[145px] overflow-hidden ">
                        <h2 class="">
                          <a href="#">Well designed and well printed only for you and the
                            audience.
                          </a>
                        </h2>
                      </div>
                      <div class="flex justify-start items-center gap-4 flex-wrap">
                        <div class="flex justify-start items-center gap-2">
                          <div class="w-[30px] h-[30px] rounded-full">
                            <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                          </div>
                          <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                        </div>
                        <div class="flex justify-start items-center gap-2">
                          <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                            viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16"
                            xml:space="preserve">
                            <g>
                              <g>
                                <path
                                  d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                            c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                                <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                            c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                              </g>
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
                          <span>March 26, 2022</span>
                        </div>
                        <div class="flex justify-start items-center gap-2">
                          <svg class="w-5 h-5" viewBox="0 -2 28 28" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="m14 2c-.038 0-.083-.001-.128-.001-2.098 0-4.102.399-5.942 1.124l.11-.038c-1.74.644-3.217 1.645-4.4 2.922l-.007.007c-.99 1.036-1.608 2.436-1.633 3.98v.005c.013 1.258.432 2.415 1.131 3.351l-.011-.015c.835 1.131 1.885 2.053 3.096 2.719l.049.025 1.36.782-.426 1.498c-.272 1.021-.646 1.915-1.122 2.741l.029-.054c1.651-.691 3.071-1.59 4.313-2.686l-.017.014.672-.594.89.094c.607.077 1.312.122 2.028.125h.004c.038 0 .083.001.128.001 2.098 0 4.102-.399 5.942-1.124l-.11.038c1.74-.644 3.217-1.645 4.4-2.922l.007-.007c1.009-1.025 1.632-2.432 1.632-3.984s-.623-2.96-1.633-3.985l.001.001c-1.19-1.284-2.666-2.286-4.329-2.904l-.078-.025c-1.73-.687-3.735-1.086-5.833-1.086-.044 0-.088 0-.132.001h.007zm14 8c-.012 1.924-.72 3.681-1.884 5.033l.009-.01c-1.349 1.592-3.059 2.837-5.008 3.611l-.086.03c-2.023.846-4.374 1.337-6.839 1.337-.068 0-.135 0-.202-.001h.01c-.8-.002-1.588-.047-2.363-.134l.097.009c-1.981 1.759-4.399 3.072-7.069 3.756l-.118.026c-.503.145-1.107.266-1.726.339l-.055.005h-.08c-.163 0-.311-.062-.422-.164-.123-.111-.212-.258-.249-.424l-.001-.005v-.016c-.017-.029-.027-.064-.027-.102 0-.033.008-.063.021-.091l-.001.001c.02-.047.031-.101.031-.159 0-.001 0-.001 0-.002q-.008-.031.07-.149l.094-.141.11-.133.125-.141q.11-.125.484-.539l.539-.594q.164-.18.484-.617c.174-.231.343-.493.491-.767l.017-.033q.187-.359.422-.922c.137-.317.276-.712.39-1.117l.017-.07c-1.558-.861-2.852-2.018-3.844-3.405l-.024-.035c-.878-1.216-1.407-2.735-1.414-4.377v-.002c.012-1.924.72-3.681 1.884-5.033l-.009.01c1.349-1.592 3.059-2.837 5.008-3.611l.086-.03c2.023-.846 4.374-1.337 6.839-1.337.068 0 .135 0 .202.001h-.01c.057-.001.125-.001.192-.001 2.465 0 4.816.491 6.959 1.381l-.12-.044c2.034.804 3.745 2.048 5.078 3.622l.015.018c1.155 1.342 1.863 3.099 1.875 5.021v.003z" />
                          </svg>
                          <span>95 Comments</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="col-span-12 lg:col-span-6">
              <section>
                <div class="h-[450px] lg:h-[205px] bg-black relative">
                  <div class=" h-[320px] md:h-[450px] lg:h-[205px]">
                    <img src="../img/2.jpg" class="w-full h-full object-cover" alt="" />
                    <div class="infor-image-02 md:absolute md:left-[25px] md:bottom-[25px] p-4">
                      <div class="p-1 px-3 bg-yellow-500 w-[95px]">
                        <span class="uppercase text-white text-[16px]">Politics</span>
                      </div>
                      <h2>
                        <a href="#" class="text-[24px]">Virtual reality is here!</a>
                      </h2>
                      <div class="flex justify-start items-center gap-6">
                        <div class="flex justify-start items-center gap-2">
                          <div class="w-[30px] h-[30px] rounded-full">
                            <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                          </div>
                          <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="col-span-12 lg:col-span-6">
              <section>
                <div class="h-[450px] lg:h-[205px]  bg-black relative">
                  <div class=" h-[320px] md:h-[450px] lg:h-[205px] ">
                    <img src="../img/3.jpg" class="w-full h-full object-cover" alt="" />
                    <div class="infor-image-02 md:absolute md:left-[25px] md:bottom-[25px] p-4">
                      <div class="p-1 px-3 bg-blue-700 w-[95px]">
                        <span class="uppercase text-white text-[16px]">Politics</span>
                      </div>
                      <h2>
                        <a href="#" class="text-[24px]">Virtual reality is here!</a>
                      </h2>
                      <div class="flex justify-start items-center gap-6">
                        <div class="flex justify-start items-center gap-2">
                          <div class="w-[30px] h-[30px] rounded-full">
                            <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                          </div>
                          <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                        </div>
                      </div>
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
      <div class="grid grid-cols-1 xl:grid-cols-12 xl:gap-6">
        <div class="col-span-12">
          <div class="py-6 bg-slider-02">
            <div class="px-2 md:px-8 xl:px-[120px]">
              <div class="flex justify-between items-center">
                <div class="flex justify-start items-center w-full gap-2">
                  <div class="w-[300px]">
                    <h2 class="title-02">Trending Stories</h2>
                  </div>
                  <div class="hidden md:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
                    <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
                  </div>
                </div>
                <div class="hidden lg:block"></div>
              </div>
              <div class="slider-trend h-[450px] mt-6">
                <section>
                  <div class="bg-white-02 mx-3">
                    <div class="h-[300px] relative">
                      <img src="../img/1.jpg" class="w-full h-full object-cover" />
                      <div class="p-1 px-3 absolute left-[25px] bottom-[25px] bg-blue-500">
                        <span class="uppercase text-white text-[18px]">Travel</span>
                      </div>
                    </div>
                    <div class="p-6 infor-slider-02">
                      <div class="pb-4">
                        <h3>
                          <a href="#">Beauty queens need beauty material & products</a>
                        </h3>
                      </div>
                      <div class="flex justify-start items-center gap-4">
                        <span>
                          by
                          <a href="#" class="transition-all duration-500">
                            Jone Deo</a>
                        </span>
                        <svg version="1.1" class="w-4 h-4" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                          viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                          <g>
                            <g>
                              <path
                                d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                              <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                            </g>
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
                        <span> June 20, 2022 </span>
                      </div>
                    </div>
                  </div>
                </section>
                <section>
                  <div class="bg-white-02 mx-3">
                    <div class="h-[300px] relative">
                      <img src="../img/3.jpg" class="w-full h-full object-cover" />
                      <div class="p-1 px-3 absolute left-[25px] bottom-[25px] bg-blue-500">
                        <span class="uppercase text-white text-[18px]">Travel</span>
                      </div>
                    </div>
                    <div class="p-6 infor-slider-02">
                      <div class="pb-4">
                        <h3>
                          <a href="#">Beauty queens need beauty material & products</a>
                        </h3>
                      </div>
                      <div class="flex justify-start items-center gap-4">
                        <span>
                          by
                          <a href="#" class="transition-all duration-500">
                            Jone Deo</a>
                        </span>
                        <svg version="1.1" class="w-4 h-4" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                          viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                          <g>
                            <g>
                              <path
                                d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                              <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                            </g>
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
                        <span> June 20, 2022 </span>
                      </div>
                    </div>
                  </div>
                </section>
                <section>
                  <div class="bg-white-02 mx-3">
                    <div class="h-[300px] relative">
                      <img src="../img/2.jpg" class="w-full h-full object-cover" />
                      <div class="p-1 px-3 absolute left-[25px] bottom-[25px] bg-blue-500">
                        <span class="uppercase text-white text-[18px]">Travel</span>
                      </div>
                    </div>
                    <div class="p-6 infor-slider-02">
                      <div class="pb-4">
                        <h3>
                          <a href="#">Beauty queens need beauty material & products</a>
                        </h3>
                      </div>
                      <div class="flex justify-start items-center gap-4">
                        <span>
                          by
                          <a href="#" class="transition-all duration-500">
                            Jone Deo</a>
                        </span>
                        <svg version="1.1" class="w-4 h-4" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                          viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                          <g>
                            <g>
                              <path
                                d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                              <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                            </g>
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
                        <span> June 20, 2022 </span>
                      </div>
                    </div>
                  </div>
                </section>
                <section>
                  <div class="bg-white-02 mx-3">
                    <div class="h-[300px] relative">
                      <img src="../img/3.jpg" class="w-full h-full object-cover" />
                      <div class="p-1 px-3 absolute left-[25px] bottom-[25px] bg-blue-500">
                        <span class="uppercase text-white text-[18px]">Travel</span>
                      </div>
                    </div>
                    <div class="p-6 infor-slider-02">
                      <div class="pb-4">
                        <h3>
                          <a href="#">Beauty queens need beauty material & products</a>
                        </h3>
                      </div>
                      <div class="flex justify-start items-center gap-4">
                        <span>
                          by
                          <a href="#" class="transition-all duration-500">
                            Jone Deo</a>
                        </span>
                        <svg version="1.1" class="w-4 h-4" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                          viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                          <g>
                            <g>
                              <path
                                d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                              <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                            </g>
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
                        <span> June 20, 2022 </span>
                      </div>
                    </div>
                  </div>
                </section>
                <section>
                  <div class="bg-white-02 mx-3">
                    <div class="h-[300px] relative">
                      <img src="../img/2.jpg" class="w-full h-full object-cover" />
                      <div class="p-1 px-3 absolute left-[25px] bottom-[25px] bg-blue-500">
                        <span class="uppercase text-white text-[18px]">Travel</span>
                      </div>
                    </div>
                    <div class="p-6 infor-slider-02">
                      <div class="pb-4">
                        <h3>
                          <a href="#">Beauty queens need beauty material & products</a>
                        </h3>
                      </div>
                      <div class="flex justify-start items-center gap-4">
                        <span>
                          by
                          <a href="#" class="transition-all duration-500">
                            Jone Deo</a>
                        </span>
                        <svg version="1.1" class="w-4 h-4" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                          viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                          <g>
                            <g>
                              <path
                                d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                              <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                            </g>
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
                        <span> June 20, 2022 </span>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="px-2 md:px-8 xl:px-[120px]">
      <section>
        <div class="grid grid-cols-1 xl:grid-cols-12 gap-6">
          <div class="col-span-12">
            <div class="flex flex-col items-start lg:flex-row justify-between lg:items-center py-6">
              <div class="flex justify-start items-center gap-2">
                <div class="w-[300px]">
                  <h2 class="title-02">Latest Posts</h2>
                </div>
                <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
                  <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
                </div>
              </div>
              <button class="btn-view-02 transition-all duration-500 p-2 px-4 rounded-sm">
                View all
              </button>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-8">
            <section>
              <div class="h-[650px] md:h-[500px] relative bg-black">
                <div class="h-[300px] md:h-[500px]">
                  <img src="../img/1.jpg" class="w-full h-full object-cover" alt="" />
                </div>

                <div class="infor-image-02 md:absolute md:left-[25px] md:bottom-[25px] p-4">
                  <div class="p-1 px-3 bg-pink-500 w-[95px]">
                    <span class="uppercase text-white text-[16px]">Politics</span>
                  </div>
                  <div class="py-4 max-h-[145px] overflow-hidden ">
                    <h2 class="">
                      <a href="#" class="xl:text-[36px] font-bold">Well designed and well printed only for you and the
                        audience.
                      </a>
                    </h2>
                  </div>
                  <div class="flex justify-start items-center gap-4 flex-wrap">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[30px] h-[30px] rounded-full">
                        <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                      </div>
                      <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                        c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                        c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span>March 26, 2022</span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg class="w-5 h-5" viewBox="0 -2 28 28" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="m14 2c-.038 0-.083-.001-.128-.001-2.098 0-4.102.399-5.942 1.124l.11-.038c-1.74.644-3.217 1.645-4.4 2.922l-.007.007c-.99 1.036-1.608 2.436-1.633 3.98v.005c.013 1.258.432 2.415 1.131 3.351l-.011-.015c.835 1.131 1.885 2.053 3.096 2.719l.049.025 1.36.782-.426 1.498c-.272 1.021-.646 1.915-1.122 2.741l.029-.054c1.651-.691 3.071-1.59 4.313-2.686l-.017.014.672-.594.89.094c.607.077 1.312.122 2.028.125h.004c.038 0 .083.001.128.001 2.098 0 4.102-.399 5.942-1.124l-.11.038c1.74-.644 3.217-1.645 4.4-2.922l.007-.007c1.009-1.025 1.632-2.432 1.632-3.984s-.623-2.96-1.633-3.985l.001.001c-1.19-1.284-2.666-2.286-4.329-2.904l-.078-.025c-1.73-.687-3.735-1.086-5.833-1.086-.044 0-.088 0-.132.001h.007zm14 8c-.012 1.924-.72 3.681-1.884 5.033l.009-.01c-1.349 1.592-3.059 2.837-5.008 3.611l-.086.03c-2.023.846-4.374 1.337-6.839 1.337-.068 0-.135 0-.202-.001h.01c-.8-.002-1.588-.047-2.363-.134l.097.009c-1.981 1.759-4.399 3.072-7.069 3.756l-.118.026c-.503.145-1.107.266-1.726.339l-.055.005h-.08c-.163 0-.311-.062-.422-.164-.123-.111-.212-.258-.249-.424l-.001-.005v-.016c-.017-.029-.027-.064-.027-.102 0-.033.008-.063.021-.091l-.001.001c.02-.047.031-.101.031-.159 0-.001 0-.001 0-.002q-.008-.031.07-.149l.094-.141.11-.133.125-.141q.11-.125.484-.539l.539-.594q.164-.18.484-.617c.174-.231.343-.493.491-.767l.017-.033q.187-.359.422-.922c.137-.317.276-.712.39-1.117l.017-.07c-1.558-.861-2.852-2.018-3.844-3.405l-.024-.035c-.878-1.216-1.407-2.735-1.414-4.377v-.002c.012-1.924.72-3.681 1.884-5.033l-.009.01c1.349-1.592 3.059-2.837 5.008-3.611l.086-.03c2.023-.846 4.374-1.337 6.839-1.337.068 0 .135 0 .202.001h-.01c.057-.001.125-.001.192-.001 2.465 0 4.816.491 6.959 1.381l-.12-.044c2.034.804 3.745 2.048 5.078 3.622l.015.018c1.155 1.342 1.863 3.099 1.875 5.021v.003z" />
                      </svg>
                      <span>95 Comments</span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="col-span-12 lg:col-span-4">
            <section>
              <div class="flex justify-start items-center lg:items-start gap-4">
                <div class="w-[42px] md:w-[122px]">
                  <div class="w-[40px] h-[40px] md:w-[120px] md:h-[120px] rounded-full">
                    <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                  </div>
                </div>

                <div class="text-post-02">
                  <h2>Travel</h2>
                  <p>
                    <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                  </p>
                </div>
              </div>
            </section>
            <section>
              <div class="flex justify-start items-start gap-4 py-2">
                <div class="w-[42px] md:w-[122px]">
                  <div class="w-[40px] h-[40px] md:w-[120px] md:h-[120px] rounded-full">
                    <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                  </div>
                </div>

                <div class="text-post-02">
                  <h2>Travel</h2>
                  <p>
                    <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                  </p>
                </div>
              </div>
            </section>
            <section>
              <div class="flex justify-start items-start gap-4">
                <div class="w-[42px] md:w-[122px]">
                  <div class="w-[40px] h-[40px] md:w-[120px] md:h-[120px] rounded-full">
                    <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                  </div>
                </div>

                <div class="text-post-02">
                  <h2>Travel</h2>
                  <p>
                    <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                  </p>
                </div>
              </div>
            </section>
            <section>
              <div class="flex justify-start items-start gap-4 py-2">
                <div class="w-[42px] md:w-[122px]">
                  <div class="w-[40px] h-[40px] md:w-[120px] md:h-[120px] rounded-full">
                    <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                  </div>
                </div>

                <div class="text-post-02">
                  <h2>Travel</h2>
                  <p>
                    <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                  </p>
                </div>
              </div>
            </section>


          </div>
        </div>
      </section>

      <div class="py-6">
        <img src="https://backtheme.tech/products/html/neoton/assets/images/add2.jpg" alt="" />
      </div>

      <section>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
          <div class="col-span-12 lg:col-span-8">
            <div class="flex justify-start items-center gap-2 py-6">
              <div class="w-[300px]">
                <h2 class="title-02">What’s New</h2>
              </div>
              <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
                <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
              </div>
            </div>
            <section>
              <div class="h-[650px] md:h-[500px] relative bg-black">
                <div class="h-[300px] md:h-[500px]">
                  <img src="../img/1.jpg" class="w-full h-full object-cover" alt="" />
                </div>

                <div class="infor-image-02 md:absolute md:left-[25px] md:bottom-[25px] p-4">
                  <div class="p-1 px-3 bg-pink-500 w-[95px]">
                    <span class="uppercase text-white text-[16px]">Politics</span>
                  </div>
                  <div class="py-4 max-h-[145px] overflow-hidden ">
                    <h2 class="">
                      <a href="#" class="xl:text-[36px] font-bold">Well designed and well printed only for you and the
                        audience.
                      </a>
                    </h2>
                  </div>
                  <div class="flex justify-start items-center gap-4 flex-wrap">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[30px] h-[30px] rounded-full">
                        <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                      </div>
                      <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                        c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                        c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span>March 26, 2022</span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg class="w-5 h-5" viewBox="0 -2 28 28" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="m14 2c-.038 0-.083-.001-.128-.001-2.098 0-4.102.399-5.942 1.124l.11-.038c-1.74.644-3.217 1.645-4.4 2.922l-.007.007c-.99 1.036-1.608 2.436-1.633 3.98v.005c.013 1.258.432 2.415 1.131 3.351l-.011-.015c.835 1.131 1.885 2.053 3.096 2.719l.049.025 1.36.782-.426 1.498c-.272 1.021-.646 1.915-1.122 2.741l.029-.054c1.651-.691 3.071-1.59 4.313-2.686l-.017.014.672-.594.89.094c.607.077 1.312.122 2.028.125h.004c.038 0 .083.001.128.001 2.098 0 4.102-.399 5.942-1.124l-.11.038c1.74-.644 3.217-1.645 4.4-2.922l.007-.007c1.009-1.025 1.632-2.432 1.632-3.984s-.623-2.96-1.633-3.985l.001.001c-1.19-1.284-2.666-2.286-4.329-2.904l-.078-.025c-1.73-.687-3.735-1.086-5.833-1.086-.044 0-.088 0-.132.001h.007zm14 8c-.012 1.924-.72 3.681-1.884 5.033l.009-.01c-1.349 1.592-3.059 2.837-5.008 3.611l-.086.03c-2.023.846-4.374 1.337-6.839 1.337-.068 0-.135 0-.202-.001h.01c-.8-.002-1.588-.047-2.363-.134l.097.009c-1.981 1.759-4.399 3.072-7.069 3.756l-.118.026c-.503.145-1.107.266-1.726.339l-.055.005h-.08c-.163 0-.311-.062-.422-.164-.123-.111-.212-.258-.249-.424l-.001-.005v-.016c-.017-.029-.027-.064-.027-.102 0-.033.008-.063.021-.091l-.001.001c.02-.047.031-.101.031-.159 0-.001 0-.001 0-.002q-.008-.031.07-.149l.094-.141.11-.133.125-.141q.11-.125.484-.539l.539-.594q.164-.18.484-.617c.174-.231.343-.493.491-.767l.017-.033q.187-.359.422-.922c.137-.317.276-.712.39-1.117l.017-.07c-1.558-.861-2.852-2.018-3.844-3.405l-.024-.035c-.878-1.216-1.407-2.735-1.414-4.377v-.002c.012-1.924.72-3.681 1.884-5.033l-.009.01c1.349-1.592 3.059-2.837 5.008-3.611l.086-.03c2.023-.846 4.374-1.337 6.839-1.337.068 0 .135 0 .202.001h-.01c.057-.001.125-.001.192-.001 2.465 0 4.816.491 6.959 1.381l-.12-.044c2.034.804 3.745 2.048 5.078 3.622l.015.018c1.155 1.342 1.863 3.099 1.875 5.021v.003z" />
                      </svg>
                      <span>95 Comments</span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
              <div>
                <div class="h-[300px] relative">
                  <img src="../img/2.jpg" class="w-full h-full object-cover" alt="" />
                  <div class="p-1 px-3 bg-pink-500 absolute left-[25px] bottom-[25px] p-4">
                    <span class="uppercase text-white text-[16px]">Politics</span>
                  </div>
                </div>
                <div class="infor-slider-02 ">
                  <h3 class="py-4">
                    <a href="#" class="font-bold text-[24px]">We have prepared 10 types of projects with more than
                      100 pages We have lots of courses and programs</a>
                  </h3>
                  <div class="flex gap-4">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[30px] h-[30px] rounded-full">
                        <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                      </div>
                      <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span>March 26, 2022</span>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <section>
                  <div class="flex justify-start items-start gap-4">
                    <div class="w-[122px]">
                      <div class="w-[127px] h-[127px]">
                        <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover" /></a>
                      </div>
                    </div>

                    <div class="text-post-02">
                      <h2>
                        Music</h2>
                      <p>
                        <a href="#">Summer activities in music</a>
                      </p>
                      <div class="flex justify-start items-center gap-2">
                        <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                          viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                          <g>
                            <g>
                              <path
                                d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                              <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                            </g>
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
                        <span>March 26, 2022</span>
                      </div>
                    </div>
                  </div>
                </section>
                <section>
                  <div class="flex justify-start items-start gap-4 py-8">
                    <div class="w-[122px]">
                      <div class="w-[127px] h-[127px]">
                        <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover" /></a>
                      </div>
                    </div>

                    <div class="text-post-02">
                      <h2>
                        Music</h2>
                      <p>
                        <a href="#">Summer activities in music</a>
                      </p>
                      <div class="flex justify-start items-center gap-2">
                        <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                          viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                          <g>
                            <g>
                              <path
                                d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                              <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                            </g>
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
                        <span>March 26, 2022</span>
                      </div>
                    </div>
                  </div>
                </section>
                <section>
                  <div class="flex justify-start items-start gap-4">
                    <div class="w-[122px]">
                      <div class="w-[127px] h-[127px]">
                        <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover" /></a>
                      </div>
                    </div>

                    <div class="text-post-02">
                      <h2>
                        Music</h2>
                      <p>
                        <a href="#">Summer activities in music</a>
                      </p>
                      <div class="flex justify-start items-center gap-2">
                        <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                          viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                          <g>
                            <g>
                              <path
                                d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                              <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                            </g>
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
                        <span>March 26, 2022</span>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-4">
            <div class="flex justify-start items-center gap-2 py-6">
              <div class="w-[200px]">
                <h2 class="sub-title-02">Get in touch</h2>
              </div>
              <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
                <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
              </div>
            </div>
            <section>
              <div class="grid grid-cols-2 gap-4">
                <section>
                  <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                    <div class="p-3 bg-blue-700 rounded-sm svg-02">
                      <a href="#">
                        <svg class="w-5 h-5 " xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                          viewBox="0 0 24 24" style="fill: #ffffff">
                          <path
                            d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z">
                          </path>
                        </svg>
                      </a>
                    </div>
                    <div>
                      <h3>Followers</h3>
                      <span>750</span>
                    </div>
                  </div>
                  <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md py-4">
                    <div class="p-3 bg-pink-500 rounded-sm svg-02">
                      <a href="#">
                        <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px"
                          height="169.063px" viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                          <g>
                            <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                     c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                     c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                     c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                            <path
                              d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                     C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                     c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                            <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                     c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                     C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                      </a>
                    </div>
                    <div>
                      <h3>Likes</h3>
                      <span>523</span>
                    </div>
                  </div>
                  <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                    <div class="p-3 bg-cyan-700 rounded-sm svg-02">
                      <a href="#">
                        <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="93.06px" height="93.06px"
                          viewBox="0 0 93.06 93.06" style="fill:#ffffff" xml:space="preserve">
                          <g>
                            <g>
                              <path d="M11.185,0.08C5.004,0.08,0.001,5.092,0,11.259c0,6.173,5.003,11.184,11.186,11.184c6.166,0,11.176-5.011,11.176-11.184
			C22.362,5.091,17.351,0.08,11.185,0.08z" />
                              <rect x="1.538" y="30.926" width="19.287" height="62.054" />
                              <path d="M69.925,29.383c-9.382,0-15.673,5.144-18.248,10.022h-0.258v-8.479H32.921H32.92v62.053h19.27V62.281
			c0-8.093,1.541-15.932,11.575-15.932c9.89,0,10.022,9.256,10.022,16.451v30.178H93.06V58.942
			C93.06,42.235,89.455,29.383,69.925,29.383z" />
                            </g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                        </svg>

                      </a>
                    </div>
                    <div>
                      <h3>Followers</h3>
                      <span>1025</span>
                    </div>
                  </div>
                </section>
                <section>
                  <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                    <div class="p-3 bg-sky-400 rounded-sm svg-02">
                      <a href="#">
                        <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999"
                          style="fill: #ffffff" xml:space="preserve">
                          <g>
                            <g>
                              <path d="M507.77,96.789c-3.92-4.669-9.903-6.958-15.769-6.358c2.345-4.855,4.354-9.891,6.016-15.091
        c2.279-7.127-0.123-15.046-5.97-19.699c-5.849-4.662-14.103-5.232-20.545-1.416c-14.758,8.753-30.599,15.287-47.157,19.455
        c-21.035-18.575-48.714-29.128-76.82-29.128c-63.816,0-115.735,51.917-115.735,115.731c0,0.714,0.006,1.428,0.019,2.142
        c-64.801-8.793-124.951-42.372-166.494-93.332c-3.765-4.618-9.554-7.099-15.467-6.617C43.922,62.94,38.597,66.283,35.6,71.42
        c-10.258,17.603-15.68,37.727-15.68,58.199c0,18.054,4.218,35.74,12.145,51.67c-1.32,0.393-2.602,0.936-3.818,1.634
        c-5.477,3.138-8.967,9.007-9.111,15.299c-0.013,0.551-0.014,1.102-0.014,1.659c0,32.878,14.268,64.167,38.287,85.933
        c-3.841,4.722-5.072,11.157-3.206,16.976c9.946,31.053,32.666,56.265,61.702,69.726C92.746,383.153,67.381,388.7,41.425,388.7
        c-7.086,0-14.204-0.416-21.147-1.238c-8.439-1.004-16.336,3.885-19.202,11.89c-2.863,8,0.132,16.789,7.282,21.373
        c47.672,30.566,102.793,46.722,159.404,46.722c111.254,0,180.924-52.547,219.777-96.631
        c48.338-54.836,76.06-127.446,76.06-199.211c0-1.265-0.008-2.537-0.024-3.811c17.576-13.928,32.828-30.48,45.386-49.265
        C513.42,111.86,512.927,102.917,507.77,96.789z M447.131,154.728c-2.645,1.993-4.158,5.147-4.057,8.456
        c0.086,2.799,0.129,5.633,0.129,8.425c0,66.867-25.866,134.561-70.965,185.723c-36.075,40.928-100.834,89.716-204.475,89.716
        c-49.475,0-97.73-13.257-140.171-38.423c4.596,0.316,9.222,0.475,13.837,0.475c37.456,0,73.838-10.387,105.213-30.038
        c3.502-2.195,5.335-6.287,4.64-10.361c-0.697-4.075-3.783-7.326-7.816-8.234c-31.581-7.104-57.553-30.05-68.608-60.322
        c1.701,0.258,3.412,0.473,5.115,0.644c4.75,0.466,9.202-2.416,10.699-6.954c1.497-4.539-0.358-9.508-4.462-11.956
        c-28.06-16.734-45.763-46.996-46.651-79.439c3.985,2.013,8.121,3.766,12.341,5.228c4.347,1.505,9.163-0.084,11.758-3.882
        c2.597-3.797,2.33-8.861-0.651-12.365c-14.629-17.197-22.685-39.144-22.685-61.799c0-15.768,3.9-31.279,11.306-45.069
        c47.495,56.842,116.675,93.062,190.337,99.529c3.076,0.267,6.105-0.866,8.244-3.091s3.155-5.3,2.764-8.36
        c-0.519-4.065-0.782-8.219-0.782-12.344c0-52.566,42.768-95.332,95.336-95.332c24.725,0,49.052,9.914,66.741,27.198
        c2.46,2.403,5.965,3.408,9.323,2.665c18.548-4.087,36.34-10.801,52.975-19.987c-4.049,10.366-9.853,19.856-17.303,28.281
        c-3.006,3.399-3.405,8.376-0.978,12.211c2.426,3.835,7.097,5.607,11.453,4.344c6.018-1.74,11.985-3.781,17.819-6.092
        C476.151,129.269,462.58,143.088,447.131,154.728z" />
                            </g>
                          </g>
                          <g>
                            <g>
                              <path d="M89.95,145.834c-2.153-1.605-4.298-3.258-6.377-4.91c-4.409-3.506-10.826-2.774-14.331,1.636
        c-3.505,4.409-2.773,10.825,1.636,14.331c2.241,1.782,4.554,3.564,6.874,5.294c1.832,1.366,3.97,2.025,6.091,2.025
        c3.11,0,6.182-1.418,8.183-4.102C95.394,155.592,94.465,149.203,89.95,145.834z" />
                            </g>
                          </g>
                          <g>
                            <g>
                              <path d="M222.328,196.399c-36.715-3.223-73.142-14.6-105.344-32.9c-4.898-2.783-11.123-1.07-13.907,3.828
        c-2.783,4.898-1.07,11.123,3.828,13.907c34.73,19.738,74.026,32.009,113.639,35.487c0.304,0.026,0.605,0.04,0.904,0.04
        c5.229,0,9.682-4,10.148-9.309C232.088,201.84,227.939,196.892,222.328,196.399z" />
                            </g>
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
                      </a>
                    </div>
                    <div>
                      <h3>Fans</h3>
                      <span>1236</span>
                    </div>
                  </div>
                  <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md py-4">
                    <div class="p-3 bg-sky-200 rounded-sm svg-02">
                      <a href="#">
                        <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 304.36 304.36"
                          style="fill: #ffffff" xml:space="preserve">
                          <g id="XMLID_1_">
                            <path id="XMLID_807_" style="fill-rule: evenodd; clip-rule: evenodd" d="M261.945,175.576c10.096,9.857,20.752,19.131,29.807,29.982
          c4,4.822,7.787,9.798,10.684,15.394c4.105,7.955,0.387,16.709-6.746,17.184l-44.34-0.02c-11.436,0.949-20.559-3.655-28.23-11.474
          c-6.139-6.253-11.824-12.908-17.727-19.372c-2.42-2.642-4.953-5.128-7.979-7.093c-6.053-3.929-11.307-2.726-14.766,3.587
          c-3.523,6.421-4.322,13.531-4.668,20.687c-0.475,10.441-3.631,13.186-14.119,13.664c-22.414,1.057-43.686-2.334-63.447-13.641
          c-17.422-9.968-30.932-24.04-42.691-39.971C34.828,153.482,17.295,119.395,1.537,84.353C-2.01,76.458,0.584,72.22,9.295,72.07
          c14.465-0.281,28.928-0.261,43.41-0.02c5.879,0.086,9.771,3.458,12.041,9.012c7.826,19.243,17.402,37.551,29.422,54.521
          c3.201,4.518,6.465,9.036,11.113,12.216c5.142,3.521,9.057,2.354,11.476-3.374c1.535-3.632,2.207-7.544,2.553-11.434
          c1.146-13.383,1.297-26.743-0.713-40.079c-1.234-8.323-5.922-13.711-14.227-15.286c-4.238-0.803-3.607-2.38-1.555-4.799
          c3.564-4.172,6.916-6.769,13.598-6.769h50.111c7.889,1.557,9.641,5.101,10.721,13.039l0.043,55.663
          c-0.086,3.073,1.535,12.192,7.07,14.226c4.43,1.448,7.35-2.096,10.008-4.905c11.998-12.734,20.561-27.783,28.211-43.366
          c3.395-6.852,6.314-13.968,9.143-21.078c2.096-5.276,5.385-7.872,11.328-7.757l48.229,0.043c1.43,0,2.877,0.021,4.262,0.258
          c8.127,1.385,10.354,4.881,7.844,12.817c-3.955,12.451-11.65,22.827-19.174,33.251c-8.043,11.129-16.645,21.877-24.621,33.072
          C252.26,161.544,252.842,166.697,261.945,175.576L261.945,175.576z M261.945,175.576" />
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
                      </a>
                    </div>
                    <div>
                      <h3>Likes</h3>
                      <span>523</span>
                    </div>
                  </div>
                  <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                    <div class="p-3 bg-red-600 rounded-sm svg-02">
                      <a href="#">
                        <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="96.875px" height="96.875px"
                          viewBox="0 0 96.875 96.875" style="fill: #ffffff;" xml:space="preserve">
                          <g>
                            <path d="M95.201,25.538c-1.186-5.152-5.4-8.953-10.473-9.52c-12.013-1.341-24.172-1.348-36.275-1.341
		c-12.105-0.007-24.266,0-36.279,1.341c-5.07,0.567-9.281,4.368-10.467,9.52C0.019,32.875,0,40.884,0,48.438
		C0,55.992,0,64,1.688,71.336c1.184,5.151,5.396,8.952,10.469,9.52c12.012,1.342,24.172,1.349,36.277,1.342
		c12.107,0.007,24.264,0,36.275-1.342c5.07-0.567,9.285-4.368,10.471-9.52c1.689-7.337,1.695-15.345,1.695-22.898
		C96.875,40.884,96.889,32.875,95.201,25.538z M35.936,63.474c0-10.716,0-21.32,0-32.037c10.267,5.357,20.466,10.678,30.798,16.068
		C56.434,52.847,46.23,58.136,35.936,63.474z" />
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                        </svg>

                      </a>
                    </div>
                    <div>
                      <h3>Subscribers</h3>
                      <span>590M</span>
                    </div>
                  </div>
                </section>
            </section>
            <div class="flex justify-start items-center gap-2 py-6">
              <div class="w-[200px]">
                <h2 class="sub-title-02">Don’t Miss</h2>
              </div>
              <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
                <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
              </div>
            </div>
            <section>
              <div class="flex justify-start items-center gap-4">
                <div class="w-[100px]">
                  <div class="w-[100px] h-[100px] rounded-full">
                    <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                  </div>
                </div>

                <div class="text-post-02">
                  <h2>Travel</h2>
                  <p>
                    <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                  </p>
                  <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                </div>
              </div>
            </section>

            <section>
              <div class="flex justify-start items-center gap-4 py-4">
                <div class="w-[100px]">
                  <div class="w-[100px] h-[100px] rounded-full">
                    <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                  </div>
                </div>
                <div class="text-post-02">
                  <h2>Travel</h2>
                  <p>
                    <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                  </p>
                  <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                </div>
              </div>
            </section>
            <section>
              <div class="flex justify-start items-center gap-4 pb-4">
                <div class="w-[100px]">
                  <div class="w-[100px] h-[100px] rounded-full">
                    <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                  </div>
                </div>

                <div class="text-post-02">
                  <h2>Travel</h2>
                  <p>
                    <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                  </p>
                  <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                </div>
              </div>
            </section>
            <section>
              <div class="flex justify-start items-center gap-4">
                <div class="w-[100px]">
                  <div class="w-[100px] h-[100px] rounded-full">
                    <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                  </div>
                </div>

                <div class="text-post-02">
                  <h2>Travel</h2>
                  <p>
                    <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                  </p>
                  <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                </div>
              </div>
            </section>
            <button class="view-more-02 flex justify-start items-center gap-2 py-6">

              <svg version="1.1" class="w-4 h-4" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="44.952px" height="44.952px"
                viewBox="0 0 44.952 44.952" style="enable-background:new 0 0 44.952 44.952;" xml:space="preserve">
                <g>
                  <path d="M44.952,22.108c0-1.25-0.478-2.424-1.362-3.308L30.627,5.831c-0.977-0.977-2.561-0.977-3.536,0
		c-0.978,0.977-0.976,2.568,0,3.546l10.574,10.57H2.484C1.102,19.948,0,21.081,0,22.464c0,0.003,0,0.025,0,0.028
		c0,1.382,1.102,2.523,2.484,2.523h35.182L27.094,35.579c-0.978,0.978-0.978,2.564,0,3.541c0.977,0.979,2.561,0.978,3.538-0.001
		l12.958-12.97c0.885-0.882,1.362-2.059,1.362-3.309C44.952,22.717,44.952,22.231,44.952,22.108z" />
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
              </svg>
              <span>View more</span>
            </button>
            <div>
              <img src="https://backtheme.tech/products/html/neoton/assets/images/whats/add.jpg" alt="">
            </div>
          </div>
        </div>
      </section>
    </div>
    <section>
      <div class="bg-slider-02">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 px-2 md:px-8 xl:px-[120px]">
          <div class="col-span-12 lg:col-span-8">
            <div class="flex justify-start items-center gap-2 py-6 ">
              <div class="w-[300px]">
                <h2 class="title-02">Feature Posts</h2>
              </div>
              <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
                <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
              </div>
            </div>
            <div class="flex flex-col gap-6">
              <section>
                <div class="flex flex-col md:flex-row">
                  <div class="w-full lg:h-[342px]">
                    <img src="../img/1.jpg" class="w-full h-full lg:w-[342px] lg:h-[342px] object-cover" />
                  </div>

                  <div class="bg-white p-6">
                    <div class="flex flex-col gap-4">
                      <div class="p-1 px-3 bg-blue-500 w-[80px]">
                        <span class="uppercase text-white text-[18px]">Travel</span>
                      </div>
                      <div class="text-cate-02">
                        <div>
                          <h2>
                            <a href="#">Skydivers in freefall scare after getting tangled up in mid-air</a>
                          </h2>
                        </div>
                        <div class="py-4 max-h-[95px] max-w-[600px] lg:max-w-none overflow-hidden">
                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit rerum iusto modi
                            excepturi, exercitationem incidunt sapiente atque nihil aut voluptatibus beatae, pariatur,
                            aspernatur cum. Est dignissimos deleniti error veniam tempora?</p>
                        </div>
                        <div class="flex justify-start items-center gap-4 pt-4 flex-wrap">
                          <div class="flex justify-start items-center gap-2 ">
                            <div class="w-[30px] h-[30px] rounded-full">
                              <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                            </div>
                            <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                          </div>
                          <div class="flex justify-start items-center gap-2">
                            <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px"
                              height="97.16px" viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16"
                              xml:space="preserve">
                              <g>
                                <g>
                                  <path
                                    d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                              c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                                  <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                              c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                                </g>
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
                            <span>March 26, 2022</span>
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex flex-col md:flex-row">
                  <div class="w-full h-[342px]">
                    <img src="../img/3.jpg" class="w-full h-full lg:w-[342px] lg:h-[342px] object-cover" />
                  </div>

                  <div class="bg-white p-6">
                    <div class="flex flex-col gap-4">
                      <div class="p-1 px-3 bg-pink-500 w-[150px]">
                        <span class="uppercase text-white text-[18px]">Technology</span>
                      </div>
                      <div class="text-cate-02">
                        <div>
                          <h2>
                            <a href="#">Skydivers in freefall scare after getting tangled up in mid-air</a>
                          </h2>
                        </div>
                        <div class="py-4 max-h-[95px] max-w-[600px] lg:max-w-none overflow-hidden">
                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit rerum iusto modi
                            excepturi, exercitationem incidunt sapiente atque nihil aut voluptatibus beatae, pariatur,
                            aspernatur cum. Est dignissimos deleniti error veniam tempora?</p>
                        </div>
                        <div class="flex justify-start items-center gap-4 pt-4 flex-wrap">
                          <div class="flex justify-start items-center gap-2">
                            <div class="w-[30px] h-[30px] rounded-full">
                              <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                            </div>
                            <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                          </div>
                          <div class="flex justify-start items-center gap-2">
                            <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px"
                              height="97.16px" viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16"
                              xml:space="preserve">
                              <g>
                                <g>
                                  <path
                                    d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                              c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                                  <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                              c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                                </g>
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
                            <span>March 26, 2022</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex flex-col md:flex-row">
                  <div class="w-full h-[342px]">
                    <img src="../img/1.jpg" class="w-full h-full lg:w-[342px] lg:h-[342px] object-cover" />
                  </div>

                  <div class="bg-white p-6">
                    <div class="flex flex-col gap-4">
                      <div class="p-1 px-3 bg-yellow-500 w-[150px]">
                        <span class="uppercase text-white text-[18px]">Environment</span>
                      </div>
                      <div class="text-cate-02">
                        <div>
                          <h2>
                            <a href="#">Skydivers in freefall scare after getting tangled up in mid-air</a>
                          </h2>
                        </div>
                        <div class="py-4 max-h-[95px] max-w-[600px] lg:max-w-none overflow-hidden">
                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit rerum iusto modi
                            excepturi, exercitationem incidunt sapiente atque nihil aut voluptatibus beatae, pariatur,
                            aspernatur cum. Est dignissimos deleniti error veniam tempora?</p>
                        </div>
                        <div class="flex justify-start items-center gap-4 pt-4 flex-wrap">
                          <div class="flex justify-start items-center gap-2">
                            <div class="w-[30px] h-[30px] rounded-full">
                              <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                            </div>
                            <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                          </div>
                          <div class="flex justify-start items-center gap-2">
                            <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px"
                              height="97.16px" viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16"
                              xml:space="preserve">
                              <g>
                                <g>
                                  <path
                                    d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                              c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                                  <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                              c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                                </g>
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
                            <span>March 26, 2022</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex flex-col md:flex-row">
                  <div class="w-full h-[342px]">
                    <img src="../img/3.jpg" class="w-full h-full lg:w-[342px] lg:h-[342px] object-cover" />
                  </div>

                  <div class="bg-white p-6">
                    <div class="flex flex-col gap-4">
                      <div class="p-1 px-3 bg-red-500 w-[140px]">
                        <span class="uppercase text-white text-[18px]">Adventure</span>
                      </div>
                      <div class="text-cate-02">
                        <div>
                          <h2>
                            <a href="#">Skydivers in freefall scare after getting tangled up in mid-air</a>
                          </h2>
                        </div>
                        <div class="py-4 max-h-[95px] max-w-[600px] lg:max-w-none overflow-hidden">
                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit rerum iusto modi
                            excepturi, exercitationem incidunt sapiente atque nihil aut voluptatibus beatae, pariatur,
                            aspernatur cum. Est dignissimos deleniti error veniam tempora?</p>
                        </div>
                        <div class="flex justify-start items-center gap-4 pt-4 flex-wrap">
                          <div class="flex justify-start items-center gap-2">
                            <div class="w-[30px] h-[30px] rounded-full">
                              <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                            </div>
                            <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                          </div>
                          <div class="flex justify-start items-center gap-2">
                            <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px"
                              height="97.16px" viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16"
                              xml:space="preserve">
                              <g>
                                <g>
                                  <path
                                    d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                              c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                                  <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                              c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                                </g>
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
                            <span>March 26, 2022</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex flex-col md:flex-row">
                  <div class="w-full h-[342px]">
                    <img src="../img/2.jpg" class="w-full h-full lg:w-[342px] lg:h-[342px] object-cover" />
                  </div>

                  <div class="bg-white p-6">
                    <div class="flex flex-col gap-4">
                      <div class="p-1 px-3 bg-green-500 w-[100px]">
                        <span class="uppercase text-white text-[18px]">Politics</span>
                      </div>
                      <div class="text-cate-02">
                        <div>
                          <h2>
                            <a href="#">Skydivers in freefall scare after getting tangled up in mid-air</a>
                          </h2>
                        </div>
                        <div class="py-4 max-h-[95px] max-w-[600px] lg:max-w-none overflow-hidden">
                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit rerum iusto modi
                            excepturi, exercitationem incidunt sapiente atque nihil aut voluptatibus beatae, pariatur,
                            aspernatur cum. Est dignissimos deleniti error veniam tempora?</p>
                        </div>
                        <div class="flex justify-start items-center gap-4 pt-4 flex-wrap">
                          <div class="flex justify-start items-center gap-2">
                            <div class="w-[30px] h-[30px] rounded-full">
                              <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                            </div>
                            <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                          </div>
                          <div class="flex justify-start items-center gap-2">
                            <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px"
                              height="97.16px" viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16"
                              xml:space="preserve">
                              <g>
                                <g>
                                  <path
                                    d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                              c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                                  <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                              c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                                </g>
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
                            <span>March 26, 2022</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

            </div>
            <div class="py-6 flex justify-center items-center">
              <button class="btn-view-02 transition-all duration-500 p-3 px-6 rounded-sm">
                View All Posts
              </button>
            </div>


          </div>
          <div class="col-span-12 lg:col-span-4">
            <div class="flex justify-start items-center gap-2 py-6 ">
              <div class="w-[220px]">
                <h2 class="sub-title-02">Categories</h2>
              </div>
              <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
                <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
              </div>
            </div>
            <section>
              <div class="grid grid-cols-2 gap-4 mt-3">
                <div class="relative">
                  <img src="../img/1.jpg" class="w-full h-full object-cover">
                  <div class="text-img-cate-02 ">
                    <a href="#"><strong>10</strong><br>Travel</a>
                  </div>
                </div>
                <div class="relative">
                  <img src="../img/2.jpg" class="w-full h-full object-cover">
                  <div class="text-img-cate-02 ">
                    <a href="#"><strong>19</strong><br>Technology</a>
                  </div>
                </div>
                <div class="relative">
                  <img src="../img/3.jpg" class="w-full h-full object-cover">
                  <div class="text-img-cate-02  ">
                    <a href="#"><strong>15</strong><br>Food</a>
                  </div>
                </div>
                <div class="relative">
                  <img src="../img/1.jpg" class="w-full h-full object-cover">
                  <div class="text-img-cate-02  ">
                    <a href="#"><strong>20</strong><br>Fashion</a>
                  </div>
                </div>
                <div class="relative">
                  <img src="../img/3.jpg" class="w-full h-full object-cover">
                  <div class="text-img-cate-02  ">
                    <a href="#"><strong>22</strong><br>Life Style</a>
                  </div>
                </div>
                <div class="relative">
                  <img src="../img/2.jpg" class="w-full h-full object-cover">
                  <div class="text-img-cate-02">
                    <a href="#"><strong>18</strong><br>Adventure</a>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="flex justify-start items-center gap-2 py-6 ">
                <div class="w-[220px]">
                  <h2 class="sub-title-02">Most Read</h2>
                </div>
                <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
                  <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
                </div>
              </div>
              <section>
                <div class="flex justify-start items-start gap-4">
                  <div class="w-[122px]">
                    <div class="w-[120px] h-[120px] rounded-full">
                      <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                    </div>
                  </div>

                  <div class="text-post-02">
                    <h2>Travel</h2>
                    <p>
                      <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                    </p>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-start items-start gap-4 py-4">
                  <div class="w-[122px]">
                    <div class="w-[120px] h-[120px] rounded-full">
                      <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                    </div>
                  </div>

                  <div class="text-post-02">
                    <h2>Travel</h2>
                    <p>
                      <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                    </p>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-start items-start gap-4">
                  <div class="w-[122px]">
                    <div class="w-[120px] h-[120px] rounded-full">
                      <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                    </div>
                  </div>

                  <div class="text-post-02">
                    <h2>Travel</h2>
                    <p>
                      <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                    </p>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-start items-start gap-4 py-4">
                  <div class="w-[122px]">
                    <div class="w-[120px] h-[120px] rounded-full">
                      <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                    </div>
                  </div>

                  <div class="text-post-02">
                    <h2>Travel</h2>
                    <p>
                      <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                    </p>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-start items-start gap-4 pb-4">
                  <div class="w-[122px]">
                    <div class="w-[120px] h-[120px] rounded-full">
                      <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                    </div>
                  </div>

                  <div class="text-post-02">
                    <h2>Travel</h2>
                    <p>
                      <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                    </p>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-start items-start gap-4">
                  <div class="w-[122px]">
                    <div class="w-[120px] h-[120px] rounded-full">
                      <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                    </div>
                  </div>

                  <div class="text-post-02">
                    <h2>Travel</h2>
                    <p>
                      <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                    </p>
                  </div>
                </div>
              </section>
            </section>
            <section>
              <div class="flex justify-start items-center gap-2 py-6 ">
                <div class="w-[220px]">
                  <h2 class="sub-title-02">Follow us</h2>
                </div>
                <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
                  <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
                </div>
              </div>
              <section>
                <div class="grid grid-cols-2 gap-2 mt-3">
                  <div class="main-img-02">
                    <a href="#"><img src="../img/1.jpg" class="w-full h-full object-cover">
                      <div class="overlay-02">
                        <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px"
                          height="169.063px" viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                          <g>
                            <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                 c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                            <path
                              d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                            <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                 C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                      </div>
                    </a>
                  </div>
                  <div class="main-img-02">
                    <a href="#"><img src="../img/2.jpg" class="w-full h-full object-cover">
                      <div class="overlay-02">
                        <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px"
                          height="169.063px" viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                          <g>
                            <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                   c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                            <path
                              d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                            <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                   C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                      </div>
                    </a>

                  </div>
                  <div class="main-img-02">
                    <a href="#"><img src="../img/3.jpg" class="w-full h-full object-cover">
                      <div class="overlay-02">
                        <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px"
                          height="169.063px" viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                          <g>
                            <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                   c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                            <path
                              d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                            <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                   C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                      </div>
                    </a>

                  </div>
                  <div class="main-img-02">
                    <a href="#"><img src="../img/1.jpg" class="w-full h-full object-cover">
                      <div class="overlay-02">
                        <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px"
                          height="169.063px" viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                          <g>
                            <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                   c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                            <path
                              d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                            <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                   C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                      </div>
                    </a>

                  </div>
                  <div class="main-img-02">
                    <a href="#"><img src="../img/3.jpg" class="w-full h-full object-cover">
                      <div class="overlay-02">
                        <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px"
                          height="169.063px" viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                          <g>
                            <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                   c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                            <path
                              d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                            <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                   C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                      </div>
                    </a>

                  </div>
                  <div class="main-img-02">
                    <a href="#"><img src="../img/2.jpg" class="w-full h-full object-cover">
                      <div class="overlay-02">
                        <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px"
                          height="169.063px" viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                          <g>
                            <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                   c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                            <path
                              d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                            <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                   C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                      </div>
                    </a>

                  </div>
                </div>


              </section>
            </section>
          </div>
        </div>
        <div class="slider-trend h-[500px] mt-8">
          <section>
            <div class="bg-white-02">
              <div class="h-[500px] relative">
                <img src="../img/2.jpg" class="w-full h-full object-cover" />
                <div class="infor-image-02 absolute left-[25px] bottom-[25px] p-4">
                  <div class="p-1 px-3 bg-blue-500 w-[95px]">
                    <span class="uppercase text-white text-[16px]">Politics</span>
                  </div>
                  <div class="py-4">
                    <h2>
                      <a href="#" class="text-[20px]">Well designed and well printed only for you and the
                        audience.
                      </a>
                    </h2>
                  </div>
                  <div class="flex justify-start items-center gap-6 flex-wrap">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[30px] h-[30px] rounded-full">
                        <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                      </div>
                      <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span>March 26, 2022</span>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="bg-white-02">
              <div class="h-[500px] relative">
                <img src="../img/2.jpg" class="w-full h-full object-cover" />
                <div class="infor-image-02 absolute left-[25px] bottom-[25px] p-4">
                  <div class="p-1 px-3 bg-blue-500 w-[95px]">
                    <span class="uppercase text-white text-[16px]">Politics</span>
                  </div>
                  <div class="py-4">
                    <h2>
                      <a href="#" class="text-[20px]">Well designed and well printed only for you and the
                        audience.
                      </a>
                    </h2>
                  </div>
                  <div class="flex justify-start items-center gap-6 flex-wrap">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[30px] h-[30px] rounded-full">
                        <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                      </div>
                      <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span>March 26, 2022</span>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="bg-white-02">
              <div class="h-[500px] relative">
                <img src="../img/1.jpg" class="w-full h-full object-cover" />
                <div class="infor-image-02 absolute left-[25px] bottom-[25px] p-4">
                  <div class="p-1 px-3 bg-blue-500 w-[95px]">
                    <span class="uppercase text-white text-[16px]">Politics</span>
                  </div>
                  <div class="py-4">
                    <h2>
                      <a href="#" class="text-[20px]">Well designed and well printed only for you and the
                        audience.
                      </a>
                    </h2>
                  </div>
                  <div class="flex justify-start items-center gap-6 flex-wrap">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[30px] h-[30px] rounded-full">
                        <img src="../img/3.jpg" class="w-full h-full object-cover rounded-full" />
                      </div>
                      <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span>March 26, 2022</span>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="bg-white-02">
              <div class="h-[500px] relative">
                <img src="../img/3.jpg" class="w-full h-full object-cover" />
                <div class="infor-image-02 absolute left-[25px] bottom-[25px] p-4">
                  <div class="p-1 px-3 bg-blue-500 w-[95px]">
                    <span class="uppercase text-white text-[16px]">Politics</span>
                  </div>
                  <div class="py-4">
                    <h2>
                      <a href="#" class="text-[20px]">Well designed and well printed only for you and the
                        audience.
                      </a>
                    </h2>
                  </div>
                  <div class="flex justify-start items-center gap-6 flex-wrap">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[30px] h-[30px] rounded-full">
                        <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                      </div>
                      <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span>March 26, 2022</span>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="bg-white-02">
              <div class="h-[500px] relative">
                <img src="../img/1.jpg" class="w-full h-full object-cover" />
                <div class="infor-image-02 absolute left-[25px] bottom-[25px] p-4">
                  <div class="p-1 px-3 bg-blue-500 w-[95px]">
                    <span class="uppercase text-white text-[16px]">Politics</span>
                  </div>
                  <div class="py-4">
                    <h2>
                      <a href="#" class="text-[20px]">Well designed and well printed only for you and the
                        audience.
                      </a>
                    </h2>
                  </div>
                  <div class="flex justify-start items-center gap-6 flex-wrap">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[30px] h-[30px] rounded-full">
                        <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                      </div>
                      <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span>March 26, 2022</span>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="bg-white-02">
              <div class="h-[500px] relative">
                <img src="../img/4.jpg" class="w-full h-full object-cover" />
                <div class="infor-image-02 absolute left-[25px] bottom-[25px] p-4">
                  <div class="p-1 px-3 bg-blue-500 w-[95px]">
                    <span class="uppercase text-white text-[16px]">Politics</span>
                  </div>
                  <div class="py-4">
                    <h2>
                      <a href="#" class="text-[20px]">Well designed and well printed only for you and the
                        audience.
                      </a>
                    </h2>
                  </div>
                  <div class="flex justify-start items-center gap-6 flex-wrap">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[30px] h-[30px] rounded-full">
                        <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                      </div>
                      <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                    </div>
                    <div class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span>March 26, 2022</span>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
  </div>',
                'js_handle' => '<script>
    $(".slider").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
    });
    $(".slider-trend").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      responsive: [
        {
          breakpoint: 2550,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 1440,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
      ]
    });
  </script>',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'about',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'html' => '<div class="sub-direct-02 py-10 px-2 md:px-8 xl:px-[120px]">
    <div class="flex justify-center items-center">
      <h2>
        About us
      </h2>
    </div>
    <div class="flex justify-center items-center gap-2 ">
      <a href="#" class="active">Home</a>
      <span>.</span>
      <a href="#">About us</a>
    </div>
  </div>
  <div class="content px-2 md:px-8 xl:px-[120px]">

    <section>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mb-6">
        <div class="col-span-12 lg:col-span-8">
          <div class="flex justify-start items-center gap-2 py-6">
            <div class="w-[300px]">
              <h2 class="title-02">Who we Are?</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <div class="about-02 flex flex-col justify-start items-start gap-4 ">
              <p>Possimus labore ad tempora blandit totam blanditiis fusce urna mollit facilisi expedita? Sociis,
                facilisis adipisci maiores dolores voluptate odio magna eius iste facilisi illo, illo elementum per
                interdum! Odit pellentesque atque commodi, hic hendrerit leo commodo voluptates maiores mollit, dolor
                voluptatem recusandae dolorem dolore hac, iaculis, aliquet! Earum facere, nihil, sodales cillum! Arcu
                pulvinar, temporibus integer ullamcorper.</p>
              <div>
                <img src="../img/1.jpg" alt="" class="w-full h-full object-cover">
              </div>
              <p>Possimus labore ad tempora blandit totam blanditiis fusce urna mollit facilisi expedita? Sociis,
                facilisis adipisci maiores dolores voluptate odio magna eius iste facilisi illo, illo elementum per
                interdum! Odit pellentesque atque commodi, hic hendrerit leo commodo voluptates maiores mollit, dolor
                voluptatem recusandae dolorem dolore hac, iaculis, aliquet! Earum facere, nihil, sodales cillum! Arcu
                pulvinar, temporibus integer ullamcorper.</p>
              <h2>
                Unique visual system and method.
              </h2>
              <p>
                Rhoncus urna aliquet? Magni varius? Tempora penatibus odio quas quis cupidatat magni? Dis exercitation,
                dignissimos vestibulum? Totam nihil, pulvinar etiam platea itaque, officia? Cillum auctor facilis, eu
                nostra euismod explicabo. Voluptate eget ullam omnis habitant sociis vivamus.
              </p>
              <ul>
                <li><a href="#">User Experience</a></li>
                <li><a href="#">Unique layouts Blocks</a></li>
                <li><a href="#">Strategy and Art Direction</a></li>
              </ul>
              <p>Adipisci, reprehenderit platea cras ut quia consectetur convallis.</p>
            </div>
            <button class="btn-view-02 transition-all duration-500 p-3 px-6 rounded-sm mt-8">Contacts Us</button>
          </section>
        </div>
        <div class="col-span-12 lg:col-span-4">
          <div class="flex justify-start items-center gap-2 py-6">
            <div class="w-[200px]">
              <h2 class="sub-title-02">Get in touch</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <div class="grid grid-cols-2 gap-4">
              <section>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-blue-700 rounded-sm svg-02">
                    <a href="#">
                      <svg class="w-5 h-5 " xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                        viewBox="0 0 24 24" style="fill: #ffffff">
                        <path
                          d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z">
                        </path>
                      </svg>
                    </a>
                  </div>
                  <div>
                    <h3>Followers</h3>
                    <span>750</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md py-4">
                  <div class="p-3 bg-pink-500 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                     c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                     c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                     c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                     C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                     c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                     c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                     C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </a>
                  </div>
                  <div>
                    <h3>Likes</h3>
                    <span>523</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-cyan-700 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="93.06px" height="93.06px"
                        viewBox="0 0 93.06 93.06" style="fill:#ffffff" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M11.185,0.08C5.004,0.08,0.001,5.092,0,11.259c0,6.173,5.003,11.184,11.186,11.184c6.166,0,11.176-5.011,11.176-11.184
			C22.362,5.091,17.351,0.08,11.185,0.08z" />
                            <rect x="1.538" y="30.926" width="19.287" height="62.054" />
                            <path d="M69.925,29.383c-9.382,0-15.673,5.144-18.248,10.022h-0.258v-8.479H32.921H32.92v62.053h19.27V62.281
			c0-8.093,1.541-15.932,11.575-15.932c9.89,0,10.022,9.256,10.022,16.451v30.178H93.06V58.942
			C93.06,42.235,89.455,29.383,69.925,29.383z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>

                    </a>
                  </div>
                  <div>
                    <h3>Followers</h3>
                    <span>1025</span>
                  </div>
                </div>
              </section>
              <section>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-sky-400 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999"
                        style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M507.77,96.789c-3.92-4.669-9.903-6.958-15.769-6.358c2.345-4.855,4.354-9.891,6.016-15.091
        c2.279-7.127-0.123-15.046-5.97-19.699c-5.849-4.662-14.103-5.232-20.545-1.416c-14.758,8.753-30.599,15.287-47.157,19.455
        c-21.035-18.575-48.714-29.128-76.82-29.128c-63.816,0-115.735,51.917-115.735,115.731c0,0.714,0.006,1.428,0.019,2.142
        c-64.801-8.793-124.951-42.372-166.494-93.332c-3.765-4.618-9.554-7.099-15.467-6.617C43.922,62.94,38.597,66.283,35.6,71.42
        c-10.258,17.603-15.68,37.727-15.68,58.199c0,18.054,4.218,35.74,12.145,51.67c-1.32,0.393-2.602,0.936-3.818,1.634
        c-5.477,3.138-8.967,9.007-9.111,15.299c-0.013,0.551-0.014,1.102-0.014,1.659c0,32.878,14.268,64.167,38.287,85.933
        c-3.841,4.722-5.072,11.157-3.206,16.976c9.946,31.053,32.666,56.265,61.702,69.726C92.746,383.153,67.381,388.7,41.425,388.7
        c-7.086,0-14.204-0.416-21.147-1.238c-8.439-1.004-16.336,3.885-19.202,11.89c-2.863,8,0.132,16.789,7.282,21.373
        c47.672,30.566,102.793,46.722,159.404,46.722c111.254,0,180.924-52.547,219.777-96.631
        c48.338-54.836,76.06-127.446,76.06-199.211c0-1.265-0.008-2.537-0.024-3.811c17.576-13.928,32.828-30.48,45.386-49.265
        C513.42,111.86,512.927,102.917,507.77,96.789z M447.131,154.728c-2.645,1.993-4.158,5.147-4.057,8.456
        c0.086,2.799,0.129,5.633,0.129,8.425c0,66.867-25.866,134.561-70.965,185.723c-36.075,40.928-100.834,89.716-204.475,89.716
        c-49.475,0-97.73-13.257-140.171-38.423c4.596,0.316,9.222,0.475,13.837,0.475c37.456,0,73.838-10.387,105.213-30.038
        c3.502-2.195,5.335-6.287,4.64-10.361c-0.697-4.075-3.783-7.326-7.816-8.234c-31.581-7.104-57.553-30.05-68.608-60.322
        c1.701,0.258,3.412,0.473,5.115,0.644c4.75,0.466,9.202-2.416,10.699-6.954c1.497-4.539-0.358-9.508-4.462-11.956
        c-28.06-16.734-45.763-46.996-46.651-79.439c3.985,2.013,8.121,3.766,12.341,5.228c4.347,1.505,9.163-0.084,11.758-3.882
        c2.597-3.797,2.33-8.861-0.651-12.365c-14.629-17.197-22.685-39.144-22.685-61.799c0-15.768,3.9-31.279,11.306-45.069
        c47.495,56.842,116.675,93.062,190.337,99.529c3.076,0.267,6.105-0.866,8.244-3.091s3.155-5.3,2.764-8.36
        c-0.519-4.065-0.782-8.219-0.782-12.344c0-52.566,42.768-95.332,95.336-95.332c24.725,0,49.052,9.914,66.741,27.198
        c2.46,2.403,5.965,3.408,9.323,2.665c18.548-4.087,36.34-10.801,52.975-19.987c-4.049,10.366-9.853,19.856-17.303,28.281
        c-3.006,3.399-3.405,8.376-0.978,12.211c2.426,3.835,7.097,5.607,11.453,4.344c6.018-1.74,11.985-3.781,17.819-6.092
        C476.151,129.269,462.58,143.088,447.131,154.728z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M89.95,145.834c-2.153-1.605-4.298-3.258-6.377-4.91c-4.409-3.506-10.826-2.774-14.331,1.636
        c-3.505,4.409-2.773,10.825,1.636,14.331c2.241,1.782,4.554,3.564,6.874,5.294c1.832,1.366,3.97,2.025,6.091,2.025
        c3.11,0,6.182-1.418,8.183-4.102C95.394,155.592,94.465,149.203,89.95,145.834z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M222.328,196.399c-36.715-3.223-73.142-14.6-105.344-32.9c-4.898-2.783-11.123-1.07-13.907,3.828
        c-2.783,4.898-1.07,11.123,3.828,13.907c34.73,19.738,74.026,32.009,113.639,35.487c0.304,0.026,0.605,0.04,0.904,0.04
        c5.229,0,9.682-4,10.148-9.309C232.088,201.84,227.939,196.892,222.328,196.399z" />
                          </g>
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
                    </a>
                  </div>
                  <div>
                    <h3>Fans</h3>
                    <span>1236</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md py-4">
                  <div class="p-3 bg-sky-200 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 304.36 304.36"
                        style="fill: #ffffff" xml:space="preserve">
                        <g id="XMLID_1_">
                          <path id="XMLID_807_" style="fill-rule: evenodd; clip-rule: evenodd" d="M261.945,175.576c10.096,9.857,20.752,19.131,29.807,29.982
          c4,4.822,7.787,9.798,10.684,15.394c4.105,7.955,0.387,16.709-6.746,17.184l-44.34-0.02c-11.436,0.949-20.559-3.655-28.23-11.474
          c-6.139-6.253-11.824-12.908-17.727-19.372c-2.42-2.642-4.953-5.128-7.979-7.093c-6.053-3.929-11.307-2.726-14.766,3.587
          c-3.523,6.421-4.322,13.531-4.668,20.687c-0.475,10.441-3.631,13.186-14.119,13.664c-22.414,1.057-43.686-2.334-63.447-13.641
          c-17.422-9.968-30.932-24.04-42.691-39.971C34.828,153.482,17.295,119.395,1.537,84.353C-2.01,76.458,0.584,72.22,9.295,72.07
          c14.465-0.281,28.928-0.261,43.41-0.02c5.879,0.086,9.771,3.458,12.041,9.012c7.826,19.243,17.402,37.551,29.422,54.521
          c3.201,4.518,6.465,9.036,11.113,12.216c5.142,3.521,9.057,2.354,11.476-3.374c1.535-3.632,2.207-7.544,2.553-11.434
          c1.146-13.383,1.297-26.743-0.713-40.079c-1.234-8.323-5.922-13.711-14.227-15.286c-4.238-0.803-3.607-2.38-1.555-4.799
          c3.564-4.172,6.916-6.769,13.598-6.769h50.111c7.889,1.557,9.641,5.101,10.721,13.039l0.043,55.663
          c-0.086,3.073,1.535,12.192,7.07,14.226c4.43,1.448,7.35-2.096,10.008-4.905c11.998-12.734,20.561-27.783,28.211-43.366
          c3.395-6.852,6.314-13.968,9.143-21.078c2.096-5.276,5.385-7.872,11.328-7.757l48.229,0.043c1.43,0,2.877,0.021,4.262,0.258
          c8.127,1.385,10.354,4.881,7.844,12.817c-3.955,12.451-11.65,22.827-19.174,33.251c-8.043,11.129-16.645,21.877-24.621,33.072
          C252.26,161.544,252.842,166.697,261.945,175.576L261.945,175.576z M261.945,175.576" />
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
                    </a>
                  </div>
                  <div>
                    <h3>Likes</h3>
                    <span>523</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-red-600 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="96.875px" height="96.875px"
                        viewBox="0 0 96.875 96.875" style="fill: #ffffff;" xml:space="preserve">
                        <g>
                          <path d="M95.201,25.538c-1.186-5.152-5.4-8.953-10.473-9.52c-12.013-1.341-24.172-1.348-36.275-1.341
		c-12.105-0.007-24.266,0-36.279,1.341c-5.07,0.567-9.281,4.368-10.467,9.52C0.019,32.875,0,40.884,0,48.438
		C0,55.992,0,64,1.688,71.336c1.184,5.151,5.396,8.952,10.469,9.52c12.012,1.342,24.172,1.349,36.277,1.342
		c12.107,0.007,24.264,0,36.275-1.342c5.07-0.567,9.285-4.368,10.471-9.52c1.689-7.337,1.695-15.345,1.695-22.898
		C96.875,40.884,96.889,32.875,95.201,25.538z M35.936,63.474c0-10.716,0-21.32,0-32.037c10.267,5.357,20.466,10.678,30.798,16.068
		C56.434,52.847,46.23,58.136,35.936,63.474z" />
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>

                    </a>
                  </div>
                  <div>
                    <h3>Subscribers</h3>
                    <span>590M</span>
                  </div>
                </div>
              </section>
          </section>
          <div class="flex justify-start items-center gap-2 py-6">
            <div class="w-[200px]">
              <h2 class="sub-title-02">Latest Posts</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4 py-2">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4 py-2">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-2 py-6 ">
              <div class="w-[220px]">
                <h2 class="sub-title-02">Follow us</h2>
              </div>
              <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
                <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
              </div>
            </div>
            <section>
              <div class="grid grid-cols-2 gap-2 mt-3">
                <div class="main-img-02">
                  <a href="#"><img src="../img/1.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                 c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                 C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>
                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/2.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                   c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                   C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/3.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                   c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                   C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/1.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                   c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                   C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/3.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                   c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                   C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/2.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                   c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                   C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
              </div>
            </section>
          </section>
        </div>
    </section>
  </div>
  <div class="bg-slider-02 py-6 px-2 md:px-8 xl:px-[120px]">
    <div class="flex justify-start lg:items-center py-6">
      <div class="flex justify-start items-center gap-2">
        <div class="w-[300px]">
          <h2 class="title-02">Meet our team</h2>
        </div>
        <div class="hidden md:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
          <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
        </div>
      </div>
    </div>
    <div class="slider-trend h-[450px] mt-6">
      <section>
        <div class="bg-white-02 mx-3">
          <div class="h-[300px] relative">
            <img src="../img/1.jpg" class="w-full h-full object-cover" />
            <div class="p-1 px-3 absolute left-[25px] bottom-[25px] bg-blue-500">
              <span class="uppercase text-white text-[18px]">Travel</span>
            </div>
          </div>
          <div class="p-6 infor-slider-02">
            <div class="pb-4">
              <h3>
                <a href="#">Beauty queens need beauty material & products</a>
              </h3>
            </div>
            <div class="flex justify-start items-center gap-4">
              <span>
                by
                <a href="#" class="transition-all duration-500">
                  Jone Deo</a>
              </span>
              <svg version="1.1" class="w-4 h-4" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                <g>
                  <g>
                    <path
                      d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                              c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                    <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                              c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                  </g>
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
              <span> June 20, 2022 </span>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="bg-white-02 mx-3">
          <div class="h-[300px] relative">
            <img src="../img/3.jpg" class="w-full h-full object-cover" />
            <div class="p-1 px-3 absolute left-[25px] bottom-[25px] bg-blue-500">
              <span class="uppercase text-white text-[18px]">Travel</span>
            </div>
          </div>
          <div class="p-6 infor-slider-02">
            <div class="pb-4">
              <h3>
                <a href="#">Beauty queens need beauty material & products</a>
              </h3>
            </div>
            <div class="flex justify-start items-center gap-4">
              <span>
                by
                <a href="#" class="transition-all duration-500">
                  Jone Deo</a>
              </span>
              <svg version="1.1" class="w-4 h-4" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                <g>
                  <g>
                    <path
                      d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                              c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                    <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                              c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                  </g>
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
              <span> June 20, 2022 </span>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="bg-white-02 mx-3">
          <div class="h-[300px] relative">
            <img src="../img/2.jpg" class="w-full h-full object-cover" />
            <div class="p-1 px-3 absolute left-[25px] bottom-[25px] bg-blue-500">
              <span class="uppercase text-white text-[18px]">Travel</span>
            </div>
          </div>
          <div class="p-6 infor-slider-02">
            <div class="pb-4">
              <h3>
                <a href="#">Beauty queens need beauty material & products</a>
              </h3>
            </div>
            <div class="flex justify-start items-center gap-4">
              <span>
                by
                <a href="#" class="transition-all duration-500">
                  Jone Deo</a>
              </span>
              <svg version="1.1" class="w-4 h-4" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                <g>
                  <g>
                    <path
                      d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                              c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                    <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                              c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                  </g>
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
              <span> June 20, 2022 </span>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="bg-white-02 mx-3">
          <div class="h-[300px] relative">
            <img src="../img/3.jpg" class="w-full h-full object-cover" />
            <div class="p-1 px-3 absolute left-[25px] bottom-[25px] bg-blue-500">
              <span class="uppercase text-white text-[18px]">Travel</span>
            </div>
          </div>
          <div class="p-6 infor-slider-02">
            <div class="pb-4">
              <h3>
                <a href="#">Beauty queens need beauty material & products</a>
              </h3>
            </div>
            <div class="flex justify-start items-center gap-4">
              <span>
                by
                <a href="#" class="transition-all duration-500">
                  Jone Deo</a>
              </span>
              <svg version="1.1" class="w-4 h-4" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                <g>
                  <g>
                    <path
                      d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                              c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                    <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                              c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                  </g>
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
              <span> June 20, 2022 </span>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="bg-white-02 mx-3">
          <div class="h-[300px] relative">
            <img src="../img/2.jpg" class="w-full h-full object-cover" />
            <div class="p-1 px-3 absolute left-[25px] bottom-[25px] bg-blue-500">
              <span class="uppercase text-white text-[18px]">Travel</span>
            </div>
          </div>
          <div class="p-6 infor-slider-02">
            <div class="pb-4">
              <h3>
                <a href="#">Beauty queens need beauty material & products</a>
              </h3>
            </div>
            <div class="flex justify-start items-center gap-4">
              <span>
                by
                <a href="#" class="transition-all duration-500">
                  Jone Deo</a>
              </span>
              <svg version="1.1" class="w-4 h-4" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                <g>
                  <g>
                    <path
                      d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                              c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                    <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                              c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                  </g>
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
              <span> June 20, 2022 </span>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>',
                'js_handle' => ' <script>
    $(".slider-trend").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      responsive: [
        {
          breakpoint: 2550,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 1440,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
      ]
    });
  </script>',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'author',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'html' => '<div class="sub-direct-02 py-10 px-2 md:px-8 xl:px-[120px]">
    <div class="flex flex-col justify-center items-center gap-1">
      <div class="w-[80px] h-[80px]">
        <img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full">
      </div>
      <h2>
        Back Theme
      </h2>
      <span>
        Content Writer
      </span>
      <p>
        Our goal has always been to motivate, encourage and release our fellow creatives to do thei thing
      </p>
      <ul class="flex gap-2">
        <li class="p-3  rounded-full f02-bg-svg">
          <a href="#">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
              viewBox="0 0 24 24" style="fill: #ffffff">
              <path
                d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z">
              </path>
            </svg>
          </a>
        </li>
        <li class="p-3  rounded-full f02-bg-svg">
          <a href="#">
            <svg version="1.1" class="w-4 h-4" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999"
              style="fill: #ffffff" xml:space="preserve">
              <g>
                <g>
                  <path d="M507.77,96.789c-3.92-4.669-9.903-6.958-15.769-6.358c2.345-4.855,4.354-9.891,6.016-15.091
c2.279-7.127-0.123-15.046-5.97-19.699c-5.849-4.662-14.103-5.232-20.545-1.416c-14.758,8.753-30.599,15.287-47.157,19.455
c-21.035-18.575-48.714-29.128-76.82-29.128c-63.816,0-115.735,51.917-115.735,115.731c0,0.714,0.006,1.428,0.019,2.142
c-64.801-8.793-124.951-42.372-166.494-93.332c-3.765-4.618-9.554-7.099-15.467-6.617C43.922,62.94,38.597,66.283,35.6,71.42
c-10.258,17.603-15.68,37.727-15.68,58.199c0,18.054,4.218,35.74,12.145,51.67c-1.32,0.393-2.602,0.936-3.818,1.634
c-5.477,3.138-8.967,9.007-9.111,15.299c-0.013,0.551-0.014,1.102-0.014,1.659c0,32.878,14.268,64.167,38.287,85.933
c-3.841,4.722-5.072,11.157-3.206,16.976c9.946,31.053,32.666,56.265,61.702,69.726C92.746,383.153,67.381,388.7,41.425,388.7
c-7.086,0-14.204-0.416-21.147-1.238c-8.439-1.004-16.336,3.885-19.202,11.89c-2.863,8,0.132,16.789,7.282,21.373
c47.672,30.566,102.793,46.722,159.404,46.722c111.254,0,180.924-52.547,219.777-96.631
c48.338-54.836,76.06-127.446,76.06-199.211c0-1.265-0.008-2.537-0.024-3.811c17.576-13.928,32.828-30.48,45.386-49.265
C513.42,111.86,512.927,102.917,507.77,96.789z M447.131,154.728c-2.645,1.993-4.158,5.147-4.057,8.456
c0.086,2.799,0.129,5.633,0.129,8.425c0,66.867-25.866,134.561-70.965,185.723c-36.075,40.928-100.834,89.716-204.475,89.716
c-49.475,0-97.73-13.257-140.171-38.423c4.596,0.316,9.222,0.475,13.837,0.475c37.456,0,73.838-10.387,105.213-30.038
c3.502-2.195,5.335-6.287,4.64-10.361c-0.697-4.075-3.783-7.326-7.816-8.234c-31.581-7.104-57.553-30.05-68.608-60.322
c1.701,0.258,3.412,0.473,5.115,0.644c4.75,0.466,9.202-2.416,10.699-6.954c1.497-4.539-0.358-9.508-4.462-11.956
c-28.06-16.734-45.763-46.996-46.651-79.439c3.985,2.013,8.121,3.766,12.341,5.228c4.347,1.505,9.163-0.084,11.758-3.882
c2.597-3.797,2.33-8.861-0.651-12.365c-14.629-17.197-22.685-39.144-22.685-61.799c0-15.768,3.9-31.279,11.306-45.069
c47.495,56.842,116.675,93.062,190.337,99.529c3.076,0.267,6.105-0.866,8.244-3.091s3.155-5.3,2.764-8.36
c-0.519-4.065-0.782-8.219-0.782-12.344c0-52.566,42.768-95.332,95.336-95.332c24.725,0,49.052,9.914,66.741,27.198
c2.46,2.403,5.965,3.408,9.323,2.665c18.548-4.087,36.34-10.801,52.975-19.987c-4.049,10.366-9.853,19.856-17.303,28.281
c-3.006,3.399-3.405,8.376-0.978,12.211c2.426,3.835,7.097,5.607,11.453,4.344c6.018-1.74,11.985-3.781,17.819-6.092
C476.151,129.269,462.58,143.088,447.131,154.728z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M89.95,145.834c-2.153-1.605-4.298-3.258-6.377-4.91c-4.409-3.506-10.826-2.774-14.331,1.636
c-3.505,4.409-2.773,10.825,1.636,14.331c2.241,1.782,4.554,3.564,6.874,5.294c1.832,1.366,3.97,2.025,6.091,2.025
c3.11,0,6.182-1.418,8.183-4.102C95.394,155.592,94.465,149.203,89.95,145.834z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M222.328,196.399c-36.715-3.223-73.142-14.6-105.344-32.9c-4.898-2.783-11.123-1.07-13.907,3.828
c-2.783,4.898-1.07,11.123,3.828,13.907c34.73,19.738,74.026,32.009,113.639,35.487c0.304,0.026,0.605,0.04,0.904,0.04
c5.229,0,9.682-4,10.148-9.309C232.088,201.84,227.939,196.892,222.328,196.399z" />
                </g>
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
          </a>
        </li>
        <li class="p-3  rounded-full f02-bg-svg">
          <a href="#">
            <svg version="1.1" class="w-4 h-4" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
              viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
              <g>
                <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                         c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                         c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                         c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                <path
                  d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                         C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                         c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                         c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                         C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
          </a>
        </li>
        <li class="p-3  rounded-full f02-bg-svg">
          <a href="#">
            <svg version="1.1" class="w-4 h-4" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 304.36 304.36"
              style="fill: #ffffff" xml:space="preserve">
              <g id="XMLID_1_">
                <path id="XMLID_807_" style="fill-rule: evenodd; clip-rule: evenodd" d="M261.945,175.576c10.096,9.857,20.752,19.131,29.807,29.982
c4,4.822,7.787,9.798,10.684,15.394c4.105,7.955,0.387,16.709-6.746,17.184l-44.34-0.02c-11.436,0.949-20.559-3.655-28.23-11.474
c-6.139-6.253-11.824-12.908-17.727-19.372c-2.42-2.642-4.953-5.128-7.979-7.093c-6.053-3.929-11.307-2.726-14.766,3.587
c-3.523,6.421-4.322,13.531-4.668,20.687c-0.475,10.441-3.631,13.186-14.119,13.664c-22.414,1.057-43.686-2.334-63.447-13.641
c-17.422-9.968-30.932-24.04-42.691-39.971C34.828,153.482,17.295,119.395,1.537,84.353C-2.01,76.458,0.584,72.22,9.295,72.07
c14.465-0.281,28.928-0.261,43.41-0.02c5.879,0.086,9.771,3.458,12.041,9.012c7.826,19.243,17.402,37.551,29.422,54.521
c3.201,4.518,6.465,9.036,11.113,12.216c5.142,3.521,9.057,2.354,11.476-3.374c1.535-3.632,2.207-7.544,2.553-11.434
c1.146-13.383,1.297-26.743-0.713-40.079c-1.234-8.323-5.922-13.711-14.227-15.286c-4.238-0.803-3.607-2.38-1.555-4.799
c3.564-4.172,6.916-6.769,13.598-6.769h50.111c7.889,1.557,9.641,5.101,10.721,13.039l0.043,55.663
c-0.086,3.073,1.535,12.192,7.07,14.226c4.43,1.448,7.35-2.096,10.008-4.905c11.998-12.734,20.561-27.783,28.211-43.366
c3.395-6.852,6.314-13.968,9.143-21.078c2.096-5.276,5.385-7.872,11.328-7.757l48.229,0.043c1.43,0,2.877,0.021,4.262,0.258
c8.127,1.385,10.354,4.881,7.844,12.817c-3.955,12.451-11.65,22.827-19.174,33.251c-8.043,11.129-16.645,21.877-24.621,33.072
C252.26,161.544,252.842,166.697,261.945,175.576L261.945,175.576z M261.945,175.576" />
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
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="content px-2 md:px-8 xl:px-[120px]">
    <section>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mb-6">
        <div class="col-span-12 lg:col-span-8">
          <div class="flex justify-start items-center gap-2 py-6">
            <div class="w-[300px]">
              <h2 class="title-02">Author Posts</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <div class="h-[650px] md:h-[500px] relative bg-black">
              <div class="h-[300px] md:h-[500px]">
                <img src="../img/1.jpg" class="w-full h-full object-cover" alt="" />
              </div>

              <div class="infor-image-02 md:absolute md:left-[25px] md:bottom-[25px] p-4">
                <div class="p-1 px-3 bg-pink-500 w-[95px]">
                  <span class="uppercase text-white text-[16px]">Politics</span>
                </div>
                <div class="py-4 max-h-[145px] overflow-hidden ">
                  <h2 class="">
                    <a href="#" class="xl:text-[36px] font-bold">Well designed and well printed only for you and the
                      audience.
                    </a>
                  </h2>
                </div>
                <div class="flex justify-start items-center gap-4 flex-wrap">
                  <div class="flex justify-start items-center gap-2">
                    <div class="w-[30px] h-[30px] rounded-full">
                      <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                    </div>
                    <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                      viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                          <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                        </g>
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
                    <span>March 26, 2022</span>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <svg class="w-5 h-5" viewBox="0 -2 28 28" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="m14 2c-.038 0-.083-.001-.128-.001-2.098 0-4.102.399-5.942 1.124l.11-.038c-1.74.644-3.217 1.645-4.4 2.922l-.007.007c-.99 1.036-1.608 2.436-1.633 3.98v.005c.013 1.258.432 2.415 1.131 3.351l-.011-.015c.835 1.131 1.885 2.053 3.096 2.719l.049.025 1.36.782-.426 1.498c-.272 1.021-.646 1.915-1.122 2.741l.029-.054c1.651-.691 3.071-1.59 4.313-2.686l-.017.014.672-.594.89.094c.607.077 1.312.122 2.028.125h.004c.038 0 .083.001.128.001 2.098 0 4.102-.399 5.942-1.124l-.11.038c1.74-.644 3.217-1.645 4.4-2.922l.007-.007c1.009-1.025 1.632-2.432 1.632-3.984s-.623-2.96-1.633-3.985l.001.001c-1.19-1.284-2.666-2.286-4.329-2.904l-.078-.025c-1.73-.687-3.735-1.086-5.833-1.086-.044 0-.088 0-.132.001h.007zm14 8c-.012 1.924-.72 3.681-1.884 5.033l.009-.01c-1.349 1.592-3.059 2.837-5.008 3.611l-.086.03c-2.023.846-4.374 1.337-6.839 1.337-.068 0-.135 0-.202-.001h.01c-.8-.002-1.588-.047-2.363-.134l.097.009c-1.981 1.759-4.399 3.072-7.069 3.756l-.118.026c-.503.145-1.107.266-1.726.339l-.055.005h-.08c-.163 0-.311-.062-.422-.164-.123-.111-.212-.258-.249-.424l-.001-.005v-.016c-.017-.029-.027-.064-.027-.102 0-.033.008-.063.021-.091l-.001.001c.02-.047.031-.101.031-.159 0-.001 0-.001 0-.002q-.008-.031.07-.149l.094-.141.11-.133.125-.141q.11-.125.484-.539l.539-.594q.164-.18.484-.617c.174-.231.343-.493.491-.767l.017-.033q.187-.359.422-.922c.137-.317.276-.712.39-1.117l.017-.07c-1.558-.861-2.852-2.018-3.844-3.405l-.024-.035c-.878-1.216-1.407-2.735-1.414-4.377v-.002c.012-1.924.72-3.681 1.884-5.033l-.009.01c1.349-1.592 3.059-2.837 5.008-3.611l.086-.03c2.023-.846 4.374-1.337 6.839-1.337.068 0 .135 0 .202.001h-.01c.057-.001.125-.001.192-.001 2.465 0 4.816.491 6.959 1.381l-.12-.044c2.034.804 3.745 2.048 5.078 3.622l.015.018c1.155 1.342 1.863 3.099 1.875 5.021v.003z" />
                    </svg>
                    <span>95 Comments</span>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
            <div>
              <div class="h-[300px] relative">
                <img src="../img/2.jpg" class="w-full h-full object-cover" alt="" />
                <div class="p-1 px-3 bg-pink-500 absolute left-[25px] bottom-[25px] p-4">
                  <span class="uppercase text-white text-[16px]">Politics</span>
                </div>
              </div>
              <div class="infor-slider-02 ">
                <h3 class="py-4">
                  <a href="#" class="font-bold text-[24px]">We have prepared 10 types of projects with more than
                    100 pages We have lots of courses and programs</a>
                </h3>
                <div class="flex gap-4">
                  <div class="flex justify-start items-center gap-2">
                    <div class="w-[30px] h-[30px] rounded-full">
                      <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                    </div>
                    <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                      viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                          <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                        </g>
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
                    <span>March 26, 2022</span>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <section>
                <div class="flex justify-start items-start gap-4">
                  <div class="w-[122px]">
                    <div class="w-[127px] h-[127px]">
                      <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover" /></a>
                    </div>
                  </div>

                  <div class="text-post-02">
                    <h2>
                      Music</h2>
                    <p>
                      <a href="#">Summer activities in music</a>
                    </p>
                    <div class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                  c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                  c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span>March 26, 2022</span>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-start items-start gap-4 py-8">
                  <div class="w-[122px]">
                    <div class="w-[127px] h-[127px]">
                      <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover" /></a>
                    </div>
                  </div>

                  <div class="text-post-02">
                    <h2>
                      Music</h2>
                    <p>
                      <a href="#">Summer activities in music</a>
                    </p>
                    <div class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                  c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                  c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span>March 26, 2022</span>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-start items-start gap-4">
                  <div class="w-[122px]">
                    <div class="w-[127px] h-[127px]">
                      <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover" /></a>
                    </div>
                  </div>

                  <div class="text-post-02">
                    <h2>
                      Music</h2>
                    <p>
                      <a href="#">Summer activities in music</a>
                    </p>
                    <div class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                  c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                  c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span>March 26, 2022</span>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-4">

          <div class="flex justify-start items-center gap-2 py-6">
            <div class="w-[200px]">
              <h2 class="sub-title-02">Latest Posts</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <div class="flex justify-start items-center gap-2 py-6">
            <div class="w-[200px]">
              <h2 class="sub-title-02">Get in touch</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <div class="grid grid-cols-2 gap-4">
              <section>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-blue-700 rounded-sm svg-02">
                    <a href="#">
                      <svg class="w-5 h-5 " xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                        viewBox="0 0 24 24" style="fill: #ffffff">
                        <path
                          d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z">
                        </path>
                      </svg>
                    </a>
                  </div>
                  <div>
                    <h3>Followers</h3>
                    <span>750</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md py-4">
                  <div class="p-3 bg-pink-500 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                 c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                 C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </a>
                  </div>
                  <div>
                    <h3>Likes</h3>
                    <span>523</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-cyan-700 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="93.06px" height="93.06px"
                        viewBox="0 0 93.06 93.06" style="fill:#ffffff" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M11.185,0.08C5.004,0.08,0.001,5.092,0,11.259c0,6.173,5.003,11.184,11.186,11.184c6.166,0,11.176-5.011,11.176-11.184
  C22.362,5.091,17.351,0.08,11.185,0.08z" />
                            <rect x="1.538" y="30.926" width="19.287" height="62.054" />
                            <path d="M69.925,29.383c-9.382,0-15.673,5.144-18.248,10.022h-0.258v-8.479H32.921H32.92v62.053h19.27V62.281
  c0-8.093,1.541-15.932,11.575-15.932c9.89,0,10.022,9.256,10.022,16.451v30.178H93.06V58.942
  C93.06,42.235,89.455,29.383,69.925,29.383z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>

                    </a>
                  </div>
                  <div>
                    <h3>Followers</h3>
                    <span>1025</span>
                  </div>
                </div>
              </section>
              <section>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-sky-400 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999"
                        style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M507.77,96.789c-3.92-4.669-9.903-6.958-15.769-6.358c2.345-4.855,4.354-9.891,6.016-15.091
    c2.279-7.127-0.123-15.046-5.97-19.699c-5.849-4.662-14.103-5.232-20.545-1.416c-14.758,8.753-30.599,15.287-47.157,19.455
    c-21.035-18.575-48.714-29.128-76.82-29.128c-63.816,0-115.735,51.917-115.735,115.731c0,0.714,0.006,1.428,0.019,2.142
    c-64.801-8.793-124.951-42.372-166.494-93.332c-3.765-4.618-9.554-7.099-15.467-6.617C43.922,62.94,38.597,66.283,35.6,71.42
    c-10.258,17.603-15.68,37.727-15.68,58.199c0,18.054,4.218,35.74,12.145,51.67c-1.32,0.393-2.602,0.936-3.818,1.634
    c-5.477,3.138-8.967,9.007-9.111,15.299c-0.013,0.551-0.014,1.102-0.014,1.659c0,32.878,14.268,64.167,38.287,85.933
    c-3.841,4.722-5.072,11.157-3.206,16.976c9.946,31.053,32.666,56.265,61.702,69.726C92.746,383.153,67.381,388.7,41.425,388.7
    c-7.086,0-14.204-0.416-21.147-1.238c-8.439-1.004-16.336,3.885-19.202,11.89c-2.863,8,0.132,16.789,7.282,21.373
    c47.672,30.566,102.793,46.722,159.404,46.722c111.254,0,180.924-52.547,219.777-96.631
    c48.338-54.836,76.06-127.446,76.06-199.211c0-1.265-0.008-2.537-0.024-3.811c17.576-13.928,32.828-30.48,45.386-49.265
    C513.42,111.86,512.927,102.917,507.77,96.789z M447.131,154.728c-2.645,1.993-4.158,5.147-4.057,8.456
    c0.086,2.799,0.129,5.633,0.129,8.425c0,66.867-25.866,134.561-70.965,185.723c-36.075,40.928-100.834,89.716-204.475,89.716
    c-49.475,0-97.73-13.257-140.171-38.423c4.596,0.316,9.222,0.475,13.837,0.475c37.456,0,73.838-10.387,105.213-30.038
    c3.502-2.195,5.335-6.287,4.64-10.361c-0.697-4.075-3.783-7.326-7.816-8.234c-31.581-7.104-57.553-30.05-68.608-60.322
    c1.701,0.258,3.412,0.473,5.115,0.644c4.75,0.466,9.202-2.416,10.699-6.954c1.497-4.539-0.358-9.508-4.462-11.956
    c-28.06-16.734-45.763-46.996-46.651-79.439c3.985,2.013,8.121,3.766,12.341,5.228c4.347,1.505,9.163-0.084,11.758-3.882
    c2.597-3.797,2.33-8.861-0.651-12.365c-14.629-17.197-22.685-39.144-22.685-61.799c0-15.768,3.9-31.279,11.306-45.069
    c47.495,56.842,116.675,93.062,190.337,99.529c3.076,0.267,6.105-0.866,8.244-3.091s3.155-5.3,2.764-8.36
    c-0.519-4.065-0.782-8.219-0.782-12.344c0-52.566,42.768-95.332,95.336-95.332c24.725,0,49.052,9.914,66.741,27.198
    c2.46,2.403,5.965,3.408,9.323,2.665c18.548-4.087,36.34-10.801,52.975-19.987c-4.049,10.366-9.853,19.856-17.303,28.281
    c-3.006,3.399-3.405,8.376-0.978,12.211c2.426,3.835,7.097,5.607,11.453,4.344c6.018-1.74,11.985-3.781,17.819-6.092
    C476.151,129.269,462.58,143.088,447.131,154.728z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M89.95,145.834c-2.153-1.605-4.298-3.258-6.377-4.91c-4.409-3.506-10.826-2.774-14.331,1.636
    c-3.505,4.409-2.773,10.825,1.636,14.331c2.241,1.782,4.554,3.564,6.874,5.294c1.832,1.366,3.97,2.025,6.091,2.025
    c3.11,0,6.182-1.418,8.183-4.102C95.394,155.592,94.465,149.203,89.95,145.834z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M222.328,196.399c-36.715-3.223-73.142-14.6-105.344-32.9c-4.898-2.783-11.123-1.07-13.907,3.828
    c-2.783,4.898-1.07,11.123,3.828,13.907c34.73,19.738,74.026,32.009,113.639,35.487c0.304,0.026,0.605,0.04,0.904,0.04
    c5.229,0,9.682-4,10.148-9.309C232.088,201.84,227.939,196.892,222.328,196.399z" />
                          </g>
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
                    </a>
                  </div>
                  <div>
                    <h3>Fans</h3>
                    <span>1236</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md py-4">
                  <div class="p-3 bg-sky-200 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 304.36 304.36"
                        style="fill: #ffffff" xml:space="preserve">
                        <g id="XMLID_1_">
                          <path id="XMLID_807_" style="fill-rule: evenodd; clip-rule: evenodd" d="M261.945,175.576c10.096,9.857,20.752,19.131,29.807,29.982
      c4,4.822,7.787,9.798,10.684,15.394c4.105,7.955,0.387,16.709-6.746,17.184l-44.34-0.02c-11.436,0.949-20.559-3.655-28.23-11.474
      c-6.139-6.253-11.824-12.908-17.727-19.372c-2.42-2.642-4.953-5.128-7.979-7.093c-6.053-3.929-11.307-2.726-14.766,3.587
      c-3.523,6.421-4.322,13.531-4.668,20.687c-0.475,10.441-3.631,13.186-14.119,13.664c-22.414,1.057-43.686-2.334-63.447-13.641
      c-17.422-9.968-30.932-24.04-42.691-39.971C34.828,153.482,17.295,119.395,1.537,84.353C-2.01,76.458,0.584,72.22,9.295,72.07
      c14.465-0.281,28.928-0.261,43.41-0.02c5.879,0.086,9.771,3.458,12.041,9.012c7.826,19.243,17.402,37.551,29.422,54.521
      c3.201,4.518,6.465,9.036,11.113,12.216c5.142,3.521,9.057,2.354,11.476-3.374c1.535-3.632,2.207-7.544,2.553-11.434
      c1.146-13.383,1.297-26.743-0.713-40.079c-1.234-8.323-5.922-13.711-14.227-15.286c-4.238-0.803-3.607-2.38-1.555-4.799
      c3.564-4.172,6.916-6.769,13.598-6.769h50.111c7.889,1.557,9.641,5.101,10.721,13.039l0.043,55.663
      c-0.086,3.073,1.535,12.192,7.07,14.226c4.43,1.448,7.35-2.096,10.008-4.905c11.998-12.734,20.561-27.783,28.211-43.366
      c3.395-6.852,6.314-13.968,9.143-21.078c2.096-5.276,5.385-7.872,11.328-7.757l48.229,0.043c1.43,0,2.877,0.021,4.262,0.258
      c8.127,1.385,10.354,4.881,7.844,12.817c-3.955,12.451-11.65,22.827-19.174,33.251c-8.043,11.129-16.645,21.877-24.621,33.072
      C252.26,161.544,252.842,166.697,261.945,175.576L261.945,175.576z M261.945,175.576" />
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
                    </a>
                  </div>
                  <div>
                    <h3>Likes</h3>
                    <span>523</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-red-600 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="96.875px" height="96.875px"
                        viewBox="0 0 96.875 96.875" style="fill: #ffffff;" xml:space="preserve">
                        <g>
                          <path d="M95.201,25.538c-1.186-5.152-5.4-8.953-10.473-9.52c-12.013-1.341-24.172-1.348-36.275-1.341
c-12.105-0.007-24.266,0-36.279,1.341c-5.07,0.567-9.281,4.368-10.467,9.52C0.019,32.875,0,40.884,0,48.438
C0,55.992,0,64,1.688,71.336c1.184,5.151,5.396,8.952,10.469,9.52c12.012,1.342,24.172,1.349,36.277,1.342
c12.107,0.007,24.264,0,36.275-1.342c5.07-0.567,9.285-4.368,10.471-9.52c1.689-7.337,1.695-15.345,1.695-22.898
C96.875,40.884,96.889,32.875,95.201,25.538z M35.936,63.474c0-10.716,0-21.32,0-32.037c10.267,5.357,20.466,10.678,30.798,16.068
C56.434,52.847,46.23,58.136,35.936,63.474z" />
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>

                    </a>
                  </div>
                  <div>
                    <h3>Subscribers</h3>
                    <span>590M</span>
                  </div>
                </div>
              </section>
          </section>
        </div>
    </section>
  </div>',
                'js_handle' => '',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'policy',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'html' => '  <div class="sub-direct-02 py-10 px-2 md:px-8 xl:px-[120px]">
    <div class="flex justify-center items-center">
      <h2>
        Privacy Policy
      </h2>
    </div>
    <div class="flex justify-center items-center gap-2 ">
      <a href="#" class="active">Home</a>
      <span>.</span>
      <a href="#">
        Privacy Policy</a>
    </div>
  </div>
  <div class="content px-2 md:px-8 xl:px-[120px]">

    <section>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mb-6">
        <div class="col-span-12 lg:col-span-8">
          <div class="flex justify-start items-center gap-2 py-6">
            <div class="w-[300px]">
              <h2 class="title-02">Our policy</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <div class="about-02 flex flex-col justify-start items-start gap-4 ">
              <p>Possimus labore ad tempora blandit totam blanditiis fusce urna mollit facilisi expedita? Sociis,
                facilisis adipisci maiores dolores voluptate odio magna eius iste facilisi illo, illo elementum per
                interdum! Odit pellentesque atque commodi, hic hendrerit leo commodo voluptates maiores mollit, dolor
                voluptatem recusandae dolorem dolore hac, iaculis, aliquet! Earum facere, nihil, sodales cillum! Arcu
                pulvinar, temporibus integer ullamcorper.</p>
              <div>
                <img src="../img/1.jpg" alt="" class="w-full h-full object-cover">
              </div>
              <p>Possimus labore ad tempora blandit totam blanditiis fusce urna mollit facilisi expedita? Sociis,
                facilisis adipisci maiores dolores voluptate odio magna eius iste facilisi illo, illo elementum per
                interdum! Odit pellentesque atque commodi, hic hendrerit leo commodo voluptates maiores mollit, dolor
                voluptatem recusandae dolorem dolore hac, iaculis, aliquet! Earum facere, nihil, sodales cillum! Arcu
                pulvinar, temporibus integer ullamcorper.</p>
              <h2>
                Unique visual system and method.
              </h2>
              <p>
                Rhoncus urna aliquet? Magni varius? Tempora penatibus odio quas quis cupidatat magni? Dis exercitation,
                dignissimos vestibulum? Totam nihil, pulvinar etiam platea itaque, officia? Cillum auctor facilis, eu
                nostra euismod explicabo. Voluptate eget ullam omnis habitant sociis vivamus.
              </p>
              <ul>
                <li><a href="#">User Experience</a></li>
                <li><a href="#">Unique layouts Blocks</a></li>
                <li><a href="#">Strategy and Art Direction</a></li>
              </ul>
              <p>Adipisci, reprehenderit platea cras ut quia consectetur convallis.</p>
            </div>
            <button class="btn-view-02 transition-all duration-500 p-3 px-6 rounded-sm mt-8">Our terms</button>
          </section>
        </div>
        <div class="col-span-12 lg:col-span-4">
          <div class="flex justify-start items-center gap-2 py-6">
            <div class="w-[200px]">
              <h2 class="sub-title-02">Get in touch</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <div class="grid grid-cols-2 gap-4">
              <section>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-blue-700 rounded-sm svg-02">
                    <a href="#">
                      <svg class="w-5 h-5 " xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                        viewBox="0 0 24 24" style="fill: #ffffff">
                        <path
                          d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z">
                        </path>
                      </svg>
                    </a>
                  </div>
                  <div>
                    <h3>Followers</h3>
                    <span>750</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md py-4">
                  <div class="p-3 bg-pink-500 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                 c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                 C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </a>
                  </div>
                  <div>
                    <h3>Likes</h3>
                    <span>523</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-cyan-700 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="93.06px" height="93.06px"
                        viewBox="0 0 93.06 93.06" style="fill:#ffffff" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M11.185,0.08C5.004,0.08,0.001,5.092,0,11.259c0,6.173,5.003,11.184,11.186,11.184c6.166,0,11.176-5.011,11.176-11.184
  C22.362,5.091,17.351,0.08,11.185,0.08z" />
                            <rect x="1.538" y="30.926" width="19.287" height="62.054" />
                            <path d="M69.925,29.383c-9.382,0-15.673,5.144-18.248,10.022h-0.258v-8.479H32.921H32.92v62.053h19.27V62.281
  c0-8.093,1.541-15.932,11.575-15.932c9.89,0,10.022,9.256,10.022,16.451v30.178H93.06V58.942
  C93.06,42.235,89.455,29.383,69.925,29.383z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>

                    </a>
                  </div>
                  <div>
                    <h3>Followers</h3>
                    <span>1025</span>
                  </div>
                </div>
              </section>
              <section>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-sky-400 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999"
                        style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M507.77,96.789c-3.92-4.669-9.903-6.958-15.769-6.358c2.345-4.855,4.354-9.891,6.016-15.091
    c2.279-7.127-0.123-15.046-5.97-19.699c-5.849-4.662-14.103-5.232-20.545-1.416c-14.758,8.753-30.599,15.287-47.157,19.455
    c-21.035-18.575-48.714-29.128-76.82-29.128c-63.816,0-115.735,51.917-115.735,115.731c0,0.714,0.006,1.428,0.019,2.142
    c-64.801-8.793-124.951-42.372-166.494-93.332c-3.765-4.618-9.554-7.099-15.467-6.617C43.922,62.94,38.597,66.283,35.6,71.42
    c-10.258,17.603-15.68,37.727-15.68,58.199c0,18.054,4.218,35.74,12.145,51.67c-1.32,0.393-2.602,0.936-3.818,1.634
    c-5.477,3.138-8.967,9.007-9.111,15.299c-0.013,0.551-0.014,1.102-0.014,1.659c0,32.878,14.268,64.167,38.287,85.933
    c-3.841,4.722-5.072,11.157-3.206,16.976c9.946,31.053,32.666,56.265,61.702,69.726C92.746,383.153,67.381,388.7,41.425,388.7
    c-7.086,0-14.204-0.416-21.147-1.238c-8.439-1.004-16.336,3.885-19.202,11.89c-2.863,8,0.132,16.789,7.282,21.373
    c47.672,30.566,102.793,46.722,159.404,46.722c111.254,0,180.924-52.547,219.777-96.631
    c48.338-54.836,76.06-127.446,76.06-199.211c0-1.265-0.008-2.537-0.024-3.811c17.576-13.928,32.828-30.48,45.386-49.265
    C513.42,111.86,512.927,102.917,507.77,96.789z M447.131,154.728c-2.645,1.993-4.158,5.147-4.057,8.456
    c0.086,2.799,0.129,5.633,0.129,8.425c0,66.867-25.866,134.561-70.965,185.723c-36.075,40.928-100.834,89.716-204.475,89.716
    c-49.475,0-97.73-13.257-140.171-38.423c4.596,0.316,9.222,0.475,13.837,0.475c37.456,0,73.838-10.387,105.213-30.038
    c3.502-2.195,5.335-6.287,4.64-10.361c-0.697-4.075-3.783-7.326-7.816-8.234c-31.581-7.104-57.553-30.05-68.608-60.322
    c1.701,0.258,3.412,0.473,5.115,0.644c4.75,0.466,9.202-2.416,10.699-6.954c1.497-4.539-0.358-9.508-4.462-11.956
    c-28.06-16.734-45.763-46.996-46.651-79.439c3.985,2.013,8.121,3.766,12.341,5.228c4.347,1.505,9.163-0.084,11.758-3.882
    c2.597-3.797,2.33-8.861-0.651-12.365c-14.629-17.197-22.685-39.144-22.685-61.799c0-15.768,3.9-31.279,11.306-45.069
    c47.495,56.842,116.675,93.062,190.337,99.529c3.076,0.267,6.105-0.866,8.244-3.091s3.155-5.3,2.764-8.36
    c-0.519-4.065-0.782-8.219-0.782-12.344c0-52.566,42.768-95.332,95.336-95.332c24.725,0,49.052,9.914,66.741,27.198
    c2.46,2.403,5.965,3.408,9.323,2.665c18.548-4.087,36.34-10.801,52.975-19.987c-4.049,10.366-9.853,19.856-17.303,28.281
    c-3.006,3.399-3.405,8.376-0.978,12.211c2.426,3.835,7.097,5.607,11.453,4.344c6.018-1.74,11.985-3.781,17.819-6.092
    C476.151,129.269,462.58,143.088,447.131,154.728z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M89.95,145.834c-2.153-1.605-4.298-3.258-6.377-4.91c-4.409-3.506-10.826-2.774-14.331,1.636
    c-3.505,4.409-2.773,10.825,1.636,14.331c2.241,1.782,4.554,3.564,6.874,5.294c1.832,1.366,3.97,2.025,6.091,2.025
    c3.11,0,6.182-1.418,8.183-4.102C95.394,155.592,94.465,149.203,89.95,145.834z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M222.328,196.399c-36.715-3.223-73.142-14.6-105.344-32.9c-4.898-2.783-11.123-1.07-13.907,3.828
    c-2.783,4.898-1.07,11.123,3.828,13.907c34.73,19.738,74.026,32.009,113.639,35.487c0.304,0.026,0.605,0.04,0.904,0.04
    c5.229,0,9.682-4,10.148-9.309C232.088,201.84,227.939,196.892,222.328,196.399z" />
                          </g>
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
                    </a>
                  </div>
                  <div>
                    <h3>Fans</h3>
                    <span>1236</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md py-4">
                  <div class="p-3 bg-sky-200 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 304.36 304.36"
                        style="fill: #ffffff" xml:space="preserve">
                        <g id="XMLID_1_">
                          <path id="XMLID_807_" style="fill-rule: evenodd; clip-rule: evenodd" d="M261.945,175.576c10.096,9.857,20.752,19.131,29.807,29.982
      c4,4.822,7.787,9.798,10.684,15.394c4.105,7.955,0.387,16.709-6.746,17.184l-44.34-0.02c-11.436,0.949-20.559-3.655-28.23-11.474
      c-6.139-6.253-11.824-12.908-17.727-19.372c-2.42-2.642-4.953-5.128-7.979-7.093c-6.053-3.929-11.307-2.726-14.766,3.587
      c-3.523,6.421-4.322,13.531-4.668,20.687c-0.475,10.441-3.631,13.186-14.119,13.664c-22.414,1.057-43.686-2.334-63.447-13.641
      c-17.422-9.968-30.932-24.04-42.691-39.971C34.828,153.482,17.295,119.395,1.537,84.353C-2.01,76.458,0.584,72.22,9.295,72.07
      c14.465-0.281,28.928-0.261,43.41-0.02c5.879,0.086,9.771,3.458,12.041,9.012c7.826,19.243,17.402,37.551,29.422,54.521
      c3.201,4.518,6.465,9.036,11.113,12.216c5.142,3.521,9.057,2.354,11.476-3.374c1.535-3.632,2.207-7.544,2.553-11.434
      c1.146-13.383,1.297-26.743-0.713-40.079c-1.234-8.323-5.922-13.711-14.227-15.286c-4.238-0.803-3.607-2.38-1.555-4.799
      c3.564-4.172,6.916-6.769,13.598-6.769h50.111c7.889,1.557,9.641,5.101,10.721,13.039l0.043,55.663
      c-0.086,3.073,1.535,12.192,7.07,14.226c4.43,1.448,7.35-2.096,10.008-4.905c11.998-12.734,20.561-27.783,28.211-43.366
      c3.395-6.852,6.314-13.968,9.143-21.078c2.096-5.276,5.385-7.872,11.328-7.757l48.229,0.043c1.43,0,2.877,0.021,4.262,0.258
      c8.127,1.385,10.354,4.881,7.844,12.817c-3.955,12.451-11.65,22.827-19.174,33.251c-8.043,11.129-16.645,21.877-24.621,33.072
      C252.26,161.544,252.842,166.697,261.945,175.576L261.945,175.576z M261.945,175.576" />
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
                    </a>
                  </div>
                  <div>
                    <h3>Likes</h3>
                    <span>523</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-red-600 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="96.875px" height="96.875px"
                        viewBox="0 0 96.875 96.875" style="fill: #ffffff;" xml:space="preserve">
                        <g>
                          <path d="M95.201,25.538c-1.186-5.152-5.4-8.953-10.473-9.52c-12.013-1.341-24.172-1.348-36.275-1.341
c-12.105-0.007-24.266,0-36.279,1.341c-5.07,0.567-9.281,4.368-10.467,9.52C0.019,32.875,0,40.884,0,48.438
C0,55.992,0,64,1.688,71.336c1.184,5.151,5.396,8.952,10.469,9.52c12.012,1.342,24.172,1.349,36.277,1.342
c12.107,0.007,24.264,0,36.275-1.342c5.07-0.567,9.285-4.368,10.471-9.52c1.689-7.337,1.695-15.345,1.695-22.898
C96.875,40.884,96.889,32.875,95.201,25.538z M35.936,63.474c0-10.716,0-21.32,0-32.037c10.267,5.357,20.466,10.678,30.798,16.068
C56.434,52.847,46.23,58.136,35.936,63.474z" />
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>

                    </a>
                  </div>
                  <div>
                    <h3>Subscribers</h3>
                    <span>590M</span>
                  </div>
                </div>
              </section>
          </section>
          <div class="flex justify-start items-center gap-2 py-6">
            <div class="w-[200px]">
              <h2 class="sub-title-02">Latest Posts</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4 py-2">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4 py-2">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-2 py-6 ">
              <div class="w-[220px]">
                <h2 class="sub-title-02">Follow us</h2>
              </div>
              <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
                <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
              </div>
            </div>
            <section>
              <div class="grid grid-cols-2 gap-2 mt-3">
                <div class="main-img-02">
                  <a href="#"><img src="../img/1.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                             c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                             c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                             c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                             C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                             c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                             c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                             C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>
                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/2.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/3.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/1.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/3.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/2.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
              </div>
            </section>
          </section>
        </div>
    </section>
  </div>',
                'js_handle' => '',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'post-single',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'html' => '<div class="sub-direct-02 py-10 px-2 md:px-8 xl:px-[120px]">
    <div class="flex justify-center items-center">
      <h2>
        Blog Single
      </h2>
    </div>
    <div class="flex justify-center items-center gap-2 ">
      <a href="#" class="active">Home</a>
      <span>.</span>
      <a href="#">Blog Single</a>
    </div>
  </div>
  <div class="content px-2 md:px-8 xl:px-[120px]">
    <section>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mb-6">
        <div class="col-span-12 lg:col-span-8">
          <section>
            <div class="infor-post-detail-02 border-b-[1px] pb-6 mt-6">
              <div class=" flex flex-col justify-start item-start gap-6">
                <div class="w-full h-[230px] md:h-[350px] xl:h-[480px]">
                  <a href="/content2/post-single.html"><img src="../img/1.jpg"
                      class="w-full h-full rounded-sm object-cover" alt=""></a>
                </div>

                <div class="flex flex-col justify-start items-start gap-4 lg:px-8">
                  <h3>
                    Those other Collage Expenses.
                  </h3>
                  <p>
                    Our goal has always been to motivate, encourage and release our fellow creatives to do thei thing,
                    so we’ve lovingly crafted surface of…
                  </p>
                  <p>
                    Education every new parents knows the feeling nothing more than for everyone to get at some
                    sleep.But at least you’ve got Google. start building your first prototype today!
                  </p>
                  <p>
                    Another important part of staying healthy is staying active. Opening up this app concept shows
                    several options for workouts, from yoga to biking. Tapping on the small gray cards while swiping
                    through them enlarges them, turns them bright, and even brings a fun animation moving across the
                    card. Selecting in cycling.
                  </p>
                  <h3>
                    Unordered & Ordered Lists
                  </h3>
                  <p>
                    It is advisable to use your network to successfully land a job. Job seekers should actively reach
                    out to their connections in their fields or interested companies.
                  </p>
                  <ul class="ml-3">
                    <li class="px-2"><a href="#"> this is my text </a></li>
                    <li class="px-2"><a href="#"> this is my text </a></li>
                    <li class="px-2"><a href="#"> this is my text </a></li>
                    <li class="px-2"><a href="#"> this is my text </a></li>
                  </ul>
                  <p>
                    Sometimes, even a good email get’s trapped, which requires actual human intervention. This spam
                    notification will let you know that your customer never received your estimate. Ensure to reach out
                    to your customer and ask them to add happening.
                  </p>
                </div>
                <div class="flex justify-between items-center pt-4">
                  <div class="flex justify-start items-center gap-2">
                    <div class="w-[36px] h-[36px] rounded-full">
                      <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                    </div>
                    <span>
                      by
                      <a href="#" class="transition-all duration-500">
                        Jone Deo</a>
                    </span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span>Đánh giá:</span>
                    <div class="rating-02">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section>
            <div class=" flex flex-col justify-start gap-2 md:flex-row  md:justify-between md:items-center mt-6">
              <div class="flex justify-start items-start gap-2">
                <h2 class="sub-title-02">Tags:</h2>
                <ul class="tag-02 flex justify-start items-start gap-2 flex-wrap">
                  <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Education</a></li>
                  <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Education</a></li>
                  <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Education</a></li>
                </ul>
              </div>
              <div class="flex justify-start items-center gap-2">
                <h2 class="sub-title-02">Share:</h2>
                <ul class="tag-02 flex justify-start items-start gap-2 flex-wrap">
                  <li class="py-2 px-3 border-[1px] rounded-md"><a href="#"><svg class="w-4 h-4"
                        xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24">
                        <path
                          d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z">
                        </path>
                      </svg></a></li>
                  <li class="py-2 px-3 border-[1px] rounded-md"><a href="#"><svg version="1.1" class="w-4 h-4"
                        id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 511.999 511.999" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M507.77,96.789c-3.92-4.669-9.903-6.958-15.769-6.358c2.345-4.855,4.354-9.891,6.016-15.091
    c2.279-7.127-0.123-15.046-5.97-19.699c-5.849-4.662-14.103-5.232-20.545-1.416c-14.758,8.753-30.599,15.287-47.157,19.455
    c-21.035-18.575-48.714-29.128-76.82-29.128c-63.816,0-115.735,51.917-115.735,115.731c0,0.714,0.006,1.428,0.019,2.142
    c-64.801-8.793-124.951-42.372-166.494-93.332c-3.765-4.618-9.554-7.099-15.467-6.617C43.922,62.94,38.597,66.283,35.6,71.42
    c-10.258,17.603-15.68,37.727-15.68,58.199c0,18.054,4.218,35.74,12.145,51.67c-1.32,0.393-2.602,0.936-3.818,1.634
    c-5.477,3.138-8.967,9.007-9.111,15.299c-0.013,0.551-0.014,1.102-0.014,1.659c0,32.878,14.268,64.167,38.287,85.933
    c-3.841,4.722-5.072,11.157-3.206,16.976c9.946,31.053,32.666,56.265,61.702,69.726C92.746,383.153,67.381,388.7,41.425,388.7
    c-7.086,0-14.204-0.416-21.147-1.238c-8.439-1.004-16.336,3.885-19.202,11.89c-2.863,8,0.132,16.789,7.282,21.373
    c47.672,30.566,102.793,46.722,159.404,46.722c111.254,0,180.924-52.547,219.777-96.631
    c48.338-54.836,76.06-127.446,76.06-199.211c0-1.265-0.008-2.537-0.024-3.811c17.576-13.928,32.828-30.48,45.386-49.265
    C513.42,111.86,512.927,102.917,507.77,96.789z M447.131,154.728c-2.645,1.993-4.158,5.147-4.057,8.456
    c0.086,2.799,0.129,5.633,0.129,8.425c0,66.867-25.866,134.561-70.965,185.723c-36.075,40.928-100.834,89.716-204.475,89.716
    c-49.475,0-97.73-13.257-140.171-38.423c4.596,0.316,9.222,0.475,13.837,0.475c37.456,0,73.838-10.387,105.213-30.038
    c3.502-2.195,5.335-6.287,4.64-10.361c-0.697-4.075-3.783-7.326-7.816-8.234c-31.581-7.104-57.553-30.05-68.608-60.322
    c1.701,0.258,3.412,0.473,5.115,0.644c4.75,0.466,9.202-2.416,10.699-6.954c1.497-4.539-0.358-9.508-4.462-11.956
    c-28.06-16.734-45.763-46.996-46.651-79.439c3.985,2.013,8.121,3.766,12.341,5.228c4.347,1.505,9.163-0.084,11.758-3.882
    c2.597-3.797,2.33-8.861-0.651-12.365c-14.629-17.197-22.685-39.144-22.685-61.799c0-15.768,3.9-31.279,11.306-45.069
    c47.495,56.842,116.675,93.062,190.337,99.529c3.076,0.267,6.105-0.866,8.244-3.091s3.155-5.3,2.764-8.36
    c-0.519-4.065-0.782-8.219-0.782-12.344c0-52.566,42.768-95.332,95.336-95.332c24.725,0,49.052,9.914,66.741,27.198
    c2.46,2.403,5.965,3.408,9.323,2.665c18.548-4.087,36.34-10.801,52.975-19.987c-4.049,10.366-9.853,19.856-17.303,28.281
    c-3.006,3.399-3.405,8.376-0.978,12.211c2.426,3.835,7.097,5.607,11.453,4.344c6.018-1.74,11.985-3.781,17.819-6.092
    C476.151,129.269,462.58,143.088,447.131,154.728z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M89.95,145.834c-2.153-1.605-4.298-3.258-6.377-4.91c-4.409-3.506-10.826-2.774-14.331,1.636
    c-3.505,4.409-2.773,10.825,1.636,14.331c2.241,1.782,4.554,3.564,6.874,5.294c1.832,1.366,3.97,2.025,6.091,2.025
    c3.11,0,6.182-1.418,8.183-4.102C95.394,155.592,94.465,149.203,89.95,145.834z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M222.328,196.399c-36.715-3.223-73.142-14.6-105.344-32.9c-4.898-2.783-11.123-1.07-13.907,3.828
    c-2.783,4.898-1.07,11.123,3.828,13.907c34.73,19.738,74.026,32.009,113.639,35.487c0.304,0.026,0.605,0.04,0.904,0.04
    c5.229,0,9.682-4,10.148-9.309C232.088,201.84,227.939,196.892,222.328,196.399z" />
                          </g>
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
                      </svg></a></li>
                  <li class="py-2 px-3 border-[1px] rounded-md"><a href="#"><svg version="1.1" class="w-4 h-4"
                        id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" width="169.063px" height="169.063px" viewBox="0 0 169.063 169.063"
                        xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                             c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                             c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                             c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                             C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                             c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                             c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                             C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                      </svg></a></li>
                </ul>
              </div>
            </div>
          </section>
          <div class="flex justify-between items-center mt-6">
            <div class="flex justify-start items-center w-full gap-2">
              <div class="w-[250px]">
                <h2 class="title-02">Related Posts</h2>
              </div>
              <div class="hidden md:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
                <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
              </div>
            </div>
          </div>
          <div class="slider-trend h-[450px] mt-6">
            <section>
              <div class="bg-white-02 mx-3 shadow-lg border-2 rounded-sm">
                <div class="h-[250px] relative">
                  <img src="../img/1.jpg" class="w-full h-full object-cover" />
                </div>
                <div class="p-6 infor-slider-02">
                  <span>
                    April 13, 2022
                  </span>
                  <div class="pb-4">
                    <h3>
                      <a href="#">Beauty queens need beauty material & products</a>
                    </h3>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <div class="w-[35px] h-[35px] rounded-full">
                      <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full">
                    </div>
                    <span>
                      by
                      <a href="#" class="transition-all duration-500">
                        Jone Deo</a>
                    </span>

                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="bg-white-02 mx-3 shadow-lg border-2 rounded-sm">
                <div class="h-[250px] relative">
                  <img src="../img/3.jpg" class="w-full h-full object-cover" />
                </div>
                <div class="p-6 infor-slider-02">
                  <span>
                    April 13, 2022
                  </span>
                  <div class="pb-4">
                    <h3>
                      <a href="#">Beauty queens need beauty material & products</a>
                    </h3>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <div class="w-[35px] h-[35px] rounded-full">
                      <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full">
                    </div>
                    <span>
                      by
                      <a href="#" class="transition-all duration-500">
                        Jone Deo</a>
                    </span>

                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="bg-white-02 mx-3 shadow-lg border-2 rounded-sm">
                <div class="h-[250px] relative">
                  <img src="../img/2.jpg" class="w-full h-full object-cover" />
                </div>
                <div class="p-6 infor-slider-02">
                  <span>
                    April 13, 2022
                  </span>
                  <div class="pb-4">
                    <h3>
                      <a href="#">Beauty queens need beauty material & products</a>
                    </h3>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <div class="w-[35px] h-[35px] rounded-full">
                      <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full">
                    </div>
                    <span>
                      by
                      <a href="#" class="transition-all duration-500">
                        Jone Deo</a>
                    </span>

                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="bg-white-02 mx-3 shadow-lg border-2 rounded-sm">
                <div class="h-[250px] relative">
                  <img src="../img/3.jpg" class="w-full h-full object-cover" />
                </div>
                <div class="p-6 infor-slider-02">
                  <span>
                    April 13, 2022
                  </span>
                  <div class="pb-4">
                    <h3>
                      <a href="#">Beauty queens need beauty material & products</a>
                    </h3>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <div class="w-[35px] h-[35px] rounded-full">
                      <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full">
                    </div>
                    <span>
                      by
                      <a href="#" class="transition-all duration-500">
                        Jone Deo</a>
                    </span>

                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="bg-white-02 mx-3 shadow-lg border-2 rounded-sm">
                <div class="h-[250px] relative">
                  <img src="../img/2.jpg" class="w-full h-full object-cover" />
                </div>
                <div class="p-6 infor-slider-02">
                  <span>
                    April 13, 2022
                  </span>
                  <div class="pb-4">
                    <h3>
                      <a href="#">Beauty queens need beauty material & products</a>
                    </h3>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <div class="w-[35px] h-[35px] rounded-full">
                      <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full">
                    </div>
                    <span>
                      by
                      <a href="#" class="transition-all duration-500">
                        Jone Deo</a>
                    </span>

                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="flex justify-between items-center mt-10">
            <div class="flex justify-start items-center w-full gap-2">
              <div class="w-[250px]">
                <h2 class="title-02">3 Comments</h2>
              </div>
              <div class="hidden md:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
                <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
              </div>
            </div>
          </div>
          <section>
            <div class="comment-02 border-b-[1px]">
              <div class="flex flex-col justify-start items-start gap-2 lg:flex-row lg:gap-6 pt-6">
                <div class="w-[46px]">
                  <div class="w-[45px] h-[45px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full">
                  </div>
                </div>
                <div class="flex flex-col gap-4 ">
                  <div>
                    <h3>Neal Adams</h3>
                    <span>July 21, 2022 at 8:24 pm</span>
                  </div>
                  <div>
                    <p>
                      Geeza show off show off pick your nose and blow off the BBC lavatory a blinding shot cack spend a
                      penny bugger all mate brolly.
                    </p>
                  </div>
                </div>
              </div>
              <button class=" px-6 border-2 rounded-md my-6 lg:ml-[67px]">Reply</button>
            </div>
          </section>
          <section>
            <div class="comment-02 border-b-[1px] ml-[50px]">
              <div class="flex flex-col justify-start items-start gap-2 lg:flex-row lg:gap-6 pt-6">
                <div class="w-[46px]">
                  <div class="w-[45px] h-[45px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full">
                  </div>
                </div>
                <div class="flex flex-col gap-4 ">
                  <div>
                    <h3>Neal Adams</h3>
                    <span>July 21, 2022 at 8:24 pm</span>
                  </div>
                  <div>
                    <p>
                      Geeza show off show off pick your nose and blow off the BBC lavatory a blinding shot cack spend a
                      penny bugger all mate brolly.
                    </p>
                  </div>
                </div>
              </div>
              <button class=" px-6 border-2 rounded-md my-6 lg:ml-[67px]">Reply</button>
            </div>
          </section>
          <section>
            <div class="comment-02 border-b-[1px] ml-[50px]">
              <div class="flex flex-col justify-start items-start gap-2 lg:flex-row lg:gap-6 pt-6">
                <div class="w-[46px]">
                  <div class="w-[45px] h-[45px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full">
                  </div>
                </div>
                <div class="flex flex-col gap-4 ">
                  <div>
                    <h3>Neal Adams</h3>
                    <span>July 21, 2022 at 8:24 pm</span>
                  </div>
                  <div>
                    <p>
                      Geeza show off show off pick your nose and blow off the BBC lavatory a blinding shot cack spend a
                      penny bugger all mate brolly.
                    </p>
                  </div>
                </div>
              </div>
              <button class=" px-6 border-2 rounded-md my-6 lg:ml-[67px]">Reply</button>
            </div>
          </section>
          <div class="flex justify-between items-center mt-10">
            <div class="flex justify-start items-center w-full gap-2">
              <div class="w-[300px]">
                <h2 class="title-02">Leave a Reply</h2>
              </div>
              <div class="hidden md:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
                <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
              </div>
            </div>
          </div>
          <section>
            <div class="rep-02 flex flex-col gap-6 py-6">
              <textarea name="" placeholder="Message" id="" cols="30" rows="10"
                class="outline-none w-full h-[150px] p-8 rounded-md"></textarea>
              <div class="flex flex-col lg:flex-row gap-6">
                <input type="text" placeholder="Name" class="outline-none w-full p-3 px-8 rounded-md">
                <input type="text" placeholder="Email" class="outline-none w-full p-3 px-8 rounded-md">
              </div>
              <input type="text" placeholder="Website" class="outline-none w-full p-3 px-8 rounded-md">
              <div class="inline-block">
                <input type="checkbox" class="w-4 h-4">
                <span class="pl-2">Save my name, email, and website in this browser for the next time I comment.</span>
              </div>
              <button class="p-3 rounded-md outline-none">Submit Comment</button>
            </div>
          </section>
        </div>

        <div class="col-span-12 lg:col-span-4">
          <div class="search-02 py-6 w-full relative">
            <input type="text" placeholder="Search..." class="border-[1px] rounded-md outline-none p-3 w-full ">
            <svg version="1.1" class="absolute right-[15px] top-[30px] cursor-pointer w-8 h-8" id="Layer_1"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 502.173 502.173" style="enable-background:new 0 0 502.173 502.173;" xml:space="preserve">
              <g>
                <g>
                  <g>
                    <path d="M494.336,443.646L316.402,265.713c20.399-31.421,30.023-68.955,27.189-106.632
				C340.507,118.096,322.783,79.5,293.684,50.4C261.167,17.884,217.984,0,172.023,0c-0.222,0-0.445,0.001-0.668,0.001
				C125.149,0.176,81.837,18.409,49.398,51.342c-66.308,67.316-65.691,176.257,1.375,242.85
				c29.112,28.907,67.655,46.482,108.528,49.489c37.579,2.762,75.008-6.867,106.343-27.21l177.933,177.932
				c5.18,5.18,11.984,7.77,18.788,7.77s13.608-2.59,18.789-7.769l13.182-13.182C504.695,470.862,504.695,454.006,494.336,443.646z
				 M480.193,467.079l-13.182,13.182c-2.563,2.563-6.73,2.561-9.292,0L273.914,296.456c-1.936-1.937-4.497-2.929-7.074-2.929
				c-2.044,0-4.098,0.624-5.858,1.898c-60.538,43.788-143.018,37.3-196.118-15.425C5.592,221.146,5.046,124.867,63.646,65.377
				c28.67-29.107,66.949-45.222,107.784-45.376c0.199,0,0.392-0.001,0.591-0.001c40.617,0,78.785,15.807,107.52,44.542
				c53.108,53.108,59.759,135.751,15.814,196.509c-2.878,3.979-2.441,9.459,1.032,12.932l183.806,183.805
				C482.755,460.35,482.755,464.517,480.193,467.079z" />
                    <path d="M259.633,84.449c-48.317-48.316-126.935-48.316-175.253,0c-23.406,23.406-36.296,54.526-36.296,87.627
				c0,33.102,12.89,64.221,36.296,87.627S138.906,296,172.007,296c33.102,0,64.222-12.891,87.627-36.297
				C307.951,211.386,307.951,132.767,259.633,84.449z M245.492,245.561C225.863,265.189,199.766,276,172.007,276
				c-27.758,0-53.856-10.811-73.484-30.44c-19.628-19.628-30.438-45.726-30.438-73.484s10.809-53.855,30.438-73.484
				c20.262-20.263,46.868-30.39,73.484-30.39c26.61,0,53.227,10.133,73.484,30.39C286.011,139.112,286.011,205.042,245.492,245.561z
				" />
                    <path d="M111.017,153.935c1.569-5.296-1.452-10.861-6.747-12.43c-5.294-1.569-10.86,1.451-12.429,6.746
				c-8.73,29.459-0.668,61.244,21.04,82.952c1.952,1.952,4.512,2.929,7.071,2.929s5.118-0.977,7.071-2.928
				c3.905-3.906,3.905-10.238,0-14.143C110.506,200.544,104.372,176.355,111.017,153.935z" />
                    <path d="M141.469,94.214c-10.748,4.211-20.367,10.514-28.588,18.735c-3.905,3.906-3.905,10.238,0,14.143
				c1.952,1.952,4.512,2.929,7.071,2.929s5.118-0.977,7.07-2.929c6.26-6.26,13.575-11.057,21.741-14.255
				c5.143-2.015,7.678-7.816,5.664-12.959C152.413,94.735,146.611,92.202,141.469,94.214z" />
                  </g>
                </g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
            </svg>
          </div>
          <div class="flex justify-start items-center gap-2 py-6">
            <div class="w-[200px]">
              <h2 class="sub-title-02">Get in touch</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <div class="grid grid-cols-2 gap-4">
              <section>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-blue-700 rounded-sm svg-02">
                    <a href="#">
                      <svg class="w-5 h-5 " xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                        viewBox="0 0 24 24" style="fill: #ffffff">
                        <path
                          d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z">
                        </path>
                      </svg>
                    </a>
                  </div>
                  <div>
                    <h3>Followers</h3>
                    <span>750</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md py-4">
                  <div class="p-3 bg-pink-500 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                 c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                 C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </a>
                  </div>
                  <div>
                    <h3>Likes</h3>
                    <span>523</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-cyan-700 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="93.06px" height="93.06px"
                        viewBox="0 0 93.06 93.06" style="fill:#ffffff" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M11.185,0.08C5.004,0.08,0.001,5.092,0,11.259c0,6.173,5.003,11.184,11.186,11.184c6.166,0,11.176-5.011,11.176-11.184
  C22.362,5.091,17.351,0.08,11.185,0.08z" />
                            <rect x="1.538" y="30.926" width="19.287" height="62.054" />
                            <path d="M69.925,29.383c-9.382,0-15.673,5.144-18.248,10.022h-0.258v-8.479H32.921H32.92v62.053h19.27V62.281
  c0-8.093,1.541-15.932,11.575-15.932c9.89,0,10.022,9.256,10.022,16.451v30.178H93.06V58.942
  C93.06,42.235,89.455,29.383,69.925,29.383z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>

                    </a>
                  </div>
                  <div>
                    <h3>Followers</h3>
                    <span>1025</span>
                  </div>
                </div>
              </section>
              <section>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-sky-400 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999"
                        style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M507.77,96.789c-3.92-4.669-9.903-6.958-15.769-6.358c2.345-4.855,4.354-9.891,6.016-15.091
    c2.279-7.127-0.123-15.046-5.97-19.699c-5.849-4.662-14.103-5.232-20.545-1.416c-14.758,8.753-30.599,15.287-47.157,19.455
    c-21.035-18.575-48.714-29.128-76.82-29.128c-63.816,0-115.735,51.917-115.735,115.731c0,0.714,0.006,1.428,0.019,2.142
    c-64.801-8.793-124.951-42.372-166.494-93.332c-3.765-4.618-9.554-7.099-15.467-6.617C43.922,62.94,38.597,66.283,35.6,71.42
    c-10.258,17.603-15.68,37.727-15.68,58.199c0,18.054,4.218,35.74,12.145,51.67c-1.32,0.393-2.602,0.936-3.818,1.634
    c-5.477,3.138-8.967,9.007-9.111,15.299c-0.013,0.551-0.014,1.102-0.014,1.659c0,32.878,14.268,64.167,38.287,85.933
    c-3.841,4.722-5.072,11.157-3.206,16.976c9.946,31.053,32.666,56.265,61.702,69.726C92.746,383.153,67.381,388.7,41.425,388.7
    c-7.086,0-14.204-0.416-21.147-1.238c-8.439-1.004-16.336,3.885-19.202,11.89c-2.863,8,0.132,16.789,7.282,21.373
    c47.672,30.566,102.793,46.722,159.404,46.722c111.254,0,180.924-52.547,219.777-96.631
    c48.338-54.836,76.06-127.446,76.06-199.211c0-1.265-0.008-2.537-0.024-3.811c17.576-13.928,32.828-30.48,45.386-49.265
    C513.42,111.86,512.927,102.917,507.77,96.789z M447.131,154.728c-2.645,1.993-4.158,5.147-4.057,8.456
    c0.086,2.799,0.129,5.633,0.129,8.425c0,66.867-25.866,134.561-70.965,185.723c-36.075,40.928-100.834,89.716-204.475,89.716
    c-49.475,0-97.73-13.257-140.171-38.423c4.596,0.316,9.222,0.475,13.837,0.475c37.456,0,73.838-10.387,105.213-30.038
    c3.502-2.195,5.335-6.287,4.64-10.361c-0.697-4.075-3.783-7.326-7.816-8.234c-31.581-7.104-57.553-30.05-68.608-60.322
    c1.701,0.258,3.412,0.473,5.115,0.644c4.75,0.466,9.202-2.416,10.699-6.954c1.497-4.539-0.358-9.508-4.462-11.956
    c-28.06-16.734-45.763-46.996-46.651-79.439c3.985,2.013,8.121,3.766,12.341,5.228c4.347,1.505,9.163-0.084,11.758-3.882
    c2.597-3.797,2.33-8.861-0.651-12.365c-14.629-17.197-22.685-39.144-22.685-61.799c0-15.768,3.9-31.279,11.306-45.069
    c47.495,56.842,116.675,93.062,190.337,99.529c3.076,0.267,6.105-0.866,8.244-3.091s3.155-5.3,2.764-8.36
    c-0.519-4.065-0.782-8.219-0.782-12.344c0-52.566,42.768-95.332,95.336-95.332c24.725,0,49.052,9.914,66.741,27.198
    c2.46,2.403,5.965,3.408,9.323,2.665c18.548-4.087,36.34-10.801,52.975-19.987c-4.049,10.366-9.853,19.856-17.303,28.281
    c-3.006,3.399-3.405,8.376-0.978,12.211c2.426,3.835,7.097,5.607,11.453,4.344c6.018-1.74,11.985-3.781,17.819-6.092
    C476.151,129.269,462.58,143.088,447.131,154.728z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M89.95,145.834c-2.153-1.605-4.298-3.258-6.377-4.91c-4.409-3.506-10.826-2.774-14.331,1.636
    c-3.505,4.409-2.773,10.825,1.636,14.331c2.241,1.782,4.554,3.564,6.874,5.294c1.832,1.366,3.97,2.025,6.091,2.025
    c3.11,0,6.182-1.418,8.183-4.102C95.394,155.592,94.465,149.203,89.95,145.834z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M222.328,196.399c-36.715-3.223-73.142-14.6-105.344-32.9c-4.898-2.783-11.123-1.07-13.907,3.828
    c-2.783,4.898-1.07,11.123,3.828,13.907c34.73,19.738,74.026,32.009,113.639,35.487c0.304,0.026,0.605,0.04,0.904,0.04
    c5.229,0,9.682-4,10.148-9.309C232.088,201.84,227.939,196.892,222.328,196.399z" />
                          </g>
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
                    </a>
                  </div>
                  <div>
                    <h3>Fans</h3>
                    <span>1236</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md py-4">
                  <div class="p-3 bg-sky-200 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 304.36 304.36"
                        style="fill: #ffffff" xml:space="preserve">
                        <g id="XMLID_1_">
                          <path id="XMLID_807_" style="fill-rule: evenodd; clip-rule: evenodd" d="M261.945,175.576c10.096,9.857,20.752,19.131,29.807,29.982
      c4,4.822,7.787,9.798,10.684,15.394c4.105,7.955,0.387,16.709-6.746,17.184l-44.34-0.02c-11.436,0.949-20.559-3.655-28.23-11.474
      c-6.139-6.253-11.824-12.908-17.727-19.372c-2.42-2.642-4.953-5.128-7.979-7.093c-6.053-3.929-11.307-2.726-14.766,3.587
      c-3.523,6.421-4.322,13.531-4.668,20.687c-0.475,10.441-3.631,13.186-14.119,13.664c-22.414,1.057-43.686-2.334-63.447-13.641
      c-17.422-9.968-30.932-24.04-42.691-39.971C34.828,153.482,17.295,119.395,1.537,84.353C-2.01,76.458,0.584,72.22,9.295,72.07
      c14.465-0.281,28.928-0.261,43.41-0.02c5.879,0.086,9.771,3.458,12.041,9.012c7.826,19.243,17.402,37.551,29.422,54.521
      c3.201,4.518,6.465,9.036,11.113,12.216c5.142,3.521,9.057,2.354,11.476-3.374c1.535-3.632,2.207-7.544,2.553-11.434
      c1.146-13.383,1.297-26.743-0.713-40.079c-1.234-8.323-5.922-13.711-14.227-15.286c-4.238-0.803-3.607-2.38-1.555-4.799
      c3.564-4.172,6.916-6.769,13.598-6.769h50.111c7.889,1.557,9.641,5.101,10.721,13.039l0.043,55.663
      c-0.086,3.073,1.535,12.192,7.07,14.226c4.43,1.448,7.35-2.096,10.008-4.905c11.998-12.734,20.561-27.783,28.211-43.366
      c3.395-6.852,6.314-13.968,9.143-21.078c2.096-5.276,5.385-7.872,11.328-7.757l48.229,0.043c1.43,0,2.877,0.021,4.262,0.258
      c8.127,1.385,10.354,4.881,7.844,12.817c-3.955,12.451-11.65,22.827-19.174,33.251c-8.043,11.129-16.645,21.877-24.621,33.072
      C252.26,161.544,252.842,166.697,261.945,175.576L261.945,175.576z M261.945,175.576" />
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
                    </a>
                  </div>
                  <div>
                    <h3>Likes</h3>
                    <span>523</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-red-600 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="96.875px" height="96.875px"
                        viewBox="0 0 96.875 96.875" style="fill: #ffffff;" xml:space="preserve">
                        <g>
                          <path d="M95.201,25.538c-1.186-5.152-5.4-8.953-10.473-9.52c-12.013-1.341-24.172-1.348-36.275-1.341
c-12.105-0.007-24.266,0-36.279,1.341c-5.07,0.567-9.281,4.368-10.467,9.52C0.019,32.875,0,40.884,0,48.438
C0,55.992,0,64,1.688,71.336c1.184,5.151,5.396,8.952,10.469,9.52c12.012,1.342,24.172,1.349,36.277,1.342
c12.107,0.007,24.264,0,36.275-1.342c5.07-0.567,9.285-4.368,10.471-9.52c1.689-7.337,1.695-15.345,1.695-22.898
C96.875,40.884,96.889,32.875,95.201,25.538z M35.936,63.474c0-10.716,0-21.32,0-32.037c10.267,5.357,20.466,10.678,30.798,16.068
C56.434,52.847,46.23,58.136,35.936,63.474z" />
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>

                    </a>
                  </div>
                  <div>
                    <h3>Subscribers</h3>
                    <span>590M</span>
                  </div>
                </div>
              </section>
          </section>
          <div class="flex justify-start items-center gap-2 py-6">
            <div class="w-[200px]">
              <h2 class="sub-title-02">Latest News</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-md">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-md" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-md">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-md" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-md">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-md" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-md">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-md" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-2 py-6 ">
              <div class="w-[220px]">
                <h2 class="sub-title-02">Follow us</h2>
              </div>
              <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
                <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
              </div>
            </div>
            <section>
              <div class="grid grid-cols-2 gap-2 mt-3">
                <div class="main-img-02">
                  <a href="#"><img src="../img/1.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                             c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                             c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                             c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                             C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                             c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                             c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                             C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>
                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/2.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/3.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/1.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/3.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/2.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>
                </div>
              </div>
            </section>
          </section>
          <div class="flex justify-start items-center gap-2 py-6">
            <div class="w-[200px]">
              <h2 class="sub-title-02">Comments</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-comment-02">
                <div class="flex flex-col justify-start items-start">
                  <h2>Travel</h2>
                  <span>14 January, 2022</span>
                </div>

                <p class="pt-2">
                  Top 20 best thems plugn & on this year visit Expart
                </p>

              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4 py-2">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-comment-02">
                <div class="flex flex-col justify-start items-start">
                  <h2>Travel</h2>
                  <span>14 January, 2022</span>
                </div>

                <p class="pt-2">
                  Top 20 best thems plugn & on this year visit Expart
                </p>

              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4 pb-2">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-comment-02">
                <div class="flex flex-col justify-start items-start">
                  <h2>Travel</h2>
                  <span>14 January, 2022</span>
                </div>

                <p class="pt-2">
                  Top 20 best thems plugn & on this year visit Expart
                </p>

              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-comment-02">
                <div class="flex flex-col justify-start items-start">
                  <h2>Travel</h2>
                  <span>14 January, 2022</span>
                </div>

                <p class="pt-2">
                  Top 20 best thems plugn & on this year visit Expart
                </p>

              </div>
            </div>
          </section>
          <div class="flex justify-start items-center gap-2 py-6">
            <div class="w-[100px]">
              <h2 class="sub-title-02">Tags</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <ul class="tag-02 flex justify-start items-start gap-2 flex-wrap">
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Education</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">SEO Marketing</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Business</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Solutions</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">UX</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Case Study</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Ceative</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Insights</a></li>
            </ul>
          </section>
        </div>
    </section>
  </div>',
                'js_handle' => '  <script>
    $(".slider-trend").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      responsive: [
        {
          breakpoint: 2550,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 1440,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
      ]
    });
  </script>',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'post',
                'html' => '<div class="sub-direct-02 py-10 px-2 md:px-8 xl:px-[120px]">
    <div class="flex justify-center items-center">
      <h2>
        Posts
      </h2>
    </div>
    <div class="flex justify-center items-center gap-2 ">
      <a href="#" class="active">Home</a>
      <span>.</span>
      <a href="#">Post</a>
    </div>
  </div>
  <div class="content px-2 md:px-8 xl:px-[120px]">
    <section>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mb-6">
        <div class="col-span-12 lg:col-span-8">
          <section>
            <div class="infor-post-02 border-b-[1px] pb-6 mt-6">
              <div class=" flex flex-col justify-start item-start gap-6">
                <div class="w-full h-[230px] md:h-[350px] xl:h-[480px]">
                  <a href="/content2/post-single.html"><img src="../img/1.jpg"
                      class="w-full h-full rounded-sm object-cover" alt=""></a>
                </div>
                <div class="flex justify-start items-center gap-4 flex-wrap lg:px-8">
                  <div class="flex justify-start items-center gap-2">
                    <div class="w-[30px] h-[30px] rounded-full">
                      <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                    </div>
                    <span><a href="#" class="transition-all duration-500">Jone Deo</a></span>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                      viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                          <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                        </g>
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
                    <span>March 26, 2022</span>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <svg class="w-5 h-5" viewBox="0 -2 28 28" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="m14 2c-.038 0-.083-.001-.128-.001-2.098 0-4.102.399-5.942 1.124l.11-.038c-1.74.644-3.217 1.645-4.4 2.922l-.007.007c-.99 1.036-1.608 2.436-1.633 3.98v.005c.013 1.258.432 2.415 1.131 3.351l-.011-.015c.835 1.131 1.885 2.053 3.096 2.719l.049.025 1.36.782-.426 1.498c-.272 1.021-.646 1.915-1.122 2.741l.029-.054c1.651-.691 3.071-1.59 4.313-2.686l-.017.014.672-.594.89.094c.607.077 1.312.122 2.028.125h.004c.038 0 .083.001.128.001 2.098 0 4.102-.399 5.942-1.124l-.11.038c1.74-.644 3.217-1.645 4.4-2.922l.007-.007c1.009-1.025 1.632-2.432 1.632-3.984s-.623-2.96-1.633-3.985l.001.001c-1.19-1.284-2.666-2.286-4.329-2.904l-.078-.025c-1.73-.687-3.735-1.086-5.833-1.086-.044 0-.088 0-.132.001h.007zm14 8c-.012 1.924-.72 3.681-1.884 5.033l.009-.01c-1.349 1.592-3.059 2.837-5.008 3.611l-.086.03c-2.023.846-4.374 1.337-6.839 1.337-.068 0-.135 0-.202-.001h.01c-.8-.002-1.588-.047-2.363-.134l.097.009c-1.981 1.759-4.399 3.072-7.069 3.756l-.118.026c-.503.145-1.107.266-1.726.339l-.055.005h-.08c-.163 0-.311-.062-.422-.164-.123-.111-.212-.258-.249-.424l-.001-.005v-.016c-.017-.029-.027-.064-.027-.102 0-.033.008-.063.021-.091l-.001.001c.02-.047.031-.101.031-.159 0-.001 0-.001 0-.002q-.008-.031.07-.149l.094-.141.11-.133.125-.141q.11-.125.484-.539l.539-.594q.164-.18.484-.617c.174-.231.343-.493.491-.767l.017-.033q.187-.359.422-.922c.137-.317.276-.712.39-1.117l.017-.07c-1.558-.861-2.852-2.018-3.844-3.405l-.024-.035c-.878-1.216-1.407-2.735-1.414-4.377v-.002c.012-1.924.72-3.681 1.884-5.033l-.009.01c1.349-1.592 3.059-2.837 5.008-3.611l.086-.03c2.023-.846 4.374-1.337 6.839-1.337.068 0 .135 0 .202.001h-.01c.057-.001.125-.001.192-.001 2.465 0 4.816.491 6.959 1.381l-.12-.044c2.034.804 3.745 2.048 5.078 3.622l.015.018c1.155 1.342 1.863 3.099 1.875 5.021v.003z" />
                    </svg>
                    <span>95 Comments</span>
                  </div>
                </div>
                <div class="lg:px-8">
                  <h3>
                    <a href="/content2/post-single.html" class="lg:text-[40px]">Those other Collage Expenses.</a>
                  </h3>
                  <p>
                    Our goal has always been to motivate, encourage and release our fellow creatives to do thei thing,
                    so we’ve lovingly crafted surface of…
                  </p>
                </div>

              </div>
              <button class="p-2 px-6 border-2 rounded-md my-6 lg:mx-8">Read More</button>
            </div>
          </section>
          <section>
            <div class="infor-post-02 border-b-[1px] pb-6 mt-12">
              <div class=" flex flex-col justify-start item-start gap-6">
                <div class="w-full h-[230px] md:h-[350px] xl:h-[480px]">
                  <a href="/content2/post-single.html"><img src="../img/2.jpg"
                      class="w-full h-full rounded-sm object-cover" alt=""></a>
                </div>
                <div class="flex justify-start items-center gap-4 flex-wrap lg:px-8">
                  <div class="flex justify-start items-center gap-2">
                    <div class="w-[30px] h-[30px] rounded-full">
                      <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                    </div>
                    <span><a href="#" class="transition-all duration-500">Jone Deo</a></span>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                      viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                          <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                        </g>
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
                    <span>March 26, 2022</span>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <svg class="w-5 h-5" viewBox="0 -2 28 28" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="m14 2c-.038 0-.083-.001-.128-.001-2.098 0-4.102.399-5.942 1.124l.11-.038c-1.74.644-3.217 1.645-4.4 2.922l-.007.007c-.99 1.036-1.608 2.436-1.633 3.98v.005c.013 1.258.432 2.415 1.131 3.351l-.011-.015c.835 1.131 1.885 2.053 3.096 2.719l.049.025 1.36.782-.426 1.498c-.272 1.021-.646 1.915-1.122 2.741l.029-.054c1.651-.691 3.071-1.59 4.313-2.686l-.017.014.672-.594.89.094c.607.077 1.312.122 2.028.125h.004c.038 0 .083.001.128.001 2.098 0 4.102-.399 5.942-1.124l-.11.038c1.74-.644 3.217-1.645 4.4-2.922l.007-.007c1.009-1.025 1.632-2.432 1.632-3.984s-.623-2.96-1.633-3.985l.001.001c-1.19-1.284-2.666-2.286-4.329-2.904l-.078-.025c-1.73-.687-3.735-1.086-5.833-1.086-.044 0-.088 0-.132.001h.007zm14 8c-.012 1.924-.72 3.681-1.884 5.033l.009-.01c-1.349 1.592-3.059 2.837-5.008 3.611l-.086.03c-2.023.846-4.374 1.337-6.839 1.337-.068 0-.135 0-.202-.001h.01c-.8-.002-1.588-.047-2.363-.134l.097.009c-1.981 1.759-4.399 3.072-7.069 3.756l-.118.026c-.503.145-1.107.266-1.726.339l-.055.005h-.08c-.163 0-.311-.062-.422-.164-.123-.111-.212-.258-.249-.424l-.001-.005v-.016c-.017-.029-.027-.064-.027-.102 0-.033.008-.063.021-.091l-.001.001c.02-.047.031-.101.031-.159 0-.001 0-.001 0-.002q-.008-.031.07-.149l.094-.141.11-.133.125-.141q.11-.125.484-.539l.539-.594q.164-.18.484-.617c.174-.231.343-.493.491-.767l.017-.033q.187-.359.422-.922c.137-.317.276-.712.39-1.117l.017-.07c-1.558-.861-2.852-2.018-3.844-3.405l-.024-.035c-.878-1.216-1.407-2.735-1.414-4.377v-.002c.012-1.924.72-3.681 1.884-5.033l-.009.01c1.349-1.592 3.059-2.837 5.008-3.611l.086-.03c2.023-.846 4.374-1.337 6.839-1.337.068 0 .135 0 .202.001h-.01c.057-.001.125-.001.192-.001 2.465 0 4.816.491 6.959 1.381l-.12-.044c2.034.804 3.745 2.048 5.078 3.622l.015.018c1.155 1.342 1.863 3.099 1.875 5.021v.003z" />
                    </svg>
                    <span>95 Comments</span>
                  </div>
                </div>
                <div class="lg:px-8">
                  <h3>
                    <a href="/content2/post-single.html" class="lg:text-[40px]">Those other Collage Expenses.</a>
                  </h3>
                  <p>
                    Our goal has always been to motivate, encourage and release our fellow creatives to do thei thing,
                    so we’ve lovingly crafted surface of…
                  </p>
                </div>

              </div>
              <button class="p-2 px-6 border-2 rounded-md my-6 lg:mx-8">Read More</button>
            </div>
          </section>
          <section>
            <div class="infor-post-02 border-b-[1px] pb-6 mt-12">
              <div class=" flex flex-col justify-start item-start gap-6">
                <div class="w-full h-[230px] md:h-[350px] xl:h-[480px]">
                  <a href="/content2/post-single.html"><img src="../img/3.jpg"
                      class="w-full h-full rounded-sm object-cover" alt=""></a>
                </div>
                <div class="flex justify-start items-center gap-4 flex-wrap lg:px-8">
                  <div class="flex justify-start items-center gap-2">
                    <div class="w-[30px] h-[30px] rounded-full">
                      <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                    </div>
                    <span><a href="#" class="transition-all duration-500">Jone Deo</a></span>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                      viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                          <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                        </g>
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
                    <span>March 26, 2022</span>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <svg class="w-5 h-5" viewBox="0 -2 28 28" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="m14 2c-.038 0-.083-.001-.128-.001-2.098 0-4.102.399-5.942 1.124l.11-.038c-1.74.644-3.217 1.645-4.4 2.922l-.007.007c-.99 1.036-1.608 2.436-1.633 3.98v.005c.013 1.258.432 2.415 1.131 3.351l-.011-.015c.835 1.131 1.885 2.053 3.096 2.719l.049.025 1.36.782-.426 1.498c-.272 1.021-.646 1.915-1.122 2.741l.029-.054c1.651-.691 3.071-1.59 4.313-2.686l-.017.014.672-.594.89.094c.607.077 1.312.122 2.028.125h.004c.038 0 .083.001.128.001 2.098 0 4.102-.399 5.942-1.124l-.11.038c1.74-.644 3.217-1.645 4.4-2.922l.007-.007c1.009-1.025 1.632-2.432 1.632-3.984s-.623-2.96-1.633-3.985l.001.001c-1.19-1.284-2.666-2.286-4.329-2.904l-.078-.025c-1.73-.687-3.735-1.086-5.833-1.086-.044 0-.088 0-.132.001h.007zm14 8c-.012 1.924-.72 3.681-1.884 5.033l.009-.01c-1.349 1.592-3.059 2.837-5.008 3.611l-.086.03c-2.023.846-4.374 1.337-6.839 1.337-.068 0-.135 0-.202-.001h.01c-.8-.002-1.588-.047-2.363-.134l.097.009c-1.981 1.759-4.399 3.072-7.069 3.756l-.118.026c-.503.145-1.107.266-1.726.339l-.055.005h-.08c-.163 0-.311-.062-.422-.164-.123-.111-.212-.258-.249-.424l-.001-.005v-.016c-.017-.029-.027-.064-.027-.102 0-.033.008-.063.021-.091l-.001.001c.02-.047.031-.101.031-.159 0-.001 0-.001 0-.002q-.008-.031.07-.149l.094-.141.11-.133.125-.141q.11-.125.484-.539l.539-.594q.164-.18.484-.617c.174-.231.343-.493.491-.767l.017-.033q.187-.359.422-.922c.137-.317.276-.712.39-1.117l.017-.07c-1.558-.861-2.852-2.018-3.844-3.405l-.024-.035c-.878-1.216-1.407-2.735-1.414-4.377v-.002c.012-1.924.72-3.681 1.884-5.033l-.009.01c1.349-1.592 3.059-2.837 5.008-3.611l.086-.03c2.023-.846 4.374-1.337 6.839-1.337.068 0 .135 0 .202.001h-.01c.057-.001.125-.001.192-.001 2.465 0 4.816.491 6.959 1.381l-.12-.044c2.034.804 3.745 2.048 5.078 3.622l.015.018c1.155 1.342 1.863 3.099 1.875 5.021v.003z" />
                    </svg>
                    <span>95 Comments</span>
                  </div>
                </div>
                <div class="lg:px-8">
                  <h3>
                    <a href="/content2/post-single.html" class="lg:text-[40px]">Those other Collage Expenses.</a>
                  </h3>
                  <p>
                    Our goal has always been to motivate, encourage and release our fellow creatives to do thei thing,
                    so we’ve lovingly crafted surface of…
                  </p>
                </div>

              </div>
              <button class="p-2 px-6 border-2 rounded-md my-6 lg:mx-8">Read More</button>
            </div>
          </section>
          <section>
            <div class="pagination-02 my-6">
              <div class="flex justify-start items-center gap-4">
                <ul class="flex justify-start items-start gap-2">
                  <li class="p-1 px-3 border-2 rounded-md"><a href="#">1</a></li>
                  <li class="p-1 px-3 border-2 rounded-md"><a href="#">2</a></li>
                  <li class="p-1 px-3 border-2 rounded-md"><a href="#">3</a></li>
                </ul>
                <button class="px-3 py-1 border-2 rounded-md">Next</button>
              </div>
            </div>
          </section>
        </div>
        <div class="col-span-12 lg:col-span-4">
          <div class="search-02 py-6 w-full relative">
            <input type="text" placeholder="Search..." class="border-[1px] rounded-md outline-none p-3 w-full ">
            <svg version="1.1" class="absolute right-[15px] top-[30px] cursor-pointer w-8 h-8" id="Layer_1"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 502.173 502.173" style="enable-background:new 0 0 502.173 502.173;" xml:space="preserve">
              <g>
                <g>
                  <g>
                    <path d="M494.336,443.646L316.402,265.713c20.399-31.421,30.023-68.955,27.189-106.632
				C340.507,118.096,322.783,79.5,293.684,50.4C261.167,17.884,217.984,0,172.023,0c-0.222,0-0.445,0.001-0.668,0.001
				C125.149,0.176,81.837,18.409,49.398,51.342c-66.308,67.316-65.691,176.257,1.375,242.85
				c29.112,28.907,67.655,46.482,108.528,49.489c37.579,2.762,75.008-6.867,106.343-27.21l177.933,177.932
				c5.18,5.18,11.984,7.77,18.788,7.77s13.608-2.59,18.789-7.769l13.182-13.182C504.695,470.862,504.695,454.006,494.336,443.646z
				 M480.193,467.079l-13.182,13.182c-2.563,2.563-6.73,2.561-9.292,0L273.914,296.456c-1.936-1.937-4.497-2.929-7.074-2.929
				c-2.044,0-4.098,0.624-5.858,1.898c-60.538,43.788-143.018,37.3-196.118-15.425C5.592,221.146,5.046,124.867,63.646,65.377
				c28.67-29.107,66.949-45.222,107.784-45.376c0.199,0,0.392-0.001,0.591-0.001c40.617,0,78.785,15.807,107.52,44.542
				c53.108,53.108,59.759,135.751,15.814,196.509c-2.878,3.979-2.441,9.459,1.032,12.932l183.806,183.805
				C482.755,460.35,482.755,464.517,480.193,467.079z" />
                    <path d="M259.633,84.449c-48.317-48.316-126.935-48.316-175.253,0c-23.406,23.406-36.296,54.526-36.296,87.627
				c0,33.102,12.89,64.221,36.296,87.627S138.906,296,172.007,296c33.102,0,64.222-12.891,87.627-36.297
				C307.951,211.386,307.951,132.767,259.633,84.449z M245.492,245.561C225.863,265.189,199.766,276,172.007,276
				c-27.758,0-53.856-10.811-73.484-30.44c-19.628-19.628-30.438-45.726-30.438-73.484s10.809-53.855,30.438-73.484
				c20.262-20.263,46.868-30.39,73.484-30.39c26.61,0,53.227,10.133,73.484,30.39C286.011,139.112,286.011,205.042,245.492,245.561z
				" />
                    <path d="M111.017,153.935c1.569-5.296-1.452-10.861-6.747-12.43c-5.294-1.569-10.86,1.451-12.429,6.746
				c-8.73,29.459-0.668,61.244,21.04,82.952c1.952,1.952,4.512,2.929,7.071,2.929s5.118-0.977,7.071-2.928
				c3.905-3.906,3.905-10.238,0-14.143C110.506,200.544,104.372,176.355,111.017,153.935z" />
                    <path d="M141.469,94.214c-10.748,4.211-20.367,10.514-28.588,18.735c-3.905,3.906-3.905,10.238,0,14.143
				c1.952,1.952,4.512,2.929,7.071,2.929s5.118-0.977,7.07-2.929c6.26-6.26,13.575-11.057,21.741-14.255
				c5.143-2.015,7.678-7.816,5.664-12.959C152.413,94.735,146.611,92.202,141.469,94.214z" />
                  </g>
                </g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
            </svg>
          </div>
          <div class="flex justify-start items-center gap-2 py-6">
            <div class="w-[200px]">
              <h2 class="sub-title-02">Get in touch</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <div class="grid grid-cols-2 gap-4">
              <section>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-blue-700 rounded-sm svg-02">
                    <a href="#">
                      <svg class="w-5 h-5 " xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                        viewBox="0 0 24 24" style="fill: #ffffff">
                        <path
                          d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z">
                        </path>
                      </svg>
                    </a>
                  </div>
                  <div>
                    <h3>Followers</h3>
                    <span>750</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md py-4">
                  <div class="p-3 bg-pink-500 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                 c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                 C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </a>
                  </div>
                  <div>
                    <h3>Likes</h3>
                    <span>523</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-cyan-700 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="93.06px" height="93.06px"
                        viewBox="0 0 93.06 93.06" style="fill:#ffffff" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M11.185,0.08C5.004,0.08,0.001,5.092,0,11.259c0,6.173,5.003,11.184,11.186,11.184c6.166,0,11.176-5.011,11.176-11.184
  C22.362,5.091,17.351,0.08,11.185,0.08z" />
                            <rect x="1.538" y="30.926" width="19.287" height="62.054" />
                            <path d="M69.925,29.383c-9.382,0-15.673,5.144-18.248,10.022h-0.258v-8.479H32.921H32.92v62.053h19.27V62.281
  c0-8.093,1.541-15.932,11.575-15.932c9.89,0,10.022,9.256,10.022,16.451v30.178H93.06V58.942
  C93.06,42.235,89.455,29.383,69.925,29.383z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>

                    </a>
                  </div>
                  <div>
                    <h3>Followers</h3>
                    <span>1025</span>
                  </div>
                </div>
              </section>
              <section>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-sky-400 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999"
                        style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M507.77,96.789c-3.92-4.669-9.903-6.958-15.769-6.358c2.345-4.855,4.354-9.891,6.016-15.091
    c2.279-7.127-0.123-15.046-5.97-19.699c-5.849-4.662-14.103-5.232-20.545-1.416c-14.758,8.753-30.599,15.287-47.157,19.455
    c-21.035-18.575-48.714-29.128-76.82-29.128c-63.816,0-115.735,51.917-115.735,115.731c0,0.714,0.006,1.428,0.019,2.142
    c-64.801-8.793-124.951-42.372-166.494-93.332c-3.765-4.618-9.554-7.099-15.467-6.617C43.922,62.94,38.597,66.283,35.6,71.42
    c-10.258,17.603-15.68,37.727-15.68,58.199c0,18.054,4.218,35.74,12.145,51.67c-1.32,0.393-2.602,0.936-3.818,1.634
    c-5.477,3.138-8.967,9.007-9.111,15.299c-0.013,0.551-0.014,1.102-0.014,1.659c0,32.878,14.268,64.167,38.287,85.933
    c-3.841,4.722-5.072,11.157-3.206,16.976c9.946,31.053,32.666,56.265,61.702,69.726C92.746,383.153,67.381,388.7,41.425,388.7
    c-7.086,0-14.204-0.416-21.147-1.238c-8.439-1.004-16.336,3.885-19.202,11.89c-2.863,8,0.132,16.789,7.282,21.373
    c47.672,30.566,102.793,46.722,159.404,46.722c111.254,0,180.924-52.547,219.777-96.631
    c48.338-54.836,76.06-127.446,76.06-199.211c0-1.265-0.008-2.537-0.024-3.811c17.576-13.928,32.828-30.48,45.386-49.265
    C513.42,111.86,512.927,102.917,507.77,96.789z M447.131,154.728c-2.645,1.993-4.158,5.147-4.057,8.456
    c0.086,2.799,0.129,5.633,0.129,8.425c0,66.867-25.866,134.561-70.965,185.723c-36.075,40.928-100.834,89.716-204.475,89.716
    c-49.475,0-97.73-13.257-140.171-38.423c4.596,0.316,9.222,0.475,13.837,0.475c37.456,0,73.838-10.387,105.213-30.038
    c3.502-2.195,5.335-6.287,4.64-10.361c-0.697-4.075-3.783-7.326-7.816-8.234c-31.581-7.104-57.553-30.05-68.608-60.322
    c1.701,0.258,3.412,0.473,5.115,0.644c4.75,0.466,9.202-2.416,10.699-6.954c1.497-4.539-0.358-9.508-4.462-11.956
    c-28.06-16.734-45.763-46.996-46.651-79.439c3.985,2.013,8.121,3.766,12.341,5.228c4.347,1.505,9.163-0.084,11.758-3.882
    c2.597-3.797,2.33-8.861-0.651-12.365c-14.629-17.197-22.685-39.144-22.685-61.799c0-15.768,3.9-31.279,11.306-45.069
    c47.495,56.842,116.675,93.062,190.337,99.529c3.076,0.267,6.105-0.866,8.244-3.091s3.155-5.3,2.764-8.36
    c-0.519-4.065-0.782-8.219-0.782-12.344c0-52.566,42.768-95.332,95.336-95.332c24.725,0,49.052,9.914,66.741,27.198
    c2.46,2.403,5.965,3.408,9.323,2.665c18.548-4.087,36.34-10.801,52.975-19.987c-4.049,10.366-9.853,19.856-17.303,28.281
    c-3.006,3.399-3.405,8.376-0.978,12.211c2.426,3.835,7.097,5.607,11.453,4.344c6.018-1.74,11.985-3.781,17.819-6.092
    C476.151,129.269,462.58,143.088,447.131,154.728z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M89.95,145.834c-2.153-1.605-4.298-3.258-6.377-4.91c-4.409-3.506-10.826-2.774-14.331,1.636
    c-3.505,4.409-2.773,10.825,1.636,14.331c2.241,1.782,4.554,3.564,6.874,5.294c1.832,1.366,3.97,2.025,6.091,2.025
    c3.11,0,6.182-1.418,8.183-4.102C95.394,155.592,94.465,149.203,89.95,145.834z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M222.328,196.399c-36.715-3.223-73.142-14.6-105.344-32.9c-4.898-2.783-11.123-1.07-13.907,3.828
    c-2.783,4.898-1.07,11.123,3.828,13.907c34.73,19.738,74.026,32.009,113.639,35.487c0.304,0.026,0.605,0.04,0.904,0.04
    c5.229,0,9.682-4,10.148-9.309C232.088,201.84,227.939,196.892,222.328,196.399z" />
                          </g>
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
                    </a>
                  </div>
                  <div>
                    <h3>Fans</h3>
                    <span>1236</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md py-4">
                  <div class="p-3 bg-sky-200 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 304.36 304.36"
                        style="fill: #ffffff" xml:space="preserve">
                        <g id="XMLID_1_">
                          <path id="XMLID_807_" style="fill-rule: evenodd; clip-rule: evenodd" d="M261.945,175.576c10.096,9.857,20.752,19.131,29.807,29.982
      c4,4.822,7.787,9.798,10.684,15.394c4.105,7.955,0.387,16.709-6.746,17.184l-44.34-0.02c-11.436,0.949-20.559-3.655-28.23-11.474
      c-6.139-6.253-11.824-12.908-17.727-19.372c-2.42-2.642-4.953-5.128-7.979-7.093c-6.053-3.929-11.307-2.726-14.766,3.587
      c-3.523,6.421-4.322,13.531-4.668,20.687c-0.475,10.441-3.631,13.186-14.119,13.664c-22.414,1.057-43.686-2.334-63.447-13.641
      c-17.422-9.968-30.932-24.04-42.691-39.971C34.828,153.482,17.295,119.395,1.537,84.353C-2.01,76.458,0.584,72.22,9.295,72.07
      c14.465-0.281,28.928-0.261,43.41-0.02c5.879,0.086,9.771,3.458,12.041,9.012c7.826,19.243,17.402,37.551,29.422,54.521
      c3.201,4.518,6.465,9.036,11.113,12.216c5.142,3.521,9.057,2.354,11.476-3.374c1.535-3.632,2.207-7.544,2.553-11.434
      c1.146-13.383,1.297-26.743-0.713-40.079c-1.234-8.323-5.922-13.711-14.227-15.286c-4.238-0.803-3.607-2.38-1.555-4.799
      c3.564-4.172,6.916-6.769,13.598-6.769h50.111c7.889,1.557,9.641,5.101,10.721,13.039l0.043,55.663
      c-0.086,3.073,1.535,12.192,7.07,14.226c4.43,1.448,7.35-2.096,10.008-4.905c11.998-12.734,20.561-27.783,28.211-43.366
      c3.395-6.852,6.314-13.968,9.143-21.078c2.096-5.276,5.385-7.872,11.328-7.757l48.229,0.043c1.43,0,2.877,0.021,4.262,0.258
      c8.127,1.385,10.354,4.881,7.844,12.817c-3.955,12.451-11.65,22.827-19.174,33.251c-8.043,11.129-16.645,21.877-24.621,33.072
      C252.26,161.544,252.842,166.697,261.945,175.576L261.945,175.576z M261.945,175.576" />
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
                    </a>
                  </div>
                  <div>
                    <h3>Likes</h3>
                    <span>523</span>
                  </div>
                </div>
                <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                  <div class="p-3 bg-red-600 rounded-sm svg-02">
                    <a href="#">
                      <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="96.875px" height="96.875px"
                        viewBox="0 0 96.875 96.875" style="fill: #ffffff;" xml:space="preserve">
                        <g>
                          <path d="M95.201,25.538c-1.186-5.152-5.4-8.953-10.473-9.52c-12.013-1.341-24.172-1.348-36.275-1.341
c-12.105-0.007-24.266,0-36.279,1.341c-5.07,0.567-9.281,4.368-10.467,9.52C0.019,32.875,0,40.884,0,48.438
C0,55.992,0,64,1.688,71.336c1.184,5.151,5.396,8.952,10.469,9.52c12.012,1.342,24.172,1.349,36.277,1.342
c12.107,0.007,24.264,0,36.275-1.342c5.07-0.567,9.285-4.368,10.471-9.52c1.689-7.337,1.695-15.345,1.695-22.898
C96.875,40.884,96.889,32.875,95.201,25.538z M35.936,63.474c0-10.716,0-21.32,0-32.037c10.267,5.357,20.466,10.678,30.798,16.068
C56.434,52.847,46.23,58.136,35.936,63.474z" />
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>

                    </a>
                  </div>
                  <div>
                    <h3>Subscribers</h3>
                    <span>590M</span>
                  </div>
                </div>
              </section>
          </section>
          <div class="flex justify-start items-center gap-2 py-6">
            <div class="w-[200px]">
              <h2 class="sub-title-02">Latest News</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-md">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-md" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-md">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-md" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-md">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-md" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-md">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-md" /></a>
                </div>
              </div>

              <div class="text-post-02">
                <h2>Travel</h2>
                <p>
                  <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
                </p>
                <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-2 py-6 ">
              <div class="w-[220px]">
                <h2 class="sub-title-02">Follow us</h2>
              </div>
              <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
                <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
              </div>
            </div>
            <section>
              <div class="grid grid-cols-2 gap-2 mt-3">
                <div class="main-img-02">
                  <a href="#"><img src="../img/1.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                             c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                             c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                             c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                             C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                             c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                             c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                             C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>
                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/2.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/3.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/1.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/3.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
                <div class="main-img-02">
                  <a href="#"><img src="../img/2.jpg" class="w-full h-full object-cover">
                    <div class="overlay-02">
                      <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                        viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                    </div>
                  </a>

                </div>
              </div>
            </section>
          </section>
          <div class="flex justify-start items-center gap-2 py-6">
            <div class="w-[200px]">
              <h2 class="sub-title-02">Comments</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-comment-02">
                <div class="flex flex-col justify-start items-start">
                  <h2>Travel</h2>
                  <span>14 January, 2022</span>
                </div>

                <p class="pt-2">
                  Top 20 best thems plugn & on this year visit Expart
                </p>

              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4 py-2">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-comment-02">
                <div class="flex flex-col justify-start items-start">
                  <h2>Travel</h2>
                  <span>14 January, 2022</span>
                </div>

                <p class="pt-2">
                  Top 20 best thems plugn & on this year visit Expart
                </p>

              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4 pb-2">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-comment-02">
                <div class="flex flex-col justify-start items-start">
                  <h2>Travel</h2>
                  <span>14 January, 2022</span>
                </div>

                <p class="pt-2">
                  Top 20 best thems plugn & on this year visit Expart
                </p>

              </div>
            </div>
          </section>
          <section>
            <div class="flex justify-start items-center gap-4">
              <div class="w-[100px]">
                <div class="w-[100px] h-[100px] rounded-full">
                  <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
                </div>
              </div>

              <div class="text-comment-02">
                <div class="flex flex-col justify-start items-start">
                  <h2>Travel</h2>
                  <span>14 January, 2022</span>
                </div>

                <p class="pt-2">
                  Top 20 best thems plugn & on this year visit Expart
                </p>

              </div>
            </div>
          </section>
          <div class="flex justify-start items-center gap-2 py-6">
            <div class="w-[100px]">
              <h2 class="sub-title-02">Tags</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <ul class="tag-02 flex justify-start items-start gap-2 flex-wrap">
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Education</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">SEO Marketing</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Business</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Solutions</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">UX</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Case Study</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Ceative</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Insights</a></li>
            </ul>
          </section>
        </div>
    </section>
  </div>',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'js_handle' => '',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'product-single',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'html' => ' <div class="sub-direct-02 py-10 px-2 md:px-8 xl:px-[120px]">
    <div class="flex justify-center items-center">
      <h2>
        Product
      </h2>
    </div>
    <div class="flex justify-center items-center gap-2 ">
      <a href="#" class="active">Home</a>
      <span>.</span>
      <a href="#"> Product Detail</a>
    </div>
  </div>
  <div class="content px-2 md:px-8 xl:px-[120px] mt-2 mb-6">
    <div class="grid grid-cols-1 xl:grid-cols-12 xl:gap-6">
      <div class="col-span-8 mt-6">
        <div class="border-[1px] p-3 md:p-8 product-02">
          <div class="flex flex-col md:flex-row justify-between items-center gap-2">
            <div>
              <div class=" pb-2">
                <div class="relative">
                  <h3>Awesome Merch Wallet</h3>
                  <span class=" absolute top-0 right-[-30px] hidden md:block">Sale -30%</span>
                </div>
              </div>

              <div class="flex justify-start items-center gap-4 pt-2 border-t-[1px] flex-wrap">
                <div class="flex justify-start items-center gap-2">
                  <p class="">Price:</p>
                  <h2 class="">$239</h2>
                </div>
                <div class="flex justify-start items-center gap-2">
                  <div class="rating-02">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="">
                    <span>12 review</span>
                  </div>
                </div>
                <div class="flex flex-wrap gap-2">
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 " id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 483.1 483.1"
                      style="enable-background: new 0 0 483.1 483.1" xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M434.55,418.7l-27.8-313.3c-0.5-6.2-5.7-10.9-12-10.9h-58.6c-0.1-52.1-42.5-94.5-94.6-94.5s-94.5,42.4-94.6,94.5h-58.6
                                           c-6.2,0-11.4,4.7-12,10.9l-27.8,313.3c0,0.4,0,0.7,0,1.1c0,34.9,32.1,63.3,71.5,63.3h243c39.4,0,71.5-28.4,71.5-63.3
                                           C434.55,419.4,434.55,419.1,434.55,418.7z M241.55,24c38.9,0,70.5,31.6,70.6,70.5h-141.2C171.05,55.6,202.65,24,241.55,24z
                                            M363.05,459h-243c-26,0-47.2-17.3-47.5-38.8l26.8-301.7h47.6v42.1c0,6.6,5.4,12,12,12s12-5.4,12-12v-42.1h141.2v42.1
                                           c0,6.6,5.4,12,12,12s12-5.4,12-12v-42.1h47.6l26.8,301.8C410.25,441.7,389.05,459,363.05,459z" />
                          <path
                            d="M291.45,249.8l-70.8,70.8l-28.9-28.9c-4.7-4.7-12.3-4.7-17,0s-4.7,12.3,0,17l37.4,37.4c2.3,2.3,5.4,3.5,8.5,3.5
                                           s6.1-1.2,8.5-3.5l79.3-79.3c4.7-4.7,4.7-12.3,0-17C303.75,245.2,296.15,245.2,291.45,249.8z" />
                        </g>
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

                    <span class="count-01">50</span>
                  </div>
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 " id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                      viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                      xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                                          c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                                          C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                                          c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                                          M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                                          C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                                          c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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

                    <span class="count-01">6</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex justify-end items-center gap-2">
              <input type="number" class="outline-none border-[1px] p-2" min="1" max="100" value="1" />
              <button class="outline-none transition-all duration-500 p-2 px-4 border-[1px] rounded-md">
                Add to cart
              </button>
            </div>
          </div>
        </div>
        <div class="slider h-[200px] md:h-[300px] xl:h-[400px] z-[1]">
          <section>
            <div class="bg-white-02">
              <div class="h-[200px] md:h-[300px] xl:h-[400px] relative">
                <img src="../img/1.jpg" class="w-full h-full object-cover" />
                <div class="infor-image-02 absolute left-[25px] bottom-[25px] p-4">
                  <div class="p-1 px-3 bg-blue-500 w-[95px]">
                    <span class="uppercase text-white text-[16px]">Politics</span>
                  </div>
                  <div class="py-4">
                    <h2>
                      <a href="#" class="text-[20px]">Well designed and well printed only for you and the
                        audience.
                      </a>
                    </h2>
                  </div>
                  <!-- <div class="flex justify-start items-center gap-6 flex-wrap">
                      <div class="flex justify-start items-center gap-2">
                        <div class="w-[30px] h-[30px] rounded-full">
                          <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                        </div>
                        <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                      </div>
                      <div class="flex justify-start items-center gap-2">
                        <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                          viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                          <g>
                            <g>
                              <path
                                d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                              <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                            </g>
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
                        <span>March 26, 2022</span>
                      </div>

                    </div> -->
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="bg-white-02">
              <div class="h-[200px] md:h-[300px] xl:h-[400px] relative">
                <img src="../img/2.jpg" class="w-full h-full object-cover" />
                <div class="infor-image-02 absolute left-[25px] bottom-[25px] p-4">
                  <div class="p-1 px-3 bg-blue-500 w-[95px]">
                    <span class="uppercase text-white text-[16px]">Politics</span>
                  </div>
                  <div class="py-4">
                    <h2>
                      <a href="#" class="text-[20px]">Well designed and well printed only for you and the
                        audience.
                      </a>
                    </h2>
                  </div>
                  <!-- <div class="flex justify-start items-center gap-6 flex-wrap">
                      <div class="flex justify-start items-center gap-2">
                        <div class="w-[30px] h-[30px] rounded-full">
                          <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                        </div>
                        <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                      </div>
                      <div class="flex justify-start items-center gap-2">
                        <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                          viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                          <g>
                            <g>
                              <path
                                d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                              <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                            </g>
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
                        <span>March 26, 2022</span>
                      </div>

                    </div> -->
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="bg-white-02">
              <div class="h-[200px] md:h-[300px] xl:h-[400px] relative">
                <img src="../img/3.jpg" class="w-full h-full object-cover" />
                <div class="infor-image-02 absolute left-[25px] bottom-[25px] p-4">
                  <div class="p-1 px-3 bg-blue-500 w-[95px]">
                    <span class="uppercase text-white text-[16px]">Politics</span>
                  </div>
                  <div class="py-4">
                    <h2>
                      <a href="#" class="text-[20px]">Well designed and well printed only for you and the
                        audience.
                      </a>
                    </h2>
                  </div>
                  <!-- <div class="flex justify-start items-center gap-6 flex-wrap">
                      <div class="flex justify-start items-center gap-2">
                        <div class="w-[30px] h-[30px] rounded-full">
                          <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                        </div>
                        <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
                      </div>
                      <div class="flex justify-start items-center gap-2">
                        <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                          viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                          <g>
                            <g>
                              <path
                                d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                              <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                            </g>
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
                        <span>March 26, 2022</span>
                      </div>

                    </div> -->
                </div>
              </div>
            </div>
          </section>
        </div>
        <section>
          <div class="border-b-[1px] pb-4">
            <div class="infor-post-02 pt-2">
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Atque sunt vel excepturi quos cum eveniet, voluptatum quod
                nesciunt earum molestias praesentium non facere! Corrupti
                harum dicta, minima nam incidunt libero? Lorem ipsum dolor sit
                amet consectetur adipisicing elit. Id dicta expedita odio
                itaque eveniet consequuntur nostrum obcaecati, debitis minus,
                ullam labore, delectus est vitae? Numquam, eligendi. Quo
                consectetur voluptatum facere.
              </p>
              <h2 class="py-2">Middle Post Heading</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Laudantium deleniti quidem nostrum. Sint, asperiores ab.
                Quibusdam doloribus voluptatum quas provident optio, facere
                laborum cum deserunt amet cumque iste est quo.
              </p>
            </div>
          </div>
        </section>

        <div class="border-b-[1px] pb-4">
          <section>
            <div class=" flex flex-col justify-start gap-2 md:flex-row  md:justify-between md:items-center mt-6">
              <div class="flex justify-start items-start gap-2">
                <h2 class="sub-title-02">Tags:</h2>
                <ul class="tag-02 flex justify-start items-start gap-2 flex-wrap">
                  <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Education</a></li>
                  <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Education</a></li>
                  <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Education</a></li>
                </ul>
              </div>
              <div class="flex justify-start items-center gap-2">
                <h2 class="sub-title-02">Share:</h2>
                <ul class="tag-02 flex justify-start items-start gap-2 flex-wrap">
                  <li class="py-2 px-3 border-[1px] rounded-md"><a href="#"><svg class="w-4 h-4"
                        xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24">
                        <path
                          d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z">
                        </path>
                      </svg></a></li>
                  <li class="py-2 px-3 border-[1px] rounded-md"><a href="#"><svg version="1.1" class="w-4 h-4"
                        id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 511.999 511.999" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M507.77,96.789c-3.92-4.669-9.903-6.958-15.769-6.358c2.345-4.855,4.354-9.891,6.016-15.091
        c2.279-7.127-0.123-15.046-5.97-19.699c-5.849-4.662-14.103-5.232-20.545-1.416c-14.758,8.753-30.599,15.287-47.157,19.455
        c-21.035-18.575-48.714-29.128-76.82-29.128c-63.816,0-115.735,51.917-115.735,115.731c0,0.714,0.006,1.428,0.019,2.142
        c-64.801-8.793-124.951-42.372-166.494-93.332c-3.765-4.618-9.554-7.099-15.467-6.617C43.922,62.94,38.597,66.283,35.6,71.42
        c-10.258,17.603-15.68,37.727-15.68,58.199c0,18.054,4.218,35.74,12.145,51.67c-1.32,0.393-2.602,0.936-3.818,1.634
        c-5.477,3.138-8.967,9.007-9.111,15.299c-0.013,0.551-0.014,1.102-0.014,1.659c0,32.878,14.268,64.167,38.287,85.933
        c-3.841,4.722-5.072,11.157-3.206,16.976c9.946,31.053,32.666,56.265,61.702,69.726C92.746,383.153,67.381,388.7,41.425,388.7
        c-7.086,0-14.204-0.416-21.147-1.238c-8.439-1.004-16.336,3.885-19.202,11.89c-2.863,8,0.132,16.789,7.282,21.373
        c47.672,30.566,102.793,46.722,159.404,46.722c111.254,0,180.924-52.547,219.777-96.631
        c48.338-54.836,76.06-127.446,76.06-199.211c0-1.265-0.008-2.537-0.024-3.811c17.576-13.928,32.828-30.48,45.386-49.265
        C513.42,111.86,512.927,102.917,507.77,96.789z M447.131,154.728c-2.645,1.993-4.158,5.147-4.057,8.456
        c0.086,2.799,0.129,5.633,0.129,8.425c0,66.867-25.866,134.561-70.965,185.723c-36.075,40.928-100.834,89.716-204.475,89.716
        c-49.475,0-97.73-13.257-140.171-38.423c4.596,0.316,9.222,0.475,13.837,0.475c37.456,0,73.838-10.387,105.213-30.038
        c3.502-2.195,5.335-6.287,4.64-10.361c-0.697-4.075-3.783-7.326-7.816-8.234c-31.581-7.104-57.553-30.05-68.608-60.322
        c1.701,0.258,3.412,0.473,5.115,0.644c4.75,0.466,9.202-2.416,10.699-6.954c1.497-4.539-0.358-9.508-4.462-11.956
        c-28.06-16.734-45.763-46.996-46.651-79.439c3.985,2.013,8.121,3.766,12.341,5.228c4.347,1.505,9.163-0.084,11.758-3.882
        c2.597-3.797,2.33-8.861-0.651-12.365c-14.629-17.197-22.685-39.144-22.685-61.799c0-15.768,3.9-31.279,11.306-45.069
        c47.495,56.842,116.675,93.062,190.337,99.529c3.076,0.267,6.105-0.866,8.244-3.091s3.155-5.3,2.764-8.36
        c-0.519-4.065-0.782-8.219-0.782-12.344c0-52.566,42.768-95.332,95.336-95.332c24.725,0,49.052,9.914,66.741,27.198
        c2.46,2.403,5.965,3.408,9.323,2.665c18.548-4.087,36.34-10.801,52.975-19.987c-4.049,10.366-9.853,19.856-17.303,28.281
        c-3.006,3.399-3.405,8.376-0.978,12.211c2.426,3.835,7.097,5.607,11.453,4.344c6.018-1.74,11.985-3.781,17.819-6.092
        C476.151,129.269,462.58,143.088,447.131,154.728z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M89.95,145.834c-2.153-1.605-4.298-3.258-6.377-4.91c-4.409-3.506-10.826-2.774-14.331,1.636
        c-3.505,4.409-2.773,10.825,1.636,14.331c2.241,1.782,4.554,3.564,6.874,5.294c1.832,1.366,3.97,2.025,6.091,2.025
        c3.11,0,6.182-1.418,8.183-4.102C95.394,155.592,94.465,149.203,89.95,145.834z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M222.328,196.399c-36.715-3.223-73.142-14.6-105.344-32.9c-4.898-2.783-11.123-1.07-13.907,3.828
        c-2.783,4.898-1.07,11.123,3.828,13.907c34.73,19.738,74.026,32.009,113.639,35.487c0.304,0.026,0.605,0.04,0.904,0.04
        c5.229,0,9.682-4,10.148-9.309C232.088,201.84,227.939,196.892,222.328,196.399z" />
                          </g>
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
                      </svg></a></li>
                  <li class="py-2 px-3 border-[1px] rounded-md"><a href="#"><svg version="1.1" class="w-4 h-4"
                        id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" width="169.063px" height="169.063px" viewBox="0 0 169.063 169.063"
                        xml:space="preserve">
                        <g>
                          <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                 c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                          <path
                            d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                          <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                 C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                      </svg></a></li>
                </ul>
              </div>
            </div>
          </section>
        </div>
        <div class="flex justify-between items-center py-2">
          <h2 class="title-02">Review 2</h2>
          <div class="w-[20px] h-[20px] border-t-[1px] border-r-[1px]"></div>
        </div>

        <section>
          <div class="flex justify-start items-start gap-4 mt-4">
            <div class="w-[100px]">
              <div class="w-[60px] h-[60px] rounded-full">
                <a href="/content2/author-single.html"><img src="../img/1.jpg" alt=""
                    class="w-full h-full rounded-full object-cover" /></a>
              </div>
            </div>

            <div class="border-[1px] rounded-md comment-02 p-6 relative">
              <div class="flex justify-between items-center">
                <div class="flex justify-start items-center gap-2">
                  <h3>Kevin Antony</h3>
                  <div class="rating-02">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>

                <svg class="w-4 h-4 " viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <title>ionicons-v5-f</title>
                  <circle cx="256" cy="256" r="48" />
                  <circle cx="416" cy="256" r="48" />
                  <circle cx="96" cy="256" r="48" />
                </svg>
              </div>
              <p class="line-clamp-2  py-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                ducimus quos vero magni eveniet aspernatur quam quae omnis!
                Tenetur dolores vero corrupti eaque iusto quisquam sequi,
                adipisci minima qui assumenda.
              </p>
              <div class="flex justify-between items-center">
                <div>
                  <span class="flex justify-start items-center gap-2">
                    <svg version="1.1" class="w-4 h-4 " id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                      viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                            c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                          <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                            c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                        </g>
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
                    <span class="day-01">18 MAY 2022</span>
                  </span>
                </div>
                <button class=" px-6 border-2 rounded-md my-6 lg:ml-[67px]">Reply</button>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="border-b-[1px] pb-4">
            <div class="flex justify-start items-start gap-4 mt-4">
              <div class="w-[100px]">
                <div class="w-[60px] h-[60px] rounded-full">
                  <a href="/content1/author-single.html"><img src="../img/4.jpg" alt=""
                      class="w-full h-full rounded-full object-cover" /></a>
                </div>
              </div>

              <div class="border-[1px] rounded-md comment-02 p-6 relative">
                <div class="flex justify-between items-center">
                  <div class="flex justify-start items-center gap-2">
                    <h3>Kevin Antony</h3>
                    <div class="rating-02">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>

                  <svg class="w-4 h-4 " viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <title>ionicons-v5-f</title>
                    <circle cx="256" cy="256" r="48" />
                    <circle cx="416" cy="256" r="48" />
                    <circle cx="96" cy="256" r="48" />
                  </svg>
                </div>
                <p class="line-clamp-2  py-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Ipsa ducimus quos vero magni eveniet aspernatur quam quae
                  omnis! Tenetur dolores vero corrupti eaque iusto quisquam
                  sequi, adipisci minima qui assumenda.
                </p>
                <div class="flex justify-between items-center">
                  <div>
                    <span class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-4 h-4 " id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                            c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                            c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                  </div>
                  <button class=" px-6 border-2 rounded-md my-6 lg:ml-[67px]">Reply</button>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="pt-4">
            <div class="title-02">
              <h2>Add Review</h2>
            </div>
            <div class="tag-02 flex justify-start items-center gap-2">
              <h2>
                Your rating for this product:
              </h2>
              <div class="rating-box-02">
                <div class="rating-container-02">
                  <input type="radio" name="rating" value="5" id="star-5" />
                  <label for="star-5">
                    <i class="fa fa-star" aria-hidden="true"></i></label>

                  <input type="radio" name="rating" value="4" id="star-4" />
                  <label for="star-4">
                    <i class="fa fa-star" aria-hidden="true"></i></label>

                  <input type="radio" name="rating" value="3" id="star-3" />
                  <label for="star-3">
                    <i class="fa fa-star" aria-hidden="true"></i></label>

                  <input type="radio" name="rating" value="2" id="star-2" />
                  <label for="star-2">
                    <i class="fa fa-star" aria-hidden="true"></i></label>

                  <input type="radio" name="rating" value="1" id="star-1" />
                  <label for="star-1">
                    <i class="fa fa-star" aria-hidden="true"></i></label>
                </div>
              </div>
            </div>

            <section>
              <div class="rep-02 flex flex-col gap-6 py-6">
                <textarea name="" placeholder="Message" id="" cols="30" rows="10"
                  class="outline-none w-full h-[150px] p-8 rounded-md"></textarea>
                <div class="flex flex-col lg:flex-row gap-6">
                  <input type="text" placeholder="Name" class="outline-none w-full p-3 px-8 rounded-md">
                  <input type="text" placeholder="Email" class="outline-none w-full p-3 px-8 rounded-md">
                </div>
                <input type="text" placeholder="Website" class="outline-none w-full p-3 px-8 rounded-md">
                <div class="inline-block">
                  <input type="checkbox" class="w-4 h-4">
                  <span class="pl-2">Save my name, email, and website in this browser for the next time I
                    comment.</span>
                </div>
                <button class="p-3 rounded-md outline-none">Submit</button>
              </div>
            </section>
        </section>
        <div class="flex justify-between items-center mt-6">
          <div class="flex justify-start items-center w-full gap-2">
            <div class="w-[250px]">
              <h2 class="title-02">You may like</h2>
            </div>
            <div class="hidden md:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
        </div>
        <div class="slider-trend h-[450px] mt-6">
          <section>
            <div class="bg-white-02 mx-3 shadow-lg border-2 rounded-sm">
              <div class="h-[250px] relative">
                <img src="../img/1.jpg" class="w-full h-full object-cover" />
              </div>
              <div class="p-6 infor-slider-02">
                <span>
                  April 13, 2022
                </span>
                <div class="pb-4">
                  <h3>
                    <a href="#">Beauty queens need beauty material & products</a>
                  </h3>
                </div>
                <div class="flex justify-start items-center gap-2">
                  <div class="w-[35px] h-[35px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full">
                  </div>
                  <span>
                    by
                    <a href="#" class="transition-all duration-500">
                      Jone Deo</a>
                  </span>

                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="bg-white-02 mx-3 shadow-lg border-2 rounded-sm">
              <div class="h-[250px] relative">
                <img src="../img/3.jpg" class="w-full h-full object-cover" />
              </div>
              <div class="p-6 infor-slider-02">
                <span>
                  April 13, 2022
                </span>
                <div class="pb-4">
                  <h3>
                    <a href="#">Beauty queens need beauty material & products</a>
                  </h3>
                </div>
                <div class="flex justify-start items-center gap-2">
                  <div class="w-[35px] h-[35px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full">
                  </div>
                  <span>
                    by
                    <a href="#" class="transition-all duration-500">
                      Jone Deo</a>
                  </span>

                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="bg-white-02 mx-3 shadow-lg border-2 rounded-sm">
              <div class="h-[250px] relative">
                <img src="../img/2.jpg" class="w-full h-full object-cover" />
              </div>
              <div class="p-6 infor-slider-02">
                <span>
                  April 13, 2022
                </span>
                <div class="pb-4">
                  <h3>
                    <a href="#">Beauty queens need beauty material & products</a>
                  </h3>
                </div>
                <div class="flex justify-start items-center gap-2">
                  <div class="w-[35px] h-[35px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full">
                  </div>
                  <span>
                    by
                    <a href="#" class="transition-all duration-500">
                      Jone Deo</a>
                  </span>

                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="bg-white-02 mx-3 shadow-lg border-2 rounded-sm">
              <div class="h-[250px] relative">
                <img src="../img/3.jpg" class="w-full h-full object-cover" />
              </div>
              <div class="p-6 infor-slider-02">
                <span>
                  April 13, 2022
                </span>
                <div class="pb-4">
                  <h3>
                    <a href="#">Beauty queens need beauty material & products</a>
                  </h3>
                </div>
                <div class="flex justify-start items-center gap-2">
                  <div class="w-[35px] h-[35px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full">
                  </div>
                  <span>
                    by
                    <a href="#" class="transition-all duration-500">
                      Jone Deo</a>
                  </span>

                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="bg-white-02 mx-3 shadow-lg border-2 rounded-sm">
              <div class="h-[250px] relative">
                <img src="../img/2.jpg" class="w-full h-full object-cover" />
              </div>
              <div class="p-6 infor-slider-02">
                <span>
                  April 13, 2022
                </span>
                <div class="pb-4">
                  <h3>
                    <a href="#">Beauty queens need beauty material & products</a>
                  </h3>
                </div>
                <div class="flex justify-start items-center gap-2">
                  <div class="w-[35px] h-[35px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full">
                  </div>
                  <span>
                    by
                    <a href="#" class="transition-all duration-500">
                      Jone Deo</a>
                  </span>

                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

      <div class="col-span-12 lg:col-span-4">
        <div class="search-02 py-6 w-full relative">
          <input type="text" placeholder="Search..." class="border-[1px] rounded-md outline-none p-3 w-full ">
          <svg version="1.1" class="absolute right-[15px] top-[30px] cursor-pointer w-8 h-8" id="Layer_1"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 502.173 502.173" style="enable-background:new 0 0 502.173 502.173;" xml:space="preserve">
            <g>
              <g>
                <g>
                  <path d="M494.336,443.646L316.402,265.713c20.399-31.421,30.023-68.955,27.189-106.632
          C340.507,118.096,322.783,79.5,293.684,50.4C261.167,17.884,217.984,0,172.023,0c-0.222,0-0.445,0.001-0.668,0.001
          C125.149,0.176,81.837,18.409,49.398,51.342c-66.308,67.316-65.691,176.257,1.375,242.85
          c29.112,28.907,67.655,46.482,108.528,49.489c37.579,2.762,75.008-6.867,106.343-27.21l177.933,177.932
          c5.18,5.18,11.984,7.77,18.788,7.77s13.608-2.59,18.789-7.769l13.182-13.182C504.695,470.862,504.695,454.006,494.336,443.646z
           M480.193,467.079l-13.182,13.182c-2.563,2.563-6.73,2.561-9.292,0L273.914,296.456c-1.936-1.937-4.497-2.929-7.074-2.929
          c-2.044,0-4.098,0.624-5.858,1.898c-60.538,43.788-143.018,37.3-196.118-15.425C5.592,221.146,5.046,124.867,63.646,65.377
          c28.67-29.107,66.949-45.222,107.784-45.376c0.199,0,0.392-0.001,0.591-0.001c40.617,0,78.785,15.807,107.52,44.542
          c53.108,53.108,59.759,135.751,15.814,196.509c-2.878,3.979-2.441,9.459,1.032,12.932l183.806,183.805
          C482.755,460.35,482.755,464.517,480.193,467.079z" />
                  <path d="M259.633,84.449c-48.317-48.316-126.935-48.316-175.253,0c-23.406,23.406-36.296,54.526-36.296,87.627
          c0,33.102,12.89,64.221,36.296,87.627S138.906,296,172.007,296c33.102,0,64.222-12.891,87.627-36.297
          C307.951,211.386,307.951,132.767,259.633,84.449z M245.492,245.561C225.863,265.189,199.766,276,172.007,276
          c-27.758,0-53.856-10.811-73.484-30.44c-19.628-19.628-30.438-45.726-30.438-73.484s10.809-53.855,30.438-73.484
          c20.262-20.263,46.868-30.39,73.484-30.39c26.61,0,53.227,10.133,73.484,30.39C286.011,139.112,286.011,205.042,245.492,245.561z
          " />
                  <path d="M111.017,153.935c1.569-5.296-1.452-10.861-6.747-12.43c-5.294-1.569-10.86,1.451-12.429,6.746
          c-8.73,29.459-0.668,61.244,21.04,82.952c1.952,1.952,4.512,2.929,7.071,2.929s5.118-0.977,7.071-2.928
          c3.905-3.906,3.905-10.238,0-14.143C110.506,200.544,104.372,176.355,111.017,153.935z" />
                  <path d="M141.469,94.214c-10.748,4.211-20.367,10.514-28.588,18.735c-3.905,3.906-3.905,10.238,0,14.143
          c1.952,1.952,4.512,2.929,7.071,2.929s5.118-0.977,7.07-2.929c6.26-6.26,13.575-11.057,21.741-14.255
          c5.143-2.015,7.678-7.816,5.664-12.959C152.413,94.735,146.611,92.202,141.469,94.214z" />
                </g>
              </g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
          </svg>
        </div>
        <div class="flex justify-start items-center gap-2 py-6">
          <div class="w-[200px]">
            <h2 class="sub-title-02">Get in touch</h2>
          </div>
          <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
            <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
          </div>
        </div>
        <section>
          <div class="grid grid-cols-2 gap-4">
            <section>
              <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                <div class="p-3 bg-blue-700 rounded-sm svg-02">
                  <a href="#">
                    <svg class="w-5 h-5 " xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                      viewBox="0 0 24 24" style="fill: #ffffff">
                      <path
                        d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z">
                      </path>
                    </svg>
                  </a>
                </div>
                <div>
                  <h3>Followers</h3>
                  <span>750</span>
                </div>
              </div>
              <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md py-4">
                <div class="p-3 bg-pink-500 rounded-sm svg-02">
                  <a href="#">
                    <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                      viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                      <g>
                        <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                   c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                        <path
                          d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                        <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                   C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                  </a>
                </div>
                <div>
                  <h3>Likes</h3>
                  <span>523</span>
                </div>
              </div>
              <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                <div class="p-3 bg-cyan-700 rounded-sm svg-02">
                  <a href="#">
                    <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="93.06px" height="93.06px"
                      viewBox="0 0 93.06 93.06" style="fill:#ffffff" xml:space="preserve">
                      <g>
                        <g>
                          <path d="M11.185,0.08C5.004,0.08,0.001,5.092,0,11.259c0,6.173,5.003,11.184,11.186,11.184c6.166,0,11.176-5.011,11.176-11.184
    C22.362,5.091,17.351,0.08,11.185,0.08z" />
                          <rect x="1.538" y="30.926" width="19.287" height="62.054" />
                          <path d="M69.925,29.383c-9.382,0-15.673,5.144-18.248,10.022h-0.258v-8.479H32.921H32.92v62.053h19.27V62.281
    c0-8.093,1.541-15.932,11.575-15.932c9.89,0,10.022,9.256,10.022,16.451v30.178H93.06V58.942
    C93.06,42.235,89.455,29.383,69.925,29.383z" />
                        </g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                    </svg>

                  </a>
                </div>
                <div>
                  <h3>Followers</h3>
                  <span>1025</span>
                </div>
              </div>
            </section>
            <section>
              <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                <div class="p-3 bg-sky-400 rounded-sm svg-02">
                  <a href="#">
                    <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999"
                      style="fill: #ffffff" xml:space="preserve">
                      <g>
                        <g>
                          <path d="M507.77,96.789c-3.92-4.669-9.903-6.958-15.769-6.358c2.345-4.855,4.354-9.891,6.016-15.091
      c2.279-7.127-0.123-15.046-5.97-19.699c-5.849-4.662-14.103-5.232-20.545-1.416c-14.758,8.753-30.599,15.287-47.157,19.455
      c-21.035-18.575-48.714-29.128-76.82-29.128c-63.816,0-115.735,51.917-115.735,115.731c0,0.714,0.006,1.428,0.019,2.142
      c-64.801-8.793-124.951-42.372-166.494-93.332c-3.765-4.618-9.554-7.099-15.467-6.617C43.922,62.94,38.597,66.283,35.6,71.42
      c-10.258,17.603-15.68,37.727-15.68,58.199c0,18.054,4.218,35.74,12.145,51.67c-1.32,0.393-2.602,0.936-3.818,1.634
      c-5.477,3.138-8.967,9.007-9.111,15.299c-0.013,0.551-0.014,1.102-0.014,1.659c0,32.878,14.268,64.167,38.287,85.933
      c-3.841,4.722-5.072,11.157-3.206,16.976c9.946,31.053,32.666,56.265,61.702,69.726C92.746,383.153,67.381,388.7,41.425,388.7
      c-7.086,0-14.204-0.416-21.147-1.238c-8.439-1.004-16.336,3.885-19.202,11.89c-2.863,8,0.132,16.789,7.282,21.373
      c47.672,30.566,102.793,46.722,159.404,46.722c111.254,0,180.924-52.547,219.777-96.631
      c48.338-54.836,76.06-127.446,76.06-199.211c0-1.265-0.008-2.537-0.024-3.811c17.576-13.928,32.828-30.48,45.386-49.265
      C513.42,111.86,512.927,102.917,507.77,96.789z M447.131,154.728c-2.645,1.993-4.158,5.147-4.057,8.456
      c0.086,2.799,0.129,5.633,0.129,8.425c0,66.867-25.866,134.561-70.965,185.723c-36.075,40.928-100.834,89.716-204.475,89.716
      c-49.475,0-97.73-13.257-140.171-38.423c4.596,0.316,9.222,0.475,13.837,0.475c37.456,0,73.838-10.387,105.213-30.038
      c3.502-2.195,5.335-6.287,4.64-10.361c-0.697-4.075-3.783-7.326-7.816-8.234c-31.581-7.104-57.553-30.05-68.608-60.322
      c1.701,0.258,3.412,0.473,5.115,0.644c4.75,0.466,9.202-2.416,10.699-6.954c1.497-4.539-0.358-9.508-4.462-11.956
      c-28.06-16.734-45.763-46.996-46.651-79.439c3.985,2.013,8.121,3.766,12.341,5.228c4.347,1.505,9.163-0.084,11.758-3.882
      c2.597-3.797,2.33-8.861-0.651-12.365c-14.629-17.197-22.685-39.144-22.685-61.799c0-15.768,3.9-31.279,11.306-45.069
      c47.495,56.842,116.675,93.062,190.337,99.529c3.076,0.267,6.105-0.866,8.244-3.091s3.155-5.3,2.764-8.36
      c-0.519-4.065-0.782-8.219-0.782-12.344c0-52.566,42.768-95.332,95.336-95.332c24.725,0,49.052,9.914,66.741,27.198
      c2.46,2.403,5.965,3.408,9.323,2.665c18.548-4.087,36.34-10.801,52.975-19.987c-4.049,10.366-9.853,19.856-17.303,28.281
      c-3.006,3.399-3.405,8.376-0.978,12.211c2.426,3.835,7.097,5.607,11.453,4.344c6.018-1.74,11.985-3.781,17.819-6.092
      C476.151,129.269,462.58,143.088,447.131,154.728z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path d="M89.95,145.834c-2.153-1.605-4.298-3.258-6.377-4.91c-4.409-3.506-10.826-2.774-14.331,1.636
      c-3.505,4.409-2.773,10.825,1.636,14.331c2.241,1.782,4.554,3.564,6.874,5.294c1.832,1.366,3.97,2.025,6.091,2.025
      c3.11,0,6.182-1.418,8.183-4.102C95.394,155.592,94.465,149.203,89.95,145.834z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path d="M222.328,196.399c-36.715-3.223-73.142-14.6-105.344-32.9c-4.898-2.783-11.123-1.07-13.907,3.828
      c-2.783,4.898-1.07,11.123,3.828,13.907c34.73,19.738,74.026,32.009,113.639,35.487c0.304,0.026,0.605,0.04,0.904,0.04
      c5.229,0,9.682-4,10.148-9.309C232.088,201.84,227.939,196.892,222.328,196.399z" />
                        </g>
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
                  </a>
                </div>
                <div>
                  <h3>Fans</h3>
                  <span>1236</span>
                </div>
              </div>
              <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md py-4">
                <div class="p-3 bg-sky-200 rounded-sm svg-02">
                  <a href="#">
                    <svg version="1.1" class="w-5 h-5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 304.36 304.36"
                      style="fill: #ffffff" xml:space="preserve">
                      <g id="XMLID_1_">
                        <path id="XMLID_807_" style="fill-rule: evenodd; clip-rule: evenodd" d="M261.945,175.576c10.096,9.857,20.752,19.131,29.807,29.982
        c4,4.822,7.787,9.798,10.684,15.394c4.105,7.955,0.387,16.709-6.746,17.184l-44.34-0.02c-11.436,0.949-20.559-3.655-28.23-11.474
        c-6.139-6.253-11.824-12.908-17.727-19.372c-2.42-2.642-4.953-5.128-7.979-7.093c-6.053-3.929-11.307-2.726-14.766,3.587
        c-3.523,6.421-4.322,13.531-4.668,20.687c-0.475,10.441-3.631,13.186-14.119,13.664c-22.414,1.057-43.686-2.334-63.447-13.641
        c-17.422-9.968-30.932-24.04-42.691-39.971C34.828,153.482,17.295,119.395,1.537,84.353C-2.01,76.458,0.584,72.22,9.295,72.07
        c14.465-0.281,28.928-0.261,43.41-0.02c5.879,0.086,9.771,3.458,12.041,9.012c7.826,19.243,17.402,37.551,29.422,54.521
        c3.201,4.518,6.465,9.036,11.113,12.216c5.142,3.521,9.057,2.354,11.476-3.374c1.535-3.632,2.207-7.544,2.553-11.434
        c1.146-13.383,1.297-26.743-0.713-40.079c-1.234-8.323-5.922-13.711-14.227-15.286c-4.238-0.803-3.607-2.38-1.555-4.799
        c3.564-4.172,6.916-6.769,13.598-6.769h50.111c7.889,1.557,9.641,5.101,10.721,13.039l0.043,55.663
        c-0.086,3.073,1.535,12.192,7.07,14.226c4.43,1.448,7.35-2.096,10.008-4.905c11.998-12.734,20.561-27.783,28.211-43.366
        c3.395-6.852,6.314-13.968,9.143-21.078c2.096-5.276,5.385-7.872,11.328-7.757l48.229,0.043c1.43,0,2.877,0.021,4.262,0.258
        c8.127,1.385,10.354,4.881,7.844,12.817c-3.955,12.451-11.65,22.827-19.174,33.251c-8.043,11.129-16.645,21.877-24.621,33.072
        C252.26,161.544,252.842,166.697,261.945,175.576L261.945,175.576z M261.945,175.576" />
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
                  </a>
                </div>
                <div>
                  <h3>Likes</h3>
                  <span>523</span>
                </div>
              </div>
              <div class="icon-02 flex justify-start items-center gap-2 md:gap-4 p-2 shadow-md">
                <div class="p-3 bg-red-600 rounded-sm svg-02">
                  <a href="#">
                    <svg version="1.1" class="w-5 h-5" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="96.875px" height="96.875px"
                      viewBox="0 0 96.875 96.875" style="fill: #ffffff;" xml:space="preserve">
                      <g>
                        <path d="M95.201,25.538c-1.186-5.152-5.4-8.953-10.473-9.52c-12.013-1.341-24.172-1.348-36.275-1.341
  c-12.105-0.007-24.266,0-36.279,1.341c-5.07,0.567-9.281,4.368-10.467,9.52C0.019,32.875,0,40.884,0,48.438
  C0,55.992,0,64,1.688,71.336c1.184,5.151,5.396,8.952,10.469,9.52c12.012,1.342,24.172,1.349,36.277,1.342
  c12.107,0.007,24.264,0,36.275-1.342c5.07-0.567,9.285-4.368,10.471-9.52c1.689-7.337,1.695-15.345,1.695-22.898
  C96.875,40.884,96.889,32.875,95.201,25.538z M35.936,63.474c0-10.716,0-21.32,0-32.037c10.267,5.357,20.466,10.678,30.798,16.068
  C56.434,52.847,46.23,58.136,35.936,63.474z" />
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                    </svg>

                  </a>
                </div>
                <div>
                  <h3>Subscribers</h3>
                  <span>590M</span>
                </div>
              </div>
            </section>
        </section>
        <div class="flex justify-start items-center gap-2 py-6">
          <div class="w-[200px]">
            <h2 class="sub-title-02">Latest News</h2>
          </div>
          <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
            <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
          </div>
        </div>
        <section>
          <div class="flex justify-start items-center gap-4">
            <div class="w-[100px]">
              <div class="w-[100px] h-[100px] rounded-md">
                <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-md" /></a>
              </div>
            </div>

            <div class="text-post-02">
              <h2>Travel</h2>
              <p>
                <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
              </p>
              <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
            </div>
          </div>
        </section>
        <section>
          <div class="flex justify-start items-center gap-4">
            <div class="w-[100px]">
              <div class="w-[100px] h-[100px] rounded-md">
                <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-md" /></a>
              </div>
            </div>

            <div class="text-post-02">
              <h2>Travel</h2>
              <p>
                <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
              </p>
              <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
            </div>
          </div>
        </section>
        <section>
          <div class="flex justify-start items-center gap-4">
            <div class="w-[100px]">
              <div class="w-[100px] h-[100px] rounded-md">
                <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-md" /></a>
              </div>
            </div>

            <div class="text-post-02">
              <h2>Travel</h2>
              <p>
                <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
              </p>
              <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
            </div>
          </div>
        </section>
        <section>
          <div class="flex justify-start items-center gap-4">
            <div class="w-[100px]">
              <div class="w-[100px] h-[100px] rounded-md">
                <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-md" /></a>
              </div>
            </div>

            <div class="text-post-02">
              <h2>Travel</h2>
              <p>
                <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
              </p>
              <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
            </div>
          </div>
        </section>
        <section>
          <div class="flex justify-start items-center gap-2 py-6 ">
            <div class="w-[220px]">
              <h2 class="sub-title-02">Follow us</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <div class="grid grid-cols-2 gap-2 mt-3">
              <div class="main-img-02">
                <a href="#"><img src="../img/1.jpg" class="w-full h-full object-cover">
                  <div class="overlay-02">
                    <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                      viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                      <g>
                        <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                        <path
                          d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                        <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                  </div>
                </a>
              </div>
              <div class="main-img-02">
                <a href="#"><img src="../img/2.jpg" class="w-full h-full object-cover">
                  <div class="overlay-02">
                    <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                      viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                      <g>
                        <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                 c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                        <path
                          d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                        <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                 C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                  </div>
                </a>

              </div>
              <div class="main-img-02">
                <a href="#"><img src="../img/3.jpg" class="w-full h-full object-cover">
                  <div class="overlay-02">
                    <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                      viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                      <g>
                        <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                 c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                        <path
                          d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                        <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                 C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                  </div>
                </a>

              </div>
              <div class="main-img-02">
                <a href="#"><img src="../img/1.jpg" class="w-full h-full object-cover">
                  <div class="overlay-02">
                    <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                      viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                      <g>
                        <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                 c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                        <path
                          d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                        <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                 C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                  </div>
                </a>

              </div>
              <div class="main-img-02">
                <a href="#"><img src="../img/3.jpg" class="w-full h-full object-cover">
                  <div class="overlay-02">
                    <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                      viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                      <g>
                        <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                 c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                        <path
                          d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                        <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                 C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                  </div>
                </a>

              </div>
              <div class="main-img-02">
                <a href="#"><img src="../img/2.jpg" class="w-full h-full object-cover">
                  <div class="overlay-02">
                    <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                      viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                      <g>
                        <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                 c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                        <path
                          d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                        <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                 C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                  </div>
                </a>

              </div>
            </div>
          </section>
        </section>
        <div class="flex justify-start items-center gap-2 py-6">
          <div class="w-[200px]">
            <h2 class="sub-title-02">Comments</h2>
          </div>
          <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
            <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
          </div>
        </div>
        <section>
          <div class="flex justify-start items-center gap-4">
            <div class="w-[100px]">
              <div class="w-[100px] h-[100px] rounded-full">
                <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
              </div>
            </div>

            <div class="text-comment-02">
              <div class="flex flex-col justify-start items-start">
                <h2>Travel</h2>
                <span>14 January, 2022</span>
              </div>

              <p class="pt-2">
                Top 20 best thems plugn & on this year visit Expart
              </p>

            </div>
          </div>
        </section>
        <section>
          <div class="flex justify-start items-center gap-4 py-2">
            <div class="w-[100px]">
              <div class="w-[100px] h-[100px] rounded-full">
                <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
              </div>
            </div>

            <div class="text-comment-02">
              <div class="flex flex-col justify-start items-start">
                <h2>Travel</h2>
                <span>14 January, 2022</span>
              </div>

              <p class="pt-2">
                Top 20 best thems plugn & on this year visit Expart
              </p>

            </div>
          </div>
        </section>
        <section>
          <div class="flex justify-start items-center gap-4 pb-2">
            <div class="w-[100px]">
              <div class="w-[100px] h-[100px] rounded-full">
                <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
              </div>
            </div>

            <div class="text-comment-02">
              <div class="flex flex-col justify-start items-start">
                <h2>Travel</h2>
                <span>14 January, 2022</span>
              </div>

              <p class="pt-2">
                Top 20 best thems plugn & on this year visit Expart
              </p>

            </div>
          </div>
        </section>
        <section>
          <div class="flex justify-start items-center gap-4">
            <div class="w-[100px]">
              <div class="w-[100px] h-[100px] rounded-full">
                <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-full" /></a>
              </div>
            </div>

            <div class="text-comment-02">
              <div class="flex flex-col justify-start items-start">
                <h2>Travel</h2>
                <span>14 January, 2022</span>
              </div>

              <p class="pt-2">
                Top 20 best thems plugn & on this year visit Expart
              </p>

            </div>
          </div>
        </section>
        <div class="flex justify-start items-center gap-2 py-6">
          <div class="w-[100px]">
            <h2 class="sub-title-02">Tags</h2>
          </div>
          <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
            <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
          </div>
        </div>
        <section>
          <ul class="tag-02 flex justify-start items-start gap-2 flex-wrap">
            <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Education</a></li>
            <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">SEO Marketing</a></li>
            <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Business</a></li>
            <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Solutions</a></li>
            <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">UX</a></li>
            <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Case Study</a></li>
            <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Ceative</a></li>
            <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Insights</a></li>
          </ul>
        </section>
      </div>
      </section>
    </div>
  </div>',
                'js_handle' => '  <script>
    $(".slider").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
    });
    $(".slider-trend").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      responsive: [
        {
          breakpoint: 2550,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 1440,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
      ]
    });
  </script>',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'product',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'html' => ' <div class="sub-direct-02 py-10 px-2 md:px-8 xl:px-[120px]">
    <div class="flex justify-center items-center">
      <h2>
        Shop
      </h2>
    </div>
    <div class="flex justify-center items-center gap-2 ">
      <a href="#" class="active">Home</a>
      <span>.</span>
      <a href="#">Shop</a>
    </div>
  </div>
  <div class="content px-2 md:px-8 xl:px-[120px] mt-2">
    <div class="grid grid-cols-1 lg:grid-cols-12 xl:gap-6 ">
      <div class="col-span-12 lg:col-span-8 mt-5">
        <div class="flex justify-between items-center">
          <div>
            <h2 class="title-02">Sort by:</h2>
          </div>
          <div class="hidden lg:block">
            <select name="" id="" class="border-[1px] rounded-md outline-none p-3 w-[300px] ">
              <option value="1">Sort by:</option>
              <option value="1">Sort by:</option>
              <option value="1">Sort by:</option>
              <option value="1">Sort by:</option>
            </select>
          </div>
        </div>
        <div class="border-t-2 relative my-6 z-[-1]">
          <span class="w-2/5 border-t-[1px] under-02"></span>
        </div>
        <div class="lg:hidden w-full">
          <select name="" id="" class="outline-none border-[1px] w-full p-2 mb-6">
            <option value="1">Sort by:</option>
            <option value="1">Sort by:</option>
            <option value="1">Sort by:</option>
            <option value="1">Sort by:</option>
          </select>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <section>
            <div class="product-02 border-[1px] rounded-md shadow-lg">
              <div class="w-full h-[200px] md:h-[300px] lg:h-[250px] relative rounded-tr-md rounded-tl-md">
                <a href="/content2/product-single.html"><img src="../img/1.jpg"
                    class="w-full h-full object-cover rounded-tr-md rounded-tl-md" /></a>
                <div class="p-1 label-img-02 absolute top-0 right-0 font-semibold px-4 rounded-tr-md">
                  <a href="#">Sale -50%</a>
                </div>
              </div>
              <div class="flex flex-col px-4 py-2">
                <div>
                  <h3>
                    <a href="/content2/product-single.html">Awesome Merch Wallet</a>
                  </h3>
                </div>
                <div class="py-2">
                  <p class="line-clamp-2">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Sapiente repellat velit incidunt temporibus explicabo hic
                    ex dicta? Libero hic soluta provident alias cum nobis
                    totam officiis, nemo harum, rem temporibus!
                  </p>
                </div>
                <div class="flex justify-start items-center gap-2 pb-2">
                  <div class="rating-02">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div>
                    <span>20 review</span>
                  </div>
                </div>

                <div class="flex justify-between items-center py-2 border-t-[1px]">
                  <div class="flex justify-start items-center gap-2">
                    <p>Price:</p>
                    <h2>$239</h2>
                  </div>
                  <button class="button-cart-02 flex justify-start items-center gap-2 p-2 px-4 border-[1px] rounded-md">
                    Add to card
                  </button>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="product-02 border-[1px] rounded-md shadow-lg">
              <div class="w-full h-[200px] md:h-[300px] lg:h-[250px] relative rounded-tr-md rounded-tl-md">
                <a href="/content2/product-single.html"><img src="../img/3.jpg"
                    class="w-full h-full object-cover rounded-tr-md rounded-tl-md" /></a>
                <div class="p-1 label-img-02 absolute top-0 right-0 font-semibold px-4 rounded-tr-md">
                  <a href="#">Sale -30%</a>
                </div>
              </div>
              <div class="flex flex-col px-4 py-2">
                <div>
                  <h3>
                    <a href="/content2/product-single.html">Awesome Merch Wallet</a>
                  </h3>
                </div>
                <div class="py-2">
                  <p class="line-clamp-2">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Sapiente repellat velit incidunt temporibus explicabo hic
                    ex dicta? Libero hic soluta provident alias cum nobis
                    totam officiis, nemo harum, rem temporibus!
                  </p>
                </div>
                <div class="flex justify-start items-center gap-2 pb-2">
                  <div class="rating-02">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>

                  </div>
                  <div>
                    <span>20 review</span>
                  </div>
                </div>

                <div class="flex justify-between items-center py-2 border-t-[1px]">
                  <div class="flex justify-start items-center gap-2">
                    <p>Price:</p>
                    <h2>$239</h2>
                  </div>
                  <button class="button-cart-02 flex justify-start items-center gap-2 p-2 px-4 border-[1px] rounded-md">
                    Add to card
                  </button>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="product-02 border-[1px] rounded-md shadow-lg">
              <div class="w-full h-[200px] md:h-[300px] lg:h-[250px] relative rounded-tr-md rounded-tl-md">
                <a href="/content2/product-single.html"><img src="../img/2.jpg"
                    class="w-full h-full object-cover rounded-tr-md rounded-tl-md" /></a>
                <div class="p-1 label-img-02 absolute top-0 right-0 font-semibold px-4 rounded-tr-md">
                  <a href="#">Sale -20%</a>
                </div>
              </div>
              <div class="flex flex-col px-4 py-2">
                <div>
                  <h3>
                    <a href="/content2/product-single.html">Awesome Merch Wallet</a>
                  </h3>
                </div>
                <div class="py-2">
                  <p class="line-clamp-2">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Sapiente repellat velit incidunt temporibus explicabo hic
                    ex dicta? Libero hic soluta provident alias cum nobis
                    totam officiis, nemo harum, rem temporibus!
                  </p>
                </div>
                <div class="flex justify-start items-center gap-2 pb-2">
                  <div class="rating-02">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div>
                    <span>20 review</span>
                  </div>
                </div>

                <div class="flex justify-between items-center py-2 border-t-[1px]">
                  <div class="flex justify-start items-center gap-2">
                    <p>Price:</p>
                    <h2>$239</h2>
                  </div>
                  <button class="button-cart-02 flex justify-start items-center gap-2 p-2 px-4 border-[1px] rounded-md">
                    Add to card
                  </button>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="product-02 border-[1px] rounded-md shadow-lg">
              <div class="w-full h-[200px] md:h-[300px] lg:h-[250px] relative rounded-tr-md rounded-tl-md">
                <a href="/content2/product-single.html"><img src="../img/1.jpg"
                    class="w-full h-full object-cover rounded-tr-md rounded-tl-md" /></a>
                <!-- <div
                    class="p-1 label-img-02 absolute top-0 right-0 font-semibold px-4 rounded-tr-md"
                  >
                    <a href="#">Sale -50%</a>
                  </div> -->
              </div>
              <div class="flex flex-col px-4 py-2">
                <div>
                  <h3>
                    <a href="/content2/product-single.html">Awesome Merch Wallet</a>
                  </h3>
                </div>
                <div class="py-2">
                  <p class="line-clamp-2">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Sapiente repellat velit incidunt temporibus explicabo hic
                    ex dicta? Libero hic soluta provident alias cum nobis
                    totam officiis, nemo harum, rem temporibus!
                  </p>
                </div>
                <div class="flex justify-start items-center gap-2 pb-2">
                  <div class="rating-02">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div>
                    <span>20 review</span>
                  </div>
                </div>

                <div class="flex justify-between items-center py-2 border-t-[1px]">
                  <div class="flex justify-start items-center gap-2">
                    <p>Price:</p>
                    <h2>$239</h2>
                  </div>
                  <button class="button-cart-02 flex justify-start items-center gap-2 p-2 px-4 border-[1px] rounded-md">
                    Add to card
                  </button>
                </div>
              </div>
            </div>
          </section>

        </div>

        <section>
          <div class="pagination-02 my-6">
            <div class="flex justify-start items-center gap-4">
              <ul class="flex justify-start items-start gap-2">
                <li class="p-1 px-3 border-2 rounded-md"><a href="#">1</a></li>
                <li class="p-1 px-3 border-2 rounded-md"><a href="#">2</a></li>
                <li class="p-1 px-3 border-2 rounded-md"><a href="#">3</a></li>
              </ul>
              <button class="px-3 py-1 border-2 rounded-md">Next</button>
            </div>
          </div>
        </section>
      </div>
      <div class="col-span-12 lg:col-span-4">
        <div class="search-02 py-6 w-full relative">
          <input type="text" placeholder="Search..." class="border-[1px] rounded-md outline-none p-3 w-full ">
          <svg version="1.1" class="absolute right-[15px] top-[30px] cursor-pointer w-8 h-8" id="Layer_1"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 502.173 502.173" style="enable-background:new 0 0 502.173 502.173;" xml:space="preserve">
            <g>
              <g>
                <g>
                  <path d="M494.336,443.646L316.402,265.713c20.399-31.421,30.023-68.955,27.189-106.632
				C340.507,118.096,322.783,79.5,293.684,50.4C261.167,17.884,217.984,0,172.023,0c-0.222,0-0.445,0.001-0.668,0.001
				C125.149,0.176,81.837,18.409,49.398,51.342c-66.308,67.316-65.691,176.257,1.375,242.85
				c29.112,28.907,67.655,46.482,108.528,49.489c37.579,2.762,75.008-6.867,106.343-27.21l177.933,177.932
				c5.18,5.18,11.984,7.77,18.788,7.77s13.608-2.59,18.789-7.769l13.182-13.182C504.695,470.862,504.695,454.006,494.336,443.646z
				 M480.193,467.079l-13.182,13.182c-2.563,2.563-6.73,2.561-9.292,0L273.914,296.456c-1.936-1.937-4.497-2.929-7.074-2.929
				c-2.044,0-4.098,0.624-5.858,1.898c-60.538,43.788-143.018,37.3-196.118-15.425C5.592,221.146,5.046,124.867,63.646,65.377
				c28.67-29.107,66.949-45.222,107.784-45.376c0.199,0,0.392-0.001,0.591-0.001c40.617,0,78.785,15.807,107.52,44.542
				c53.108,53.108,59.759,135.751,15.814,196.509c-2.878,3.979-2.441,9.459,1.032,12.932l183.806,183.805
				C482.755,460.35,482.755,464.517,480.193,467.079z" />
                  <path d="M259.633,84.449c-48.317-48.316-126.935-48.316-175.253,0c-23.406,23.406-36.296,54.526-36.296,87.627
				c0,33.102,12.89,64.221,36.296,87.627S138.906,296,172.007,296c33.102,0,64.222-12.891,87.627-36.297
				C307.951,211.386,307.951,132.767,259.633,84.449z M245.492,245.561C225.863,265.189,199.766,276,172.007,276
				c-27.758,0-53.856-10.811-73.484-30.44c-19.628-19.628-30.438-45.726-30.438-73.484s10.809-53.855,30.438-73.484
				c20.262-20.263,46.868-30.39,73.484-30.39c26.61,0,53.227,10.133,73.484,30.39C286.011,139.112,286.011,205.042,245.492,245.561z
				" />
                  <path d="M111.017,153.935c1.569-5.296-1.452-10.861-6.747-12.43c-5.294-1.569-10.86,1.451-12.429,6.746
				c-8.73,29.459-0.668,61.244,21.04,82.952c1.952,1.952,4.512,2.929,7.071,2.929s5.118-0.977,7.071-2.928
				c3.905-3.906,3.905-10.238,0-14.143C110.506,200.544,104.372,176.355,111.017,153.935z" />
                  <path d="M141.469,94.214c-10.748,4.211-20.367,10.514-28.588,18.735c-3.905,3.906-3.905,10.238,0,14.143
				c1.952,1.952,4.512,2.929,7.071,2.929s5.118-0.977,7.07-2.929c6.26-6.26,13.575-11.057,21.741-14.255
				c5.143-2.015,7.678-7.816,5.664-12.959C152.413,94.735,146.611,92.202,141.469,94.214z" />
                </g>
              </g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
          </svg>
        </div>

        <div class="flex justify-start items-center gap-2">
          <div class="w-[250px]">
            <h2 class="sub-title-02">New Products</h2>
          </div>
          <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
            <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
          </div>
        </div>
        <section>
          <div class="flex justify-start items-center gap-4">
            <div class="w-[100px]">
              <div class="w-[100px] h-[100px] rounded-md">
                <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-md" /></a>
              </div>
            </div>

            <div class="text-post-02">
              <h2>Travel</h2>
              <p>
                <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
              </p>
              <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
            </div>
          </div>
        </section>
        <section>
          <div class="flex justify-start items-center gap-4">
            <div class="w-[100px]">
              <div class="w-[100px] h-[100px] rounded-md">
                <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-md" /></a>
              </div>
            </div>

            <div class="text-post-02">
              <h2>Travel</h2>
              <p>
                <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
              </p>
              <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
            </div>
          </div>
        </section>
        <section>
          <div class="flex justify-start items-center gap-4">
            <div class="w-[100px]">
              <div class="w-[100px] h-[100px] rounded-md">
                <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-md" /></a>
              </div>
            </div>

            <div class="text-post-02">
              <h2>Travel</h2>
              <p>
                <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
              </p>
              <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
            </div>
          </div>
        </section>
        <section>
          <div class="flex justify-start items-center gap-4">
            <div class="w-[100px]">
              <div class="w-[100px] h-[100px] rounded-md">
                <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-full object-cover rounded-md" /></a>
              </div>
            </div>

            <div class="text-post-02">
              <h2>Travel</h2>
              <p>
                <a href="#">Top 20 best thems plugn & on this year visit Expart</a>
              </p>
              <span><a href="#" class="transition-all duration-500">by Jone Deo</a></span>
            </div>
          </div>
        </section>
        <section>
          <div class="flex justify-start items-center gap-2 py-6 ">
            <div class="w-[220px]">
              <h2 class="sub-title-02">Follow us</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <div class="grid grid-cols-2 gap-2 mt-3">
              <div class="main-img-02">
                <a href="#"><img src="../img/1.jpg" class="w-full h-full object-cover">
                  <div class="overlay-02">
                    <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                      viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                      <g>
                        <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                             c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                             c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                             c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                        <path
                          d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                             C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                             c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                        <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                             c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                             C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                  </div>
                </a>
              </div>
              <div class="main-img-02">
                <a href="#"><img src="../img/2.jpg" class="w-full h-full object-cover">
                  <div class="overlay-02">
                    <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                      viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                      <g>
                        <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                        <path
                          d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                        <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                  </div>
                </a>

              </div>
              <div class="main-img-02">
                <a href="#"><img src="../img/3.jpg" class="w-full h-full object-cover">
                  <div class="overlay-02">
                    <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                      viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                      <g>
                        <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                        <path
                          d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                        <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                  </div>
                </a>

              </div>
              <div class="main-img-02">
                <a href="#"><img src="../img/1.jpg" class="w-full h-full object-cover">
                  <div class="overlay-02">
                    <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                      viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                      <g>
                        <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                        <path
                          d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                        <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                  </div>
                </a>

              </div>
              <div class="main-img-02">
                <a href="#"><img src="../img/3.jpg" class="w-full h-full object-cover">
                  <div class="overlay-02">
                    <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                      viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                      <g>
                        <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                        <path
                          d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                        <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                  </div>
                </a>

              </div>
              <div class="main-img-02">
                <a href="#"><img src="../img/2.jpg" class="w-full h-full object-cover">
                  <div class="overlay-02">
                    <svg version="1.1" class="w-8 h-8" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px"
                      viewBox="0 0 169.063 169.063" style="fill: #ffffff" xml:space="preserve">
                      <g>
                        <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                        <path
                          d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                        <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z" />
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
                  </div>
                </a>
              </div>
            </div>
          </section>
        </section>

        <div class="my-6">
          <div class="flex justify-start items-center gap-2  pb-6">
            <div class="w-[100px]">
              <h2 class="sub-title-02">Tags</h2>
            </div>
            <div class="hidden lg:block border-t-[1px] border-black opacity-20 relative my-6 w-[400px]">
              <span class="w-2/5 border-t-[1px] border-black unde-02"></span>
            </div>
          </div>
          <section>
            <ul class="tag-02 flex justify-start items-start gap-2 flex-wrap">
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Education</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">SEO Marketing</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Business</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Solutions</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">UX</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Case Study</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Ceative</a></li>
              <li class="py-1 px-3 border-[1px] rounded-md"><a href="#">Insights</a></li>
            </ul>
          </section>
        </div>

      </div>
    </div>

  </div>',
                'js_handle' => '',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'header',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'js_handle' => '<script>
      window.onscroll = function () {
        myFunction();
      };

      var header = document.querySelector("#myHeader");
      var sticky = header.offsetTop;

      function myFunction() {
        let topBtn = document.querySelector("#top-btn");
        if (window.pageYOffset > 200) {
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
    </script>',
                'html' => '<button
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
    <header class="py-2" id="myHeader">
      <div class="flex justify-between items-center px-2 md:px-8 xl:px-[88px]">
        <div class="w-[34px] h-[34px]">
          <a href="/"
            ><img
              src="../img/1.jpg"
              alt="logo"
              class="w-[34px] h-[34px] object-cover"
          /></a>
        </div>
        <nav>
          <div class="deactive lg:hidden" id="menu-mobile">
            <ul class="absolute top-[50px] right-0 h01-menu">
              <li class="has-sub active">
                <span class="arrow"></span> <a href="./home.php" class="">Trang chủ</a>
              </li>
              <li class="has-sub">
                <span class="arrow"></span>
                <a href="./about.php" class="">Giới thiệu</a>
              </li>
              <li class="has-sub">
                <span class="arrow"></span>
                <a href="./post.php" class=""> Bài viết</a>
              </li>
              <li class="has-sub">
                <span class="arrow"></span>
                <a href="./shop.php"> Sản phẩm</a>
              </li>
              <li class="has-sub">
                <span class="arrow"></span>
                <a href="./policy.php" class="">Điều khoản chính sách</a>
              </li>
            </ul>
          </div>

          <div class="hidden lg:block">
            <ul class="flex items-center gap-4 subMenu-01 relative">
              <li class="has-sub active flex items-center gap-2">
                <a href="./home.php" class="subMenu">Trang chủ</a>
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
                <a href="./about.php" class="subMenu">Giới thiệu</a>
              </li>
              <li class="has-sub relative flex items-center gap-2">
                <a href="./post.php" class="subMenu"
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
                    <li><a href="./author.php">Tác giả</a></li>
                    <li><a href="./about.php">Về chúng tôi</a></li>
                  </ul>
                </div>
              </li>
              <li class="has-sub relative flex items-center gap-2">
                <a href="./shop.php" class="subMenu"
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
                    <li><a href="./product_single.php">Chi tiết sản phẩm</a></li>
                    <li><a href="#">Giỏ hàng</a></li>
                  </ul>
                </div>
              </li>
              <li class="has-sub">
                <span class="arrow"></span>
                <a href="./policy.php" class="subMenu">Điều khoản chính sách</a>
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
    </header>',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'footer',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'js_handle' => '',
                'html' => '<footer>
    <div class="f01-sub-bg py-5 px-2 md:px-8 xl:px-[88px] mt-10">
        <div class="flex flex-col lg:flex-row justify-start items-start lg:gap-4">
            <div class="py-5">
                <div class="w-[34px] h-[34px]">
                    <img src="../img/1.jpg" class="object-cover w-full h-full" />
                </div>
                <p class="py-5 f01-content">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit illo nam facilis iusto dignissimos? Nostrum quaerat dolore atque corporis in quidem? Nobis dolores quo nam hic maxime quia, delectus aperiam.
                </p>
                <ul class="flex gap-2">
                    <li class="p-2 subTitle-01 rounded-sm">
                        <a href="#">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style="fill: #ffffff;">
                                <path
                                    d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z"
                                ></path>
                            </svg>
                        </a>
                    </li>
                    <li class="p-2 subTitle-01 rounded-sm">
                        <a href="#">
                            <svg
                                version="1.1"
                                class="w-4 h-4"
                                id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px"
                                y="0px"
                                viewBox="0 0 511.999 511.999"
                                style="fill: #ffffff;"
                                xml:space="preserve"
                            >
                                <g>
                                    <g>
                                        <path
                                            d="M507.77,96.789c-3.92-4.669-9.903-6.958-15.769-6.358c2.345-4.855,4.354-9.891,6.016-15.091
			c2.279-7.127-0.123-15.046-5.97-19.699c-5.849-4.662-14.103-5.232-20.545-1.416c-14.758,8.753-30.599,15.287-47.157,19.455
			c-21.035-18.575-48.714-29.128-76.82-29.128c-63.816,0-115.735,51.917-115.735,115.731c0,0.714,0.006,1.428,0.019,2.142
			c-64.801-8.793-124.951-42.372-166.494-93.332c-3.765-4.618-9.554-7.099-15.467-6.617C43.922,62.94,38.597,66.283,35.6,71.42
			c-10.258,17.603-15.68,37.727-15.68,58.199c0,18.054,4.218,35.74,12.145,51.67c-1.32,0.393-2.602,0.936-3.818,1.634
			c-5.477,3.138-8.967,9.007-9.111,15.299c-0.013,0.551-0.014,1.102-0.014,1.659c0,32.878,14.268,64.167,38.287,85.933
			c-3.841,4.722-5.072,11.157-3.206,16.976c9.946,31.053,32.666,56.265,61.702,69.726C92.746,383.153,67.381,388.7,41.425,388.7
			c-7.086,0-14.204-0.416-21.147-1.238c-8.439-1.004-16.336,3.885-19.202,11.89c-2.863,8,0.132,16.789,7.282,21.373
			c47.672,30.566,102.793,46.722,159.404,46.722c111.254,0,180.924-52.547,219.777-96.631
			c48.338-54.836,76.06-127.446,76.06-199.211c0-1.265-0.008-2.537-0.024-3.811c17.576-13.928,32.828-30.48,45.386-49.265
			C513.42,111.86,512.927,102.917,507.77,96.789z M447.131,154.728c-2.645,1.993-4.158,5.147-4.057,8.456
			c0.086,2.799,0.129,5.633,0.129,8.425c0,66.867-25.866,134.561-70.965,185.723c-36.075,40.928-100.834,89.716-204.475,89.716
			c-49.475,0-97.73-13.257-140.171-38.423c4.596,0.316,9.222,0.475,13.837,0.475c37.456,0,73.838-10.387,105.213-30.038
			c3.502-2.195,5.335-6.287,4.64-10.361c-0.697-4.075-3.783-7.326-7.816-8.234c-31.581-7.104-57.553-30.05-68.608-60.322
			c1.701,0.258,3.412,0.473,5.115,0.644c4.75,0.466,9.202-2.416,10.699-6.954c1.497-4.539-0.358-9.508-4.462-11.956
			c-28.06-16.734-45.763-46.996-46.651-79.439c3.985,2.013,8.121,3.766,12.341,5.228c4.347,1.505,9.163-0.084,11.758-3.882
			c2.597-3.797,2.33-8.861-0.651-12.365c-14.629-17.197-22.685-39.144-22.685-61.799c0-15.768,3.9-31.279,11.306-45.069
			c47.495,56.842,116.675,93.062,190.337,99.529c3.076,0.267,6.105-0.866,8.244-3.091s3.155-5.3,2.764-8.36
			c-0.519-4.065-0.782-8.219-0.782-12.344c0-52.566,42.768-95.332,95.336-95.332c24.725,0,49.052,9.914,66.741,27.198
			c2.46,2.403,5.965,3.408,9.323,2.665c18.548-4.087,36.34-10.801,52.975-19.987c-4.049,10.366-9.853,19.856-17.303,28.281
			c-3.006,3.399-3.405,8.376-0.978,12.211c2.426,3.835,7.097,5.607,11.453,4.344c6.018-1.74,11.985-3.781,17.819-6.092
			C476.151,129.269,462.58,143.088,447.131,154.728z"
                                        />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M89.95,145.834c-2.153-1.605-4.298-3.258-6.377-4.91c-4.409-3.506-10.826-2.774-14.331,1.636
			c-3.505,4.409-2.773,10.825,1.636,14.331c2.241,1.782,4.554,3.564,6.874,5.294c1.832,1.366,3.97,2.025,6.091,2.025
			c3.11,0,6.182-1.418,8.183-4.102C95.394,155.592,94.465,149.203,89.95,145.834z"
                                        />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M222.328,196.399c-36.715-3.223-73.142-14.6-105.344-32.9c-4.898-2.783-11.123-1.07-13.907,3.828
			c-2.783,4.898-1.07,11.123,3.828,13.907c34.73,19.738,74.026,32.009,113.639,35.487c0.304,0.026,0.605,0.04,0.904,0.04
			c5.229,0,9.682-4,10.148-9.309C232.088,201.84,227.939,196.892,222.328,196.399z"
                                        />
                                    </g>
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
                        </a>
                    </li>
                    <li class="p-2 subTitle-01 rounded-sm">
                        <a href="#">
                            <svg
                                version="1.1"
                                class="w-4 h-4"
                                id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px"
                                y="0px"
                                width="169.063px"
                                height="169.063px"
                                viewBox="0 0 169.063 169.063"
                                style="fill: #ffffff;"
                                xml:space="preserve"
                            >
                                <g>
                                    <path
                                        d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                               c17.455,0,31.656,14.201,31.656,31.655V122.407z"
                                    />
                                    <path
                                        d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"
                                    />
                                    <path
                                        d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                               C135.661,29.421,132.821,28.251,129.921,28.251z"
                                    />
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
                        </a>
                    </li>
                    <li class="p-2 subTitle-01 rounded-sm">
                        <a href="#">
                            <svg
                                version="1.1"
                                class="w-4 h-4"
                                id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px"
                                y="0px"
                                viewBox="0 0 304.36 304.36"
                                style="fill: #ffffff;"
                                xml:space="preserve"
                            >
                                <g id="XMLID_1_">
                                    <path
                                        id="XMLID_807_"
                                        style="fill-rule: evenodd; clip-rule: evenodd;"
                                        d="M261.945,175.576c10.096,9.857,20.752,19.131,29.807,29.982
		c4,4.822,7.787,9.798,10.684,15.394c4.105,7.955,0.387,16.709-6.746,17.184l-44.34-0.02c-11.436,0.949-20.559-3.655-28.23-11.474
		c-6.139-6.253-11.824-12.908-17.727-19.372c-2.42-2.642-4.953-5.128-7.979-7.093c-6.053-3.929-11.307-2.726-14.766,3.587
		c-3.523,6.421-4.322,13.531-4.668,20.687c-0.475,10.441-3.631,13.186-14.119,13.664c-22.414,1.057-43.686-2.334-63.447-13.641
		c-17.422-9.968-30.932-24.04-42.691-39.971C34.828,153.482,17.295,119.395,1.537,84.353C-2.01,76.458,0.584,72.22,9.295,72.07
		c14.465-0.281,28.928-0.261,43.41-0.02c5.879,0.086,9.771,3.458,12.041,9.012c7.826,19.243,17.402,37.551,29.422,54.521
		c3.201,4.518,6.465,9.036,11.113,12.216c5.142,3.521,9.057,2.354,11.476-3.374c1.535-3.632,2.207-7.544,2.553-11.434
		c1.146-13.383,1.297-26.743-0.713-40.079c-1.234-8.323-5.922-13.711-14.227-15.286c-4.238-0.803-3.607-2.38-1.555-4.799
		c3.564-4.172,6.916-6.769,13.598-6.769h50.111c7.889,1.557,9.641,5.101,10.721,13.039l0.043,55.663
		c-0.086,3.073,1.535,12.192,7.07,14.226c4.43,1.448,7.35-2.096,10.008-4.905c11.998-12.734,20.561-27.783,28.211-43.366
		c3.395-6.852,6.314-13.968,9.143-21.078c2.096-5.276,5.385-7.872,11.328-7.757l48.229,0.043c1.43,0,2.877,0.021,4.262,0.258
		c8.127,1.385,10.354,4.881,7.844,12.817c-3.955,12.451-11.65,22.827-19.174,33.251c-8.043,11.129-16.645,21.877-24.621,33.072
		C252.26,161.544,252.842,166.697,261.945,175.576L261.945,175.576z M261.945,175.576"
                                    />
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
                        </a>
                    </li>
                    <li class="p-2 subTitle-01 rounded-sm">
                        <a href="#">
                            <svg
                                version="1.1"
                                class="w-4 h-4"
                                id="Layer_1"
                                xmlns="http://www.w3.org/2000/svgCapa_1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px"
                                y="0px"
                                viewBox="0 0 50.141 50.141"
                                style="fill: #ffffff;"
                                xml:space="preserve"
                            >
                                <g>
                                    <path
                                        d="M44.092,12.485c-0.76-2.567-1.98-4.728-3.732-6.606c-1.713-1.837-3.684-3.23-6.026-4.259
		c-2.668-1.169-5.761-1.737-8.716-1.6c-1.078,0.049-2.131,0.106-3.163,0.255c-2.908,0.416-5.469,1.283-7.828,2.65
		C11.616,4.673,9.265,7.049,7.64,9.989c-0.844,1.53-1.675,4.228-2.028,5.99c-0.418,2.078-0.05,5.681,0.789,7.713
		c1.048,2.533,1.91,3.656,4.013,5.223c0.013,0.009,1.313,0.945,2.179,0.931c1.577-0.03,1.891-1.539,2.041-2.264
		c0.028-0.137,0.056-0.272,0.089-0.399c0.029-0.112,0.067-0.232,0.106-0.357c0.223-0.72,0.526-1.706,0.023-2.58
		c-0.189-0.328-0.413-0.583-0.61-0.807c-0.107-0.122-0.215-0.24-0.302-0.37c-0.748-1.111-1.127-2.501-1.127-4.131
		c0-2.139,0.484-4.077,1.481-5.923c1.808-3.349,4.808-5.462,8.677-6.114c2.202-0.369,4.768-0.214,6.693,0.402
		c1.759,0.564,3.256,1.561,4.33,2.886c1.137,1.402,1.787,3.18,1.931,5.286c0.094,1.344-0.028,2.698-0.129,3.597
		c-0.389,3.461-1.396,6.247-2.994,8.282c-1.309,1.67-2.72,2.507-4.315,2.561c-1.027,0.04-1.795-0.17-2.489-0.667
		c-0.655-0.467-1.045-1.043-1.229-1.81c-0.208-0.876,0.043-1.784,0.31-2.746l0.043-0.154c0.233-0.846,0.477-1.619,0.716-2.38
		c0.376-1.199,0.766-2.438,1.087-3.876c0.363-1.623,0.411-2.934,0.148-4.005c-0.324-1.33-1.039-2.326-2.125-2.962
		c-1.149-0.67-2.777-0.799-4.144-0.329c-2.037,0.695-3.591,2.545-4.264,5.075c-0.341,1.285-0.44,2.634-0.293,4.006
		c0.113,1.076,0.354,2.054,0.799,3.235c-0.015,0.051-0.031,0.105-0.047,0.157c-0.032,0.105-0.061,0.207-0.083,0.294
		c-0.479,2-0.945,3.972-1.41,5.94c-0.441,1.869-0.883,3.735-1.334,5.62l-0.102,0.422c-0.462,1.92-0.938,3.906-1.049,6.277
		l-0.05,0.99c-0.098,1.842-0.197,3.747,0.05,5.509c0.049,0.344,0.157,1.115,0.916,1.384c0.227,0.17,0.445,0.242,0.657,0.242
		c0.635,0,1.2-0.645,1.681-1.192c1.569-1.784,2.903-4.037,4.079-6.885c0.526-1.274,0.875-2.645,1.212-3.971l0.203-0.79
		c0.246-0.944,0.487-1.901,0.726-2.848l0.016-0.063c0.443,0.388,0.955,0.738,1.548,1.063c1.255,0.695,2.671,1.1,4.207,1.203
		c1.44,0.098,2.956-0.087,4.629-0.567c1.271-0.362,2.487-0.913,3.617-1.636c4.054-2.596,6.817-7.137,7.781-12.786
		c0.289-1.688,0.412-3.045,0.412-4.537C44.703,15.41,44.498,13.846,44.092,12.485z M42.32,21.332
		c-0.869,5.088-3.315,9.15-6.889,11.438c-0.966,0.619-2.005,1.088-3.09,1.398c-1.446,0.416-2.738,0.577-3.942,0.495
		c-1.261-0.085-2.364-0.398-3.379-0.96c-1.015-0.555-1.673-1.158-2.135-1.955l-1.226-2.118l-1.105,4.337
		c-0.237,0.941-0.477,1.893-0.722,2.832l-0.205,0.802c-0.335,1.315-0.65,2.558-1.123,3.7c-1.053,2.552-2.229,4.571-3.589,6.163
		c-0.106-1.355-0.026-2.875,0.052-4.352l0.051-1.002c0.101-2.182,0.556-4.073,0.995-5.902l0.103-0.425
		c0.451-1.886,0.893-3.755,1.335-5.625c0.465-1.967,0.93-3.937,1.408-5.932c0.014-0.056,0.034-0.122,0.055-0.191
		c0.12-0.403,0.245-0.82,0.076-1.243c-0.429-1.099-0.655-1.976-0.756-2.932c-0.12-1.13-0.041-2.234,0.238-3.282
		c0.498-1.873,1.583-3.22,2.979-3.696c0.346-0.119,0.708-0.169,1.056-0.169c0.567,0,1.093,0.136,1.431,0.333
		c0.607,0.356,0.997,0.914,1.19,1.71c0.185,0.756,0.133,1.797-0.156,3.094c-0.304,1.355-0.663,2.5-1.044,3.713
		c-0.246,0.782-0.495,1.576-0.735,2.446l-0.042,0.152c-0.308,1.109-0.656,2.366-0.328,3.744c0.298,1.248,0.956,2.22,2.011,2.974
		c1.048,0.749,2.278,1.084,3.72,1.039c2.191-0.074,4.149-1.193,5.821-3.325c1.831-2.332,2.978-5.458,3.409-9.295
		c0.108-0.978,0.241-2.452,0.137-3.957c-0.174-2.524-0.972-4.68-2.373-6.408c-1.319-1.627-3.143-2.848-5.273-3.531
		c-2.211-0.709-5.137-0.891-7.635-0.471c-4.5,0.758-7.994,3.225-10.106,7.136c-1.158,2.146-1.721,4.394-1.721,6.873
		c0,2.036,0.493,3.801,1.467,5.247c0.134,0.2,0.294,0.386,0.46,0.574c0.149,0.17,0.29,0.33,0.376,0.479
		c0.061,0.163-0.113,0.727-0.197,0.998c-0.047,0.153-0.092,0.3-0.128,0.437c-0.042,0.16-0.078,0.331-0.114,0.503
		c-0.039,0.188-0.099,0.479-0.162,0.639c-0.237-0.093-0.67-0.331-0.904-0.504c-1.797-1.338-2.456-2.199-3.358-4.382
		c-0.677-1.641-1.013-4.888-0.677-6.556c0.375-1.869,1.174-4.248,1.818-5.417c1.447-2.619,3.546-4.739,6.239-6.301
		c2.133-1.236,4.457-2.022,7.109-2.401c0.943-0.137,1.943-0.19,2.971-0.237c2.65-0.125,5.429,0.385,7.819,1.433
		c2.088,0.917,3.844,2.157,5.367,3.792c1.536,1.646,2.607,3.546,3.277,5.81c0.351,1.177,0.528,2.55,0.528,4.078
		C42.703,18.505,42.588,19.761,42.32,21.332z"
                                    />
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
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col justify-start items-start gap-2 w-full">
                <h2 class="py-5 border-b-[1px] w-full f01-title">Categories</h2>

                <ul class="py-2 f01-content">
                    <li>
                        <a href="#">Politics</a>
                    </li>
                    <li>
                        <a href="#">Politics</a>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col justify-start items-start gap-2 w-full">
                <h2 class="py-5 border-b-[1px] w-full f01-title">Links</h2>

                <ul class="py-2 f01-content">
                    <li>
                        <a href="#">Politics</a>
                    </li>
                    <li>
                        <a href="#">Politics</a>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col justify-start items-start gap-2 w-full pb-5">
                <h2 class="py-5 border-b-[1px] w-full f01-title">Subscribe</h2>
                <p class="py-4 f01-content">
                    Want to be notified when we launch a new template or an udpate. Just sign up and we will send you a notification by email.
                </p>
                <div class="flex justify-between items-center w-full gap-2">
                    <input type="email" placeholder="Your email" class="w-full p-3 rounded-sm border-[1px] bg-transparent text-white outline-none" />
                    <button class="p-3 px-6 f01-button rounded-sm md:px-20 lg:px-6">send
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="f01-bg py-5 px-2 md:px-8 xl:px-[88px]">
        <div class="flex justify-between items-center flex-wrap gap-5">
            <p><strong>© Gmag 2022</strong> . All rights reserved.</p>
            <div class="flex justify-center items-center gap-4 f01-policy">
                <a href="#"> Terms & Conditions </a>
                <a href="#"> Privacy Policy </a>
            </div>
        </div>
    </div>
</footer>
    ',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'home',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'js_handle' => '<script>
    $(".slider").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
    });

    function handleActive(id) {
      var item1 = document.querySelector("#one");
      var item2 = document.querySelector("#two");
      var item3 = document.querySelector("#three");
      var item4 = document.querySelector("#four");
      if (!item1.classList.contains("active-01") && id == 1) {
        item1.classList.add("active-01");
      } else {
        item1.classList.remove("active-01");
      }
      if (!item2.classList.contains("active-01") && id == 2) {
        item2.classList.add("active-01");
      } else {
        item2.classList.remove("active-01");
      }
      if (!item3.classList.contains("active-01") && id == 3) {
        item3.classList.add("active-01");
      } else {
        item3.classList.remove("active-01");
      }
      if (!item4.classList.contains("active-01") && id == 4) {
        item4.classList.add("active-01");
      } else {
        item4.classList.remove("active-01");
      }
    }
    function handleActiveMobile(id) {
      var item1 = document.querySelector("#one1");
      var item2 = document.querySelector("#two1");
      var item3 = document.querySelector("#three1");
      var item4 = document.querySelector("#four1");
      if (!item1.classList.contains("active-01") && id == 1) {
        item1.classList.add("active-01");
      } else {
        item1.classList.remove("active-01");
      }
      if (!item2.classList.contains("active-01") && id == 2) {
        item2.classList.add("active-01");
      } else {
        item2.classList.remove("active-01");
      }
      if (!item3.classList.contains("active-01") && id == 3) {
        item3.classList.add("active-01");
      } else {
        item3.classList.remove("active-01");
      }
      if (!item4.classList.contains("active-01") && id == 4) {
        item4.classList.add("active-01");
      } else {
        item4.classList.remove("active-01");
      }
    }
    function sideChange() {
      var popular = document.querySelector("#popular");
      var newPost = document.querySelector("#new");
      if (popular.classList.contains("active-01")) {
        popular.classList.remove("active-01");
        newPost.classList.add("active-01");
      } else {
        popular.classList.add("active-01");
        newPost.classList.remove("active-01");
      }
    }
  </script>',
                'html' => '<div class="slider h-[200px] md:h-[350px] xl:h-[500px]">
    <section>
      <div class=" h-[200px] md:h-[350px] xl:h-[500px]">
        <img src="../img/1.jpg" class="w-full h-full object-cover" />
      </div>
    </section>
    <section>
      <div class=" h-[200px] md:h-[350px] xl:h-[500px]">
        <img src="../img/1.jpg" class="w-full h-full object-cover" />
      </div>
    </section>
    <section>
      <div class=" h-[200px] md:h-[350px] xl:h-[500px]">
        <img src="../img/1.jpg" class="w-full h-full object-cover" />
      </div>
    </section>
    <section>
      <div class=" h-[200px] md:h-[350px] xl:h-[500px]">
        <img src="../img/1.jpg" class="w-full h-full object-cover" />
      </div>
    </section>

  </div>
  <div class="content px-2 md:px-8 xl:px-[88px] mt-2">
    <div class="grid grid-cols-1 xl:grid-cols-12 xl:gap-6">
      <div class="col-span-8">
        <div class="flex justify-between items-center">
          <div>
            <h2 class="title-01">Lastest World News</h2>
            <h4 class="title-sub-01">Dont miss daily news</h4>
          </div>
          <div class="hidden lg:block">
            <ul class="flex justify-start items-center border-[1px] rounded-md my-6">
              <li class="active-01 border-[1px] p-2 font-semibold" id="one">
                <a href="#" onclick="handleActive(1)"> World </a>
              </li>
              <li class="border-[1px] p-2 font-semibold" id="two">
                <a href="#" onclick="handleActive(2)"> Technology </a>
              </li>
              <li class="border-[1px] p-2 font-semibold" id="three">
                <a href="#" onclick="handleActive(3)"> Business </a>
              </li>
              <li class="border-[1px] p-2 font-semibold" id="four">
                <a href="#" onclick="handleActive(4)"> Sports </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="border-t-2 relative my-6 z-[-1]">
          <span class="w-2/5 border-t-[1px] unde-01"></span>
        </div>
        <div class="lg:hidden">
          <ul class="flex justify-start items-center border-[1px] rounded-md my-6">
            <li class="active-01 border-[1px] p-2 font-semibold" id="one1">
              <a href="#" onclick="handleActiveMobile(1)"> World </a>
            </li>
            <li class="border-[1px] p-2 font-semibold" id="two1">
              <a href="#" onclick="handleActiveMobile(2)"> Technology </a>
            </li>
            <li class="border-[1px] p-2 font-semibold" id="three1">
              <a href="#" onclick="handleActiveMobile(3)"> Business </a>
            </li>
            <li class="border-[1px] p-2 font-semibold" id="four1">
              <a href="#" onclick="handleActiveMobile(4)"> Sports </a>
            </li>
          </ul>
        </div>
        <section>
          <div class="flex flex-col md:flex-row justify-start gap-6">
            <div class="w-full h-[190px]">
              <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-[190px] object-cover rounded-md" /></a>
            </div>
            <div>
              <div class="flex justify-between items-center">
                <div class="p-1 subTitle-01 rounded-md font-semibold px-4">
                  <a href="#">Science</a>
                </div>
                <div class="w-[20px] h-[20px] border-t-[1px] border-r-[1px]"></div>
              </div>
              <div class="flex flex-col justify-start items-start mt-4">
                <h3 class="title-post-01">
                  Goodwin must Break Clackson hold on Flags
                </h3>
                <span class="flex justify-start items-center gap-2">
                  <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                    viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                    <g>
                      <g>
                        <path
                          d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                          c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                        <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                          c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                      </g>
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
                  <span class="day-01">18 MAY 2022</span>
                </span>
              </div>
              <div class="my-2">
                <p class="line-clamp-2 content-01">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Sapiente repellat velit incidunt temporibus explicabo hic ex
                  dicta? Libero hic soluta provident alias cum nobis totam
                  officiis, nemo harum, rem temporibus!
                </p>
              </div>
              <div class="flex justify-between items-center">
                <div class="flex justify-start items-center gap-2">
                  <div class="w-[36px] h-[36px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                  </div>
                  <p class="author-01">BY JANE TAYLOR</p>
                </div>
                <div class="flex items-end gap-2">
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                      viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                      xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                              c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                              C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                              c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                              M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                              C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                              c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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

                    <span class="count-01">6</span>
                  </div>
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                      enable-background="new 0 0 512 512">
                      <g>
                        <g>
                          <path
                            d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                          <path
                            d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                        </g>
                      </g>
                    </svg>

                    <span class="count-01">587</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="border-t-2 relative my-6 z-[-1]">
            <span class="w-1/6 border-t-[1px] unde-01"></span>
          </div>
        </section>
        <section>
          <div class="flex flex-col md:flex-row justify-start gap-6">
            <div class="w-full h-[190px]">
              <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-[190px] object-cover rounded-md" /></a>
            </div>
            <div>
              <div class="flex justify-between items-center">
                <div class="p-1 subTitle-01 rounded-md font-semibold px-4">
                  <a href="#">Science</a>
                </div>
                <div class="w-[20px] h-[20px] border-t-[1px] border-r-[1px]"></div>
              </div>
              <div class="flex flex-col justify-start items-start mt-4">
                <h3 class="title-post-01">
                  Goodwin must Break Clackson hold on Flags
                </h3>
                <span class="flex justify-start items-center gap-2">
                  <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                    viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                    <g>
                      <g>
                        <path
                          d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                          c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                        <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                          c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                      </g>
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
                  <span class="day-01">18 MAY 2022</span>
                </span>
              </div>
              <div class="my-2">
                <p class="line-clamp-2 content-01">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Sapiente repellat velit incidunt temporibus explicabo hic ex
                  dicta? Libero hic soluta provident alias cum nobis totam
                  officiis, nemo harum, rem temporibus!
                </p>
              </div>
              <div class="flex justify-between items-center">
                <div class="flex justify-start items-center gap-2">
                  <div class="w-[36px] h-[36px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                  </div>
                  <p class="author-01">BY JANE TAYLOR</p>
                </div>
                <div class="flex items-end gap-2">
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                      viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                      xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                              c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                              C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                              c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                              M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                              C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                              c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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

                    <span class="count-01">6</span>
                  </div>
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                      enable-background="new 0 0 512 512">
                      <g>
                        <g>
                          <path
                            d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                          <path
                            d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                        </g>
                      </g>
                    </svg>

                    <span class="count-01">587</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="border-t-2 relative my-6 z-[-1]">
            <span class="w-1/6 border-t-[1px] unde-01"></span>
          </div>
        </section>
        <section>
          <div class="flex flex-col md:flex-row justify-start gap-6">
            <div class="w-full h-[190px]">
              <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-[190px] object-cover rounded-md" /></a>
            </div>
            <div>
              <div class="flex justify-between items-center">
                <div class="p-1 subTitle-01 rounded-md font-semibold px-4">
                  <a href="#">Science</a>
                </div>
                <div class="w-[20px] h-[20px] border-t-[1px] border-r-[1px]"></div>
              </div>
              <div class="flex flex-col justify-start items-start mt-4">
                <h3 class="title-post-01">
                  Goodwin must Break Clackson hold on Flags
                </h3>
                <span class="flex justify-start items-center gap-2">
                  <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                    viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                    <g>
                      <g>
                        <path
                          d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                          c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                        <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                          c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                      </g>
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
                  <span class="day-01">18 MAY 2022</span>
                </span>
              </div>
              <div class="my-2">
                <p class="line-clamp-2 content-01">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Sapiente repellat velit incidunt temporibus explicabo hic ex
                  dicta? Libero hic soluta provident alias cum nobis totam
                  officiis, nemo harum, rem temporibus!
                </p>
              </div>
              <div class="flex justify-between items-center">
                <div class="flex justify-start items-center gap-2">
                  <div class="w-[36px] h-[36px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                  </div>
                  <p class="author-01">BY JANE TAYLOR</p>
                </div>
                <div class="flex items-end gap-2">
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                      viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                      xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                              c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                              C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                              c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                              M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                              C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                              c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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

                    <span class="count-01">6</span>
                  </div>
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                      enable-background="new 0 0 512 512">
                      <g>
                        <g>
                          <path
                            d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                          <path
                            d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                        </g>
                      </g>
                    </svg>

                    <span class="count-01">587</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="border-t-2 relative my-6 z-[-1]">
            <span class="w-1/6 border-t-[1px] unde-01"></span>
          </div>
        </section>
        <section>
          <div class="flex flex-col md:flex-row justify-start gap-6">
            <div class="w-full h-[190px]">
              <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-[190px] object-cover rounded-md" /></a>
            </div>
            <div>
              <div class="flex justify-between items-center">
                <div class="p-1 subTitle-01 rounded-md font-semibold px-4">
                  <a href="#">Science</a>
                </div>
                <div class="w-[20px] h-[20px] border-t-[1px] border-r-[1px]"></div>
              </div>
              <div class="flex flex-col justify-start items-start mt-4">
                <h3 class="title-post-01">
                  Goodwin must Break Clackson hold on Flags
                </h3>
                <span class="flex justify-start items-center gap-2">
                  <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                    viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                    <g>
                      <g>
                        <path
                          d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                          c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                        <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                          c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                      </g>
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
                  <span class="day-01">18 MAY 2022</span>
                </span>
              </div>
              <div class="my-2">
                <p class="line-clamp-2 content-01">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Sapiente repellat velit incidunt temporibus explicabo hic ex
                  dicta? Libero hic soluta provident alias cum nobis totam
                  officiis, nemo harum, rem temporibus!
                </p>
              </div>
              <div class="flex justify-between items-center">
                <div class="flex justify-start items-center gap-2">
                  <div class="w-[36px] h-[36px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                  </div>
                  <p class="author-01">BY JANE TAYLOR</p>
                </div>
                <div class="flex items-end gap-2">
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                      viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                      xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                              c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                              C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                              c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                              M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                              C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                              c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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

                    <span class="count-01">6</span>
                  </div>
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                      enable-background="new 0 0 512 512">
                      <g>
                        <g>
                          <path
                            d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                          <path
                            d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                        </g>
                      </g>
                    </svg>

                    <span class="count-01">587</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="border-t-2 relative my-6 z-[-1]">
            <span class="w-1/6 border-t-[1px] unde-01"></span>
          </div>
        </section>
        <section>
          <div class="flex flex-col md:flex-row justify-start gap-6">
            <div class="w-full h-[190px]">
              <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-[190px] object-cover rounded-md" /></a>
            </div>
            <div>
              <div class="flex justify-between items-center">
                <div class="p-1 subTitle-01 rounded-md font-semibold px-4">
                  <a href="#">Science</a>
                </div>
                <div class="w-[20px] h-[20px] border-t-[1px] border-r-[1px]"></div>
              </div>
              <div class="flex flex-col justify-start items-start mt-4">
                <h3 class="title-post-01">
                  Goodwin must Break Clackson hold on Flags
                </h3>
                <span class="flex justify-start items-center gap-2">
                  <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                    viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                    <g>
                      <g>
                        <path
                          d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                          c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                        <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                          c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                      </g>
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
                  <span class="day-01">18 MAY 2022</span>
                </span>
              </div>
              <div class="my-2">
                <p class="line-clamp-2 content-01">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Sapiente repellat velit incidunt temporibus explicabo hic ex
                  dicta? Libero hic soluta provident alias cum nobis totam
                  officiis, nemo harum, rem temporibus!
                </p>
              </div>
              <div class="flex justify-between items-center">
                <div class="flex justify-start items-center gap-2">
                  <div class="w-[36px] h-[36px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                  </div>
                  <p class="author-01">BY JANE TAYLOR</p>
                </div>
                <div class="flex items-end gap-2">
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                      viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                      xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                              c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                              C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                              c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                              M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                              C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                              c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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

                    <span class="count-01">6</span>
                  </div>
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                      enable-background="new 0 0 512 512">
                      <g>
                        <g>
                          <path
                            d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                          <path
                            d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                        </g>
                      </g>
                    </svg>

                    <span class="count-01">587</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="col-span-4">
        <div>
          <button class="w-full p-3 border-2 bgNew-01 rounded-md my-6 font-bold">
            Read all News
          </button>
          <ul class="flex justify-center items-center w-full">
            <li class="w-full bgPopular-01 p-3 my-3 active-01" id="popular">
              <a href="#" onclick="sideChange()">Popular news</a>
            </li>
            <li class="w-full p-3 bgPopular-01 my-3" id="new">
              <a href="#" onclick="sideChange()">Resent news</a>
            </li>
          </ul>
          <div class="p-6 bg-slate-100">
            <section>
              <div class="flex justify-start items-start gap-4 border-b-2 pb-4">
                <div class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md">
                  <img src="../img/1.jpg" class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md" />
                </div>
                <div class="w-[160px] md:w-full">
                  <h3 class="truncate title-post-new-01">
                    How to start Home education
                  </h3>
                  <div class="flex flex-wrap gap-2">
                    <span class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                    <div class="flex gap-1">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                        viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                        xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                                  c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                                  C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                                  c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                                  M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                                  C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                                  c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                          </g>
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

                      <span class="count-01">6</span>
                    </div>
                    <div class="flex gap-1">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                        enable-background="new 0 0 512 512">
                        <g>
                          <g>
                            <path
                              d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                            <path
                              d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                          </g>
                        </g>
                      </svg>

                      <span class="count-01">587</span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="flex justify-start items-start gap-4 border-b-2 pb-4 mt-4">
                <div class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md">
                  <img src="../img/1.jpg" class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md" />
                </div>
                <div class="w-[160px] md:w-full">
                  <h3 class="truncate title-post-new-01">
                    How to start Home education
                  </h3>
                  <div class="flex flex-wrap gap-2">
                    <span class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                    <div class="flex gap-1">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                        viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                        xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                                  c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                                  C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                                  c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                                  M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                                  C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                                  c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                          </g>
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

                      <span class="count-01">6</span>
                    </div>
                    <div class="flex gap-1">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                        enable-background="new 0 0 512 512">
                        <g>
                          <g>
                            <path
                              d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                            <path
                              d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                          </g>
                        </g>
                      </svg>

                      <span class="count-01">587</span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="flex justify-start items-start gap-4 border-b-2 pb-4 mt-4">
                <div class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md">
                  <img src="../img/1.jpg" class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md" />
                </div>
                <div class="w-[160px] md:w-full">
                  <h3 class="truncate title-post-new-01">
                    How to start Home education
                  </h3>
                  <div class="flex flex-wrap gap-2">
                    <span class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                    <div class="flex gap-1">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                        viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                        xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                                  c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                                  C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                                  c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                                  M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                                  C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                                  c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                          </g>
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

                      <span class="count-01">6</span>
                    </div>
                    <div class="flex gap-1">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                        enable-background="new 0 0 512 512">
                        <g>
                          <g>
                            <path
                              d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                            <path
                              d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                          </g>
                        </g>
                      </svg>

                      <span class="count-01">587</span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="flex justify-start items-start gap-4 pb-4 mt-4">
                <div class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md">
                  <img src="../img/1.jpg" class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md" />
                </div>
                <div class="w-[160px] md:w-full">
                  <h3 class="truncate title-post-new-01">
                    How to start Home education
                  </h3>
                  <div class="flex flex-wrap gap-2">
                    <span class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                    <div class="flex gap-1">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                        viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                        xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                                  c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                                  C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                                  c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                                  M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                                  C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                                  c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                          </g>
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

                      <span class="count-01">6</span>
                    </div>
                    <div class="flex gap-1">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                        enable-background="new 0 0 512 512">
                        <g>
                          <g>
                            <path
                              d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                            <path
                              d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                          </g>
                        </g>
                      </svg>

                      <span class="count-01">587</span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <section>
          <div class="py-10">
            <div>
              <h2 class="tag-01">Popular Tags</h2>
            </div>
            <div class="border-t-2 relative my-6 z-[-1]">
              <span class="w-1/4 border-t-[1px] unde-01"></span>
            </div>
            <div>
              <ul class="flex flex-wrap gap-2">
                <li class="bgNew-01 p-2 px-4">
                  <a href="#">Lorem</a>
                </li>
                <li class="bgNew-01 p-2 px-4">
                  <a href="#">Lorem</a>
                </li>
                <li class="bgNew-01 p-2 px-4">
                  <a href="#">Lorem</a>
                </li>
                <li class="bgNew-01 p-2 px-4">
                  <a href="#">Lorem</a>
                </li>
                <li class="bgNew-01 p-2 px-4">
                  <a href="#">Lorem</a>
                </li>
                <li class="bgNew-01 p-2 px-4">
                  <a href="#">Lorem</a>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <section>
          <div>
            <div>
              <h2 class="tag-01">About us</h2>
            </div>
            <div class="border-t-2 relative my-6 z-[-1]">
              <span class="w-1/4 border-t-[1px] unde-01"></span>
            </div>
            <section>
              <div class="border-[1px] rounded-md comment-01 p-6">
                <p class="line-clamp-2 content-01">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Ipsa ducimus quos vero magni eveniet aspernatur quam quae
                  omnis! Tenetur dolores vero corrupti eaque iusto quisquam
                  sequi, adipisci minima qui assumenda.
                </p>
              </div>
              <div class="flex justify-between items-center py-2">
                <div class="day-01 flex gap-2">
                  <p>Đã đăng 12 giờ trước</p>
                </div>
                <div class="flex justify-center items-center gap-2">
                  <a href="#"><svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      width="485.87px" height="485.869px" viewBox="0 0 485.87 485.869"
                      style="enable-background: new 0 0 485.87 485.869" xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                          c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                          C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                          c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                          M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                          C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                          c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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
                  </a>
                  <a href="#">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490 490"
                      style="enable-background: new 0 0 490 490" xml:space="preserve">
                      <path id="XMLID_25_" d="M316.554,108.336c4.553,6.922,2.629,16.223-4.296,20.774c-3.44,2.261-6.677,4.928-9.621,7.929
      c-2.938,2.995-6.825,4.497-10.715,4.497c-3.791,0-7.585-1.427-10.506-4.291c-5.917-5.801-6.009-15.298-0.207-21.212
      c4.439-4.524,9.338-8.559,14.562-11.992C302.698,99.491,312.002,101.414,316.554,108.336z M447.022,285.869
      c-1.506,1.536-148.839,151.704-148.839,151.704C283.994,452.035,265.106,460,245,460s-38.994-7.965-53.183-22.427L42.978,285.869
      c-57.304-58.406-57.304-153.441,0-211.847C70.83,45.634,107.882,30,147.31,30c36.369,0,70.72,13.304,97.69,37.648
      C271.971,43.304,306.32,30,342.689,30c39.428,0,76.481,15.634,104.332,44.021C504.326,132.428,504.326,227.463,447.022,285.869z
       M425.596,95.028C403.434,72.44,373.991,60,342.69,60c-31.301,0-60.745,12.439-82.906,35.027c-1.122,1.144-2.129,2.533-3.538,3.777
      c-7.536,6.654-16.372,6.32-22.491,0c-1.308-1.352-2.416-2.633-3.538-3.777C208.055,72.44,178.612,60,147.31,60
      c-31.301,0-60.744,12.439-82.906,35.027c-45.94,46.824-45.94,123.012,0,169.836c1.367,1.393,148.839,151.704,148.839,151.704
      C221.742,425.229,233.02,430,245,430c11.98,0,23.258-4.771,31.757-13.433l148.839-151.703l0,0
      C471.535,218.04,471.535,141.852,425.596,95.028z M404.169,116.034c-8.975-9.148-19.475-16.045-31.208-20.499
      c-7.746-2.939-16.413,0.953-19.355,8.698c-2.942,7.744,0.953,16.407,8.701,19.348c7.645,2.902,14.521,7.431,20.436,13.459
      c23.211,23.658,23.211,62.153,0,85.811l-52.648,53.661c-5.803,5.915-5.711,15.412,0.206,21.212
      c2.921,2.863,6.714,4.291,10.506,4.291c3.889,0,7.776-1.502,10.714-4.497l52.648-53.661
      C438.744,208.616,438.744,151.275,404.169,116.034z" />
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
                    </svg></a>
                </div>
              </div>
            </section>
            <section>
              <div class="border-[1px] rounded-md comment-01 p-6">
                <p class="line-clamp-2 content-01">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Ipsa ducimus quos vero magni eveniet aspernatur quam quae
                  omnis! Tenetur dolores vero corrupti eaque iusto quisquam
                  sequi, adipisci minima qui assumenda.
                </p>
              </div>
              <div class="flex justify-between items-center py-2">
                <div class="day-01 flex gap-2">
                  <p>Đã đăng 12 giờ trước</p>
                </div>
                <div class="flex justify-center items-center gap-2">
                  <a href="#"><svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      width="485.87px" height="485.869px" viewBox="0 0 485.87 485.869"
                      style="enable-background: new 0 0 485.87 485.869" xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                          c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                          C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                          c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                          M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                          C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                          c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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
                  </a>
                  <a href="#">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490 490"
                      style="enable-background: new 0 0 490 490" xml:space="preserve">
                      <path id="XMLID_25_" d="M316.554,108.336c4.553,6.922,2.629,16.223-4.296,20.774c-3.44,2.261-6.677,4.928-9.621,7.929
      c-2.938,2.995-6.825,4.497-10.715,4.497c-3.791,0-7.585-1.427-10.506-4.291c-5.917-5.801-6.009-15.298-0.207-21.212
      c4.439-4.524,9.338-8.559,14.562-11.992C302.698,99.491,312.002,101.414,316.554,108.336z M447.022,285.869
      c-1.506,1.536-148.839,151.704-148.839,151.704C283.994,452.035,265.106,460,245,460s-38.994-7.965-53.183-22.427L42.978,285.869
      c-57.304-58.406-57.304-153.441,0-211.847C70.83,45.634,107.882,30,147.31,30c36.369,0,70.72,13.304,97.69,37.648
      C271.971,43.304,306.32,30,342.689,30c39.428,0,76.481,15.634,104.332,44.021C504.326,132.428,504.326,227.463,447.022,285.869z
       M425.596,95.028C403.434,72.44,373.991,60,342.69,60c-31.301,0-60.745,12.439-82.906,35.027c-1.122,1.144-2.129,2.533-3.538,3.777
      c-7.536,6.654-16.372,6.32-22.491,0c-1.308-1.352-2.416-2.633-3.538-3.777C208.055,72.44,178.612,60,147.31,60
      c-31.301,0-60.744,12.439-82.906,35.027c-45.94,46.824-45.94,123.012,0,169.836c1.367,1.393,148.839,151.704,148.839,151.704
      C221.742,425.229,233.02,430,245,430c11.98,0,23.258-4.771,31.757-13.433l148.839-151.703l0,0
      C471.535,218.04,471.535,141.852,425.596,95.028z M404.169,116.034c-8.975-9.148-19.475-16.045-31.208-20.499
      c-7.746-2.939-16.413,0.953-19.355,8.698c-2.942,7.744,0.953,16.407,8.701,19.348c7.645,2.902,14.521,7.431,20.436,13.459
      c23.211,23.658,23.211,62.153,0,85.811l-52.648,53.661c-5.803,5.915-5.711,15.412,0.206,21.212
      c2.921,2.863,6.714,4.291,10.506,4.291c3.889,0,7.776-1.502,10.714-4.497l52.648-53.661
      C438.744,208.616,438.744,151.275,404.169,116.034z" />
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
                    </svg></a>
                </div>
              </div>
            </section>
            <section>
              <div class="border-[1px] rounded-md comment-01 p-6">
                <p class="line-clamp-2 content-01">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Ipsa ducimus quos vero magni eveniet aspernatur quam quae
                  omnis! Tenetur dolores vero corrupti eaque iusto quisquam
                  sequi, adipisci minima qui assumenda.
                </p>
              </div>
              <div class="flex justify-between items-center py-2">
                <div class="day-01 flex gap-2">
                  <p>Đã đăng 12 giờ trước</p>
                </div>
                <div class="flex justify-center items-center gap-2">
                  <a href="#"><svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      width="485.87px" height="485.869px" viewBox="0 0 485.87 485.869"
                      style="enable-background: new 0 0 485.87 485.869" xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                          c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                          C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                          c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                          M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                          C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                          c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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
                  </a>
                  <a href="#">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490 490"
                      style="enable-background: new 0 0 490 490" xml:space="preserve">
                      <path id="XMLID_25_" d="M316.554,108.336c4.553,6.922,2.629,16.223-4.296,20.774c-3.44,2.261-6.677,4.928-9.621,7.929
      c-2.938,2.995-6.825,4.497-10.715,4.497c-3.791,0-7.585-1.427-10.506-4.291c-5.917-5.801-6.009-15.298-0.207-21.212
      c4.439-4.524,9.338-8.559,14.562-11.992C302.698,99.491,312.002,101.414,316.554,108.336z M447.022,285.869
      c-1.506,1.536-148.839,151.704-148.839,151.704C283.994,452.035,265.106,460,245,460s-38.994-7.965-53.183-22.427L42.978,285.869
      c-57.304-58.406-57.304-153.441,0-211.847C70.83,45.634,107.882,30,147.31,30c36.369,0,70.72,13.304,97.69,37.648
      C271.971,43.304,306.32,30,342.689,30c39.428,0,76.481,15.634,104.332,44.021C504.326,132.428,504.326,227.463,447.022,285.869z
       M425.596,95.028C403.434,72.44,373.991,60,342.69,60c-31.301,0-60.745,12.439-82.906,35.027c-1.122,1.144-2.129,2.533-3.538,3.777
      c-7.536,6.654-16.372,6.32-22.491,0c-1.308-1.352-2.416-2.633-3.538-3.777C208.055,72.44,178.612,60,147.31,60
      c-31.301,0-60.744,12.439-82.906,35.027c-45.94,46.824-45.94,123.012,0,169.836c1.367,1.393,148.839,151.704,148.839,151.704
      C221.742,425.229,233.02,430,245,430c11.98,0,23.258-4.771,31.757-13.433l148.839-151.703l0,0
      C471.535,218.04,471.535,141.852,425.596,95.028z M404.169,116.034c-8.975-9.148-19.475-16.045-31.208-20.499
      c-7.746-2.939-16.413,0.953-19.355,8.698c-2.942,7.744,0.953,16.407,8.701,19.348c7.645,2.902,14.521,7.431,20.436,13.459
      c23.211,23.658,23.211,62.153,0,85.811l-52.648,53.661c-5.803,5.915-5.711,15.412,0.206,21.212
      c2.921,2.863,6.714,4.291,10.506,4.291c3.889,0,7.776-1.502,10.714-4.497l52.648-53.661
      C438.744,208.616,438.744,151.275,404.169,116.034z" />
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
                    </svg></a>
                </div>
              </div>
            </section>
            <div class="p-2 px-4 subTitle-01 flex gap-2 items-center w-[140px] rounded-sm">
              <a href="#" class="font-bold">Xem thêm</a>
              <svg version="1.1" class="w-4 h-4 fill-white" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 230.453 230.453"
                style="enable-background: new 0 0 230.453 230.453" xml:space="preserve">
                <polygon points="177.169,43.534 177.169,58.534 204.845,58.534 135.896,127.479 92.36,83.947 0,176.312 10.606,186.918
      92.361,105.16 135.896,148.691 215.453,69.14 215.453,96.784 230.453,96.784 230.453,43.534 " />
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
            </div>
          </div>
        </section>
      </div>
    </div>
    <div class="grid grid-cols-1 xl:grid-cols-12 xl:gap-6 pt-4">
      <div class="col-span-12">
        <div>
          <h2 class="title-01">Best in Categories</h2>
          <h4 class="title-sub-01">Dont miss daily news</h4>
        </div>
        <div class="border-t-2 relative my-6 z-[-1]">
          <span class="w-1/4 border-t-[1px] unde-01"></span>
        </div>
      </div>
      <div class="col-span-12 xl:col-span-6">
        <section>
          <div class="flex flex-col justify-start">
            <div class="w-full h-[375px] relative">
              <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-[375px] object-cover rounded-md" /></a>
              <div class="p-1 label-img-01 absolute top-0 font-semibold px-4">
                <a href="#">Science</a>
              </div>
            </div>
            <div>
              <div class="flex justify-between items-center mt-4">
                <h3 class="title-post-01">
                  Goodwin must Break Clackson hold on Flags
                </h3>
                <div class="w-[20px] h-[20px] border-t-[1px] border-r-[1px]"></div>
              </div>
              <div class="flex flex-col justify-start items-start py-1">
                <span class="flex justify-start items-center gap-2">
                  <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                    viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                    <g>
                      <g>
                        <path
                          d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                              c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                        <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                              c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                      </g>
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
                  <span class="day-01">18 MAY 2022</span>
                </span>
              </div>
              <div class="my-2">
                <p class="line-clamp-2 content-01">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Sapiente repellat velit incidunt temporibus explicabo hic ex
                  dicta? Libero hic soluta provident alias cum nobis totam
                  officiis, nemo harum, rem temporibus!
                </p>
              </div>
              <div class="flex justify-between items-center mt-2">
                <div class="flex justify-start items-center gap-2">
                  <div class="w-[36px] h-[36px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                  </div>
                  <p class="author-01">BY JANE TAYLOR</p>
                </div>
                <div class="flex items-end gap-2">
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                      viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                      xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                  c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                  C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                  c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                  M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                  C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                  c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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

                    <span class="count-01">6</span>
                  </div>
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                      enable-background="new 0 0 512 512">
                      <g>
                        <g>
                          <path
                            d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                          <path
                            d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                        </g>
                      </g>
                    </svg>

                    <span class="count-01">587</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="border-t-2 relative my-6 z-[-1]">
            <span class="w-1/6 border-t-[1px] unde-01"></span>
          </div>
        </section>
        <section>
          <div class="flex flex-col justify-start">
            <div class="w-full h-[375px] relative">
              <a href="#"><img src="../img/1.jpg" alt="" class="w-full h-[375px] object-cover rounded-md" /></a>
              <div class="p-1 label-img-01 absolute top-0 font-semibold px-4">
                <a href="#">Science</a>
              </div>
            </div>
            <div>
              <div class="flex justify-between items-center mt-4">
                <h3 class="title-post-01">
                  Goodwin must Break Clackson hold on Flags
                </h3>
                <div class="w-[20px] h-[20px] border-t-[1px] border-r-[1px]"></div>
              </div>
              <div class="flex flex-col justify-start items-start py-1">
                <span class="flex justify-start items-center gap-2">
                  <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                    viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                    <g>
                      <g>
                        <path
                          d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                              c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                        <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                              c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                      </g>
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
                  <span class="day-01">18 MAY 2022</span>
                </span>
              </div>
              <div class="my-2">
                <p class="line-clamp-2 content-01">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Sapiente repellat velit incidunt temporibus explicabo hic ex
                  dicta? Libero hic soluta provident alias cum nobis totam
                  officiis, nemo harum, rem temporibus!
                </p>
              </div>
              <div class="flex justify-between items-center mt-2">
                <div class="flex justify-start items-center gap-2">
                  <div class="w-[36px] h-[36px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                  </div>
                  <p class="author-01">BY JANE TAYLOR</p>
                </div>
                <div class="flex items-end gap-2">
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                      viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                      xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                  c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                  C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                  c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                  M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                  C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                  c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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

                    <span class="count-01">6</span>
                  </div>
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                      enable-background="new 0 0 512 512">
                      <g>
                        <g>
                          <path
                            d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                          <path
                            d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                        </g>
                      </g>
                    </svg>

                    <span class="count-01">587</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class="col-span-12 xl:col-span-6">
        <button class="w-full p-3 border-2 bgNew-01 rounded-md font-bold">
          Read all News
        </button>
        <div class="border-[1px] p-6 mt-4">
          <section>
            <div class="flex flex-col md:flex-row items-start gap-6 border-b-[1px] my-2 py-2">
              <div class="w-full h-[190px] rounded-md md:order-last">
                <a href="#"><img src="../img/1.jpg" class="w-full h-[190px] object-cover rounded-md" /></a>
              </div>

              <div class="flex flex-col justify-start items-start gap-3">
                <div class="p-1 subTitle-01 rounded-md font-semibold px-4">
                  <a href="#">Science</a>
                </div>
                <div>
                  <h3 class="title-post-01">
                    Goodwin must Break Clackson hold on Flags
                  </h3>
                  <span class="flex justify-start items-center gap-2">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                      viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                              c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                          <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                              c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                        </g>
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
                    <span class="day-01">18 MAY 2022</span>
                  </span>
                </div>

                <div>
                  <p class="line-clamp-2 content-01">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Sapiente repellat velit incidunt temporibus explicabo hic
                    ex dicta? Libero hic soluta provident alias cum nobis
                    totam officiis, nemo harum, rem temporibus!
                  </p>
                </div>

                <div class="flex justify-end items-end gap-2 w-full">
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                      viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                      xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                          c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                          C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                          c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                          M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                          C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                          c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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

                    <span class="count-01">6</span>
                  </div>
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                      enable-background="new 0 0 512 512">
                      <g>
                        <g>
                          <path
                            d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                          <path
                            d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                        </g>
                      </g>
                    </svg>

                    <span class="count-01">587</span>
                  </div>
                </div>
                <div class="flex justify-start items-center gap-2">
                  <div class="w-[36px] h-[36px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                  </div>
                  <p class="author-01">BY JANE TAYLOR</p>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="flex flex-col md:flex-row items-start gap-6 border-b-[1px] my-2 py-2">
              <div class="w-full h-[190px] rounded-md md:order-last">
                <a href="#"><img src="../img/1.jpg" class="w-full h-[190px] object-cover rounded-md" /></a>
              </div>

              <div class="flex flex-col justify-start items-start gap-3">
                <div class="p-1 subTitle-01 rounded-md font-semibold px-4">
                  <a href="#">Science</a>
                </div>
                <div>
                  <h3 class="title-post-01">
                    Goodwin must Break Clackson hold on Flags
                  </h3>
                  <span class="flex justify-start items-center gap-2">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                      viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                              c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                          <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                              c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                        </g>
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
                    <span class="day-01">18 MAY 2022</span>
                  </span>
                </div>

                <div>
                  <p class="line-clamp-2 content-01">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Sapiente repellat velit incidunt temporibus explicabo hic
                    ex dicta? Libero hic soluta provident alias cum nobis
                    totam officiis, nemo harum, rem temporibus!
                  </p>
                </div>

                <div class="flex justify-end items-end gap-2 w-full">
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                      viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                      xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                          c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                          C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                          c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                          M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                          C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                          c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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

                    <span class="count-01">6</span>
                  </div>
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                      enable-background="new 0 0 512 512">
                      <g>
                        <g>
                          <path
                            d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                          <path
                            d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                        </g>
                      </g>
                    </svg>

                    <span class="count-01">587</span>
                  </div>
                </div>
                <div class="flex justify-start items-center gap-2">
                  <div class="w-[36px] h-[36px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                  </div>
                  <p class="author-01">BY JANE TAYLOR</p>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="flex flex-col md:flex-row items-start gap-6 border-b-[1px] my-2 py-2">
              <div class="w-full h-[190px] rounded-md md:order-last">
                <a href="#"><img src="../img/1.jpg" class="w-full h-[190px] object-cover rounded-md" /></a>
              </div>

              <div class="flex flex-col justify-start items-start gap-3">
                <div class="p-1 subTitle-01 rounded-md font-semibold px-4">
                  <a href="#">Science</a>
                </div>
                <div>
                  <h3 class="title-post-01">
                    Goodwin must Break Clackson hold on Flags
                  </h3>
                  <span class="flex justify-start items-center gap-2">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                      viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                              c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                          <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                              c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                        </g>
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
                    <span class="day-01">18 MAY 2022</span>
                  </span>
                </div>

                <div>
                  <p class="line-clamp-2 content-01">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Sapiente repellat velit incidunt temporibus explicabo hic
                    ex dicta? Libero hic soluta provident alias cum nobis
                    totam officiis, nemo harum, rem temporibus!
                  </p>
                </div>

                <div class="flex justify-end items-end gap-2 w-full">
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                      viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                      xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                          c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                          C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                          c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                          M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                          C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                          c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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

                    <span class="count-01">6</span>
                  </div>
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                      enable-background="new 0 0 512 512">
                      <g>
                        <g>
                          <path
                            d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                          <path
                            d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                        </g>
                      </g>
                    </svg>

                    <span class="count-01">587</span>
                  </div>
                </div>
                <div class="flex justify-start items-center gap-2">
                  <div class="w-[36px] h-[36px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                  </div>
                  <p class="author-01">BY JANE TAYLOR</p>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="flex flex-col md:flex-row items-start gap-6">
              <div class="w-full h-[190px] rounded-md md:order-last">
                <a href="#"><img src="../img/1.jpg" class="w-full h-[190px] object-cover rounded-md" /></a>
              </div>

              <div class="flex flex-col justify-start items-start gap-3">
                <div class="p-1 subTitle-01 rounded-md font-semibold px-4">
                  <a href="#">Science</a>
                </div>
                <div>
                  <h3 class="title-post-01">
                    Goodwin must Break Clackson hold on Flags
                  </h3>
                  <span class="flex justify-start items-center gap-2">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                      viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                              c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                          <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                              c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                        </g>
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
                    <span class="day-01">18 MAY 2022</span>
                  </span>
                </div>

                <div>
                  <p class="line-clamp-2 content-01">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Sapiente repellat velit incidunt temporibus explicabo hic
                    ex dicta? Libero hic soluta provident alias cum nobis
                    totam officiis, nemo harum, rem temporibus!
                  </p>
                </div>

                <div class="flex justify-end items-end gap-2 w-full">
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                      viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                      xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                          c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                          C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                          c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                          M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                          C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                          c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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

                    <span class="count-01">6</span>
                  </div>
                  <div class="flex gap-1">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                      enable-background="new 0 0 512 512">
                      <g>
                        <g>
                          <path
                            d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                          <path
                            d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                        </g>
                      </g>
                    </svg>

                    <span class="count-01">587</span>
                  </div>
                </div>
                <div class="flex justify-start items-center gap-2">
                  <div class="w-[36px] h-[36px] rounded-full">
                    <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                  </div>
                  <p class="author-01">BY JANE TAYLOR</p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'about',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'js_handle' => '',
                'html' => '<div class="h-[200px] z-[-1]">
      <img src="../img/1.jpg" class="w-full h-full object-cover" />
    </div>
    <div class="sub-direct-01 py-6">
      <div
        class="flex justify-start items-start gap-2 px-2 md:px-8 xl:px-[88px]"
      >
        <a href="#" class="active">Home</a>
        <span>></span>
        <a href="#">About us</a>
      </div>
    </div>
    <div class="content px-2 md:px-8 xl:px-[88px] mt-2">
      <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 xl:gap-[150px] mt-10">
        <section>
          <div class="flex justify-between items-center">
            <div>
              <h2 class="title-01">Our Story</h2>
              <h4 class="title-sub-01">Who we are</h4>
            </div>

            <svg
              version="1.1"
              class="w-4 h-4 svgColor-01"
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
          </div>
          <div class="border-t-2 relative my-6 z-[-1]">
            <span class="w-2/5 border-t-[1px] unde-01"></span>
          </div>
          <p class="pb-6">
            Aliquam luctus tempor orci sit amet finibus. Duis porttitor, ex ac
            molestie consectetur, metus tellus venenatis velit, et interdum enim
            lorem a purus. Fusce scelerisque, massa vitae rhoncus elementum,
            enim acinia pharetra? Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget
            dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum
            elementum. Suspendisse id neque a nibh mollis blandit. Quisque
            varius eros ac purus dignissim. Proin eu ultrices libero.
          </p>
          <button
            class="subTitle-01 flex justify-start items-center gap-2 p-2 px-4 border-[1px] rounded-md font-semibold"
          >
            Our story video
          </button>
        </section>

        <section>
          <div class="relative">
            <div class="w-full h-[300px] lg:h-[400px]">
              <img
                src="../img/1.jpg"
                alt=""
                class="w-full h-[300px] lg:h-[400px] object-cover"
              />
            </div>

            <div
              class="w-full p-8 label-img-01 xl:absolute xl:right-[-25px] xl:bottom-[20px] xl:max-w-[300px] rounded-md mt-10"
            >
              <span class="font-semibold"
                >Your website is fully responsive so visitors can view your
                content from their choice of device.</span
              >
              <div class="flex justify-between items-center pt-4">
                <h2>Mark Antony Gmag CEO</h2>
                <div class="w-full flex justify-end">
                  <svg
                    width="24px"
                    height="24px"
                    viewBox="0 0 24 24"
                    id="quote_mark"
                    data-name="quote mark"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect
                      id="Rectangle_3"
                      data-name="Rectangle 3"
                      width="24"
                      height="24"
                      fill="none"
                    />
                    <path
                      id="Rectangle"
                      d="M0,3A3,3,0,0,1,3,0H5A3,3,0,0,1,8,3V4c0,6-2.028,10-7,10,4-3.962,3-6,3-6H3A3,3,0,0,1,0,5Z"
                      transform="translate(2 5)"
                      fill="#FFFFFF"
                      stroke="#FFFFFF"
                      stroke-linejoin="round"
                      stroke-miterlimit="10"
                      stroke-width="1.5"
                    />
                    <path
                      id="Rectangle-2"
                      data-name="Rectangle"
                      d="M0,3A3,3,0,0,1,3,0H5A3,3,0,0,1,8,3V4c0,6-2.028,10-7,10,4-3.962,3-6,3-6H3A3,3,0,0,1,0,5Z"
                      transform="translate(14 5)"
                      fill="#FFFFFF"
                      stroke="#FFFFFF"
                      stroke-linejoin="round"
                      stroke-miterlimit="10"
                      stroke-width="1.5"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'author',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'js_handle' => '',
                'html' => ' <div class="sub-direct-01 py-6">
      <div
        class="flex justify-start items-start gap-2 px-2 md:px-8 xl:px-[88px]"
      >
        <a href="#" class="active">Home</a>
        <span>></span>
        <a href="#">Authors</a>
      </div>
    </div>
    <div class="content px-2 md:px-8 xl:px-[88px] mt-2">
      <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-6">
        <div class="col-span-4 mt-6">
          <section>
            <div class="border-[1px] rounded-md">
              <div class="relative">
                <div class="w-full h-[150px]">
                  <img
                    src="../img/2.jpg"
                    alt=""
                    class="w-full h-full object-cover rounded-tl-md rounded-tr-md"
                  />
                </div>

                <div
                  class="flex justify-start items-center gap-4 px-6 absolute top-[65px] w-full"
                >
                  <div class="w-[100px]">
                    <div class="w-[80px] h-[80px] rounded-md">
                      <img
                        src="../img/1.jpg"
                        alt=""
                        class="w-full h-full object-cover rounded-md shadow-lg"
                      />
                    </div>
                  </div>

                  <div class="about-author-01 w-full">
                    <h2>Mark Rose</h2>
                    <span> 8 YEARS OF MEMBERSHIP </span>
                    <div
                      class="border-[1px] p-3 xl:px-10 rounded-sm shadow-lg mt-2"
                    >
                      <div class="flex justify-between items-center">
                        <span><strong>27</strong> Articles</span>
                        <span class="border-center-01"></span>
                        <span><strong>1586</strong> Views</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="intro-author-01">
                <div class="p-6">
                  <h2>About</h2>
                  <p class="py-3 text-[14px]">
                    In a professional context it often happens that private or
                    corporate clients corder a publication to be made and
                    presented with the actual content still not being ready.
                    Think of a news blog that’s filled with content hourly on
                    the day of going live. Filled with content hourly on the day
                    of going live.
                  </p>
                  <div
                    class="about-author-01 border-[1px] p-6 rounded-sm shadow-lg"
                  >
                    <div
                      class="flex justify-start items-center gap-4 pb-2 border-b-[1px]"
                    >
                      <span>
                        <strong>WRITE:</strong>
                      </span>
                      <a href="#"><span>YOURMAIL@DOMAIN.COM</span></a>
                    </div>
                    <div class="flex justify-start items-center gap-4 pt-2">
                      <span>
                        <strong>EMAIL:</strong>
                      </span>
                      <a href="#"><span>+789564231</span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="follow-01 px-6 py-3">
                  <div class="flex justify-between items-center">
                    <h3>Follow:</h3>
                    <ul class="flex gap-1">
                      <li class="p-2 subTitle-01 rounded-sm">
                        <a href="#">
                          <svg
                            class="w-4 h-4"
                            xmlns="http://www.w3.org/2000/svg"
                            x="0px"
                            y="0px"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            style="fill: #ffffff"
                          >
                            <path
                              d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z"
                            ></path>
                          </svg>
                        </a>
                      </li>
                      <li class="p-2 subTitle-01 rounded-sm">
                        <a href="#">
                          <svg
                            version="1.1"
                            class="w-4 h-4"
                            id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            viewBox="0 0 511.999 511.999"
                            style="fill: #ffffff"
                            xml:space="preserve"
                          >
                            <g>
                              <g>
                                <path
                                  d="M507.77,96.789c-3.92-4.669-9.903-6.958-15.769-6.358c2.345-4.855,4.354-9.891,6.016-15.091
                            c2.279-7.127-0.123-15.046-5.97-19.699c-5.849-4.662-14.103-5.232-20.545-1.416c-14.758,8.753-30.599,15.287-47.157,19.455
                            c-21.035-18.575-48.714-29.128-76.82-29.128c-63.816,0-115.735,51.917-115.735,115.731c0,0.714,0.006,1.428,0.019,2.142
                            c-64.801-8.793-124.951-42.372-166.494-93.332c-3.765-4.618-9.554-7.099-15.467-6.617C43.922,62.94,38.597,66.283,35.6,71.42
                            c-10.258,17.603-15.68,37.727-15.68,58.199c0,18.054,4.218,35.74,12.145,51.67c-1.32,0.393-2.602,0.936-3.818,1.634
                            c-5.477,3.138-8.967,9.007-9.111,15.299c-0.013,0.551-0.014,1.102-0.014,1.659c0,32.878,14.268,64.167,38.287,85.933
                            c-3.841,4.722-5.072,11.157-3.206,16.976c9.946,31.053,32.666,56.265,61.702,69.726C92.746,383.153,67.381,388.7,41.425,388.7
                            c-7.086,0-14.204-0.416-21.147-1.238c-8.439-1.004-16.336,3.885-19.202,11.89c-2.863,8,0.132,16.789,7.282,21.373
                            c47.672,30.566,102.793,46.722,159.404,46.722c111.254,0,180.924-52.547,219.777-96.631
                            c48.338-54.836,76.06-127.446,76.06-199.211c0-1.265-0.008-2.537-0.024-3.811c17.576-13.928,32.828-30.48,45.386-49.265
                            C513.42,111.86,512.927,102.917,507.77,96.789z M447.131,154.728c-2.645,1.993-4.158,5.147-4.057,8.456
                            c0.086,2.799,0.129,5.633,0.129,8.425c0,66.867-25.866,134.561-70.965,185.723c-36.075,40.928-100.834,89.716-204.475,89.716
                            c-49.475,0-97.73-13.257-140.171-38.423c4.596,0.316,9.222,0.475,13.837,0.475c37.456,0,73.838-10.387,105.213-30.038
                            c3.502-2.195,5.335-6.287,4.64-10.361c-0.697-4.075-3.783-7.326-7.816-8.234c-31.581-7.104-57.553-30.05-68.608-60.322
                            c1.701,0.258,3.412,0.473,5.115,0.644c4.75,0.466,9.202-2.416,10.699-6.954c1.497-4.539-0.358-9.508-4.462-11.956
                            c-28.06-16.734-45.763-46.996-46.651-79.439c3.985,2.013,8.121,3.766,12.341,5.228c4.347,1.505,9.163-0.084,11.758-3.882
                            c2.597-3.797,2.33-8.861-0.651-12.365c-14.629-17.197-22.685-39.144-22.685-61.799c0-15.768,3.9-31.279,11.306-45.069
                            c47.495,56.842,116.675,93.062,190.337,99.529c3.076,0.267,6.105-0.866,8.244-3.091s3.155-5.3,2.764-8.36
                            c-0.519-4.065-0.782-8.219-0.782-12.344c0-52.566,42.768-95.332,95.336-95.332c24.725,0,49.052,9.914,66.741,27.198
                            c2.46,2.403,5.965,3.408,9.323,2.665c18.548-4.087,36.34-10.801,52.975-19.987c-4.049,10.366-9.853,19.856-17.303,28.281
                            c-3.006,3.399-3.405,8.376-0.978,12.211c2.426,3.835,7.097,5.607,11.453,4.344c6.018-1.74,11.985-3.781,17.819-6.092
                            C476.151,129.269,462.58,143.088,447.131,154.728z"
                                />
                              </g>
                            </g>
                            <g>
                              <g>
                                <path
                                  d="M89.95,145.834c-2.153-1.605-4.298-3.258-6.377-4.91c-4.409-3.506-10.826-2.774-14.331,1.636
                            c-3.505,4.409-2.773,10.825,1.636,14.331c2.241,1.782,4.554,3.564,6.874,5.294c1.832,1.366,3.97,2.025,6.091,2.025
                            c3.11,0,6.182-1.418,8.183-4.102C95.394,155.592,94.465,149.203,89.95,145.834z"
                                />
                              </g>
                            </g>
                            <g>
                              <g>
                                <path
                                  d="M222.328,196.399c-36.715-3.223-73.142-14.6-105.344-32.9c-4.898-2.783-11.123-1.07-13.907,3.828
                            c-2.783,4.898-1.07,11.123,3.828,13.907c34.73,19.738,74.026,32.009,113.639,35.487c0.304,0.026,0.605,0.04,0.904,0.04
                            c5.229,0,9.682-4,10.148-9.309C232.088,201.84,227.939,196.892,222.328,196.399z"
                                />
                              </g>
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
                        </a>
                      </li>
                      <li class="p-2 subTitle-01 rounded-sm">
                        <a href="#">
                          <svg
                            version="1.1"
                            class="w-4 h-4"
                            id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            width="169.063px"
                            height="169.063px"
                            viewBox="0 0 169.063 169.063"
                            style="fill: #ffffff"
                            xml:space="preserve"
                          >
                            <g>
                              <path
                                d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                               c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                               c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                               c17.455,0,31.656,14.201,31.656,31.655V122.407z"
                              />
                              <path
                                d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                               C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                               c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"
                              />
                              <path
                                d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                               c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                               C135.661,29.421,132.821,28.251,129.921,28.251z"
                              />
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
                        </a>
                      </li>
                      <li class="p-2 subTitle-01 rounded-sm">
                        <a href="#">
                          <svg
                            version="1.1"
                            class="w-4 h-4"
                            id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            viewBox="0 0 304.36 304.36"
                            style="fill: #ffffff"
                            xml:space="preserve"
                          >
                            <g id="XMLID_1_">
                              <path
                                id="XMLID_807_"
                                style="fill-rule: evenodd; clip-rule: evenodd"
                                d="M261.945,175.576c10.096,9.857,20.752,19.131,29.807,29.982
                        c4,4.822,7.787,9.798,10.684,15.394c4.105,7.955,0.387,16.709-6.746,17.184l-44.34-0.02c-11.436,0.949-20.559-3.655-28.23-11.474
                        c-6.139-6.253-11.824-12.908-17.727-19.372c-2.42-2.642-4.953-5.128-7.979-7.093c-6.053-3.929-11.307-2.726-14.766,3.587
                        c-3.523,6.421-4.322,13.531-4.668,20.687c-0.475,10.441-3.631,13.186-14.119,13.664c-22.414,1.057-43.686-2.334-63.447-13.641
                        c-17.422-9.968-30.932-24.04-42.691-39.971C34.828,153.482,17.295,119.395,1.537,84.353C-2.01,76.458,0.584,72.22,9.295,72.07
                        c14.465-0.281,28.928-0.261,43.41-0.02c5.879,0.086,9.771,3.458,12.041,9.012c7.826,19.243,17.402,37.551,29.422,54.521
                        c3.201,4.518,6.465,9.036,11.113,12.216c5.142,3.521,9.057,2.354,11.476-3.374c1.535-3.632,2.207-7.544,2.553-11.434
                        c1.146-13.383,1.297-26.743-0.713-40.079c-1.234-8.323-5.922-13.711-14.227-15.286c-4.238-0.803-3.607-2.38-1.555-4.799
                        c3.564-4.172,6.916-6.769,13.598-6.769h50.111c7.889,1.557,9.641,5.101,10.721,13.039l0.043,55.663
                        c-0.086,3.073,1.535,12.192,7.07,14.226c4.43,1.448,7.35-2.096,10.008-4.905c11.998-12.734,20.561-27.783,28.211-43.366
                        c3.395-6.852,6.314-13.968,9.143-21.078c2.096-5.276,5.385-7.872,11.328-7.757l48.229,0.043c1.43,0,2.877,0.021,4.262,0.258
                        c8.127,1.385,10.354,4.881,7.844,12.817c-3.955,12.451-11.65,22.827-19.174,33.251c-8.043,11.129-16.645,21.877-24.621,33.072
                        C252.26,161.544,252.842,166.697,261.945,175.576L261.945,175.576z M261.945,175.576"
                              />
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
                        </a>
                      </li>
                      <li class="p-2 subTitle-01 rounded-sm">
                        <a href="#">
                          <svg
                            version="1.1"
                            class="w-4 h-4"
                            id="Layer_1"
                            xmlns="http://www.w3.org/2000/svgCapa_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            viewBox="0 0 50.141 50.141"
                            style="fill: #ffffff"
                            xml:space="preserve"
                          >
                            <g>
                              <path
                                d="M44.092,12.485c-0.76-2.567-1.98-4.728-3.732-6.606c-1.713-1.837-3.684-3.23-6.026-4.259
                        c-2.668-1.169-5.761-1.737-8.716-1.6c-1.078,0.049-2.131,0.106-3.163,0.255c-2.908,0.416-5.469,1.283-7.828,2.65
                        C11.616,4.673,9.265,7.049,7.64,9.989c-0.844,1.53-1.675,4.228-2.028,5.99c-0.418,2.078-0.05,5.681,0.789,7.713
                        c1.048,2.533,1.91,3.656,4.013,5.223c0.013,0.009,1.313,0.945,2.179,0.931c1.577-0.03,1.891-1.539,2.041-2.264
                        c0.028-0.137,0.056-0.272,0.089-0.399c0.029-0.112,0.067-0.232,0.106-0.357c0.223-0.72,0.526-1.706,0.023-2.58
                        c-0.189-0.328-0.413-0.583-0.61-0.807c-0.107-0.122-0.215-0.24-0.302-0.37c-0.748-1.111-1.127-2.501-1.127-4.131
                        c0-2.139,0.484-4.077,1.481-5.923c1.808-3.349,4.808-5.462,8.677-6.114c2.202-0.369,4.768-0.214,6.693,0.402
                        c1.759,0.564,3.256,1.561,4.33,2.886c1.137,1.402,1.787,3.18,1.931,5.286c0.094,1.344-0.028,2.698-0.129,3.597
                        c-0.389,3.461-1.396,6.247-2.994,8.282c-1.309,1.67-2.72,2.507-4.315,2.561c-1.027,0.04-1.795-0.17-2.489-0.667
                        c-0.655-0.467-1.045-1.043-1.229-1.81c-0.208-0.876,0.043-1.784,0.31-2.746l0.043-0.154c0.233-0.846,0.477-1.619,0.716-2.38
                        c0.376-1.199,0.766-2.438,1.087-3.876c0.363-1.623,0.411-2.934,0.148-4.005c-0.324-1.33-1.039-2.326-2.125-2.962
                        c-1.149-0.67-2.777-0.799-4.144-0.329c-2.037,0.695-3.591,2.545-4.264,5.075c-0.341,1.285-0.44,2.634-0.293,4.006
                        c0.113,1.076,0.354,2.054,0.799,3.235c-0.015,0.051-0.031,0.105-0.047,0.157c-0.032,0.105-0.061,0.207-0.083,0.294
                        c-0.479,2-0.945,3.972-1.41,5.94c-0.441,1.869-0.883,3.735-1.334,5.62l-0.102,0.422c-0.462,1.92-0.938,3.906-1.049,6.277
                        l-0.05,0.99c-0.098,1.842-0.197,3.747,0.05,5.509c0.049,0.344,0.157,1.115,0.916,1.384c0.227,0.17,0.445,0.242,0.657,0.242
                        c0.635,0,1.2-0.645,1.681-1.192c1.569-1.784,2.903-4.037,4.079-6.885c0.526-1.274,0.875-2.645,1.212-3.971l0.203-0.79
                        c0.246-0.944,0.487-1.901,0.726-2.848l0.016-0.063c0.443,0.388,0.955,0.738,1.548,1.063c1.255,0.695,2.671,1.1,4.207,1.203
                        c1.44,0.098,2.956-0.087,4.629-0.567c1.271-0.362,2.487-0.913,3.617-1.636c4.054-2.596,6.817-7.137,7.781-12.786
                        c0.289-1.688,0.412-3.045,0.412-4.537C44.703,15.41,44.498,13.846,44.092,12.485z M42.32,21.332
                        c-0.869,5.088-3.315,9.15-6.889,11.438c-0.966,0.619-2.005,1.088-3.09,1.398c-1.446,0.416-2.738,0.577-3.942,0.495
                        c-1.261-0.085-2.364-0.398-3.379-0.96c-1.015-0.555-1.673-1.158-2.135-1.955l-1.226-2.118l-1.105,4.337
                        c-0.237,0.941-0.477,1.893-0.722,2.832l-0.205,0.802c-0.335,1.315-0.65,2.558-1.123,3.7c-1.053,2.552-2.229,4.571-3.589,6.163
                        c-0.106-1.355-0.026-2.875,0.052-4.352l0.051-1.002c0.101-2.182,0.556-4.073,0.995-5.902l0.103-0.425
                        c0.451-1.886,0.893-3.755,1.335-5.625c0.465-1.967,0.93-3.937,1.408-5.932c0.014-0.056,0.034-0.122,0.055-0.191
                        c0.12-0.403,0.245-0.82,0.076-1.243c-0.429-1.099-0.655-1.976-0.756-2.932c-0.12-1.13-0.041-2.234,0.238-3.282
                        c0.498-1.873,1.583-3.22,2.979-3.696c0.346-0.119,0.708-0.169,1.056-0.169c0.567,0,1.093,0.136,1.431,0.333
                        c0.607,0.356,0.997,0.914,1.19,1.71c0.185,0.756,0.133,1.797-0.156,3.094c-0.304,1.355-0.663,2.5-1.044,3.713
                        c-0.246,0.782-0.495,1.576-0.735,2.446l-0.042,0.152c-0.308,1.109-0.656,2.366-0.328,3.744c0.298,1.248,0.956,2.22,2.011,2.974
                        c1.048,0.749,2.278,1.084,3.72,1.039c2.191-0.074,4.149-1.193,5.821-3.325c1.831-2.332,2.978-5.458,3.409-9.295
                        c0.108-0.978,0.241-2.452,0.137-3.957c-0.174-2.524-0.972-4.68-2.373-6.408c-1.319-1.627-3.143-2.848-5.273-3.531
                        c-2.211-0.709-5.137-0.891-7.635-0.471c-4.5,0.758-7.994,3.225-10.106,7.136c-1.158,2.146-1.721,4.394-1.721,6.873
                        c0,2.036,0.493,3.801,1.467,5.247c0.134,0.2,0.294,0.386,0.46,0.574c0.149,0.17,0.29,0.33,0.376,0.479
                        c0.061,0.163-0.113,0.727-0.197,0.998c-0.047,0.153-0.092,0.3-0.128,0.437c-0.042,0.16-0.078,0.331-0.114,0.503
                        c-0.039,0.188-0.099,0.479-0.162,0.639c-0.237-0.093-0.67-0.331-0.904-0.504c-1.797-1.338-2.456-2.199-3.358-4.382
                        c-0.677-1.641-1.013-4.888-0.677-6.556c0.375-1.869,1.174-4.248,1.818-5.417c1.447-2.619,3.546-4.739,6.239-6.301
                        c2.133-1.236,4.457-2.022,7.109-2.401c0.943-0.137,1.943-0.19,2.971-0.237c2.65-0.125,5.429,0.385,7.819,1.433
                        c2.088,0.917,3.844,2.157,5.367,3.792c1.536,1.646,2.607,3.546,3.277,5.81c0.351,1.177,0.528,2.55,0.528,4.078
                        C42.703,18.505,42.588,19.761,42.32,21.332z"
                              />
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
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-span-8 mt-6">
          <div class="flex justify-between items-center">
            <div>
              <h2 class="title-01">Sort by:</h2>
            </div>
            <div class="hidden lg:block">
              <select
                name=""
                id=""
                class="outline-none border-[1px] w-[300px] p-2"
              >
                <option value="1">Sort by:</option>
                <option value="1">Sort by:</option>
                <option value="1">Sort by:</option>
                <option value="1">Sort by:</option>
              </select>
            </div>
          </div>
          <div class="border-t-2 relative my-6 z-[-1]">
            <span class="w-2/5 border-t-[1px] unde-01"></span>
          </div>
          <div class="lg:hidden w-full">
            <select
              name=""
              id=""
              class="outline-none border-[1px] w-full p-2 mb-6"
            >
              <option value="1">Sort by:</option>
              <option value="1">Sort by:</option>
              <option value="1">Sort by:</option>
              <option value="1">Sort by:</option>
            </select>
          </div>
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <section>
              <div class="border-[1px] rounded-sm">
                <div
                  class="w-full h-[200px] md:h-[300px] lg:h-[250px] relative rounded-sm"
                >
                  <a href="/content1/cate-single.html"
                    ><img
                      src="../img/1.jpg"
                      class="w-full h-full object-cover rounded-tr-sm rounded-tl-sm"
                  /></a>
                  <div
                    class="p-1 label-img-01 absolute top-0 right-0 font-semibold px-4 rounded-tr-sm"
                  >
                    <a href="#">Science</a>
                  </div>
                </div>
                <div class="flex flex-col px-4 py-2">
                  <div>
                    <h3 class="title-post-01">
                      <a href="/content1/cate-single.html">
                        Goodwin must Break Clackson hold on Flags</a
                      >
                    </h3>
                    <span class="flex justify-start items-center gap-2">
                      <svg
                        version="1.1"
                        class="w-4 h-4 svgColor-01"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        width="97.16px"
                        height="97.16px"
                        viewBox="0 0 97.16 97.16"
                        style="enable-background: new 0 0 97.16 97.16"
                        xml:space="preserve"
                      >
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"
                            />
                            <path
                              d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"
                            />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                  </div>

                  <div>
                    <p class="line-clamp-2 content-01">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Sapiente repellat velit incidunt temporibus explicabo hic
                      ex dicta? Libero hic soluta provident alias cum nobis
                      totam officiis, nemo harum, rem temporibus!
                    </p>
                  </div>
                </div>
                <div class="py-2 border-t-[1px]">
                  <div class="flex justify-between items-center px-4">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[36px] h-[36px] rounded-full">
                        <img
                          src="../img/1.jpg"
                          class="w-full h-full object-cover rounded-full"
                        />
                      </div>
                      <p class="author-01">BY JANE TAYLOR</p>
                    </div>
                    <div class="flex items-end gap-2">
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          id="Capa_1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px"
                          y="0px"
                          width="485.87px"
                          height="485.869px"
                          viewBox="0 0 485.87 485.869"
                          style="enable-background: new 0 0 485.87 485.869"
                          xml:space="preserve"
                        >
                          <g>
                            <g>
                              <path
                                d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                        c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                        C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                        c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                        M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                        C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                        c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z"
                              />
                            </g>
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

                        <span class="count-01">6</span>
                      </div>
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          enable-background="new 0 0 512 512"
                        >
                          <g>
                            <g>
                              <path
                                d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z"
                              />
                              <path
                                d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z"
                              />
                            </g>
                          </g>
                        </svg>

                        <span class="count-01">587</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="border-[1px] rounded-sm">
                <div
                  class="w-full h-[200px] md:h-[300px] lg:h-[250px] relative rounded-sm"
                >
                  <a href="/content1/cate-single.html"
                    ><img
                      src="../img/1.jpg"
                      class="w-full h-full object-cover rounded-tr-sm rounded-tl-sm"
                  /></a>
                  <div
                    class="p-1 label-img-01 absolute top-0 right-0 font-semibold px-4 rounded-tr-sm"
                  >
                    <a href="#">Science</a>
                  </div>
                </div>
                <div class="flex flex-col px-4 py-2">
                  <div>
                    <h3 class="title-post-01">
                      <a href="/content1/cate-single.html">
                        Goodwin must Break Clackson hold on Flags</a
                      >
                    </h3>
                    <span class="flex justify-start items-center gap-2">
                      <svg
                        version="1.1"
                        class="w-4 h-4 svgColor-01"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        width="97.16px"
                        height="97.16px"
                        viewBox="0 0 97.16 97.16"
                        style="enable-background: new 0 0 97.16 97.16"
                        xml:space="preserve"
                      >
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"
                            />
                            <path
                              d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"
                            />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                  </div>

                  <div>
                    <p class="line-clamp-2 content-01">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Sapiente repellat velit incidunt temporibus explicabo hic
                      ex dicta? Libero hic soluta provident alias cum nobis
                      totam officiis, nemo harum, rem temporibus!
                    </p>
                  </div>
                </div>
                <div class="py-2 border-t-[1px]">
                  <div class="flex justify-between items-center px-4">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[36px] h-[36px] rounded-full">
                        <img
                          src="../img/1.jpg"
                          class="w-full h-full object-cover rounded-full"
                        />
                      </div>
                      <p class="author-01">BY JANE TAYLOR</p>
                    </div>
                    <div class="flex items-end gap-2">
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          id="Capa_1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px"
                          y="0px"
                          width="485.87px"
                          height="485.869px"
                          viewBox="0 0 485.87 485.869"
                          style="enable-background: new 0 0 485.87 485.869"
                          xml:space="preserve"
                        >
                          <g>
                            <g>
                              <path
                                d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                      c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                      C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                      c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                      M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                      C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                      c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z"
                              />
                            </g>
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

                        <span class="count-01">6</span>
                      </div>
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          enable-background="new 0 0 512 512"
                        >
                          <g>
                            <g>
                              <path
                                d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z"
                              />
                              <path
                                d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z"
                              />
                            </g>
                          </g>
                        </svg>

                        <span class="count-01">587</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="border-[1px] rounded-sm">
                <div
                  class="w-full h-[200px] md:h-[300px] lg:h-[250px] relative rounded-sm"
                >
                  <a href="/content1/cate-single.html"
                    ><img
                      src="../img/1.jpg"
                      class="w-full h-full object-cover rounded-tr-sm rounded-tl-sm"
                  /></a>
                  <div
                    class="p-1 label-img-01 absolute top-0 right-0 font-semibold px-4 rounded-tr-sm"
                  >
                    <a href="#">Science</a>
                  </div>
                </div>
                <div class="flex flex-col px-4 py-2">
                  <div>
                    <h3 class="title-post-01">
                      <a href="/content1/cate-single.html">
                        Goodwin must Break Clackson hold on Flags</a
                      >
                    </h3>
                    <span class="flex justify-start items-center gap-2">
                      <svg
                        version="1.1"
                        class="w-4 h-4 svgColor-01"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        width="97.16px"
                        height="97.16px"
                        viewBox="0 0 97.16 97.16"
                        style="enable-background: new 0 0 97.16 97.16"
                        xml:space="preserve"
                      >
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                  c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"
                            />
                            <path
                              d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                  c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"
                            />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                  </div>

                  <div>
                    <p class="line-clamp-2 content-01">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Sapiente repellat velit incidunt temporibus explicabo hic
                      ex dicta? Libero hic soluta provident alias cum nobis
                      totam officiis, nemo harum, rem temporibus!
                    </p>
                  </div>
                </div>
                <div class="py-2 border-t-[1px]">
                  <div class="flex justify-between items-center px-4">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[36px] h-[36px] rounded-full">
                        <img
                          src="../img/1.jpg"
                          class="w-full h-full object-cover rounded-full"
                        />
                      </div>
                      <p class="author-01">BY JANE TAYLOR</p>
                    </div>
                    <div class="flex items-end gap-2">
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          id="Capa_1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px"
                          y="0px"
                          width="485.87px"
                          height="485.869px"
                          viewBox="0 0 485.87 485.869"
                          style="enable-background: new 0 0 485.87 485.869"
                          xml:space="preserve"
                        >
                          <g>
                            <g>
                              <path
                                d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                    c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                    C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                    c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                    M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                    C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                    c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z"
                              />
                            </g>
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

                        <span class="count-01">6</span>
                      </div>
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          enable-background="new 0 0 512 512"
                        >
                          <g>
                            <g>
                              <path
                                d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z"
                              />
                              <path
                                d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z"
                              />
                            </g>
                          </g>
                        </svg>

                        <span class="count-01">587</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="border-[1px] rounded-sm">
                <div
                  class="w-full h-[200px] md:h-[300px] lg:h-[250px] relative rounded-sm"
                >
                  <a href="/content1/cate-single.html"
                    ><img
                      src="../img/1.jpg"
                      class="w-full h-full object-cover rounded-tr-sm rounded-tl-sm"
                  /></a>
                  <div
                    class="p-1 label-img-01 absolute top-0 right-0 font-semibold px-4 rounded-tr-sm"
                  >
                    <a href="#">Science</a>
                  </div>
                </div>
                <div class="flex flex-col px-4 py-2">
                  <div>
                    <h3 class="title-post-01">
                      <a href="/content1/cate-single.html">
                        Goodwin must Break Clackson hold on Flags</a
                      >
                    </h3>
                    <span class="flex justify-start items-center gap-2">
                      <svg
                        version="1.1"
                        class="w-4 h-4 svgColor-01"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        width="97.16px"
                        height="97.16px"
                        viewBox="0 0 97.16 97.16"
                        style="enable-background: new 0 0 97.16 97.16"
                        xml:space="preserve"
                      >
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"
                            />
                            <path
                              d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"
                            />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                  </div>

                  <div>
                    <p class="line-clamp-2 content-01">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Sapiente repellat velit incidunt temporibus explicabo hic
                      ex dicta? Libero hic soluta provident alias cum nobis
                      totam officiis, nemo harum, rem temporibus!
                    </p>
                  </div>
                </div>
                <div class="py-2 border-t-[1px]">
                  <div class="flex justify-between items-center px-4">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[36px] h-[36px] rounded-full">
                        <img
                          src="../img/1.jpg"
                          class="w-full h-full object-cover rounded-full"
                        />
                      </div>
                      <p class="author-01">BY JANE TAYLOR</p>
                    </div>
                    <div class="flex items-end gap-2">
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          id="Capa_1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px"
                          y="0px"
                          width="485.87px"
                          height="485.869px"
                          viewBox="0 0 485.87 485.869"
                          style="enable-background: new 0 0 485.87 485.869"
                          xml:space="preserve"
                        >
                          <g>
                            <g>
                              <path
                                d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                  c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                  C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                  c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                  M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                  C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                  c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z"
                              />
                            </g>
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

                        <span class="count-01">6</span>
                      </div>
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          enable-background="new 0 0 512 512"
                        >
                          <g>
                            <g>
                              <path
                                d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z"
                              />
                              <path
                                d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z"
                              />
                            </g>
                          </g>
                        </svg>

                        <span class="count-01">587</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="flex justify-between items-center mt-2">
            <div>
              <ul
                class="flex justify-start items-center border-[1px] rounded-md pagination-01"
              >
                <li
                  class="active-01 border-[1px] p-2 px-3 font-semibold"
                  id="one1"
                >
                  <a href="#" onclick="handleActiveMobile(1)">1 </a>
                </li>
                <li class="border-[1px] p-2 px-3 font-semibold" id="two1">
                  <a href="#" onclick="handleActiveMobile(2)"> 2</a>
                </li>
                <li class="border-[1px] p-2 px-3 font-semibold" id="three1">
                  <a href="#" onclick="handleActiveMobile(3)"> 3</a>
                </li>
                <li class="border-[1px] p-2 px-3 font-semibold" id="four1">
                  <a href="#" onclick="handleActiveMobile(4)"> 4 </a>
                </li>
              </ul>
            </div>
            <button class="button-load-01 p-2 rounded-md px-6">
              Load more
            </button>
          </div>
        </div>
      </div>
    </div>',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'policy',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'js_handle' => '',
                'html' => '<div class="h-[200px] z-[-1]">
      <img src="../img/1.jpg" class="w-full h-full object-cover" />
    </div>
    <div class="sub-direct-01 py-6">
      <div
        class="flex justify-start items-start gap-2 px-2 md:px-8 xl:px-[88px]"
      >
        <a href="#" class="active">Home</a>
        <span>></span>
        <a href="#">Policy</a>
      </div>
    </div>
    <div class="content px-2 md:px-8 xl:px-[88px] mt-2">
      <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 xl:gap-[150px] mt-10">
        <section>
          <div class="flex justify-between items-center">
            <div>
              <h2 class="title-01">Our Policy</h2>
            </div>

            <svg
              version="1.1"
              class="w-4 h-4 svgColor-01"
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
          </div>
          <div class="border-t-2 relative my-6 z-[-1]">
            <span class="w-2/5 border-t-[1px] unde-01"></span>
          </div>
          <p class="pb-6">
            Aliquam luctus tempor orci sit amet finibus. Duis porttitor, ex ac
            molestie consectetur, metus tellus venenatis velit, et interdum enim
            lorem a purus. Fusce scelerisque, massa vitae rhoncus elementum,
            enim acinia pharetra? Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget
            dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum
            elementum. Suspendisse id neque a nibh mollis blandit. Quisque
            varius eros ac purus dignissim. Proin eu ultrices libero.
          </p>
          <button
            class="subTitle-01 flex justify-start items-center gap-2 p-2 px-4 border-[1px] rounded-md font-semibold"
          >
            Our terms
          </button>
        </section>

        <section>
          <div class="relative">
            <div class="w-full h-[300px] lg:h-[400px]">
              <img
                src="../img/1.jpg"
                alt=""
                class="w-full h-[300px] lg:h-[400px] object-cover"
              />
            </div>

            <div
              class="w-full p-8 label-img-01 xl:absolute xl:right-[-25px] xl:bottom-[20px] xl:max-w-[300px] rounded-md mt-10"
            >
              <span class="font-semibold"
                >Your website is fully responsive so visitors can view your
                content from their choice of device.</span
              >
              <div class="flex justify-between items-center pt-4">
                <h2>Mark Antony Gmag CEO</h2>
                <div class="w-full flex justify-end">
                  <svg
                    width="24px"
                    height="24px"
                    viewBox="0 0 24 24"
                    id="quote_mark"
                    data-name="quote mark"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect
                      id="Rectangle_3"
                      data-name="Rectangle 3"
                      width="24"
                      height="24"
                      fill="none"
                    />
                    <path
                      id="Rectangle"
                      d="M0,3A3,3,0,0,1,3,0H5A3,3,0,0,1,8,3V4c0,6-2.028,10-7,10,4-3.962,3-6,3-6H3A3,3,0,0,1,0,5Z"
                      transform="translate(2 5)"
                      fill="#FFFFFF"
                      stroke="#FFFFFF"
                      stroke-linejoin="round"
                      stroke-miterlimit="10"
                      stroke-width="1.5"
                    />
                    <path
                      id="Rectangle-2"
                      data-name="Rectangle"
                      d="M0,3A3,3,0,0,1,3,0H5A3,3,0,0,1,8,3V4c0,6-2.028,10-7,10,4-3.962,3-6,3-6H3A3,3,0,0,1,0,5Z"
                      transform="translate(14 5)"
                      fill="#FFFFFF"
                      stroke="#FFFFFF"
                      stroke-linejoin="round"
                      stroke-miterlimit="10"
                      stroke-width="1.5"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'post-single',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'js_handle' => '<script>
    function sideChange() {
      var popular = document.querySelector("#popular");
      var newPost = document.querySelector("#new");
      if (popular.classList.contains("active-01")) {
        popular.classList.remove("active-01");
        newPost.classList.add("active-01");
      } else {
        popular.classList.add("active-01");
        newPost.classList.remove("active-01");
      }
    }
  </script>',
                'html' => '<div class="h-[200px] z-[-1]">
    <img src="../img/1.jpg" class="w-full h-full object-cover" />
  </div>
  <div class="sub-direct-01 py-6">
    <div class="flex justify-start items-start gap-2 px-2 md:px-8 xl:px-[88px]">
      <a href="#" class="active">Home</a>
      <span>></span>
      <a href="#">Categories</a>
      <span>></span>
      <a href="#">Detail Post</a>
    </div>
  </div>
  <div class="content px-2 md:px-8 xl:px-[88px] mt-2">
    <div class="grid grid-cols-1 xl:grid-cols-12 xl:gap-6">
      <div class="col-span-8 mt-6">
        <div class="border-b-[1px] pb-4">
          <div class="w-full h-[400px] rounded-md">
            <img src="../img/1.jpg" class="w-full h-full object-cover rounded0md" />
          </div>
        </div>
        <section>
          <div class="border-b-[1px] pb-4">
            <div class="content-post-01 pt-2">
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Atque sunt vel excepturi quos cum eveniet, voluptatum quod
                nesciunt earum molestias praesentium non facere! Corrupti
                harum dicta, minima nam incidunt libero? Lorem ipsum dolor sit
                amet consectetur adipisicing elit. Id dicta expedita odio
                itaque eveniet consequuntur nostrum obcaecati, debitis minus,
                ullam labore, delectus est vitae? Numquam, eligendi. Quo
                consectetur voluptatum facere.
              </p>
              <h2 class="py-2 title-01">Middle Post Heading</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Laudantium deleniti quidem nostrum. Sint, asperiores ab.
                Quibusdam doloribus voluptatum quas provident optio, facere
                laborum cum deserunt amet cumque iste est quo.
              </p>
              <div class="flex flex-col lg:flex-row justify-start items-start gap-4 py-2">
                <div class="w-full h-[300px] rounded-md">
                  <img src="../img/2.jpg" class="w-full h-full object-cover rounded-md" />
                </div>
                <p class="max-w-[600px] overflow-hidden max-h-[295px]">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Vero, laborum voluptate distinctio eveniet non possimus
                  delectus sed consectetur nobis veniam modi quos obcaecati
                  perferendis maiores optio. Atque accusantium optio ad?Lorem
                  ipsum dolor sit amet consectetur, adipisicing elit. Facilis
                  rem ea et quisquam praesentium, nemo eligendi, ipsum, aut
                  delectus tempora cupiditate reprehenderit repudiandae enim
                  culpa officiis? Molestias quis at harum!Lorem ipsum dolor
                  sit amet Lorem ipsum dolor sit amet consectetur, adipisicing
                  elit. Vero, laborum voluptate distinctio eveniet non
                  possimus delectus sed consectetur nobis veniam modi quos
                  obcaecati perferendis maiores optio. Atque accusantium optio
                  ad?Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Facilis rem ea et quisquam praesentium, nemo eligendi,
                  ipsum, aut delectus tempora cupiditate reprehenderit
                  repudiandae enim culpa officiis? Molestias quis at
                  harum!Lorem ipsum dolor sit amet
                </p>
              </div>

              <p class="py-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem
                numquam ipsum dignissimos. Illo itaque modi placeat, vitae
                voluptatibus deleniti mollitia, impedit similique sequi
                explicabo, consequuntur laborum voluptatum commodi est quis!
              </p>
              <h2 class="py-2 title-01">Middle Post Heading</h2>
              <div class="flex flex-col lg:flex-row justify-start items-start gap-4 py-2">
                <p class="max-w-[500px] overflow-hidden max-h-[295px]">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Vero, laborum voluptate distinctio eveniet non possimus
                  delectus sed consectetur nobis veniam modi quos obcaecati
                  perferendis maiores optio. Atque accusantium optio ad?Lorem
                  ipsum dolor sit amet consectetur, adipisicing elit. Facilis
                  rem ea et quisquam praesentium, nemo eligendi, ipsum, aut
                  delectus tempora cupiditate reprehenderit repudiandae enim
                  culpa officiis? Molestias quis at harum!Lorem ipsum dolor
                  sit amet Lorem ipsum dolor sit amet consectetur, adipisicing
                  elit. Vero, laborum voluptate distinctio eveniet non
                  possimus delectus sed consectetur nobis veniam modi quos
                  obcaecati perferendis maiores optio. Atque accusantium optio
                  ad?Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Facilis rem ea et quisquam praesentium, nemo eligendi,
                  ipsum, aut delectus tempora cupiditate reprehenderit
                  repudiandae enim culpa officiis? Molestias quis at
                  harum!Lorem ipsum dolor sit amet
                </p>
                <div class="w-full h-[300px] rounded-md">
                  <img src="../img/3.jpg" class="w-full h-full object-cover rounded-md" />
                </div>
              </div>
              <p class="py-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem
                numquam ipsum dignissimos. Illo itaque modi placeat, vitae
                voluptatibus deleniti mollitia, impedit similique sequi
                explicabo, consequuntur laborum voluptatum commodi est quis!
              </p>
            </div>
          </div>
        </section>
        <section>
          <div class="border-b-[1px] pb-4">
            <div class="flex justify-between items-center pt-4">
              <div class="flex justify-start items-center gap-2">
                <div class="w-[36px] h-[36px] rounded-full">
                  <img src="../img/1.jpg" class="w-full h-full object-cover rounded-full" />
                </div>
                <p class="author-01">BY JANE TAYLOR</p>
              </div>
              <div class="flex items-center gap-2">
                <h2 class="author-01">Đánh giá:</h2>
                <div class="rating-01">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="border-b-[1px] pb-4">
            <div class="flex flex-col md:flex-row items-start justify-start md:items-center gap-2 pt-4">
              <div class="flex justify-start items-center gap-2">
                <div class="rating-01">
                  <i class="fa fa-tag"></i>
                </div>
                <p class="sub-cate-01">Tags:</p>
              </div>

              <div>
                <ul class="flex flex-wrap gap-2">
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="pt-4">
            <div class="tag-01">
              <h2>Leave a comment</h2>
            </div>
            <div class="flex justify-between items-center gap-4 mt-4">
              <input type="text" class="border-[1px] rounded-md w-full p-2 outline-none focus:shadow-lg"
                placeholder="Your name*" />
              <input type="text" class="border-[1px] rounded-md w-full p-2 outline-none focus:shadow-lg"
                placeholder="Your email*" />
            </div>
            <div class="py-4">
              <textarea name="" id="" cols="30" rows="10"
                class="border-[1px] rounded-md w-full p-2 outline-none focus:shadow-lg"
                placeholder="Your comment"></textarea>
            </div>
            <button class="p-2 px-8 subTitle-01 rounded-md font-bold outline-none">
              Submit
            </button>
          </div>
        </section>
      </div>
      <div class="col-span-4">
        <div>
          <button class="w-full p-3 border-2 bgNew-01 rounded-md my-6 font-bold">
            Read all News
          </button>
          <ul class="flex justify-center items-center w-full">
            <li class="w-full bgPopular-01 p-3 my-3 active-01" id="popular">
              <a href="#" onclick="sideChange()">Popular news</a>
            </li>
            <li class="w-full p-3 bgPopular-01 my-3" id="new">
              <a href="#" onclick="sideChange()">Resent news</a>
            </li>
          </ul>
          <div class="p-6 bg-slate-100">
            <section>
              <div class="flex justify-start items-start gap-4 border-b-2 pb-4">
                <div class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md">
                  <img src="../img/1.jpg" class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md" />
                </div>
                <div class="w-[160px] md:w-full">
                  <h3 class="truncate title-post-new-01">
                    How to start Home education
                  </h3>
                  <div class="flex flex-wrap gap-2">
                    <span class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                    <div class="flex gap-1">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                        viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                        xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                                c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                                C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                                c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                                M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                                C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                                c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                          </g>
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

                      <span class="count-01">6</span>
                    </div>
                    <div class="flex gap-1">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                        enable-background="new 0 0 512 512">
                        <g>
                          <g>
                            <path
                              d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                            <path
                              d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                          </g>
                        </g>
                      </svg>

                      <span class="count-01">587</span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="flex justify-start items-start gap-4 border-b-2 pb-4 mt-4">
                <div class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md">
                  <img src="../img/1.jpg" class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md" />
                </div>
                <div class="w-[160px] md:w-full">
                  <h3 class="truncate title-post-new-01">
                    How to start Home education
                  </h3>
                  <div class="flex flex-wrap gap-2">
                    <span class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                    <div class="flex gap-1">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                        viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                        xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                                c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                                C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                                c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                                M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                                C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                                c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                          </g>
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

                      <span class="count-01">6</span>
                    </div>
                    <div class="flex gap-1">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                        enable-background="new 0 0 512 512">
                        <g>
                          <g>
                            <path
                              d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                            <path
                              d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                          </g>
                        </g>
                      </svg>

                      <span class="count-01">587</span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="flex justify-start items-start gap-4 border-b-2 pb-4 mt-4">
                <div class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md">
                  <img src="../img/1.jpg" class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md" />
                </div>
                <div class="w-[160px] md:w-full">
                  <h3 class="truncate title-post-new-01">
                    How to start Home education
                  </h3>
                  <div class="flex flex-wrap gap-2">
                    <span class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                    <div class="flex gap-1">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                        viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                        xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                                c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                                C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                                c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                                M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                                C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                                c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                          </g>
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

                      <span class="count-01">6</span>
                    </div>
                    <div class="flex gap-1">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                        enable-background="new 0 0 512 512">
                        <g>
                          <g>
                            <path
                              d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                            <path
                              d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                          </g>
                        </g>
                      </svg>

                      <span class="count-01">587</span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="flex justify-start items-start gap-4 pb-4 mt-4">
                <div class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md">
                  <img src="../img/1.jpg" class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md" />
                </div>
                <div class="w-[160px] md:w-full">
                  <h3 class="truncate title-post-new-01">
                    How to start Home education
                  </h3>
                  <div class="flex flex-wrap gap-2">
                    <span class="flex justify-start items-center gap-2">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.16px" height="97.16px"
                        viewBox="0 0 97.16 97.16" style="enable-background: new 0 0 97.16 97.16" xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                            <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                    <div class="flex gap-1">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="485.87px" height="485.869px"
                        viewBox="0 0 485.87 485.869" style="enable-background: new 0 0 485.87 485.869"
                        xml:space="preserve">
                        <g>
                          <g>
                            <path
                              d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                                c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                                C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                                c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                                M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                                C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                                c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                          </g>
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

                      <span class="count-01">6</span>
                    </div>
                    <div class="flex gap-1">
                      <svg version="1.1" class="w-4 h-4 svgColor-01" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink"
                        enable-background="new 0 0 512 512">
                        <g>
                          <g>
                            <path
                              d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z" />
                            <path
                              d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z" />
                          </g>
                        </g>
                      </svg>

                      <span class="count-01">587</span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <section>
          <div class="py-10">
            <div>
              <h2 class="tag-01">Categories</h2>
            </div>
            <div class="border-t-2 relative my-6 z-[-1]">
              <span class="w-1/4 border-t-[1px] unde-01"></span>
            </div>

            <section>
              <div class="flex justify-between items-center gap-6">
                <a href="#" class="sub-cate-01"> Science </a>
                <div class="w-full relative border-t-[1px] border-dashed sub-cate-01 top-0 left-0"></div>

                <div class="cate-count-01 p-2 px-3 rounded-md">
                  <span>1</span>
                </div>
              </div>
            </section>
            <section>
              <div class="flex justify-between items-center gap-6 pt-3">
                <a href="#" class="sub-cate-01"> Science </a>
                <div class="w-full relative border-t-[1px] border-dashed sub-cate-01 top-0 left-0"></div>

                <div class="cate-count-01 p-2 px-3 rounded-md">
                  <span>1</span>
                </div>
              </div>
            </section>
            <section>
              <div class="flex justify-between items-center gap-6 pt-3">
                <a href="#" class="sub-cate-01"> Science </a>
                <div class="w-full relative border-t-[1px] border-dashed sub-cate-01 top-0 left-0"></div>

                <div class="cate-count-01 p-2 px-3 rounded-md">
                  <span>1</span>
                </div>
              </div>
            </section>
            <section>
              <div class="flex justify-between items-center gap-6 pt-3">
                <a href="#" class="sub-cate-01"> Science </a>
                <div class="w-full relative border-t-[1px] border-dashed sub-cate-01 top-0 left-0"></div>

                <div class="cate-count-01 p-2 px-3 rounded-md">
                  <span>1</span>
                </div>
              </div>
            </section>
          </div>
        </section>
        <section>
          <div class="py-10">
            <div>
              <h2 class="tag-01">Popular Tags</h2>
            </div>
            <div class="border-t-2 relative my-6 z-[-1]">
              <span class="w-1/4 border-t-[1px] unde-01"></span>
            </div>
            <div>
              <ul class="flex flex-wrap gap-2">
                <li class="bgNew-01 p-2 px-4">
                  <a href="#">Lorem</a>
                </li>
                <li class="bgNew-01 p-2 px-4">
                  <a href="#">Lorem</a>
                </li>
                <li class="bgNew-01 p-2 px-4">
                  <a href="#">Lorem</a>
                </li>
                <li class="bgNew-01 p-2 px-4">
                  <a href="#">Lorem</a>
                </li>
                <li class="bgNew-01 p-2 px-4">
                  <a href="#">Lorem</a>
                </li>
                <li class="bgNew-01 p-2 px-4">
                  <a href="#">Lorem</a>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <section>
          <div>
            <div>
              <h2 class="tag-01">About us</h2>
            </div>
            <div class="border-t-2 relative my-6 z-[-1]">
              <span class="w-1/4 border-t-[1px] unde-01"></span>
            </div>
            <section>
              <div class="border-[1px] rounded-md comment-01 p-6">
                <p class="line-clamp-2 content-01">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Ipsa ducimus quos vero magni eveniet aspernatur quam quae
                  omnis! Tenetur dolores vero corrupti eaque iusto quisquam
                  sequi, adipisci minima qui assumenda.
                </p>
              </div>
              <div class="flex justify-between items-center py-2">
                <div class="day-01 flex gap-2">
                  <p>Đã đăng 12 giờ trước</p>
                </div>
                <div class="flex justify-center items-center gap-2">
                  <a href="#"><svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      width="485.87px" height="485.869px" viewBox="0 0 485.87 485.869"
                      style="enable-background: new 0 0 485.87 485.869" xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                        c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                        C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                        c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                        M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                        C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                        c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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
                  </a>
                  <a href="#">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490 490"
                      style="enable-background: new 0 0 490 490" xml:space="preserve">
                      <path id="XMLID_25_" d="M316.554,108.336c4.553,6.922,2.629,16.223-4.296,20.774c-3.44,2.261-6.677,4.928-9.621,7.929
    c-2.938,2.995-6.825,4.497-10.715,4.497c-3.791,0-7.585-1.427-10.506-4.291c-5.917-5.801-6.009-15.298-0.207-21.212
    c4.439-4.524,9.338-8.559,14.562-11.992C302.698,99.491,312.002,101.414,316.554,108.336z M447.022,285.869
    c-1.506,1.536-148.839,151.704-148.839,151.704C283.994,452.035,265.106,460,245,460s-38.994-7.965-53.183-22.427L42.978,285.869
    c-57.304-58.406-57.304-153.441,0-211.847C70.83,45.634,107.882,30,147.31,30c36.369,0,70.72,13.304,97.69,37.648
    C271.971,43.304,306.32,30,342.689,30c39.428,0,76.481,15.634,104.332,44.021C504.326,132.428,504.326,227.463,447.022,285.869z
     M425.596,95.028C403.434,72.44,373.991,60,342.69,60c-31.301,0-60.745,12.439-82.906,35.027c-1.122,1.144-2.129,2.533-3.538,3.777
    c-7.536,6.654-16.372,6.32-22.491,0c-1.308-1.352-2.416-2.633-3.538-3.777C208.055,72.44,178.612,60,147.31,60
    c-31.301,0-60.744,12.439-82.906,35.027c-45.94,46.824-45.94,123.012,0,169.836c1.367,1.393,148.839,151.704,148.839,151.704
    C221.742,425.229,233.02,430,245,430c11.98,0,23.258-4.771,31.757-13.433l148.839-151.703l0,0
    C471.535,218.04,471.535,141.852,425.596,95.028z M404.169,116.034c-8.975-9.148-19.475-16.045-31.208-20.499
    c-7.746-2.939-16.413,0.953-19.355,8.698c-2.942,7.744,0.953,16.407,8.701,19.348c7.645,2.902,14.521,7.431,20.436,13.459
    c23.211,23.658,23.211,62.153,0,85.811l-52.648,53.661c-5.803,5.915-5.711,15.412,0.206,21.212
    c2.921,2.863,6.714,4.291,10.506,4.291c3.889,0,7.776-1.502,10.714-4.497l52.648-53.661
    C438.744,208.616,438.744,151.275,404.169,116.034z" />
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
                    </svg></a>
                </div>
              </div>
            </section>
            <section>
              <div class="border-[1px] rounded-md comment-01 p-6">
                <p class="line-clamp-2 content-01">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Ipsa ducimus quos vero magni eveniet aspernatur quam quae
                  omnis! Tenetur dolores vero corrupti eaque iusto quisquam
                  sequi, adipisci minima qui assumenda.
                </p>
              </div>
              <div class="flex justify-between items-center py-2">
                <div class="day-01 flex gap-2">
                  <p>Đã đăng 12 giờ trước</p>
                </div>
                <div class="flex justify-center items-center gap-2">
                  <a href="#"><svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      width="485.87px" height="485.869px" viewBox="0 0 485.87 485.869"
                      style="enable-background: new 0 0 485.87 485.869" xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                        c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                        C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                        c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                        M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                        C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                        c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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
                  </a>
                  <a href="#">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490 490"
                      style="enable-background: new 0 0 490 490" xml:space="preserve">
                      <path id="XMLID_25_" d="M316.554,108.336c4.553,6.922,2.629,16.223-4.296,20.774c-3.44,2.261-6.677,4.928-9.621,7.929
    c-2.938,2.995-6.825,4.497-10.715,4.497c-3.791,0-7.585-1.427-10.506-4.291c-5.917-5.801-6.009-15.298-0.207-21.212
    c4.439-4.524,9.338-8.559,14.562-11.992C302.698,99.491,312.002,101.414,316.554,108.336z M447.022,285.869
    c-1.506,1.536-148.839,151.704-148.839,151.704C283.994,452.035,265.106,460,245,460s-38.994-7.965-53.183-22.427L42.978,285.869
    c-57.304-58.406-57.304-153.441,0-211.847C70.83,45.634,107.882,30,147.31,30c36.369,0,70.72,13.304,97.69,37.648
    C271.971,43.304,306.32,30,342.689,30c39.428,0,76.481,15.634,104.332,44.021C504.326,132.428,504.326,227.463,447.022,285.869z
     M425.596,95.028C403.434,72.44,373.991,60,342.69,60c-31.301,0-60.745,12.439-82.906,35.027c-1.122,1.144-2.129,2.533-3.538,3.777
    c-7.536,6.654-16.372,6.32-22.491,0c-1.308-1.352-2.416-2.633-3.538-3.777C208.055,72.44,178.612,60,147.31,60
    c-31.301,0-60.744,12.439-82.906,35.027c-45.94,46.824-45.94,123.012,0,169.836c1.367,1.393,148.839,151.704,148.839,151.704
    C221.742,425.229,233.02,430,245,430c11.98,0,23.258-4.771,31.757-13.433l148.839-151.703l0,0
    C471.535,218.04,471.535,141.852,425.596,95.028z M404.169,116.034c-8.975-9.148-19.475-16.045-31.208-20.499
    c-7.746-2.939-16.413,0.953-19.355,8.698c-2.942,7.744,0.953,16.407,8.701,19.348c7.645,2.902,14.521,7.431,20.436,13.459
    c23.211,23.658,23.211,62.153,0,85.811l-52.648,53.661c-5.803,5.915-5.711,15.412,0.206,21.212
    c2.921,2.863,6.714,4.291,10.506,4.291c3.889,0,7.776-1.502,10.714-4.497l52.648-53.661
    C438.744,208.616,438.744,151.275,404.169,116.034z" />
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
                    </svg></a>
                </div>
              </div>
            </section>
            <section>
              <div class="border-[1px] rounded-md comment-01 p-6">
                <p class="line-clamp-2 content-01">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Ipsa ducimus quos vero magni eveniet aspernatur quam quae
                  omnis! Tenetur dolores vero corrupti eaque iusto quisquam
                  sequi, adipisci minima qui assumenda.
                </p>
              </div>
              <div class="flex justify-between items-center py-2">
                <div class="day-01 flex gap-2">
                  <p>Đã đăng 12 giờ trước</p>
                </div>
                <div class="flex justify-center items-center gap-2">
                  <a href="#"><svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      width="485.87px" height="485.869px" viewBox="0 0 485.87 485.869"
                      style="enable-background: new 0 0 485.87 485.869" xml:space="preserve">
                      <g>
                        <g>
                          <path
                            d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                        c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                        C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                        c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                        M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                        C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                        c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z" />
                        </g>
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
                  </a>
                  <a href="#">
                    <svg version="1.1" class="w-4 h-4 svgColor-01" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490 490"
                      style="enable-background: new 0 0 490 490" xml:space="preserve">
                      <path id="XMLID_25_" d="M316.554,108.336c4.553,6.922,2.629,16.223-4.296,20.774c-3.44,2.261-6.677,4.928-9.621,7.929
    c-2.938,2.995-6.825,4.497-10.715,4.497c-3.791,0-7.585-1.427-10.506-4.291c-5.917-5.801-6.009-15.298-0.207-21.212
    c4.439-4.524,9.338-8.559,14.562-11.992C302.698,99.491,312.002,101.414,316.554,108.336z M447.022,285.869
    c-1.506,1.536-148.839,151.704-148.839,151.704C283.994,452.035,265.106,460,245,460s-38.994-7.965-53.183-22.427L42.978,285.869
    c-57.304-58.406-57.304-153.441,0-211.847C70.83,45.634,107.882,30,147.31,30c36.369,0,70.72,13.304,97.69,37.648
    C271.971,43.304,306.32,30,342.689,30c39.428,0,76.481,15.634,104.332,44.021C504.326,132.428,504.326,227.463,447.022,285.869z
     M425.596,95.028C403.434,72.44,373.991,60,342.69,60c-31.301,0-60.745,12.439-82.906,35.027c-1.122,1.144-2.129,2.533-3.538,3.777
    c-7.536,6.654-16.372,6.32-22.491,0c-1.308-1.352-2.416-2.633-3.538-3.777C208.055,72.44,178.612,60,147.31,60
    c-31.301,0-60.744,12.439-82.906,35.027c-45.94,46.824-45.94,123.012,0,169.836c1.367,1.393,148.839,151.704,148.839,151.704
    C221.742,425.229,233.02,430,245,430c11.98,0,23.258-4.771,31.757-13.433l148.839-151.703l0,0
    C471.535,218.04,471.535,141.852,425.596,95.028z M404.169,116.034c-8.975-9.148-19.475-16.045-31.208-20.499
    c-7.746-2.939-16.413,0.953-19.355,8.698c-2.942,7.744,0.953,16.407,8.701,19.348c7.645,2.902,14.521,7.431,20.436,13.459
    c23.211,23.658,23.211,62.153,0,85.811l-52.648,53.661c-5.803,5.915-5.711,15.412,0.206,21.212
    c2.921,2.863,6.714,4.291,10.506,4.291c3.889,0,7.776-1.502,10.714-4.497l52.648-53.661
    C438.744,208.616,438.744,151.275,404.169,116.034z" />
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
                    </svg></a>
                </div>
              </div>
            </section>
            <div class="p-2 px-4 subTitle-01 flex gap-2 items-center w-[140px] rounded-sm">
              <a href="#" class="font-bold">Xem thêm</a>
              <svg version="1.1" class="w-4 h-4 fill-white" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 230.453 230.453"
                style="enable-background: new 0 0 230.453 230.453" xml:space="preserve">
                <polygon points="177.169,43.534 177.169,58.534 204.845,58.534 135.896,127.479 92.36,83.947 0,176.312 10.606,186.918
    92.361,105.16 135.896,148.691 215.453,69.14 215.453,96.784 230.453,96.784 230.453,43.534 " />
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
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'post',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'js_handle' => '<script>
      function handleActiveMobile(id) {
        var item1 = document.querySelector("#one1");
        var item2 = document.querySelector("#two1");
        var item3 = document.querySelector("#three1");
        var item4 = document.querySelector("#four1");
        if (!item1.classList.contains("active-01") && id == 1) {
          item1.classList.add("active-01");
        } else {
          item1.classList.remove("active-01");
        }
        if (!item2.classList.contains("active-01") && id == 2) {
          item2.classList.add("active-01");
        } else {
          item2.classList.remove("active-01");
        }
        if (!item3.classList.contains("active-01") && id == 3) {
          item3.classList.add("active-01");
        } else {
          item3.classList.remove("active-01");
        }
        if (!item4.classList.contains("active-01") && id == 4) {
          item4.classList.add("active-01");
        } else {
          item4.classList.remove("active-01");
        }
      }
      function sideChange() {
        var popular = document.querySelector("#popular");
        var newPost = document.querySelector("#new");
        if (popular.classList.contains("active-01")) {
          popular.classList.remove("active-01");
          newPost.classList.add("active-01");
        } else {
          popular.classList.add("active-01");
          newPost.classList.remove("active-01");
        }
      }
    </script>',
                'html' => '    <div class="h-[200px] z-[-1]">
      <img src="../img/1.jpg" class="w-full h-full object-cover" />
    </div>
    <div class="sub-direct-01 py-6">
      <div
        class="flex justify-start items-start gap-2 px-2 md:px-8 xl:px-[88px]"
      >
        <a href="#" class="active">Home</a>
        <span>></span>
        <a href="#">Categories</a>
      </div>
    </div>
    <div class="content px-2 md:px-8 xl:px-[88px] mt-2">
      <div class="grid grid-cols-1 xl:grid-cols-12 xl:gap-6">
        <div class="col-span-8 mt-6">
          <div class="flex justify-between items-center">
            <div>
              <h2 class="title-01">Sort by:</h2>
            </div>
            <div class="hidden lg:block">
              <select
                name=""
                id=""
                class="outline-none border-[1px] w-[300px] p-2"
              >
                <option value="1">Sort by:</option>
                <option value="1">Sort by:</option>
                <option value="1">Sort by:</option>
                <option value="1">Sort by:</option>
              </select>
            </div>
          </div>
          <div class="border-t-2 relative my-6 z-[-1]">
            <span class="w-2/5 border-t-[1px] unde-01"></span>
          </div>
          <div class="lg:hidden w-full">
            <select
              name=""
              id=""
              class="outline-none border-[1px] w-full p-2 mb-6"
            >
              <option value="1">Sort by:</option>
              <option value="1">Sort by:</option>
              <option value="1">Sort by:</option>
              <option value="1">Sort by:</option>
            </select>
          </div>
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <section>
              <div class="border-[1px] rounded-sm">
                <div
                  class="w-full h-[200px] md:h-[300px] lg:h-[250px] relative rounded-sm"
                >
                  <a href="./post-single.html"
                    ><img
                      src="../img/1.jpg"
                      class="w-full h-full object-cover rounded-tr-sm rounded-tl-sm"
                  /></a>
                  <div
                    class="p-1 label-img-01 absolute top-0 right-0 font-semibold px-4 rounded-tr-sm"
                  >
                    <a href="#">Science</a>
                  </div>
                </div>
                <div class="flex flex-col px-4 py-2">
                  <div>
                    <h3 class="title-post-01">
                      <a href="./post-single.html">
                        Goodwin must Break Clackson hold on Flags</a
                      >
                    </h3>
                    <span class="flex justify-start items-center gap-2">
                      <svg
                        version="1.1"
                        class="w-4 h-4 svgColor-01"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        width="97.16px"
                        height="97.16px"
                        viewBox="0 0 97.16 97.16"
                        style="enable-background: new 0 0 97.16 97.16"
                        xml:space="preserve"
                      >
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                        c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"
                            />
                            <path
                              d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                        c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"
                            />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                  </div>

                  <div>
                    <p class="line-clamp-2 content-01">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Sapiente repellat velit incidunt temporibus explicabo hic
                      ex dicta? Libero hic soluta provident alias cum nobis
                      totam officiis, nemo harum, rem temporibus!
                    </p>
                  </div>
                </div>
                <div class="py-2 border-t-[1px]">
                  <div class="flex justify-between items-center px-4">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[36px] h-[36px] rounded-full">
                        <img
                          src="../img/1.jpg"
                          class="w-full h-full object-cover rounded-full"
                        />
                      </div>
                      <p class="author-01">BY JANE TAYLOR</p>
                    </div>
                    <div class="flex items-end gap-2">
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          id="Capa_1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px"
                          y="0px"
                          width="485.87px"
                          height="485.869px"
                          viewBox="0 0 485.87 485.869"
                          style="enable-background: new 0 0 485.87 485.869"
                          xml:space="preserve"
                        >
                          <g>
                            <g>
                              <path
                                d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                          c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                          C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                          c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                          M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                          C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                          c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z"
                              />
                            </g>
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

                        <span class="count-01">6</span>
                      </div>
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          enable-background="new 0 0 512 512"
                        >
                          <g>
                            <g>
                              <path
                                d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z"
                              />
                              <path
                                d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z"
                              />
                            </g>
                          </g>
                        </svg>

                        <span class="count-01">587</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="border-[1px] rounded-sm">
                <div
                  class="w-full h-[200px] md:h-[300px] lg:h-[250px] relative rounded-sm"
                >
                  <a href="./post-single.html"
                    ><img
                      src="../img/1.jpg"
                      class="w-full h-full object-cover rounded-tr-sm rounded-tl-sm"
                  /></a>
                  <div
                    class="p-1 label-img-01 absolute top-0 right-0 font-semibold px-4 rounded-tr-sm"
                  >
                    <a href="#">Science</a>
                  </div>
                </div>
                <div class="flex flex-col px-4 py-2">
                  <div>
                    <h3 class="title-post-01">
                      <a href="./post-single.html">
                        Goodwin must Break Clackson hold on Flags</a
                      >
                    </h3>
                    <span class="flex justify-start items-center gap-2">
                      <svg
                        version="1.1"
                        class="w-4 h-4 svgColor-01"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        width="97.16px"
                        height="97.16px"
                        viewBox="0 0 97.16 97.16"
                        style="enable-background: new 0 0 97.16 97.16"
                        xml:space="preserve"
                      >
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                      c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"
                            />
                            <path
                              d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                      c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"
                            />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                  </div>

                  <div>
                    <p class="line-clamp-2 content-01">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Sapiente repellat velit incidunt temporibus explicabo hic
                      ex dicta? Libero hic soluta provident alias cum nobis
                      totam officiis, nemo harum, rem temporibus!
                    </p>
                  </div>
                </div>
                <div class="py-2 border-t-[1px]">
                  <div class="flex justify-between items-center px-4">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[36px] h-[36px] rounded-full">
                        <img
                          src="../img/1.jpg"
                          class="w-full h-full object-cover rounded-full"
                        />
                      </div>
                      <p class="author-01">BY JANE TAYLOR</p>
                    </div>
                    <div class="flex items-end gap-2">
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          id="Capa_1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px"
                          y="0px"
                          width="485.87px"
                          height="485.869px"
                          viewBox="0 0 485.87 485.869"
                          style="enable-background: new 0 0 485.87 485.869"
                          xml:space="preserve"
                        >
                          <g>
                            <g>
                              <path
                                d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                        c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                        C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                        c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                        M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                        C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                        c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z"
                              />
                            </g>
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

                        <span class="count-01">6</span>
                      </div>
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          enable-background="new 0 0 512 512"
                        >
                          <g>
                            <g>
                              <path
                                d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z"
                              />
                              <path
                                d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z"
                              />
                            </g>
                          </g>
                        </svg>

                        <span class="count-01">587</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="border-[1px] rounded-sm">
                <div
                  class="w-full h-[200px] md:h-[300px] lg:h-[250px] relative rounded-sm"
                >
                  <a href="./post-single.html"
                    ><img
                      src="../img/1.jpg"
                      class="w-full h-full object-cover rounded-tr-sm rounded-tl-sm"
                  /></a>
                  <div
                    class="p-1 label-img-01 absolute top-0 right-0 font-semibold px-4 rounded-tr-sm"
                  >
                    <a href="#">Science</a>
                  </div>
                </div>
                <div class="flex flex-col px-4 py-2">
                  <div>
                    <h3 class="title-post-01">
                      <a href="./post-single.html">
                        Goodwin must Break Clackson hold on Flags</a
                      >
                    </h3>
                    <span class="flex justify-start items-center gap-2">
                      <svg
                        version="1.1"
                        class="w-4 h-4 svgColor-01"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        width="97.16px"
                        height="97.16px"
                        viewBox="0 0 97.16 97.16"
                        style="enable-background: new 0 0 97.16 97.16"
                        xml:space="preserve"
                      >
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"
                            />
                            <path
                              d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"
                            />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                  </div>

                  <div>
                    <p class="line-clamp-2 content-01">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Sapiente repellat velit incidunt temporibus explicabo hic
                      ex dicta? Libero hic soluta provident alias cum nobis
                      totam officiis, nemo harum, rem temporibus!
                    </p>
                  </div>
                </div>
                <div class="py-2 border-t-[1px]">
                  <div class="flex justify-between items-center px-4">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[36px] h-[36px] rounded-full">
                        <img
                          src="../img/1.jpg"
                          class="w-full h-full object-cover rounded-full"
                        />
                      </div>
                      <p class="author-01">BY JANE TAYLOR</p>
                    </div>
                    <div class="flex items-end gap-2">
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          id="Capa_1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px"
                          y="0px"
                          width="485.87px"
                          height="485.869px"
                          viewBox="0 0 485.87 485.869"
                          style="enable-background: new 0 0 485.87 485.869"
                          xml:space="preserve"
                        >
                          <g>
                            <g>
                              <path
                                d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                      c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                      C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                      c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                      M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                      C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                      c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z"
                              />
                            </g>
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

                        <span class="count-01">6</span>
                      </div>
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          enable-background="new 0 0 512 512"
                        >
                          <g>
                            <g>
                              <path
                                d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z"
                              />
                              <path
                                d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z"
                              />
                            </g>
                          </g>
                        </svg>

                        <span class="count-01">587</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="border-[1px] rounded-sm">
                <div
                  class="w-full h-[200px] md:h-[300px] lg:h-[250px] relative rounded-sm"
                >
                  <a href="./post-single.html"
                    ><img
                      src="../img/1.jpg"
                      class="w-full h-full object-cover rounded-tr-sm rounded-tl-sm"
                  /></a>
                  <div
                    class="p-1 label-img-01 absolute top-0 right-0 font-semibold px-4 rounded-tr-sm"
                  >
                    <a href="#">Science</a>
                  </div>
                </div>
                <div class="flex flex-col px-4 py-2">
                  <div>
                    <h3 class="title-post-01">
                      <a href="./post-single.html">
                        Goodwin must Break Clackson hold on Flags</a
                      >
                    </h3>
                    <span class="flex justify-start items-center gap-2">
                      <svg
                        version="1.1"
                        class="w-4 h-4 svgColor-01"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        width="97.16px"
                        height="97.16px"
                        viewBox="0 0 97.16 97.16"
                        style="enable-background: new 0 0 97.16 97.16"
                        xml:space="preserve"
                      >
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                  c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"
                            />
                            <path
                              d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                  c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"
                            />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                  </div>

                  <div>
                    <p class="line-clamp-2 content-01">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Sapiente repellat velit incidunt temporibus explicabo hic
                      ex dicta? Libero hic soluta provident alias cum nobis
                      totam officiis, nemo harum, rem temporibus!
                    </p>
                  </div>
                </div>
                <div class="py-2 border-t-[1px]">
                  <div class="flex justify-between items-center px-4">
                    <div class="flex justify-start items-center gap-2">
                      <div class="w-[36px] h-[36px] rounded-full">
                        <img
                          src="../img/1.jpg"
                          class="w-full h-full object-cover rounded-full"
                        />
                      </div>
                      <p class="author-01">BY JANE TAYLOR</p>
                    </div>
                    <div class="flex items-end gap-2">
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          id="Capa_1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px"
                          y="0px"
                          width="485.87px"
                          height="485.869px"
                          viewBox="0 0 485.87 485.869"
                          style="enable-background: new 0 0 485.87 485.869"
                          xml:space="preserve"
                        >
                          <g>
                            <g>
                              <path
                                d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                    c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                    C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                    c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                    M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                    C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                    c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z"
                              />
                            </g>
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

                        <span class="count-01">6</span>
                      </div>
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          enable-background="new 0 0 512 512"
                        >
                          <g>
                            <g>
                              <path
                                d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z"
                              />
                              <path
                                d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z"
                              />
                            </g>
                          </g>
                        </svg>

                        <span class="count-01">587</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="flex justify-between items-center mt-2">
            <div>
              <ul
                class="flex justify-start items-center border-[1px] rounded-md pagination-01"
              >
                <li
                  class="active-01 border-[1px] p-2 px-3 font-semibold"
                  id="one1"
                >
                  <a href="#" onclick="handleActiveMobile(1)">1 </a>
                </li>
                <li class="border-[1px] p-2 px-3 font-semibold" id="two1">
                  <a href="#" onclick="handleActiveMobile(2)"> 2</a>
                </li>
                <li class="border-[1px] p-2 px-3 font-semibold" id="three1">
                  <a href="#" onclick="handleActiveMobile(3)"> 3</a>
                </li>
                <li class="border-[1px] p-2 px-3 font-semibold" id="four1">
                  <a href="#" onclick="handleActiveMobile(4)"> 4 </a>
                </li>
              </ul>
            </div>
            <button class="button-load-01 p-2 rounded-md px-6">
              Load more
            </button>
          </div>
        </div>
        <div class="col-span-4">
          <div>
            <button
              class="w-full p-3 border-2 bgNew-01 rounded-md my-6 font-bold"
            >
              Read all News
            </button>
            <ul class="flex justify-center items-center w-full">
              <li class="w-full bgPopular-01 p-3 my-3 active-01" id="popular">
                <a href="#" onclick="sideChange()">Popular news</a>
              </li>
              <li class="w-full p-3 bgPopular-01 my-3" id="new">
                <a href="#" onclick="sideChange()">Resent news</a>
              </li>
            </ul>
            <div class="p-6 bg-slate-100">
              <section>
                <div
                  class="flex justify-start items-start gap-4 border-b-2 pb-4"
                >
                  <div
                    class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md"
                  >
                    <img
                      src="../img/1.jpg"
                      class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md"
                    />
                  </div>
                  <div class="w-[160px] md:w-full">
                    <h3 class="truncate title-post-new-01">
                      How to start Home education
                    </h3>
                    <div class="flex flex-wrap gap-2">
                      <span class="flex justify-start items-center gap-2">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          id="Capa_1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px"
                          y="0px"
                          width="97.16px"
                          height="97.16px"
                          viewBox="0 0 97.16 97.16"
                          style="enable-background: new 0 0 97.16 97.16"
                          xml:space="preserve"
                        >
                          <g>
                            <g>
                              <path
                                d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"
                              />
                              <path
                                d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"
                              />
                            </g>
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
                        <span class="day-01">18 MAY 2022</span>
                      </span>
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          id="Capa_1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px"
                          y="0px"
                          width="485.87px"
                          height="485.869px"
                          viewBox="0 0 485.87 485.869"
                          style="enable-background: new 0 0 485.87 485.869"
                          xml:space="preserve"
                        >
                          <g>
                            <g>
                              <path
                                d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                                c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                                C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                                c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                                M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                                C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                                c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z"
                              />
                            </g>
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

                        <span class="count-01">6</span>
                      </div>
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          enable-background="new 0 0 512 512"
                        >
                          <g>
                            <g>
                              <path
                                d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z"
                              />
                              <path
                                d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z"
                              />
                            </g>
                          </g>
                        </svg>

                        <span class="count-01">587</span>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <div
                  class="flex justify-start items-start gap-4 border-b-2 pb-4 mt-4"
                >
                  <div
                    class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md"
                  >
                    <img
                      src="../img/1.jpg"
                      class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md"
                    />
                  </div>
                  <div class="w-[160px] md:w-full">
                    <h3 class="truncate title-post-new-01">
                      How to start Home education
                    </h3>
                    <div class="flex flex-wrap gap-2">
                      <span class="flex justify-start items-center gap-2">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          id="Capa_1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px"
                          y="0px"
                          width="97.16px"
                          height="97.16px"
                          viewBox="0 0 97.16 97.16"
                          style="enable-background: new 0 0 97.16 97.16"
                          xml:space="preserve"
                        >
                          <g>
                            <g>
                              <path
                                d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"
                              />
                              <path
                                d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"
                              />
                            </g>
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
                        <span class="day-01">18 MAY 2022</span>
                      </span>
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          id="Capa_1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px"
                          y="0px"
                          width="485.87px"
                          height="485.869px"
                          viewBox="0 0 485.87 485.869"
                          style="enable-background: new 0 0 485.87 485.869"
                          xml:space="preserve"
                        >
                          <g>
                            <g>
                              <path
                                d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                                c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                                C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                                c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                                M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                                C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                                c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z"
                              />
                            </g>
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

                        <span class="count-01">6</span>
                      </div>
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          enable-background="new 0 0 512 512"
                        >
                          <g>
                            <g>
                              <path
                                d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z"
                              />
                              <path
                                d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z"
                              />
                            </g>
                          </g>
                        </svg>

                        <span class="count-01">587</span>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <div
                  class="flex justify-start items-start gap-4 border-b-2 pb-4 mt-4"
                >
                  <div
                    class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md"
                  >
                    <img
                      src="../img/1.jpg"
                      class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md"
                    />
                  </div>
                  <div class="w-[160px] md:w-full">
                    <h3 class="truncate title-post-new-01">
                      How to start Home education
                    </h3>
                    <div class="flex flex-wrap gap-2">
                      <span class="flex justify-start items-center gap-2">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          id="Capa_1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px"
                          y="0px"
                          width="97.16px"
                          height="97.16px"
                          viewBox="0 0 97.16 97.16"
                          style="enable-background: new 0 0 97.16 97.16"
                          xml:space="preserve"
                        >
                          <g>
                            <g>
                              <path
                                d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"
                              />
                              <path
                                d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"
                              />
                            </g>
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
                        <span class="day-01">18 MAY 2022</span>
                      </span>
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          id="Capa_1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px"
                          y="0px"
                          width="485.87px"
                          height="485.869px"
                          viewBox="0 0 485.87 485.869"
                          style="enable-background: new 0 0 485.87 485.869"
                          xml:space="preserve"
                        >
                          <g>
                            <g>
                              <path
                                d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                                c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                                C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                                c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                                M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                                C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                                c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z"
                              />
                            </g>
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

                        <span class="count-01">6</span>
                      </div>
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          enable-background="new 0 0 512 512"
                        >
                          <g>
                            <g>
                              <path
                                d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z"
                              />
                              <path
                                d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z"
                              />
                            </g>
                          </g>
                        </svg>

                        <span class="count-01">587</span>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-start items-start gap-4 pb-4 mt-4">
                  <div
                    class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md"
                  >
                    <img
                      src="../img/1.jpg"
                      class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md"
                    />
                  </div>
                  <div class="w-[160px] md:w-full">
                    <h3 class="truncate title-post-new-01">
                      How to start Home education
                    </h3>
                    <div class="flex flex-wrap gap-2">
                      <span class="flex justify-start items-center gap-2">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          id="Capa_1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px"
                          y="0px"
                          width="97.16px"
                          height="97.16px"
                          viewBox="0 0 97.16 97.16"
                          style="enable-background: new 0 0 97.16 97.16"
                          xml:space="preserve"
                        >
                          <g>
                            <g>
                              <path
                                d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"
                              />
                              <path
                                d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"
                              />
                            </g>
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
                        <span class="day-01">18 MAY 2022</span>
                      </span>
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          id="Capa_1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px"
                          y="0px"
                          width="485.87px"
                          height="485.869px"
                          viewBox="0 0 485.87 485.869"
                          style="enable-background: new 0 0 485.87 485.869"
                          xml:space="preserve"
                        >
                          <g>
                            <g>
                              <path
                                d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                                c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                                C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                                c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                                M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                                C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                                c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z"
                              />
                            </g>
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

                        <span class="count-01">6</span>
                      </div>
                      <div class="flex gap-1">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          enable-background="new 0 0 512 512"
                        >
                          <g>
                            <g>
                              <path
                                d="m494.6,241.1l-50.1-47c-50.5-47.3-117.4-73.3-188.5-73.3-71.1,0-138,26-188.4,73.3l-50.1,47c-12.1,12.9-4.3,26.5 0,29.8l50.1,47c50.4,47.3 117.3,73.3 188.4,73.3 71.1,0 138-26 188.4-73.3l50.1-47c4.7-3.9 12.2-17.6 0.1-29.8zm-238.6,74.9c-33.1,0-60-26.9-60-60 0-33.1 26.9-60 60-60 33.1,0 60,26.9 60,60 0,33.1-26.9,60-60,60zm-194.7-60l34.3-32.1c32-30 72-49.9 115.5-58.1-33.1,16.6-55.8,50.8-55.8,90.2 0,39.4 22.8,73.7 55.8,90.2-43.5-8.1-83.5-28.1-115.5-58.1l-34.3-32.1zm355.2,32.1c-32,30-72,50-115.5,58.1 33.1-16.6 55.8-50.8 55.8-90.2 0-39.4-22.8-73.6-55.8-90.2 43.5,8.1 83.5,28.1 115.5,58.1l34.3,32.1-34.3,32.1z"
                              />
                              <path
                                d="m256,235.2c-11.3,0-20.8,9.5-20.8,20.8 0,11.3 9.5,20.8 20.8,20.8 11.3,0 20.8-9.5 20.8-20.8 0-11.3-9.5-20.8-20.8-20.8z"
                              />
                            </g>
                          </g>
                        </svg>

                        <span class="count-01">587</span>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
          <section>
            <div class="py-10">
              <div>
                <h2 class="tag-01">Categories</h2>
              </div>
              <div class="border-t-2 relative my-6 z-[-1]">
                <span class="w-1/4 border-t-[1px] unde-01"></span>
              </div>

              <section>
                <div class="flex justify-between items-center gap-6">
                  <a href="#" class="sub-cate-01"> Science </a>
                  <div
                    class="w-full relative border-t-[1px] border-dashed sub-cate-01 top-0 left-0"
                  ></div>

                  <div class="cate-count-01 p-2 px-3 rounded-md">
                    <span>1</span>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-between items-center gap-6 pt-3">
                  <a href="#" class="sub-cate-01"> Science </a>
                  <div
                    class="w-full relative border-t-[1px] border-dashed sub-cate-01 top-0 left-0"
                  ></div>

                  <div class="cate-count-01 p-2 px-3 rounded-md">
                    <span>1</span>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-between items-center gap-6 pt-3">
                  <a href="#" class="sub-cate-01"> Science </a>
                  <div
                    class="w-full relative border-t-[1px] border-dashed sub-cate-01 top-0 left-0"
                  ></div>

                  <div class="cate-count-01 p-2 px-3 rounded-md">
                    <span>1</span>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-between items-center gap-6 pt-3">
                  <a href="#" class="sub-cate-01"> Science </a>
                  <div
                    class="w-full relative border-t-[1px] border-dashed sub-cate-01 top-0 left-0"
                  ></div>

                  <div class="cate-count-01 p-2 px-3 rounded-md">
                    <span>1</span>
                  </div>
                </div>
              </section>
            </div>
          </section>
          <section>
            <div class="py-10">
              <div>
                <h2 class="tag-01">Popular Tags</h2>
              </div>
              <div class="border-t-2 relative my-6 z-[-1]">
                <span class="w-1/4 border-t-[1px] unde-01"></span>
              </div>
              <div>
                <ul class="flex flex-wrap gap-2">
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                </ul>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'product-single',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'js_handle' => '<script>
      $(".slider").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
      });
    </script>',
                'html' => ' <div class="sub-direct-01 py-6">
      <div
        class="flex justify-start items-start gap-2 px-2 md:px-8 xl:px-[88px]"
      >
        <a href="#" class="active">Home</a>
        <span>></span>
        <a href="#">Shop</a>
        <span>></span>
        <a href="#">Product Details</a>
      </div>
    </div>
    <div class="content px-2 md:px-8 xl:px-[88px] mt-2">
      <div class="grid grid-cols-1 xl:grid-cols-12 xl:gap-6">
        <div class="col-span-8 mt-6">
          <div class="border-[1px] p-3 md:p-8 detail-product-01">
            <div
              class="flex flex-col md:flex-row justify-between items-center gap-2"
            >
              <div>
                <div class="title-01 pb-2">
                  <div class="relative">
                    <h2>Awesome Merch Wallet</h2>
                    <span
                      class="title-sub-01 absolute top-0 right-0 hidden md:block"
                      >Sale -30%</span
                    >
                  </div>
                </div>

                <div
                  class="flex justify-start items-center gap-4 pt-2 border-t-[1px] flex-wrap"
                >
                  <div class="flex justify-start items-center gap-2">
                    <p class="content-price-01">Price:</p>
                    <h2 class="title-01">$239</h2>
                  </div>
                  <div class="flex justify-start items-center gap-2">
                    <div class="rating-01">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="content-01">
                      <span>12 review</span>
                    </div>
                  </div>
                  <div class="flex flex-wrap gap-2">
                    <div class="flex gap-1">
                      <svg
                        version="1.1"
                        class="w-4 h-4 svgColor-01"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        viewBox="0 0 483.1 483.1"
                        style="enable-background: new 0 0 483.1 483.1"
                        xml:space="preserve"
                      >
                        <g>
                          <g>
                            <path
                              d="M434.55,418.7l-27.8-313.3c-0.5-6.2-5.7-10.9-12-10.9h-58.6c-0.1-52.1-42.5-94.5-94.6-94.5s-94.5,42.4-94.6,94.5h-58.6
                                           c-6.2,0-11.4,4.7-12,10.9l-27.8,313.3c0,0.4,0,0.7,0,1.1c0,34.9,32.1,63.3,71.5,63.3h243c39.4,0,71.5-28.4,71.5-63.3
                                           C434.55,419.4,434.55,419.1,434.55,418.7z M241.55,24c38.9,0,70.5,31.6,70.6,70.5h-141.2C171.05,55.6,202.65,24,241.55,24z
                                            M363.05,459h-243c-26,0-47.2-17.3-47.5-38.8l26.8-301.7h47.6v42.1c0,6.6,5.4,12,12,12s12-5.4,12-12v-42.1h141.2v42.1
                                           c0,6.6,5.4,12,12,12s12-5.4,12-12v-42.1h47.6l26.8,301.8C410.25,441.7,389.05,459,363.05,459z"
                            />
                            <path
                              d="M291.45,249.8l-70.8,70.8l-28.9-28.9c-4.7-4.7-12.3-4.7-17,0s-4.7,12.3,0,17l37.4,37.4c2.3,2.3,5.4,3.5,8.5,3.5
                                           s6.1-1.2,8.5-3.5l79.3-79.3c4.7-4.7,4.7-12.3,0-17C303.75,245.2,296.15,245.2,291.45,249.8z"
                            />
                          </g>
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

                      <span class="count-01">50</span>
                    </div>
                    <div class="flex gap-1">
                      <svg
                        version="1.1"
                        class="w-4 h-4 svgColor-01"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        width="485.87px"
                        height="485.869px"
                        viewBox="0 0 485.87 485.869"
                        style="enable-background: new 0 0 485.87 485.869"
                        xml:space="preserve"
                      >
                        <g>
                          <g>
                            <path
                              d="M41.766,378.467h260.393v107.402l99.884-107.402h42.061V0H41.766V378.467z M376.792,158.709
                                                                          c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.265,34.09-34.091,34.09s-34.091-15.264-34.091-34.09
                                                                          C342.703,173.971,357.964,158.709,376.792,158.709z M287.554,158.709c18.828,0,34.09,15.264,34.09,34.09
                                                                          c0,18.83-15.264,34.09-34.09,34.09c-18.829,0-34.093-15.264-34.093-34.09C253.461,173.971,268.725,158.709,287.554,158.709z
                                                                          M198.314,158.709c18.829,0,34.091,15.264,34.091,34.09c0,18.83-15.264,34.09-34.091,34.09c-18.83,0-34.09-15.264-34.09-34.09
                                                                          C164.224,173.971,179.485,158.709,198.314,158.709z M109.074,158.709c18.83,0,34.092,15.264,34.092,34.09
                                                                          c0,18.83-15.265,34.09-34.092,34.09c-18.825,0-34.09-15.264-34.09-34.09C74.984,173.971,90.246,158.709,109.074,158.709z"
                            />
                          </g>
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

                      <span class="count-01">6</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="flex justify-end items-center gap-2">
                <input
                  type="number"
                  class="outline-none border-[1px] p-2"
                  min="1"
                  max="100"
                  value="1"
                />
                <button
                  class="outline-none button-cart-01 p-2 px-4 border-[1px] rounded-md"
                >
                  Add to cart
                </button>
              </div>
            </div>
          </div>
          <div class="slider h-[200px] md:h-[300px] xl:h-[400px] z-[1]">
            <div class="h-[200px] md:h-[300px] xl:h-[400px]">
              <img src="../img/1.jpg" class="w-full h-full object-cover" />
            </div>
            <div class="h-[200px] md:h-[300px] xl:h-[400px]">
              <img src="../img/2.jpg" class="w-full h-full object-cover" />
            </div>
            <div class="h-[200px] md:h-[300px] xl:h-[400px]">
              <img src="../img/3.jpg" class="w-full h-full object-cover" />
            </div>
          </div>
          <section>
            <div class="border-b-[1px] pb-4">
              <div class="content-post-01 pt-2">
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Atque sunt vel excepturi quos cum eveniet, voluptatum quod
                  nesciunt earum molestias praesentium non facere! Corrupti
                  harum dicta, minima nam incidunt libero? Lorem ipsum dolor sit
                  amet consectetur adipisicing elit. Id dicta expedita odio
                  itaque eveniet consequuntur nostrum obcaecati, debitis minus,
                  ullam labore, delectus est vitae? Numquam, eligendi. Quo
                  consectetur voluptatum facere.
                </p>
                <h2 class="py-2 title-01">Middle Post Heading</h2>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Laudantium deleniti quidem nostrum. Sint, asperiores ab.
                  Quibusdam doloribus voluptatum quas provident optio, facere
                  laborum cum deserunt amet cumque iste est quo.
                </p>
              </div>
            </div>
          </section>
          <section>
            <div class="border-b-[1px] pb-4">
              <div
                class="flex flex-col md:flex-row items-start justify-start md:items-center gap-2 pt-4"
              >
                <div class="flex justify-start items-center gap-2">
                  <div class="rating-01">
                    <i class="fa fa-tag"></i>
                  </div>
                  <p class="sub-cate-01">Tags:</p>
                </div>

                <div>
                  <ul class="flex flex-wrap gap-2">
                    <li class="bgNew-01 p-2 px-4">
                      <a href="#">Lorem</a>
                    </li>
                    <li class="bgNew-01 p-2 px-4">
                      <a href="#">Lorem</a>
                    </li>
                    <li class="bgNew-01 p-2 px-4">
                      <a href="#">Lorem</a>
                    </li>
                    <li class="bgNew-01 p-2 px-4">
                      <a href="#">Lorem</a>
                    </li>
                    <li class="bgNew-01 p-2 px-4">
                      <a href="#">Lorem</a>
                    </li>
                    <li class="bgNew-01 p-2 px-4">
                      <a href="#">Lorem</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <div class="flex justify-between items-center py-2">
            <h2 class="title-01">Review <strong>2</strong></h2>
            <div class="w-[20px] h-[20px] border-t-[1px] border-r-[1px]"></div>
          </div>

          <section>
            <div class="flex justify-start items-start gap-4 mt-4">
              <div class="w-[100px]">
                <div class="w-[60px] h-[60px] rounded-full">
                  <a href="/content1/author-single.html"
                    ><img
                      src="../img/1.jpg"
                      alt=""
                      class="w-full h-full rounded-full object-cover"
                  /></a>
                </div>
              </div>

              <div class="border-[1px] rounded-md comment-01 p-6 relative">
                <span class="tip tip-left"></span>
                <div class="flex justify-between items-center">
                  <div class="flex justify-start items-center gap-2">
                    <h2 class="tag-01">Kevin Antony</h2>
                    <div class="rating-01">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>

                  <svg
                    class="w-4 h-4 svgColor-01"
                    viewBox="0 0 512 512"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <title>ionicons-v5-f</title>
                    <circle cx="256" cy="256" r="48" />
                    <circle cx="416" cy="256" r="48" />
                    <circle cx="96" cy="256" r="48" />
                  </svg>
                </div>
                <p class="line-clamp-2 content-01 py-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                  ducimus quos vero magni eveniet aspernatur quam quae omnis!
                  Tenetur dolores vero corrupti eaque iusto quisquam sequi,
                  adipisci minima qui assumenda.
                </p>
                <div class="flex justify-between items-center">
                  <div>
                    <span class="flex justify-start items-center gap-2">
                      <svg
                        version="1.1"
                        class="w-4 h-4 svgColor-01"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        width="97.16px"
                        height="97.16px"
                        viewBox="0 0 97.16 97.16"
                        style="enable-background: new 0 0 97.16 97.16"
                        xml:space="preserve"
                      >
                        <g>
                          <g>
                            <path
                              d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                            c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"
                            />
                            <path
                              d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                            c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"
                            />
                          </g>
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
                      <span class="day-01">18 MAY 2022</span>
                    </span>
                  </div>
                  <button
                    class="button-reply-01 flex justify-start items-center gap-2 p-2 px-4 border-[1px] rounded-md"
                  >
                    <svg
                      version="1.1"
                      class="w-4 h-4 svgColor-01"
                      id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      x="0px"
                      y="0px"
                      width="519.438px"
                      height="519.438px"
                      viewBox="0 0 519.438 519.438"
                      style="enable-background: new 0 0 519.438 519.438"
                      xml:space="preserve"
                    >
                      <g>
                        <g>
                          <path
                            d="M175.041,317.448c2.935-0.83,5.933-1.658,9.067-2.488c9.477-2.545,19.832-5.037,30.872-7.41
			c5.511-1.105,11.218-2.381,17.038-3.369c2.922-0.529,5.878-1.064,8.862-1.604c2.987-0.463,6-0.93,9.039-1.402
			c12.204-1.924,24.816-3.301,37.736-4.43c12.843-0.873,26.04-1.598,39.112-1.348c3.269,0.059,6.595,0.016,9.856,0.154
			c3.266,0.17,6.527,0.346,9.783,0.516c6.606,0.199,12.935,1.121,19.44,1.682c6.423,0.734,12.689,1.832,19.029,2.766
			c6.117,1.35,12.394,2.424,18.354,3.98c11.943,3.078,23.461,6.705,34.03,11.123c10.661,4.291,20.386,9.32,29.187,14.492
			c4.274,2.725,8.519,5.275,12.426,7.9c3.762,2.844,7.332,5.539,10.686,8.072c3.517,2.459,6.236,5.297,9.03,7.727
			c2.757,2.5,5.291,4.799,7.577,6.873c8.445,9.158,13.271,14.393,13.271,14.393s-2.882-6.625-7.922-18.217
			c-1.524-2.801-3.21-5.9-5.046-9.271c-1.913-3.348-3.728-7.23-6.338-10.867c-2.521-3.773-5.201-7.783-8.029-12.016
			c-3.048-4.076-6.469-8.213-10.003-12.668c-7.295-8.615-15.826-17.645-25.729-26.322c-9.819-8.816-21.004-17.217-33.106-25.291
			c-6.046-4.058-12.438-7.647-18.895-11.592c-6.564-3.485-13.257-7.2-20.142-10.539c-6.909-3.149-13.904-6.72-21.074-9.511
			c-3.592-1.475-7.194-2.953-10.796-4.431c-3.619-1.441-7.271-2.687-10.93-4.036c-14.643-5.429-29.529-9.78-44.337-13.847
			c-14.792-3.8-29.517-7.203-43.825-9.829c-3.586-0.664-7.145-1.319-10.667-1.971c-3.528-0.566-7.022-1.126-10.48-1.68
			c-6.943-1.172-13.715-1.992-20.358-2.91c-13.127-1.656-25.6-2.922-37.176-3.804l-0.242-69.456L0,260.327l175.338,142.291
			L175.041,317.448z"
                          />
                        </g>
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
                    <p>Reply</p>
                  </button>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="border-b-[1px] pb-4">
              <div class="flex justify-start items-start gap-4 mt-4">
                <div class="w-[100px]">
                  <div class="w-[60px] h-[60px] rounded-full">
                    <a href="/content1/author-single.html"
                      ><img
                        src="../img/4.jpg"
                        alt=""
                        class="w-full h-full rounded-full object-cover"
                    /></a>
                  </div>
                </div>

                <div class="border-[1px] rounded-md comment-01 p-6 relative">
                  <span class="tip tip-left"></span>
                  <div class="flex justify-between items-center">
                    <div class="flex justify-start items-center gap-2">
                      <h2 class="tag-01">Kevin Antony</h2>
                      <div class="rating-01">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </div>

                    <svg
                      class="w-4 h-4 svgColor-01"
                      viewBox="0 0 512 512"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <title>ionicons-v5-f</title>
                      <circle cx="256" cy="256" r="48" />
                      <circle cx="416" cy="256" r="48" />
                      <circle cx="96" cy="256" r="48" />
                    </svg>
                  </div>
                  <p class="line-clamp-2 content-01 py-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ipsa ducimus quos vero magni eveniet aspernatur quam quae
                    omnis! Tenetur dolores vero corrupti eaque iusto quisquam
                    sequi, adipisci minima qui assumenda.
                  </p>
                  <div class="flex justify-between items-center">
                    <div>
                      <span class="flex justify-start items-center gap-2">
                        <svg
                          version="1.1"
                          class="w-4 h-4 svgColor-01"
                          id="Capa_1"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px"
                          y="0px"
                          width="97.16px"
                          height="97.16px"
                          viewBox="0 0 97.16 97.16"
                          style="enable-background: new 0 0 97.16 97.16"
                          xml:space="preserve"
                        >
                          <g>
                            <g>
                              <path
                                d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823
                                                            c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"
                              />
                              <path
                                d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832
                                                            c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"
                              />
                            </g>
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
                        <span class="day-01">18 MAY 2022</span>
                      </span>
                    </div>
                    <button
                      class="button-reply-01 flex justify-start items-center gap-2 p-2 px-4 border-[1px] rounded-md"
                    >
                      <svg
                        version="1.1"
                        class="w-4 h-4 svgColor-01"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        width="519.438px"
                        height="519.438px"
                        viewBox="0 0 519.438 519.438"
                        style="enable-background: new 0 0 519.438 519.438"
                        xml:space="preserve"
                      >
                        <g>
                          <g>
                            <path
                              d="M175.041,317.448c2.935-0.83,5.933-1.658,9.067-2.488c9.477-2.545,19.832-5.037,30.872-7.41
			c5.511-1.105,11.218-2.381,17.038-3.369c2.922-0.529,5.878-1.064,8.862-1.604c2.987-0.463,6-0.93,9.039-1.402
			c12.204-1.924,24.816-3.301,37.736-4.43c12.843-0.873,26.04-1.598,39.112-1.348c3.269,0.059,6.595,0.016,9.856,0.154
			c3.266,0.17,6.527,0.346,9.783,0.516c6.606,0.199,12.935,1.121,19.44,1.682c6.423,0.734,12.689,1.832,19.029,2.766
			c6.117,1.35,12.394,2.424,18.354,3.98c11.943,3.078,23.461,6.705,34.03,11.123c10.661,4.291,20.386,9.32,29.187,14.492
			c4.274,2.725,8.519,5.275,12.426,7.9c3.762,2.844,7.332,5.539,10.686,8.072c3.517,2.459,6.236,5.297,9.03,7.727
			c2.757,2.5,5.291,4.799,7.577,6.873c8.445,9.158,13.271,14.393,13.271,14.393s-2.882-6.625-7.922-18.217
			c-1.524-2.801-3.21-5.9-5.046-9.271c-1.913-3.348-3.728-7.23-6.338-10.867c-2.521-3.773-5.201-7.783-8.029-12.016
			c-3.048-4.076-6.469-8.213-10.003-12.668c-7.295-8.615-15.826-17.645-25.729-26.322c-9.819-8.816-21.004-17.217-33.106-25.291
			c-6.046-4.058-12.438-7.647-18.895-11.592c-6.564-3.485-13.257-7.2-20.142-10.539c-6.909-3.149-13.904-6.72-21.074-9.511
			c-3.592-1.475-7.194-2.953-10.796-4.431c-3.619-1.441-7.271-2.687-10.93-4.036c-14.643-5.429-29.529-9.78-44.337-13.847
			c-14.792-3.8-29.517-7.203-43.825-9.829c-3.586-0.664-7.145-1.319-10.667-1.971c-3.528-0.566-7.022-1.126-10.48-1.68
			c-6.943-1.172-13.715-1.992-20.358-2.91c-13.127-1.656-25.6-2.922-37.176-3.804l-0.242-69.456L0,260.327l175.338,142.291
			L175.041,317.448z"
                            />
                          </g>
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
                      <p>Reply</p>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="pt-4">
              <div class="title-01">
                <h2>Add Review</h2>
              </div>
              <div class="flex justify-start items-center gap-2">
                <h4 class="tag-01 text-[14px]">
                  Your rating for this product:
                </h4>
                <div class="rating-box-01">
                  <div class="rating-container-01">
                    <input type="radio" name="rating" value="5" id="star-5" />
                    <label for="star-5">
                      <i class="fa fa-star" aria-hidden="true"></i
                    ></label>

                    <input type="radio" name="rating" value="4" id="star-4" />
                    <label for="star-4">
                      <i class="fa fa-star" aria-hidden="true"></i
                    ></label>

                    <input type="radio" name="rating" value="3" id="star-3" />
                    <label for="star-3">
                      <i class="fa fa-star" aria-hidden="true"></i
                    ></label>

                    <input type="radio" name="rating" value="2" id="star-2" />
                    <label for="star-2">
                      <i class="fa fa-star" aria-hidden="true"></i
                    ></label>

                    <input type="radio" name="rating" value="1" id="star-1" />
                    <label for="star-1">
                      <i class="fa fa-star" aria-hidden="true"></i
                    ></label>
                  </div>
                </div>
              </div>

              <div class="flex justify-between items-center gap-4 mt-4">
                <input
                  type="text"
                  class="border-[1px] rounded-md w-full p-2 outline-none focus:shadow-lg"
                  placeholder="Your name*"
                />
                <input
                  type="text"
                  class="border-[1px] rounded-md w-full p-2 outline-none focus:shadow-lg"
                  placeholder="Your email*"
                />
              </div>

              <div class="py-4">
                <textarea
                  name=""
                  id=""
                  cols="30"
                  rows="10"
                  class="border-[1px] rounded-md w-full p-2 outline-none focus:shadow-lg"
                  placeholder="Your comment"
                ></textarea>
              </div>
              <button
                class="p-2 px-8 subTitle-01 rounded-md font-bold outline-none"
              >
                Submit
              </button>
            </div>
          </section>
          <section>
            <div class="tag-01 mt-6">
              <h2>You may also like</h2>
              <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-4 mt-6">
                <section>
                  <div class="border-[1px]">
                    <div class="w-full h-200px">
                      <img
                        src="../img/1.jpg"
                        alt=""
                        class="w-full h-[200px] object-cover"
                      />
                    </div>
                    <div class="px-4 py-4">
                      <h3 class="truncate title-post-new-01">
                        Storage Double Jars
                      </h3>
                      <div class="content-01 flex flex-wrap gap-2">
                        <span>Price: $252</span>
                      </div>
                    </div>
                  </div>
                </section>
                <section>
                  <div class="border-[1px]">
                    <div class="w-full h-200px">
                      <img
                        src="../img/3.jpg"
                        alt=""
                        class="w-full h-[200px] object-cover"
                      />
                    </div>
                    <div class="px-4 py-4">
                      <h3 class="truncate title-post-new-01">
                        Storage Double Jars
                      </h3>
                      <div class="content-01 flex flex-wrap gap-2">
                        <span>Price: $252</span>
                      </div>
                    </div>
                  </div>
                </section>
                <section>
                  <div class="border-[1px]">
                    <div class="w-full h-200px">
                      <img
                        src="../img/2.jpg"
                        alt=""
                        class="w-full h-[200px] object-cover"
                      />
                    </div>
                    <div class="px-4 py-4">
                      <h3 class="truncate title-post-new-01">
                        Storage Double Jars
                      </h3>
                      <div class="content-01 flex flex-wrap gap-2">
                        <span>Price: $252</span>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </section>
        </div>
        <div class="col-span-4">
          <div>
            <div class="mt-6">
              <h2 class="tag-01">Popular Products</h2>
            </div>
            <div class="border-t-2 relative my-6 z-[-1]">
              <span class="w-1/4 border-t-[1px] unde-01"></span>
            </div>
            <div class="p-6 bg-slate-100">
              <section>
                <div
                  class="flex justify-start items-start gap-4 border-b-2 pb-4"
                >
                  <div
                    class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md"
                  >
                    <img
                      src="../img/1.jpg"
                      class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md"
                    />
                  </div>
                  <div class="w-[160px] md:w-full">
                    <h3 class="truncate title-post-new-01">
                      Compact Merch Box
                    </h3>
                    <div class="content-01 flex flex-wrap gap-2">
                      <span>Price: $239</span>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <div
                  class="flex justify-start items-start gap-4 border-b-2 pb-4 mt-4"
                >
                  <div
                    class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md"
                  >
                    <img
                      src="../img/1.jpg"
                      class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md"
                    />
                  </div>
                  <div class="w-[160px] md:w-full">
                    <h3 class="truncate title-post-new-01">Merch Tea Cup</h3>
                    <div class="content-01 flex flex-wrap gap-2">
                      <span>Price: $243</span>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-start items-start gap-4 mt-4">
                  <div
                    class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md"
                  >
                    <img
                      src="../img/1.jpg"
                      class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md"
                    />
                  </div>
                  <div class="w-[160px] md:w-full">
                    <h3 class="truncate title-post-new-01">
                      Storage Double Jars
                    </h3>
                    <div class="content-01 flex flex-wrap gap-2">
                      <span>Price: $252</span>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
          <section>
            <div class="py-10">
              <div>
                <h2 class="tag-01">Categories</h2>
              </div>
              <div class="border-t-2 relative my-6 z-[-1]">
                <span class="w-1/4 border-t-[1px] unde-01"></span>
              </div>

              <section>
                <div class="flex justify-between items-center gap-6">
                  <a href="#" class="sub-cate-01"> Science </a>
                  <div
                    class="w-full relative border-t-[1px] border-dashed sub-cate-01 top-0 left-0"
                  ></div>

                  <div class="cate-count-01 p-2 px-3 rounded-md">
                    <span>1</span>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-between items-center gap-6 pt-3">
                  <a href="#" class="sub-cate-01"> Science </a>
                  <div
                    class="w-full relative border-t-[1px] border-dashed sub-cate-01 top-0 left-0"
                  ></div>

                  <div class="cate-count-01 p-2 px-3 rounded-md">
                    <span>1</span>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-between items-center gap-6 pt-3">
                  <a href="#" class="sub-cate-01"> Science </a>
                  <div
                    class="w-full relative border-t-[1px] border-dashed sub-cate-01 top-0 left-0"
                  ></div>

                  <div class="cate-count-01 p-2 px-3 rounded-md">
                    <span>1</span>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-between items-center gap-6 pt-3">
                  <a href="#" class="sub-cate-01"> Science </a>
                  <div
                    class="w-full relative border-t-[1px] border-dashed sub-cate-01 top-0 left-0"
                  ></div>

                  <div class="cate-count-01 p-2 px-3 rounded-md">
                    <span>1</span>
                  </div>
                </div>
              </section>
            </div>
          </section>
          <section>
            <div class="py-10">
              <div>
                <h2 class="tag-01">Popular Tags</h2>
              </div>
              <div class="border-t-2 relative my-6 z-[-1]">
                <span class="w-1/4 border-t-[1px] unde-01"></span>
              </div>
              <div>
                <ul class="flex flex-wrap gap-2">
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                </ul>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'product',
                'style' => '<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/dist/style.css">',
                'js_handle' => ' <script>
      function handleActiveMobile(id) {
        var item1 = document.querySelector("#one1");
        var item2 = document.querySelector("#two1");
        var item3 = document.querySelector("#three1");
        var item4 = document.querySelector("#four1");
        if (!item1.classList.contains("active-01") && id == 1) {
          item1.classList.add("active-01");
        } else {
          item1.classList.remove("active-01");
        }
        if (!item2.classList.contains("active-01") && id == 2) {
          item2.classList.add("active-01");
        } else {
          item2.classList.remove("active-01");
        }
        if (!item3.classList.contains("active-01") && id == 3) {
          item3.classList.add("active-01");
        } else {
          item3.classList.remove("active-01");
        }
        if (!item4.classList.contains("active-01") && id == 4) {
          item4.classList.add("active-01");
        } else {
          item4.classList.remove("active-01");
        }
      }
      function sideChange() {
        var popular = document.querySelector("#popular");
        var newPost = document.querySelector("#new");
        if (popular.classList.contains("active-01")) {
          popular.classList.remove("active-01");
          newPost.classList.add("active-01");
        } else {
          popular.classList.add("active-01");
          newPost.classList.remove("active-01");
        }
      }
    </script>',
                'html' => '<div class="sub-direct-01 py-6">
      <div
        class="flex justify-start items-start gap-2 px-2 md:px-8 xl:px-[88px]"
      >
        <a href="#" class="active">Home</a>
        <span>></span>
        <a href="#">Shop</a>
      </div>
    </div>
    <div class="content px-2 md:px-8 xl:px-[88px] mt-2">
      <div class="grid grid-cols-1 xl:grid-cols-12 xl:gap-6">
        <div class="col-span-8 mt-6">
          <div class="flex justify-between items-center">
            <div>
              <h2 class="title-01">Sort by:</h2>
            </div>
            <div class="hidden lg:block">
              <select
                name=""
                id=""
                class="outline-none border-[1px] w-[300px] p-2"
              >
                <option value="1">Sort by:</option>
                <option value="1">Sort by:</option>
                <option value="1">Sort by:</option>
                <option value="1">Sort by:</option>
              </select>
            </div>
          </div>
          <div class="border-t-2 relative my-6 z-[-1]">
            <span class="w-2/5 border-t-[1px] unde-01"></span>
          </div>
          <div class="lg:hidden w-full">
            <select
              name=""
              id=""
              class="outline-none border-[1px] w-full p-2 mb-6"
            >
              <option value="1">Sort by:</option>
              <option value="1">Sort by:</option>
              <option value="1">Sort by:</option>
              <option value="1">Sort by:</option>
            </select>
          </div>
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <section>
              <div class="border-[1px] rounded-md">
                <div
                  class="w-full h-[200px] md:h-[300px] lg:h-[250px] relative rounded-tr-md rounded-tl-md"
                >
                  <a href="./product-single.html"
                    ><img
                      src="../img/1.jpg"
                      class="w-full h-full object-cover rounded-tr-md rounded-tl-md"
                  /></a>
                  <div
                    class="p-1 label-img-01 absolute top-0 right-0 font-semibold px-4 rounded-tr-md"
                  >
                    <a href="#">Sale -50%</a>
                  </div>
                </div>
                <div class="flex flex-col px-4 py-2">
                  <div>
                    <h3 class="title-post-01">
                      <a href="./product-single.html"
                        >Awesome Merch Wallet</a
                      >
                    </h3>
                  </div>
                  <div class="py-2">
                    <p class="line-clamp-2 content-01">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Sapiente repellat velit incidunt temporibus explicabo hic
                      ex dicta? Libero hic soluta provident alias cum nobis
                      totam officiis, nemo harum, rem temporibus!
                    </p>
                  </div>
                  <div class="flex justify-start items-center gap-2 pb-2">
                    <div class="rating-01">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="content-01">
                      <span>20 review</span>
                    </div>
                  </div>

                  <div
                    class="flex justify-between items-center py-2 border-t-[1px]"
                  >
                    <div class="flex justify-start items-center gap-2">
                      <p class="content-price-01">Price:</p>
                      <h2 class="title-01">$239</h2>
                    </div>
                    <button
                      class="button-cart-01 flex justify-start items-center gap-2 p-2 px-4 border-[1px] rounded-md"
                    >
                      <svg
                        version="1.1"
                        class="w-4 h-4 svgColor-01"
                        id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        viewBox="0 0 512 512"
                        style="enable-background: new 0 0 512 512"
                        xml:space="preserve"
                      >
                        <g>
                          <g>
                            <polygon
                              points="289.391,222.609 289.391,0 222.609,0 222.609,222.609 0,222.609 0,289.391 222.609,289.391 222.609,512
                                     289.391,512 289.391,289.391 512,289.391 512,222.609 		"
                            />
                          </g>
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

                      <p>Add to card</p>
                    </button>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="border-[1px] rounded-md">
                <div
                  class="w-full h-[200px] md:h-[300px] lg:h-[250px] relative rounded-tr-md rounded-tl-md"
                >
                  <a href="./product-single.html"
                    ><img
                      src="../img/1.jpg"
                      class="w-full h-full object-cover rounded-tr-md rounded-tl-md"
                  /></a>
                  <!-- <div class="p-1 label-img-01 absolute top-0 right-0 font-semibold px-4 rounded-tr-md">
                              <a href="#">Sale -20%</a>
                            </div> -->
                </div>
                <div class="flex flex-col px-4 py-2">
                  <div>
                    <h3 class="title-post-01">
                      <a href="./product-single.html"
                        >Awesome Merch Wallet</a
                      >
                    </h3>
                  </div>
                  <div class="py-2">
                    <p class="line-clamp-2 content-01">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Sapiente repellat velit incidunt temporibus explicabo hic
                      ex dicta? Libero hic soluta provident alias cum nobis
                      totam officiis, nemo harum, rem temporibus!
                    </p>
                  </div>
                  <div class="flex justify-start items-center gap-2 pb-2">
                    <div class="rating-01">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="content-01">
                      <span>12 review</span>
                    </div>
                  </div>

                  <div
                    class="flex justify-between items-center py-2 border-t-[1px]"
                  >
                    <div class="flex justify-start items-center gap-2">
                      <p class="content-price-01">Price:</p>
                      <h2 class="title-01">$239</h2>
                    </div>
                    <button
                      class="button-cart-01 flex justify-start items-center gap-2 p-2 px-4 border-[1px] rounded-md"
                    >
                      <svg
                        version="1.1"
                        class="w-4 h-4 svgColor-01"
                        id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        viewBox="0 0 512 512"
                        style="enable-background: new 0 0 512 512"
                        xml:space="preserve"
                      >
                        <g>
                          <g>
                            <polygon
                              points="289.391,222.609 289.391,0 222.609,0 222.609,222.609 0,222.609 0,289.391 222.609,289.391 222.609,512
                                   289.391,512 289.391,289.391 512,289.391 512,222.609 		"
                            />
                          </g>
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

                      <p>Add to card</p>
                    </button>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="border-[1px] rounded-md">
                <div
                  class="w-full h-[200px] md:h-[300px] lg:h-[250px] relative rounded-tr-md rounded-tl-md"
                >
                  <a href="./product-single.html"
                    ><img
                      src="../img/3.jpg"
                      class="w-full h-full object-cover rounded-tr-md rounded-tl-md"
                  /></a>
                  <div
                    class="p-1 label-img-01 absolute top-0 right-0 font-semibold px-4 rounded-tr-md"
                  >
                    <a href="#">Sale -20%</a>
                  </div>
                </div>
                <div class="flex flex-col px-4 py-2">
                  <div>
                    <h3 class="title-post-01">
                      <a href="./product-single.html">
                        Awesome Merch Wallet</a
                      >
                    </h3>
                  </div>
                  <div class="py-2">
                    <p class="line-clamp-2 content-01">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Sapiente repellat velit incidunt temporibus explicabo hic
                      ex dicta? Libero hic soluta provident alias cum nobis
                      totam officiis, nemo harum, rem temporibus!
                    </p>
                  </div>
                  <div class="flex justify-start items-center gap-2 pb-2">
                    <div class="rating-01">
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="content-01">
                      <span>2 review</span>
                    </div>
                  </div>

                  <div
                    class="flex justify-between items-center py-2 border-t-[1px]"
                  >
                    <div class="flex justify-start items-center gap-2">
                      <p class="content-price-01">Price:</p>
                      <h2 class="title-01">$239</h2>
                    </div>
                    <button
                      class="button-cart-01 flex justify-start items-center gap-2 p-2 px-4 border-[1px] rounded-md"
                    >
                      <svg
                        version="1.1"
                        class="w-4 h-4 svgColor-01"
                        id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        viewBox="0 0 512 512"
                        style="enable-background: new 0 0 512 512"
                        xml:space="preserve"
                      >
                        <g>
                          <g>
                            <polygon
                              points="289.391,222.609 289.391,0 222.609,0 222.609,222.609 0,222.609 0,289.391 222.609,289.391 222.609,512
                                 289.391,512 289.391,289.391 512,289.391 512,222.609 		"
                            />
                          </g>
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

                      <p>Add to card</p>
                    </button>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="border-[1px] rounded-md">
                <div
                  class="w-full h-[200px] md:h-[300px] lg:h-[250px] relative rounded-tr-md rounded-tl-md"
                >
                  <a href="./product-single.html"
                    ><img
                      src="../img/2.jpg"
                      class="w-full h-full object-cover rounded-tr-md rounded-tl-md"
                  /></a>
                  <div
                    class="p-1 label-img-01 absolute top-0 right-0 font-semibold px-4 rounded-tr-md"
                  >
                    <a href="#">Sale -20%</a>
                  </div>
                </div>
                <div class="flex flex-col px-4 py-2">
                  <div>
                    <h3 class="title-post-01">
                      <a href="./product-single.html"
                        >Awesome Merch Wallet</a
                      >
                    </h3>
                  </div>
                  <div class="py-2">
                    <p class="line-clamp-2 content-01">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Sapiente repellat velit incidunt temporibus explicabo hic
                      ex dicta? Libero hic soluta provident alias cum nobis
                      totam officiis, nemo harum, rem temporibus!
                    </p>
                  </div>
                  <div class="flex justify-start items-center gap-2 pb-2">
                    <div class="rating-01">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="content-01">
                      <span>5 review</span>
                    </div>
                  </div>

                  <div
                    class="flex justify-between items-center py-2 border-t-[1px]"
                  >
                    <div class="flex justify-start items-center gap-2">
                      <p class="content-price-01">Price:</p>
                      <h2 class="title-01">$239</h2>
                    </div>
                    <button
                      class="button-cart-01 flex justify-start items-center gap-2 p-2 px-4 border-[1px] rounded-md"
                    >
                      <svg
                        version="1.1"
                        class="w-4 h-4 svgColor-01"
                        id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        viewBox="0 0 512 512"
                        style="enable-background: new 0 0 512 512"
                        xml:space="preserve"
                      >
                        <g>
                          <g>
                            <polygon
                              points="289.391,222.609 289.391,0 222.609,0 222.609,222.609 0,222.609 0,289.391 222.609,289.391 222.609,512
                               289.391,512 289.391,289.391 512,289.391 512,222.609 		"
                            />
                          </g>
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

                      <p>Add to card</p>
                    </button>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="flex justify-between items-center mt-2">
            <div>
              <ul
                class="flex justify-start items-center border-[1px] rounded-md pagination-01"
              >
                <li
                  class="active-01 border-[1px] p-2 px-3 font-semibold"
                  id="one1"
                >
                  <a href="#" onclick="handleActiveMobile(1)">1 </a>
                </li>
                <li class="border-[1px] p-2 px-3 font-semibold" id="two1">
                  <a href="#" onclick="handleActiveMobile(2)"> 2</a>
                </li>
                <li class="border-[1px] p-2 px-3 font-semibold" id="three1">
                  <a href="#" onclick="handleActiveMobile(3)"> 3</a>
                </li>
                <li class="border-[1px] p-2 px-3 font-semibold" id="four1">
                  <a href="#" onclick="handleActiveMobile(4)"> 4 </a>
                </li>
              </ul>
            </div>
            <button class="button-load-01 p-2 rounded-md px-6">
              Load more
            </button>
          </div>
        </div>
        <div class="col-span-4">
          <div>
            <div class="mt-6">
              <h2 class="tag-01">Popular Products</h2>
            </div>
            <div class="border-t-2 relative my-6 z-[-1]">
              <span class="w-1/4 border-t-[1px] unde-01"></span>
            </div>
            <div class="p-6 bg-slate-100">
              <section>
                <div
                  class="flex justify-start items-start gap-4 border-b-2 pb-4"
                >
                  <div
                    class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md"
                  >
                    <img
                      src="../img/1.jpg"
                      class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md"
                    />
                  </div>
                  <div class="w-[160px] md:w-full">
                    <h3 class="truncate title-post-new-01">
                      Compact Merch Box
                    </h3>
                    <div class="content-01 flex flex-wrap gap-2">
                      <span>Price: $239</span>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <div
                  class="flex justify-start items-start gap-4 border-b-2 pb-4 mt-4"
                >
                  <div
                    class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md"
                  >
                    <img
                      src="../img/1.jpg"
                      class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md"
                    />
                  </div>
                  <div class="w-[160px] md:w-full">
                    <h3 class="truncate title-post-new-01">Merch Tea Cup</h3>
                    <div class="content-01 flex flex-wrap gap-2">
                      <span>Price: $243</span>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-start items-start gap-4 mt-4">
                  <div
                    class="w-[200px] h-[80px] md:h-[120px] xl:w-[100px] xl:h-[60px] rounded-md"
                  >
                    <img
                      src="../img/1.jpg"
                      class="w-full h-[80px] md:h-[120px] xl:h-[60px] object-cover rounded-md"
                    />
                  </div>
                  <div class="w-[160px] md:w-full">
                    <h3 class="truncate title-post-new-01">
                      Storage Double Jars
                    </h3>
                    <div class="content-01 flex flex-wrap gap-2">
                      <span>Price: $252</span>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
          <section>
            <div class="py-10">
              <div>
                <h2 class="tag-01">Categories</h2>
              </div>
              <div class="border-t-2 relative my-6 z-[-1]">
                <span class="w-1/4 border-t-[1px] unde-01"></span>
              </div>

              <section>
                <div class="flex justify-between items-center gap-6">
                  <a href="#" class="sub-cate-01"> Science </a>
                  <div
                    class="w-full relative border-t-[1px] border-dashed sub-cate-01 top-0 left-0"
                  ></div>

                  <div class="cate-count-01 p-2 px-3 rounded-md">
                    <span>1</span>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-between items-center gap-6 pt-3">
                  <a href="#" class="sub-cate-01"> Science </a>
                  <div
                    class="w-full relative border-t-[1px] border-dashed sub-cate-01 top-0 left-0"
                  ></div>

                  <div class="cate-count-01 p-2 px-3 rounded-md">
                    <span>1</span>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-between items-center gap-6 pt-3">
                  <a href="#" class="sub-cate-01"> Science </a>
                  <div
                    class="w-full relative border-t-[1px] border-dashed sub-cate-01 top-0 left-0"
                  ></div>

                  <div class="cate-count-01 p-2 px-3 rounded-md">
                    <span>1</span>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex justify-between items-center gap-6 pt-3">
                  <a href="#" class="sub-cate-01"> Science </a>
                  <div
                    class="w-full relative border-t-[1px] border-dashed sub-cate-01 top-0 left-0"
                  ></div>

                  <div class="cate-count-01 p-2 px-3 rounded-md">
                    <span>1</span>
                  </div>
                </div>
              </section>
            </div>
          </section>
          <section>
            <div class="py-10">
              <div>
                <h2 class="tag-01">Popular Tags</h2>
              </div>
              <div class="border-t-2 relative my-6 z-[-1]">
                <span class="w-1/4 border-t-[1px] unde-01"></span>
              </div>
              <div>
                <ul class="flex flex-wrap gap-2">
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                  <li class="bgNew-01 p-2 px-4">
                    <a href="#">Lorem</a>
                  </li>
                </ul>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
