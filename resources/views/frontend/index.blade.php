<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="remus,business,company,agency,multipurpose,modern,bootstrap4">

    <meta name="author" content="Dreambuzz">

    <title>CV {{ $viewData['info']['FullName'] }}</title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.html') }}" />
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/animate-css/animates.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/themify/css/themify-icons.css') }}">
    <!-- Magnify Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/magnific-popup/dist/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/animated-text/animated-text.css') }}">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/slick-carousel/slick/slick-theme.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

</head>

<body>



    <nav class="navbar navbar-expand-lg navigation header-padding site-header" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index-2.html">
                <!-- <h2>Rubi.</h2> -->
                <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Rubi" class="img-fluid">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
		<span class="fa fa-bars"></span>
	  </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll active" href="#slider">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    {{-- <li class="nav-item"><a class="nav-link smoth-scroll" href="#about">About</a></li> --}}
                    <li class="nav-item"><a class="nav-link smoth-scroll" href="#services">Học vấn</a></li>
                    <li class="nav-item"><a class="nav-link smoth-scroll" href="#portfolio">Dự án</a></li>
                    <li class="nav-item"><a class="nav-link smoth-scroll" href="#skills">Kỹ năng</a></li>
                    {{-- <li class="nav-item"><a class="nav-link smoth-scroll" href="#team">???</a></li>
                    <li class="nav-item"><a class="nav-link smoth-scroll" href="#blog">???</a></li> --}}
                    {{-- <li class="nav-item"><a class="nav-link smoth-scroll" href="#contact">Liên hệ</a></li> --}}
                </ul>

                <form class="form-inline my-2 my-md-0 ml-lg-4">
                    <a href="#infomation" class="btn btn-main btn-rounded smoth-scroll">Liên hệ ngay<i class="fa fa-angle-right ml-2"></i></a>
                </form>
            </div>
        </div>
    </nav>

    <!-- Header Close -->









    
    
    @yield('main')

        















    {{-- Footer --}}
    <section class="footer ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-md-12">
                    <div class="footer-widget widget mb-5 mb-lg-0">
                        <h3 class="mb-3 text-white">{{ $viewData['info']['FullName'] }}</h3>
                        <p>{{ $viewData['info']['Target'] }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget widget mb-5 mb-lg-0">
                        <h6 class="mb-4">Thông tin liên lạc</h6>
                        <div class="footer-contact">
                            <h5>{{ $viewData['info']['ContactEmail'] }}</h5>
                            <h5>{{ $viewData['info']['ContactPhone'] }}</h5>
                            <h5>{{ $viewData['info']['PlaceOfBirth'] }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget">
                        <h6 class="mb-4">Theo dõi tôi</h6>
                        <ul class="list-inline footer-socials-icon mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            

            <div class="footer-top text-right">
                <a href="#slider" class="top-to-bototm smoth-scroll"><i class="ti-angle-up"></i></a>
            </div>
        </div>
    </section>



    <!-- 
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="{{ asset('frontend/assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{ asset('frontend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('frontend/assets/plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <!-- Progress Bar -->
    <script src="{{ asset('frontend/assets/plugins/counto/apear.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/counto/counTo.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/animated-text/animated-text.js') }}"></script>

    <script src="{{ asset('frontend/assets/plugins/counterup/waypoint.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/counterup/jquery.counterup.min.js') }}"></script>
    <!--  Magnific Popup-->
    <script src="{{ asset('frontend/assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/shuffle/shuffle.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/plugins/jquery/ajax-contact.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>

</body>


</html>