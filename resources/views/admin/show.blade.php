@extends('layouts.admin-horizontal')
@section('staff-active','class=menu-top-active')
@section('css')

@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<a href="{{url('admin/staff') }}"><button type="button" class="btn btn-success">Back to staff</button></a><hr>
			<div class="panel panel-default">
				<div class="panel-heading">Biodata</div>
				<div class="panel-body">
					<div class="table-responsive">
						<form class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-2 control-label">Nama</label>
								<div class="col-sm-10">
									<p class="form-control-static" value="{{$user->name}}"></p>
									
								</div>
								
							</div>
							
						</form>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')

@endsection