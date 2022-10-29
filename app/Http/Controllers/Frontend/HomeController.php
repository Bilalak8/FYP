<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddTailer;

class HomeController extends Controller
{
    public function index(){
        $data = AddTailer::inRandomOrder()->limit(6)->get();
        return view('frontend.index', compact('data'));
    
    }
}
