<body>
<div id="wrapper">
    <!-- Header -->
    <header class="header">
        <!-- Top Bar -->
        <div class="top_bar">
            <div class="bar__info">
                <div class="phone">0962100267</div>
                <div class="social">
                    <ul class="social_list">
                        <li class="social_list_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social_list_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="social_list_item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>

            </div>
            <div class="bar__user">
                <div class="bar__user-login"><a href="?act=login">login</a></div>
                <div class="bar__user-regis"><a href="?act=signup">register</a></div>
            </div>
        </div>

        <div class="main_nav">
            <div class="main_nav__logo"><a href="#"><img src="styles/images/logo.png" alt="logo"> VIVUVIET</a></div>
            <div class="main_nav__menu">
            <ul class="main_nav__list">
            <li class="main_nav__item"><a href="?act=home">TRANG CHỦ</a></li>
                    <li class="main_nav__item"><a href="?act=gioithieu">GIỚI THIỆU</a></li>
                    <li class="main_nav__item"><a href="?act=offer">ƯU ĐÃI</a></li>
                    <li class="main_nav__item"><a href="?act=blog">TIN TỨC</a></li>
                    <li class="main_nav__item"><a href="?act=contact">LIÊN HỆ</a></li>
               
                </ul>
            </div>
            <div class="main_nav__search"></div>
        </div>
    </header>
    <div class="main">
        <div class="main__slide_offers">
            <div class="home_slide__item">
                <div class="home_slide__background"
                     style="background-image: url(styles/images/offers_slide.jpg)"></div>
                <div class="home__content">
                    <div class="home__title animated bounceInDown">
                        Liên hệ
                    </div>
                </div>
            </div>
        </div>
        <!--        contact-->
        <div class="contact_form_container">
            <div class="box contact_form__box" >
                <div class="contact_form__title">Form liên hệ</div>
                <form action="" id="form_contact"style="color:#fff" class="contact__form" method="post" name="form_contact"
                      >
                    <label>
                        <input id="form_name" class="contact__form_name input_field" name="name" placeholder="Họ và Tên"
                               type="text" value="">
                    </label>
                    <label>
                        <input id="form_email" class="contact__form_email input_field" name="email" placeholder="E-mail"
                               type="text" value="">
                    </label>
                    <label>
                        <input id="form_subject" class="contact__form_subject input_field" name="subject"
                               placeholder="Chủ đề" type="text">
                    </label>
                    <textarea name="mess" id="form_mess" placeholder="Nội dung" rows="4"
                              class="contact__form_mess input_field"></textarea>
                    <input type="submit" class="contact__form_button button trans_200" value="Gởi đi">
                </form>
            </div>
        </div>

        <div class="contact__info">
            <div class="box contact__info_box">
                <h2>Địa chỉ</h2>
                <p>- 137 Nguyễn Thị Thập, Hòa Minh, Liên Chiểu,TP.Đà Nẵng -</p>
            </div>
        </div>
        <div class="contact__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.802545904285!2d108.16776031451235!3d16.075732988876922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218e6e07b1c3f%3A0x459e4bf5a2af323e!2zVHLGsOG7nW5nIGNhbyDEkeG6s25nIHRo4buxYyBow6BuaCBGUFQgUE9MWVRFQ0hOSUMgxJDDoCBO4bq1bmc!5e0!3m2!1svi!2s!4v1555684901135!5m2!1svi!2s"
                    width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

    <footer class="footer">
        <div class="box footer__box">
            <div class="footer__about">
                <div class="footer__logo">
                    <div class="logo">
                        <a href="#"><img src="styles/images/logo.png" alt="">VIVUVIET</a>
                    </div>
                </div>
                <p class="footer_about__text">
                    ViVuViet tự hào là một đơn vị tiêu biểu trong lĩnh vực tour du lịch đón nhận giải thưởng uy tín
                    nhất dành cho cộng đồng doanh nghiệp Việt Nam.
                </p>
                <ul class="footer_social_list">
                    <li class="footer_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="footer_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="footer_social_item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="footer__blog">
                <div class="footer_title">bản tin</div>
                <div class="footer_blog__item">
                    <div class="footer_blog__image"><img src="styles/images/footer_blog_1.jpg" alt=""></div>
                    <div class="footer_blog__content">
                        <div class="footer_blog__title"><a href="#">Địa điểm du lịch Hè 2019</a></div>
                        <div class="footer_blog__date">30/04/2019</div>
                    </div>
                </div>
                <div class="footer_blog__item">
                    <div class="footer_blog__image"><img src="styles/images/footer_blog_1.jpg" alt=""></div>
                    <div class="footer_blog__content">
                        <div class="footer_blog__title"><a href="#">Địa điểm du lịch Hè 2019</a></div>
                        <div class="footer_blog__date">30/04/2019</div>
                    </div>
                </div>
                <div class="footer_blog__item">
                    <div class="footer_blog__image"><img src="styles/images/footer_blog_1.jpg" alt=""></div>
                    <div class="footer_blog__content">
                        <div class="footer_blog__title"><a href="#">Địa điểm du lịch Hè 2019</a></div>
                        <div class="footer_blog__date">30/04/2019</div>
                    </div>
                </div>
            </div>
            <div class="footer__tags">
                <div class="footer_title">Tags</div>
                <ul class="tags_list">
                    <li class="tags_item"><a href="#">Miền Bắc</a></li>
                    <li class="tags_item"><a href="#">Miền Trung</a></li>
                    <li class="tags_item"><a href="#">Miền Nam</a></li>
                    <li class="tags_item"><a href="#">Đà Nẵng</a></li>
                    <li class="tags_item"><a href="#">Quảng Nam</a></li>
                    <li class="tags_item"><a href="#">Huế</a></li>
                </ul>
            </div>
            <div class="footer__contact">
                <div class="footer_title">Liên hệ</div>
                <ul class="contact_list">
                    <li class="contact_item">
                        <div class="contact_icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact_text">137 Nguyễn Thị Thập, Hòa Minh, Liên Chiểu, Đà Nẵng</div>
                    </li>
                    <li class="contact_item">
                        <div class="contact_icon"><i class="fas fa-phone-square"></i></div>
                        <div class="contact_text">+84 788 079 036</div>
                    </li>
                    <li class="contact_item">
                        <div class="contact_icon"><i class="fas fa-envelope"></i></div>
                        <div class="contact_text">vivuviet@gmail.com</div>
                    </li>
                    <li class="contact_item">
                        <div class="contact_icon"><i class="fas fa-globe-asia"></i></div>
                        <div class="contact_text">www.vivuviet.tk</div>
                    </li>

                </ul>
            </div>
        </div>
    </footer>
</div>
</body>