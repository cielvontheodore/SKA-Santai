<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'hero_label',
        'hero_title',
        'hero_subtitle',
        'intro_eyebrow',
        'intro_title',
        'intro_text_1',
        'intro_text_2',
        'fact_1_value',
        'fact_1_label',
        'fact_2_value',
        'fact_2_label',
        'fact_3_value',
        'fact_3_label',
        'fact_4_value',
        'fact_4_label',
        'vision_text',
        'mission_text',
        'values_eyebrow',
        'values_title',
        'values_subtitle',
        'value_1_title',
        'value_1_desc',
        'value_2_title',
        'value_2_desc',
        'value_3_title',
        'value_3_desc',
        'value_4_title',
        'value_4_desc',
        'cta_title',
        'cta_subtitle',
        'cta_button_label',
    ];

    /**
     * Default content, mirroring the original hardcoded profile page.
     *
     * @return array<string, string>
     */
    public static function defaults(): array
    {
        return [
            'hero_label' => 'Tentang Kami',
            'hero_title' => 'Profil Perusahaan',
            'hero_subtitle' => 'Mengenal lebih dekat '.config('app.name').'.',

            'intro_eyebrow' => 'Tentang Kami',
            'intro_title' => 'Mitra teknologi untuk pertumbuhan bisnis Anda',
            'intro_text_1' => config('app.name').' adalah perusahaan yang bergerak di bidang solusi koneksi, '
                .'infrastruktur teknologi, dan pengembangan perangkat lunak. Kami membantu bisnis membangun '
                .'fondasi digital yang stabil, aman, dan siap berkembang.',
            'intro_text_2' => 'Berdiri dengan semangat kolaborasi, kami percaya bahwa teknologi terbaik lahir dari '
                .'pemahaman mendalam terhadap kebutuhan klien.',

            'fact_1_value' => '250+',
            'fact_1_label' => 'Klien dari berbagai sektor',
            'fact_2_value' => '2015',
            'fact_2_label' => 'Tahun mulai beroperasi',
            'fact_3_value' => '24/7',
            'fact_3_label' => 'Dukungan teknis',
            'fact_4_value' => 'SLA',
            'fact_4_label' => 'Jaminan mutu layanan',

            'vision_text' => 'Menjadi mitra teknologi terpercaya yang menghadirkan solusi digital berdampak '
                .'bagi pertumbuhan bisnis di Indonesia.',
            'mission_text' => "Membangun software berkualitas dan sesuai kebutuhan.\n"
                ."Mengutamakan kepuasan dan kepercayaan klien.\n"
                .'Berinovasi secara berkelanjutan.',

            'values_eyebrow' => 'Prinsip Kami',
            'values_title' => 'Nilai yang Kami Pegang',
            'values_subtitle' => 'Prinsip yang memandu setiap pekerjaan kami.',

            'value_1_title' => 'Kualitas',
            'value_1_desc' => 'Standar terbaik di setiap baris kode dan desain.',
            'value_2_title' => 'Kolaborasi',
            'value_2_desc' => 'Bekerja bersama klien sebagai satu tim.',
            'value_3_title' => 'Sigap',
            'value_3_desc' => 'Respons cepat dan tepat waktu.',
            'value_4_title' => 'Terpercaya',
            'value_4_desc' => 'Amanah dan transparan dalam setiap proyek.',

            'cta_title' => 'Butuh solusi untuk bisnis Anda?',
            'cta_subtitle' => 'Diskusikan kebutuhan Anda bersama tim kami.',
            'cta_button_label' => 'Hubungi Kami',
        ];
    }

    /**
     * The single profile record, created with defaults on first access.
     */
    public static function current(): self
    {
        return static::query()->firstOrCreate(['id' => 1], static::defaults());
    }
}
