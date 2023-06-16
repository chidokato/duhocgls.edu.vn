@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<link href="frontend/content/Css/room-single.css" rel="stylesheet" />
<link href="frontend/content/Css/blog.css" rel="stylesheet" />
@endsection

@section('content')

<div class="header_banner">
    <div class="banner-slider owl-carousel owl-theme">
            @foreach($images as $val)
            <div class="banner-item">
                <img src="data/category/{{$val->img}}" alt="No picture">
                <!-- <div class="header_name">
                    <h3 class="name_text">
                        <div style="text-align:center"><span style="color:#FFFFFF">&nbsp;Thuộc quần thể biệt thự&nbsp;cao cấp </span></div>
                    </h3>
                    <h3 class="name_title">
                        Sang trọng &amp; đẳng cấp
                    </h3>
                    <div class="name_button" style="text-align: center;">
                        <a href="phong-nghi.html">
                            <button>Kh&#225;m ph&#225; ph&#242;ng</button>
                        </a>
                    </div>
                </div> -->
            </div>
            @endforeach
    </div>
</div>

@if($data->Category->style == 1)
<section class="section56">
    <div class="container">
        <div class="owl-carousel owl-theme owlCarousel123">
            <div class="item">
                <div class="icon">
                    <i class="fa fa-gift" aria-hidden="true"></i>
                </div>
                <div class="name">Miễn 100% học phí & cơ hội nhận học bổng </div>
                <!-- <div class="text">Chính phủ Đức tài trợ 100% toàn bộ chi phí học tập cho sinh viên trong suốt thời gian học nghề tại Đức</div> -->
            </div>
            <div class="item">
                <div class="icon">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </div>
                <div class="name">Nhận lương trong quá trình học lên tới 35.000.000 VNĐ/tháng </div>
                <!-- <div class="text">Chính phủ Đức tài trợ 100% toàn bộ chi phí học tập cho sinh viên trong suốt thời gian học nghề tại Đức</div> -->
            </div>
            <div class="item">
                <div class="icon">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                </div>
                <div class="name">Thu nhập ra trường lên tới 80.000.000 VNĐ/tháng </div>
                <!-- <div class="text">Chính phủ Đức tài trợ 100% toàn bộ chi phí học tập cho sinh viên trong suốt thời gian học nghề tại Đức</div> -->
            </div>
            <div class="item">
                <div class="icon">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <div class="name">Định cư sau 05 năm học tập & làm việc </div>
                <!-- <div class="text">Chính phủ Đức tài trợ 100% toàn bộ chi phí học tập cho sinh viên trong suốt thời gian học nghề tại Đức</div> -->
            </div>
            <div class="item">
                <div class="icon">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <div class="name">Du lịch khắp Châu Âu không cần xin Visa </div>
                <!-- <div class="text">Chính phủ Đức tài trợ 100% toàn bộ chi phí học tập cho sinh viên trong suốt thời gian học nghề tại Đức</div> -->
            </div>
        </div>
    </div>
</section>

<section class="section57 f8f8f8">
    <div class="container">
        <h2>TẠI SAO NÊN CHỌN DU HỌC NGHỀ ĐỨC TẠI GLS?</h2>
        <div class="row">
            <div class="col-6 col-md-6 col-lg-6">
                <div class="image"><img src="frontend/imgs/5-mem.png"></div>
            </div>
            <div class="col-6 col-md-6 col-lg-6 text">
                <ul>
                    <li><img src="frontend/imgs/Asset-2.png"> <span>Miễn <strong>100% học phí</strong> trong suốt thời gian học nghề tại Đức</span></li>
                    <li><img src="frontend/imgs/Asset-3.png"> <span>Nhận lương học nghề từ <strong>950 – 2.200 Euro/tháng</strong> ngay khi vào học. Chưa kể làm thêm</span></li>
                    <li><img src="frontend/imgs/Asset-4.png"> <span><strong>Bằng cấp quốc tế</strong> có giá trị trên toàn cầu</span></li>
                    <li><img src="frontend/imgs/Asset-5.png"> <span>CAM KẾT 100% có VIÊC LÀM sau tốt nghiệp. <strong>Lương 2.500-3.500 Euro/tháng</strong></span></li>
                    <li><img src="frontend/imgs/Asset-6.png"> <span>Được học tập trong môi trường, thiết bị hiện đại, chuyên nghiệp, Công dân toàn cầu</span></li>
                    <li><img src="frontend/imgs/Asset-7.png"> <span>Được <strong>định cư sau 05 năm</strong> học tập và làm việc tại Đức, NHẬP QUỐC TỊCH sau 8 năm</span></li>
                    <li><img src="frontend/imgs/Asset-8.png"> <span>Tự do đi lại, khám phá 26 nước khối Schengen không cần xin visa</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section58">
    <div class="container">
        <h2>LỘ TRÌNH DU HỌC NGHỀ ĐỨC TẠI GLS</h2>
        <div class="row">
            <div class="col-6 col-md-6 col-lg-6 text">
                <ul>
                    <li><strong>B1:</strong> Tư vấn du học nghề Đức, tham khảo hợp đồng</li>
                    <li><strong>B2:</strong> Nộp hồ sơ cho Công ty, ký hợp đồng</li>
                    <li><strong>B3:</strong> Bắt đầu các khoá học tiếng Đức</li>
                    <li><strong>B4:</strong> Đăng ký thi A2 (hoặc B1), ôn thi A2 (hoặc B1)</li>
                    <li><strong>B5:</strong> Dịch thuật, công chứng, chuẩn bị các giất tờ cần thiết</li>
                    <li><strong>B6:</strong> Thi A2 (hoặc B1), nhận bằng A2 (hoặc B1) và hoàn thành hồ sơ xin học nghề</li>
                    <li><strong>B7:</strong> Học chứng chỉ nền (nếu cần), bổ sung thêm các kỹ năng khác (phỏng vấn,...)</li>
                    <li><strong>B8:</strong> Nộp hồ sơ xin học nghề và hợp đồng lao động tại nơi thực hành</li>
                    <li><strong>B9:</strong> Mở tài khoản chứng minh tài chính (tuỳ từng ngành và trường hợp), mua bảo hiểm</li>
                    <li><strong>B10:</strong> Đặt hẹn, nộp hồ sơ xin Visa cho Đại sứ quán</li>
                    <li><strong>B11:</strong> Nhận kết quả Visa</li>
                    <li><strong>B12:</strong> Đặt vé máy bay và sang Đức</li>
                    <li><strong>B13:</strong> Đưa đón, sắp xếp chỗ ở, hỗ trợ làm các thủ tục tại Đức</li>
                </ul>
            </div>
            <div class="col-6 col-md-6 col-lg-6">
                <div class="image"><img src="https://edugo.vn/wp-content/uploads/2022/12/du-hoc-nghe-duc-2023-e1675418561742.jpg"></div>
            </div>
        </div>
    </div>
