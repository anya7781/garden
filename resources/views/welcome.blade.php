<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Садовый мастер</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">


    <!-- Animate CSS -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" >

    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" >
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}" >
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}" >

    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/color/green.css')}}">

    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/color/green.css')}}" title="green">
    <link rel="stylesheet" type="text/css" href="{{asset('css/color/light-green.css')}}" title="light-green">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>


    <!-- Modernizer js -->
    <script src="{{asset('js/modernizr.custom.js')}}"></script>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top"> <span class = "header_phone"> {{ $info->phone  }} </span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#about-us">О нас</a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">Услуги</a>
                </li>
                <li>
                    <a class="page-scroll" href="#testimonial">Отзывы</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Портфолио</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Контакты</a>
                </li>
                <li>
                    <a class="page-scroll" href="/pricelist" target="_blank">Прайслист</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>



<!-- Start Home Page Slider -->
<section id="page-top">
    <!-- Carousel -->
    <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Carousel inner -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-responsive header-img" src="{{asset($info->photo)}}" alt="slider">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h1 class="animated3">
                            <span><strong>САДОВЫЙ</strong> МАСТЕР</span>
                        </h1>
                        <p class="animated2 mobile-hide"> {!! $info->description  !!} </p>
                        <a href="#services" class="page-scroll btn btn-primary animated1 mobile-hide">Подробнее об услугах</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel inner end-->

    </div>
    <!-- /carousel -->
</section>
<!-- End Home Page Slider -->

