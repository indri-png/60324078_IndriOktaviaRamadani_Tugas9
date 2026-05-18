<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="/kategori">
            Perpustakaan Laravel
        </a>

        <div class="navbar-nav">
            <a class="nav-link" href="/kategori">Kategori</a>
            <a class="nav-link" href="/anggota">Anggota</a>
            <a class="nav-link" href="/perpustakaan">Perpustakaan</a>
        </div>

    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>