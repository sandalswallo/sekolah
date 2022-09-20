@extends('layout.app')

@section('title')
    kelas
@endsection

@section('content')
<div class="card mt-3">
  <div class="card-header">
    <div class="card-title">
      <h5><i class="fa-solid fa-snowflake"></i> Data Kelas</h5>

      <button type="button" class="btn btn-success btn-sm float-end" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="fa fa-plus"></i></button>
    </div>
  </div>

  <div class="card-body">
    <table class="table table-striped ">
      <thead>
        <tr>
          <th style="width: 5%">No.</th>
          <th>Nama</th>
          <th style="width: 10%">Aksi</th>
        </tr>
      </thead>

      <tbody>
        @foreach($kelas as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->nama }}</td>
          <td>
            <a href="/kelas/edit/{{$item->id}}" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i> </a>
              @csrf
            <a href="/kelas/hapus/{{$item->id}}" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i></a>
          </td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah kelas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('kelas.store')}}" method="POST">
          @csrf
          <div class="form-group">
           <label for="nama">Nama</label>
           <input type="text" name="nama" id="nama" 
           class="form-control @error('nama') is-invalid @enderror">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection