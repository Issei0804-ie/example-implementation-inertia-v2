<?php

namespace App\Http\Controllers\Example;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MergingPropsController extends Controller
{
    public function __invoke(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = $request->input('perPage', 2);

        return Inertia::render('Example/MergingProps', [
            'users' => Inertia::merge(User::paginate(perPage: $perPage, page: $page)->items())
        ]);
    }
}
