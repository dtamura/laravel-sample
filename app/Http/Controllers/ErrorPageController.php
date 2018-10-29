<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorPageController extends Controller
{
    //
    public function __construct()
    {
    }

    public function getAlwaysError(Request $request, int $code = null)
    {
            
        if (in_array($code, array(401, 403, 404, 500, 501, 502, 503, 504))) {
            abort($code);
        }

        return view('welcome');
    }
}
