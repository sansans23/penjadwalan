@extends('layouts.admin-horizontal')
@section('schedule-active','class=menu-top-active')
@section('css')

@endsection
@section('content')
	<div class="container">
		<div id="calendar"></div>
	</div>
@endsection
@section('script')
	<script type="text/javascript">
	$("#calendar").fullCalendar({
	    
	});
	</script>
@endsection
