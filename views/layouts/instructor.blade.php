<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Space+Mono&display=swap" rel="stylesheet">

@section('htmlheader')
    @include('adminlte::instructor_layout.partials.htmlheader')
@show

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-black-light sidebar-mini"  style="font-family: 'Poppins', sans-serif;">
<div id="app"  style="font-family: 'Poppins', sans-serif;">
    <div class="wrapper">

    @include('adminlte::instructor_layout.partials.mainheader')

    @include('adminlte::instructor_layout.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        @yield('header')
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('adminlte::instructor_layout.partials.controlsidebar')

    @include('adminlte::instructor_layout.partials.footer')

</div><!-- ./wrapper -->
</div>
@section('scripts')
    @include('adminlte::instructor_layout.partials.scripts')
@show

@yield('footer-script')
</body>
</html>
