<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Privasi Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/status.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
         body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            height: 800px;
            flex-direction: column;
            display: flex;
            background-color: #f4f7fa;
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
    <div class="container">
        <h1 class="title">Pengaturan Privasi Alumni</h1>

        <div class="actions">
            <a href="{{ route('status-alumni.create') }}" class="btn btn-primary">Tambah Status</a>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
    @foreach ($statuses as $status)
    <tr>
        <td>{{ $status->id_status_alumni }}</td>
        <td>{{ $status->status }}</td>
        <td>
            <!-- Tombol Edit -->
            <a href="{{ route('status-alumni.edit', $status->id_status_alumni) }}" class="btn btn-warning">Edit</a>
            
            <!-- Tombol Hapus -->
            <form action="{{ route('status-alumni.destroy', $status->id_status_alumni) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus status ini?')">Hapus</button>
            </form>
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
                    <img src="{{ asset('images/tk.png') }}" alt="Telegram">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('images/ig.jfif') }}" alt="Instagram">
                </a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>
