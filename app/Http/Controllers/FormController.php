<?php

namespace App\Http\Controllers;

use App\Http\Middleware\GenerateSafeSubmitToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class FormController extends Controller
{

    public function show()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        if ($request->submissionToken !== session()->get('submissionToken')) {
            abort(419);
        }

        session()->put('submissionToken', Str::random(32));

        sleep(1);
        Log::info('Something...');
        return redirect()->route('form');
    }
}
