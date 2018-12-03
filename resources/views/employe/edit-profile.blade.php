@extends('layouts.admin-horizontal')
@section('css')

@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<center><h3>Edit Your Profile</h3></center>
			<div class="panel panel-default">
				<div class="panel-heading">Edit Profile</div>
				<div class="panel-body">
					<form class="form-horizontal" action="{{ route('employe.profile.update') }}" method="POST">
					<div class="form-group">
						<label for="name" class="col-md-4 control-label">Name</label>

						<div class="col-md-6">
							<input id="name" disabled="" type="text" class="form-control" name="name" value="{{ $sdm->user->name }}">
						</div>
					</div>

					<div class="form-group">
						<label for="pekerjaan" class="col-md-4 control-label">Pekerjaan</label>
						<div class="col-md-6">
							<input id="pekerjaan" disabled="" type="text" class="form-control" name="pekerjaan" value="{{ $sdm->job->name }}">
						</div>
					</div>
						<div class="form-group">
							<label for="gender" class="col-md-4 control-label">Gender</label>
							<div class="col-md-6">
								<input id="gender" disabled="" type="text" class="form-control" name="gender" value="{{ $sdm->user->gender }}">
							</div>
						</div>

						<div class="form-group">
							<label for="birth" class="col-md-4 control-label">Birth</label>
							<div class="col-md-6">
								<input id="birth" type="date" disabled="" class="form-control" name="birth" value="{{$sdm->user->birth}}">
							</div>
						</div>

						<div class="form-group">
							<label for="address" class="col-md-4 control-label">Address</label>
							<div class="col-md-6">
								<input id="address" type="text" class="form-control" name="address" value="{{$sdm->user->address}}">
							</div>
						</div>

						<h3>Data Login</h3>

						<div class="form-group">
							<label for="email" class="col-md-4 control-label">Email</label>
							<div class="col-md-6">
								<input id="email" type="email" class="form-control" name="email" value="{{$sdm->user->email}}">
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input id="password" type="password" class="form-control" name="password">
							</div>
						</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>						
					</div>

					@csrf

					</form>
				</div>
			</div>	
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')

@endsection