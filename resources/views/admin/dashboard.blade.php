<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
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
            <h1>Admin Dashboard</h1>
            <p>Manage your data effectively using the Tracer Study System.</p>
        </header>
        
        <!-- Data Management Section -->
        <section class="admin-actions">
            <h2>Data Management</h2>
            <div class="action-buttons">
                <a href="{{ route('sekolah.index') }}" class="action-btn">Manage Schools</a>
                <a href="{{ route('program.index') }}" class="action-btn">Manage Programs</a>
                <a href="{{ route('konsentrasi.index') }}" class="action-btn">Expertise Concentrations</a>
                <a href="{{ route('bidang.index') }}" class="action-btn">Fields of Expertise</a>
                <a href="{{ route('status-alumni.index') }}" class="action-btn">Alumni Status</a>
                <a href="{{ route('tahun-lulus.index') }}" class="action-btn">Graduation Year</a>
                <a href="{{ route('testimoni.index') }}" class="action-btn">Testimonials</a>
            </div>
        </section>

        <!-- Charts Section -->
        <!-- <section class="charts">
            <h2>Alumni Data Overview</h2>
            <div class="chart-container">
                <canvas id="tracerChart"></canvas>
            </div>

            <h2>Alumni Employment Data</h2>
            <div class="chart-container">
                <canvas id="tracerChart-kerja"></canvas>
            </div>
        </section> -->
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024-2027 Akbar. All Rights Reserved.</p>
        <div class="social-icons">
            <a href="#"><img src="{{ asset('images/tk.png') }}" alt="Telegram"></a>
            <a href="#"><img src="{{ asset('images/ig.jfif') }}" alt="Instagram"></a>
        </div>
    </footer>

    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>
