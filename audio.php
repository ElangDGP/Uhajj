<?php
    $pageTitle = "Produk Audio - GADGET GLAM";
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
                    <img src="./img/logo-glam-black.png" alt="Logo GADGET GLAM" />
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
                                <li><a class="dropdown-item" href="storage.php">Storage</a></li>
                                <li><a class="dropdown-item" href="display.php">Displays</a></li>
                                <li><a class="dropdown-item" href="keyboard.php">Keyboard</a></li>
                                <li><a class="dropdown-item" href="audio.php">Audio</a></li>
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

        <main>
            <section class="header">
                <img src="./img/cat-audio.webp" alt="Banner Display" class="header__bg" />
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header__content">
                                <span class="header__subtitle">KATEGORI</span>
                                <h1>Produk <em>Audio</em></h1>
                                <p>Dengarkan suara lebih jernih dengan <em>audio</em> berkualitas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="product">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product__list">
                                <div class="row" id="audio-list"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 my-4">
                        <div class="footer__left">
                            <a href="./index.php"> <img src="./img/logo-glam-white.png" alt="Logo GADGET GLAM" /></a>
                            <p>MarketPlace khusus perlengkapan komputer terbaik di Indonesia.</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-6 col-md-4 my-4">
                                <div class="footer__link">
                                    <h6>Kategori Produk</h6>
                                    <ul>
                                        <li><a href="storage.php">Storage</a></li>
                                        <li><a href="display.php">Display</a></li>
                                        <li><a href="keyboard.php">Keyboard</a></li>
                                        <li><a href="audio.php">Audio</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 my-4">
                                <div class="footer__link">
                                    <h6>Informasi dan Bantuan</h6>
                                    <ul>
                                        <li><a href="kontak.php">About Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 my-4">
                                <div class="footer__link">
                                    <h6>Halaman Lainnya</h6>
                                    <ul>
                                        <li><a href="privacy.php">Privacy Policy</a></li>
                                        <li><a href="terms.php">Terms & Conditions</a></li>
                                        <li><a href="faq.php">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="js/renderAudio.js" type="module"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
