<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthController extends Controller
{     
    public function __construct()
    {
        $this->middleware('month');
    }

    public function numToMonth( Request $request, $num){
        $user = $request->input('user');
        if($num==1){
        return 'JANUARY
         <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eos adipisci magnam alias explicabo minima hic, quos aspernatur perspiciatis deserunt aut, optio accusamus culpa id consequuntur, maiores commodi omnis labore!';
                } else if($num==2){
                    return 'FEBUARY';
                } else if($num==3){
                    return 'MARCH';
                 }
    }
}
