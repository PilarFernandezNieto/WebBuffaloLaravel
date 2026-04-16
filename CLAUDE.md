# Electric Buffalo — Proyecto Laravel

## Descripción
Web oficial de la banda The Electric Buffalo. Desarrollada con Laravel + Blade + Livewire + MySQL.
Alojada en un VPS OVHcloud (Ubuntu 24.x, Apache, PHP 8.3).

## Stack
- Laravel (Blade + Livewire)
- MySQL
- PHP 8.3
- Spatie Image (procesamiento de imágenes)
- TinyMCE (editor de contenido)

## Estructura relevante
- `app/` — Modelos, controladores, servicios
- `public/` — Carpeta pública servida por Apache. Solo debe contener index.php, .htaccess y assets compilados
- `storage/app/public/` — Imágenes subidas por el panel de administración
- `resources/views/` — Vistas Blade y componentes Livewire
- `routes/web.php` — Rutas de la aplicación

## Contexto de seguridad
Este proyecto ha sufrido dos ataques de malware. Los vectores conocidos:
- Lectura del archivo .env desde /script/.env (credenciales expuestas)
- Inyección de archivos PHP en public/ y storage/app/public/ con nombres como bnn_.php, rip.php, about.php, wp-login.php
- Modificación del .htaccess de public/ para permitir ejecución de los backdoors
- Renombrado de carpetas de assets añadiendo sufijos hash (e128c8d)

## Reglas importantes
- El archivo .env NUNCA debe ser accesible públicamente
- En public/ solo debe existir index.php como archivo PHP
- En storage/app/public/ no debe haber ningún archivo .php
- El .htaccess de public/ no debe contener reglas que permitan acceso a archivos específicos por nombre

## Comandos útiles
- `php artisan up/down` — activar/desactivar modo mantenimiento
- `php artisan config:cache` — regenerar caché de configuración
- `php artisan key:generate` — regenerar APP_KEY
