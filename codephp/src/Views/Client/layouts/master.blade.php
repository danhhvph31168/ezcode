<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Venue - Responsive Web Template</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="assets/Client/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/Client/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="assets/Client/css/fontAwesome.css" />
    <link rel="stylesheet" href="assets/Client/css/hero-slider.css" />
    <link rel="stylesheet" href="assets/Client/css/owl-carousel.css" />
    <link rel="stylesheet" href="assets/Client/css/datepicker.css" />
    <link rel="stylesheet" href="assets/Client/css/templatemo-style.css" />
    <link rel="stylesheet" href="assets/Client/css/css.css" />
    <link rel="stylesheet" href="assets/Client/css/font-icon/themify-icons-font/themify-icons/themify-icons.css" />

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <script src="assets/Client/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!--
 Venue Template
 http://www.templatemo.com/tm-522-venue
-->
</head>

<body>
    @include('layouts.header')
    @include('layouts.banner')
    @yield('content')
    @include('layouts.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>
        window.jQuery ||
            document.write(
                '<script src="assets/Client/js/vendor/jquery-1.11.2.min.js"><\/script>'
            );
    </script>

    <script src="assets/Client/js/vendor/bootstrap.min.js"></script>

    <script src="assets/Client/js/datepicker.js"></script>
    <script src="assets/Client/js/plugins.js"></script>
    <script src="assets/Client/js/main.js"></script>
</body>

</html>
