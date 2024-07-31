<?php

namespace Modules\Role\Actions;

use App\Models\Role;

class RoleDeleteAction
{
    public function execute($id)
    {
        return Role::where('id',$id)->delete();
    }
}
