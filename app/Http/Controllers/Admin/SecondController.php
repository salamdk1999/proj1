<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondController extends Controller
{
    Public function __construct(){
    /* $this -> middleware('auth')->except('showAdmin');*/

    }
    public function showString(){
        return 'salam';
    }
    public function showUser(){
        return 'ABD,Ahmad,sos';
    }
    public function showAdmin(){
        return 'admin.admin';
    }
}
