<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edad Inválida</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #ece9e6 0%, #ffffff 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
    }
    .hero {
      text-align: center;
      max-width: 600px;
    }
    .hero-icon {
      font-size: 6rem;
      color: #ff6b6b;
      animation: shake 1s ease-in-out infinite;
    }
    .hero-title {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 4rem;
      font-weight: 900;
      color: #343a40;
      text-shadow: 2px 2px 5px rgba(0,0,0,0.1);
    }
    .hero-text {
      font-size: 1.25rem;
      color: #6c757d;
      margin-bottom: 2rem;
    }
    .btn-back {
      font-size: 1.1rem;
      padding: 0.75rem 1.5rem;
      border-radius: 50px;
    }

    @keyframes shake {
      0%, 100% { transform: translateX(0); }
      20%, 60% { transform: translateX(-10px); }
      40%, 80% { transform: translateX(10px); }
    }
  </style>
</head>
<body>
  <div class="hero">
    <i class="bi bi-exclamation-circle-fill hero-icon mb-3"></i>
    <h1 class="hero-title mb-3">¡Oops!</h1>
    <p class="hero-text">
      La edad ingresada no es válida.<br>
      Debe estar entre <strong>0</strong> y <strong>120</strong> años.
    </p>
    <a href="{{ route('formulario.edad') }}" class="btn btn-outline-danger btn-back">
      <i class="bi bi-arrow-left me-2"></i>Volver a intentarlo
    </a>
  </div>

  <!-- Bootstrap JS bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
