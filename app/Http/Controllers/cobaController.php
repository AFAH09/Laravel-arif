<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cobaController extends Controller
{
    public function example()
    {
        return "halo cuy";
    }

    public function request(Request $requests){
        $name = $requests ->input("name");
        return $name;
    }
}
