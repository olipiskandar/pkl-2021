<?php

namespace Database\Seeders;

use App\Models\Pengarang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PengarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 2000; $i++) {
            $pengarang = new Pengarang();
            $pengarang->nama = Str::random(10);
            $pengarang->alamat = Str::random(10);
            $pengarang->save();
        }
    }
}
