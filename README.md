# PT Solusi Koneksi Anda — Company Profile

Company profile website for **PT Solusi Koneksi Anda**, a software house providing
connectivity, IT infrastructure, and software development services.

The project has two sides:

- **Public site** — landing page, company profile, gallery, news/articles, products, and a contact form.
- **Admin panel** — simple login and CRUD for gallery, news, products, and incoming contact messages.

Built with **Laravel 12** and **Bootstrap 5** (served from CDN, no build step).

## Features

**Public**

- Landing page with hero, about, services, latest articles, gallery preview, and a call to action.
- Company profile page.
- Gallery and news listings with detail pages.
- Product listing with detail pages and a "chat via WhatsApp" button.
- Contact form, rate limited to **5 submissions per minute** per visitor.

**Admin** (`/admin`, requires login)

- Dashboard with content counters.
- Create / read / update / delete for **Gallery**, **News**, **Product**, and **Contact** messages.
- Image uploads (stored on the `public` disk).

The UI is blue-and-white only, uses the *Plus Jakarta Sans* font, and ships with a
small internal design system (`.section`, `.band-brand`, `.glass-card`, `.eyebrow`, …)
so every page looks consistent. **No Tailwind, no Vite, no `npm run build`** needed.

## Tech stack

| Layer     | Choice                                                    |
| --------- | --------------------------------------------------------- |
| Backend   | PHP 8.2+ , Laravel 12                                      |
| Database  | MySQL (SQLite also works)                                  |
| Frontend  | Bootstrap 5.3 + Bootstrap Icons + Plus Jakarta Sans (CDN)  |
| Styling   | Inline `<style>` blocks inside the Blade layouts           |
| Assets    | No bundler (Vite/npm are not used by the views)            |

## Requirements

- PHP **8.2 or newer** with the usual Laravel extensions (`mbstring`, `openssl`, `pdo`, `tokenizer`, `xml`, `ctype`, `json`, `bcmath`, `fileinfo`).
- Composer 2
- MySQL 5.7+ / 8.x, or SQLite

> `GD` / `Imagick` are **not** required.

## Installation

```bash
# 1. Get the code
git clone <repository-url> ska-santai
cd ska-santai

# 2. Install PHP dependencies
composer install

# 3. Create the environment file and app key
cp .env.example .env
php artisan key:generate
```

Configure the database in `.env`:

```dotenv
APP_NAME="PT Solusi Koneksi Anda"
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=SKASantai
DB_USERNAME=root
DB_PASSWORD=
```

Then run the migrations, symlink storage, and start the server:

```bash
php artisan migrate --seed
php artisan storage:link
php artisan serve
```

The site is now available at <http://localhost:8000>.

### Fresh install

To wipe everything and recreate the database with sample content:

```bash
php artisan migrate:fresh --seed
```

This drops all tables, re-runs every migration, and then runs `DatabaseSeeder`
(admin user + sample content).

## Default admin account

| Field    | Value                 |
| -------- | --------------------- |
| Login    | `/login`              |
| Email    | `admin@example.com`   |
| Password | `password`            |

> Change the credentials after your first login, or edit
> `database/seeders/DatabaseSeeder.php` before seeding.

## Sample content

`database/seeders/SampleContentSeeder.php` fills the site with 6 products,
4 articles, and 6 gallery photos. It also copies the bundled demo images from
`database/seeders/images/` into `storage/app/public/` the first time it runs,
so the content shows up without any manual upload.

Run it on its own:

```bash
php artisan db:seed --class=SampleContentSeeder
```

The seeder matches records by title, so it is **safe to run multiple times** —
it will not create duplicates. To use your own images, replace the files in
`database/seeders/images/`, delete the matching files under
`storage/app/public/`, and seed again.

The bundled demo photos come from [Pexels](https://www.pexels.com) and are used
under the [Pexels License](https://www.pexels.com/license/) (free for commercial
use, no attribution required).

## Routes

**Public**

| Method | URL                 | Name            |
| ------ | ------------------- | --------------- |
| GET    | `/`                 | `home`          |
| GET    | `/profile`          | `profile`       |
| GET    | `/gallery`          | `gallery.index` |
| GET    | `/gallery/{gallery}`| `gallery.show`  |
| GET    | `/news`             | `news.index`    |
| GET    | `/news/{news}`      | `news.show`     |
| GET    | `/product`          | `product.index` |
| GET    | `/product/{product}`| `product.show`  |
| GET    | `/contact`          | `contact`       |
| POST   | `/contact`          | `contact.store` |

**Authentication**

| Method | URL       | Name     |
| ------ | --------- | -------- |
| GET    | `/login`  | `login`  |
| POST   | `/login`  | —        |
| POST   | `/logout` | `logout` |

**Admin** (middleware `auth`, prefix `/admin`, name prefix `admin.`)

| Method           | URL                  | Name                  |
| ---------------- | -------------------- | --------------------- |
| GET              | `/admin`             | `admin.dashboard`     |
| resource         | `/admin/gallery`     | `admin.gallery.*`     |
| resource         | `/admin/news`        | `admin.news.*`        |
| resource         | `/admin/product`     | `admin.product.*`     |
| resource         | `/admin/contact`     | `admin.contact.*`     |

## Project structure

```
app/
  Http/Controllers/        AuthController, HomeController (public),
                           GalleryController, NewsController,
                           ProductController, ContactController (admin CRUD)
  Models/                  Gallery, News, Product, Contact, User
database/
  migrations/              galleries, news, products, contacts
  seeders/
    DatabaseSeeder.php     admin user + sample content
    SampleContentSeeder.php
    images/                bundled demo photos
resources/views/
  layouts/                 admin.blade.php, public.blade.php (CSS design system)
  welcome.blade.php        public landing page
  public/                  profile, gallery, news, product, contact + partials
  admin/                   dashboard + CRUD views
  auth/                    login
routes/web.php             all routes
```

## Uploads

Images uploaded from the admin panel are stored on the `public` disk, inside:

- `storage/app/public/gallery/`
- `storage/app/public/news/`
- `storage/app/public/product/`

Run `php artisan storage:link` once so they are reachable at `/storage/...`.
Uploads are limited to **2 MB** and the formats `jpg`, `jpeg`, `png`, `webp`
(plus `gif` / `svg` when creating a record).

## Testing

```bash
php artisan test
```

Tests run against an in-memory SQLite database (configured in `phpunit.xml`),
so they never touch your development data.

## License

Released under the [MIT License](LICENSE).
