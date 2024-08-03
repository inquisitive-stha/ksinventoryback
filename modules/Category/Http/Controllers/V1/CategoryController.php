<?php

namespace Modules\Category\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponses;
use Modules\Category\Actions\CategoryCreateAction;
use Modules\Category\Actions\CategoryUpdateAction;
use Modules\Category\DTO\CategoryCreateActionDTO;
use Modules\Category\DTO\CategoryUpdateActionDTO;
use Modules\Category\Http\Filters\V1\CategoryFilter;
use Modules\Category\Http\Requests\V1\CategoryStoreRequest;
use Modules\Category\Http\Requests\V1\CategoryUpdateRequest;
use Modules\Category\Http\Resource\CategoryResource;
use Modules\Category\Models\Category;

class CategoryController extends Controller
{
    use ApiResponses;
    /**
     * Display a listing of the resource.
     */
    public function index(CategoryFilter $filters)
    {
        return CategoryResource::collection(Category::filter($filters)->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        return new CategoryResource(
            app(CategoryCreateAction::class)->execute(
                new CategoryCreateActionDTO($request->mappedAttributes())
            )
        );

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        return new CategoryResource(
            app(CategoryUpdateAction::class)->execute(
                new CategoryUpdateActionDTO($request->mappedAttributes()),
                $category
            )
        );
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return $this->ok('Category deleted successfully');
    }


}
