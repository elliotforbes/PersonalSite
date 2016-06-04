<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    //
    
    public function index()
    {
        return "index";
    }
    
    public function single()
    {
        return "single";
    }
    
    public function about()
    {
        return "about";
    }
    
    public function contact()
    {
        return "contact";
    }
    
}
