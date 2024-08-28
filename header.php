<?php
    $pageTitle = "UHAJJGIFTS - Jual Beli Peralatan Komputer";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo $pageTitle; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        <link rel="stylesheet" href="./css/main.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.min.css" integrity="sha512-pI8MMQ9fC050RkbUOr8cJ75T5bYJpT1PAiML/7QZM6Fr74Ef6csO2/Cl92q+Qpxidm7WonXr6f+DbyxNHPGH8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container">
                <a class="navbar-brand" href="./index.php">
                    <img src="./img/ep.png" alt="Logo Uhajj" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Kategori </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="storage.php">Camilan/Snack</a></li>
                                <li><a class="dropdown-item" href="display.php">Kerajinan/Craft</a></li>
                                <li><a class="dropdown-item" href="keyboard.php">Busana/Fashion</a></li>
                                <li><a class="dropdown-item" href="audio.php">Aksesoris/Accessoris</a></li>
                                <li><a class="dropdown-item" href="audio.php">Other</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Semua Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontak.php">Kontak</a>
                        </li>
                    </ul>
                    <div class="navbar-nav">
                        <form class="d-flex search-group" role="search">
                            <input type="search" placeholder="Cari produk disini..." aria-label="Search" />
                            <button class="btn btn-orange" type="submit">
                                <i class="ri-search-line"></i>
                            </button>
                        </form>
                        <div class="navbar-button">
                            <a href="payment.php" class="btn btn-orange"><i class="ri-shopping-cart-line"></i></a>
                            <a href="#" class="btn btn-secondary"><i class="ri-user-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
