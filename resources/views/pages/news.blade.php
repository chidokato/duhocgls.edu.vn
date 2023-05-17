@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('content')

<section class="main">
    <div class="main_space"></div>
    <div class="main_news">
        <div class="container news_container">
            <div class="news_text">
                
                <h2 class="title" style="color:#111111;margin: 0 0 30px 0;font-weight: 400;"></h2>
            </div>
            <div class="news_list">
                <div class="row news_list-row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="/tin-tucs/3137/ban-lao-chai-ta-van">
                                        
                                        <img src="frontend/files/images/news/kham-pha-ban-lao-chai-ta-van-khi-di-du-lich-sapa-3.jpg" alt="No picture">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="/tin-tucs/3137/ban-lao-chai-ta-van">
                                            Bản Lao Chải &amp; Tả Van
                                        </a>
                                    </div>
                                    <div class="news_item-post">
                                        <span> on</span>
                                        <a href="#" style="color:#c7b39a">Tin tức</a>
                                    </div>
                                    <div class="news_item-content">
                                        Nhờ vẻ đẹp hùng vĩ của ruộng bậc thang, núi non cũng như thác nước, Lao Chải và Tả Van đã trở thành địa điểm lý tưởng cho các hoạt động ngoài trời.
                                    </div>
                                    <div class="read_more">
                                        <a href="/tin-tucs/3137/ban-lao-chai-ta-van">Read more <i class="fa-solid fa-angles-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="/tin-tucs/3137/ban-lao-chai-ta-van">
                                        
                                        <img src="frontend/files/images/news/kham-pha-ban-lao-chai-ta-van-khi-di-du-lich-sapa-3.jpg" alt="No picture">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="/tin-tucs/3137/ban-lao-chai-ta-van">
                                            Bản Lao Chải &amp; Tả Van
                                        </a>
                                    </div>
                                    <div class="news_item-post">
                                        <span> on</span>
                                        <a href="#" style="color:#c7b39a">Tin tức</a>
                                    </div>
                                    <div class="news_item-content">
                                        Nhờ vẻ đẹp hùng vĩ của ruộng bậc thang, núi non cũng như thác nước, Lao Chải và Tả Van đã trở thành địa điểm lý tưởng cho các hoạt động ngoài trời.
                                    </div>
                                    <div class="read_more">
                                        <a href="/tin-tucs/3137/ban-lao-chai-ta-van">Read more <i class="fa-solid fa-angles-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="/tin-tucs/3137/ban-lao-chai-ta-van">
                                        
                                        <img src="frontend/files/images/news/kham-pha-ban-lao-chai-ta-van-khi-di-du-lich-sapa-3.jpg" alt="No picture">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="/tin-tucs/3137/ban-lao-chai-ta-van">
                                            Bản Lao Chải &amp; Tả Van
                                        </a>
                                    </div>
                                    <div class="news_item-post">
                                        <span> on</span>
                                        <a href="#" style="color:#c7b39a">Tin tức</a>
                                    </div>
                                    <div class="news_item-content">
                                        Nhờ vẻ đẹp hùng vĩ của ruộng bậc thang, núi non cũng như thác nước, Lao Chải và Tả Van đã trở thành địa điểm lý tưởng cho các hoạt động ngoài trời.
                                    </div>
                                    <div class="read_more">
                                        <a href="/tin-tucs/3137/ban-lao-chai-ta-van">Read more <i class="fa-solid fa-angles-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_space"></div>
</section>

@endsection
