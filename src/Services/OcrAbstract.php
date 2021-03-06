<?php

namespace Sanskritick\LaraOCR\Services;

use \Symfony\Component\HttpFoundation\File\File;

abstract class OcrAbstract
{
    protected $imagePath;

    protected $image;

    protected $outputText;

    abstract public function scan($imagePath);

    public function setImagePath($imagePath)
    {
        $this->image = new File($imagePath);
        $this->imagePath = $imagePath;
        return $this->image;
    }

    public function getImagePath()
    {
        return $this->imagePath;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getOutput()
    {
        return $this->outputText;
    }
}
