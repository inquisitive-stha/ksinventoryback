<?php

namespace Modules\Brand\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Modules\Brand\Actions\BrandCreateAction;
use Modules\Brand\Actions\BrandDeleteAction;
use Modules\Brand\Actions\BrandIndexAction;
use Modules\Brand\Actions\BrandShowAction;
use Modules\Brand\Actions\BrandUpdateAction;
use Modules\Brand\DTO\CreateBrandActionDTO;
use Modules\Brand\Requests\BrandV1Request;
use Modules\Brand\Resource\BrandV1Resource;

class BrandV1Controller extends Controller
{
    use ApiResponses;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->ok('Brands fetched successfully', app(BrandIndexAction::class)->execute($request->all()));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandV1Request $request)
    {
        // $request->validate([
        //     'name' => ['required', 'string']
        // ]);

        // $name = $request->input('name');
        // $slug = \Str::slug($name);

        // Brand::create(['name'=> $name,'slug'=> $slug]);

        // return response()->json([
        //     'message' => 'Brand Created Successfully',
        // ]);

        return new BrandV1Resource(app(BrandCreateAction::class)->execute(new CreateBrandActionDTO($request->all())));

    }

    public function show($id)
    {
        return new BrandV1Resource(app(BrandShowAction::class)->execute($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandV1Request $request, $id)
    {

        return new BrandV1Resource(app(BrandUpdateAction::class)->execute($id, $request->all()));
    }

    public function destroy($id)
    {
        app(BrandDeleteAction::class)->execute($id);
        return $this->ok('Brand deleted successfully');
    }


}
