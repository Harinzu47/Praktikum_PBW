<!-- Halaman Home -->
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            font-family: 'Arial', sans-serif;
        }
        h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .btn-primary {
            font-size: 1.2rem;
            padding: 10px 20px;
            border-radius: 25px;
            background-color: #ffffff;
            color: #2575fc;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #2575fc;
            color: #ffffff;
        }
        .text-center {
            margin-top: 10%;
        }
        .features {
            margin-top: 50px;
        }
        .features h2 {
            font-size: 2rem;
            margin-bottom: 30px;
        }
        .features .feature-item {
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 15px;
            background-color: rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="text-center">
            <h1>Selamat Datang di<br>Sistem Informasi Mahasiswa</h1>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Lihat Data Mahasiswa</a>
        </div>

        <div class="features text-center">
            <h2>Fitur Utama</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-item">
                        <h3>Manajemen Data</h3>
                        <p>Kelola data mahasiswa dengan mudah, termasuk menambah, mengedit, dan menghapus data.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <h3>Antarmuka Modern</h3>
                        <p>Desain antarmuka yang responsif dan menarik untuk pengalaman pengguna yang lebih baik.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <h3>Keamanan Data</h3>
                        <p>Sistem dilengkapi dengan fitur keamanan untuk menjaga kerahasiaan data mahasiswa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
