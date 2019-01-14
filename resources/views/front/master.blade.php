<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RPIR | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/front/css/bootstrap.min.css">
    <!--font-awesome css-->
    <link rel="stylesheet" href="{{asset('/')}}assets/front/css/font-awesome.css" >
    <!--slider css-->
    <link rel="stylesheet" href="{{asset('/')}}assets/front/css/pgwslider.min.css" >
    <!--custom css-->
    <link rel="stylesheet" href="{{asset('/')}}assets/front/css/style.css">
    <!--responsive code-->
    <link rel="stylesheet" href="{{asset('/')}}assets/front/css/responsive.css">
</head>
<body>
    @include('front.common.heading.heading')
    @include('front.common.navbar.navbar')

    @yield('body')
    @include('front.common.scroll.scroll')
    @include('front.common.footer.footer')



    <script src="{{asset('/')}}assets/front/js/jquery-1.12.4.min.js"></script>
    <script src="{{asset('/')}}assets/front/js/bootstrap.min.js"></script>
    <!--font-awesome js-->
    <script src="{{asset('/')}}assets/front/js/font-awesome.js"></script>
    <!--slider js-->
    <script src="{{asset('/')}}assets/front/js/pgwslider.js"></script>
    <!--custom js-->
    <script src="{{asset('/')}}assets/front/js/main.js"></script>
    <script>
        (function($){
            $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
                if (!$(this).next().hasClass('show')) {
                    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
                }
                var $subMenu = $(this).next(".dropdown-menu");
                $subMenu.toggleClass('show');

                $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                    $('.dropdown-submenu .show').removeClass("show");
                });

                return false;
            });
        })(jQuery)
    </script>
@yield('script')
</body>
</html>