<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class QueryController extends Controller
{
    public function query(Request $request)
    {
        Log::info("yo");

        Log::info($request);
        return $request;
    }
}