<!-- Start About Us Section 2 -->
<section id = "about-us">
    <div class="about-us-section-2">
        <div class="container about-us">
            <div class="row">
                <div class="col-md-6">
                    <div class="carousel slide about-slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{asset($auth->photo)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 about-us-text">
                    <div class="skill-shortcode">
                        <!-- Progress Bar -->
                        <div class="skill">
                            <div class="progress">
                                <p class = "author-name">{{ $auth->name  }}</p>
                                {!! $auth->text !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start About Us Section 2 -->


<section id = "services">
    <div class="about-us-section-2">
        <div class="container services-block">
            <div class="row">
                <div class="section-title text-center">
                    <h3> Наши услуги </h3><br><br>
                </div>

                <div class="col-md-6">
                    <div class="carousel slide about-slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{asset($services[0]->photo)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 services-text">
                    <div class="skill-shortcode">
                        <!-- Progress Bar -->
                        <div class="skill">
                            <div class="progress">
                                <p class = "service-name"> {{ $services[0]->name  }} </p>

                                @for($i = 0; $i < count($service1); $i++)
                                    @if ($i > 2)
                                        <p class = "mobile-hide"> <span class="glyphicon glyphicon-ok"></span> {{$service1[$i]->phrase }} </p>
                                    @else
                                        <p> <span class="glyphicon glyphicon-ok"></span> {{$service1[$i]->phrase  }} </p>
                                    @endif
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row second-service">

                <div class="col-md-6 services-text mobile-hide">
                    <div class="skill-shortcode">
                        <!-- Progress Bar -->
                        <div class="skill">
                            <div class="progress balloon">
                                <br>
                                <p class = "service-name"> {{ $services[1]->name  }}  </p>
                                <br>

                                @foreach ($service2 as $value)
                                    <p class="hooltip ">
                                        {{ $value->phrase }}
                                        <i class="fa fa-info-circle mobile-hide"></i>
                                        <span class = "mobile-hide"> {!!  $value->details !!} </span>
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </p>
                                    <br>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="carousel slide about-slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{asset($services[1]->photo)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 services-text mobile-first-hide">
                    <div class="skill-shortcode">
                        <!-- Progress Bar -->
                        <div class="skill">
                            <div class="progress balloon">
                                <br>
                                <p class = "service-name"> {{ $services[1]->name  }}  </p>

                                @foreach ($service2 as $value)
                                    <br>
                                    <p class="hooltip">
                                        <i class="glyphicon glyphicon-ok"></i>
                                       {{ $value->phrase }}
                                    </p>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row third-service">
                <div class="col-md-6">
                    <div class="carousel slide about-slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{asset($services[2]->photo)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 services-text">
                    <div class="skill-shortcode">
                        <!-- Progress Bar -->
                        <div class="skill">
                            <div class="progress">
                                <p class = "service-name"> {{ $services[2]->name  }} </p>
                                @for($i = 0; $i < count($service3); $i++)
                                    @if ($i > 2)
                                        <p class = "mobile-hide"> <span class="glyphicon glyphicon-ok"></span> {!! $service3[$i]->phrase !!} </p>
                                    @else
                                        <p> <span class="glyphicon glyphicon-ok"></span> {!! $service3[$i]->phrase !!} </p>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Start Testimonial Section -->
<div id="testimonial" class="testimonial-section">
    <a href="/pricelist" class="go-to-price" target="_blank"> Прайслист </a>
    <div class="container">
        <!-- Start Testimonials Carousel -->
        <div id="testimonial-carousel" class="testimonials-carousel">

            @foreach ($reviews as $review)
            <div class="testimonials item">
                <div class="testimonial-content">
                    <img src="{{asset($review->photo)}}" alt="" >
                    <div class="testimonial-author">
                        <div class="author">{{$review->name}}</div>
                    </div>
                    <p> {!! $review->text !!}</p>
                </div>
            </div>
            @endforeach

        </div>
        <!-- End Testimonials Carousel -->
    </div>
</div>
<!-- End Testimonial Section -->



<!-- Start Portfolio Section -->
<section id="portfolio" class="portfolio-section-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Портфолио</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul id="portfolio-list">

                    @foreach ($photos as $photo)
                    <li>
                        <div class="portfolio-item">
                            <img src="{{asset($photo->photo)}}" class="img-responsive" alt="" />
                        </div>
                    </li>
                    @endforeach

                </ul>
                <!-- End Portfolio items -->
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio Section -->



<section id = "difference">
    <div class="about-us-section-2">
        <div class="container">
            <div class="row">
                <div class="section-title text-center title-green">
                    <h3> Чем мы отличаемся от конкурентов? </h3><br><br>
                </div>

                <div class="col-md-6">
                    <div class="skill-shortcode">
                        <div class="skill">
                            <div class="progress difference">
                                <p> <span class="glyphicon glyphicon-plus"></span>{{ $diff[0]->text }}</p>
                                <p><span class="glyphicon glyphicon-plus"></span>{{ $diff[1]->text }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="skill-shortcode">
                        <div class="skill">
                            <div class="progress difference">
                                <p><span class="glyphicon glyphicon-plus"></span>{{ $diff[2]->text }}</p>
                                <p><span class="glyphicon glyphicon-plus"></span>{{ $diff[3]->text }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="contact" class="contact">

    <div class="container contact-block">
        <div class="row">
            <div class="section-title text-center title-black">
                <h3> Как с нами связаться? </h3><br><br>
            </div>

            <div class="col-md-6">
                <div class="carousel slide about-slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner contact-text">
                        <p class = "phone"> <span class="glyphicon glyphicon-earphone"></span>  {{ $info->phone  }} </p> <br><br>
                        <p class = "email"> <span class="glyphicon glyphicon-pencil"></span>{{ $info->email  }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 services-text">
                <div class="skill-shortcode">
                    <!-- Progress Bar -->
                    <div class="skill">
                        <div class="progress">
                            <form method="post" action = "/" class = "contact-form">
                                {{ csrf_field() }}
                                <p> Заказать звонок </p>
                                <input class = "input-field" type = "text" placeholder="Имя" name = "name"><br> <br>
                                <input class = "input-field" type = "text" placeholder="Телефон" name = "phone"> <br> <br>
                                <input class = "form-submit" type = "submit" value = "Заказать">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="style-1">
        <div class="container">
            <div class="row footer">
                <span class="copyright"> Copyright &copy; <span style = "color: #5BB12F;"> Garden 2018 </span></span>
            </div>
        </div>
    </footer>
</section>


<div id="loader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>



<!-- jQuery Version 2.1.1 -->
<script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/count-to.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/cbpAnimatedHeader.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.fitvids.js')}}"></script>
<script src="{{asset('js/styleswitcher.js')}}"></script>

<!-- Contact Form JavaScript -->
<script src="{{asset('js/jqBootstrapValidation.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('js/script.js')}}"></script>

</body>

</html>
