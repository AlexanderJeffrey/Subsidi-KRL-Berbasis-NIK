<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Beranda</title>
</head>
<style>
    .beranda {
            margin-top: 30px;
            padding: 40px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #343a40;
            margin-left: 240px;
            margin-bottom: 20px;
        }
        .content {
            font-size: 1.2rem;
            color: #495057;
            line-height: 1.8;
            margin-top: 20px;
        }
        .highlight {
            font-weight: bold;
            color: #007bff;
        }
        .container {
            max-width: 1200px;
        }
        ul {
            font-size: 1.1rem;
            color: #495057;
            line-height: 1.8;
        }
        li {
            margin-bottom: 10px;
        }
        .icon {
            font-size: 1.4rem;
            color: #007bff;
            margin-right: 10px;
        }
</style>
<body>

    <?php include "layout/sidebar.php" ?>

    <!-- Konten Utama -->
    <div class="beranda">
        <div><h1 class="title">Beranda</h1></div>
        <div class="content">
            <p>Penelitian ini akan difokuskan pada pendapat masyarakat terkait wacana kebijakan subsidi KRL berbasis NIK.</p>
            <ul>
                <li><span class="icon"></span> Sumber data yang digunakan diperoleh melalui media sosial X, dengan kata kunci <span class="highlight">‘subsidi’</span> dan <span class="highlight">‘krl’</span>.</li>
                <li><span class="icon"></span> Periode data yang digunakan mencakup rentang waktu mulai dari <span class="highlight">28 Agustus 2024</span> hingga <span class="highlight">30 September 2024</span>.</li>
                <li><span class="icon"></span> Sentimen pengguna transportasi umum KRL akan dikategorikan menjadi 3 kategori utama: <span class="highlight">positif</span>, <span class="highlight">netral</span>, dan <span class="highlight">negatif</span>.</li>
            </ul>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>