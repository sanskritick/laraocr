<?php

namespace Sanskritick\LaraOCR\Services;

class Tesseract extends OcrAbstract
{
    protected $command;

    public function scan($imagePath)
    {
        $this->setImagePath($imagePath);
        $shell = new Shell();

        $executable = config('lara_ocr.engines.tesseract.executable', 'tesseract');

        $command = trim("$executable $imagePath stdout quiet");

        return $shell->execute($command);
    }
}
