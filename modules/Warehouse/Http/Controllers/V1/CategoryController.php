<?php

namespace Modules\Warehouse\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Modules\Actions\CategoryCreateAction;
use Modules\Actions\CategoryDeleteAction;
use Modules\Actions\CategoryIndexAction;
use Modules\Actions\CategoryShowAction;
use Modules\Actions\CategoryUpdateAction;
use Modules\Category\Requests\CategoryV1Request;
use Modules\Category\Resource\CategoryV1Resource;
use Modules\DTO\CreateCategoryActionDTO;

class CategoryController extends Controller
{
    use ApiResponses;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->ok('Categories fetched successfully', app(CategoryIndexAction::class)->execute($request->all()));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryV1Request $request)
    {
        return new CategoryV1Resource(app(CategoryCreateAction::class)->execute(new CreateCategoryActionDTO($request->all())));

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return new CategoryV1Resource(app(CategoryShowAction::class)->execute($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryV1Request $request, $id)
    {
        return new CategoryV1Resource(app(CategoryUpdateAction::class)->execute($id, $request->all()));
    }

    public function destroy($id)
    {
        app(CategoryDeleteAction::class)->execute($id);
        return $this->ok('Category deleted successfully');
    }


}
