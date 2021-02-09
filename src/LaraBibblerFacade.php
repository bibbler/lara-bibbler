<?php

namespace Bibbler\LaraBibbler;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bibbler\LaraBibbler\Skeleton\SkeletonClass
 */
class LaraBibblerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lara-bibbler';
    }
}
