<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TailerInfo;
use App\Models\AddTailer;

class TailerInfoController extends Controller
{
    public function  index(){

       $addtailer = AddTailer::orderBy('updated_at', 'desc')->get();
       return \view('admin.tailerinfo', \compact('addtailer'));

    }

    public function uploadtinfo(Request $request)
    {
        $data = new TailerInfo;
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $data->image=$imagename;

        $data->shop_name=$request->sname;
        $data->location=$request->loc;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->suit_price=$request->suitprice;
        $data->delivery_time=$request->deliverytime;
        $data->services=$request->services;
        $data->add_tailer_id=$request->tailername;
        $data->user_id=Auth()->user()->id;

        $data->save();

        return redirect(url('myprofile'));

    }
}


