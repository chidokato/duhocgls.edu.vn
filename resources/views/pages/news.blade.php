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
        <div class="header-page">
            <h2 class="title1">TẠI SAO NÊN CHỌN DU HỌC NGHỀ ĐỨC TẠI GLS?</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="image"><img src="frontend/imgs/anh3.jpg"></div>
            </div>
            <div class="col-lg-6 col-md-12 text">
                <ul>
                    <li><img src="frontend/imgs/Asset-2.png"> <span>Miễn <strong>100% học phí</strong> và cơ hội nhận học bổng giá trị</span></li>
                    <li><img src="frontend/imgs/Asset-3.png"> <span>Nhận lương trong quá trình học lên tới <strong>35.000.000 VNĐ/tháng</strong> (chưa kể làm thêm)</span></li>
                    <li><img src="frontend/imgs/Asset-4.png"> <span><strong>Định cư sau 05 năm</strong> học tập và làm việc</span></li>
                    <li><img src="frontend/imgs/Asset-5.png"> <span>Cam kết ra trường có việc làm ngay, thu nhập lên tới <strong>80.000.000 VNĐ/tháng</strong></span></li>
                    <li><img src="frontend/imgs/Asset-6.png"> <span>Chương trình học đa dạng, chất lượng cao</span></li>
                    <li><img src="frontend/imgs/Asset-7.png"> <span>Bằng cấp quốc tế có <strong>giá trị trên toàn cầu</strong></span></li>
                    <li><img src="frontend/imgs/Asset-8.png"> <span>Tự do <strong>đi lại khắp châu Âu</strong> không cần xin Visa</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section58">
    <div class="container">
        <h2>LỘ TRÌNH DU HỌC NGHỀ ĐỨC TẠI GLS</h2>
        <div class="row">
            <div class="col-lg-6 col-md-12 text">
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
            <div class="col-lg-6 col-md-12">
                <div class="image"><img src="frontend/imgs/anh2.jpg"></div>
            </div>
        </div>
    </div>
</section>

<section class="sec55" style="background-image: url(frontend/imgs/Asset-8-1.png);background-repeat: no-repeat;">
    <div class="container">
        <h2>ĐIỀU KIỆN DU HỌC NGHỀ ĐỨC</h2>
        <div class="row">
            <div class="carousel_lod--list owl-carousel">
                <div class="item">
                    <div class="mainitem55">
                        <div class="icon55"></div>
                        <div class="text55"><p>Độ tuổi 18-30, Đã tốt nghiệp THPT</p></div>
                    </div>
                </div>
            
                <div class="item item1">
                    <div class="mainitem55 mainitem551">
                        <div class="icon55"></div>
                        <div class="text55"><p>Sức khỏe tốt, không mắc bệnh truyền nhiễm, không có tiền án tiền sự</p></div>
                    </div>
                </div>
            
                <div class="item ">
                    <div class="mainitem55 ">
                        <div class="icon55"></div>
                        <div class="text55"><p>Trình độ tiếng Đức đạt A2 hoặc B1</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if($data->Category->style == 2)
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

<section class="section156">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="header-page">
                    <h2 class="title1">HỌC VIÊN ĐƯỢC GÌ SAU 02 TUẦN HỌC THỬ MIỄN PHÍ TẠI GLS?</h2>
                </div>
            </div>
        
            <div class="col-lg-6 col-md-12 img">
                <img src="frontend/imgs/anh1.jpg">
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="text">
                    <ul>
                        <li>
                            <img class="icon" src="frontend/imgs/giangvien.png">
                            <div>
                                <span>Giảng viên</span><br>Học cùng đội ngũ giảng viên giàu kinh nghiệm
                            </div>
                        </li>
                        <li>
                            <img class="icon" src="frontend/imgs/kienthuc.png">
                            <div>
                                <span>Kiến thức</span><br>Nắm vững kiến thức tiếng Đức cơ bản & giao tiếp hàng ngày
                            </div>
                        </li>
                        <li>
                            <img class="icon" src="frontend/imgs/phuongphap.png">
                            <div>
                                <span>Phương pháp</span><br>Phương pháp và môi trường học đa dạng & thú vị
                            </div>
                        </li>
                        <li>
                            <img class="icon" src="frontend/imgs/ngoaikhoa.png">
                            <div>
                                <span>Hoạt động ngoại khóa</span><br>Được tham gia các hoạt động ngoại khoá để tìm hiểu về văn hoá Đức
                            </div>
                        </li>
                        <li>
                            <img class="icon" src="frontend/imgs/cohoi.png">
                            <div>
                                <span>Cơ hội</span><br>Nắm được tất cả thông tin cơ bản về các cơ hội khi đi du học tại Đức
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section58 section157">
    <div class="container">
        <h2 class="title1">TẠI SAO NÊN HỌC TIẾNG ĐỨC TẠI GLS?</h2>
        <div class="row">
            <div class="col-lg-6 col-md-12 text">
                <ul>
                    <li>Hệ thống đào tạo với môi trường học tập toàn diện.</li>
                    <li>Chương trình học bài bản & chuyên nghiệp, lịch khai giảng liên tục hàng tháng.</li>
                    <li>Giáo trình miễn phí khi học viên đăng ký khoá học.</li>
                    <li>Đội ngũ giảng viên giàu kinh nghiệm giúp học viên phát âm chuẩn ngay từ trình độ cơ bản.</li>
                    <li>Có trợ giảng chuyên môn hỗ trợ lớp học trong suốt các khoá học.</li>
                    <li>Mô hình lớp học tối đa 10 người, đảm bảo chất lượng đào tạo.</li>
                    <li>Học viên được tham gia học thử miễn phí, cam kết chuẩn đầu ra.</li>
                    <li>Ký túc xá đầy đủ tiện nghi trong suốt quá trình học và làm Visa</li>
                    <li>Học viên được tham gia các hoạt động ngoại khoá với người bản xứ.</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="image"><img src="frontend/imgs/anh2.jpg"></div>
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
    
    @include('pages.iteam.form')
    
</section>

@endsection
