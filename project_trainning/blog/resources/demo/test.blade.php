@extends('layout.main')

@section('title')
	Demo Form
@endsection
@section('contentCss')

@endsection

@section('contentJs')

@endsection

@section('content')
	<div class="col-md-12">
		<!-- header of form -->
	<!-- 	<div class="">
			
		</div> -->
		<!--  -->
		<form action="/demo" method="POST" class="form-horizontal">
			<!-- token -->
			 {{ csrf_field() }}
			<!-- email -->
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Email:</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
			    </div>
			</div>
			<!-- name -->
			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Name:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
			    </div>
			</div>
			<!-- password -->
			<div class="form-group">
				<label class="control-label col-sm-2" for="password">Password:</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" maxlength="10" name="password" id="password" placeholder="**********">
			    </div>
			</div>
			<!-- submit form -->
			<div class="form-group">
				<!-- <div class="md-offset-7"> -->
					<button type="submit" class="btn btn-primary">Login</button>
				<!-- </div> -->
				
			</div>
		</form>
	</div>
@endsection	