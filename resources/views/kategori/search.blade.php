@extends('layouts.app')

@section('title', 'Search Kategori')

@section('content')

<h3>Hasil pencarian: "{{ $keyword }}"</h3>

<table class="table table-bordered mt-3">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Deskripsi</th>
            <th>Jumlah Buku</th>
        </tr>
    </thead>

    <tbody>

        @forelse($hasil as $index => $k)

        <tr>
            <td>{{ $index + 1 }}</td>
            <td>
                <mark>{{ $k['nama'] }}</mark>
            </td>
            <td>{{ $k['deskripsi'] }}</td>
            <td>{{ $k['jumlah_buku'] }}</td>
        </tr>

        @empty

        <tr>
            <td colspan="4" class="text-center text-danger">
                Kategori tidak ditemukan
            </td>
        </tr>

        @endforelse

    </tbody>

</table>

<a href="{{ route('kategori.index') }}" class="btn btn-secondary">
    Kembali
</a>

@endsection