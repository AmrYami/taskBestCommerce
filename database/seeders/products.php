<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'product_category' => 'Electronics',
                'name' => 'IPhone',
                'description' => 'good phone',
                'unit_price' => 10000,
                'inventory' => 10,
                'payment_options' => 'Installments',
                'delivery_options' => 'now',
                'user_id' => 1
            ],
            [
                'product_category' => 'Electronics',
                'name' => 'MI10',
                'description' => 'good phone',
                'unit_price' => 10000,
                'inventory' => 15,
                'payment_options' => 'Installments',
                'delivery_options' => 'now',
                'user_id' => 1
            ],
            [
                'product_category' => 'Electronics',
                'name' => 'NOTE 10',
                'description' => 'good phone',
                'unit_price' => 15000,
                'inventory' => 14,
                'payment_options' => 'Direct',
                'delivery_options' => 'now',
                'user_id' => 1
            ],
            [
                'product_category' => 'Electronics',
                'name' => 'TV',
                'description' => 'good TV',
                'unit_price' => 12000,
                'inventory' => 14,
                'payment_options' => 'Installments',
                'delivery_options' => 'now',
                'user_id' => 1
            ],
            [
                'product_category' => 'Electronics',
                'name' => 'Laptop',
                'description' => 'good Laptop',
                'unit_price' => 29000,
                'inventory' => 7,
                'payment_options' => 'Installments',
                'delivery_options' => 'now',
                'user_id' => 1
            ],
            [
                'product_category' => 'Electronics',
                'name' => 'OPPO',
                'description' => 'good phone',
                'unit_price' => 10000,
                'inventory' => 4,
                'payment_options' => 'Installments',
                'delivery_options' => 'now',
                'user_id' => 2
            ],
            [
                'product_category' => 'Electronics',
                'name' => 'samsung',
                'description' => 'good phone',
                'unit_price' => 10000,
                'inventory' => 10,
                'payment_options' => 'Installments',
                'delivery_options' => 'now',
                'user_id' => 2
            ],
            [
                'product_category' => 'Electronics',
                'name' => 'IPhone',
                'description' => 'good phone',
                'unit_price' => 10000,
                'inventory' => 10,
                'payment_options' => 'Installments',
                'delivery_options' => 'now',
                'user_id' => 3
            ],
            [
                'product_category' => 'Electronics',
                'name' => 'samsung',
                'description' => 'good phone',
                'unit_price' => 10000,
                'inventory' => 10,
                'payment_options' => 'Installments',
                'delivery_options' => 'now',
                'user_id' => 3
            ],
            [
                'product_category' => 'Electronics',
                'name' => 'IPhone',
                'description' => 'good phone',
                'unit_price' => 10000,
                'inventory' => 10,
                'payment_options' => 'Installments',
                'delivery_options' => 'now',
                'user_id' => 4
            ],
            [
                'product_category' => 'Electronics',
                'name' => 'MI10',
                'description' => 'good phone',
                'unit_price' => 10000,
                'inventory' => 15,
                'payment_options' => 'Installments',
                'delivery_options' => 'now',
                'user_id' => 4
            ],
            [
                'product_category' => 'Electronics',
                'name' => 'NOTE 10',
                'description' => 'good phone',
                'unit_price' => 15000,
                'inventory' => 14,
                'payment_options' => 'Direct',
                'delivery_options' => 'now',
                'user_id' => 4
            ],
        ];
        Product::insert($data);
    }
}
