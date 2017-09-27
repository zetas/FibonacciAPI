<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fibonacci;
use Illuminate\Support\Facades\Validator;

class NumberController extends Controller
{
    public function fibonacciSequence(Request $request) {

        $this->validate($request, [
            'count' => 'required|numeric|min:1'
        ]);

        return response()->json(Fibonacci::sequence($request->count));
    }

    public function fibonacciAtNumber($atNumber) {
        $validator = Validator::make(['atNumber' => $atNumber], [
            'atNumber' => 'required|numeric|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => 'Invalid fibonacci sequence number'
            ], 422);
        }

        return response()->json(Fibonacci::atNumber($atNumber));
    }

    //
}
