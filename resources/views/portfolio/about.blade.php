
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Mirachel Diazmara</title>
    <link rel="stylesheet" href="{{ asset('portfolio-assets/style.css') }}">
</head>
<body>

    <header>
        <nav class="navbar">
            <h2 class="logo">Rachel.</h2>

            <ul class="nav-links">
                <li><a href="{{ route('portfolio.home') }}">Home</a></li>
                <li><a href="{{ route('portfolio.about') }}" class="active">About</a></li>
                <li><a href="{{ route('portfolio.projects') }}">Portfolio</a></li>
                <li><a href="{{ route('portfolio.contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="about-section">
        <h1>About Me</h1>

        <p>
            Halo! Saya Mirachel Diazmara, mahasiswa
            Program Studi Sistem Informasi di
            Telkom University Surabaya.
        </p>

        <p>
            Saya memiliki ketertarikan pada bidang teknologi
            informasi, pengembangan website, dan analisis data.
            Saya senang mempelajari hal-hal baru serta
            mengembangkan kemampuan melalui kegiatan
            perkuliahan dan praktikum.
        </p>

        <div class="about-details">
            <h2>Education</h2>
            <p>Telkom University Surabaya</p>
            <p>Program Studi Sistem Informasi</p>

            <h2>Interests</h2>
            <p>Data Analysis, Web Development, and Information Technology</p>

            <h2>Certification</h2>
            <p>SAP SCM 500 – SAP Supply Chain Management</p>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 Mirachel Diazmara. All Rights Reserved.</p>
    </footer>

</body>
</html>
