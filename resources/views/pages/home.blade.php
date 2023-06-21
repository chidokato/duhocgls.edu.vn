@extends('layout.index')

@section('title') {{$setting->title}} @endsection
@section('description') {{$setting->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection
@section('img'){{asset('')}}{{'frontend/imgs/duhocduc.png'}}@endsection

@section('css')
<link rel="stylesheet" href="{{asset('')}}frontend/files/plugins/home-custom.css">
@endsection

@section('content')

<div class="header_banner">
    <div class="banner-slider owl-carousel owl-theme">
            @foreach($slider as $val)
            <div class="banner-item">
                <img src="data/home/{{$val->Slider->img}}" alt="No picture">
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


<section class="main">
    <div class="main_hotel f8f8f8">
        <div class="container hotel_container">
            <div class="row hotel_row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hotel_col">
                    <div class="hotel_text">
                        <div class="text_name">
                            <h1 style="font-size: 1.7rem">
                                <!-- {{__('lang.heading1')}} -->
                                GIỚI THIỆU CHUNG
                            </h1>
                            <div class="text">
                                <div style="text-align:justify">
                                    <!-- <p>{{__('lang.text1')}}</p> -->
                                    <p>Công ty Cổ phần Tư vấn Du học GLS Education được thành lập và phát triển bởi đội ngũ Co-Founder là những du học sinh đã học tập và sinh sống tại Đức hơn 10 năm. Mang trong mình dòng máu Việt kết hợp với văn hoá và tư duy nước Đức, chúng tôi trở về Việt Nam với mục tiêu chung tay xây dựng đất nước và góp phần nâng cao giá trị người Việt.</p>
                                    <p>Bắt đầu từ năm 2018, GLS đã trải qua 05 năm hình thành và phát triển từ một trung tâm dạy tiếng Đức. Cho đến nay, GLS Education tự hào là đơn vị hàng đầu trong lĩnh vực du học nghề Đức tại Việt Nam, đồng thời có mối quan hệ đối tác chiến lược rộng khắp trên toàn nước Đức, chúng tôi tin rằng có thể hỗ trợ các bạn học viên trong việc lựa chọn được vùng miền theo đúng nhu cầu của mình.</p>
                                    <!-- <div class="button_getnow">
                                        <a href="#"><button>Xem thêm</button></a>
                                    </div> -->
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
                                    <i class="fa fa-road"></i>
                                </div>
                                <div class="item_text">
                                    <h3>TẦM NHÌN</h3>
                                    <span></span>
                                    <div class="item_text-price">
                                        <p>Trở thành đơn vị dẫn đầu thị trường Việt Nam trong lĩnh vực du học và định cư tại Đức. Đồng thời, xây dựng niềm tin và trở thành đối tác chiến lược của các doanh nghiệp lớn để mang đến những cơ hội nghề nghiệp tốt nhất cho cộng đồng người Việt</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                        <p>Sứ mệnh của GLS là mang đến cho cộng đồng cơ hội được học tập, sinh sống, làm việc và định cư tại Quốc gia số 1 châu Âu, góp phần nâng cao và khẳng định giá trị người Việt trên thị trường quốc tế</p>
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
                                        <p>Tận tâm - Chuyên nghiệp - Chính trực - Cá nhân hoá - Kết nối - Tập trung vào khách hàng</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="wpb_wrapper f8f8f8">
        <div class="container">
            <div class="row">
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
    </div> -->

    <div class="column_inner" style="background: url(frontend/imgs/bg1.jpg) no-repeat;">
        <div class="container">
            <!-- <div class="inner_text">
                <h2 class="home-title">CHỌN BLA ĐỂ XÂY DỰNG TƯƠNG LAI TƯƠI SÁNG, TẠI SAO?</h2>
                <div class="heading__line"></div>
            </div> -->
            <div class="owl-carousel section3123">
                <div class="item_text">
                    <img src="frontend/imgs/88888.png">
                    <h5 class="color_fff">100%</h5>
                    <p>Tỷ lệ học viên đỗ Visa</p>
                </div>
                <div class="item_text">
                    <img src="frontend/imgs/8888877.png">
                    <h5 class="color_fff"> > 90% </h5>
                    <p>Tỷ lệ học viên đỗ B1</p>
                </div>
                <div class="item_text">
                    <img src="frontend/imgs/886.png">
                    <h5 class="color_fff">800+</h5>
                    <p>Học viên theo học tiếng Đức mỗi năm</p>
                </div>
                <div class="item_text">
                    <img src="frontend/imgs/85.png">
                    <h5 class="color_fff">500+</h5>
                    <p>Hồ sơ Visa kết nối các học viên sang Đức thành công</p>
                </div>
            </div>
        </div>
    </div>
    
    @include('pages.iteam.customer')

    

    

    <div class="main_news f8f8f8">
        <div class="container news_container">
            <div class="news_text">
                <h2 class="home-title">DU HỌC NGHỀ</h2>
                <div class="heading__line"></div>
            </div>
            <div class="news_list">
                <div class="row news_list-row">
                    @foreach($posts->PostTranslation()->paginate(6) as $val)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="news_list-item">
                            <div class="news_item-img">
                                <a href="{{$posts->Category->slug}}/{{$val->post->slug}}">
                                    <img src="data/news/{{$val->post->img}}" alt="cho-tinh-sapa">
                                </a>
                            </div>
                            <div class="news_item-text">
                                <div class="news_item-title">
                                    <a href="{{$posts->Category->slug}}/{{$val->post->slug}}">
                                        {{$val->name}}
                                    </a>
                                </div>
                                <div class="read_more">
                                    <a href="">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="button_getnow">
                        <a href="#"><button>Xem tất cả các chương trình học</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

   <!--  <div class="column_inner" style="background: url(frontend/imgs/bg.jpg) no-repeat;">
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
    </div> -->
    @include('pages.iteam.form')

    <div class="column_inner section23489234">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="iteam">
                        <img class="icon" src="frontend/imgs/icon-down.png">
                        <div class="item_img">
                            <img src="frontend/imgs/fb.png">
                        </div>
                        <div class="info">
                            <p>Facebook</p>
                            <h6><a href="https://www.facebook.com/duhocgls.edu.vn/">Du học GLS</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="iteam">
                        <img class="icon" src="frontend/imgs/icon-down.png">
                        <div class="item_img">
                            <img src="frontend/imgs/zalo.png">
                        </div>
                        <div class="info">
                            <p>Zalo</p>
                            <h6><a href="https://zalo.me/0967943945">0967.943.945</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="iteam">
                        <img class="icon" src="frontend/imgs/icon-down.png">
                        <div class="item_img">
                            <img src="frontend/imgs/hotline.png">
                        </div>
                        <div class="info">
                            <p>Hotline</p>
                            <h6><a href="tel:0967943945">0967.943.945</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="iteam">
                        <img class="icon" src="frontend/imgs/icon-down.png">
                        <div class="item_img">
                            <img src="frontend/imgs/email.jpg">
                        </div>
                        <div class="info">
                            <p>Email</p>
                            <h6><a href="mail:duhocgls@gmail.com">duhocgls@gmail.com</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
    <div class="maps-home">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14901.943022387779!2d105.7878974!3d20.9731568!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad24981b983b%3A0x15407a1996506fd3!2zVFJVTkcgVMOCTSBUxq8gVuG6pE4gRFUgSOG7jEMgR0xTIEVEVUNBVElPTg!5e0!3m2!1svi!2s!4v1686717847230!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    

</section>

@endsection


@section('js')


@endsection