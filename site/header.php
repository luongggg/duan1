<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ViVuViet</title>
    <link rel="stylesheet" type="text/css" href="styles/css/main_style.css">
    <link rel="stylesheet" type="text/css" href="styles/css/Animation.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
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
