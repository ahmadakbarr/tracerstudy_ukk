<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="navbar-container">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="login-button">
                <button onclick="window.location='{{ route('login') }}';">Login</button>
            </div>
        </div>

        <!-- Menu Items -->
        <div class="menu">
            <button onclick="window.location='{{ route('login') }}';">Data Alumni</button>
            <button onclick="window.location='{{ route('login') }}';">Tracer Kuliah</button>
            <button onclick="window.location='{{ route('login') }}';">Tracer Kerja</button>
        </div>

        <!-- Dropdown Menu -->
        <div class="menu-dropdown">
            <button class="burger-icon" id="burgerMenu">
                <img src="{{ asset('icons/dropdown.png') }}" alt="Dropdown">
            </button>
            <ul class="dropdown-menu" id="dropdownMenu">
                <li><button onclick="window.location='{{ route('login') }}';">Data Alumni</button></li>
                <li><button onclick="window.location='{{ route('login') }}';">Tracer Kuliah</button></li>
                <li><button onclick="window.location='{{ route('login') }}';">Tracer Kerja</button></li>
            </ul>
        </div>
    </nav>

    <!-- Top Content Section -->
    <div class="top-content">
        <div class="info">
            <h2>Selamat Datang, Alumni</h2>
            <h3>Terima kasih telah bergabung di sistem Tracer Study</h3>
            <h3><span>Mohon Lengkapi Data Diri Anda</span> untuk mendukung pengembangan Alumni di masa depan</h3>
        </div>

        <!-- Profile Section -->
        <div class="info-profil">
            <div class="tabel-profil">
                <div class="profil-image">
                    <img src="{{ asset('images/profil.png') }}" alt="Profil">
                </div>
                <div class="profil-details">
                    <p><strong>Nama:</strong> </p>
                    <p><strong>Email:</strong> </p>
                    <p><strong>Jurusan:</strong> </p>
                    <p><strong>Tahun Lulus:</strong> </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Alumni Data Charts -->
    <div class="chart-info">
        <h3>Diagram Data Alumni</h3>
    </div>
    <div class="chart-section">
        <div class="chart-container">
            <canvas id="tracerChart"></canvas>
        </div>
        <div class="chart-legend">
            <ul id="legendList"></ul>
            <p>Jumlah Alumni: 600</p>
        </div>
    </div>

    <div class="chart-info">
        <h3>Diagram Data Pekerjaan Alumni</h3>
    </div>
    <div class="chart-section">
        <div class="chart-container">
            <canvas id="tracerChart-kerja"></canvas>
        </div>
        <div class="chart-legend">
            <ul id="legendList-kerja"></ul>
            <p>Jumlah Alumni: 600</p>
        </div>
    </div>

    <script src="{{ asset('js/welcome.js') }}"></script>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <p>Copyright © 2024-2027 Akbar. Hak Cipta. All rights reserved.</p>
            <div class="social-icons">
                <a href="#" class="social-icon">
                    <img src="{{ asset('images/tk.png') }}" alt="Logo">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('images/ig.jfif') }}" alt="Instagram">
                </a>
            </div>
        </div>
    </footer>
</body>

</html>
