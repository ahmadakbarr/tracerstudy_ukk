<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Privasi Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/konsentrasi.css') }}">
</head>

<body>
    <nav class="navbar">
        <div class="profile">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="username">
                {{ Auth::user()->name }}
            </div>
        </div>
        <div class="menu">
            <button onclick="window.location='{{ route('admin.dashboard') }}';">Home</button>
            <button onclick="window.location='{{ route('admin.alumni.index') }}';">Data Alumni</button>
            <button onclick="window.location='{{ route('admin.TracerKuliah.index') }}';">Tracer Kuliah</button>
            <button onclick="window.location='{{ route('admin.TracerKerja.index') }}';">Tracer Kerja</button>
        </div>
        <div class="menu-dropdown">
            <button class="burger-icon" id="burgerMenu">
                <img src="{{ asset('icons/dropdown.png') }}" alt="Menu">
            </button>
            <ul class="dropdown" id="dropdownMenu">
                <li>
                    <button onclick="window.location='{{ route('login') }}';">
                        <img src="{{ asset('icons/login.png') }}" alt="Login">
                    </button>
                </li>
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit">
                            <img src="{{ asset('icons/logout.png') }}" alt="Logout">
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1 class="title">Daftar Bidang Keahlian</h1>
        <div class="actions">
            <a href="{{ route('bidang.create') }}" class="btn btn-add">Tambah Bidang Keahlian</a>
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
                        <form action="{{ route('bidang.destroy', $bidang->id_bidang_keahlian) }}" method="POST" style="display: inline-block;">
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

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024-2027 Akbar. All rights reserved.</p>
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

    <script>
        const burgerMenu = document.getElementById('burgerMenu');
        const dropdownMenu = document.getElementById('dropdownMenu');

        burgerMenu.addEventListener('click', () => {
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });
    </script>
</body>

</html>
