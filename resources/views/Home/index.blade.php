@extends('Template.page')
@section('title', 'Jasa Penyewaan Anime')

@section('main')
    <div class="card rounded-lg text-white bg-dark">
        <div class="row no-gutters">
            <div class="col-md-6">
                <img src="https://w.wallhaven.cc/full/83/wallhaven-83q7ek.jpg" class="card-img" alt="gambar anime">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h3 class="card-title font-weight-bold">Jasa Penyewaan Anime</h3>
                    <p class="card-text">Berbagai jenis anime kami sediakan untuk memenuhi semua kebutuhan anda. Dari genre Slice Of Live,
                        Romance, Comedy, Drama, Action, Supernatural, Horror, dan lain-lain tersedia di web kami</p>
                    <a href="{{ route('product') }}" class="btn btn-primary font-weight-bold">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </div>
@endsection
