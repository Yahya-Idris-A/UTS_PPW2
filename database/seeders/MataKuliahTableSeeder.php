<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MataKuliahTableSeeder extends Seeder
{
    private $_posts = [
        ["mata_kuliah" => "Seeder 1", "keminatan" => "Minat seder 1", "alasan" => "Alasan seeder 1"],
        ["mata_kuliah" => "Seeder 2", "keminatan" => "Minat seder 2", "alasan" => "Alasan seeder 2"],
        ["mata_kuliah" => "Seeder 3", "keminatan" => "Minat seder 3", "alasan" => "Alasan seeder 3"],
        ["mata_kuliah" => "Seeder 4", "keminatan" => "Minat seder 4", "alasan" => "Alasan seeder 4"],
        ["mata_kuliah" => "Seeder 5", "keminatan" => "Minat seder 5", "alasan" => "Alasan seeder 5"],
        ["mata_kuliah" => "Seeder 6", "keminatan" => "Minat seder 6", "alasan" => "Alasan seeder 6"],
        ["mata_kuliah" => "Seeder 7", "keminatan" => "Minat seder 7", "alasan" => "Alasan seeder 7"],
        ["mata_kuliah" => "Seeder 8", "keminatan" => "Minat seder 8", "alasan" => "Alasan seeder 8"],
        ["mata_kuliah" => "Seeder 9", "keminatan" => "Minat seder 9", "alasan" => "Alasan seeder 9"],
        ["mata_kuliah" => "Seeder 10", "keminatan" => "Minat seder 10", "alasan" => "Alasan seeder 10"],
        ["mata_kuliah" => "Seeder 11", "keminatan" => "Minat seder 11", "alasan" => "Alasan seeder 11"],
        ["mata_kuliah" => "Seeder 12", "keminatan" => "Minat seder 12", "alasan" => "Alasan seeder 12"],
        ["mata_kuliah" => "Seeder 13", "keminatan" => "Minat seder 13", "alasan" => "Alasan seeder 13"],
        ["mata_kuliah" => "Seeder 14", "keminatan" => "Minat seder 14", "alasan" => "Alasan seeder 14"],
        ["mata_kuliah" => "Seeder 15", "keminatan" => "Minat seder 15", "alasan" => "Alasan seeder 15"],
        ["mata_kuliah" => "Seeder 16", "keminatan" => "Minat seder 16", "alasan" => "Alasan seeder 16"],
        ["mata_kuliah" => "Seeder 17", "keminatan" => "Minat seder 17", "alasan" => "Alasan seeder 17"],
        ["mata_kuliah" => "Seeder 18", "keminatan" => "Minat seder 18", "alasan" => "Alasan seeder 18"],
        ["mata_kuliah" => "Seeder 19", "keminatan" => "Minat seder 19", "alasan" => "Alasan seeder 19"],
        ["mata_kuliah" => "Seeder 20", "keminatan" => "Minat seder 20", "alasan" => "Alasan seeder 20"],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        foreach ($this->_posts as $post) {
            $data[] =[
                'mata_kuliah' => $post['mata_kuliah'],
                'keminatan' => $post['keminatan'],
                'alasan' => $post['alasan']
            ];
        }
        DB::table('mata_kuliahs')->insert($data);
    }
}
