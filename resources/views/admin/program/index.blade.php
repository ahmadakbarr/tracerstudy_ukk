<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Privasi Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/program.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
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
            <h1>Pengaturan Privasi Alumni</h1>
            <p>Atur data privasi alumni dengan mudah.</p>
        </header>

        <!-- Privacy Settings Section -->
        <section class="privacy-settings">
            <div class="tmbh">
                <a href="{{ route('program.create') }}" class="action-btn">Tambah Program Keahlian</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode Program</th>
                        <th>Nama Program</th>
                        <th>Bidang Keahlian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($programKeahlian as $program)
                    <tr>
                        <td>{{ $program->id_program_keahlian }}</td>
                        <td>{{ $program->kode_program_keahlian }}</td>
                        <td>{{ $program->program_keahlian }}</td>
                        <td>{{ $program->bidangKeahlian->bidang_keahlian }}</td>
                        <td>
                            <a href="{{ route('program.edit', $program->id_program_keahlian) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('program.destroy', $program->id_program_keahlian) }}" method="POST" style="display: inline-block;">
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
</body>

</html>
