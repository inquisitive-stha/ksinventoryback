<?php

namespace Modules\Role\Actions;

use App\Models\Role;
use Illuminate\Support\Str;
use Modules\Role\DTO\CreateRoleActionDTO;

class RoleUpdateAction
{
    public function execute($id, $data)
    {
        $role = Role::findOrFail($id);
        $role->name = $data['name'];
        $role->slug = Str::slug($data['name']);
        $role->description = $data['description'] ?? null;
        $role->updated_at = now();
        $role->save();
        return $role;
    }
}
