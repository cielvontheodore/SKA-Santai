<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\News;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

/**
 * Seeds realistic sample content (products, news, gallery) together with the
 * bundled demo photos.
 *
 * The photos live in database/seeders/images and are published to the public
 * disk (storage/app/public) the first time the seeder runs, so the content is
 * ready to view without any manual upload. Safe to run more than once: existing
 * records are matched by title and left untouched.
 */
class SampleContentSeeder extends Seeder
{
    public function run(): void
    {
        $this->publishImages();

        foreach ($this->products() as $product) {
            Product::firstOrCreate(['title' => $product['title']], $product);
        }

        foreach ($this->news() as $article) {
            News::firstOrCreate(['title' => $article['title']], $article);
        }

        foreach ($this->galleries() as $photo) {
            Gallery::firstOrCreate(['title' => $photo['title']], $photo);
        }
    }

    /**
     * Copy the bundled demo images into the public disk (skipping files that
     * are already there).
     */
    private function publishImages(): void
    {
        $source = database_path('seeders/images');
        $disk = Storage::disk('public');

        if (! File::isDirectory($source)) {
            return;
        }

        foreach (File::allFiles($source) as $file) {
            $relativePath = str_replace('\\', '/', $file->getRelativePathname());

            if (! $disk->exists($relativePath)) {
                $disk->put($relativePath, File::get($file->getPathname()));
            }
        }
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function products(): array
    {
        $whatsapp = 'https://wa.me/6281234567890';

        return [
            [
                'title' => 'Aplikasi Manajemen Proyek',
                'description' => 'Aplikasi berbasis web untuk mengelola proyek, tugas, dan tim dalam satu dasbor. '
                    . 'Dilengkapi papan Kanban, pelacakan progres, serta laporan otomatis untuk memantau pekerjaan '
                    . 'secara real-time.',
                'image' => 'product/aplikasi-manajemen-proyek.jpg',
                'price' => 15000000,
                'contact' => $whatsapp,
            ],
            [
                'title' => 'Dashboard Analitik Data',
                'description' => 'Ubah data operasional menjadi visualisasi yang mudah dibaca. Cocok untuk memantau '
                    . 'penjualan, performa tim, dan indikator bisnis penting lainnya dalam satu tampilan.',
                'image' => 'product/dashboard-analitik.jpg',
                'price' => 25000000,
                'contact' => $whatsapp,
            ],
            [
                'title' => 'Instalasi & Pemeliharaan Jaringan',
                'description' => 'Perancangan, pemasangan, dan perawatan jaringan kantor yang rapi dan stabil, '
                    . 'mulai dari penataan kabel, konfigurasi perangkat, hingga pemantauan berkala.',
                'image' => 'product/infrastruktur-jaringan.jpg',
                'price' => 12000000,
                'contact' => $whatsapp,
            ],
            [
                'title' => 'Layanan Keamanan Siber',
                'description' => 'Audit keamanan, pemantauan ancaman, dan penguatan sistem untuk melindungi data '
                    . 'serta layanan digital perusahaan Anda dari risiko kebocoran dan serangan.',
                'image' => 'product/keamanan-siber.jpg',
                'price' => 18000000,
                'contact' => $whatsapp,
            ],
            [
                'title' => 'Pengembangan Aplikasi Mobile',
                'description' => 'Pembuatan aplikasi Android dan iOS yang cepat, ringan, dan sesuai kebutuhan '
                    . 'operasional bisnis Anda, siap dipublikasikan ke Play Store maupun App Store.',
                'image' => 'product/aplikasi-mobile.jpg',
                'price' => 20000000,
                'contact' => $whatsapp,
            ],
            [
                'title' => 'Cloud & Infrastruktur Server',
                'description' => 'Migrasi dan pengelolaan server ke lingkungan cloud yang aman dan mudah '
                    . 'diskalakan, sehingga layanan Anda tetap tersedia kapan pun dibutuhkan.',
                'image' => 'product/cloud-dan-infrastruktur.jpg',
                'price' => 30000000,
                'contact' => $whatsapp,
            ],
        ];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function news(): array
    {
        return [
            [
                'title' => 'Praktik Terbaik Pengembangan Aplikasi Web di 2026',
                'description' => 'Perkembangan teknologi web berjalan sangat cepat. Pada artikel ini kami merangkum '
                    . 'praktik terbaik yang kami terapkan dalam mengembangkan aplikasi web, mulai dari pemilihan '
                    . 'arsitektur, penulisan kode yang mudah dirawat, hingga pengujian otomatis sebelum aplikasi '
                    . 'dirilis ke pengguna.',
                'image' => 'news/pengembangan-aplikasi-web.jpg',
            ],
            [
                'title' => 'Kolaborasi Tim Developer: Kunci Proyek Selesai Tepat Waktu',
                'description' => 'Proyek yang sukses bukan hanya soal kemampuan teknis, tetapi juga cara tim bekerja '
                    . 'sama. Kami membahas bagaimana komunikasi rutin, pembagian tugas yang jelas, dan penggunaan '
                    . 'alat kolaborasi membantu kami menyelesaikan setiap proyek sesuai jadwal.',
                'image' => 'news/kolaborasi-tim-developer.jpg',
            ],
            [
                'title' => 'Meningkatkan Produktivitas Developer dengan Alur Kerja Modern',
                'description' => 'Alur kerja yang rapi membuat pekerjaan lebih fokus dan mengurangi kesalahan. '
                    . 'Simak kebiasaan dan perkakas yang kami gunakan sehari-hari untuk meningkatkan produktivitas '
                    . 'tim pengembang di PT Solusi Koneksi Anda.',
                'image' => 'news/produktivitas-developer.jpg',
            ],
            [
                'title' => 'Workshop Teknologi untuk Mitra Bisnis Kami',
                'description' => 'Kami secara rutin mengadakan workshop bagi mitra bisnis untuk membahas '
                    . 'pemanfaatan teknologi dalam operasional sehari-hari. Kegiatan ini menjadi ajang berbagi '
                    . 'pengalaman sekaligus mendengarkan langsung kebutuhan para mitra.',
                'image' => 'news/workshop-teknologi.jpg',
            ],
        ];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function galleries(): array
    {
        return [
            [
                'title' => 'Penghargaan Tim Terbaik 2025',
                'description' => 'Apresiasi untuk tim yang berhasil menyelesaikan proyek terbesar sepanjang tahun '
                    . 'dengan hasil yang melampaui harapan klien.',
                'image' => 'gallery/penghargaan-tim.jpg',
            ],
            [
                'title' => 'Suasana Kantor Baru Kami',
                'description' => 'Ruang kerja yang nyaman dan mendukung kolaborasi, tempat kami mengembangkan '
                    . 'solusi untuk para klien.',
                'image' => 'gallery/kantor-modern.jpg',
            ],
            [
                'title' => 'Rapat Koordinasi dengan Klien',
                'description' => 'Sesi diskusi bersama klien untuk menyelaraskan kebutuhan dan memastikan setiap '
                    . 'proyek berjalan sesuai rencana.',
                'image' => 'gallery/rapat-klien.jpg',
            ],
            [
                'title' => 'Kebersamaan Tim Solusi Koneksi Anda',
                'description' => 'Kegiatan kebersamaan yang mempererat kerja sama antar anggota tim di luar jam '
                    . 'kerja.',
                'image' => 'gallery/kebersamaan-tim.jpg',
            ],
            [
                'title' => 'Gedung Kantor Pusat',
                'description' => 'Gedung kantor pusat kami yang berlokasi di Jakarta, siap melayani kebutuhan '
                    . 'teknologi mitra bisnis.',
                'image' => 'gallery/gedung-kantor.jpg',
            ],
            [
                'title' => 'Sesi Brainstorming Produk',
                'description' => 'Tim produk dan pengembang berdiskusi merancang fitur-fitur baru sebelum masuk '
                    . 'tahap pengembangan.',
                'image' => 'gallery/sesi-brainstorming.jpg',
            ],
        ];
    }
}
