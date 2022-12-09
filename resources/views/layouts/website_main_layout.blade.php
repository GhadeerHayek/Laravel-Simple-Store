<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Eflyer</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('includes.website_includes.css_includes')
</head>
<body>
<!-- banner bg main start -->
@include('includes.website_includes.banner')
    <!-- banner bg main end -->
    @yield('PageContent')
    <!-- footer section start -->
    @include('includes.website_includes.footer')
    <!-- footer section end -->
    <!-- copyright section start -->
    @include('includes.website_includes.copyright')
    <!-- copyright section end -->
@include('includes.website_includes.js_includes')
</body>
</html>
