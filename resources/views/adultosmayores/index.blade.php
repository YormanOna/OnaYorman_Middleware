<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portal para Adultos Mayores</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --primary-color: #306e73;
      --secondary-color: #f4e9cd;
      --accent-color: #dab785;
      --text-color: #2f3e46;
      --muted-text: #6c757d;
    }

    body {
      background: linear-gradient(145deg, #fdfcfb 0%, #f4e9cd 100%);
      font-family: 'Segoe UI', sans-serif;
      color: var(--text-color);
      padding-top: 3rem;
    }

    .hero {
      text-align: center;
      margin-bottom: 3rem;
    }

    .hero-icon {
      font-size: 5rem;
      color: var(--primary-color);
      animation: pulse 2s infinite ease-in-out;
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); opacity: 1; }
      50% { transform: scale(1.1); opacity: 0.8; }
    }

    .hero-title {
      font-size: 3.2rem;
      font-weight: 700;
      color: var(--text-color);
      font-family: 'Georgia', serif;
      margin-top: 0.5rem;
    }

    .hero-text {
      font-size: 1.3rem;
      color: var(--muted-text);
      margin-top: 1rem;
    }

    .features .card {
      border: none;
      border-radius: 1.25rem;
      background-color: #ffffff;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
      transition: all 0.3s ease;
    }

    .features .card:hover {
      transform: translateY(-7px);
      box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
    }

    .features .bi {
      font-size: 2.7rem;
      color: var(--accent-color);
    }

    .features h5 {
      margin-top: 1rem;
      font-weight: 600;
      color: var(--primary-color);
    }

    .features p {
      font-size: 1rem;
      color: var(--muted-text);
    }

    .btn-back {
      margin: 3rem auto 1rem;
      font-size: 1.1rem;
      padding: 0.75rem 2rem;
      border-radius: 50px;
      background-color: var(--primary-color);
      color: white;
      border: none;
      transition: background-color 0.3s ease;
    }

    .btn-back:hover {
      background-color: #254f53;
    }

    footer {
      background-color: #f0ead6;
      padding: 2rem 0 1rem;
      margin-top: 4rem;
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
    <i class="bi bi-heart-pulse-fill hero-icon"></i>
    <h1 class="hero-title">Portal para Adultos Mayores</h1>
    <p class="hero-text">Recursos, bienestar y comunidad para personas de 60 a 74 años.</p>
  </header>

  <section class="features container">
    <div class="row gy-4">
      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-clipboard-data mb-3"></i>
          <h5>Control de Salud</h5>
          <p>Monitoreo regular de presión, niveles de azúcar y revisiones médicas preventivas.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-activity mb-3"></i>
          <h5>Ejercicio Suave</h5>
          <p>Actividades adaptadas como yoga, tai chi y caminatas guiadas para mantener movilidad.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-chat-dots mb-3"></i>
          <h5>Comunidad</h5>
          <p>Grupos de apoyo y espacios sociales para fomentar relaciones saludables y compañía.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-book mb-3"></i>
          <h5>Talleres y Cursos</h5>
          <p>Manualidades, informática básica y otras actividades para aprendizaje continuo.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-shield-lock mb-3"></i>
          <h5>Seguridad</h5>
          <p>Consejos y herramientas para evitar caídas y manejar tecnología con confianza.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 text-center h-100">
          <i class="bi bi-people-fill mb-3"></i>
          <h5>Asesoría Legal</h5>
          <p>Información y apoyo sobre pensiones, herencias, y derechos legales del adulto mayor.</p>
        </div>
      </div>
    </div>
  </section>

  <footer class="text-center">
    <a href="{{ route('formulario.edad') }}" class="btn btn-back">
      <i class="bi bi-arrow-left-circle me-2"></i>Volver al inicio
    </a>
    <p class="mt-3 text-muted small">&copy; 2025 Portal para Adultos Mayores. Todos los derechos reservados.</p>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
