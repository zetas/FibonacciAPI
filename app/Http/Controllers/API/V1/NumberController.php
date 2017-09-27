<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fibonacci;

class NumberController extends Controller
{
    public function fibonacci(Request $request) {

        $this->validate($request, [
            'count' => 'required|numeric|min:1'
        ]);

        return response()->json(Fibonacci::output($request->count));
    }

    //
}
