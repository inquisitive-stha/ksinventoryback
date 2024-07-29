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

class CategoryV1Controller extends Controller
{
    use ApiResponses;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->ok('Categories fetched successfully', app(ProductIndexAction::class)->execute($request->all()));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductV1Request $request)
    {
        return new ProductV1Resource(app(ProductCreateAction::class)->execute(new CreateProductActionDTO($request->all())));

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return new ProductV1Resource(app(ProductShowAction::class)->execute($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductV1Request $request, $id)
    {
        return new ProductV1Resource(app(ProductUpdateAction::class)->execute($id, $request->all()));
    }

    public function destroy($id)
    {
        app(ProductDeleteAction::class)->execute($id);
        return $this->ok('Category deleted successfully');
    }


}
