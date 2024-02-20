@extends('layouts.master')
@section('content')
    <main class="mainct">
        <div class="boxleft">
            <h1>{{ $courses['c_name'] }}</h1>
            <p>{{ $courses['c_description'] }}</p>
            <h3>Nội dung khóa học</h3>
            <div class="cover">
                <div class="contenl">
                    <h4>1. Giới thiệu</h4>
                </div>
                <div class="contenl">
                    <h4>2. Biến và kiểu dữ liệu</h4>
                </div>
                <div class="contenl">
                    <h4>3. Cấu trúc điều khiển vòng lặp</h4>
                </div>
                <div class="contenl">
                    <h4>4 . Mảng</h4>
                </div>

            </div>
        </div>
        <div class="boxright">
            <iframe width="100%" height="220" style="border-radius: 15px"
                src="https://www.youtube.com/embed/5vLkWRF-dpE?si=CdNUbajOSAatyKyk" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            <div class="textr">
                <h3>Xem miễn phí</h3>
                <span>{{ $courses['c_price'] }}</span>
                <span style="margin-left: 30px"><s>350.000đ</s></span>
            </div>
            <form action="" method="post">
                <button class="modal-btn">Add To Cart</button>
                <button class="modal-btn">Buy Now</button>
            </form>
            <div class="textr">
                <h3>Thông tin khóa học</h3>
                <p class="ti-timer"> 22,5 giờ video theo yêu cầu</p>
                <p class="ti-video-clapper"> 17 video</p>
                <p class="ti-book"> 130 bài học</p>
            </div>
        </div>
    </main>
@endsection
