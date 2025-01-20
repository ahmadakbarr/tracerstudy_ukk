<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Sekolah</title>
    <link rel="stylesheet" href="{{ asset('css/sekolah.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="title">Tambah Sekolah</h1>

        <form action="{{ route('sekolah.store') }}" method="POST" class="form">
            @csrf
            <div class="form-group">
                <label for="npsn">NPSN:</label>
                <input type="text" id="npsn" name="npsn" placeholder="Masukkan NPSN" required>
            </div>

            <div class="form-group">
                <label for="nss">NSS:</label>
                <input type="text" id="nss" name="nss" placeholder="Masukkan NSS" required>
            </div>

            <div class="form-group">
                <label for="nama_sekolah">Nama Sekolah:</label>
                <input type="text" id="nama_sekolah" name="nama_sekolah" placeholder="Masukkan Nama Sekolah" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" placeholder="Masukkan Alamat Sekolah" required></textarea>
            </div>

            <div class="form-group">
                <label for="no_telp">No. Telepon:</label>
                <input type="text" id="no_telp" name="no_telp" placeholder="Masukkan Nomor Telepon" required>
            </div>

            <div class="form-group">
                <label for="website">Website:</label>
                <input type="url" id="website" name="website" placeholder="Masukkan Website (opsional)">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukkan Email">
            </div>

            <button type="submit" class="btn-submit">Simpan</button>
        </form>
    </div>
</body>
</html>
