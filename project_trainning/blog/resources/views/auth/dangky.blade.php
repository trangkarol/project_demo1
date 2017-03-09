<!DOCTYPE html>
<html>
	<head>
		<title>{{trans('languages.register')}}</title>
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
		{{ HTML::style('/assets/css/common/bootstrap-reboot.min.css') }}
		{{ HTML::style('/assets/css/common/bootstrap-reboot.css') }}
		{{ HTML::style('/css/jquery.datetimepicker.css') }}
		{{ HTML::style('/css/jquery.datetimepicker.min.css') }}
		<!-- start js -->	
		{{ HTML::script('/assets/js/common/jquery.js') }}
		{{ HTML::script('/assets/js/common/bootstrap.js') }}
		{{ HTML::script('/assets/js/common/bootstrap.min.js') }}
		{{ HTML::script('/js/jquery.datetimepicker.js') }}
		{{ HTML::script('/js/jquery.datetimepicker.min.js') }}
		{{ HTML::script('/assets/js/common.js') }}

	</head>
	<body>
		<div class="container">	
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">{{trans('languages.register')}}</div>
						<!-- content -->
						<div class="panel-body ">
							<form class="form-horizontal" action="{{url('/register')}}" role="form" method="POST">
								{{ csrf_field() }}
								<!-- email -->
								<div class="form-group">
									<label class="control-label col-md-6" for="email">{{trans('languages.email-address')}}:</label>
									<div class="col-md-6">
										<input type="email" class="form-control" id="email" placeholder="{{trans('languages.enter-email')}}" name="email"  required>
										@if ($errors->has('name'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('name') }}</strong>
		                                    </span>
		                                @endif
									</div>

								</div>
								<!-- password -->
								<div class="form-group">
									<label class="control-label col-md-6" for="password">{{trans('languages.password')}}:</label>
									<div class="col-md-6">
										<input type="password" class="form-control" id="password"  name="password" placeholder="********" required>
										@if ($errors->has('password'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
									</div>
								</div>
								<!-- re-password -->
								<div class="form-group">
									<label class="control-label col-md-6" for="repassword">{{trans('languages.re-password')}}:</label>
									<div class="col-md-6">
										<input type="password" class="form-control" name="repassword" id="repassword" placeholder="********" required>
									</div>
								</div>
								<!-- name -->
								<div class="form-group">
									<label class="control-label col-md-6" for="name">{{trans('languages.name')}}:</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="name" id="name" placeholder="{{trans('languages.enter-name')}}" required>
										@if ($errors->has('name'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('name') }}</strong>
		                                    </span>
		                                @endif
									</div>

								</div>
								<!-- birthday -->
								<div class="form-group">
									<label class="control-label col-md-6" for="birthday">{{trans('languages.birthday')}}:</label>
									<div class="col-md-6">
							            <div class="input-group input-append " id="dateRangePicker">
							                <input type="text" class="form-control" id="date" name="birthday" />
							                <span class="input-group-addon" ><span class="glyphicon glyphicon-calendar"></span></span>
							            </div>
							            @if ($errors->has('birthday'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('birthday') }}</strong>
		                                    </span>
		                                @endif
							        </div>
								</div>
								<!-- address -->
								<div class="form-group">
									<label class="control-label col-md-6" for="address">{{trans('languages.address')}}:</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="address" name="address" placeholder="{{trans('languages.enter-address')}}">
										@if ($errors->has('address'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('address') }}</strong>
		                                    </span>
		                                @endif
									</div>
								</div>
								<!-- button -->
								<div class="form-group">
									<div class="col-md-12">
										<button type="submit" class="btn btn-info">{{trans('languages.register')}}</button>
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
