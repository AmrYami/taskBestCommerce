<?php


namespace App\Repositries;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductRepository
{
    /**
     * @var Product
     */
    private $product;

    /**
     * repository to manage all proccess with database
     */

    public function __construct(Product $product)
    {

        $this->product = $product;
    }

    public function listItems(Request $request)
    {
        $pageNumber = $request->page ?? 1;
        $products = $this->product->query();
        if ($request->orderPrice) {
            $sort = $request->orderPrice == 'lowToHigh' ? 'ASC' : 'DESK';
            $products->orderBy('unit_price', $sort);
        }
        if ($request->orderInventory) {
            $sort = $request->orderInventory == 'lowToHigh' ? 'ASC' : 'DESK';
            $products->orderBy('inventory', $sort);
        }
        $products->where('inventory', '>', 4);

        $products = $products->paginate(5, ['*'], 'page', $pageNumber);
        if ($products)
            return $products;
        return false;
    }

    public function createDiscount(Request $request, $productId)
    {
        $product = $this->product->where('id', $productId)->where('user_id', auth()->user()->id)->update($request->all());
        if ($product)
            return $product;
        return false;
    }

}
