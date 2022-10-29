<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddTailer;

class TailersController extends Controller
{
    public function index(Request $request){

        $search = $request['search'] ??  '';
        if($search != '')
        {
        $data = AddTailer::where('name','like','%'.$search.'%')->paginate(6);
        return view('frontend.tailers', compact('data'));
        }
        else
        {
            $data = AddTailer::paginate(6);
          return view('frontend.tailers', compact('data'));
        }
    }


}
