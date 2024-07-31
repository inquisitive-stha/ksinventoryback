<?php

namespace Modules\Role\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Traits\ApiResponses;
use Modules\Role\Actions\RoleStoreAction;
use Modules\Role\Actions\RoleUpdateAction;
use Modules\Role\Actions\RoleDeleteAction;
use Modules\Role\Http\Requests\RoleV1Request;
use Modules\Role\Http\Resource\RoleV1Resource;
use Modules\Role\DTO\CreateRoleActionDTO;

class RoleV1Controller extends Controller
{
    use ApiResponses;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();

        return response()->json([
            'roles' => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleV1Request $request)
    {
        $role = app(RoleStoreAction::class)->execute(new CreateRoleActionDTO($request->all()));
        return response()->json([
               'message' => 'Role added successfully',
               'role'   => new RoleV1Resource($role)
        ]);

        //ok wala haalne
        
        // $name = $request->input('name');
        // $slug = Str::slug($name);
        // Role::create([
        //     'name' => $name,
        //     'slug' => $slug,
        //     'description' => $request->input('description')
        // ]); 

        // return response()->json([
        // 'message' => 'Role added Successfully'
        // ]);
        

        

    }

   
    public function update(RoleV1Request $request, $id)
    {
        
        $role= app(RoleUpdateAction::class)->execute($id,$request->all());
        return response()->json([
            'message' => 'Role updated successfully',
            'role'   => new RoleV1Resource($role)
     ]);

       
}


    public function destroy($id)
    {
        app(RoleDeleteAction::class)->execute($id);
        return response()->json([
            'message' => 'Role deleted successfully'
            
     ]);

    }


}
