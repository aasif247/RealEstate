<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href="{{ asset('/') }}">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
    
    @include('backend.include.styles')
    @stack('stylesheet')
</head>

<body id="dashboards-analytics" data-layout="default-sidebar-2" data-sidebar="primary" data-navbar="secondary"
    data-controller="dashboards" data-view="analytics">
    <div id="fakeloader"></div>
    <!-- navbar -->
    @include('backend.include.header')
    <!-- navbar -->

    <!-- jumbotron -->
    @include('backend.include.jumbotron')
    <!-- jumbotron -->

    <div class="container-fluid">
        <div class="row">
            <!-- left sidebar -->
            @include('backend.include.left-sidebar')
            <!-- left sidebar -->

            <!-- right sidebar -->
            @include('backend.include.right-sidebar')
            <!-- right sidebar -->

            <div class="col-xs-12 main">
                <div class="page-on-top">
                    <!-- dashboards/analytics -->
                    @yield('content')
                    <!-- dashboards/analytics -->
                </div>
            </div>
        </div>
    </div>

    <!-- build:js js/vendor.js -->
    @include('backend.include.scripts')
    <!-- endbuild -->

    <div class="left-sidebar-backdrop"></div>
    <div class="right-sidebar-backdrop"></div>

    @stack('scripts')
</body>

</html>
