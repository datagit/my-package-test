<?php

namespace Datagit\MyPackageTest\Tests;

use Orchestra\Testbench\TestCase;
use Datagit\MyPackageTest\MyPackageTestServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [MyPackageTestServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
