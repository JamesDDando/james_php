<?php

namespace App\Http\Controllers;

class UserController extends Controller{
    public function index(){
        return "Hello from UserController";
    }

    /* public function goto(){
        return view('users');
    } */
    
    public function show($id){
        return $id;
    }
}
