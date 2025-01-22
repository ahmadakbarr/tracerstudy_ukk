<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tracer Kerja</title>
    <link rel="stylesheet" href="{{ asset('css/kerja.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
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
        <h2>Data Tracer Kerja</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Alumni</th>
                    <th>Nama Pekerjaan</th>
                    <th>Nama Perusahaan</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th>Lokasi</th>
                    <th>Alamat</th>
                    <th>Tanggal Mulai</th>
                    <th>Gaji</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tracerKerja as $key => $kerja)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $kerja->alumni ? $kerja->alumni->nama_depan . ' ' . $kerja->alumni->nama_belakang : 'Tidak Ditemukan' }}</td>
                    <td>{{ $kerja->tracer_kerja_pekerjaan }}</td>
                    <td>{{ $kerja->tracer_kerja_nama }}</td>
                    <td>{{ $kerja->tracer_kerja_jabatan }}</td>
                    <td>{{ $kerja->tracer_kerja_status }}</td>
                    <td>{{ $kerja->tracer_kerja_lokasi }}</td>
                    <td>{{ $kerja->tracer_kerja_alamat }}</td>
                    <td>{{ $kerja->tracer_kerja_tgl_mulai }}</td>
                    <td>{{ $kerja->tracer_kerja_gaji }}</td>
                    <td>
                        <form action="{{ route('TracerKerja.destroy', $kerja->id_tracer_kerja) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

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


    <script src="{{ asset('js/admin.js') }}"></script>

</body>

</html>
