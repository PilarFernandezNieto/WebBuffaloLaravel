# The Electric Buffalo — Web oficial

Web oficial de la banda **The Electric Buffalo**, desarrollada con Laravel + Blade + Livewire + MySQL.

## Stack

- Laravel 11 (Blade + Livewire 3)
- MySQL
- PHP 8.2+
- [Spatie Image](https://spatie.be/docs/image) — procesamiento de imágenes
- [TinyMCE](https://www.tiny.cloud/) — editor de contenido (vía `mews/purifier` para sanitizado)

Alojada en producción en un VPS OVHcloud (Ubuntu 24.x, Apache, PHP 8.3).

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

## Despliegue de pruebas en AlwaysData

> Entorno de pruebas, no de producción (producción está en OVH, ver más arriba). Hosting compartido, sin acceso root ni Node instalado, así que el frontend se compila siempre en local.

### Primer despliegue

1. Clonar el repositorio en el servidor por SSH (`ssh-bufaloelectrico.alwaysdata.net`).
2. `composer install --no-dev --optimize-autoloader`
3. Configurar `.env` con las credenciales de MySQL de AlwaysData y `APP_URL` correcto.
4. `php artisan key:generate`
5. `php artisan migrate`
6. `php artisan storage:link` — imprescindible para que las imágenes subidas desde `storage/app/public` sean accesibles en `public/storage` (no se genera automáticamente al desplegar, hay que crearlo a mano).
7. Compilar el frontend en local y subirlo (ver más abajo).

### Actualizar tras cambios en el repositorio

En la sesión SSH del servidor:

```bash
git pull origin <nombre-rama>
composer install --no-dev --optimize-autoloader   # solo si cambiaron dependencias PHP
php artisan migrate                                # solo si hay migraciones nuevas
```

### Compilar y subir el frontend (CSS/JS/Tailwind)

AlwaysData mata el proceso (`Killed`) si se intenta `npm install`/`npm run build` en el servidor por límite de memoria del hosting compartido. El build se hace siempre en local y solo se sube la carpeta resultante.

Cualquier cambio que afecte a clases de Tailwind (incluidos cambios solo en archivos Blade, ya que Tailwind escanea las vistas al compilar) requiere repetir este flujo, no solo tocar CSS/JS.

**1. En terminal LOCAL** (nunca en la sesión SSH del servidor — origen y destino serían la misma máquina y el `scp` anidaría la carpeta infinitamente):

```bash
npm run build
```

**2. Subir la carpeta compilada, desde LOCAL:**

```bash
scp -r public/build bufaloelectrico@ssh-bufaloelectrico.alwaysdata.net:~/WebBuffaloLaravel/public/build
```

**3. De vuelta en el servidor, refrescar cachés:**

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

> `vite.config.js` debe tener `build.copyPublicDir: false`. Sin esto, Vite copia toda la carpeta `public` (incluida `build`) dentro de `public/build` en cada compilación, y como `build` ya está dentro de `public`, se anida infinitamente y rompe el `scp` con "Maximum directory depth exceeded".

### Comprobaciones si algo no se ve bien

- Comparar el hash del `.css`/`.js` que carga el navegador (F12 → Network) con el que hay en `public/build/assets` del servidor — si no coincide, es caché del navegador (probar en incógnito o Ctrl+Shift+R).
- `grep -o "clase-a-buscar" public/build/assets/*.css` — confirma si una clase de Tailwind concreta llegó a compilarse.
- Un 404 en la home no siempre es de Apache/mod_rewrite: si `index.php` responde 200 directamente pero la ruta específica no, suele ser un 404 propio de Laravel (ruta, vista o modelo no encontrado), no de configuración del servidor.

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
