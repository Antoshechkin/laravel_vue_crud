<?php

namespace App\Http\Controllers\People;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\People\CreatePeopleRequest;
use App\Http\Resources\People\PeopleResource;
use App\Models\People;

class CreatePeopleController extends Controller
{
    public function __invoke(CreatePeopleRequest $request)
    {
        $data = $request->validated();
        People::create($data);
        return response([]);
    }
}
