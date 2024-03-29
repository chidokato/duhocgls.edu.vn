<section class="footer">
        <div class="main_footer">
            <div class="container footer_container">
                <div class="row footer_row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="footer_logo" style="margin: 0 0 15px 0;">
                            <img src="data/home/{{$setting->Setting->img}}" alt="No picture">
                        </div>
                        <div class="footer_info" style="font-size: 13px">
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <h3 style="color:#ffffff">Liên hệ</h3>
                        <div class="footer_contact">
                            <ul class="contact_address">
                                <li class="contact_address-item">
                                    <i class="fas fa-map-marker-alt"></i> {{$setting->address}}
                                </li>
                                <li class="contact_address-item">
                                    <a href="#">
                                        <i class="fas fa-phone-alt"></i> {{$setting->hotline}}
                                    </a>
                                </li>
                                <li class="contact_address-item">
                                    <a href="#">
                                        <i class="far fa-envelope"></i> {{$setting->email}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <h3 style="color:#ffffff">Đường dẫn</h3>
                        <div class="footer_quick">
                            <ul class="quick_list">
                                    <li class="quick_list-item">
                                        <a href="contact">Liên hệ</a>
                                    </li>
                                    <li class="quick_list-item">
                                        <a href="about">Về chúng tôi</a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <h3 style="color:#ffffff">ĐĂNG KÝ NHẬN THÔNG TIN</h3>
                        <div class="input_email">
                            <input type="text" placeholder="Email">
                            <i class="far fa-envelope"></i>
                        </div>
                        <a href="#">
                            <button class="button_signUp">Đăng ký ngay</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_copyright">
            <div class="container">
                <span>
                    Copyright ©Du Học GLS 2023 All Rights Reserved
                </span>
            </div>
        </div>
    </section>