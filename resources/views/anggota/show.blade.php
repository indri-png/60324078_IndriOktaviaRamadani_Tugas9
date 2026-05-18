<!DOCTYPE html>
<html>
<head>
    <title>Detail Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <a href="/anggota" class="btn btn-secondary mb-3">← Kembali</a>

    <div class="card">
        <div class="card-header bg-primary text-white">
            Detail Anggota
        </div>

        <div class="card-body">
            <p><b>Kode:</b> {{ $anggota['kode'] }}</p>
            <p><b>Nama:</b> {{ $anggota['nama'] }}</p>
            <p><b>Email:</b> {{ $anggota['email'] }}</p>
            <p><b>Telepon:</b> {{ $anggota['telepon'] }}</p>
            <p><b>Alamat:</b> {{ $anggota['alamat'] }}</p>
            <p><b>Status:</b>
                @if($anggota['status'] == 'Aktif')
                    <span class="badge bg-success">Aktif</span>
                @else
                    <span class="badge bg-secondary">Nonaktif</span>
                @endif
            </p>
        </div>

    </div>
</div>

</body>
</html>