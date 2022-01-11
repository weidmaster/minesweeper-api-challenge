<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BoardApiController extends Controller
{
    public function show(): JsonResponse
    {
        // setups a 2 x 2 board each time
        $board = [
            [0,0],
            [0,0]
        ];

        return response()->json($board);
    }
}
