@extends('layout.app')

@section('title')
    Guru
@endsection

@section('content')
<div class="card mt-3">
  <div class="card-header">
    <div class="card-title">
      <h5><i class="fa-solid fa-truck-fast"></i> Guru</h5>

      <a class="btn btn-success btn-sm float-end"href="{{route('guru.create')}}"><i class="fa fa-plus"></i></a>
    </div>
  </div>

  <div class="card-body">
    <table class="table table-striped ">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>ALamat</th>
          <th>Jenis Kelamin</th>
          <th>Mapel</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($guru as $item)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$item->nama}}</td>
          <td>{{$item->alamat}}</td>
          <td>{{$item->jenis_kelamin}}</td>
          <td>{{! empty ($item->mapel->nama) ? $item->mapel->nama : ''}}</td>
          
          <td>
            <a href="/guru/{{$item->id}}/edit" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i> </a>
            <a href="/guru/{{$item->id}}/hapus" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i> </a>
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
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
@endsection