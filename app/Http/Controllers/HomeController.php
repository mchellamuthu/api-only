<?php

namespace App\Http\Controllers;

use App\Jobs\CreateUsers;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $count = mt_rand(20,40);
        CreateUsers::dispatch($count);
        return response()->json(['welcome to API Server']);
    }
}
