<?php

namespace Modules\Product\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Modules\Product\Actions\ProductCreateAction;
use Modules\Product\Actions\ProductDeleteAction;
use Modules\Product\Actions\ProductIndexAction;
use Modules\Product\Actions\ProductShowAction;
use Modules\Product\Actions\ProductUpdateAction;
use Modules\Product\DTO\CreateProductActionDTO;
use Modules\Product\Requests\ProductV1Request;
use Modules\Product\Resource\ProductV1Resource;

class ProductV1Controller extends Controller
{
    use ApiResponses;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = app(ProductIndexAction::class)->execute($request->all());
        return $this->ok('Products retrieved successfully', ProductV1Resource::collection($products));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductV1Request $request)
    {
        $product = app(ProductCreateAction::class)->execute(new CreateProductActionDTO($request->all()));
        return $this->ok('Product created successfully', new ProductV1Resource($product));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = app(ProductShowAction::class)->execute($id);
        return $this->ok('Product retrieved successfully', new ProductV1Resource($product));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductV1Request $request, $id)
    {
        $productDTO = new CreateProductActionDTO($request->validated());
        $product = app(ProductUpdateAction::class)->execute($id, $productDTO);
        return $this->ok('Product updated successfully', new ProductV1Resource($product));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = app(ProductDeleteAction::class)->execute($id);
        return $this->ok('Product deleted successfully');
    }
}
