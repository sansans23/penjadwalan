@extends('layouts.admin-horizontal')


@section('content')

<div class="container">
  <h2>Rekap Kehadiran</h2>
  <a href="{{ url('admin/kehadiran')}}" ><button type="submit" class="btn btn-success">Kembali</button></a><br><br>

  <div class="panel panel-default">
		<div class="panel-heading">Tabel Kehadiran</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered">
						<tr>
							<th>No.</th>
							<th>Nama SDM</th>
							<th>Kehadiran</th>
						</tr>

						@foreach($sdms as $index => $sdm )
							<tr>
								<td>{{$index+1}}</td>
								<td>
									{{$sdm->name}}
								</td>
								<td>
									{{$sdm->kehadiran}}
								</td>
							</tr>
						@endforeach
					</table>
				</div>
			</div>
</div>












@endsection
