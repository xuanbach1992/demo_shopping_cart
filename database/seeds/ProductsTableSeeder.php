<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product();
        $product->name = "Quan au";
        $product->description = "Di kem voi ao  vest";
        $product->price = "300000";
        $product->image = "upload/quan_au.jpeg";
        $product->save();

        $product = new \App\Product();
        $product->name = "Quan kaki";
        $product->description = "day la quan kaki";
        $product->price = "200000";
        $product->image = "upload/quan_kaki.jpeg";
        $product->save();

        $product = new \App\Product();
        $product->name = "Quan jean";
        $product->description = "sdfgg";
        $product->price = "120000";
        $product->image = "upload/quan_jean.jpeg";
        $product->save();

    }
}
