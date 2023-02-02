<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FormController extends Controller
{
    public function show()
    {

        return view('form');
    }

    public function store()
    {
        sleep(1);
        Log::info('Something...');
        return redirect()->route('form');
    }
}
