	<!DOCTYPE html>
	<html lang="">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<!-- Fonts -->
			<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

			<title>@yield('title')</title>

			<!-- start css -->
			{{ HTML::style('/assets/css/common/bootstrap.css') }}
			{{ HTML::style('/assets/css/common/bootstrap.min.css') }}
			{{ HTML::style('/assets/css/common/bootstrap-grid.css') }}
			{{ HTML::style('/assets/css/common/bootstrap-grid.min.css') }}
			{{ HTML::style('/assets/css/common/bootstrap-datetimepicker.css') }}
			{{ HTML::style('/assets/css/common/bootstrap-datetimepicker.min.css') }}
			{{ HTML::style('/assets/css/common/style.css') }}
			{{ HTML::style('/css/app.css') }}


			@yield('contentCss')
			<!-- end csss -->

			<!-- start js -->	
			{{ HTML::script('/assets/js/common/jquery.js') }}
			{{ HTML::script('/assets/js/common/bootstrap.js') }}
			{{ HTML::script('/assets/js/common/bootstrap.min.js') }}
			{{ HTML::script('/js/bootstrap-datetimepicker.js') }}
			{{ HTML::script('/js/bootstrap-datetimepicker.min.js') }}
			{{ HTML::script('/assets/js/common/common.js') }}

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