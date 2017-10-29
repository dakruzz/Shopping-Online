<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $totalItems = 0;
    public $item = null;
    public $totalPrice = 0;

    public function __construct($product)
    {
        if($product) {
            $this->item = $product->item;
            $this->totalItems = $product->totalItems;
            $this->totalPrice = $product->totalPrice;
        }
    }

    public function add($product, $id)
    {
        $storedItem = [
          'id' => $product->id,
          'title' => $product->title,
          'price' => $product->price,
          'qty' => 0
        ];
        if(isset($this->item[$id])) {
            $storedItem = $this->item[$id];
        }

        $storedItem['qty']++;
        $this->item[$id] = $storedItem;
        $this->totalItems++;
        $this->totalPrice += $product->price;
    }

}
