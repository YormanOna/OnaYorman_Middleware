<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portal para Adultos</title>
  
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  
  <style>
    body {
      background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
      min-height: 100vh;
      padding-top: 4rem;
      padding-bottom: 4rem;
      font-family: 'Poppins', sans-serif;
      color: #444;
    }
    
    .container {
      max-width: 1140px;
      margin: 0 auto;
    }
    
    .hero {
      text-align: center;
      margin-bottom: 3.5rem;
      animation: fadeInDown 0.8s ease-out;
    }
    
    .hero-icon-container {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 120px;
      height: 120px;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 60px;
      margin-bottom: 1.5rem;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    
    .hero-icon {
      font-size: 3.5rem;
      background: linear-gradient(135deg, #1a2a6c, #b21f1f);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    
    .hero-title {
      font-size: 3.25rem;
      font-weight: 800;
      color: #fff;
      margin-top: 1rem;
      text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      letter-spacing: -0.5px;
    }
    
    .hero-text {
      font-size: 1.25rem;
      color: rgba(255, 255, 255, 0.9);
      margin-top: 1rem;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
      font-weight: 300;
    }
    
    .content-wrapper {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      padding: 3rem;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
      backdrop-filter: blur(10px);
    }
    
    .section-title {
      text-align: center;
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 2.5rem;
      color: #333;
      position: relative;
      padding-bottom: 1rem;
    }
    
    .section-title:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background: linear-gradient(90deg, #1a2a6c, #b21f1f);
      border-radius: 3px;
    }
    
    .features .card {
      border: none;
      border-radius: 1.25rem;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
      transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
      overflow: hidden;
      position: relative;
      z-index: 1;
    }
    
    .features .card:hover {
      transform: translateY(-12px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    
    .features .card:after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(26, 42, 108, 0.05), rgba(178, 31, 31, 0.05));
      opacity: 0;
      z-index: -1;
      transition: all 0.4s ease;
    }
    
    .features .card:hover:after {
      opacity: 1;
    }
    
    .features .icon-container {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 80px;
      height: 80px;
      background: linear-gradient(135deg, rgba(26, 42, 108, 0.1), rgba(178, 31, 31, 0.1));
      border-radius: 50%;
      margin-bottom: 1.5rem;
    }
    
    .features .bi {
      font-size: 2.25rem;
      background: linear-gradient(135deg, #1a2a6c, #b21f1f);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    
    .features h5 {
      font-weight: 600;
      font-size: 1.25rem;
      margin-bottom: 1rem;
      color: #333;
    }
    
    .features p {
      color: #666;
      font-size: 0.95rem;
      line-height: 1.6;
    }
    
    .btn-back {
      margin-top: 3rem;
      font-size: 1.1rem;
      padding: 0.75rem 2rem;
      border-radius: 50px;
      background: #fff;
      color: #1a2a6c;
      border: none;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      font-weight: 500;
      transition: all 0.3s ease;
    }
    
    .btn-back:hover {
      background: linear-gradient(135deg, #1a2a6c, #b21f1f);
      color: #fff;
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(26, 42, 108, 0.3);
    }
    
    footer {
      margin-top: 3rem;
    }
    
    /* Animaciones */
    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    .features .card {
      animation: fadeInUp 0.8s ease-out forwards;
      opacity: 0;
    }
    
    .features .card:nth-child(1) { animation-delay: 0.1s; }
    .features .card:nth-child(2) { animation-delay: 0.2s; }
    .features .card:nth-child(3) { animation-delay: 0.3s; }
    .features .card:nth-child(4) { animation-delay: 0.4s; }
    .features .card:nth-child(5) { animation-delay: 0.5s; }
    .features .card:nth-child(6) { animation-delay: 0.6s; }
    
    footer {
      animation: fadeInUp 0.8s ease-out;
      animation-delay: 0.7s;
      animation-fill-mode: forwards;
      opacity: 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <header class="hero">
      <div class="hero-icon-container">
        <i class="bi bi-people-fill hero-icon"></i>
      </div>
      <h1 class="hero-title">Portal para Adultos</h1>
      <p class="hero-text">Guías y recursos profesionales para personas de 26 a 59 años enfocados en desarrollo personal y bienestar.</p>
    </header>
    
    <div class="content-wrapper">
      <h2 class="section-title">Servicios Destacados</h2>
      
      <section class="features">
        <div class="row gy-4">
          <div class="col-md-4">
            <div class="card p-4 text-center h-100">
              <div class="icon-container">
                <i class="bi bi-graph-up"></i>
              </div>
              <h5>Planificación Financiera</h5>
              <p>Estrategias personalizadas de ahorro, inversiones inteligentes y herramientas para optimizar tu presupuesto familiar.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card p-4 text-center h-100">
              <div class="icon-container">
                <i class="bi bi-briefcase"></i>
              </div>
              <h5>Desarrollo Profesional</h5>
              <p>Cursos especializados, oportunidades de networking estratégico y asesoría experta para impulsar tu carrera profesional.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card p-4 text-center h-100">
              <div class="icon-container">
                <i class="bi bi-heart"></i>
              </div>
              <h5>Salud y Bienestar</h5>
              <p>Programas de ejercicio eficientes, planes nutricionales científicos y técnicas de prevención adaptadas a tu edad y ritmo de vida.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card p-4 text-center h-100">
              <div class="icon-container">
                <i class="bi bi-people"></i>
              </div>
              <h5>Relaciones</h5>
              <p>Recursos prácticos y asesoría profesional para fortalecer y mantener saludables tus vínculos familiares y sociales.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card p-4 text-center h-100">
              <div class="icon-container">
                <i class="bi bi-journal-text"></i>
              </div>
              <h5>Gestión del Estrés</h5>
              <p>Técnicas avanzadas de mindfulness, meditación y manejo emocional para encontrar equilibrio en medio de las demandas diarias.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card p-4 text-center h-100">
              <div class="icon-container">
                <i class="bi bi-house-door"></i>
              </div>
              <h5>Hogar y Familia</h5>
              <p>Estrategias efectivas para la gestión del hogar, crianza consciente y optimización del balance entre trabajo y vida personal.</p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <footer class="text-center">
      <a href="{{ route('formulario.edad') }}" class="btn btn-back">
        <i class="bi bi-arrow-left-circle me-2"></i>Volver al inicio
      </a>
    </footer>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>