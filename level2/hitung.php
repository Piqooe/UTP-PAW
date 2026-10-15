<?php
$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];

$daftarHarga = [
    "Pizza Segitiga Polus" => 25000,
    "Susu Elektrik Electrical" => 18000,
    "Space Donut Oxygen" => 15000,
    "Jus Berry MedBay" => 20000,
    "Emergency Steak Navigation" => 45000,
];

$valid = true;
$pesan = "";

if ($jumlah < 1) {
    $valid = false;
    $pesan = "Pesanan ditolak! Jumlah porsi minimal 1.";
}

$harga = isset($daftarHarga[$menu]) ? $daftarHarga[$menu] : 0;
$subtotal = $harga * $jumlah;

$diskon = 0;
if ($kategori === "Crewmate" && $jumlah >= 3) {
    $diskon = $subtotal * 0.15;
}

$total = $subtotal - $diskon;