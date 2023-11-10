<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datamahasiswa 
{
    private static $data_posts = [
        [
            "NIM" => "21.31.0002",
             "Nama" => "Bayu Aditya Saputra",
             "Jurusan" => "D3-Sistem Informasi",
         ],
         [
            "NIM" => "21.31.0001",
             "Nama" => "Anisa Putri Tridancia Tuka",
             "Jurusan" => "D3-Sistem Informasi",
         ],
         [
            "NIM" => "21.31.0003",
             "Nama" => "Fila Akbar",
             "Jurusan" => "D3-Sistem Informasi",
         ],
         [
            "NIM" => "21.31.0004",
             "Nama" => "Afifah Fauziah",
             "Jurusan" => "D3-Sistem Informasi",
         ],
         [
            "NIM" => "21.31.0011",
             "Nama" => "Damaysah Kiki Pratiwi",
             "Jurusan" => "D3-Sistem Informasi",
         ],
        ];
        public static function all()
        {
            return self::$data_posts;
        }
        public static function getBySlack($slack)
    {
        foreach (self::$data_posts as $post) {
            if ($post['NIM'] === $slack) {
                return $post;
            }
        }
        return null; // Return null jika tidak ditemukan
    }
}
