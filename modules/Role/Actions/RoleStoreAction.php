<?php

namespace Modules\Role\Actions;

use App\Models\Role;
use Illuminate\Support\Str;
use Modules\Role\DTO\CreateRoleActionDTO;

class RoleStoreAction
{
    public function execute(CreateRoleActionDTO $actionDTO)
    {
        return Role::create([
            'name' => $actionDTO->name,
            'slug' => Str::slug($actionDTO->name),
            'description' => $actionDTO->description,
        ]);
    }
}
