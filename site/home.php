
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
                <div class="bar__user-login"><a href="?act=dangky">Đăng ký</a></div>
                <div class="bar__user-regis"><a href="?act=dangnhap">Đăng nhập</a></div>
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
            <div class="main_nav__search">

                <form action=""><input class="input_search" type="text"></form>
                <div class="search__item"><i class="fas fa-search"></i></div>
            </div>
        </div>
    </header>
    <div class="main">
        <!--slider-->
        <div class="main__slide">
            <div class="home_slide__item">
                <div class="home_slide__background"
                     style="background-image: url(../styles/images/bana-slide.jpg)"></div>
                <div class="home_slider__content">
                    <div class="home_slider_content_inner animated bounceInLeft">
                        <h1>tour</h1>
                        <h1>Bana Hill</h1>
                        <div class="button home_slider__button">
                            <div class="button_bcg"></div>
                            <a href="#">Xem ngay<span></span><span></span><span></span></a></div>
                    </div>
                </div>
            </div>
            <div class="home_slide__item">
                <div class="home_slide__background"
                     style="background-image: url(styles/images/hoian-slide.jpg)"></div>
                <div class="home_slider__content">
                    <div class="home_slider_content_inner animated bounceInRight">
                        <h1>tour</h1>
                        <h1>Hội An</h1>
                        <div class="button home_slider__button">
                            <div class="button_bcg"></div>
                            <a href="#">Xem ngay<span></span><span></span><span></span></a></div>
                    </div>
                </div>
            </div>
            <div class="home_slide__item">
                <div class="home_slide__background"
                     style="background-image: url(styles/images/phuquoc_slide.jpg)"></div>
                <div class="home_slider__content">
                    <div class="home_slider_content_inner animated bounceInDown">
                        <h1>tour</h1>
                        <h1>Phú Quốc</h1>
                        <div class="button home_slider__button">
                            <div class="button_bcg"></div>
                            <a href="#">Xem ngay<span></span><span></span><span></span></a></div>
                    </div>
                </div>
            </div>
            <div class="main_slide__nav nav__prev"><i onclick="plusSlides(-1)" class="fas fa-chevron-circle-left"></i>
            </div>
            <div class="main_slide__nav nav__next"><i onclick="plusSlides(1)"
                                                      class="fas fa-chevron-circle-right"></i></i>
            </div>
            <div class="main_slide__dots">
                <ul class="customs_dots">
                    <li class="customs_dot active" onclick="currentSlide(1)">01.</li>
                    <li class="customs_dot" onclick="currentSlide(2)">02.</li>
                    <li class="customs_dot" onclick="currentSlide(3)">03.</li>
                </ul>
            </div>
        </div>
        <div class="main_search">
            <div id="tabs" class="main_search__tabs">
            <ul class="search_tabs__list">
            <li class="search_tabs__item"><a href="#tabs-1"><i
                            class="fas fa-hotel"></i><span></span></a>
                    </li>
                    <li class="search_tabs__item"><a href="#tabs-2"><i
                            class="fas fa-car"></i><span></span></a>
                    </li>
                    <li class="search_tabs__item"><a href="#tabs-3"><i class="fas fa-plane"></i><span></span></a>
                    </li>
                    <li class="search_tabs__item"><a href="#tabs-4"><i
                            class="fas fa-umbrella-beach"></i><span>/span></a>
                    </li>
                    <li class="search_tabs__item"><a href="#tabs-5"><i
                            class="fas fa-ship"></i><span></span></a>
                    </li>
                    <li class="search_tabs__item"><a href="#tabs-6"><i class="fas fa-hiking"></i><span></span></a>
                    </li>
                </ul>
                <div id="tabs-1" class="tabs_content animated fadeIn">
                    <form action="" class="search_content">
                        <div class="search_content__item">
                            <div>Địa điểm</div>
                            <input type="text" class="search_content__input">
                        </div>
                        <div class="search_content__item">
                            <div>Bắt đầu</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Kết thúc</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Người lớn</div>
                            <select name="adults" class="search_content__input">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <div class="search_content__item">
                            <div>Trẻ em</div>
                            <select name="children" class="search_content__input">
                                <option>0</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <button class="button search_content__button">Tìm kiếm <span></span><span></span><span></span>
                        </button>
                    </form>
                </div>
                <div id="tabs-2" class="tabs_content animated fadeIn">
                    <form action="" class="search_content">
                        <div class="search_content__item">
                            <div>Địa điểm</div>
                            <input type="text" class="search_content__input">
                        </div>
                        <div class="search_content__item">
                            <div>Bắt đầu</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Kết thúc</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Người lớn</div>
                            <select name="adults" class="search_content__input">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <div class="search_content__item">
                            <div>Trẻ em</div>
                            <select name="children" class="search_content__input">
                                <option>0</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <button class="button search_content__button">Tìm kiếm <span></span><span></span><span></span>
                        </button>
                    </form>
                </div>
                <div id="tabs-3" class="tabs_content animated fadeIn">
                    <form action="" class="search_content">
                        <div class="search_content__item">
                            <div>Địa điểm</div>
                            <input type="text" class="search_content__input">
                        </div>
                        <div class="search_content__item">
                            <div>Bắt đầu</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Kết thúc</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Người lớn</div>
                            <select name="adults" class="search_content__input">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <div class="search_content__item">
                            <div>Trẻ em</div>
                            <select name="children" class="search_content__input">
                                <option>0</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <button class="button search_content__button">Tìm kiếm <span></span><span></span><span></span>
                        </button>
                    </form>
                </div>
                <div id="tabs-4" class="tabs_content animated fadeIn">
                    <form action="" class="search_content">
                        <div class="search_content__item">
                            <div>Địa điểm</div>
                            <input type="text" class="search_content__input">
                        </div>
                        <div class="search_content__item">
                            <div>Bắt đầu</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Kết thúc</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Người lớn</div>
                            <select name="adults" class="search_content__input">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <div class="search_content__item">
                            <div>Trẻ em</div>
                            <select name="children" class="search_content__input">
                                <option>0</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <button class="button search_content__button">Tìm kiếm <span></span><span></span><span></span>
                        </button>
                    </form>
                </div>
                <div id="tabs-5" class="tabs_content animated fadeIn">
                    <form action="" class="search_content">
                        <div class="search_content__item">
                            <div>Địa điểm</div>
                            <input type="text" class="search_content__input">
                        </div>
                        <div class="search_content__item">
                            <div>Bắt đầu</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Kết thúc</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Người lớn</div>
                            <select name="adults" class="search_content__input">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <div class="search_content__item">
                            <div>Trẻ em</div>
                            <select name="children" class="search_content__input">
                                <option>0</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <button class="button search_content__button">Tìm kiếm <span></span><span></span><span></span>
                        </button>
                    </form>
                </div>
                <div id="tabs-6" class="tabs_content animated fadeIn">
                    <form action="" class="search_content">
                        <div class="search_content__item">
                            <div>Địa điểm</div>
                            <input type="text" class="search_content__input">
                        </div>
                        <div class="search_content__item">
                            <div>Bắt đầu</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Kết thúc</div>
                            <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_content__item">
                            <div>Người lớn</div>
                            <select name="adults" class="search_content__input">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <div class="search_content__item">
                            <div>Trẻ em</div>
                            <select name="children" class="search_content__input">
                                <option>0</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <button class="button search_content__button">Tìm kiếm <span></span><span></span><span></span>
                        </button>
                    </form>
                </div>

            </div>
        </div>

        <!--        Intro-->
        <div class="main_intro">
            <h2>Những tour du lịch tốt nhất</h2>
            <p>Đây là những tour du lịch tốt nhất hiện nay của chúng tôi.</p>
            <p>Sẽ làm bạn hài lòng khi đăng ký những tour dưới đây.</p>
            <div class="main_intro__items">
                <div class="intro_item">
                    <div class="intro_item__backgroud" style="background-image: url(styles/images/intro_1.jpg)"></div>
                    <div class="intro_item__content">
                        <div class="intro_date">Từ 15/04 - 15/05</div>
                        <div class="intro_text">
                            <h1>Bana Hill</h1>
                            <div class="intro_price">Giá: 1,200,000đ</div>
                            <div class="rating rating_4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="button intro_button">
                            <div class="button_bcg"></div>
                            <a href="#">Xem ngay<span></span><span></span><span></span></a></div>
                    </div>
                </div>
                <div class="intro_item">
                    <div class="intro_item__backgroud" style="background-image: url(styles/images/intro_2.jpg)"></div>
                    <div class="intro_item__content">
                        <div class="intro_date">Từ 15/04 - 15/05</div>
                        <div class="intro_text">
                            <h1>Hội An</h1>
                            <div class="intro_price">Giá: 1,200,000đ</div>
                            <div class="rating rating_4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="button intro_button">
                            <div class="button_bcg"></div>
                            <a href="#">Xem ngay<span></span><span></span><span></span></a></div>
                    </div>
                </div>
                <div class="intro_item">
                    <div class="intro_item__backgroud" style="background-image: url(styles/images/intro_1.jpg)"></div>
                    <div class="intro_item__content">
                        <div class="intro_date">Từ 15/04 - 15/05</div>
                        <div class="intro_text">
                            <h1>Bana Hill</h1>
                            <div class="intro_price">Giá: 1,200,000đ</div>
                            <div class="rating rating_4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="button intro_button">
                            <div class="button_bcg"></div>
                            <a href="#">Xem ngay<span></span><span></span><span></span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--        CTA-->
        <div class="main_cta" style="background-image: url(styles/images/cta.jpg)">
            <div class="box main_cta__box">
                <div class="slider" id="single_item">
                    <div>
                        <div class="cta_item">
                            <div class="cta_item__title">Gói tour Đà Nẵng san trọng</div>
                            <div class="cta_item__text">Tour du lịch Đà Nẵng 4 ngày 3 đêm đưa du khách đến với một thành
                                phố thuộc vùng Nam Trung Bộ, Việt Nam. Đây là trung tâm kinh tế, văn hoá, giáo dục, khoa
                                học và công nghệ lớn của khu vực miền Trung - Tây Nguyên. Đà Nẵng hiện là một trong 13
                                đô thị loại 1 đồng thời là một trong 5 thành phố trực thuộc Trung ương ở Việt Nam. Nguồn
                                gốc từ "Đà Nẵng" là biến dạng của từ Chăm cổ "DAKNAN", nghĩa là vùng nước rộng lớn hay
                                "sông lớn", "cửa sông cái". Năm 1835, với chỉ dụ của vua Minh Mạng, Cửa Hàn (tên gọi Đà
                                Nẵng khi đó) trở thành thương cảng lớn nhất Miền Trung.
                            </div>
                            <div class="button cta_button">
                                <div class="button_bcg"></div>
                                <a href="#">Xem thêm <span></span> <span></span> <span></span> <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="cta_item">
                            <div class="cta_item__title">Gói tour Đà Nẵng san trọng</div>
                            <div class="cta_item__text">Tour du lịch Đà Nẵng 4 ngày 3 đêm đưa du khách đến với một thành
                                phố thuộc vùng Nam Trung Bộ, Việt Nam. Đây là trung tâm kinh tế, văn hoá, giáo dục, khoa
                                học và công nghệ lớn của khu vực miền Trung - Tây Nguyên. Đà Nẵng hiện là một trong 13
                                đô thị loại 1 đồng thời là một trong 5 thành phố trực thuộc Trung ương ở Việt Nam. Nguồn
                                gốc từ "Đà Nẵng" là biến dạng của từ Chăm cổ "DAKNAN", nghĩa là vùng nước rộng lớn hay
                                "sông lớn", "cửa sông cái". Năm 1835, với chỉ dụ của vua Minh Mạng, Cửa Hàn (tên gọi Đà
                                Nẵng khi đó) trở thành thương cảng lớn nhất Miền Trung.
                            </div>
                            <div class="button cta_button">
                                <div class="button_bcg"></div>
                                <a href="#">Xem thêm <span></span> <span></span> <span></span> <span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--        Offers-->
        <div class="main_offers">
            
        <div class="box main_offers__box">
                <h2 class="offers_title">Các ưu đãi tối nhất</h2>
                
                <div class="offers_items">
                <?php
                //
                foreach($danhsachtour as $key => $value): 
                                    
                    ?>
                    <div class="offers_item">
                        <div class="offers_image">
                            <div class="offers_image_background"
                                 style="background-image: url(styles/images/offers_1.jpg)"></div>
                            <div class="offers_name"><a href="./index.php?act=chitiettour&id=<?=$value['id']?>"><?=$value['tour_name']?></a></div>
                        </div>
                        <div class="offers_content">
                            <div class="offers_price"><?=$value['price']?></div>
                            <div class="rating rating_4 offers_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="offers_text"><?=$value['depcription']?></p>
                            <div class="offers_icons">
                                <ul class="offers_icons_list">
                                    <li class="offers_icons_item"><img src="styles/images/post.png" alt=""></li>
                                    <li class="offers_icons_item"><img src="styles/images/compass.png" alt=""></li>
                                    <li class="offers_icons_item"><img src="styles/images/bicycle.png" alt=""></li>
                                    <li class="offers_icons_item"><img src="styles/images/sailboat.png" alt=""></li>
                                </ul>
                            </div>
                            <div class="offers_link"><a href="offers.html">Đọc thêm</a></div>
                        </div>
                    </div>
                    <?php
                  
                    endforeach
                    ?>



        </div>
        <!--        testmonials-->
        <div class="main_testimonials">
            <div class="box main_testimonials__box">
                <h2>Khách hàng nói gì về chúng tôi?</h2>
                <div id="testimonials" data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'>
                    <div>
                        <div class="test_item">
                            <div class="test_item_box">
                                <div class="test_image"><img src="styles/images/test_1.jpg" alt="">
                                </div>
                                <div class="test_icon"><img src="styles/images/island_t.png" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">Trường Giang</div>
                                            <div class="test_date">12-04-2019</div>
                                        </div>
                                        <div class="test_quote_title">" Kỳ nghỉ thật tuyệt !!! "</div>
                                        <p class="test_quote_text">Các thắng cảnh thật đẹp, khiến tôi không thể quên
                                            được. Tôi rất hài lòng về dịch cụ của ViVuViet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="test_item">
                            <div class="test_item_box">
                                <div class="test_image"><img src="styles/images/test.jpg" alt="">
                                </div>
                                <div class="test_icon"><img src="styles/images/island_t.png" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">Hoàng Yến Chibi</div>
                                            <div class="test_date">12-04-2019</div>
                                        </div>
                                        <div class="test_quote_title">" Kỳ nghỉ thật tuyệt !!! "</div>
                                        <p class="test_quote_text">Các thắng cảnh thật đẹp, khiến tôi không thể quên
                                            được. Tôi rất hài lòng về dịch cụ của ViVuViet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="test_item">
                            <div class="test_item_box">
                                <div class="test_image"><img src="styles/images/test_3.jpg" alt="">
                                </div>
                                <div class="test_icon"><img src="styles/images/island_t.png" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">Trấn Thành</div>
                                            <div class="test_date">12-04-2019</div>
                                        </div>
                                        <div class="test_quote_title">" Kỳ nghỉ thật tuyệt !!! "</div>
                                        <p class="test_quote_text">Các thắng cảnh thật đẹp, khiến tôi không thể quên
                                            được. Tôi rất hài lòng về dịch cụ của ViVuViet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="test_item">
                            <div class="test_item_box">
                                <div class="test_image"><img src="styles/images/test.jpg" alt="">
                                </div>
                                <div class="test_icon"><img src="styles/images/island_t.png" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">Hoàng Yến Chibi</div>
                                            <div class="test_date">12-04-2019</div>
                                        </div>
                                        <div class="test_quote_title">" Kỳ nghỉ thật tuyệt !!! "</div>
                                        <p class="test_quote_text">Các thắng cảnh thật đẹp, khiến tôi không thể quên
                                            được. Tôi rất hài lòng về dịch cụ của ViVuViet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        Hotel-->
        <div class="main_hotel">
            <div class="box main_hotel__box">
                <h2 class="main_hotel_title">Khách sạn được ưa thích nhất</h2>
                <div class="hotel_items">
                    <div class="hotel_item">
                        <div class="hotel_image">
                            <img src="styles/images/hotel_1.jpg" alt="">
                        </div>
                        <div class="hotel_content">
                            <div class="hotel_title"><a href="#">Green Plaza Hotel</a></div>
                            <div class="hotel_price">1,000,000đ</div>
                            <div class="hotel_location">Hải Châu, Đà Nẵng</div>
                        </div>
                    </div>
                    <div class="hotel_item">
                        <div class="hotel_image">
                            <img src="styles/images/hotel_2.jpg" alt="">
                        </div>
                        <div class="hotel_content">
                            <div class="hotel_title"><a href="#">Hilton Đà Nẵng</a></div>
                            <div class="hotel_price">3,000,000đ</div>
                            <div class="hotel_location">Hải Châu, Đà Nẵng</div>
                        </div>
                    </div>
                    <div class="hotel_item">
                        <div class="hotel_image">
                            <img src="styles/images/hotel_3.jpg" alt="">
                        </div>
                        <div class="hotel_content">
                            <div class="hotel_title"><a href="#">Hanoi Hotel</a></div>
                            <div class="hotel_price">1,900,00đ</div>
                            <div class="hotel_location">Hà Nội</div>
                        </div>
                    </div>
                    <div class="hotel_item">
                        <div class="hotel_image">
                            <img src="styles/images/hotel_4.jpg" alt="">
                        </div>
                        <div class="hotel_content">
                            <div class="hotel_title"><a href="#">Sofitel Sài Gòn</a></div>
                            <div class="hotel_price">4,100,000đ</div>
                            <div class="hotel_location">Quận 1, HCM</div>
                        </div>
                    </div>
                    <div class="hotel_item">
                        <div class="hotel_image">
                            <img src="styles/images/hotel_1.jpg" alt="">
                        </div>
                        <div class="hotel_content">
                            <div class="hotel_title"><a href="#">Green Plaza Hotel</a></div>
                            <div class="hotel_price">1,000,000đ</div>
                            <div class="hotel_location">Hải Châu, Đà Nẵng</div>
                        </div>
                    </div>
                    <div class="hotel_item">
                        <div class="hotel_image">
                            <img src="styles/images/hotel_2.jpg" alt="">
                        </div>
                        <div class="hotel_content">
                            <div class="hotel_title"><a href="#">Hilton Đà Nẵng</a></div>
                            <div class="hotel_price">3,000,000đ</div>
                            <div class="hotel_location">Hải Châu, Đà Nẵng</div>
                        </div>
                    </div>
                    <div class="hotel_item">
                        <div class="hotel_image">
                            <img src="styles/images/hotel_3.jpg" alt="">
                        </div>
                        <div class="hotel_content">
                            <div class="hotel_title"><a href="#">Hanoi Hotel</a></div>
                            <div class="hotel_price">1,900,00đ</div>
                            <div class="hotel_location">Hà Nội</div>
                        </div>
                    </div>
                    <div class="hotel_item">
                        <div class="hotel_image">
                            <img src="styles/images/hotel_4.jpg" alt="">
                        </div>
                        <div class="hotel_content">
                            <div class="hotel_title"><a href="#">Sofitel Sài Gòn</a></div>
                            <div class="hotel_price">4,100,000đ</div>
                            <div class="hotel_location">Quận 1, HCM</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <button onclick="topFunction()" id="back_top" title="Go to top"><i class="fas fa-rocket"></i></button>
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
       