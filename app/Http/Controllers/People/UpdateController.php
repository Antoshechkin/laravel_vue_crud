<?php

namespace App\Http\Controllers\People;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\People\UpdateRequest;
use App\Models\People;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, People $people)
    {
        $data = $request->validated();
        $people->update($data);
        return response([]);
    }
}
