<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Fonts -->
	    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

		<title>@yield('title')</title>

		<!-- start css -->
		<link href="{{ url('assets/css/common/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ url('/assets/css/common/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ url('/assets/css/common/bootstrap-grid.css') }}" rel="stylesheet">
		<link href="{{ url('/assets/css/common/bootstrap-grid.min.css') }}" rel="stylesheet">
		

		@yield('contentCss')
		<!-- end csss -->

		<!-- start js -->	
		<script src="{{ url('/assets/js/common/jquery.js') }}"></script> 
		<script src="{{ url('/assets/js/common/bootstrap.min.js') }}"></script> 
		<script src="{{ url('/assets/js/common/bootstrap.js') }}"></script>  

		@yield('contentJs')
		<!-- end js -->

	</head>
	<body>
	    <div class="container-fluid">
	    	<!-- menu -->
	    	@include('layout.menu')
	    	<!-- end menu -->

	    	<!-- container -->
	    	<div class="col-md-12">
	    		<!-- leftbar -->
	    		<div class="col-md-4">
	    			@include('layout.left_bar')
	    		</div>
	    		<!-- end left bar -->
	    		<!-- content -->
	    		<div class="col-md-6">
	    			@yield('content')
	    		</div>
	    		<!-- end contain -->
	    	</div>
	    	<!-- encontainer -->
	    </div>
	</body>
</html>