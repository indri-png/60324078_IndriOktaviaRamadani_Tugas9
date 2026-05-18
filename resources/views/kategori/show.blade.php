@extends('layouts.app')

@section('title', 'Detail Kategori')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
           <a href="{{ route('kategori.index') }}">Kategori</a>
        </li>
        <li class="breadcrumb-item active">
            {{ $kategori['nama'] }}
        </li>
    </ol>
</nav>

<h2>{{ $kategori['nama'] }}</h2>

<p>{{ $kategori['deskripsi'] }}</p>

<h4 class="mt-4">Daftar Buku</h4>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($buku_list as $buku)

        <tr>
            <td>{{ $buku['judul'] }}</td>
            <td>{{ $buku['pengarang'] }}</td>
            <td>{{ $buku['tahun'] }}</td>
        </tr>

        @endforeach

    </tbody>

</table>

@endsection