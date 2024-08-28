<?php include 'header.php'; ?>

<main class="container my-5 pt-5">
    <section class="about-us">
        <h2>About Us</h2>
        <p>At UHAJJGIFTS, we are committed to providing the best computer accessories in Indonesia. Founded in [Tahun Pendirian], our mission is to offer high-quality products and exceptional customer service. We have grown to become one of the leading marketplaces in the country, trusted by thousands of customers.</p>
        <h3>Our Values</h3>
        <ul>
            <li><strong>Customer Satisfaction:</strong> Our customers are at the heart of everything we do.</li>
            <li><strong>Integrity:</strong> We operate with transparency and honesty.</li>
            <li><strong>Innovation:</strong> Constantly evolving to meet the needs of the market.</li>
            <li><strong>Sustainability:</strong> Promoting eco-friendly products and practices.</li>
        </ul>
    </section>

    <section class="contact-us mt-5">
        <h2>Contact Us</h2>
        <p>If you have any questions, concerns, or feedback, please don't hesitate to reach out to us. We are here to help you with anything you need.</p>
        <div class="row">
            <div class="col-md-6">
                <h3>Contact Information</h3>
                <p><strong>Email:</strong> <a href="mailto:support@uhajjgifts.com">support@uhajjgifts.com</a></p>
                <p><strong>Phone:</strong> +62-123-456-7890</p>
                <p><strong>Address:</strong> Jl. Komputer No. 1, Jakarta, Indonesia</p>
            </div>
            <div class="col-md-6">
                <h3>Send Us a Message</h3>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-orange">Send Message</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>

<script>
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
