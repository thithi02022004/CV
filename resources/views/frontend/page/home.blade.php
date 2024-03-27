@extends('frontend.index')

@section('main')

    <!-- Slider Start -->
<section class="slider" id="slider">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-12">
                <div class="banner-content text-center">
                    <h1 class="cd-headline clip is-full-width mb-4 ">
                        <br>
                        <span class="cd-words-wrapper text-color">
                        <b class="is-visible">Xin chào</b>
                        <b>Đây là cv của...</b>
                        <b>{{ $viewData['info']['FullName'] }}</b>
                    </span>
                    </h1>
                    <p class="font-weight-normal lead mt-3 mb-4">{{ $viewData['info']['Target'] }}</p>
                    <ul class="list-inline socials-icon mb-4">
                        <li class="list-inline-item" style="color: white; font-size:25px">SĐT: {{ $viewData['info']['ContactPhone'] }}</li><br>
                        <li class="list-inline-item" style="color: white; font-size:25px">Email: {{ $viewData['info']['ContactEmail'] }}</li>
                    </ul>

                    <a href="#infomation" class="btn btn-main btn-rounded smoth-scroll">Tìm hiểu <i class="fa fa-angle-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="intro section" id="infomation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pr-lg-5">
                <div class="intro-img">
                    <img src="{{ asset('profile/'.  $viewData['info']['Image']) }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="intro-content mt-5 mt-lg-0">
                    <h1 class="text-lg mb-4">{{ $viewData['info']['FullName'] }}</h1>

                    {{-- <p class="mb-4">Thông tin giới thiệu</p> --}}

                    <ul class="list-unstyled ">
                        <li>
                            <h5><i class="far fa-calendar-check"></i> {{ $viewData['info']['DateOfBirth'] }}</h5>
                        </li>
                        <li>
                            <h5><i class="fas fa-map-marker-alt"></i> {{ $viewData['info']['PlaceOfBirth'] }} </h5>
                        </li>
                        <li>
                            <h5><i class="far fa-envelope"></i> {{ $viewData['info']['ContactEmail'] }} </h5>
                        </li>
                        <li>
                            <h5><i class="fas fa-phone"></i> {{ $viewData['info']['ContactPhone'] }}</h5>
                        </li>
                        <li>
                            <h5><i class="fab fa-github-alt"></i> {{ $viewData['info']['MaritalStatus'] }}</h5>
                        </li>
                    </ul>
                    
                    <a href="#services" class="btn btn-main mt-4 btn-rounded smoth-scroll">Học vấn<i class="fa fa-angle-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section secondary-bg" id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="mb-4 text-lg">Học vấn</h2>
                    <p>{{ $viewData['edu']['Degree'] }}</p>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="d-flex align-items-center mb-4">
                        <i style="width:100px" class="fas fa-book"></i>
                        <h4>{{ $viewData['edu']['Education'] }}</h4>
                    </div>
                    <p>{{ $viewData['edu']['Degree'] }}</p>

                    <a href="service-single.html" class="read-more">Xem thêm <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- portfolio -->
<section class="section portfolio" id="portfolio">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="mb-4 text-lg">Dự án đã làm</h2>
                    {{-- <p>Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde</p> --}}
                </div>
            </div>
        </div>

        <div class="col-12 text-center  mb-5">
            <div class="btn-group btn-group-toggle " data-toggle="buttons">
                <label class="btn active ">
        <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
      </label>
                {{-- <label class="btn ">
        <input type="radio" name="shuffle-filter" value="design" />UI/UX Design
      </label>
                <label class="btn">
        <input type="radio" name="shuffle-filter" value="branding" />BRANDING
      </label>
                <label class="btn">
        <input type="radio" name="shuffle-filter" value="illustration" />ILLUSTRATION
      </label> --}}
            </div>
        </div>

        <div class="row shuffle-wrapper portfolio-gallery">
            @foreach ($viewData['exp'] as $exp)
                <div class="col-lg-4 col-md-6 col-12 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
                    <div class="portfolio-item mb-4">
                        <img src="{{ asset('profile/'.  $exp['Image']) }}" style="width:300px; height:300px" class="img-fluid">
                        <div class="overlay-content">
                            <h5>{{ $exp['ProjectName'] }}</h5>
                            <a href="{{ asset('frontend/assets/images/'. $exp['Image']) }}" class="portfolio-image popup-gallery"><i class="ti-zoom-in"></i></a>
                            <a href="portfolio-single.html"><i class="ti-link"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mt-5">
                    <a href="#testimonial" class="btn btn-main btn-rounded smoth-scroll">Read Success Story</a>
                </div>
            </div>
        </div> --}}
    </div>
