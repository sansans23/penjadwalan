@extends('layouts.admin-horizontal')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<center><h3>Profile</h3></center>
			<div class="panel panel-default">
				<div class="panel-heading">Biodata</div>
					<div class="panel-body">
						<form class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-6 control-label">Nama</label>
								<div class="col-sm-6">
									<p class="form-control-static">{{ $user->user->name }}</p>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-6 control-label">Email</label>
								<div class="col-sm-6">
									<p class="form-control-static">{{ $user->user->email }}</p>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-6 control-label">Tanggal lahir</label>
								<div class="col-sm-6">
									<p class="form-control-static">{{ $user->user->birth }}</p>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-6 control-label">Alamat</label>
								<div class="col-sm-6">
									<p class="form-control-static">{{ $user->user->address }}</p>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-6 control-label">Jenis Kelamin</label>
								<div class="col-sm-6">
									<p class="form-control-static">{{ $user->user->gender }}</p>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-6 control-label">Pekerjaan</label>
								<div class="col-sm-6">
									<p class="form-control-static">{{ $user->job->name }}</p>
								</div>
							</div>

							<center>
								<a href="{{ route('employe.profile.edit') }}" class="btn btn-success">Edit Profile</a>
							</center>
						</form>
					
				</div>
			</div>
			
		</div>
		
	</div>
	
</div>

@endsection