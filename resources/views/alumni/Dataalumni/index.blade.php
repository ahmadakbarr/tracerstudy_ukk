<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/dataalumni.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_alumni.css') }}">
    
</head>

<body>
    <nav class="sidebar">
        <div class="sidebar-header">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
            <span class="username">{{ Auth::user()->name }}</span>
        </div>

        <!-- Menu Container -->
        <div class="menu-container">
            <button onclick="window.location='{{ route('alumni.dashboard') }}';">Home</button>
            <button onclick="window.location='{{ route('alumni.Dataalumni.index') }}';">Data Alumni</button>
            <button onclick="window.location='{{ route('tracerstudy.create') }}';">Tracer Study</button>
            <button onclick="window.location='{{ route('alumni.tracerkuliah.create') }}';">Tracer Kuliah</button>
            <button onclick="window.location='{{ route('alumni.tracerkerja.create') }}';">Tracer Kerja</button>
            <button onclick="window.location='{{ route('testimoni.create') }}';">Testimoni</button>
        </div>

        <!-- Profile and Logout -->
        <div class="sidebar-footer">
            <button onclick="window.location='{{ route('alumni.profile.index') }}';">
                <img src="{{ asset('icons/profile.png') }}" alt="Profile" class="icon">
                Profile
            </button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="logout-btn">
                    <img src="{{ asset('icons/logout.png') }}" alt="Logout" class="icon">
                    Logout
                </button>
            </form>
        </div>
    </nav>
    <!-- Main Content Area -->
    <div class="main-content">
        <header>
            <h1>Daftar Alumni</h1>
            <div class="search-filters">
                <!-- Filters for alumni search can be added here -->
            </div>
            <div class="table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>NISN</th>
                            <th>NIK</th>
                            <th>Tahun Lulus</th>
                            <th>Status Alumni</th>
                            <th>Jenis Kelamin</th>
                            <th>Konsentrasi Keahlian</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($alumni as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->nama_depan }} {{ $item->nama_belakang }}</td>
                                <td>{{ $item->nisn }}</td>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->tahunlulus->tahun_lulus ?? '-' }}</td>
                                <td>{{ $item->statusAlumni->status ?? '-' }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->konsentrasiKeahlian->konsentrasi_keahlian ?? '-' }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Tidak ada data alumni</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </header>
    </div>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024-2027 Akbar. Hak Cipta. All rights reserved.</p>
        <div class="social-icons">
            <a href="#"><img src="{{ asset('images/tk.png') }}" alt="Telegram"></a>
            <a href="#"><img src="{{ asset('images/ig.jfif') }}" alt="Instagram"></a>
        </div>
    </footer>

    <script src="{{ asset('js/alumni.js') }}"></script>
</body>

</html>