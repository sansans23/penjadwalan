@extends('layouts.admin-horizontal')


@section('content')

<div class="container">
	<h2>Penjadwalan Karyawan</h2>

	<form class="form-inline" action="" method="GET">
		<div class="form-group">
			<label for="tahun">Tahun</label>
			<input type="text" name="tahun" class="form-control" id="tahun" required="" placeholder="Tahun">
		</div>
		<div class="form-group">
			<label for="bulan">Bulan</label>
			<input type="text" name="bulan" class="form-control" id="bulan" required="" placeholder="Bulan">
		</div>
		<div class="form-group">
				<label for="pekerjaan">Pekerjaan</label>
				<select name="pekerjaan" class="form-control">
					<option value="1">Karcis & Parkir</option>
					<option value="2">Petani</option>
					{{-- <option value="3">Parkir</option> --}}
				</select>
			</div>
			<button type="submit" class="btn btn-info">Tampilkan</button>
		
	</form><br>
	@if(isset($show_data))
		<div class="container">
			<div id="calendar"></div>
		</div>
	@else
	<div class="panel panel-default">
		<div class="panel-body">
			Pilih Tahun dan Bulan Terlebih dahulu
		</div>
		
	</div>
	@endif
		
</div>

@endsection


@section('script')

	@if(isset($show_data))
		<script type="text/javascript">
		$("#calendar").fullCalendar({
			defaultDate: moment('{{$_GET['tahun']}}-{{$_GET['bulan']}}-01'),
		    events: "{{ route('get-calendar') }}?tahun={{$_GET['tahun']}}&bulan={{$_GET['bulan']}}&pekerjaan={{$_GET['pekerjaan']}}",
		    color: 'yellow',   // an option!
  			textColor: 'black' // an option!
		});
		</script>
	@endif
@endsection
