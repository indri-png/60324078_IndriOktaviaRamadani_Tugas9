@extends('layouts.app')

@section('title', 'Kategori Buku')

@section('content')

<h2 class="mb-4">Daftar Kategori Buku</h2>

<div class="row">

    @foreach ($kategori_list as $kategori)

    <div class="col-md-4">
        <div class="card mb-4 shadow">

            <div class="card-body">
                <h4>{{ $kategori['nama'] }}</h4>

                <p>{{ $kategori['deskripsi'] }}</p>

                <span class="badge bg-primary">
                    {{ $kategori['jumlah_buku'] }} Buku
                </span>
            </div>

            <div class="card-footer">
                <a href="{{ route('kategori.show', $kategori['id']) }}"
                   class="btn btn-success w-100">
                    Detail
                </a>
            </div>

        </div>
    </div>

    @endforeach

</div>

@endsection