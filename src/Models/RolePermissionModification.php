<?php

namespace Softvalley\MultiAuthRolePermission\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Softvalley\MultiAuthRolePermission\Database\Factories\RolePermissionModificationFactory;

class RolePermissionModification extends Model
{
    use HasFactory;
    protected $table = 'role_permission_modifications';
    protected $guarded = [];
    protected static function newFactory()
    {
        return RolePermissionModificationFactory::new();
    }
}