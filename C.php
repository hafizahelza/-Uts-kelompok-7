<?php
$barang = array(
    array(1, "Minyak Telon", 20, 31790),
    array(2, "Diapers", 25, 51880),
    array(3, "Baby Oil", 15, 20760),
    array(4, "Shampo Baby", 20, 20670),
    array(5, "Bedak", 15, 19680),
    array(6, "Baju Bayi", 20, 35500),
    array(7, "Jumper", 25, 25999)
);

// Display the table in HTML format
echo "<table border='1' cellspacing='0' cellpadding='5' style='width: 100%; text-align: center; font-family: Arial, sans-serif;'>";
echo "<tr><th colspan='5' style='background-color: #f2f2f2;'>Tabel Harga Barang Bayi</th></tr>";
echo "<tr style='background-color: #e0e0e0;'><th>NO</th><th>PRODUK</th><th>STOK</th><th>HARGA</th><th>JUMLAH</th></tr>";

foreach ($barang as $item) {
    $jumlah = $item[2] * $item[3];
    echo "<tr>";
    echo "<td>" . $item[0] . "</td>";
    echo "<td>" . $item[1] . "</td>";
    echo "<td>" . $item[2] . "</td>";
    echo "<td>" . number_format($item[3], 0, ',', '.') . "</td>";
    echo "<td>" . number_format($jumlah, 0, ',', '.') . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
