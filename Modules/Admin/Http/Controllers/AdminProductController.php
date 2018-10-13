<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Repositories\Product\ProductRepositoryInterface as ProductRepository;

class AdminProductController extends AdminBaseController
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        $filter = $this->getFilter();
        $viewData = [
            'products' => $this->productRepository->list($filter),
            'quering' => $request->query()
        ];

        return view('admin::product.list')->with($viewData);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($product_id)
    {
        $viewData = [
            'product' => $this->productRepository->findOrFail($product_id),
            'productDisplayOption' => Product::$mProductDisplayOptions
        ];
        return view('admin::product.edit')->with($viewData);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
