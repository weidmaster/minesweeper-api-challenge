<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CellApiController extends Controller
{
    public function show(int $x, int $y): void
    {
        var_dump($x, $y);
    }
}
