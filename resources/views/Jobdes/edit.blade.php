@extends('layouts.admin-horizontal')
@section('staff-active','class=menu-top-active')
@section('css')

@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<a href="{{url('admin/job') }}"><button type="button" class="btn btn-success">Back to Job</button></a><hr>
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					<form class="form-horizontal" action="{{ url('admin/update') }}" method="post">
					<div class="form-group">
						<label for="name" class="col-md-4 control-label">Name</label>

						<div class="col-md-6">
							<input id="name" type="text" class="form-control" name="name" value="{{ $job->name }}">
						</div>
					</div>

					<input type="hidden" name="id" value="{{ $job->id }}">

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>						
					</div>

					@csrf

					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')

@endsection