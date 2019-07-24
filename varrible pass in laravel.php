<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function test(){



       // $heading = "this is my first variable";
         //return view("nurul")->with("h",$heading);

         //$headin = "this is my second variable pass systems ফঘজধজকদফহগকঝগজকদফ";
         //return view("nurul",compact ('headin'));


        // $data = [];
       //  $data['today'] = date('d-m-y');
        // $data['time'] = date('H:i:s');
        //return view ('nurul', $data);


        $data = [];
         $data['today'] = date('d-m-y');
         $data['time'] = date('H:i:s');
        return view ('nurul')->with($data);


    }


}


