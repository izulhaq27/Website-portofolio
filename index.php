<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio Moh. Fahri IzulHaq</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <header>
    <nav>
      <div class="logo">Portofolio</div>
      <ul class="nav-links">
        <li><a href="#beranda">Beranda</a></li>
        <li><a href="#tentang-saya">Tentang Saya</a></li>
        <li><a href="#portofolio">Portofolio</a></li>
        <li><a href="#opini">Opini</a></li>
        <li><a href="#kontak">Kontak</a></li>
        <li class="dropdown">
          <a href="#lainnya">Lainnya <i class="fas fa-chevron-down"></i></a>
          <div class="dropdown-content">
            <a href="https://www.instagram.com/fhrri.iz" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="https://www.facebook.com/Izultew" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="https://www.tiktok.com/@notimefor.badthings" target="_blank"><i class="fab fa-tiktok"></i> TikTok</a>
          </div> 
        </li>
      </ul>
      <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </nav>
  </header>

  <main>
    <section id="beranda" class="hero">
  <div class="container">
    <div class="hero-content">
      <div class="hero-image">
        <img src="izulhaq.jpg" alt="Foto Moh. Fahri IzulHaq">
      </div>
      <div class="hero-text">
        <h1>Halo, Saya Moh. Fahri IzulHaq</h1>
        <p class="subtitle">Web Developer & Mahasiswa Teknik Informatika</p>
        <div class="social-icons">
          <a href="https://www.instagram.com/fhrri.iz" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://www.facebook.com/Izultew" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://www.tiktok.com/@notimefor.badthings" target="_blank"><i class="fab fa-tiktok"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

    <section class="tentang-saya" id="tentang-saya">
      <div class="container">
        <h2 class="section-title">Tentang Saya</h2>
        <div class="about-content">
          <div class="about-text">
            <p>Halo! Nama saya Moh. Fahri IzulHaq, umur saya 18 tahun. Saya tinggal di Desa Bulu, Kecamatan Balen, Kabupaten Bojonegoro.</p>
            <p>Saat ini, saya sedang menempuh studi S1 Teknik Informatika di Universitas Nahdlatul Ulama Sunan Giri Bojonegoro. Saya memiliki minat besar terhadap Web Development. Portofolio ini berisi contoh-contoh proyek, karya, dan pengalaman yang telah saya kumpulkan selama masa studi, yang diharapkan dapat memberikan gambaran tentang kemampuan dan potensi saya di bidang Teknologi Informasi.</p>
          </div>
          <div class="about-image">
            <img src="foto/fotottgsaya.jpg" alt="Foto Profil">
          </div>
        </div>
      </div>
    </section>
    <section id="portofolio" class="portofolio">
  <h1>Portofolio</h1>
  <br>

  <!-- Toggle Button ke halaman tambah -->
  <div style="margin-bottom: 20px;">
    <a href="tambah.php">
     <div style="display: flex; justify-content: flex-end;">
  <button type="button" style="margin: 10px;">➕ Tambah Portofolio</button>
     </div>
    </a>
  </div>

  <table>
<thead>
  <tr>
    <th class="nomor">No</th>
    <th>Nama Kegiatan</th>
    <th>Waktu Kegiatan</th>
    <th>Aksi</th>
  </tr>
</thead>

 <?php
$koneksi = new mysqli("localhost", "root", "", "db_izul");
if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}

$sql = "SELECT * FROM portofolio";
$result = $koneksi->query($sql);
$no = 1;

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td class='nomor'>" . $no++ . "</td>";
    echo "<td>" . htmlspecialchars($row['nama_kegiatan']) . "</td>";
    echo "<td>" . htmlspecialchars($row['waktu_kegiatan']) . "</td>";
    echo "<td>
            <a href='edit.php?id=" . $row['id'] . "'>Edit</a> | 
            <a href='hapus.php?id=" . $row['id'] . "' onclick=\"return confirm('Yakin ingin menghapus?')\">Hapus</a>
          </td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
}

$koneksi->close();
?>

  </table>
