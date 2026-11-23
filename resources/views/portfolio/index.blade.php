
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Mirachel Diazmara</title>
    <link rel="stylesheet" href="{{ asset('portfolio-assets/style.css') }}">
</head>
<body>

    <header>
        <nav class="navbar">
            <h2 class="logo">Rachel.</h2>

            <ul class="nav-links">
                <li><a href="{{ route('portfolio.home') }}" class="active">Home</a></li>
                <li><a href="{{ route('portfolio.about') }}">About</a></li>
                <li><a href="{{ route('portfolio.projects') }}">Portfolio</a></li>
                <li><a href="{{ route('portfolio.contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-text">
                <p class="greeting">HELLO, WELCOME TO MY WEBSITE!</p>

                <h1>Hi, I'm <span>Mirachel Diazmara</span></h1>

                <h3>Information Systems Student</h3>

                <p>
                    Saya adalah mahasiswa Sistem Informasi
                    di Telkom University Surabaya yang tertarik
                    pada teknologi, pengembangan website,
                    dan analisis data.
                </p>

                <a href="{{ route('portfolio.about') }}" class="btn">More About Me</a>
            </div>

            <div class="hero-image">
                <img src="{{ asset('portfolio-assets/img/profile.jpg') }}" alt="Profile">
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Mirachel Diazmara. All Rights Reserved.</p>
    </footer>

</body>
</html>
