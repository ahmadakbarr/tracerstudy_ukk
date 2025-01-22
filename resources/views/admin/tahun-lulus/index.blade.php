<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Privasi Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/tahun.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            flex-direction: column;
            display: flex;
            min-height: 100vh;
            /* Minimum tinggi layar */
            margin: 0;
            /* Hilangkan margin bawaan */
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
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
    <div class="container">
        <h1>Pengaturan Privasi Alumni</h1>

        <div class="tmbh">
            <a href="{{ route('tahun-lulus.create') }}" class="btn btn-primary">Tambah Tahun Lulus</a>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tahun Lulus</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tahunLulus as $tahun)
                        <tr>
                            <td>{{ $tahun->id_tahun_lulus }}</td>
                            <td>{{ $tahun->tahun_lulus }}</td>
                            <td>{{ $tahun->keterangan }}</td>
                            <td>
                                <a href="{{ route('tahun-lulus.edit', $tahun->id_tahun_lulus) }}"
                                    class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <p>Copyright © 2024-2027 Akbar. Hak Cipta. All rights reserved.</p>
            <div class="social-icons">
                <a href="#" class="social-icon">
                    <img src="{{ asset('images/tk.png') }}" alt="Logo">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('images/ig.jfif') }}" alt="Logo">
                </a>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>