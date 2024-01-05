@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <section>
                <div class="col-md-12 mb-5">
                <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="500" alt="">
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .font-large {
            font-size: 1.7em; /* Ubah ukuran font sesuai kebutuhan Anda */
            font-weight: 400;
        }

        .spacestore-text {
            color: #0099cc; /* Warna biru muda */
            font-weight: 700;
        }
    </style>
    <title>SpaceStore</title>
</head>
<body>

    <p class="font-large">
        Selamat datang di <span class="spacestore-text">SpaceStore</span>, destinasi belanja online terpercaya untuk kebutuhan Anda! Temukan beragam produk berkualitas dengan harga terbaik. Dari fashion, elektronik, hingga kecantikan ,<span class="spacestore-text">SpaceStore</span> menyediakan pengalaman belanja yang mudah dan aman.
    </p>

</body>
</html>

            </div>
        </section>
    
        @foreach($barangs as $barang)
        <div class="col-md-4">
            <div class="card">
              <img src="{{ url('uploads') }}/{{ $barang->gambar }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                    <strong>Stok :</strong> {{ $barang->stok }} <br>
                    <hr>
                    <strong>Keterangan :</strong> <br>
                    {{ $barang->keterangan }} 
                </p>
                <a href="{{ url('pesan') }}/{{ $barang->nama_barang }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
              </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>
@endsection
