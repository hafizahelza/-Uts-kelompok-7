<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Harga Barang </title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto; 
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .table-title {
            text-align: center;
            font-size: 24px; 
            margin-bottom: 10px; 
        }
    </style>
</head>
<body>

<h2 class="table-title">Tabel Harga Barang</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Jumlah</th>
    </tr>

    <?php
    $produk = [
        ["Minyak Telon", 20, 31790],
        ["Diapers", 25, 51880],
        ["Baby Oil", 15, 28890],
        ["Shampo Baby", 20, 20670],
        ["Bedak", 25, 19860],
        ["Baju Bayi", 20, 35500],
        ["Jumper", 25, 25999]
    ];

    foreach ($produk as $index => $prodk) {
        $jumlah = $prodk[1] * $prodk[2]; 
        echo "<tr>
                <td>" . ($index + 1) . "</td>
                <td>{$prodk[0]}</td>
                <td>{$prodk[1]}</td>
                <td>Rp " . number_format($prodk[2], 0, ',', '.') . "</td>
                <td>Rp " . number_format($jumlah, 0, ',', '.') . "</td>
              </tr>";
    }
    ?>
</table>

</body>
</html>