<?php

namespace App\Http\Controllers\Example;


use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\CarbonImmutable;
use Illuminate\Support\Sleep;
use Inertia\Inertia;

class PrefetchingController extends Controller
{
    public function index()
    {
        return Inertia::render('Example/Prefetching/Index', [
            'users' => User::all(),
        ]);
    }

    public function show(User $user)
    {
        Sleep::sleep(1);
        return Inertia::render('Example/Prefetching/Show', [
            'user' => $user,
        ]);
    }
}
