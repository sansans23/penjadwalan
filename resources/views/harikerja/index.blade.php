@extends('layouts.admin-horizontal')


@section('content')

<div class="container">
	<h2>Menejemen Hari Kerja</h2>

		<form class="form-inline" action="" method="GET">
			<div class="form-group">
				<label for="tahun">Tahun</label>
				<input type="text" name="tahun" class="form-control" id="tahun" required="" placeholder="Tahun">	
			</div>
			<div class="form-group">
				<label for="bulan">Bulan</label>
				<input type="number" name="bulan" class="form-control" id="bulan" required="" placeholder="Bulan" max="12" min="1">
			</div>
			<div class="form-group">
				<label for="pekerjaan">Pekerjaan</label>
				<select name="pekerjaan" class="form-control">
					<option value="1">Karcis & Parkir</option>
					<option value="2">Petani</option>
					{{-- <option value="3"></option> --}}
				</select>
			</div>
			<button type="submit" class="btn btn-info">Tampilkan</button>
		</form><br>
		@if(isset($show_data))
			<form action="{{ route('harikerja.update') }}" method="post">
				<input type="hidden" name="tahun" value="{{ $_GET['tahun'] }}">
				<input type="hidden" name="bulan" value="{{ $_GET['bulan'] }}">
				<input type="hidden" name="pekerjaan" value="{{ $_GET['pekerjaan'] }}">
				<input type="hidden" name="_method" value="patch">
				<div class="panel panel-default">
					<div class="panel-heading">
						Tabel Hari Kerja
					</div>
					<div class="panel-body">
						<div class="table-responsive">
						<table class="table table-bordered">
						<tr>
							<th>Tanggal</th>
							<th>Hari</th>
							<th>Kuota</th>
						</tr>	
						@php
							$text_hari = ["Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu"];
						@endphp
						@foreach($hari as $index =>$value)
						<tr>
							<td>{{ $value['tanggal'] }}</td>
							<td>{{ 
								$text_hari[date('N',strtotime("{$value['tanggal']}-{$_GET['bulan']}-{$_GET['tahun']}")) - 1 ] 
							}}</td>
							<td>
								{{-- <input type="hidden" name="kuota_id[{{ $value['id'] }}]"> --}}
								<input type="number" name="kuota[{{$value['id']}}]" value="{{ $value['kuota'] }}">
							</td>
						</tr>

						@endforeach
						</table>	
						<input type="hidden" name="id" value="">
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