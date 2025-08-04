<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessPageController extends Controller
{
    public function index(){


        return view('success-page');
    }
}
