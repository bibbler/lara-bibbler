<?php

namespace Bibbler\LaraBibbler\Tests;

use Orchestra\Testbench\TestCase;
use Bibbler\LaraBibbler\LaraBibblerServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaraBibblerServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
