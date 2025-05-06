@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <h2 class="text-3xl font-bold text-white text-left mb-6">Loyalitas Tinggi Penuh Kreasi </h2>
        <p class="text-center mt-2 font-semibold text-white-500 mb-6">
            <span class="text-xl font-bold text-white">👋 Salam Budaya ! Selamat Datang, {{ session('username') }}</span>
        </p>

        <div class="flex items-center justify-between mt-6">

            <div class="w-1/4 pr-6 mr-4">
                <img src="{{ asset('image/LOGO ETALASE.png') }}" alt="Logo ETALASE" class="w-1/2 h-auto object-cover">
            </div>

            <div class="w-3/4 text-left ml-4">
                <p class="text-sm mt-2 text-white">
                    Terima kasih telah menjaga dan mengelola inventaris perlengkapan UKMK ETALASE. Pantau kondisi barang, kelola data inventaris dengan mudah dan pastikan setiap perlengkapan siap digunakan kapanpun. Lakukan pembaruan statusbarang apabila terdapat kerusakan, kehilangan atau pengadaan ulang. Kontribusi dalam memastikan kelancaran dan kerapian inventaris sangat berharga bagi keberlangsungan kegiatan UKMK ETALASE.
                </p>
            </div>
        </div>


        <div class="bg-gray-400 shadow-lg p-4 mt-6 rounded-md">
            <h3 class="text-xl font-medium text-maroon-600">Barang</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
                <div class="p-4 bg-yellow-100 rounded-md">
                    <h4 class="font-semibold">Total Barang</h4>
                    <p>{{ count($barang) }} Barang</p>
                </div>
                <div class="p-4 bg-green-100 rounded-md">
                    <h4 class="font-semibold">Barang Baik</h4>
                    <p>{{ count(array_filter($barang, fn($item) => $item['kondisi'] == 'baik')) }} Barang</p>
                </div>
                <div class="p-4 bg-red-100 rounded-md">
                    <h4 class="font-semibold">Barang Rusak</h4>
                    <p>{{ count(array_filter($barang, fn($item) => $item['kondisi'] == 'rusak')) }} Barang</p>
                </div>
            </div>
        </div>


        <div class="bg-white shadow-lg p-6 mt-6 rounded-md">
            <h3 class="text-xl font-medium text-maroon-600">Penanggung Jawab Inventaris</h3>
            <div class="mt-4">
                <p class="text-lg font-semibold">Nama:</p>
                <p class="text-gray-700">Hanin Zahirah Syabani</p>
                <p class="text-lg font-semibold mt-2">Email:</p>
                <p class="text-gray-700">haninzahirah24@example.com</p>
                <p class="text-lg font-semibold mt-2">Nomor Telepon:</p>
                <p class="text-gray-700">+62 812 3456 7890</p>
            </div>
        </div>


        <div class="bg-white shadow-lg p-6 mt-6 rounded-md">
            <h3 class="text-xl font-medium text-maroon-600 text-center">Kelola Inventaris 5 Bidang</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 mt-6">
                <div class="p-4 text-center">
                    <img src="{{ asset('image/musik.jpg') }}" alt="Musik" class="w-3/4 h-auto rounded-md mx-auto">
                    <p class="text-center mt-2">Musik</p>
                </div>
                <div class="p-4 text-center">
                    <img src="{{ asset('image/tari.jpg') }}" alt="Tari" class="w-3/4 h-auto rounded-md mx-auto">
                    <p class="text-center mt-2">Tari</p>
                </div>
                <div class="p-4 text-center">
                    <img src="{{ asset('image/fotografi.jpg') }}" alt="Fotografi" class="w-3/4 h-auto rounded-md mx-auto">
                    <p class="text-center mt-2">Fotografi</p>
                </div>
                <div class="p-4 text-center">
                    <img src="{{ asset('image/psm.jpg') }}" alt="PSM" class="w-3/4 h-auto rounded-md mx-auto">
                    <p class="text-center mt-2">PSM</p>
                </div>
                <div class="p-4 text-center">
                    <img src="{{ asset('image/teater.jpg') }}" alt="Teater" class="w-3/4 h-auto rounded-md mx-auto">
                    <p class="text-center mt-2">Teater</p>
                </div>
            </div>
        </div>
    </div>
@endsection
