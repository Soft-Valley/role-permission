<?php

namespace Softvalley\MultiAuthRolePermission\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Softvalley\MultiAuthRolePermission\Models\AuthGuard;
use Softvalley\MultiAuthRolePermission\Models\Role;

class CreateAuth extends Command
{
    protected $signature = 'add:auth {name}';

    protected $description = 'create auth guard.';

    public function handle()
    {
        $auth = $this->argument('name');
        $this->info("Creating auth guard $auth ...");
        $this->newLine();

        if ($this->createAuthGuard($auth)){
            $this->info('Auth guard created successfully.');
        }else{
            $this->warn('Auth guard already exists.Please use different guard.');
        }
    }

    private function createAuthGuard($name)
    {
        if (config('package.authGuard', true)) {
            $this->warn('Creating auth guard');
            // check auth guard exists
            if (! AuthGuard::where('name',$name)->exists()){
                //create auth guard
                $auth_guard = AuthGuard::create([
                    'name' => $name,
                    'model' => null,
                ]);
                //create role
                Role::create([
                    'auth_guard_id' => $auth_guard->id,
                    'name' => 'Main',
                    'is_admin'=> true,
                    'note'=> null
                ]);
                $this->newLine();
                return true;
            }else{
                $this->newLine();
                return false;
            }
        }
    }

}