<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">


<title>{{ config('app.name', 'DKIT Suicide Analysis App') }}</title>

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<!-- icheck bootstrap -->
<link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

<!-- Theme style -->
{{-- <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}"> --}}

<!-- STYLESHEET INTERNAL -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}?v0.2">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.theme.default.min.css')}}">

<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">


<!--SCRIPTS INTERNAL -->
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script defer src="{{ asset('js/app.js') }}?v0.1" type="text/javascript"></script>
<!--SCRIPTS INTERNAL -->



@livewireStyles

<style>
a.brand-link {
    height: 70px;
}
.sidebar-mini > nav {
    position: absolute;
    top: 0;
    height: 70px;
    width: 100%;
    background: #123;
    z-index: 9999;
}
</style>
