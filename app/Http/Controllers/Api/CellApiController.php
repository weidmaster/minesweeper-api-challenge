<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

class CellApiController extends Controller
{
    public function show(int $x, int $y): JsonResponse
    {
        if (!session()->has('current')) {
            return response()->json([
                'error' => 'There is no current board to show cells'
            ]);
        }

        $board = session()->get('current');

        try {
            return response()->json([
                'cell' => $board[$x][$y]
            ]);
        } catch (Throwable $e) {
            return response()->json([
                'error' => 'Invalid cell'
            ]);
        }
    }
}
