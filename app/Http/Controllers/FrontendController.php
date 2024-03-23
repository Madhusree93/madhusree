<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function man()
    {
  
        return view('man');
    }
    public function flooringunit()
    {
  
        return view('flooringunit');
    }
    
    public function Prefab_Buildings()
    {
  
        return view('Prefab_Buildings');
    }
    public function cladding()
    {
  
        return view('cladding');
    }
    public function petroliumproducts()
    {
  
        return view('petrolium-products');
    }
    public function contact()
    {
  
        return view('contact');
    }
    
}
