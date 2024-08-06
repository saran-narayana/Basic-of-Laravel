<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postcontroller extends Controller
{
    public function show($id){
        return 'Viewwing post of id:'.$id;
    }
}
