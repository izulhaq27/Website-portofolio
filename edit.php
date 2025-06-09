<?php
$koneksi = new mysqli("localhost", "root", "", "db_izul");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama_kegiatan"];
  $waktu = $_POST["waktu_kegiatan"];
  $koneksi->query("INSERT INTO portofolio (nama_kegiatan, waktu_kegiatan) VALUES ('$nama', '$waktu')");
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Portofolio</title>
    <style>
        /* General Styling */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Form Container */
        .form-container {
            max-width: 500px;
            width: 100%;
            margin: 40px auto;
            padding: 30px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .form-container:hover {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        /* Form Header */
        .form-title {
            text-align: center;
            color: #4361ee;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 600;
            position: relative;
            padding-bottom: 10px;
        }

        .form-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(to right, #4361ee, #4895ef);
            border-radius: 3px;
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #2c3e50;
            font-size: 15px;
        }

        .form-group input {
            width: 100%;
            padding: 14px 15px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
        }

        .form-group input:focus {
            border-color: #4895ef;
            outline: none;
            background-color: white;
            box-shadow: 0 0 0 3px rgba(72, 149, 239, 0.2);
        }

        /* Button Styling */
        .btn {
            display: inline-block;
            background: linear-gradient(to right, #4361ee, #3f37c9);
            color: white;
            padding: 14px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s ease;
            text-align: center;
            width: 100%;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 10px;
        }

        .btn:hover {
            background: linear-gradient(to right, #3f37c9, #4361ee);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.4);
        }

        .btn:active {
            transform: translateY(0);
        }

        /* Decorative Elements */
        .decoration {
            position: absolute;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: rgba(72, 149, 239, 0.1);
            z-index: 0;
        }

        .decoration-1 {
            top: -30px;
            right: -30px;
        }

        .decoration-2 {
            bottom: -40px;
            left: -40px;
            width: 150px;
            height: 150px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .form-container {
                padding: 25px;
                margin: 20px;
                border-radius: 12px;
            }
            
            .form-title {
                font-size: 24px;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="form-container">
        <div class="decoration decoration-1"></div>
        <div class="decoration decoration-2"></div>
        
        <h1 class="form-title">Tambah Portofolio</h1>
        
        <form method="post">
            <div class="form-group">
                <label for="nama_kegiatan">Nama Kegiatan</label>
                <input type="text" id="nama_kegiatan" name="nama_kegiatan" placeholder="Contoh: Projek Website Company Profile" required>
            </div>
            
            <div class="form-group">
                <label for="waktu_kegiatan">Waktu Kegiatan</label>
                <input type="date" id="waktu_kegiatan" name="waktu_kegiatan" required>
            </div>
            
            <button type="submit" class="btn">Simpan Kegiatan</button>
        </form>
    </div>
</body>
</html>