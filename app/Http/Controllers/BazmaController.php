<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BazmaController extends Controller
{
    public function responseFunction()
    {
        return response("ini adalah bentuk response");
    }

    public function responseHeader()
    {
        $Bola=[
            'name' => 'lukman',
            'school' => 'sdn 1',
        ];
        return response(json_decode('$Bola'), 200)
        ->header('Content-Type', 'Application/json')
        ->withHeaders([
            'App' => 'lukman',
            'Classes' => '87',
            'web' => 'Laravel'
        ]);
    }

    public function encryptionData()
    {
        $encrypt = encrypt("ini adalah enkripsi");
        $decrypt = decrypt($encrypt);
        dd($encrypt, $decrypt);
    }

    public function redirectTo()
    {
        return "redirect to";
    }

    public function redirectFrom()
    {
        return redirect("/redirect/from");
    }

    public function redirectToNamedRoute()
    {
        return "redirectto with named route";
    }

    public function redirectFromNamedRoute()
    {
        return redirect(route("redirect.to"));
    }
}
