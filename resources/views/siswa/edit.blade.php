@extends('layout.app')

@section('title')
    siswa
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit siswa</h5>
        </div>
    </div>

        <div class="card-body">
            <form action="{{route('siswa.update', $b->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nama" >Nama siswa</label>
                            <input type="text" name ="nama" class="form-control" value="{{$b->nama}}" @error('nama') is invalid @enderror>
                               @error('nama') 
                               <div class="text-danger">
                                {{$massage}}
                               </div>
                            @enderror
                        </div>
                    </div>
                   
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="jenis_kelamin" >Jenis Kelamin</label>
                    <input type="text" name ="jenis_kelamin" class="form-control" value="{{$b->jenis_kelamin}}" @error('jenis_kelamin') is invalid @enderror>
                    @error('jenis_kelamin') 
                    <div class="text-danger">
                     {{$massage}}
                    </div>
                 @enderror
                    </div>
                  </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="alamat" >Alamat</label>
                            <input type="text" name ="alamat" class="form-control" value="{{$b->alamat}}" @error('alamat') is invalid @enderror>
                    @error('alamat') 
                    <div class="text-danger">
                     {{$massage}}
                    </div>
                 @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select name="kelas_id" id="kelas_id" class="form-control">
                            <option selected>Pilih...</option>
                            <option value="{{$b->kelas_id}}" selected>{{$b->kelas->nama}}</option>
                            @foreach ($kelas as $s)
                            <option value="{{$s->id}}">{{$s->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="mapel">Mapel</label>
                        <select name="mapel_id" id="mapel_id" class="form-control">
                            <option selected>Pilih...</option>
                            <option value="{{$b->mapel_id}}" selected>{{$b->mapel->nama}}</option>
                            @foreach ($mapel as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/kelas" class="btn btn-danger" role="button">Batal</a>
                    <button class="btn btn-warning" type="submit"><i class="fa fa-save"></i>
                    Update</button>
                </div>
            </form>
        </div>
     
@endsection