<?php
namespace Softvalley\MultiAuthRolePermission\Tests;

use Softvalley\MultiAuthRolePermission\PackageServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setApp()
    {
        parent::setUp();
    }


    public function getPackageProviders($app)
    {
        return [
            PackageServiceProvider::class,
        ];
    }


    protected function getEnvironmentSetUp($app)
    {
       //
    }
}