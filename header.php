<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Resmi Provinsi Kepulauan Riau</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body { font-family: 'Roboto', sans-serif; background: #f8f9fa; }

        .hero { 
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
                        url('https://mediaim.expedia.com/destination/1/e806264fba4dceec8a06a15cae521063.jpg') center/cover no-repeat; 
            height: 500px; 
            color: white; 
            display: flex; 
            align-items: center; 
            background-attachment: fixed; 
        }

        .section-title { 
            color: #007BFF; 
            border-bottom: 3px solid #28A745; 
            padding-bottom: 8px; 
            margin-bottom: 20px; 
        }

        .navbar-custom { background: #007BFF; }

        .pemimpin-card { background: white; border-radius: 15px; overflow: hidden; }

        footer { background: #343a40; color: white; }
        .icon { font-size: 1.5rem; color: #28A745; }

        .card-hover:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.2); }
        .card-hover-3d:hover { transform: rotateY(5deg) rotateX(3deg); }
        .flip-card:hover { transform: rotateY(180deg); transition: transform 0.6s; transform-style: preserve-3d; }

        .carousel-wisata {
            max-height: 550px;
            overflow: hidden;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }
        .carousel-wisata .carousel-item img {
            width: 100%;
            height: 550px;
            object-fit: cover;
            object-position: center;
        }
        .carousel-wisata .carousel-caption {
            background: rgba(0, 0, 0, 0.65);
            border-radius: 6px;
            padding: 10px 15px;
            font-size: 1rem;
            bottom: 15px;
        }

        .card-img-top {
            height: 220px;
            object-fit: cover;
        }

        .img-pemimpin {
            height: 420px !important;
            object-fit: contain !important;
            object-position: center;
            background: #ffffff;
            padding: 10px;
        }

        .card-hover {
            transition: 0.3s ease;
        }

        .motif-melayu {
            position: relative;
            overflow: hidden;
            background: #ffffff;
        }

        .motif-melayu::before,
        .motif-melayu::after {
            content: "";
            position: absolute;
            inset: 0;
            background-repeat: no-repeat;
            opacity: 0.12;
            z-index: 0;
            pointer-events: none;
        }

        .motif-melayu::before {
            background-image: url("aset/ornamenmelayu.png"), url("aset/ornamenmelayu.png");
            background-position: left -120px top -120px, right -140px bottom -140px;
            background-size: 520px 520px, 420px 420px;
        }

        .motif-melayu::after {
            background-image: url("aset/ornamenmalayu1.png"), url("aset/ornamenmalayu1.png");
            background-position: right -140px top -140px, left -140px bottom -140px;
            background-size: 460px 460px, 360px 360px;
        }

        .motif-melayu .container {
            position: relative;
            z-index: 1;
        }

        .card, .pemimpin-card {
            position: relative;
            z-index: 2;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom text-white shadow-sm">
    <div class="container">
        <a class="navbar-brand text-white d-flex align-items-center" href="index.php">
            <object data="aset/logokepri.svg" type="image/svg+xml" width="60" height="60"></object>
            <span class="ms-3 fw-bold fs-4">Provinsi Kepulauan Riau</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">Beranda</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
                        Pemerintahan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="pemimpin.php">Pemimpin</a></li>
                        <li><a class="dropdown-item" href="berita.php">Berita</a></li>
                        <li><a class="dropdown-item" href="pengumuman.php">Pengumuman</a></li>
                        <li><a class="dropdown-item" href="layanan.php">Layanan Publik</a></li>
                        <li><a class="dropdown-item" href="transparansi.php">Transparansi</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="wisata.php">Wisata</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="budaya.php">Budaya</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="flora_fauna.php">Flora Fauna</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="peta.php">Peta</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php if (basename($_SERVER['PHP_SELF']) == 'index.php'): ?>
<div class="hero">
    <div class="container text-center">
        <h1 class="display-3 fw-bold">Selamat Datang di Kepulauan Riau</h1>
        <p class="lead fs-2">Bersauh Marwah - Surga Kepulauan Indonesia</p>
    </div>
</div>
<?php endif; ?>

<div class="container my-5">
