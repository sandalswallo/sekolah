@extends('layout.app')

@section('title')
    Mapel
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Mapel</h5>
            <form action="{{ route('mapel.update', $mapel->id) }}" method="POST">
                <div class="card-body">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{$mapel->nama}}" 
                                    class="text form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                <div class="text-danger">
                                    {{ $message}}
                                </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection