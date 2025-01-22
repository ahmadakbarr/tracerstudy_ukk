<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Testimoni</title>
    <link rel="stylesheet" href="{{ asset('css/tahun.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

        /* Navigation Bar */
        nav {
            background-color: #4e73df;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .profile {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .Username {
            color: white;
            font-size: 18px;
            font-weight: bold;
        }

        .menu {
            display: flex;
            gap: 20px;
        }

        .menu button {
            background-color: #f8f9fa;
            color: #4e73df;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .menu button:hover {
            background-color: #2e59d9;
            color: white;
        }

        /* Main Container */
        .container {
            padding: 40px;
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f8f9fa;
            color: #4e73df;
            font-size: 16px;
        }

        td {
            background-color: #fafafa;
        }

        td a, td button {
            color: #007bff;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 4px;
            border: 1px solid #007bff;
            cursor: pointer;
            margin-right: 5px;
            transition: background-color 0.3s ease;
        }

        td a:hover, td button:hover {
            background-color: #007bff;
            color: white;
        }

        td button {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        td button:hover {
            background-color: #c82333;
        }

        /* Footer Styles */
        footer {
            background-color:#2c3e50;
            color: white;
            padding: 20px;
            margin-top: 30px;
            margin-top: auto;
            text-align: center;
        }

        .social-icons a {
            margin: 0 10px;
            display: inline-block;
        }

        .social-icons img {
            width: 24px;
            height: 24px;
            transition: transform 0.3s ease;
        }

        .social-icons img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
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
    <div class="container">
        <h2>Data Testimoni</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Alumni</th>
                    <th>Testimoni</th>
                    <th>Tanggal Testimoni</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testimonis as $testimoni)
                <tr>
                    <td>{{ $testimoni->id_testimoni }}</td>
                    <td>{{ $testimoni->alumni->nama_depan }} {{ $testimoni->alumni->nama_belakang }}</td>
                    <td>{{ $testimoni->testimoni }}</td>
                    <td>{{ $testimoni->tgl_testimoni }}</td>
                    <td>
                        <form action="{{ route('testimoni.destroy', $testimoni->id_testimoni) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>Copyright © 2024-2027 Akbar. Hak Cipta. All rights reserved.</p>
            <div class="social-icons">
                <a href="#" class="social-icon">
                    <img src="{{ asset('images/tk.png') }}" alt="Logo">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('images/ig.jfif') }}" alt="Logo">
                </a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
