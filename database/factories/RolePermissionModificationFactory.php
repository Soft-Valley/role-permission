<?php

namespace Softvalley\MultiAuthRolePermission\Database\Factories;

use Softvalley\MultiAuthRolePermission\Models\AuthGuard;
use Softvalley\MultiAuthRolePermission\Models\Role;
use Softvalley\MultiAuthRolePermission\Models\RolePermissionModification;

class RolePermissionModificationFactory extends \Illuminate\Database\Eloquent\Factories\Factory
{
    protected $model = RolePermissionModification::class;
    public function definition()
    {
        return [
            'auth_guard_id' => AuthGuard::first() ? AuthGuard::first()->id : null,
            'role_id' => Role::first() ? Role::first()->id : null,
            'auth_user_id' => 1,
            'module' => 'Test',
            'operation' => 'list',
            'route' => 'test',
            'url' => 'test',
            'is_permit' => 0,
            'route_name' => 'test',
            'method' => 'get'
        ];
    }
}