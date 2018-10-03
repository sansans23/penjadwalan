@extends('layouts.admin-horizontal')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<a href="{{ url('admin/staff') }}"><button type="button" class="btn btn-success">Back to User</button></a><hr>
			<div class="panel panel-default">
				<div class="panel-heading">Biodata</div>
					<div class="panel-body">
						<form class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-4 control-label">Nama</label>
								<div class="col-sm-6">
									<p class="form-control-static">{{ $user->name }}</p>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label">Email</label>
								<div class="col-sm-6">
									<p class="form-control-static">{{ $user->email }}</p>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label">Tanggal lahir</label>
								<div class="col-sm-6">
									<p class="form-control-static">{{ $user->birth }}</p>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label">Alamat</label>
								<div class="col-sm-6">
									<p class="form-control-static">{{ $user->address }}</p>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label">Jenis Kelamin</label>
								<div class="col-sm-6">
									<p class="form-control-static">{{ $user->gender }}</p>
								</div>
							</div>
						</form>
					
				</div>
			</div>
			
		</div>
		
	</div>
	
</div>
























@endsection