<?php
use Illuminate\Support\Facades\Route;
use Softvalley\MultiAuthRolePermission\Http\Controllers\RolePermissionController;
use Symfony\Component\HttpFoundation\Response;

// auth guards
Route::get('/guards', function () {
    return sendResponse(
        'Data fetch successfully.',
        \Softvalley\MultiAuthRolePermission\Models\AuthGuard::all(),
        Response::HTTP_OK
    );
})->name('guards');
