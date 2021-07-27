<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    
    function show($slug, $lang){

        try{    
            
            if($lang){
                if (! in_array($lang, ['en', 'es'])) {
                    abort(400);
                }
    
                \App::setLocale($lang);
            }
            
            $id = Blog::where("slug", $slug)->first()->id;

            return view("timeLapse", ["id" => $id]);

        }catch(\Exception $e){

            abort(404);

        }
        

    }

}
