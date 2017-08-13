<?php

namespace App\Http\Controllers;

use App\TestAppUsers;
use Illuminate\Http\Request;

class TestAppController extends Controller
{
    public function showNames()
    {

        $names = TestAppUsers::all();

        return view('names', [
            'names' => $names
        ]);
    }
}
