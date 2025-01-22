<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="{{ asset('css/kuliah.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
        
             height: 800px;
            display: flex;
            flex-direction: column;
            margin: 0;
        }
    </style>
</head>

<body>

<aside class="sidebar">
        <div class="sidebar-header">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
            <p class="username">Welcome, {{ Auth::user()->name }}</p>
        </div>
        <nav class="menu">
            <a href="{{ route('admin.dashboard') }}" class="menu-item">Dashboard</a>
            <a href="{{ route('admin.alumni.index') }}" class="menu-item">Alumni Data</a>
            <a href="{{ route('admin.TracerKuliah.index') }}" class="menu-item">Tracer Kuliah</a>
            <a href="{{ route('admin.TracerKerja.index') }}" class="menu-item">Tracer Kerja</a>
        </nav>
        <div class="sidebar-footer">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="logout-btn">Logout</button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <h2>Data Tracer Kuliah</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Alumni</th>
                    <th>Nama Kampus</th>
                    <th>Status</th>
                    <th>Jenjang</th>
                    <th>Jurusan</th>
                    <th>Linier</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tracerKuliah as $key => $kuliah)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $kuliah->alumni ? $kuliah->alumni->nama_depan . ' ' . $kuliah->alumni->nama_belakang : 'Tidak Ditemukan' }}</td>
                    <td>{{ $kuliah->tracer_kuliah_kampus }}</td>
                    <td>{{ $kuliah->tracer_kuliah_status }}</td>
                    <td>{{ $kuliah->tracer_kuliah_jenjang }}</td>
                    <td>{{ $kuliah->tracer_kuliah_jurusan }}</td>
                    <td>{{ $kuliah->tracer_kuliah_linier }}</td>
                    <td>{{ $kuliah->tracer_kuliah_alamat }}</td>
                    <td>
                        <form action="{{ route('TracerKuliah.destroy', $kuliah->id_tracer_kuliah) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    <footer class="footer">
        <p>Copyright © 2024-2027 Akbar. Hak Cipta. All rights reserved.</p>
        <div class="social-icons">
            <a href="#" class="social-icon-1">
                <img src="{{ asset('images/tk.png') }}" alt="Logo">
            </a>
            <a href="#" class="social-icon">
                <img src="{{ asset('images/ig.jfif') }}" alt="Logo">
            </a>
        </div>
    </footer>

</body>

</html>
