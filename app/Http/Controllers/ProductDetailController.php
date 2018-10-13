<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Frontend\Product\ProductRepositoryInterface as ProductRepository;

class ProductDetailController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function showProduct($productId)
    {
        $viewData = [
            'product' => $this->productRepository->getDetailProduct($productId)
        ];

        return view('product_detail')->with($viewData);
    }
}
