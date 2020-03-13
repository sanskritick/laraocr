<?php

namespace Sanskritick\LaraOCR\Tests;

use PHPUnit\Framework\TestCase;
use Sanskritick\LaraOCR\Facades\OCR;

class OcrTest extends TestCase
{
    public function testOcr()
    {
        $imagePath = __DIR__."../resources/sampleImages/1.jpg";
        $text = OCR::scan($imagePath);
        $this->assertTrue(strpos($text, "Example") !== false);
    }
}
