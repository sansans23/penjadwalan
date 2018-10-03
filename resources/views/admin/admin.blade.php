@extends('layouts.admin-horizontal')
@section('dashboard-active','class=menu-top-active')
@section('css')

@endsection
@section('content')
	<div class="container">
	<h1><center>Alur Pembuatan Jadwal Kerja</center></h1><br>

	{{-- <div class="col-xs-6 col-md-4"> --}}
	<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<a href="{{ url('admin/job') }}" type="submit" class="btn btn-danger btn-lg btn-block">Tambahkan  Jenis pekerjaan</a>
	</div>
	</div>
	{{-- </div> --}}

	<div class="row">
	<div class="col-md-5 col-md-offset-5">
		<i class="glyphicon glyphicon-arrow-down " style="	font-size: 1.00cm"></i>
	</div>
	</div>

	<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<a href="{{ url('admin/sdm') }}" type="submit" class="btn btn-warning btn-lg btn-block">Tambahkan    Pekerja    </a>
	</div>
	</div>

	<div class="row">
	<div class="col-md-5 col-md-offset-5">
		 <i class="glyphicon glyphicon-arrow-down" style="font-size: 1.00cm"></i>
	</div>
	</div>

	<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<a href="{{ url('admin/harikerja') }}" type="submit" class="btn btn-success btn-lg btn-block">Tambahkan  Hari Kerja</a> 
	</div>
	</div>

	<div class="row">
	<div class="col-md-5 col-md-offset-5">
		<i class="glyphicon glyphicon-arrow-down" style="font-size: 1.00cm"	></i>	
	</div>
	</div>

	<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<a href="{{ url('admin/schedule') }}" type="submit" class="btn btn-info btn-lg btn-block">Buat Jadwal Hari kerja</a>
	</div>
	</div>
	</div>
	</div>
@endsection