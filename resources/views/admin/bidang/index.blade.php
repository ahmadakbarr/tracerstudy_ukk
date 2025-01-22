<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Privasi Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bidang.css') }}">
    
</head>

<body>
    <!-- Sidebar -->
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
            <a href="{{ route('testimoni.index') }}" class="menu-item">Testimoni</a>
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
        <h1>Daftar Bidang Keahlian</h1>
        <div class="tmbh">
            <a href="{{ route('bidang.create') }}" class="btn btn-success">Tambah Bidang Keahlian</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Bidang</th>
                    <th>Nama Bidang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bidangKeahlian as $bidang)
                <tr>
                    <td>{{ $bidang->id_bidang_keahlian }}</td>
                    <td>{{ $bidang->kode_bidang_keahlian }}</td>
                    <td>{{ $bidang->bidang_keahlian }}</td>
                    <td>
                        <a href="{{ route('bidang.edit', $bidang->id_bidang_keahlian) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('bidang.destroy', $bidang->id_bidang_keahlian) }}" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024-2027 Akbar. Hak Cipta. All rights reserved.</p>
        <div class="social-icons">
            <a href="#"><img src="{{ asset('images/tk.png') }}" alt="Telegram"></a>
            <a href="#"><img src="{{ asset('images/ig.jfif') }}" alt="Instagram"></a>
        </div>
    </footer>

    <script>
        // Burger Menu for responsive layout
        const burgerMenu = document.getElementById('burgerMenu');
        const dropdownMenu = document.getElementById('dropdownMenu');

        burgerMenu.addEventListener('click', () => {
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });
    </script>
</body>

</html>
