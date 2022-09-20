@extends('layout.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="row g-2 text-center">
      <div class="col-3 text-light">
        <div class="p-3 bg-primary rounded mt-3"> 10 Barang <i class="fa fa-boxes"></i>  </div>
      </div>

      <div class="col-3 text-light">
        <div class="p-3 bg-success rounded mt-3"> 15 Kategori <i class="fa fa-tag"></i></div>
      </div>

      <div class="col-3">
        <div class="p-3 rounded bg-light mt-3"> 5 Supplier <i class="fa fa-truck"></i></div>
      </div>

      <div class="col-3">
        <div class="p-3 rounded bg-info mt-3"> 100 Member <i class="fa fa-users"></i></div>
      </div>
    </div>
@endsection