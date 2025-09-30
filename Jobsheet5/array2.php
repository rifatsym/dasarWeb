<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
            body {
                font-family: sans-serif;
            }
            .tabel-bersih {
                width: 450px;
                border-collapse: collapse;
                margin-top: 20px;
            }
            .tabel-bersih th,
            .tabel-bersih td {
                border: 1px solid #ccc;
                padding: 10px;
                text-align: left;
            }
            .tabel-bersih th {
                background-color: #f2f2f2;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];?>

        <table class="tabel-bersih">
        <thead>
            <tr>
                <th>Keterangan</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Nama</strong></td>
                <td><?php echo $Dosen['nama']; ?></td>
            </tr>
            <tr>
                <td><strong>Domisili</strong></td>
                <td><?php echo $Dosen['domisili']; ?></td>
            </tr>
            <tr>
                <td><strong>Jenis Kelamin</strong></td>
                <td><?php echo $Dosen['jenis_kelamin']; ?></td>
            </tr>
        </tbody>
    </table>
    </body>
</html>