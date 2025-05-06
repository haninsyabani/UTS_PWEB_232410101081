@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2 class="text-3xl font-bold text-neutral-50 ">Daftar Barang Inventaris</h2>
        <div class="bg-white shadow-lg p-4 mt-4 rounded-md">
            <table class="min-w-full table-auto border-collapse bg-white border border-black">
                <thead class="bg-black text-white">
                    <tr>
                        <th class="px-4 py-2 text-left border-b border-black">Nama Barang</th>
                        <th class="px-4 py-2 text-left border-b border-black">Kategori</th>
                        <th class="px-4 py-2 text-left border-b border-black">Kondisi</th>
                        <th class="px-4 py-2 text-left border-b border-black">Jumlah</th>
                        <th class="px-4 py-2 text-left border-b border-black">Lokasi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300">
                    @foreach ($barang as $item)
                        <tr>
                            <td class="px-4 py-2 border-b border-black">{{ $item['nama'] }}</td>
                            <td class="px-4 py-2 border-b border-black">{{ ucfirst($item['kategori']) }}</td>
                            <td class="px-4 py-2 border-b border-black">{{ ucfirst($item['kondisi']) }}</td>
                            <td class="px-4 py-2 border-b border-black">{{ $item['jumlah'] }}</td>
                            <td class="px-4 py-2 border-b border-black">{{ $item['lokasi'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
