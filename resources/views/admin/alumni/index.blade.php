<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="{{ asset('css/adminalumni.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
            <p class="username">Welcome, {{ Auth::user()->name }}</p>
        </div>
        <nav class="menu">
            <a href="{{ route('admin.dashboard') }}" class="menu-item">Dashboard</a>
            <a href="{{ route('admin.alumni.index') }}" class="menu-item">Data Alumni</a>
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
        <header>
            <h2>Data Alumni</h2>
        </header>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NISN</th>
                    <th>NIK</th>
                    <th>Nama Depan</th>
                    <th>Nama Belakang</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumni as $key =>  $alum)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $alum->nisn }}</td>
                    <td>{{ $alum->nik }}</td>
                    <td>{{ $alum->nama_depan }}</td>
                    <td>{{ $alum->nama_belakang }}</td>
                    <td>{{ $alum->jenis_kelamin }}</td>
                    <td>{{ $alum->tempat_lahir }}</td>
                    <td>{{ $alum->tgl_lahir }}</td>
                    <td>{{ $alum->alamat }}</td>
                    <td>{{ $alum->no_hp }}</td>
                    <td>{{ $alum->email }}</td>
                    <td>
                        <a href="{{ route('alumni.show', $alum->id_alumni) }}" class="btn btn-primary">Detail</a>
                        <form action="{{ route('alumni.destroy', $alum->id_alumni) }}" method="POST" style="display:inline-block;">
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

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <p>Copyright © 2024-2027 Akbar. Hak Cipta. All rights reserved.</p>
            <div class="social-icons">
                <a href="#" class="social-icon-1">
                    <img src="{{ asset('images/tk.png') }}" alt="Logo">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('images/ig.jfif') }}" alt="Logo">
                </a>
            </div>
        </div>
    </footer>

    <script>
        const burgerMenu = document.getElementById('burgerMenu');
        const dropdownMenu = document.getElementById('dropdownMenu');

        burgerMenu.addEventListener('click', () => {
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });
    </script>
</body>

</html>
