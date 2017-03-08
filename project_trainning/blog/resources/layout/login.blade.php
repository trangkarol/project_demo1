
<div class="container-fluid">
	<div class="panel panel-primary">
		<div class="panel-heading">{{trans('languages.login')}}</div>
	</div>
	<!-- content -->
	<div class="panel panel-default">
		<div class="panel-body">
			<form class="form-horizontal" action="" role="form" method="POST">
				{{ csrf_field() }}
				<!-- email -->
				<div class="form-group">
					<label class="control-label col-md-6" for="email">{{trans('languages.email-address')}}:</label>
					<div class="col-md-6">
						<input type="email" class="form-control" id="email" placeholder="{{trans('languages.enter-email')}}">
					</div>
				</div>
				<!-- password -->
				<div class="form-group">
					<label class="control-label col-md-6" for="email">{{trans('languages.password')}}:</label>
					<div class="col-md-6">
						<input type="email" class="form-control" id="email" placeholder="">
					</div>
				</div>
				<!-- button -->
				<div class="form-group">
					<div class="col-md-12">
						<button type="submit">{{trans('languages.login')}}</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>