<?php

namespace Modules\Category\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Modules\Category\Actions\CategoryCreateAction;
use Modules\Category\Actions\CategoryDeleteAction;
use Modules\Category\Actions\CategoryIndexAction;
use Modules\Category\Actions\CategoryShowAction;
use Modules\Category\Actions\CategoryUpdateAction;
use Modules\Category\DTO\CreateCustomerActionDTO;
use Modules\Category\Requests\CustomerV1Request;
use Modules\Category\Resource\CategoryV1Resource;

class CategoryV1Controller extends Controller
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
    public function store(CustomerV1Request $request)
    {
        return new CategoryV1Resource(app(CategoryCreateAction::class)->execute(new CreateCustomerActionDTO($request->all())));

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
    public function update(CustomerV1Request $request, $id)
    {
        return new CategoryV1Resource(app(CategoryUpdateAction::class)->execute($id, $request->all()));
    }

    public function destroy($id)
    {
        app(CategoryDeleteAction::class)->execute($id);
        return $this->ok('Category deleted successfully');
    }


}
