<?php

namespace Softvalley\MultiAuthRolePermission\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Softvalley\MultiAuthRolePermission\Models\AuthGuard;
use Softvalley\MultiAuthRolePermission\Models\Role;
class RoleFactory extends Factory
{
    protected $model = Role::class;
    public function definition()
    {
        return [
            'auth_guard_id' => AuthGuard::first() ? AuthGuard::first()->id : null,
            'name' => 'Admin',
            'is_admin' => false,
            'note' => 'test'
        ];
    }
}