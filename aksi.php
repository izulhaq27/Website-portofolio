<?php
$koneksi = new mysqli("localhost", "root", "", "db_izul");

if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama_kegiatan = $koneksi->real_escape_string($_POST['nama_kegiatan']);
  $waktu_kegiatan = $koneksi->real_escape_string($_POST['waktu_kegiatan']);

  $sql = "INSERT INTO db_izul (nama_kegiatan, waktu_kegiatan) VALUES ('$nama_kegiatan', '$waktu_kegiatan')";

  if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location.href='index.html';</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
  }
}

$koneksi->close();
?>
