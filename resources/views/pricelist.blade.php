<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Прайслист</title>

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
    <link href="{{asset('css/pricelist-style.css')}}" rel="stylesheet">

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

    <style>
        html {
            background: url({{ asset($section->image) }});
            background-attachment: fixed;
            background-size: cover;
            width: 100%;
            height: 100%;
        }
        </style>

<div class ="dropdown-style">
        <form id="myForm" method = "post" action = "/pricelist">
            {{ csrf_field() }}
            <select onChange="myForm.submit()" name = "select">
                @foreach ($all_sections as $all_section)
                    @if($all_section->id == $section->id)
                        <option selected value = "{{ $all_section->id }}"> {{ $all_section->title }} </option>
                    @else
                        <option value = "{{ $all_section->id }}"> {{ $all_section->title }} </option>
                    @endif
                @endforeach
            </select>
    </form>
</div>

<div class = "main-block">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Услуга</th>
            <th scope="col">Описание услуги</th>
            <th scope="col">Единицы измерения</th>
            <th scope="col">Цена</th>
        </tr>
        </thead>
        <tbody>

        @for($i = 0; $i < count($pricelist); $i++)
        <tr>
            <th scope="row">{{ $i + 1 }}</th>
            <td>{!! $pricelist[$i]->service !!}</td>
            <td>{!! $pricelist[$i]->Description !!}</td>
            <td>{{ $pricelist[$i]->unit }}</td>
            <td>{{ $pricelist[$i]->price }}</td>
        </tr>
            @endfor

        </tbody>
    </table>
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
