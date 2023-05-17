@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<link href="frontend/content/Css/room-single.css" rel="stylesheet" />
<link href="frontend/content/Css/blog.css" rel="stylesheet" />


<style type="text/css">
.booking_content h2{line-height: 1rem;margin-bottom: 10px;}
.star-rating{margin-bottom: 10px}
.star-rating i{ color: #ffc107 }
.booking_icon{margin-top: 10px;}
.row_item-img img {width: 100%;height: 165px;object-fit: cover;}
.row_container{ margin-top: 40px }
.header-page h1{ font-size: 2rem; border-bottom: 1px solid #ddd; padding-bottom: 10px; margin-bottom: 20px; }
.header-page h1 span{ position: relative }
.header-page h1 span:after{
    position: absolute;
    content: '';    background: #ffc107;
    width: 100%;
    height: 2px;
    bottom: -12px;
    left: 0;
}
.input_email input{
    border: 1px solid #ddd;
}
</style>
@endsection

@section('content')
<section class="main">
    <div class="container row_container">
        <div class="row">
            <div class="col-8 col-md-8 col-lg-8">
                <div class="header-page">
                    <h1><span>{{$data->name}}</span></h1>
                </div>
                <div class="news_list">
                    <div class="row news_list-row">
                        @foreach($post as $val)
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
            <div class="col-12 col-md-4 col-lg-4">
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


            </div>
        </div>
    </div>

    <div class="main_news">
        <div class="container news_container">
            
        </div>
    </div>
    <div class="main_space"></div>
</section>

@endsection