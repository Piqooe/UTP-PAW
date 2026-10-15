<?php
if (isset($_COOKIE["pelanggan"])) {
    echo "<p>Selamat datang kembali di Cafeteria, " . $_COOKIE["pelanggan"] . "! Tetap waspada terhadap Impostor!</p>";
} else {
    echo "<p>Selamat datang di Kantin Pesawat The Skeld!</p>";
}