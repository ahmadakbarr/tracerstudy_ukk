<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Privasi Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/bidang.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {

            height: 800px;
            display: flex;
            flex-direction: column;
             margin: 0;
        }

        :root {
            --text-color: #000000;
            --bg-input-color: #4782B2;
            --bg-input-2-color: #70BFFF;
            --bg-1-color: #1A2189;
            --bg-2-color: #FFFFFF;
        }

        body {
            height: 800px;
            display: flex;
            flex-direction: column;
            margin: 0;
        }

        h1 {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            color: var(--bg-1-color);
            margin-top: 20px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .form button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: var(--bg-2-color);
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>



    <div class="form">
        <h1>Edit Bidang Keahlian</h1>
        <form action="{{ route('bidang.update', $bidangKeahlian->id_bidang_keahlian) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="kode_bidang_keahlian">Kode Bidang Keahlian</label>
                <input type="text" id="kode_bidang_keahlian" name="kode_bidang_keahlian"
                    value="{{ $bidangKeahlian->kode_bidang_keahlian }}" required>
            </div>
            <div>
                <label for="bidang_keahlian">Nama Bidang Keahlian</label>
                <input type="text" id="bidang_keahlian" name="bidang_keahlian"
                    value="{{ $bidangKeahlian->bidang_keahlian }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="{{ asset('js/admin.js') }}"></script>

</body>

</html>
