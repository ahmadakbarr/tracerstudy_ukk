<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/alumni.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_alumni.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="navbar-container">
            <div class="logo-section">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
                <span class="username">{{ Auth::user()->name }}</span>
            </div>
            <div class="menu-container">
                <button onclick="window.location='{{ route('alumni.dashboard') }}';">Home</button>
                <button onclick="window.location='{{ route('alumni.Dataalumni.index') }}';">Data Alumni</button>
                <button onclick="window.location='{{ route('tracerstudy.create') }}';">Tracer Study</button>
                <button onclick="window.location='{{ route('alumni.tracerkuliah.create') }}';">Tracer Kuliah</button>
                <button onclick="window.location='{{ route('alumni.tracerkerja.create') }}';">Tracer Kerja</button>
                <button onclick="window.location='{{ route('testimoni.create') }}';">Testimoni</button>
            </div>
            <div class="dropdown-container">
                <button class="burger-icon" id="burgerMenu">
                    <img src="{{ asset('icons/dropdown.png') }}" alt="Dropdown">
                </button>
                <ul class="dropdown-menu" id="dropdownMenu">
                    <form id="logout-form" action="{{ route('alumni.profile.index') }}" method="GET">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <img src="{{ asset('icons/profile.png') }}" alt="Profile">
                        </button>
                    </form>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <img src="{{ asset('icons/logout.png') }}" alt="Logout">
                        </button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Section -->
    <div class="main-container">
        <div class="welcome-section">
            <h2>Selamat Datang, Alumni</h2>
            <h3>Terima kasih telah bergabung di sistem Tracer Study.</h3>
            <h3><span>Mohon Lengkapi Data Diri Anda</span> untuk mendukung pengembangan Alumni di masa depan.</h3>
        </div>

        <!-- Profile Information Sect ion -->
        <section class="profile-section">
            <h3>Profil Anda</h3>
            <div class="profile-card">
                <img src="{{ asset('images/profil.png') }}" alt="Profile Picture" class="profile-img">
                <div class="profile-info">
                    <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
                    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                    <p><strong>Jurusan:</strong> {{ Auth::user()->email }}</p>
                    <p><strong>Tahun Lulus:</strong> [Tahun Lulus Alumni]</p>
                </div>
            </div>
        </section>

        <!-- Charts Section -->
        <section class="charts-section">
            <div class="chart-container">
                <h3>Diagram Data Alumni</h3>
                <div class="chart-box">
                    <canvas id="tracerChart"></canvas>
                    <div class="chart-legend">
                        <ul id="legendList"></ul>
                        <p>Jumlah Alumni: 600</p>
                    </div>
                </div>
            </div>

            <div class="chart-container">
                <h3>Diagram Data Pekerjaan Alumni</h3>
                <div class="chart-box">
                    <canvas id="tracerChart-kerja"></canvas>
                    <div class="chart-legend">
                        <ul id="legendList-kerja"></ul>
                        <p>Jumlah Alumni: 600</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-content">
            <p>Copyright © 2024-2027 Akbar. All rights reserved.</p>
            <div class="social-icons">
                <a href="#" class="social-icon">
                    <img src="{{ asset('images/tk.png') }}" alt="TK Logo">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('images/ig.jfif') }}" alt="Instagram Logo">
                </a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/alumni.js') }}"></script>
</body>
</html>
