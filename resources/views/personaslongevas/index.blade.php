<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Portal para Personas Longevas</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(135deg, #fdfbff 0%, #ececec 100%);
      min-height: 100vh;
      padding-top: 3rem;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #343a40;
    }

    .hero {
      text-align: center;
      margin-bottom: 2rem;
    }

    .hero-icon {
      font-size: 4.5rem;
      color: #8e44ad;
    }

    .hero-title {
      font-size: 3rem;
      font-weight: 800;
      color: #2c3e50;
    }

    .hero-text {
      font-size: 1.25rem;
      color: #5a5a5a;
    }

    .features .card {
      border: none;
      border-radius: 1rem;
      background-color: #ffffff;
      box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.05);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .features .card:hover {
      transform: translateY(-4px);
      box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1);
    }

    .features .bi {
      font-size: 2.2rem;
      color: #8e44ad;
    }

    .btn-back {
      margin-top: 2rem;
      font-size: 1rem;
      padding: 0.6rem 1.5rem;
      border-radius: 2rem;
    }

    @media (max-width: 576px) {
      .hero-title {
        font-size: 2.2rem;
      }
      .hero-text {
        font-size: 1.1rem;
      }
    }
  </style>
</head>
<body>

  <header class="hero container">
    <i class="bi bi-flower2 hero-icon"></i>
    <h1 class="hero-title">Portal para Personas Longevas</h1>
    <p class="hero-text">Cuidado, acompañamiento y bienestar para personas de 75 a 120 años.</p>
  </header>

  <section class="features container">
    <div class="row gy-4">

      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-heart-pulse mb-3"></i>
          <h5 class="fw-bold">Bienestar Físico</h5>
          <p class="text-muted">Ejercicios suaves, fisioterapia en casa y guías de movilidad segura.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-people-fill mb-3"></i>
          <h5 class="fw-bold">Comunidad y Apoyo</h5>
          <p class="text-muted">Redes sociales, acompañamiento familiar y grupos de encuentro.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-headset mb-3"></i>
          <h5 class="fw-bold">Escucha Activa</h5>
          <p class="text-muted">Espacios para conversar, compartir experiencias y recibir contención emocional.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-journal-medical mb-3"></i>
          <h5 class="fw-bold">Salud y Medicación</h5>
          <p class="text-muted">Seguimiento médico, recordatorios de medicación y contacto con profesionales.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-book mb-3"></i>
          <h5 class="fw-bold">Memoria y Lectura</h5>
          <p class="text-muted">Ejercicios cognitivos, lectura guiada y contenidos para estimular la mente.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-tv mb-3"></i>
          <h5 class="fw-bold">Entretenimiento</h5>
          <p class="text-muted">Películas, juegos simples, programas culturales y pasatiempos relajantes.</p>
        </div>
      </div>

    </div>
  </section>

  <footer class="text-center py-4">
    <a href="{{ route('formulario.edad') }}" class="btn btn-outline-secondary btn-back">
      <i class="bi bi-arrow-left-circle me-2"></i>Volver al inicio
    </a>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
