<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Models\People;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(People $people)
    {
        $people->delete();
        return response([]);
    }
}
