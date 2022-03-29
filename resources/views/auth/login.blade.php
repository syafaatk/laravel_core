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

<body class="bg-primary bg-pattern">
  <div class="home-btn d-none d-sm-block">
    <button id="enableNotifications" class="btn btn-dark text-white">🔔 Enable Notification</button>
  </div>

  <div class="account-pages my-5 pt-sm-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mt-sm-12">
          <div class="text-center mb-3">

            <a href="{{ url('/') }}" class="logo"><img src="{{ asset('assets/images/logo-light.png') }}" height="72" alt="logo" class="mb-3"></a>
            <h5 class="font-size-16 text-white-50 mb-2">{{ env('COMPANY_SLOGAN') }}</h5>
            </div>
          </div>
        </div>
        <!-- end row -->

        <div class="row justify-content-center">
          <div class="col-xl-5 col-sm-8">
            <div class="card">
              <div class="card-body p-4">
                <div class="p-2">
                  <h6 class="mb-4 text-center">Masuk Ke Dashboard</h6>
                  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="emailaddress" class="mb-n1">Email address</label>
                          <input id="emailaddress" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="password" class="mb-n1">Password</label>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                          @error('password')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="checkbox-signin" name="remember_me" id="remember_me" {{ old('remember_me') ? 'checked' : '' }}>
                              <label class="custom-control-label" for="checkbox-signin"> {{ __('Remember Me') }} </label>
                            </div>
                          </div>
                          @if (Route::has('password.request'))
                          <div class="col-md-6">
                            <div class="text-md-right mt-n1 mt-md-0">
                              {{-- <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i>{{ __('Forgot Your Password?') }}</a> --}}
                            </div>
                          </div>
                          @endif
                        </div>
                        <div class="mt-4 text-center">
                          <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Masuk</button>

                          <h6 class="mt-2 mb-3 text-center text-secondary">Atau Masuk Dengan Akun</h6>

                          <a class="btn btn-danger waves-effect waves-light" href="{{ route('sso.google') }}"><i class="fab fa-google"></i> Google</a>
                          <a class="btn btn-primary waves-effect waves-light" href="{{ route('sso.facebook') }}"><i class="fab fa-facebook-f "></i> Facebook</a>
                          <a class="btn btn-info waves-effect waves-light" href="{{ route('sso.linkedin') }}"><i class="fab fa-linkedin "></i> Linked</a>
                          <a class="btn btn-dark waves-effect waves-light" href="{{ route('sso.github') }}"><i class="fab fa-github"></i> Github</a>

                          <h6 class="mt-4 mb-2 text-center text-secondary">Daftarkan Terlebih Dahulu Email Sosial Media Pada Menu <br><b>Ubah Kata Sandi</b><br> Untuk Menggunakan Fitur Ini</h6>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end row -->
      </div>
    </div>
    <!-- end Account pages -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

    <script src="{{ asset('/assets/libs/push-notification/push.min.js') }}"></script>

    <script src="{{ asset('assets/js/monochrome-bundle.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('app-sw.js') }}"></script>
  </body>
  </html>
