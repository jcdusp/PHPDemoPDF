<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DependencyController extends Controller
{
    private $sampleService;
    
    public function _construct(SampleService $sampleService)
    {
        $this->sampleService = $sampleService;
    }
    public function Invoke(Request $request,SampleService $sampleService)
    {
        //$sampleService =app()->make(SampleService::class);
        
        $this->sampleService->log('Hi');

        $this->check1();

        return [1,2,3, $request->input('name')];
    }

    private function check1()
    {
        //$sampleService =app()->make(SampleService::class);

        $this->sampleService->log('Hello');

        $this->Check2();
    }

    private function check2()
    {
        //$sampleService =app()->make(SampleService::class);

        $this->sampleService->log('Hello world');

       
    }


}
