<?php use App\Models\CategoryTranslation; ?>
<div class="header_contact">
        <div class="container container_contact">
            <div class="languge">
              <img src="frontend/files/images/language.png">
              <a href="lang/vi"><img src="frontend/files/images/vietnamese_icon.png"> VI</a>
              <a href="lang/de"><img src="frontend/files/images/de.png"> DE</a>
              <!-- <select onchange="location = this.options[this.selectedIndex].value;">
                  <option {{ Session::get('locale')=='en' ? 'selected':'' }} value="lang/en">{{__('lang.english')}}</option>
                  <option {{ Session::get('locale')=='vi' ? 'selected':'' }} value="lang/vi">{{__('lang.vietnamese')}}</option>
                  <option {{ Session::get('locale')=='jp' ? 'selected':'' }} value="lang/jp">{{__('lang.japanese')}}</option>
              </select> -->
            </div>
        </div>
</div>
<section class="header">
    <div class="header_nav">
        <div class="container">
            <header>
              <nav class="container" id='cssmenu'>
                <div class="logo"><a href="{{asset('')}}" class="brand logo"><img src="data/home/{{$setting->img}}"></a></div>
                <div id="head-mobile"></div>
                <div class="button"></div>
                <ul>
                <li class=''><a href="{{asset('')}}">Trang chủ</a></li>
                @foreach($category as $cat)
                <?php $subcat = CategoryTranslation::where('parent', $cat->id)->get(); ?>
                @if(count($subcat)>0)
                <li><a href='{{$cat->Category->slug}}'>{{$cat->name}}</a>
                   <ul>
                    @foreach($subcat as $sub)
                    <li><a href='{{$sub->Category->slug}}'>{{$sub->name}}</a></li>
                    @endforeach
                   </ul>
                </li>
                @else
                <li class=''><a href="{{$cat->Category->slug}}">{{$cat->name}}</a></li>
                @endif
                @endforeach
                
                </ul>
              </nav>
            </header>
            <div class="menu_mobile"></div>
        </div>
    </div>
</section>