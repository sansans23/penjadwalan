@extends('layouts.admin-horizontal')


@section('content')

<div class="container">

	<div class="right-div">
		<a href="{{ url('admin/kehadiran/show') }}" type="submit" class="btn btn-info">Rekap Kehadiran</a>
	</div>
	<h2>Menejemen Kehadiran</h2>
	

		<form class="form-inline" action="" method="GET">
			<div class="form-group">
				<label for="tanggal">Tanggal</label>
				<input type="date" name="tanggal" class="form-control" id="tanggal" required="" placeholder="Tanggal">	
			</div>
			<button type="submit" class="btn btn-info">Tampilkan</button>

		</form><br>
		@if(isset($show_data))
			<form action="{{ route('kehadiran.update',$_GET['tanggal']) }}" method="post">
				{{-- <input type="hidden" name="tanggal" value="{{ $_GET['tanggal'] }}"> --}}
				<input type="hidden" name="_method" value="patch">
				<div class="panel panel-default">
					<div class="panel-heading">
						Tabel Kehadiran
					</div>
					<div class="panel-body">
						<div class="table-responsive">
						<table class="table table-bordered">
						<tr>
							<th>Nama SDM</th>
							<th>Status Kehadiran</th>
						</tr>

						@foreach($karyawan as $sdm => $value )
							<tr>
								<td>
									{{$value->Sdm->name}}
								</td>
								<td>
									<select name="kehadiran[{{$value->id}}]">
										<option {{ $value->kehadiran == 1 ? "selected" : ""}} value="1">Hadir</option>
										<option {{ $value->kehadiran == 0 ? "selected" :""}} value="0">Tidak Hadir</option>
									</select>
								</td>
							</tr>
						@endforeach
						</table>	
						<div class="form-group">
							<div class="col-md-2 col-md-offset-8">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>						
						</div>
						@csrf
						</div>
					</div>
				</div>
			</form>
		@else
			<div class="panel panel-default">
				<div class="panel-body">
					Pilih Tahun dan Bulan terlebih dahulu
				</div>
			</div>
		@endif
		
</div>
































@endsection