<?php

namespace Sanskritick\LaraOCR\Services;

class Shell
{
    public function execute($command)
    {
        return trim(`{$command}`);
    }
}
