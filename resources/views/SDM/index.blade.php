@extends('layouts.admin-horizontal')
@section('css')

@endsection

@section('content')

<div class="container">
  <h2>Manajemen SDM</h2>
  <a href="{{ route('sdm.create')}}" ><button type="submit" class="btn btn-success">Tambah Pekerja</button></a><br><br>
  
	<div class="panel panel-default">
      <div class="panel-heading">
        Employe List
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Pekerjaan</th>
                <th>Action</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($sdm as $index => $iki)
            <tr>
              <td>{{ $index+1 }}</td>
              <td>{{ $iki->name }}</td>
              <td>{{ $iki->pekerjaan_id }}</td>
              <td>
                <a href="{{ route('sdm.show',$iki->id) }}" type="button" class="btn btn-info">Detail</a>
                <a href="{{ route('sdm.edit',$iki->id) }}" type="button" class="btn btn-warning">Edit</a>
                <button type="button" class="btn btn-danger" onclick="delete_data('{{$iki->id}}')">Delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
  </div>
</div>
</div>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script type="text/javascript">
  function delete_data(id) {
    var konfirmasi = confirm("Anda yakin akan menghapus data ini ? ");
    if(konfirmasi) {
      axios.delete('{{ url('admin/sdm/') }}/'+id)
        .then(response=>{
          if(response.data) {
            alert("Penghapusan Data Berhasil");
            location.reload();
          } else {
            alert("Penghapusan data gagal");
          }
        })
        .catch(e=>{
          console.log(e);
        });
    }
  }

</script>

@endsection