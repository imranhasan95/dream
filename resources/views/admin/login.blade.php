
<!DOCTYPE html>
<<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="{{ asset('admin/image/x-icon') }}" href="{{ asset('admin/assets/img/favicon.png') }}">
    <title>{{ config('app.name', 'Imran') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/morris/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">

    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
  <div class="main-wrapper">
     <div class="account-page">
         <div class="container">
             <h3 class="account-title text-white">{{ __('Login') }}</h3>
             <div class="account-box">
                 <div class="account-wrapper">
                     <div class="account-logo">
                         <a href="index.html"><img src="{{ asset('admin/assets/img/logo.png') }}" alt="SchoolAdmin"></a>
                     </div>
                     <form method="POST" action="{{ route('login') }}">
                         @csrf

                         <div class="form-group custom-mt-form-group">
                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                           <label for="email" class="control-label">{{ __('E-Mail Address') }}</label><i class="bar"></i>

                           <div class="col-md-6">
                               @error('email')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                         </div>

                        <div class="form-group custom-mt-form-group">
                             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                           <label for="password"  class="control-label">{{ __('Password') }}</label><i class="bar"></i>
                           <div class="col-md-6">
                               @error('password')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                         </div>

                           <div class="form-group custom-mt-form-group">
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                     <label class="form-check-label" for="remember">
                                         {{ __('Remember Me') }}
                                     </label>
                                 </div>
                         </div>

                         <div class="form-group text-center custom-mt-form-group">
                             <button class="btn btn-primary btn-block account-btn" type="submit">{{ __('Login') }}</button>
                             @if (Route::has('password.request'))
                                 <a class="btn btn-link" href="{{ route('password.request') }}">
                                     {{ __('Forgot Your Password?') }}
                                 </a>
                             @endif
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
      </div>
          <div class="sidebar-overlay" data-reff=""></div>
           <script type="text/javascript" src="{{ asset('admin/assets/js/jquery-3.2.1.min.js') }}"></script>
      	<script type="text/javascript" src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/assets/js/jquery.slimscroll.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/assets/js/select2.min.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/assets/js/moment.min.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
      	<script type="text/javascript" src="{{ asset('admin/assets/plugins/morris/morris.min.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/assets/plugins/raphael/raphael-min.js') }}"></script>
      	<script type="text/javascript" src="{{ asset('admin/assets/js/fullcalendar.min.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/assets/js/jquery.fullcalendar.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/assets/js/chart.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/assets/js/app.js') }}"></script>
      </body>
      </html>
