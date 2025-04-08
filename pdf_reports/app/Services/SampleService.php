<?php

namespace App\Services;

class SampleService
{

    public function log($string)
    {
        logger($string);
        //log::channel('custom')->info($string);
    }
}