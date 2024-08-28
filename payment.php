<?php include 'header.php'; ?>

<main>
    <section class="payment">
        <div class="container">
            <div class="row">
                <div class="payment__header">
                    <h2>Pembayaran</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="payment__left">
                        <div class="payment__section">
                            <div class="payment__section-title">
                                <h4><i class="ri-map-pin-line text-orange"></i> Alamat Pengiriman</h4>
                                <a href="#" class="text-orange">Ubah Alamat</a>
                            </div>
                            <div class="payment__section-detail">
                                <p>John Doe</p>
                                <p>081234567890</p>
                                <p>Jl. Raya Jatiwaringin No. 1, Pondok Gede, Bekasi</p>
                                <p>Bekasi, Jawa Barat, 17411</p>
                            </div>
                        </div>
                        <div class="payment__section">
                            <h4><i class="ri-bank-card-line text-orange"></i> Metode Pembayaran</h4>

                            <div class="payment__section-subtitle">
                                <h6>Transfer via Bank</h6>
                            </div>
                            <div class="payment__section-list">
                                <div class="payment__section-item">
                                    <label for="niaga">
                                        <img src="./img/payment/logo-niaga.png" />
                                    </label>
                                    <input type="radio" name="payment-type" id="niaga" />
                                </div>
                                <div class="payment__section-item">
                                    <label for="bni">
                                        <img src="./img/payment/logo-bni.png" />
                                    </label>
                                    <input type="radio" name="payment-type" id="bni" />
                                </div>
                            </div>
                            <br />
                            <div class="payment__section-subtitle">
                                <h6>Bayar Menggunakan QRIS</h6>
                            </div>
                            <div class="payment__section-list">
                                <div class="payment__section-item">
                                    <label for="qris">
                                        <img src="./img/payment/qris.png" />
                                    </label>
                                    <input type="radio" name="payment-type" id="qris" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="payment__right">
                        <div class="payment__section">
                            <div class="payment__section-title">
                                <h5>Rincian Harga</h5>
                            </div>
                            <div class="payment__section-row">
                                <div class="payment__section-row-item">
                                    <p>Total Harga Barang</p>
                                    <p class="payment__section-row-right">Rp480.000</p>
                                </div>
                                <div class="payment__section-row-item">
                                    <p>Ongkos Kirim</p>
                                    <p class="payment__section-row-right">Rp40.000</p>
                                </div>
                                <div class="payment__section-row-item">
                                    <p>Asuransi</p>
                                    <p class="payment__section-row-right">Rp4.800</p>
                                </div>
                                <div class="payment__section-row-item">
                                    <p>Biaya Layanan</p>
                                    <p class="payment__section-row-right">Rp1.000</p>
                                </div>
                            </div>
                            <div class="payment__section-total">
                                <p>Total Pembayaran</p>
                                <p>Rp525.800</p>
                            </div>
                            <div class="payment__section-button">
                                <a href="#" class="btn btn-orange">Bayar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>

<script>
    // Mengatur label active pada metode pembayaran
    const paymentItems = document.querySelectorAll('.payment__section-item label');
    paymentItems.forEach((item) => {
        item.addEventListener('click', () => {
            paymentItems.forEach((item) => {
                item.classList.remove('active');
            });
            item.classList.add('active');
        });
    });
    
    // Memastikan dropdown berfungsi dengan baik
    document.addEventListener('DOMContentLoaded', function() {
        var dropdownElements = document.querySelectorAll('.dropdown-toggle');
        dropdownElements.forEach(function(dropdown) {
            dropdown.addEventListener('click', function() {
                var target = dropdown.nextElementSibling;
                if (target.classList.contains('show')) {
                    target.classList.remove('show');
                } else {
                    target.classList.add('show');
                }
            });
        });

        // Menutup dropdown saat klik di luar elemen
        document.addEventListener('click', function(e) {
            dropdownElements.forEach(function(dropdown) {
                var target = dropdown.nextElementSibling;
                if (!dropdown.contains(e.target)) {
                    target.classList.remove('show');
                }
            });
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
