<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotmanController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function (BotMan $botman, $message) {
            $message = $this->cleanMessage($message);

            // Map synonyms to standard questions
            $message = $this->mapSynonyms($message);

            switch ($message) {
                case 'cv':
                    $botman->reply('CV Sumber Rejeki adalah sebuah perusahaan yang bergerak di bidang konstruksi dan perdagangan umum.');
                    break;
                case 'apa itu sumber rejeki':
                case 'sumber rejeki':
                    $botman->reply('CV Sumber Rejeki adalah sebuah perusahaan yang bergerak di bidang konstruksi dan perdagangan umum.');
                    break;
                case 'apa itu cv':
                    $botman->reply('CV adalah singkatan dari Curriculum Vitae, yang berarti daftar riwayat hidup.');
                    break;
                case 'hubungi customer service':
                    $botman->reply('Anda dapat menghubungi customer service kami melalui email di cs@sumberrejeki.com atau telepon di (021) 12345678.');
                    break;
                case 'alamat kantor':
                    $botman->reply('Alamat kantor kami adalah Jl. Kebon Jeruk No. 123, Jakarta Barat.');
                    break;
                case 'jam operasional':
                    $botman->reply('Jam operasional kami adalah Senin-Jumat, pukul 08:00 - 17:00.');
                    break;
                case 'produk tersedia':
                    $botman->reply('Kami menyediakan berbagai produk konstruksi dan perdagangan umum. Untuk informasi lebih lanjut, kunjungi website kami di www.sumberrejeki.com.');
                    break;
                default:
                    // Coba gunakan Levenshtein distance untuk mencocokkan pesan
                    $closest = $this->findClosestMatch($message, array_keys($this->getSynonyms()));
                    if ($closest) {
                        $message = $this->mapSynonyms($closest);
                        $botman->reply($this->getReplyForMessage($message));
                    } else {
                        $botman->reply('Maaf, saya tidak mengerti pertanyaan Anda. Silakan tanyakan sesuatu yang lain atau hubungi customer service kami untuk bantuan lebih lanjut.');
                    }
                    break;
            }
        });

        $botman->listen();
    }

    private function cleanMessage($message)
    {
        // Mengubah ke huruf kecil dan menghapus karakter khusus
        $message = strtolower($message);
        $message = preg_replace('/[^a-z0-9\s]/', '', $message);
        return trim($message);
    }

    private function mapSynonyms($message)
    {
        // Pemetaan sinonim ke pertanyaan standar
        $synonyms = $this->getSynonyms();

        foreach ($synonyms as $standard => $terms) {
            if (in_array($message, $terms)) {
                return $standard;
            }
        }

        return $message;
    }

    private function getSynonyms()
    {
        // Sinonim untuk pertanyaan umum
        return [
            'cv' => ['curriculum vitae', 'cv'],
            'apa itu sumber rejeki' => ['apa itu sumber rejeki', 'sumber rejeki'],
            'apa itu cv' => ['apa itu cv', 'cv itu apa'],
            'hubungi customer service' => ['hubungi customer service', 'kontak cs', 'hubungi cs'],
            'alamat kantor' => ['alamat kantor', 'lokasi kantor', 'dimana kantor'],
            'jam operasional' => ['jam operasional', 'jam buka', 'jam kerja'],
            'produk tersedia' => ['produk tersedia', 'produk apa saja', 'produk'],
        ];
    }

    private function getReplyForMessage($message)
    {
        // Tanggapan untuk pertanyaan standar
        $responses = [
            'cv' => 'CV Sumber Rejeki adalah sebuah perusahaan yang bergerak di bidang konstruksi dan perdagangan umum.',
            'apa itu sumber rejeki' => 'CV Sumber Rejeki adalah sebuah perusahaan yang bergerak di bidang konstruksi dan perdagangan umum.',
            'apa itu cv' => 'CV adalah singkatan dari Curriculum Vitae, yang berarti daftar riwayat hidup.',
            'hubungi customer service' => 'Anda dapat menghubungi customer service kami melalui email di cs@sumberrejeki.com atau telepon di (021) 12345678.',
            'alamat kantor' => 'Alamat kantor kami adalah Jl. Kebon Jeruk No. 123, Jakarta Barat.',
            'jam operasional' => 'Jam operasional kami adalah Senin-Jumat, pukul 08:00 - 17:00.',
            'produk tersedia' => 'Kami menyediakan berbagai produk konstruksi dan perdagangan umum. Untuk informasi lebih lanjut, kunjungi website kami di www.sumberrejeki.com.',
        ];

        return $responses[$message] ?? 'Maaf, saya tidak mengerti pertanyaan Anda. Silakan tanyakan sesuatu yang lain atau hubungi customer service kami untuk bantuan lebih lanjut.';
    }

    private function findClosestMatch($input, $words)
    {
        $shortest = -1;
        $closest = null;

        foreach ($words as $word) {
            $lev = levenshtein($input, $word);

            if ($lev == 0) {
                $closest = $word;
                $shortest = 0;
                break;
            }

            if ($lev <= $shortest || $shortest < 0) {
                $closest = $word;
                $shortest = $lev;
            }
        }

        return $closest;
    }
}
