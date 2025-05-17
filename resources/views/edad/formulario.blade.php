<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clasificación por Edad</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1.5rem;
      font-family: 'Poppins', sans-serif;
    }

    .form-container {
      background-color: rgba(255, 255, 255, 0.95);
      border-radius: 1.5rem;
      padding: 2.5rem;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 480px;
      backdrop-filter: blur(5px);
      border: 1px solid rgba(255, 255, 255, 0.18);
    }

    .form-header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .form-header .header-icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 72px;
      height: 72px;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      border-radius: 50%;
      margin-bottom: 1rem;
      color: white;
      font-size: 2rem;
      box-shadow: 0 5px 15px rgba(106, 17, 203, 0.3);
    }

    .form-header h1 {
      font-weight: 700;
      font-size: 2.2rem;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 0.5rem;
    }

    .form-header p {
      color: #6c757d;
      font-size: 1rem;
      font-weight: 300;
    }

    .form-label {
      font-weight: 500;
      font-size: 0.95rem;
      color: #495057;
      margin-bottom: 0.5rem;
      display: block;
    }

    .input-group {
      position: relative;
      margin-bottom: 1.5rem;
    }

    .input-icon {
      position: absolute;
      left: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: #6a11cb;
      z-index: 10;
    }

    .form-control {
      height: 3.2rem;
      border-radius: 0.75rem;
      padding-left: 3rem;
      font-size: 1rem;
      border: 2px solid #e9ecef;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: #6a11cb;
      box-shadow: 0 0 0 0.25rem rgba(106, 17, 203, 0.15);
    }

    .btn-submit {
      font-size: 1rem;
      padding: 0.8rem;
      border-radius: 0.75rem;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      border: none;
      font-weight: 500;
      letter-spacing: 0.5px;
      box-shadow: 0 5px 15px rgba(106, 17, 203, 0.3);
      transition: all 0.3s ease;
    }

    .btn-submit:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(106, 17, 203, 0.4);
    }

    .btn-submit:active {
      transform: translateY(1px);
    }

    .alert {
      font-size: 0.9rem;
      padding: 1rem 1.25rem;
      border-radius: 0.75rem;
      margin-bottom: 1.5rem;
    }

    .alert-danger {
      background-color: rgba(220, 53, 69, 0.1);
      border: 1px solid rgba(220, 53, 69, 0.2);
      color: #dc3545;
    }

    .alert ul {
      padding-left: 1rem;
      margin-bottom: 0;
    }

    /* Animaciones para los campos del formulario */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .input-group {
      animation: fadeIn 0.5s ease forwards;
      opacity: 0;
    }

    .input-group:nth-child(1) { animation-delay: 0.1s; }
    .input-group:nth-child(2) { animation-delay: 0.2s; }
    .input-group:nth-child(3) { animation-delay: 0.3s; }

    /* Estilo de número para quitar las flechas */
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
      -webkit-appearance: none; 
      margin: 0; 
    }
    input[type=number] {
      -moz-appearance: textfield;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <div class="form-header">
      <div class="header-icon">
        <i class="bi bi-person-lines-fill"></i>
      </div>
      <h1>Bienvenido</h1>
      <p>Ingresa tus datos para comenzar tu clasificación.</p>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('procesar.edad') }}">
      @csrf

      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <div class="input-group">
          <i class="bi bi-person-fill input-icon"></i>
          <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Tu nombre" required>
        </div>
      </div>

      <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <div class="input-group">
          <i class="bi bi-person-badge-fill input-icon"></i>
          <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Tu apellido" required>
        </div>
      </div>

      <div class="mb-3">
        <label for="edad" class="form-label">Edad (0–120 años)</label>
        <div class="input-group">
          <i class="bi bi-calendar-heart-fill input-icon"></i>
          <input type="number" name="edad" id="edad" class="form-control" min="0" max="120" placeholder="Tu edad" required>
        </div>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-submit">
          <i class="bi bi-check-circle-fill me-2"></i>Enviar
        </button>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>