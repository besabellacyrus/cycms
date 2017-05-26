<?php 

namespace Sai\Cms\Facades;

use Illuminate\Support\Facades\Facade;

class Cms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sai-cms';
    }
}