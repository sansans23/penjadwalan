@extends('layouts.admin-horizontal')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-2">
			<a href="{{ url('admin/sdm') }}"><button type="button" class="btn btn-success">Back to SDM</button></a><hr>
			<div class="panel panel-default">
				<div class="panel-heading">Biodata</div>
					<div class="panel-body">
						<div class="table-responsive">
							<div class="table table-bordered">
								<thead>
									<td>
										<tr>Nama</tr>
										<tr>Pekerjaan</tr>
										<tr>Gender</tr>
										<tr>Birth</tr>>
										<tr>Email</tr>
										<tr>Address</tr>
									</td>
								</thead>
								<tbody>
									@foreach ($users as $index => $value)
									<td>
										<tr>{{ $value->name }}</tr>
										<tr>{{ $value->pekerjaan }}</tr>
										<tr>{{ $value->gender }}</tr>
										<tr>{{ $value->birth }}</tr>
										<tr>{{ $value->email }}</tr>
										<tr>{{ $value->address }}</tr>
									</td>
									@endforeach
								</tbody>
							</div>
							
						</div>
					
				</div>
			</div>
			
		</div>
		
	</div>
	
</div>
























@endsection