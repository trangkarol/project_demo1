<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

		<!-- start css -->
		{{ HTML::style('/assets/css/common/bootstrap.css') }}
		{{ HTML::style('/assets/css/common/bootstrap.min.css') }}
		{{ HTML::style('/assets/css/common/bootstrap-grid.css') }}
		{{ HTML::style('/assets/css/common/bootstrap-grid.min.css') }}
		<!-- start js -->	
		{{ HTML::script('/assets/js/common/jquery.js') }}
		{{ HTML::script('/assets/js/common/bootstrap.js') }}
		{{ HTML::script('/assets/js/common/bootstrap.min.js') }}
		{{ HTML::script('/assets/js/common/common.js') }}

	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">{{trans('languages.login')}}</div>
						<!-- content -->
						<div class="panel-body ">
							<form class="form-horizontal" action="{{url('/login')}}" role="form" method="POST">
								{{ csrf_field() }}
								<!-- email -->
								<div class="form-group">
									<label class="control-label col-md-6" for="email">{{trans('languages.email-address')}}:</label>
									<div class="col-md-6">
										<input type="email" class="form-control" name="email" id="email" placeholder="{{trans('languages.enter-email')}}">
									</div>
								</div>
								<!-- password -->
								<div class="form-group">
									<label class="control-label col-md-6" for="email">{{trans('languages.password')}}:</label>
									<div class="col-md-6">
										<input type="password" class="form-control" name="password" id="password" placeholder="********">
									</div>
								</div>
								<!-- button -->
								<div class="form-group">
									<div class="col-md-12">
										<button type="submit" class="btn btn-info">{{trans('languages.login')}}</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
