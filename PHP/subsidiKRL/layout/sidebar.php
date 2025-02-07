<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    .sidebar {
        height: 100vh;
        width: 220px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #dc3545;
        padding-top: 50px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .sidebar a {
        color: #56111b; /* Warna default menu tidak aktif */
        padding: 15px 0;
        text-decoration: none;
        font-weight: bold;
        position: relative;
        display: block;
        text-align: center;
        width: 100%;
        transition: all 0.5s ease;
    }

    /* Garis bawah permanen dengan lebar 60% */
    .sidebar a::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 60%; /* Menentukan lebar garis bawah menjadi 60% */
        height: 2px;
        background-color: #ba253a; /* Warna garis bawah */
        transform: translateX(-50%); /* Menyelaraskan garis ke tengah */
    }

    /* Warna menu aktif */
    .sidebar a.active {
        color: white; /* Menu yang sedang dipilih berwarna putih */
    }

    /* Hover efek */
    .sidebar a:hover {
        color: white; /* Saat hover, teks berubah menjadi putih */
        transform: translatey(-5%);
    }

    .content {
        margin-left: 220px;
        padding: 20px;
    }
        
    </style>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="index.php" class="fw-bold">Beranda</a>
        <a href="visualisasi.php" class="fw-bold">Visualisasi</a>
        <a href="hubungikami.php" class="fw-bold">Hubungi Kami</a>
    </div>

    <script>
        // Fungsi untuk menetapkan menu aktif berdasarkan URL
        function setActiveMenu() {
            const currentPath = window.location.pathname.split('/').pop(); // Mendapatkan nama file dari URL
            document.querySelectorAll('.sidebar a').forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active'); // Tambahkan class 'active' pada menu yang sesuai
                } else {
                    link.classList.remove('active'); // Hapus class 'active' dari menu lain
                }
            });
        }

        // Jalankan fungsi saat halaman dimuat
        window.onload = setActiveMenu;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>