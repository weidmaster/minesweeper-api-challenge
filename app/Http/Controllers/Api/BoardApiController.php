<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoardApiController extends Controller
{
    public function show(): void
    {
        var_dump('hello board!');
    }
}
