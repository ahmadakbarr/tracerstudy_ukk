<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Privasi Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/konsentrasi.css') }}">
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
    <main class="main-content">
        <header>
            <h1>Daftar Konsentrasi Keahlian</h1>
            <p>Kelola konsentrasi keahlian yang tersedia di sistem.</p>
        </header>

        <!-- Konsentrasi Keahlian Section -->
        <section class="konsentrasi-keahlian">
            <div class="actions">
                <a href="{{ route('konsentrasi.create') }}" class="btn btn-add">Tambah Konsentrasi Keahlian</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Program Keahlian</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($konsentrasiKeahlian as $item)
                    <tr>
                        <td>{{ $item->id_konsentrasi_keahlian }}</td>
                        <td>{{ $item->id_program_keahlian }}</td>
                        <td>{{ $item->kode_konsentrasi_keahlian }}</td>
                        <td>{{ $item->konsentrasi_keahlian }}</td>
                        <td>
                            <a href="{{ route('konsentrasi.edit', $item->id_konsentrasi_keahlian) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('konsentrasi.destroy', $item->id_konsentrasi_keahlian) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>

   <!-- Footer -->
   <footer>
        <p>&copy; 2024-2027 Akbar. Hak Cipta. All rights reserved.</p>
        <div class="social-icons">
            <a href="#"><img src="{{ asset('images/tk.png') }}" alt="Telegram"></a>
            <a href="#"><img src="{{ asset('images/ig.jfif') }}" alt="Instagram"></a>
        </div>
    </footer>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>
