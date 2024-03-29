<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Booking</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('assets_dashboard/images/favicon.ico')}}" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('assets_dashboard/css/style.css')}}">
    
    

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
    @include('partials_dashboard.sidebar')
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
    @include('partials_dashboard.header')
	<!-- [ Header ] end -->
	
	

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        @yield('content')  
    </div>
    <!-- [ Main Content ] end -->

    <!-- Required Js -->
    <script src="{{asset('assets_dashboard/js/vendor-all.min.js')}}"></script>
    <script src="{{asset('assets_dashboard/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets_dashboard/js/pcoded.min.js')}}"></script>

<!-- Apex Chart -->
<script src="{{asset('assets_dashboard/js/plugins/apexcharts.min.js')}}"></script>


<!-- custom-chart js -->
<script src="{{asset('assets_dashboard/js/pages/dashboard-main.js')}}"></script>

@yield('script')
</body>

</html>
