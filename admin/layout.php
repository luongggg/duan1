<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ViVuViet</title>
    <link rel="stylesheet" type="../styles/css" href="../styles/css/main_style.css">
    <link rel="stylesheet" href="../styles/css/main_style.css">
    <link rel="stylesheet" type="../styles/css" href="../styles/css/Animation.css">
    <link rel="stylesheet" href="../styles/css/Animation.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="styles/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="../styles/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css"/>
    <link rel="stylesheet" type="../styles/css"
          href="../https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css"/>
    <script type="styles/javascript" src="../https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js"></script>
    <link rel="stylesheet" href="../https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script>
        window.onscroll = function () {
            scrollFunction(),
                backTop()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 35 || document.documentElement.scrollTop > 35) {
                $(document).ready(function () {
                    $(".top_bar").hide('slow');
                });

            } else {
                $(document).ready(function () {
                    $(".top_bar").show();
                });
            }
        }

        $(function () {
            $("#tabs").tabs();
        });

        $(document).ready(function () {
            $(".search__item").click(function () {
                $(".input_search").toggle("slow");
            });
        })
    </script>
</head>
<body>
<div id="wrapper">
    <!-- Header -->
    <header class="header">
        <!-- Top Bar -->
        <div class="top_bar">
            <div class="bar__info">
                <div class="phone">+84 788 079 036</div>
                <div class="social">
                    <ul class="social_list">
                        <li class="social_list_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social_list_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="social_list_item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>

            </div>
            <div class="bar__user">
                <div class="bar__user-login"><a href="?act=login.php">login</a></div>
                <div class="bar__user-regis"><a href="?act=signup.php">register</a></div>
            </div>
        </div>

        <div class="main_nav">
            <div class="main_nav__logo"><a href="#"><img src="styles/images/logo.png" alt="logo"> VIVUVIET</a></div>
            <div class="main_nav__menu">
                <ul class="main_nav__list">
                    <li class="main_nav__item"><a href="?act=khachhang">thành viên</a></li>
                    <li class="main_nav__item"><a href="?act=danh_muc">danh mục</a></li>
                    <li class="main_nav__item"><a href="offers.html">sản phẩm</a></li>
                    <li class="main_nav__item"><a href="blog.html">bình luận</a></li>
                    <li class="main_nav__item"><a href="contact.html">thống kê</a></li>
                </ul>
            </div>
            <div class="main_nav__search">
                <form action=""><input class="input_search" type="text"></form>
                <div class="search__item"><i class="fas fa-search"></i></div>
            </div>
        </div>
    </header>
    </div>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>

</div>

</body>
      <?php
      include_once "index.php";?>
      <?php
       include_once $view_page;
      ?>
    </div>
</body>

</html>