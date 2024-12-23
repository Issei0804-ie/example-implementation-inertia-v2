<?php

namespace App\Http\Controllers\Example;


use App\Http\Controllers\Controller;
use Illuminate\Support\Sleep;
use Inertia\Inertia;

class LoadWhenVisibleController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Example/LoadWhenVisible', [
            'message' => Inertia::lazy(function() {
                Sleep::sleep(2);
                return 'viewed!!';
            })
        ]);
    }
}
