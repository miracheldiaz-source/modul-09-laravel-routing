
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio | Mirachel Diazmara</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('portfolio-assets/style.css') }}">
</head>

<body>

    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand logo" href="index.html">Rachel.</a>

                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarMenu"
                    aria-controls="navbarMenu"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="nav-links">
                        <li><a href="{{ route('portfolio.home') }}">Home</a></li>
                        <li><a href="{{ route('portfolio.about') }}">About</a></li>
                        <li><a href="{{ route('portfolio.projects') }}" class="active">Portfolio</a></li>
                        <li><a href="{{ route('portfolio.contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Portfolio Section -->
    <main class="portfolio-section">

        <div class="container">

            <div class="text-center mb-5">
                <h1>My Portfolio</h1>

                <p class="portfolio-intro">
                    Berikut beberapa tugas dan proyek yang pernah saya kerjakan
                    selama menempuh perkuliahan Sistem Informasi.
                </p>
            </div>

            <!-- Portfolio Cards -->
            <div class="row g-4 justify-content-center">

                <!-- Project 1 -->
                <div class="col-12 col-md-6 col-lg-5">

                    <div class="card portfolio-bootstrap-card h-100 border-0 shadow-sm">

                        <div class="card-body p-4">

                            <div class="portfolio-icon mb-3">
                                <i class="bi bi-palette-fill"></i>
                            </div>

                            <h2 class="card-title">
                                UI/UX Design – USAHA KIT
                            </h2>

                            <p class="card-text">
                                Perancangan UI/UX aplikasi USAHA KIT yang berfokus
                                pada kebutuhan pelaku UMKM. Proyek ini mencakup
                                perancangan tampilan antarmuka, penyusunan layout,
                                serta desain pengalaman pengguna agar aplikasi
                                mudah dipahami dan digunakan.
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Project 2 -->
                <div class="col-12 col-md-6 col-lg-5">

                    <div class="card portfolio-bootstrap-card h-100 border-0 shadow-sm">

                        <div class="card-body p-4">

                            <div class="portfolio-icon mb-3">
                                <i class="bi bi-code-slash"></i>
                            </div>

                            <h2 class="card-title">
                                Web Programming
                            </h2>

                            <p class="card-text">
                                Mempelajari dan menerapkan dasar-dasar pemrograman
                                web menggunakan HTML, CSS, JavaScript, PHP, dan
                                MySQL. Melalui proyek praktikum, saya mengembangkan
                                halaman website serta fitur pengelolaan data
                                menggunakan konsep CRUD.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Mirachel Diazmara. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
