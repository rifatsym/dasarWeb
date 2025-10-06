<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen Simpel</title>
    <style>
        /* CSS yang disederhanakan */
        table {
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Data Dosen</h2>

<?php
// Data array
$Dosen = [
    'nama'          => 'Elok Nur Hamdana',
    'domisili'      => 'Malang',
    'jenis_kelamin' => 'Perempuan'
];
?>

<table>
    <tr>
        <th>Nama</th>
        <td><?php echo $Dosen['nama']; ?></td>
    </tr>
    <tr>
        <th>Domisili</th>
        <td><?php echo $Dosen['domisili']; ?></td>
    </tr>
    <tr>
        <th>Jenis Kelamin</th>
        <td><?php echo $Dosen['jenis_kelamin']; ?></td>
    </tr>
</table>

</body>
</html>