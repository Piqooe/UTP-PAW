<?php
if (!isset($_SESSION["nama"])) {
    echo "<p>Belum ada pesanan.</p>";
} else {
    $nama = $_SESSION["nama"];
    $menu = $_SESSION["menu"];
    $jumlah = $_SESSION["jumlah"];
    $kategori = $_SESSION["kategori"];
    $harga = $_SESSION["harga"];
    $subtotal = $_SESSION["subtotal"];
    $diskon = $_SESSION["diskon"];
    $total = $_SESSION["total"];

    echo "<table>";
    echo "<tr><th>Nama Kru</th><td>$nama</td></tr>";
    echo "<tr><th>Ransum</th><td>$menu</td></tr>";
    echo "<tr><th>Jumlah Porsi</th><td>$jumlah</td></tr>";
    echo "<tr><th>Kategori</th><td>$kategori</td></tr>";
    echo "<tr><th>Harga Satuan</th><td>Rp" . number_format($harga, 0, ',', '.') . "</td></tr>";
    echo "<tr><th>Subtotal</th><td>Rp" . number_format($subtotal, 0, ',', '.') . "</td></tr>";
    echo "<tr><th>Diskon</th><td>Rp" . number_format($diskon, 0, ',', '.') . "</td></tr>";
    echo "<tr><th>Total Bayar</th><td>Rp" . number_format($total, 0, ',', '.') . "</td></tr>";
    echo "</table>";

    echo "<h3>Status Pengambilan Ransum</h3>";
    echo "<ol>";
    for ($i = 1; $i <= $jumlah; $i++) {
        echo "<li>Porsi ke-$i: $menu siap diambil</li>";
    }
    echo "</ol>";
}
