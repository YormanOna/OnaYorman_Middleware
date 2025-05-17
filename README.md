# 🎯 Sistema de Clasificación por Edad en Laravel

Este proyecto es un sistema web desarrollado con **Laravel + Bootstrap**, orientado a clasificar a las personas según su edad en grupos etarios definidos. Cada grupo accede a contenido personalizado sin necesidad de autenticación.

---

## 🧠 Objetivo

Brindar una experiencia informativa previa al registro, redirigiendo al usuario según su edad a una sección especializada.

---

## 🚀 Tecnologías usadas

- Laravel 10+
- PHP 8.1+
- Bootstrap 5
- PostgreSQL
- Bootstrap Icons
- Middlewares personalizados

---

## 📦 Requisitos previos

- PHP 8.1 o superior
- Composer
- Node.js + npm (opcional si compilas assets)
- PostgreSQL
- Git

---

## 🛠️ Instalación paso a paso

```bash
# 1. Clona el repositorio
git clone https://github.com/YormanOna/OnaYorman_Middleware.git
cd OnaYorman_Middleware

# 2. Instala dependencias PHP
composer install

# 3. Copia y configura el archivo de entorno
cp .env.example .env

# 4. Genera la clave de la aplicación
php artisan key:generate

# 5. Configura tu conexión a la base de datos en .env
# Por ejemplo:
# DB_CONNECTION=pgsql
# DB_HOST=127.0.0.1
# DB_PORT=5432
# DB_DATABASE=edad_app
# DB_USERNAME=tu_usuario
# DB_PASSWORD=tu_password

# 6. Crea la base de datos (desde pgAdmin o CLI)
# CREATE DATABASE edad_app;

# 7. Ejecuta las migraciones
php artisan migrate

# 8. (Opcional) Compila los assets si usas Vite
# npm install && npm run dev

# 9. Levanta el servidor local
php artisan serve
```

---

## 🧪 ¿Cómo usar?

1. Accede a `http://localhost:8000`
2. Ingresa nombre, apellido y edad en el formulario.
3. El sistema te redirigirá automáticamente al portal correspondiente:

| Rango de Edad | Grupo             | Ruta          |
|---------------|-------------------|---------------|
| 0–5           | Bebés             | `/bebes`      |
| 6–12          | Niños             | `/ninos`      |
| 13–17         | Adolescentes      | `/adolescentes` |
| 18–25         | Jóvenes adultos   | `/jovenes`    |
| 26–59         | Adultos           | `/adultos`    |
| 60–74         | Adultos mayores   | `/mayores`    |
| 75–120        | Personas longevas | `/longevos`   |

Si la edad es inválida (<0 o >120), verás una vista de error amigable.

---

## 🔒 Seguridad y buenas prácticas

- Middlewares personalizados (`ClasificarEdad`) para proteger rutas
- Redirección controlada a través de `AgeRouterService`
- Validación del lado del servidor
- Migraciones seguras con protección de datos maliciosos