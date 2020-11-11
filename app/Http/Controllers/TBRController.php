<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TBR;

class TBRController extends Controller
{
    public function store($id)
    {
        $value = DB::table('users')->where('user_id',$id)->get();
        dd($value);
    }
}