</section>

<section class="sec55" style="background-image: url(frontend/imgs/Asset-8-1.png);background-repeat: no-repeat;">
    <div class="container">
        <h2>ĐIỀU KIỆN DU HỌC NGHỀ ĐỨC</h2>
        <div class="row">
            <div class="col-4 col-md-4 col-lg-4">
                <div class="item">
                    <div class="mainitem55">
                        <div class="icon55"></div>
                        <div class="text55"><p>Độ tuổi 18-30, Đã tốt nghiệp THPT</p></div>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-4 col-lg-4">
                <div class="item item1">
                    <div class="mainitem55 mainitem551">
                        <div class="icon55"></div>
                        <div class="text55"><p>Sức khỏe tốt, không mắc bệnh truyền nhiễm, không có tiền án tiền sự</p></div>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-4 col-lg-4">
                <div class="item item2">
                    <div class="mainitem55 mainitem552">
                        <div class="icon55"></div>
                        <div class="text55"><p>Trình độ tiếng Đức đạt A2 hoặc B1</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endif



<section class="main">
    <div class="container row_container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="header-page">
                    <h1 class="{{ $data->Category->style > 0 ? 'title1':'' }}"><span>{{$data->name}}</span></h1>
                </div>
                <div class="news_list">
                    <div class="row news_list-row">
                        @foreach($post as $val)
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="news_list-item">
                                    <div class="news_item-img">
                                        <a href="{{$data->category->slug}}/{{$val->post->slug}}">
                                            <img src="data/news/{{$val->post->img}}" alt="No picture">
                                        </a>
                                    </div>
                                    <div class="news_item-text">
                                        <div class="news_item-title">
                                            <a href="{{$data->category->slug}}/{{$val->post->slug}}">
                                                {{$val->name}}
                                            </a>
                                        </div>
                                        <div class="news_item-post">
                                            <span> on</span>
                                            <a href="{{$data->category->slug}}" style="color:#c7b39a">{{$data->name}}</a>
                                        </div>
                                        <div class="news_item-content">
                                            {{$val->detail}}
                                        </div>
                                        <div class="read_more">
                                            <a href="{{$data->category->slug}}/{{$val->post->slug}}">Chi tiết <i class="fa-solid fa-angles-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach 
                    </div>
                </div>
            </div>
            <!-- <div class="col-12 col-md-12 col-lg-4">
                <div class="reservation_hotel">
                    <div class="reservation_title">
                        <h5 class="reservation_title-name">
                            Tìm kiếm
                        </h5>
                    </div>
                    <div class="hotel_content">
                        <div class="input_email">
                            <input type="text" placeholder="Nhập từ khóa tìm kiếm">
                        </div>
                    </div>
                </div>

                <div class="block_text">
                    <div class="block_title">
                        <h2 class="block_title-name">Bài đăng gần đây</h2>
                    </div>
                    <div class="block_content">
                            
                        <a href="/tin-tucs/3137/ban-lao-chai-ta-van">
                            <div class="blog-item">
                                <div class="blog-item-img">
                                    <img src="frontend/files/images/news/kham-pha-ban-lao-chai-ta-van-khi-di-du-lich-sapa-3.jpg" alt="ban-lao-chai-ta-van">
                                </div>
                                <div class="blog-item-text" style="">
                                    <div class="item-text-title">
                                Bản Lao Chải &amp; Tả Van
                                    </div>
                                    <div class="item-text-date"><em>Tháng Năm 12, 2022</em></div>
                                </div>
                            </div>
                        </a>
                        <hr style="margin:0">
                            
                    </div>
                </div>


            </div> -->
        </div>
    </div>

    <div class="main_news">
        <div class="container news_container">
            
        </div>
    </div>
    <div class="main_space"></div>
</section>

@endsection
