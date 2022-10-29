<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Measurment;
use App\Models\AddTailer;

class MeasurmentController extends Controller
{

           public function index($id){
            $tailerid = AddTailer::where('id', $id)->get();
            return \view('frontend.measurment', compact('tailerid'));
        }


     // function for upload naap
     public function uploadnaap(Request $request)
     {
         $data = new Measurment;
 
         $data->collar=$request->collar;
         $data->shoulder=$request->shoulder;
         $data->chest=$request->chest;
         $data->sleeves=$request->sleeves;
         $data->waist=$request->waist;
         $data->shirt_length=$request->slength;
         $data->paint_length=$request->plength;
         $data->bottom=$request->bottom;
         $data->user_id=Auth::user()->id;
         $data->add_tailer_id=$request->tailerid;
 
         $data->save();
         return redirect()->back();
     }
}
