<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content = "{{ csrf_token() }}" />

    <title>Админ-панель</title>

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
    <link href="{{asset('css/admin.css')}}" rel="stylesheet">

    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/color/green.css')}}">

    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/color/green.css')}}" title="green">
    <link rel="stylesheet" type="text/css" href="{{asset('css/color/light-green.css')}}" title="light-green">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

    <!-- jQuery Version 2.1.1 -->
    <script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>

    <!-- Modernizer js -->
    <script src="{{asset('js/modernizr.custom.js')}}"></script>

</head>

<body class="index">



<div class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">Шапка</a></li>
        <li><a href="#tab2" data-toggle="tab">Визитка</a></li>
        <li><a href="#tab3" data-toggle="tab">Услуги</a></li>
        <li><a href="#tab4" data-toggle="tab">Отзывы</a></li>
        <li><a href="#tab5" data-toggle="tab">Портфолио</a></li>
        <li><a href="#tab6" data-toggle="tab">Особенности</a></li>
        <li><a href="#tab7" data-toggle="tab">Контакты</a></li>
        <li><a href="#tab8" data-toggle="tab">Плайслист</a></li>
    </ul>
    <div class="tab-content">
        <p class = "welcome_admin"> Добро пожаловать в админ панель! </p><br>
        <div class="tab-pane active" id="tab1">
            @include('admin.header');
        </div>

        <div class="tab-pane" id="tab2">
            @include('admin.author');
        </div>

        <div class="tab-pane" id="tab3">
            <p> 1-ая услуга: </p>
            <p> Фото </p>
            <p> Название </p>
            <p> Тезисы </p>
            <p> Добавить, удалить тезис </p>

            <p> 2-ая услуга: </p>
            <p> Фото </p>
            <p> Название </p>
            <p> Тезисы </p>
            <p> Описания </p>

            <p> 3-ая услуга: </p>
            <p> Фото </p>
            <p> Название </p>
            <p> Тезисы </p>
        </div>

        <div class="tab-pane" id="tab4">
            <p>Фото</p>
            <p>Имя</p>
            <p>Текст отзыва</p>
            <p>Добавить, удалить отзыв</p>
        </div>

        <div class="tab-pane" id="tab5">
            <p>Фото</p>
        </div>

        <div class="tab-pane" id="tab6">
            <p>Текст тезиса</p>
        </div>

        <div class="tab-pane" id="tab7">
            <p>Телефон</p>
            <p>Почта</p>
        </div>

        <div class="tab-pane" id="tab8">
            <p>Таблица</p>
            <p>Добавить, удалить часть таблицы</p>

        </div>

    </div>
</div>



<div id="loader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>



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
