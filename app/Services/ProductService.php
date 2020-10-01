<?php


namespace App\Services;


use App\Repositries\ProductRepository;
use Illuminate\Http\Request;

class ProductService
{

    /**
     * service to manage all logic code
     */
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * @var BookRepository
     */

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function listItems(Request $request)
    {
        $result = $this->productRepository->listItems($request);
        if ($result)
            return $result->map(function ($row) {
                $discount = ($row->discount_percentage / 100) * $row->unit_price;
                $accept = $discount ? strtotime($row->discount_end_date) > strtotime('now') : '';
                return [
                    "id" => $row->id,
                    "product_category" => $row->product_category,
                    "name" => $row->name,
                    "description" => $row->description,
                    "unit_price" => $row->unit_price,
                    "inventory" => $row->inventory,
                    "user_id" => $row->user_id,
                    "payment_options" => $row->payment_options,
                    "delivery_options" => $row->delivery_options,
                    "discount_start_date" => $row->discount_start_date,
                    "discount_end_date" => $row->discount_end_date,
                    "discount_percentage" => $accept ? $row->discount_percentage : '',
                    "discount" => $accept ? $accept : '',
                    "price_after_discount" => $accept ? $row->unit_price - $discount : '',
                ];
            });;
        return false;
    }

    public function createDiscount(Request $request, int $productId)
    {
        $result = $this->productRepository->createDiscount($request, $productId);
        if ($result)
            return $result;
        return false;
    }


}
