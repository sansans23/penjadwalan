@extends('layouts.admin-horizontal')
@section('css')

@endsection
@section('content')
 

    <div class="container">
    	<h2>Manajemen Pekerjaan</h2>
    	<div class="row">

    		{{-- form tambah pekerjaan --}}
    		<div class="col-md-4">
    			<div class="panel panel-default">
    				<div class="panel-heading">
    					Tambah Pekerjaan Baru
    				</div>
    				<div class="panel-body">
    					<form action="{{ url('admin/store') }}" method="post">
    						{{csrf_field()}}
    						<div class="form-group">
    							<label>Nama Bagian</label>
    							<input type="text" name="name" class="form-control"  placeholder="Nama Bagian" required="">
    						</div>
    						
							<button type="submit" class="btn btn-info">Submit</button>
    					</form>
    				</div>
    			</div>
    		</div>

    		{{-- Tabel daftar pekerjaan --}}
    		<div class="col-md-8">
    			<div class="panel panel-default">
			    	<div class="panel-heading">
			    		Job List
			    	</div>
			    	<div class="panel-body">
			    		<div class="table-responsive">
			    			<table class="table table-bordered">
			    				<thead>
			    					<tr>
			    						<th> No. </th>
			    						<th> Name </th>
			    						<th> Action </th>
			    					</tr>
			    				</thead>
			    				<tbody>
			    					@foreach ($job as $index => $data)
			    					<tr>
			    						<td>{{$index+1}}</td>
			    						<td>{{$data ->name}}</td>
			    						<td>
			    							<button type="button" class="btn btn-warning" onclick="event.preventDefault();document.getElementById('edit{{$data->id}}').submit()">Edit</button>
			    							<button type="button" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete{{$data->id}}').submit()">Delete</button>
			    							<form method="post" action="{{url('admin/delete')}}" id="delete{{$data ->id}}">
			    								<input type="hidden" name="id" value="{{$data->id}}">
			    								@csrf
			    							</form>
			    							<form method="post" action="{{url('admin/job/edit')}}" id="edit{{$data ->id}}">
			    								<input type="hidden" name="id" value="{{$data->id}}">
			    								@csrf
			    							</form>
			    						</td>
			    					</tr>
			    					@endforeach
			    				</tbody>
			    			</table>
			    			
			    		</div>
			    		
			    	</div>
			    </div>
    		</div>
    	</div>
    
  	</div>

@endsection
@section('script')

@endsection
