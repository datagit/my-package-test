<?php

namespace Datagit\MyPackageTest;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Datagit\MyPackageTest\Skeleton\SkeletonClass
 */
class MyPackageTestFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'my-package-test';
    }
}
