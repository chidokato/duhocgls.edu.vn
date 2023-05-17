@extends('layout.index')

@section('title') {{$setting->title}} @endsection
@section('description') {{$setting->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<link rel="stylesheet" href="{{asset('')}}frontend/files/plugins/home-custom.css">
@endsection

@section('content')

@include('layout.slider')

<section class="main">
    <div class="main_hotel f8f8f8">
        <div class="container hotel_container">
            <div class="row hotel_row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hotel_col">
                    <div class="hotel_text">
                        <div class="text_name">
                            <h1 style="font-size: 1.7rem">
                                <!-- {{__('lang.heading1')}} -->
                                VỀ TẬP ĐOÀN GIÁO DỤC BLA
                            </h1>
                            <div class="text">
                                <div style="text-align:justify">
                                    <!-- <p>{{__('lang.text1')}}</p> -->
                                    <p>Tập đoàn giáo dục BLA (BLA Education Group) được thành lập và phát triển bởi những tiến sĩ, thạc sĩ, giáo viên từ Đức trở về Việt Nam. BLA được sinh ra với sứ mệnh giúp hàng trăm ngàn các bạn trẻ Việt Nam có cơ hội sang Đức học tập và làm việc thành công, qua đó giúp đỡ cho gia đình và cho quê hương</p>
                                    <div class="button_getnow">
                                        <a href="#"><button>Xem thêm</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hotel_col">
                    <div class="youtube" style="background-image: url(frontend/imgs/img1.jpg);background-repeat: no-repeat;">
                        <div class="youtube_overlay">
                            <div class="youtube_text">
                                <div class="youtube_icon">
                                    <a href="https://youtu.be/p0dzDxGzRf0" data-fancybox=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_lodging">
        <div class="carousel_lod">
            <div class="container car_container">
                <div class="carousel_lod--list owl-carousel">
                    <div class="home-about">
                        <div class="col-lg-12 col-md-12">
                            <div class="">
                                <div class="item_img">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="item_text">
                                    <h3>Sứ mệnh</h3>
                                    <span></span>
                                    <div class="item_text-price">
                                        <p>Giúp các bạn trẻ Việt Nam sang Đức học tập và làm việc thành công, mang lại sự thịnh vượng & tinh hoa tri thức về cho gia đình, quê hương và đất nước. Mỗi học viên BLA sẽ là một đại sứ để bạn bè quốc tế hiểu và yêu mến Việt Nam hơn</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-about">
                        <div class="col-lg-12 col-md-12">
                            <div class="">
                                <div class="item_img">
                                    <i class="fa fa-road"></i>
                                </div>
                                <div class="item_text">
                                    <h3>TẦM NHÌN</h3>
                                    <span></span>
                                    <div class="item_text-price">
                                        <p>Trở thành Tập Đoàn SỐ 1 VIỆT NAM về du học và làm việc tại Đức. Giúp 1000 bạn mỗi năm sang Đức thành công trước năm 2025</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-about">
                        <div class="col-lg-12 col-md-12">
                            <div class="">
                                <div class="item_img">
                                    <i class="far fa-heart"></i>
                                </div>
                                <div class="item_text">
                                    <h3>GIÁ TRỊ CỐT LÕI</h3>
                                    <span></span>
                                    <div class="item_text-price">
                                        <p>Giá trị cốt lõi của BLA đó chính là UY TÍN. Chúng tôi đã, đang và sẽ hàng ngày vun đắp thêm uy tín của mình qua chất lượng dịch vụ đào tạo và tư vấn giáo dục của mình</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wpb_wrapper f8f8f8">
        <div class="container">
            <div class="wrapper_text">
                <h2 class="home-title">HỆ SINH THÁI HỌC TIẾNG ĐỨC CỦA BLA</h2>
                <div class="heading__line"></div>
            </div>
            <div class="row wpb_wrapper-row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="imgs">
                        <img src="frontend/imgs/system.png">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="iteam">
                        <div class="icon">
                            <i class="fa fa-home" aria-hidden="true" style="color:#f04923;"></i>
                        </div>
                        <div class="item-content">
                            <div class="item-title">Học Tại Trung Tâm</div>
                            <p> Học trực tiếp cùng các giáo viên người Đức và người Việt tại các trung tâm thuộc BLA khắp 3 miền đất nước, xem <span style="text-decoration:underline;color:#961e00;">https://bla.vn.</span></p>
                        </div>
                    </div>
                    <div class="iteam">
                        <div class="icon"><i class="fa fa-video-camera" aria-hidden="true" style="color:#feab2c;"></i></div>
                        <div class="item-content"><div class="item-title">Học Trực Tuyến</div><p> Học online với giáo viên qua các phần mềm như Zoom, Skype, Google Class, vv. Mỗi lớp học tối đa 5 học viên.</p></div>
                    </div>
                    <div class="iteam">
                        <div class="icon"><i class="fa fa-play" aria-hidden="true" style="color:#159890;"></i></div>
                        <div class="item-content"><div class="item-title">Học Qua Video</div><p> Học qua các video trên <span style="text-decoration:underline;color:#961e00;">https://tot.edu.vn</span> giúp bạn chủ động thời gian, tiết kiệm chi phí và nhiều tiện ích khác.</p></div>
                    </div>
                    <div class="iteam">
                        <div class="icon"><i class="fa fa-mobile" aria-hidden="true" style="color:#b42788;"></i></div>
                        <div class="item-content"><div class="item-title">Học Qua Ứng Dụng</div>
                        <p> Ứng dụng "Tiếng Đức Du Học" giúp học viên có thể tự học ngữ pháp, làm đề thử trắc nghiệm, ngữ pháp. Tải về</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main_news">
        <div class="container news_container">
            <div class="news_text">
                <h2 class="home-title">CÁC CHƯƠNG TRÌNH DU HỌC ĐỨC</h2>
                <div class="heading__line"></div>
            </div>
            <div class="news_list">
                <div class="row news_list-row">

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/4150/cho-tinh-sapa.html">
                                        <img src="frontend/files/images/news/Cho_tinh_Sapa_3.jpg" alt="cho-tinh-sapa">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/4150/cho-tinh-sapa.html">
                                            Tổng Hợp Thông Tin Các Chương Trình Du Học Nghề Đức 2021
                                        </a>
                                    </div>
                                    <div class="read_more">
                                        <a href="">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/4150/cho-tinh-sapa.html">
                                        <img src="frontend/files/images/news/Cho_tinh_Sapa_3.jpg" alt="cho-tinh-sapa">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/4150/cho-tinh-sapa.html">
                                            Tổng Hợp Thông Tin Các Chương Trình Du Học Nghề Đức 2021
                                        </a>
                                    </div>
                                    <div class="read_more">
                                        <a href="">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/4150/cho-tinh-sapa.html">
                                        <img src="frontend/files/images/news/Cho_tinh_Sapa_3.jpg" alt="cho-tinh-sapa">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/4150/cho-tinh-sapa.html">
                                            Tổng Hợp Thông Tin Các Chương Trình Du Học Nghề Đức 2021
                                        </a>
                                    </div>
                                    <div class="read_more">
                                        <a href="">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button_getnow">
                            <a href="#"><button>Xem tất cả các chương trình học</button></a>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main_news f8f8f8">
        <div class="container news_container">
            <div class="news_text">
                <h2 class="home-title">CÁC KHÓA HỌC TIẾNG ĐỨC</h2>
                <div class="heading__line"></div>
            </div>
            <div class="news_list">
                <div class="row news_list-row">

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/4150/cho-tinh-sapa.html">
                                        <img src="frontend/files/images/news/Cho_tinh_Sapa_3.jpg" alt="cho-tinh-sapa">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/4150/cho-tinh-sapa.html">
                                            Tổng Hợp Thông Tin Các Chương Trình Du Học Nghề Đức 2021
                                        </a>
                                    </div>
                                    <div class="read_more">
                                        <a href="">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/4150/cho-tinh-sapa.html">
                                        <img src="frontend/files/images/news/Cho_tinh_Sapa_3.jpg" alt="cho-tinh-sapa">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/4150/cho-tinh-sapa.html">
                                            Tổng Hợp Thông Tin Các Chương Trình Du Học Nghề Đức 2021
                                        </a>
                                    </div>
                                    <div class="read_more">
                                        <a href="">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/4150/cho-tinh-sapa.html">
                                        <img src="frontend/files/images/news/Cho_tinh_Sapa_3.jpg" alt="cho-tinh-sapa">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/4150/cho-tinh-sapa.html">
                                            Tổng Hợp Thông Tin Các Chương Trình Du Học Nghề Đức 2021
                                        </a>
                                    </div>
                                    <div class="read_more">
                                        <a href="">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button_getnow">
                            <a href="#"><button>Xem tất cả các chương trình học</button></a>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="column_inner" style="background: url(frontend/imgs/bg.jpg) no-repeat;">
        <div class="container news_container">
            <div class="inner_text">
                <h2 class="home-title">CHỌN BLA ĐỂ XÂY DỰNG TƯƠNG LAI TƯƠI SÁNG, TẠI SAO?</h2>
                <div class="heading__line"></div>
            </div>
            <div class="row home-about">
                <div class="col-lg-4 col-md-4">
                    <div class="item_img">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="item_text">
                        <h3 class="color_fff">CHẤT LƯỢNG ĐÀO TẠO CAO</h3>
                        <span></span>
                        <div class="item_text-price color_fff">
                            <p>BLA là một trong số ít các trung tâm có thể đào tạo từ A1 tới trình độ cao B2. Với đội ngũ giáo viên nhiều kinh nghiệm cùng hệ thống giáo trình hiện đại các học viên của BLA khi ra trường luôn có chất lượng thực tế cao hơn nhiều so với mặt bằng chung của cả nước ở cùng trình độ học</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="item_img">
                        <i class='fab fa-pagelines'></i>
                    </div>
                    <div class="item_text">
                        <h3 class="color_fff">PHƯƠNG PHÁP ĐỘC QUYỀN P4F</h3>
                        <span></span>
                        <div class="item_text-price color_fff">
                            <p>Phương pháp dạy ngoại ngữ P4F của BLA (ĐỘC QUYỀN) sẽ giúp học viên yêu thích việc học tiếng Đức và học hiệu quả hơn so với các phương pháp truyền thống. Phương pháp này còn đặc biệt hiệu quả dành cho các bạn chưa từng học ngoại ngữ hoặc sợ học ngoại ngữ</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="item_img">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="item_text">
                        <h3 class="color_fff">NHIỀU HỌC VIÊN DU HỌC THÀNH CÔNG</h3>
                        <span></span>
                        <div class="item_text-price color_fff">
                            <p>Với kinh nghiệm nhiều năm của mình, đội ngũ tư vấn viên của BLA tại Việt Nam cũng như cộng tác viên tại CHLB Đức đã giúp nhiều học viên du học thành công. Với BLA mục tiêu không phải là đưa được các học viên sang Đức mà là giúp từng học viên du học thành công và chắc chắn</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main_lodging">
        <div class="carousel_lod">
            <div class="container car_container">
                <div class="news_text">
                    <h2 class="home-title">CÂU CHUYỆN THÀNH CÔNG</h2>
                    <div class="heading__line"></div>
                </div>
                <div class="carousel_lod--list1 owl-carousel custom_1581866095395">
                    
                    <div class="iteam_row">
                        <div class="item_img">
                            <img src="https://bla.vn/wp-content/uploads/2020/03/NhuQuynh-120x120.png">
                            <div class="author">
                                <h4>Lê Bích Phượng</h4>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <p>Du học sinh tại đức</p>
                            </div>
                        </div>
                        <div class="item_text">
                            <h3>Đáng tin cậy và tin tưởng</h3>
                            <span></span>
                            <div class="item_text-price">
                                <p>BLA vừa tuyệt vời vừa rất đáng tin cậy. Ở đây tôi đã học được rất nhiều điều tuyệt vời về nước Đức. Ngoài ra, giáo viên và các em học sinh luôn thân thiện và dễ thương. Tôi cũng thích trò chơi “ma sói” cùng nhau trong thời gian ra chơi của buổi học. Và tôi hy vọng BLA sẽ phát triển mạnh mẽ hơn trong tương lai.</p>
                            </div>
                        </div>
                    </div>

                    <div class="iteam_row">
                        <div class="item_img">
                            <img src="https://bla.vn/wp-content/uploads/2020/03/Diep-120x120.png">
                            <div class="author">
                                <h4>Diệp Dịu Dàng</h4>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <p>Học viên tiếng Đức</p>
                            </div>
                        </div>
                        <div class="item_text">
                            <h3>Sống, học tập và làm việc như người Đức</h3>
                            <span></span>
                            <div class="item_text-price">
                                <p>Em cũng đã học tiếng Đức ở 1 vài nơi, sau đó mới đến với BLA. Và em đã ước giá như mình tìm thấy BLA sớm hơn. Các thầy cô đã đưa em đến vs nước Đức mà không chỉ riêng tiếng Đức. 1 nước Đức tiến bộ, phát triển nhanh cũng thật gần. Cái mà em thật sự học đc ở BLA là cách sống tích cực, cách học và làm việc hiệu quả nhất trên nước Đức, cách mà các thầy cô truyền nhiệt huyết tuổi trẻ cho thế hệ theo sau.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="column_inner" style="background: url(frontend/imgs/bg.jpg) no-repeat;">
        <div class="container news_container">
            <div class="row home-about">
                <div class="col-lg-6 col-md-6">
                    <div class="item_img">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="item_text">
                        <h3 class="color_fff">CHẤT LƯỢNG ĐÀO TẠO CAO</h3>
                        <span></span>
                        <div class="item_text-price color_fff">
                            <p>BLA là một trong số ít các trung tâm có thể đào tạo từ A1 tới trình độ cao B2. Với đội ngũ giáo viên nhiều kinh nghiệm cùng hệ thống giáo trình hiện đại các học viên của BLA khi ra trường luôn có chất lượng thực tế cao hơn nhiều so với mặt bằng chung của cả nước ở cùng trình độ học</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="item_img">
                        <i class='fab fa-pagelines'></i>
                    </div>
                    <div class="item_text">
                        <h3 class="color_fff">PHƯƠNG PHÁP ĐỘC QUYỀN P4F</h3>
                        <span></span>
                        <div class="item_text-price color_fff">
                            <p>Phương pháp dạy ngoại ngữ P4F của BLA (ĐỘC QUYỀN) sẽ giúp học viên yêu thích việc học tiếng Đức và học hiệu quả hơn so với các phương pháp truyền thống. Phương pháp này còn đặc biệt hiệu quả dành cho các bạn chưa từng học ngoại ngữ hoặc sợ học ngoại ngữ</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</section>

@endsection


@section('js')


@endsection