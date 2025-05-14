<!DOCTYPE html>
<html>

<head>
    <title>Detail Santri</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <h2>Detail Santri</h2>
    <p><strong>NIS:</strong> {{ $santri->nis }}</p>
    <p><strong>Nama:</strong> {{ $santri->nama_santri }}</p>
    <p><strong>Alamat:</strong> {{ $santri->alamat }}</p>
    <p><strong>Asrama Id:</strong> {{ $santri->asrama_id }}</p>
    <p><strong>Total Paket:</strong> {{ $santri->total_paket_diterima }}</p>
</body>

</html>