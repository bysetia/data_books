<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book 
{
    private static $book= [ [
            "id"=>1,
            "nama"=>"Negeri Jancukers",
            "pengarang"=>"Sujiwo Tejo",
            "harga"=>55000
        ],
        [
            "id"=>2,
            "nama"=>"Senja",
            "pengarang"=>"Kepin",
            "harga"=>25000
        ],
        [
            "id"=>3,
            "nama"=>"Hujan",
            "pengarang"=>"Jarganaya",
            "harga"=>15000
        ],
        [
            "id"=>4,
            "nama"=>"Punokawan reborn",
            "pengarang"=>"Zumar",
            "harga"=>50000
        ],
        [
            "id"=>5,
            "nama"=>"Budreg",
            "pengarang"=>"Firdan",
            "harga"=>30000
        ],
    ];

    public static function all()
    {
        return collect(self::$book);
    }
    public static function find($id)
    {
        $book_data = static::all();
        return $book_data->firstWhere('id', $id);
    }
}