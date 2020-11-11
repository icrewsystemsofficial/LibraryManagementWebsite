<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TBR;
use App\Book;
use App\User;

class TBRController extends Controller
{
    public function store(Book $bookId, User $id)
    {
        $value = DB::table('users')->where('user_id',$id)->get('id');
        $data = DB::table('books')->where('book_id',$bookId)->get();
        dd($data);
        dd($value);
    }
}
