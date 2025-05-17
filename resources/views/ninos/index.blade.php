<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portal para Niños</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --primary: #ff9800;
      --accent: #ff5722;
      --bg-light: #fff9ec;
      --card-bg: #ffffff;
      --text-dark: #2b3e50;
      --text-muted: #6c757d;
    }

    body {
      background: linear-gradient(135deg, #fffbe7, #e2f3ff);
      font-family: 'Segoe UI', sans-serif;
      padding-top: 4rem;
    }

    .hero {
      text-align: center;
      margin-bottom: 3rem;
    }

    .hero-icon {
      font-size: 5rem;
      color: var(--primary);
      animation: bounce 2s infinite;
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    .hero-title {
      font-size: 2.8rem;
      font-weight: 800;
      color: var(--text-dark);
      font-family: 'Comic Sans MS', cursive, sans-serif;
    }

    .hero-text {
      font-size: 1.2rem;
      color: var(--text-muted);
      margin-top: 0.5rem;
    }

    .features .card {
      border: none;
      border-radius: 1.5rem;
      background-color: var(--card-bg);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      padding: 2rem 1.5rem;
      height: 100%;
    }

    .features .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.1);
    }

    .features .bi {
      font-size: 3rem;
      color: var(--primary);
    }

    .features h5 {
      margin-top: 1rem;
      color: var(--accent);
      font-weight: 700;
    }

    .features p {
      font-size: 1rem;
      color: var(--text-muted);
    }

    .btn-back {
      margin-top: 3rem;
      font-size: 1rem;
      padding: 0.7rem 2rem;
      border-radius: 2rem;
      background-color: var(--primary);
      color: white;
      border: none;
      transition: background-color 0.3s ease;
    }

    .btn-back:hover {
      background-color: #e07c00;
    }

    footer {
      text-align: center;
      margin-top: 4rem;
      padding-bottom: 2rem;
    }

    @media (max-width: 768px) {
      .hero-title {
        font-size: 2.2rem;
      }

      .hero-icon {
        font-size: 4rem;
      }
    }
  </style>
</head>
<body>

  <header class="hero container">
    <i class="bi bi-balloon-fill hero-icon"></i>
    <h1 class="hero-title">Portal para Niños</h1>
    <p class="hero-text">Actividades, juegos y aprendizaje para edades entre 6 y 12 años.</p>
  </header>

  <section class="features container">
    <div class="row gy-4">
      <div class="col-md-4">
        <div class="card text-center">
          <i class="bi bi-controller"></i>
          <h5>Juegos Educativos</h5>
          <p>Plataformas interactivas que enseñan matemáticas, lectura y ciencia jugando.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center">
          <i class="bi bi-brush"></i>
          <h5>Creatividad</h5>
          <p>Dibujos, manualidades, origami, cuentos ilustrados y mucho más.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center">
          <i class="bi bi-music-note-beamed"></i>
          <h5>Arte y Música</h5>
          <p>Canciones educativas, karaoke infantil y exploración de instrumentos.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center">
          <i class="bi bi-bicycle"></i>
          <h5>Deporte y Movimiento</h5>
          <p>Ideas para moverse en casa o al aire libre: yoga, baile y juegos físicos.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center">
          <i class="bi bi-book-half"></i>
          <h5>Cuentacuentos</h5>
          <p>Historias animadas, narraciones interactivas y libros digitales.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center">
          <i class="bi bi-lightbulb-fill"></i>
          <h5>Exploradores Curiosos</h5>
          <p>Videos, experimentos y trivias para fomentar la curiosidad científica.</p>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <a href="{{ route('formulario.edad') }}" class="btn btn-back">
      <i class="bi bi-arrow-left-circle me-2"></i>Volver al inicio
    </a>
    <p class="mt-3 text-muted small">&copy; 2025 Portal para Niños. Todos los derechos reservados.</p>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
