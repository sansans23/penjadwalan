@extends('layouts.admin-horizontal')


@section('content')

<div class="container">
	<h2>Gaji Karyawan</h2>

		<form class="form-inline" action="{{ route('gaji.show_generate') }}" method="GET">
			<div class="form-group">
				<label for="bulan">Bulan</label>
				<input type="text" name="bulan" class="form-control" id="bulan" value="@if(isset($show_data)){{ $_GET['bulan'] }}@endif" required="" placeholder="Bulan">
			</div>
			<div class="form-group">
				<label for="pekerjaan">Pekerjaan</label>
				<select name="pekerjaan" class="form-control">
					<option value="1">Karcis & Parkir</option>
					<option value="2">Petani</option>
					{{-- <option value="3"></option> --}}
				</select>
			</div>
			<div class="form-group">
				<label for="password">Bulan</label>
				<input type="password" name="password" class="form-control" required="" placeholder="Password Gaji">
			</div>
			<button type="submit" class="btn btn-info">Show/Generate</button>
		</form><br>
		@if(isset($show_data))
			<div class="panel panel-default">
				<div class="panel-heading">
					Daftar Gaji Karyawan Bulan {{ $bulan }}
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped" id="gajiTable">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama SDM</th>
									<th>Gaji</th>
								</tr>
							</thead>
							@php $no=1; @endphp
							@foreach($gajis as $key => $gaji)
							<tr>
								<td>{{ $no }}</td>
								<td>{{ $gaji->name }}</td>
								<td>@if(!$encrypt_status) Password Tidak Sesuai @else {{ "Rp ".number_format($gaji->payment) }} @endif</td>
							</tr>
							@php $no++ @endphp
							@endforeach
						</table>
					</div>
				</div>
			</div>
		@else
			<div class="panel panel-default">
				<div class="panel-body">
					Pilih Tahun dan Bulan terlebih dahulu
				</div>
			</div>
		@endif
		
	
</div>
@endsection

@section('script')
<script type="text/javascript">
	$("#bulan").datepicker( {
	    format: "mm-yyyy",
	    startView: "months", 
	    minViewMode: "months"
	});
	$(document).ready( function () {
		$('#gajiTable').DataTable();
	} );
</script>
@endsection