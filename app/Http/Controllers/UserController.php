<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    public function index(){
        try {
            $users = User::get();
            $users_data = json_encode($users->toArray());
//            $users_data = Response::json($users->toArray());
            //$users_data = \response()->json($users->toArray());
//           return ($users_data);

            return view('app', compact('users_data'));
        }catch (\Throwable $throwable){

            $users_data = null;
            return view('app', compact('users_data'));
        }
    }
}
