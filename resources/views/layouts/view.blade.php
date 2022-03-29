<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="{{ env('APP_NAME') }}" name="description" />
  <meta content="Khoirusy Syafaat" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>{{ env('APP_NAME') }}</title>

  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
  
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">

  <link rel="manifest" href="/manifest.json">

  <!-- Bootstrap Css -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>
<body data-topbar="colored">
    <div id="layout-wrapper">
        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1 ml-5 mt-4">Majoo Teknologi Indonesia</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="page-content-wrapper ml-5 mr-5">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-3">Produk</h4>
                    </div>
                </div>
                @yield('content')
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        2022 © Majoo Teknologi Indonesia.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by Majoo
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div> 
        <!-- end page-content-wrapper -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
  </body>
  </html>
                