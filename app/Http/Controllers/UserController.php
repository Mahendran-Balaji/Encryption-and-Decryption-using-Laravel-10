<?php

namespace App\Http\Controllers;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        $userRecords = User::paginate(10);
        return view('welcome',compact('userRecords'));
    }
}
