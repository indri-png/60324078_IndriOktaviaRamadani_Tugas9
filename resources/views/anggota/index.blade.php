<!DOCTYPE html>
<html>
<head>
    <title>Daftar Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Daftar Anggota Perpustakaan</h2>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Anggota</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anggota_list as $index => $a)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $a['kode'] }}</td>
                <td>{{ $a['nama'] }}</td>
                <td>{{ $a['email'] }}</td>
                <td>
                    @if($a['status'] == 'Aktif')
                        <span class="badge bg-success">Aktif</span>
                    @else
                        <span class="badge bg-secondary">Nonaktif</span>
                    @endif
                </td>
                <td>
                    <a href="/anggota/{{ $a['id'] }}" class="btn btn-primary btn-sm">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>