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
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4895ef;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #4cc9f0;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .form-container {
            width: 100%;
            max-width: 500px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            animation: fadeIn 0.6s ease-out;
        }
        
        .form-header {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            padding: 25px;
            text-align: center;
        }
        
        .form-header h2 {
            font-weight: 600;
            font-size: 1.8rem;
            margin-bottom: 5px;
        }
        
        .form-body {
            padding: 30px;
        }
        
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
            font-size: 0.95rem;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
            background-color: #f8f9fa;
        }
        
        .form-control:focus {
            border-color: var(--accent);
            outline: none;
            background-color: white;
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }
        
        .btn-submit {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            border: none;
            padding: 14px;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 10px;
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.4);
        }
        
        .btn-submit:active {
            transform: translateY(0);
        }
        
        .decoration {
            position: absolute;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: rgba(72, 149, 239, 0.1);
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
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @media (max-width: 576px) {
            .form-container {
                border-radius: 10px;
            }
            
            .form-header {
                padding: 20px;
            }
            
            .form-body {
                padding: 20px;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <h2>Tambah Portofolio</h2>
            <p>Isi detail kegiatan Anda</p>
        </div>
        <div class="form-body">
            <form method="post">
                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Contoh: Projek Website E-commerce" required>
                </div>
                <div class="form-group">
                    <label for="waktu_kegiatan">Waktu Kegiatan</label>
                    <input type="date" class="form-control" id="waktu_kegiatan" name="waktu_kegiatan" required>
                </div>
                <button type="submit" class="btn-submit">Simpan Portofolio</button>
            </form>
        </div>
        <div class="decoration decoration-1"></div>
        <div class="decoration decoration-2"></div>
    </div>
</body>
</html>