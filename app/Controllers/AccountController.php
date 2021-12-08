<?php

namespace App\Controllers;

class AccountController extends BaseController
{
    public function index()
    {
        return view('Auth/login.php');
    }

    public function register(){

        return view('Auth/register.php');
    }
        
    
}
