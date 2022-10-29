<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AddTailer;
use App\Models\TailerInfo;
use Illuminate\Support\Facades\Auth;

class AddTailerController extends Controller
{
    public function index(){


        return \view('admin.addtailer');
    
       
    }

    public function uploadtailer(Request $request)
    {
        $data = new AddTailer;
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $data->image=$imagename;

        $data->shop_name=$request->sname;
        $data->name=$request->tname;
        $data->location=$request->loc;
        $data->phone=$request->phone;
        $data->user_id=Auth()->user()->id;
    
    

        $data->save();
        
        return redirect(url('tailerdetailinfo'));
        // return redirect()->back()->with('message', 'Tailer Shop is successfully added');

    }


}
