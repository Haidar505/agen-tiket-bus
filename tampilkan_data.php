<?php
include 'koneksi.php';

// Menampilkan data dari tabel pelanggan
$sql_pelanggan = "SELECT * FROM pelanggan";
$result_pelanggan = $conn->query($sql_pelanggan);

if ($result_pelanggan->num_rows > 0) {
    echo "<h2>Data Pelanggan</h2>";
    echo "<table border='1'><tr><th>Id Pelanggan</th><th>Nama</th><th>Alamat</th><th>Tanggal Lahir</th><th>Nomor Telepon</th><th>Status Keanggotaan</th><th>Tanggal Bergabung</th></tr>";
    while($row = $result_pelanggan->fetch_assoc()) {
        echo "<tr><td>".$row["Id_pelanggan"]."</td><td>".$row["nama"]."</td><td>".$row["alamat"]."</td><td>".$row["tanggal_lahir"]."</td><td>".$row["nomor_telepon"]."</td><td>".$row["status_keanggotaan"]."</td><td>".$row["tanggal_bergabung"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Menampilkan data dari tabel bis
$sql_bis = "SELECT * FROM bis";
$result_bis = $conn->query($sql_bis);

if ($result_bis->num_rows > 0) {
    echo "<h2>Data Bis</h2>";
    echo "<table border='1'><tr><th>Id Bis</th><th>Nomor Plat</th><th>Kapasitas</th><th>Merk</th></tr>";
    while($row = $result_bis->fetch_assoc()) {
        echo "<tr><td>".$row["id_bis"]."</td><td>".$row["nomor_plat"]."</td><td>".$row["kapasitas"]."</td><td>".$row["merk"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Menampilkan data dari tabel jadwal
$sql_jadwal = "SELECT * FROM jadwal";
$result_jadwal = $conn->query($sql_jadwal);

if ($result_jadwal->num_rows > 0) {
    echo "<h2>Data Jadwal</h2>";
    echo "<table border='1'><tr><th>Id Jadwal</th><th>Id Bis</th><th>Tujuan</th><th>Tanggal Berangkat</th><th>Waktu Berangkat</th></tr>";
    while($row = $result_jadwal->fetch_assoc()) {
        echo "<tr><td>".$row["id_jadwal"]."</td><td>".$row["id_bis"]."</td><td>".$row["tujuan"]."</td><td>".$row["tanggal_berangkat"]."</td><td>".$row["waktu_berangkat"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Menampilkan data dari tabel pemesanan
$sql_pemesanan = "SELECT * FROM pemesanan";
$result_pemesanan = $conn->query($sql_pemesanan);

if ($result_pemesanan->num_rows > 0) {
    echo "<h2>Data Pemesanan</h2>";
    echo "<table border='1'><tr><th>Id Pemesanan</th><th>Id Pelanggan</th><th>Id Jadwal</th><th>Tanggal Pemesanan</th><th>Jumlah Tiket</th></tr>";
    while($row = $result_pemesanan->fetch_assoc()) {
        echo "<tr><td>".$row["id_pemesanan"]."</td><td>".$row["id_pelanggan"]."</td><td>".$row["id_jadwal"]."</td><td>".$row["tanggal_pemesanan"]."</td><td>".$row["jumlah_tiket"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Menampilkan data dari tabel detail_pemesanan
$sql_detail_pemesanan = "SELECT * FROM detail_pemesanan";
$result_detail_pemesanan = $conn->query($sql_detail_pemesanan);

if ($result_detail_pemesanan->num_rows > 0) {
    echo "<h2>Data Detail Pemesanan</h2>";
    echo "<table border='1'><tr><th>Id Pemesanan</th><th>Id Bis</th><th>Nomor Kursi</th></tr>";
    while($row = $result_detail_pemesanan->fetch_assoc()) {
        echo "<tr><td>".$row["id_pemesanan"]."</td><td>".$row["id_bis"]."</td><td>".$row["nomor_kursi"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
