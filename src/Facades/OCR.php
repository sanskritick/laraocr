<?php


namespace Sanskritick\LaraOCR\Facades;

use Illuminate\Support\Facades\Facade;

class OCR extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'OCR';
    }
}
