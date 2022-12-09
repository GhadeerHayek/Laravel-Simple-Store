<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- SECTION: title-->
    <title>
        @yield('PageTitle')
    </title>
    <!-- Favicon icon -->
    @include('includes/dashboard_includes/CSSMainStyles')


</head>

<body>
<!--*******************
    Preloader start
********************-->
@include('includes/dashboard_includes/PreLoader')
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    @include('includes/dashboard_includes/NavHeader')
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="card-header">
                            <!-- SECTION page inner title-->
                            <h4 class="title">@yield('PageInnerTitle')</h4>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    @include('includes/dashboard_includes/Sidebar')
    <!--**********************************
        Sidebar end
    ***********************************-->


    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            @yield('PageMainContent')
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    @include('includes/dashboard_includes/Footer')
    <!--**********************************
        Footer end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->


<!--**********************************
    Scripts
***********************************-->
@include('includes/dashboard_includes/JSMain')

</body>
</html>
