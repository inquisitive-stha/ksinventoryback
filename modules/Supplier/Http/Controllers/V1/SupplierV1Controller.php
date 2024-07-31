<?php

namespace Modules\Supplier\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Modules\Supplier\Http\Requests\SupplierV1Request;
use Modules\Supplier\Actions\SupplierCreateAction;
use Modules\Supplier\Actions\SupplierUpdateAction;
use Modules\Supplier\DTO\CreateSupplierActionDTO;
use Modules\Supplier\Http\Resource\SupplierV1Resource;
use Modules\Supplier\Actions\SupplierDeleteAction;
use Modules\Supplier\Actions\SupplierShowAction;

class SupplierV1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return response()->json($suppliers);
    }


    public function store(SupplierV1Request $request)
    {

        return new SupplierV1Resource(app(SupplierCreateAction::class)->execute(new CreateSupplierActionDTO($request->all())));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new SupplierV1Resource(app(SupplierShowAction::class)->execute($id));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(SupplierV1Request $request, $id)
    {

        $Supplier= app(SupplierUpdateAction::class)->execute ($id, $request->all());
        return response()->json([
            'message' => 'Supplier updated successfully',
            'Supplier' => new SupplierV1Resource($Supplier)
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       app(SupplierDeleteAction::class)->execute($id);
       return response()->json([
        'message' => 'Supplier deleted successfully'
       ]);
    }
}
