<!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Pacifico&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <style>
      body {
        font-family: 'Montserrat', sans-serif; /*Font default untuk paragraf*/
      }

      /* Style untuk halaman home */
      .hero-section {
        padding: 5rem 0; /* Jarak atas-bawah */
      }
      .hero-heading {
        font-size: 5.5rem; /* Ukuran font sangat besar */
        line-height: 1.2;
        font-weight: 700;
        margin-bottom: 1.5rem;
      }
      .font-serif {
        font-family: 'Playfair Display', serif; /* Font untuk "Hi." */
      }
      .font-script {
        font-family: 'Pacifico', cursive; /* Font untuk "Welcome" */
        font-weight: 400; /* Reset ketebalan font script */
      }
      .welcome-gradient {
        /* Ini adalah kode untuk teks gradient */
        background: linear-gradient(to right, #79C16C, #F3E500, #F39B00, #F30000, #C100F3, #0076F3);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
        display: inline-block;
      }
      .hero-subtext {
        font-size: 0.9rem;
        font-weight: 500;
        color: #555;
      }
      .hero-description {
        font-size: 1.1rem;
        color: #333;
        max-width: 550px; /* Batasi lebar paragraf */
        line-height: 1.7;
        margin-top: 1.5rem;
      }

      /*Style untuk Halaman About */
      .profile-img {
        width : 180px;
        height: 180px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 1.5rem;
      }
      .text-teal{
        color: #0e5bc;
        font-weight: 600;
      }
    </style>

  </head>
  <body class="@yield('body-class', 'bg-white text-dark')">    
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-black"> <div class="container">
        <a class="navbar-brand fw-bold" href="/">UTS Project</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === 'Blog Posts') ? 'active' : '' }}" href="/posts">Posts</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-4">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>