# The Electric Buffalo — Web oficial

Web oficial de la banda **The Electric Buffalo**, desarrollada con Laravel + Blade + Livewire + MySQL.

## Stack

- Laravel 11 (Blade + Livewire 3)
- MySQL
- PHP 8.2+
- [Spatie Image](https://spatie.be/docs/image) — procesamiento de imágenes
- [TinyMCE](https://www.tiny.cloud/) — editor de contenido (vía `mews/purifier` para sanitizado)

Alojada en un VPS OVHcloud (Ubuntu 24.x, Apache, PHP 8.3).

## Estructura relevante

- `app/` — Modelos, controladores, servicios
- `public/` — Carpeta pública servida por Apache. Solo debe contener `index.php`, `.htaccess` y assets compilados
- `storage/app/public/` — Imágenes subidas desde el panel de administración
- `resources/views/` — Vistas Blade y componentes Livewire
- `routes/web.php` — Rutas de la aplicación

## Instalación local

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install && npm run build
php artisan migrate
php artisan serve
```

## Comandos útiles

```bash
php artisan up            # activar la web
php artisan down          # modo mantenimiento
php artisan config:cache  # regenerar caché de configuración
php artisan key:generate  # regenerar APP_KEY
```

## Seguridad

Este proyecto ha sufrido ataques de malware previamente. Reglas que deben respetarse siempre:

- El archivo `.env` **nunca** debe ser accesible públicamente.
- En `public/` solo debe existir `index.php` como archivo PHP.
- En `storage/app/public/` no debe haber ningún archivo `.php`.
- El `.htaccess` de `public/` no debe contener reglas que permitan acceso a archivos específicos por nombre.
- Los dumps de base de datos (`*.sql`) no deben commitearse ni quedar en la raíz del repositorio.

Más detalle en [CLAUDE.md](CLAUDE.md).

## Licencia

Proyecto privado. Todos los derechos reservados.
