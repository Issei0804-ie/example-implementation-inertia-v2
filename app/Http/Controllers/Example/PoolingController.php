<?php

namespace App\Http\Controllers\Example;


use App\Http\Controllers\Controller;
use Carbon\CarbonImmutable;
use Inertia\Inertia;

class PoolingController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Example/Pooling', [
            'currentTime' => CarbonImmutable::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
