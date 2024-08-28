<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="carousel">
        <div class="container carousel__container">
            <div id="zcpiCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#zcpiCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#zcpiCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#zcpiCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Slide 1.jpg" class="d-block w-100" alt="Banner Carousel 1" />
                    </div>
                    <div class="carousel-item">
                        <img src="img/Slide 2.jpg" class="d-block w-100" alt="Banner Carousel 2" />
                    </div>
                    <div class="carousel-item">
                        <img src="img/Slide 3.jpg" class="d-block w-100" alt="Banner Carousel 3" />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#zcpiCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#zcpiCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Content Sections (e.g., categories, products) -->
    <section class="category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-left">
                        <h4>Kategori Produk</h4>
                        <span class="header-line"></span>
                    </div>
                    <div class="category__list">
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <a href="storage.php" class="category__item">
                                    <img src="./img/cat-storage.jpg" alt="Kategori Storage" />
                                    <h6>Storage</h6>
                                </a>
                            </div>
                            <div class="col-6 col-md-3">
                                <a href="display.php" class="category__item">
                                    <img src="./img/cat-display.avif" alt="Kategori Display" />
                                    <h6>Display</h6>
                                </a>
                            </div>
                            <div class="col-6 col-md-3">
                                <a href="keyboard.php" class="category__item">
                                    <img src="./img/cat-keyboard.jpg" alt="Kategori Keyboard" />
                                    <h6>Keyboard</h6>
                                </a>
                            </div>
                            <div class="col-6 col-md-3">
                                <a href="audio.php" class="category__item">
                                    <img src="./img/cat-audio.webp" alt="Kategori Audio" />
                                    <h6>Audio</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-left">
                        <h4>Produk Rekomendasi</h4>
                        <span class="header-line"></span>
                    </div>
                    <div class="product__list">
                        <div class="row" id="recommended-list"></div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="header-left">
                        <h4>Paling Populer</h4>
                        <span class="header-line"></span>
                    </div>
                    <div class="product__list">
                        <div class="row" id="popular-list"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
