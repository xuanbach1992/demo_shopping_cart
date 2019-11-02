<?php


namespace App;


class Cart
{
    public $products = null;
    public $totalPrice = 0;
    public $totalProduct = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->products = $oldCart->products;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalProduct = $oldCart->totalProduct;
        }
    }

    public function add($product)
    {
        $storeProduct = [
            "product" => $product,
            "price" => 0,
            "totalQty" => 0,
        ];
        if ($this->products) {
            if (array_key_exists($product->id, $this->products)) {
                $storeProduct = $this->products[$product->id];
                $this->totalProduct = count($this->products);
            } else {
                $this->totalProduct++;
            }
        } else {
            $this->totalProduct++;
        }
        $storeProduct["totalQty"]++;
        $storeProduct["price"] = $product->price * $storeProduct["totalQty"];

        $this->products[$product->id] = $storeProduct;

        $this->totalPrice += $product->price;
    }

}
