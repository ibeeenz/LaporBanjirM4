<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Lapor Banjir</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>LaporBanjir</h1>
        
        <!-- Navigasi Dinamis Berdasarkan Status Login -->
        <nav style="margin-top: 10px;">
            <a href="{{ route('laporbanjir.create') }}" style="margin-right: 15px;">Form Pelaporan</a>

            @auth
                <!-- Menu untuk Petugas yang SUDAH login -->
                <a href="{{ route('laporbanjir.index') }}" style="margin-right: 15px;">Daftar Laporan</a>
                <a href="{{ route('profil') }}" style="margin-right: 15px;">Profil Petugas</a>
                
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" style="background: none; border: none; color: blue; cursor: pointer; text-decoration: underline; padding: 0;">Logout</button>
                </form>
            @else
                <!-- Menu untuk Pengunjung/Warga yang BELUM login -->
                <a href="{{ route('login') }}" style="margin-right: 15px;">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </nav>
    </header>

    <main style="margin-top: 20px;">
        @yield('content')
    </main>
</body>
</html>