<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = "product";
    protected $fillable = ['title', 'imagePath', 'description', 'price', 'category'];

    public function get()
    {
        $products = DB::table('product')->get();
        return $products;
    }

    public function getById($id)
    {
        $results = DB::table('product')->where('id', $id)->first(); // product
        return $results;
    }

}
