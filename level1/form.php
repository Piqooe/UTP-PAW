<h2>Daftar Ransum</h2>
<table>
    <tr>
        <th>Ransum</th>
        <th>Harga</th>
    </tr>
    <tr>
        <td>Pizza Segitiga Polus</td>
        <td>Rp25.000</td>
    </tr>
    <tr>
        <td>Susu Elektrik Electrical</td>
        <td>Rp18.000</td>
    </tr>
    <tr>
        <td>Space Donut Oxygen</td>
        <td>Rp15.000</td>
    </tr>
    <tr>
        <td>Jus Berry MedBay</td>
        <td>Rp20.000</td>
    </tr>
    <tr>
        <td>Emergency Steak Navigation</td>
        <td>Rp45.000</td>
    </tr>
</table>

<h2>Form Pemesanan</h2>
<form action="proses.php" method="post">
    <p>
        Nama:
        <input type="text" name="nama" required>
    </p>
    <p>
        Ransum:
        <select name="menu" required>
            <option value="Pizza Segitiga Polus">Pizza Segitiga Polus</option>
            <option value="Susu Elektrik Electrical">Susu Elektrik Electrical</option>
            <option value="Space Donut Oxygen">Space Donut Oxygen</option>
            <option value="Jus Berry MedBay">Jus Berry MedBay</option>
            <option value="Emergency Steak Navigation">Emergency Steak Navigation</option>
        </select>
    </p>
    <p>
        Jumlah:
        <input type="number" name="jumlah" value="1" required>
    </p>
    <p>
        Kategori Pelanggan:
        <label><input type="radio" name="kategori" value="Crewmate" checked> Crewmate</label>
        <label><input type="radio" name="kategori" value="Impostor"> Impostor</label>
    </p>
    <p>
        <button type="submit">Pesan Sekarang</button>
    </p>
</form>