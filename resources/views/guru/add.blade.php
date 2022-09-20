@extends('layout.app')

@section('title')
    Guru
@endsection

@section('content')

<div class="card mt-3">
  <div class="card-header">
    <div class="card-title">
      <h5>Data Nama Guru</h5>
    </div>
  </div>

  <div class="card-body">
    <form action="{{ route('guru.store') }}" method="POST">
      @csrf

      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="nama" class="form-label">Nama Guru</label>
            <input type="text" name="nama" autocomplete="off" id="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">
            @error('nama')
              <div class="text-danger">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>

        
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <label for="alamat" class="form-label">Alamat</label>
              <input type="text" name="alamat" value="{{ old('alamat') }}" class="form-control @error('alamat') is-invalid @enderror">
              @error('alamat')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="form-group">
              <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
              <input type="text" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" class="form-control @error('jenis_kelamin') is-invalid @enderror">
              @error('jenis_kelamin')
                <div class="text-danger">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="form-group">
            <label for="mapel_id" class="form-label">Mapel</label>
            <select name="mapel_id" id="mapel_id" class="form-control @error('mapel_id') is-invalid @enderror">
              @foreach ($mapel as $m)
                  <option value="{{$m->id}}">{{$m->nama}}</option>
              @endforeach
            </select>
            @error('mapel_id')
              <div class="text-danger">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>

      <div class="modal-footer mt-3">
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </form>
  </div>
</div>

@endsection