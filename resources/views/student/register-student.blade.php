<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
                       <h3 class="account-title text-white">Student Register</h3>
                       <div class="account-box">
                           <div class="account-wrapper">
                               <div class="account-logo">
                                   <a href="index.html"><img src="{{ asset('admin/assets/img/logo.png') }}" alt="School-admin"></a>
                               </div>
                               @if (session('status'))
                                      <div class="alert alert-success" role="alert">
                                          {{ session('status') }}
                                      </div>
                                  @endif
                               <form action="{{ route('studentregiste.store') }}"  method="POST">
                                 @csrf
                                  <div class="form-group custom-mt-form-group">
       								<input type="text" name="name"/>
       								<label class="control-label">Name </label><i class="bar"></i>
                      @error ('name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
       							</div>
                                  <div class="form-group custom-mt-form-group">

       								<input type="email"  name="email"/>
       								<label class="control-label">Email </label><i class="bar"></i>
       							</div>
                                  <div class="form-group custom-mt-form-group">
       								<input type="password"  name="password"/>
       								<label class="control-label">Password</label><i class="bar"></i>
       							</div>
                                    <div class="form-group custom-mt-form-group">
       								<input type="password"  name="password"/>
       								<label class="control-label">Repeat Password</label><i class="bar"></i>
       							</div>
                                   <div class="form-group text-center custom-mt-form-group">
                                       <button class="btn btn-primary btn-block account-btn" type="submit">Register</button>
                                   </div>
                                   <div class="text-center">
                                       <a href="{{ route('login') }}">Already have an account?</a>
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
