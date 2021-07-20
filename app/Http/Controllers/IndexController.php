<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    
    function index(Request $request){

        if($request->all() != []){
            if (! in_array($request->locale, ['en', 'es'])) {
                abort(400);
            }

            App::setLocale($request->locale);
        }

        return view('welcome');

    }


}
