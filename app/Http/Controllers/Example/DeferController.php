<?php

namespace App\Http\Controllers\Example;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Sleep;
use Inertia\Inertia;

class DeferController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Example/Defer', [
            'user' => Inertia::defer(function() {
               Sleep::sleep(1);
               return User::where('id', 1)->first();
            }),
        ]);
    }
}