</section>



  <hr>
    <section class="opini" id="opini">
      <div class="container">
        <h2 class="section-title">Opini</h2>
        <div class="grid-opini">
          <div class="card-opini">
            <a href="https://kumparan.com/dede025/verifikasi-artefak-berbasis-artificial-intelligence-untuk-otentisitas-arkeologi-24oQCdqrsws" target="_blank">
              <img src="image.png" alt="Opini 1">
              <div class="card-content">
                <h3>Verifikasi Artefak berbasis AI untuk Otentisitas Arkeologi</h3>
                <p>Membahas penggunaan AI dalam verifikasi artefak arkeologi</p>
              </div>
            </a>
          </div>
          <div class="card-opini">
            <a href="https://www.liputan6.com/hot/read/5444984/var-dalam-sepak-bola-peran-dan-cara-kerjanya" target="_blank">
              <img src="Screenshot 2025-04-27 220418.png" alt="Opini 2">
              <div class="card-content">
                <h3>VAR dalam Sepak Bola</h3>
                <p>Peran dan cara kerja VAR dalam sepak bola modern</p>
              </div>
            </a>
          </div>
          <div class="card-opini">
            <a href="https://www.ketutrare.com/2025/04/5-bahasa-pemrograman-yang-diprediksi.html" target="_blank">
              <img src="Screenshot 2025-04-27 221008.png" alt="Opini 3">
              <div class="card-content">
                <h3>5 Bahasa Pemrograman Populer 2025</h3>
                <p>Prediksi bahasa pemrograman yang akan dominan di 2025</p>
              </div>
            </a>
          </div>
          <div class="card-opini">
            <a href="https://www.dicoding.com/blog/sejarah-bahasa-pemrograman/" target="_blank">
              <img src="Screenshot 2025-04-27 222231.png" alt="Opini 4">
              <div class="card-content">
                <h3>Sejarah Bahasa Pemrograman</h3>
                <p>Asal usul dan perkembangan bahasa pemrograman</p>
              </div>
            </a>
          </div>
          <div class="card-opini">
            <a href="https://iblu-academy.co.id/tips-memanfaatkan-ai-untuk-kemajuan-masa-depan-dengan-bijak/" target="_blank">
              <img src="Screenshot 2025-04-27 221438.png" alt="Opini 5">
              <div class="card-content">
                <h3>Tips Memanfaatkan AI dengan Bijak</h3>
                <p>Strategi penggunaan AI untuk kemajuan masa depan</p>
              </div>
            </a>
          </div>
          <div class="card-opini">
            <a href="https://pmb.unugiri.ac.id/" target="_blank">
              <img src="Screenshot 2025-04-27 222645.png" alt="Unugiri">
              <div class="card-content">
                <h3>Bergabunglah di Unugiri!</h3>
                <p>Informasi pendaftaran Universitas Nahdlatul Ulama Sunan Giri</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="kontak" id="kontak">
      <div class="container">
        <h2 class="section-title">Hubungi Saya</h2>
        <div class="kontak-container">
          <form action="#" method="post" class="form-kontak">
            <div class="form-group">
              <label for="nama">Nama:</label>
              <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="subjek">Subjek:</label>
              <input type="text" id="subjek" name="subjek" required>
            </div>
            <div class="form-group">
              <label for="pesan">Pesan:</label>
              <textarea id="pesan" name="pesan" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn">Kirim Pesan</button>
          </form>
          <div class="map-kontak">
            <h3>Lokasi Saya</h3>
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.4008162882454!2d111.97080401911566!3d-7.193620959328774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e778795e9b0a1e9%3A0x5ebd2f762ccacecc!2sNIRA%20BENGKEL%20LAS!5e0!3m2!1sid!2sid!4v1745767918695!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-info">
              <p><i class="fas fa-map-marker-alt"></i> Desa Bulu, Kec. Balen, Kab. Bojonegoro</p>
              <p><i class="fas fa-envelope"></i> email@example.com</p>
              <p><i class="fas fa-phone"></i> +62 812-3456-7890</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="container">
      <div class="footer-content">
        <div class="footer-logo">
          <h3>FahriIzul</h3>
          <p>Web Developer & Mahasiswa Teknik Informatika</p>
        </div>
        <div class="footer-links">
          <h4>Tautan Cepat</h4>
          <ul>
            <li><a href="index.html">Beranda</a></li>
            <li><a href="#tentang-saya">Tentang Saya</a></li>
            <li><a href="#portofolio">Portofolio</a></li>
            <li><a href="#opini">Opini</a></li>
            <li><a href="#kontak">Kontak</a></li>
          </ul>
        </div>
        <div class="footer-social">
          <h4>Sosial Media</h4>
          <div class="social-icons">
            <a href="https://www.instagram.com/fhrri.iz" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/Izultew" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.tiktok.com/@notimefor.badthings" target="_blank"><i class="fab fa-tiktok"></i></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2025 Moh. Fahri IzulHaq. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>