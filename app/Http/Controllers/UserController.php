<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        $data = ['cse','english','biology'];
        return view("user",['data'=>$data]);
    }
}
