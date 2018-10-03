@extends('layouts.admin-horizontal')
@section('css')

@endsection
@section('content')
  {{-- <div class="container"> --}}
  	{{-- {{dd($user)}} --}}
  	{{-- @foreach ($user as $index => $ini)
  		<h1>{{$ini->email}}</h1>
  		<h2>{{$ini->name}}</h2>
      <h3>{{$ini->biodata->gender}}</h3>
  	@endforeach --}}
    {{-- {{dd(csrf_token())}} --}}
    {{-- @foreach ($biodata as $index => $bio)
    <h2>{{$bio->nama}}</h2>
    @endforeach --}}

{{--     <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h1> --}}

    <div class="container">
      <a href="{{url('admin/staff/create')}}"><button type="button" class="btn btn-success">Tambah Pegawai</button></a><hr>

    <div class="panel panel-default">
      <div class="panel-heading">
        Staff List
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($user as $index => $ini)
                <tr>
                  <td>{{ $index+1 }}</td>
                  <td>{{ $ini->name }}</td>
                  <td>{{ $ini->email }}</td>
                  <td>{{ $ini->password }}</td>
                  <td>
                    <button type="button" class="btn btn-info" onclick="event.preventDefault();document.getElementById('show{{$ini->id}}').submit()">Detail</button>
                    <button type="button" class="btn btn-warning" onclick="event.preventDefault();document.getElementById('edit{{$ini->id}}').submit()">Edit</button>
                    <button type="button" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete{{$ini->id}}').submit()">Delete</button>
                    <form method="post" action="{{ url('admin/staff/delete') }}" id="delete{{$ini->id}}">
                      <input type="hidden" name="id" value="{{$ini->id}}">
                      @csrf
                    </form>
                    <form method="post" action="{{ url('admin/staff/edit') }}" id="edit{{$ini->id}}">
                      <input type="hidden" name="id" value="{{ $ini->id }}">
                      @csrf
                    </form>
                    <form method="get" action="{{url('admin/staff/show') }}" id="show{{$ini->id}}">
                      <input type="hidden" name="id" value="{{$ini->id}}">
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

  
  {{--   <form action="{{ url('car/store') }}" method="post">
      <input type="hidden" name="name" value="santi">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      {{-- {{ csrf_field() }}
      @csrf
      <button type="submit">submit</button>
    </form> --}} 
  {{-- </div> --}}
@endsection
@section('script')

@endsection
