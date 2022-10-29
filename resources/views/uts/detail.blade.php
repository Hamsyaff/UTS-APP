@extends('uts.master')
@section('master')
<div class="container-fluid">
    <div class="container">
        <h1 class="text-center text-white mt-3">Review Barang</h1>
        <div class="card mt-5" style="max-width: 1110px;">
            <div class="row g-0">
                <div class="col">
                    <img src="{{asset('image/'.$reviewBarang->gambar)}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">Nama Barang</div>
                            <div class="col-1">:</div>
                            <div class="col">
                                <h5 class="card-title">{{$reviewBarang->Merk}}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">Harga</div>
                            <div class="col-1">:</div>
                            <p class="card-text col-7">Rp. {{$reviewBarang->Harga}}</p>
                        </div>
                        <div class="row">
                            <div class="col-2">Size</div>
                            <div class="col-1">:</div>
                            <p class="card-text col-7">{{$reviewBarang->Size}}</p>
                        </div>
                        <div class="row">
                            <div class="col-2">Deskripsi</div>
                            <div class="col-1">:</div>
                            <p class="card-text col">{{$reviewBarang->Deskripsi}}</p>
                        </div>

                        <a href="{{route('daftarBarang.view')}}" class="btn btn-success mb-2" style="float: right;">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection