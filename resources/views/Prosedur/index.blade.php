@extends('Template.page')

@section('title', 'Prosedur')

@section('main')
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card text-light bg-dark">
                <div class="card-body">
                    <h3 class="card-title font-weight-bold"><span>1</span> Cara memilih Anime</h3>
                    <p>Datang langsung dan memilih pada toko kami. <a href="#">Klik</a> untuk lihat peta lokasi atau buka website <a href="../../../">http://localhost:8000</a> untuk melihat semua koleksi kami</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-dark text-light">
                <div class="card-body">
                    <h3 class="card-title font-weight-bold"><span>2</span> Cara menyewa Anime</h3>
                    <p>Menyewa langsung di toko kami. <a href="#">Klik</a> untuk lihat peta lokasi atau bisa order lewat whatsapp di :</p>
                    <h4>0812 2453 5633</h4>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card bg-dark text-light mt-3 mb-3">
                <div class="card-body">
                    <h3 class="card-title font-weight-bold"><span>3</span> Aturan penyewaan Anime</h3>
                    <ul>
                        <li>Untuk booking dengan membayar harga sewa dahulu</li>
                        <li>Lama penyewaan adalah 3 hari (hari sabtu, minggu dan libur dihitung)</li>
                        <li>Denda keterlambatan pengembalian Rp. 20.000,- per hari per Anime</li>
                        <li>Uang sewa dan deposit dibayar sebelum Anime diambil / dikirim</li>
                        <li>Uang deposit akan dikembalikan cash untuk pengembalian di toko, dikembalikan via transfer max H+1 apabila kembali via kurir (pengembalian deposit tidak bisa bertahap. harus semua Anime dalam 1 bon kembali dahulu)</li>
                        <li>Anime yang disewa tidak dicuci saat dikembalikan, kami akan mencuci Anime tersebut</li>
                        <li>Anime yang sudah di booking atau disewa tidak dapat ditukar, dibatalkan, tukar jadwal. Uang Sewa yang sudah dibayarkan tidak bisa dikembalikan dengan alasan apapun</li>
                        <li>Apabila terjadi Kerusakan / Kehilangan Anime / aksesoris akan dikenakan biaya sesuai ongkos perbaikan Anime / aksesoris tersebut (bisa lebih besar dari nilai deposit)</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card bg-dark text-light">
                <div class="card-body">
                    <h3 class="card-title font-weight-bold"><span>4</span> Cara pengambilan / pengembalian Anime</h3>
                    <ul>
                        <li>Anime dapat diambil dan dikembalikan langsung di toko kami atau dapat dikirim dan dikembalikan via gojek atau JNE</li>
                        <li>Harga sewa belum termasuk ongkos kirim</li>
                        <li>Keterlambatan pengiriman oleh pihak ketiga (Gojek, JNE, dll) diluar tanggung jawab kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
