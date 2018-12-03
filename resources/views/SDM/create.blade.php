@extends('layouts.admin-horizontal')
{{-- @section('staff-active','class=menu-top-active') --}}
@section('css')

@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
					<div class="panel-body">
						<form class="form-horizontal" action="{{ route('sdm.store') }}" method="post">

						<h3>Data Pribadi</h3>
						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Name</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control" name="name">
							</div>
						</div>
						<div class="form-group">
							<label for="pekerjaan" class="col-md-4 control-label">Pekerjaan</label>

							{{-- tampilkan list pekerjaan di sini --}}
							<div class="col-md-6">
								<select class="form-control" name="pekerjaan_id">
									@foreach($job as $index=>$pkj)
										<option value="{{$pkj->id}}">{{$pkj->name}}</option>
									@endforeach

								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="gender" class="col-md-4 control-label">Gender</label>

							<div class="col-md-6">
								<select class="form-control" name="gender">
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="birth" class="col-md-4 control-label">Birth</label>

							<div class="col-md-6">
								<input id="birth" type="date" class="form-control" name="birth">
							</div>
						</div>

						<div class="form-group">
							<label for="address" class="col-md-4 control-label">Address</label>

							<div class="col-md-6">
								<input id="address" type="text" class="form-control" name="address">
							</div>
						</div>	

						<div>
							<label for="kelompok_hari" class="col-md-4 control-label">Hari kerja</label>

							<div class="col-md-6">
								<select class="form-control" name="kelompok_hari">
									<option value="1">Senin</option>
									<option value="2">Selasa</option>
									<option value="3">Rabu</option>
									<option value="4">Kamis</option>
									<option value="5">Jumat</option>
									<option value="6">Sabtu</option>
								</select>								
							</div>
						</div>	<br>

						<h3>Data Login</h3>

						<div class="form-group">
							<label for="email" class="col-md-4 control-label">Email</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control" name="email">
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
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready( function () {
		if ( $('#birth')[0].type != 'date' ) $('#birth').datepicker();
	} );
</script>
@endsection