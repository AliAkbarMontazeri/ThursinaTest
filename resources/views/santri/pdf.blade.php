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
    <p><strong>Nama:</strong> {{ $santri->nama }}</p>
    <p><strong>NIS:</strong> {{ $santri->nis }}</p>
    <p><strong>Kelas:</strong> {{ $santri->kelas }}</p>
    <p><strong>Asrama:</strong> {{ $santri->asrama }}</p>
    <p><strong>No HP:</strong> {{ $santri->no_hp }}</p>
</body>

</html>