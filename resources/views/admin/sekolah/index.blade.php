<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sekolah</title>
    <link rel="stylesheet" href="{{ asset('css/sekolah.css') }}">
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
        <header>
            <h1>Daftar Sekolah</h1>
            <p>Kelola data sekolah dengan mudah.</p>
        </header>

        <div>
            <a href="{{ route('sekolah.create') }}" class="btn-add">Tambah Sekolah</a>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NPSN</th>
                        <th>NSS</th>
                        <th>Nama Sekolah</th>
                        <th>Alamat</th>
                        <th>No. Telepon</th>
                        <th>Website</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($sekolah as $sekolahs)
                    <tr>
                        <td>{{ $sekolahs->id_sekolah }}</td>
                        <td>{{ $sekolahs->npsn }}</td>
                        <td>{{ $sekolahs->nss }}</td>
                        <td>{{ $sekolahs->nama_sekolah }}</td>
                        <td>{{ $sekolahs->alamat }}</td>
                        <td>{{ $sekolahs->no_telp }}</td>
                        <td>{{ $sekolahs->website }}</td>
                        <td>{{ $sekolahs->email }}</td>
                        <td>
                            <a href="{{ route('sekolah.edit', $sekolahs->id_sekolah) }}" class="btn-edit">Edit</a>
                            <!-- Form untuk menghapus data -->
                            <form action="{{ route('sekolah.destroy', $sekolahs->id_sekolah) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9">Tidak ada data sekolah.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024-2027 Akbar. All Rights Reserved.</p>
        <div class="social-icons">
            <a href="#"><img src="{{ asset('images/tk.png') }}" alt="Telegram"></a>
            <a href="#"><img src="{{ asset('images/ig.jfif') }}" alt="Instagram"></a>
        </div>
    </footer>

</body>

</html>
