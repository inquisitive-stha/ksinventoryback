<?php

namespace Modules\Brand\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponses;
use Modules\Brand\Actions\BrandCreateAction;
use Modules\Brand\Actions\BrandUpdateAction;
use Modules\Brand\DTO\BrandCreateActionDTO;
use Modules\Brand\DTO\BrandUpdateActionDTO;
use Modules\Brand\Http\Filters\V1\BrandFilter;
use Modules\Brand\Http\Requests\BrandStoreRequest;
use Modules\Brand\Http\Requests\BrandUpdateRequest;
use Modules\Brand\Http\Resource\BrandResource;
use Modules\Brand\Models\Brand;

class BrandController extends Controller
{
    use ApiResponses;
    /**
     * Display a listing of the resource.
     */
    public function index(BrandFilter $filters)
    {
        return BrandResource::collection(Brand::filter($filters)->paginate());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandStoreRequest $request)
    {
        return new BrandResource(
            app(BrandCreateAction::class)->execute(
                new BrandCreateActionDTO($request->mappedAttributes())
            )
        );

    }

    public function show(Brand $brand)
    {
        return new BrandResource($brand);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(BrandUpdateRequest $request, Brand $brand)
    {
        return new BrandResource(
            app(BrandUpdateAction::class)->execute(
                new BrandUpdateActionDTO($request->mappedAttributes()),
                $brand
            )
        );
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return $this->ok('Brand deleted successfully');
    }


}
