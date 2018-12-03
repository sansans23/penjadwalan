@extends('layouts.admin-horizontal')


@section('content')
<style type="text/css">
	p {
	    margin: 5px;
	    text-align:center;
	    color: white;
	}
</style>

<div class="container">
	<h2>Jadwal & Rekap Kehadiran Kerja</h2>
	<br>
	<div class="row">
		<div class="col-sm-2 col-sm-offset-2" style="background-color: #b4d8ae;"><p>Hadir</p></div>
		<div class="col-sm-2" style="background-color: #fcb3b1;"><p>Tidak Hadir</p></div>
		<div class="col-sm-3" style="background-color: #b2b0ff;"><p>Jadwal Akan Datang</p></div>
	</div>
	<br>

	<div class="container">
		<div id="calendar"></div>
	</div>
		
</div>

@endsection


@section('script')
	<script type="text/javascript">
	$("#calendar").fullCalendar({
		header: {
	      left: 'prev,next today',
	      center: 'title',
	      right: 'month,agendaWeek'
	    },
		defaultDate: moment('{{date('Y-m-d')}}'),
	    events: "{{ route('employe.jadwal.calendar') }}",
	});
	</script>
@endsection
