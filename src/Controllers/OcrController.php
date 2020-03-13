<?php

namespace Sanskritick\LaraOCR\Controllers;

use OCR;
use Sanskritick\LaraOCR\Services\OcrAbstract;
use Illuminate\Routing\Controller as Controller;

class OcrController extends Controller
{
    protected $ocr;

    public function home()
    {
        return view('lara_ocr/upload_image');
    }

    public function readImage()
    {
        $image = request('image');
        if (isset($image) && $image->getPathName()) {
            $ocr = app()->make(OcrAbstract::class);
            $parsedText = $ocr->scan($image->getPathName());
            return view('lara_ocr.parsed_text', compact('parsedText'));
        }
    }

    public function test()
    {
        $imagePath = resource_path('lara_ocr/sampleImages/1.jpg');
        return OCR::scan($imagePath);
    }
}
