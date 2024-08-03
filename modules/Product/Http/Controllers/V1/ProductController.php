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
use Modules\Product\DTO\ProductCreateActionDTO;
use Modules\Product\DTO\ProductUpdateActionDTO;
use Modules\Product\Http\Filters\V1\ProductFilter;
use Modules\Product\Http\Requests\ProductV1Request;
use Modules\Product\Http\Requests\V1\ProductStoreRequest;
use Modules\Product\Http\Requests\V1\ProductUpdateRequest;
use Modules\Product\Http\Resource\V1\ProductResource;
use Modules\Product\Models\Product;

class ProductController extends Controller
{
    use ApiResponses;

    /**
     * Display a listing of the resource.
     */
    public function index(ProductFilter $filters)
    {
        return ProductResource::collection(Product::filter($filters)->paginate());
    }

    public function store(ProductStoreRequest $request)
    {
        return new ProductResource(
            app(ProductCreateAction::class)->execute(
                new ProductCreateActionDTO($request->mappedAttributes())
            )
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        return new ProductResource(
            app(ProductUpdateAction::class)->execute(
                new ProductUpdateActionDTO($request->mappedAttributes()),
                $product
            )
        );
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return $this->ok('Product successfully deleted');
    }
}
