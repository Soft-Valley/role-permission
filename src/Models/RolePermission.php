<?php

namespace Softvalley\MultiAuthRolePermission\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Softvalley\MultiAuthRolePermission\Database\Factories\RolePermissionFactory;

class RolePermission extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected static function newFactory()
    {
        return RolePermissionFactory::new();
    }
}