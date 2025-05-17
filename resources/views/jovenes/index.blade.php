<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portal para Jóvenes Adultos</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --primary: #0d6efd;
      --accent: #6f42c1;
      --bg-light: #f0f8ff;
      --card-bg: #ffffff;
      --text-dark: #212529;
      --text-muted: #6c757d;
    }

    body {
      background: linear-gradient(to right, #dfefff, #f4f8ff);
      font-family: 'Segoe UI', sans-serif;
      padding-top: 4rem;
    }

    .hero {
      text-align: center;
      margin-bottom: 3rem;
    }

    .hero-icon {
      font-size: 5rem;
      color: var(--accent);
      animation: pulse 2.5s infinite;
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); opacity: 1; }
      50% { transform: scale(1.07); opacity: 0.8; }
    }

    .hero-title {
      font-size: 2.8rem;
      font-weight: 800;
      color: var(--text-dark);
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
      background-color: #0056b3;
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
    <i class="bi bi-stars hero-icon"></i>
    <h1 class="hero-title">Portal para Jóvenes Adultos</h1>
    <p class="hero-text">Recursos para impulsar tu crecimiento entre los 18 y 25 años.</p>
  </header>

  <section class="features container">
    <div class="row gy-4">
      <div class="col-md-4">
        <div class="card text-center">
          <i class="bi bi-laptop"></i>
          <h5>Carrera Profesional</h5>
          <p>Guías sobre empleabilidad, entrevistas, CV y primeros empleos.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center">
          <i class="bi bi-bank"></i>
          <h5>Educación Superior</h5>
          <p>Opciones de universidades, becas, cursos técnicos y posgrados.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center">
          <i class="bi bi-wallet2"></i>
          <h5>Finanzas Personales</h5>
          <p>Presupuesto, ahorro, manejo de tarjetas y educación financiera.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center">
          <i class="bi bi-heart-pulse"></i>
          <h5>Salud Integral</h5>
          <p>Atención médica, salud mental, nutrición y bienestar emocional.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center">
          <i class="bi bi-globe"></i>
          <h5>Idiomas y Cultura</h5>
          <p>Aprende idiomas, conoce otras culturas y participa en intercambios.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center">
          <i class="bi bi-lightbulb"></i>
          <h5>Emprendimiento</h5>
          <p>Cómo iniciar un negocio, validación de ideas y programas de apoyo.</p>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <a href="{{ route('formulario.edad') }}" class="btn btn-back">
      <i class="bi bi-arrow-left-circle me-2"></i>Volver al inicio
    </a>
    <p class="mt-3 text-muted small">&copy; 2025 Portal para Jóvenes Adultos. Todos los derechos reservados.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
