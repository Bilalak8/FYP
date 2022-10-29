<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TailerInfo;
use App\Models\AddTailer;
use App\Models\Measurment;

class ClothnaapController extends Controller
{
    public function index($id)
    {
     // forgin key data code
     $tailerinfo = TailerInfo::where('add_tailer_id', $id)->get();
     return view('frontend.clothesnaap', compact('tailerinfo'));
    }  

   
}