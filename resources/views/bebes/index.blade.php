<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portal para bebés</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --primary: #ff9aa2;
      --secondary: #a2d5f2;
      --accent: #ffe6e6;
      --text-color: #343a40;
      --muted-text: #6c757d;
    }

    body {
      background: linear-gradient(135deg, #fff0f5 0%, #e0f7fa 100%);
      min-height: 100vh;
      padding-top: 3rem;
      font-family: 'Segoe UI', sans-serif;
    }

    .hero {
      text-align: center;
      padding: 2rem 1rem;
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
      font-size: 3rem;
      font-weight: 800;
      color: var(--text-color);
      font-family: 'Comic Sans MS', cursive, sans-serif;
    }

    .hero-text {
      font-size: 1.25rem;
      color: var(--muted-text);
      margin-top: 1rem;
    }

    .features .card {
      border: none;
      border-radius: 1.5rem;
      background-color: #ffffff;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.07);
      transition: transform 0.3s ease;
    }

    .features .card:hover {
      transform: scale(1.03);
    }

    .features .bi {
      font-size: 2.5rem;
      color: var(--secondary);
    }

    .features h5 {
      margin-top: 1rem;
      font-weight: 700;
      color: var(--primary);
    }

    .features p {
      font-size: 1rem;
      color: var(--muted-text);
    }

    .btn-back {
      margin-top: 3rem;
      font-size: 1.1rem;
      padding: 0.75rem 2rem;
      border-radius: 50px;
      background-color: var(--secondary);
      color: #fff;
      border: none;
      transition: background-color 0.3s ease;
    }

    .btn-back:hover {
      background-color: #89c2d9;
    }

    footer {
      background-color: #fff;
      padding: 2rem 0 1rem;
      text-align: center;
    }

    @media (max-width: 768px) {
      .hero-title {
        font-size: 2.4rem;
      }

      .hero-icon {
        font-size: 4rem;
      }
    }
  </style>
</head>
<body>

  <header class="hero container">
    <i class="bi bi-emoji-smile-fill hero-icon"></i>
    <h1 class="hero-title">Portal para Bebés</h1>
    <p class="hero-text">Bienvenido a tu espacio de cuidado y aprendizaje para pequeños de 0 a 5 años.</p>
  </header>

  <section class="features container">
    <div class="row gy-4">
      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-egg-fried mb-3"></i>
          <h5>Nutrición</h5>
          <p>Guías sobre lactancia, introducción de sólidos y hábitos alimenticios saludables.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-heart-pulse mb-3"></i>
          <h5>Salud</h5>
          <p>Calendario de vacunas, control de peso y estimulación temprana para un desarrollo óptimo.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-box-seam mb-3"></i>
          <h5>Estimulación</h5>
          <p>Juegos y actividades para potenciar habilidades motoras y cognitivas.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-gear mb-3"></i>
          <h5>Equipamiento</h5>
          <p>Recomendaciones de cochecitos, cunas, sillas y otros esenciales de bebé.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-people mb-3"></i>
          <h5>Apoyo Familiar</h5>
          <p>Consejos para padres, grupos de apoyo y recursos comunitarios.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-journal-medical mb-3"></i>
          <h5>Consejería</h5>
          <p>Accede a profesionales de salud para consultas y seguimiento personalizado.</p>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <a href="{{ route('formulario.edad') }}" class="btn btn-back">
      <i class="bi bi-arrow-left-square me-2"></i>Volver al inicio
    </a>
    <p class="mt-3 text-muted small">&copy; 2025 Portal para Bebés. Todos los derechos reservados.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