</section>
<!-- /portfolio -->
<section class="section experience" id="skills">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title">
                    <h2>Kỹ năng</h2>
                </div>
            </div>
        </div>

        <div class="row">
            
                <div class="col-lg-6">
                    <div class="content mb-4">
                        <h4>Frontend</h4>
                        <span class="text-color">{{ $viewData['exp1']['SkillsFrontend'] }}</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content mb-4">
                        <h4>Backend</h4>
                        <span class="text-color">{{ $viewData['exp1']['SkillsBackend'] }}</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content mb-4">
                        <h4>công cụ sử dụng</h4>
                        <span class="text-color">{{ $viewData['exp1']['Tools'] }}</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content mb-4">
                        <h4>Database</h4>
                        <span class="text-color">{{ $viewData['exp1']['Datas'] }}</span>
                    </div>
                </div>
            
        </div>
    </div>
</section>
{{-- <section class="counter-wrap section-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="counter-item mb-5 mb-lg-0">
                    <i class="ti-user"></i>
                    <span class="counter">785</span>
                    <h5>Happy Clients</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item mb-5 mb-lg-0">
                    <i class="ti-thumb-up"></i>
                    <span class="counter">385</span>
                    <h5>project done</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item mb-5 mb-lg-0">
                    <i class="ti-face-smile"></i>
                    <span class="counter">845</span>
                    <h5>Cup of tea</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <i class="ti-cup"></i>
                    <span class="counter">225</span>
                    <h5>awards won</h5>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- <section class="section bg-light" id="team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="mb-4 text-lg">Our Team</h2>
                    <p>Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="team-block mb-5 mb-lg-0">
                    <img src="{{ asset('frontend/assets/images/03-1.jpg') }}" alt="" class="img-fluid">
                    <div class="team-content">
                        <span class="mt-4 d-block">Founder</span>
                        <h4 class="mb-4">Richard William</h4>
                    </div>

                    <div class="overlay-content">
                        <span class="mt-4 d-block">Founder</span>
                        <h4 class="mb-4">Richard William</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, molestiae.</p>

                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-block mb-5 mb-lg-0">
                    <img src="{{ asset('frontend/assets/images/02-2.jpg') }}" alt="" class="img-fluid">
                    <div class="team-content">
                        <span class="mt-4 d-block">Founder</span>
                        <h4 class="mb-4">Richard William</h4>
                    </div>

                    <div class="overlay-content">
                        <span class="mt-4 d-block">Founder</span>
                        <h4 class="mb-4">Richard William</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, molestiae.</p>

                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-block">
                    <img src="{{ asset('frontend/assets/images/01-3.jpg') }}" alt="" class="img-fluid">
                    <div class="team-content">
                        <span class="mt-4 d-block">Founder</span>
                        <h4 class="mb-4">Richard William</h4>
                    </div>

                    <div class="overlay-content">
                        <span class="mt-4 d-block">Founder</span>
                        <h4 class="mb-4">Richard William</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, molestiae.</p>

                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- <section class="cta">
    <div class="container">
        <div class="cta-wrap box-shadow">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-8">
                    <div class="cta-content">
                        <span class="text-color">Tất cả thông tin về tô</span>
                        <h2 class="text-lg">Hãy liên hệ với tôi</h2>
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="text-lg-right mt-5 mt-lg-0">
                        <a href="#contact" class="btn btn-main btn-rounded smoth-scroll">Contact me<i class="fa fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- <section class="section" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="mb-4 text-lg">News Feed</h2>
                    <p>Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 ">
                <div class="blog-item mb-5 mb-lg-0">
                    <img src="{{ asset('frontend/assets/images/blog1.jpg') }}" alt="" class="img-fluid">
                    <div class="content mt-4">
                        <span class="timecount"><i class="ti-comments mr-3"></i>2 Comments</span>
                        <h4 class="mb-3 mt-2"><a href="blog-single.html">How To Build Honest UIs And Help Users Make Better </a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam corrupti, suscipit minima debitis.</p>

                        <a href="blog-single.html" class="read-more">Read More <i class="ti-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-item mb-5 mb-lg-0">
                    <img src="{{ asset('frontend/assets/images/blog2.jpg') }}" alt="" class="img-fluid">
                    <div class="content mt-4">
                        <span class="timecount"><i class="ti-comments mr-3"></i>2 Comments</span>
                        <h4 class="mb-3"><a href="blog-single.html">Dating Apps: How To Improve Your Designs </a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam corrupti, suscipit minima debitis.</p>

                        <a href="blog-single.html" class="read-more">Read More <i class="ti-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-item mb-5 mb-lg-0">
                    <img src="{{ asset('frontend/assets/images/blog3.jpg') }}" alt="" class="img-fluid">
                    <div class="content mt-4">
                        <span class="timecount"><i class="ti-comments mr-3"></i>2 Comments</span>
                        <h4 class="mb-3"><a href="blog-single.html">Meet Inclusive Front-End Design Patterns A New</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam corrupti, suscipit minima debitis.</p>

                        <a href="blog-single.html" class="read-more">Read More <i class="ti-angle-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> --}}
{{-- <section class="section" id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="title">
                    <h2 class="mb-5 text-lg">Clients says</h2>
                    <p class="mb-5 ">Reiciendis, reprehenderit, quas impedit ea repudiandae non quibusdam nulla pariatur rerum numquam ipsum corporis, dignissimos aliquid, neque. Recusandae voluptas, inventore error amet.</p>
                    <a href="#contact" class="btn btn-main btn-rounded smoth-scroll">Get start<i class="fa fa-angle-right ml-2"></i></a>
                </div>
            </div>


            <div class="col-lg-7">
                <div class="main-slider ">
                    <div class="testimonial-item d-flex align-items-center">
                        <div class="testimonial-content ">
                            <i class="ti-quote-left "></i>
                            <h4 class="mb-3 text-color mt-2">Code Quality!</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis architecto vel nesciunt accusamus quidem fugiat molestiae doloribus .</p>
                            <div class="info">
                                <h5 class="mb-1">Khalid Farhan</h5>
                                <p class="text-sm">Themeturn</p>
                            </div>
                        </div>
                        <div class="testimonial-image">
                            <img src="{{ asset('frontend/assets/images/test-1.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="testimonial-item d-flex align-items-center">
                        <div class="testimonial-content ">
                            <i class="ti-quote-left "></i>
                            <h4 class="mb-3 text-color mt-2">Design!</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis architecto vel nesciunt accusamus quidem fugiat molestiae doloribus .</p>
                            <div class="info">
                                <h5 class="mb-1">Md.tanvir</h5>
                                <p class="text-sm">Themeturn</p>
                            </div>
                        </div>
                        <div class="testimonial-image">
                            <img src="{{ asset('frontend/assets/images/test-2.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="testimonial-item d-flex align-items-center">
                        <div class="testimonial-content ">
                            <i class="ti-quote-left "></i>
                            <h4 class="mb-3 text-color mt-2">Development!</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis architecto vel nesciunt accusamus quidem fugiat molestiae doloribus .</p>
                            <div class="info">
                                <h5 class="mb-1">Rayhan Masud</h5>
                                <p class="text-sm">Themeturn</p>
                            </div>
                        </div>
                        <div class="testimonial-image">
                            <img src="{{ asset('frontend/assets/images/test-3.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="testimonial-item d-flex align-items-center">
                        <div class="testimonial-content ">
                            <i class="ti-quote-left "></i>
                            <h4 class="mb-3 text-color mt-2">Development!</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis architecto vel nesciunt accusamus quidem fugiat molestiae doloribus .</p>
                            <div class="info">
                                <h5 class="mb-1">Jabed Hossain</h5>
                                <p class="text-sm">Themeturn</p>
                            </div>
                        </div>
                        <div class="testimonial-image">
                            <img src="{{ asset('frontend/assets/images/test-4.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


@endsection


