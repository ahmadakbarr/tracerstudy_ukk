<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sekolah</title>
    <link rel="stylesheet" href="{{ asset('css/sekolah.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <div class="profile">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="username">{{ Auth::user()->name }}</div>
        </div>
        <div class="menu">
            <button onclick="window.location='{{ route('admin.dashboard') }}';">Home</button>
            <button onclick="window.location='{{ route('admin.alumni.index') }}';">Data Alumni</button>
            <button onclick="window.location='{{ route('admin.TracerKuliah.index') }}';">Tracer Kuliah</button>
            <button onclick="window.location='{{ route('admin.TracerKerja.index') }}';">Tracer Kerja</button>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h1>Daftar Sekolah</h1>

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
                                <button class="btn-delete" onclick="confirmDelete(this)">Hapus</button>
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
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024-2027 Akbar. All rights reserved.</p>
        <div class="social-icons">
            <a href="#"><img src="{{ asset('images/tk.png') }}" alt="Logo"></a>
            <a href="#"><img src="{{ asset('images/ig.jfif') }}" alt="Instagram"></a>
        </div>
    </footer>

    <script>
        function confirmDelete(button) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Data yang dihapus tidak dapat dikembalikan!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    button.closest('form').submit();
                }
            });
        }
    </script>
</body>
</html>
