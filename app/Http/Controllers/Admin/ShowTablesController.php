<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddTailer;
use App\Models\Contact;
use App\Models\TailerInfo;
use App\Models\Measurment;

class ShowTablesController extends Controller
{
   
   
    public function showTailers()
    {

        $data = AddTailer::all();
        return \view('admin.showTailers', \compact('data'));

    }

    public function deletetailer($id)
    {
        $data = AddTailer::find($id);
        $data->delete();

        return \redirect()->back()->with('message', 'Tailer recode Deleted successfully');
    }


    public function updatetailer($id)
    {
        $data = AddTailer::find($id);

        return \view('admin.updatetailer', \compact('data'));
    }

    public function uploadupdatetailer(Request $request, $id)
    {
        $data = AddTailer::find($id);

        $image = $request->image;
        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $data->image=$imagename;
        }
        $data->shop_name=$request->sname;
        $data->name=$request->tname;
        $data->location=$request->loc;
        $data->phone=$request->phone;

        $data->save();

        return redirect()->back()->with('message', 'Tailer Shop is successfully added');
    }

    public function showMessage()
    {
        $data = Contact::all();
        return \view('admin.showMessage', \compact('data'));

    }

    // Tailer info coding

    // show tailer info table
    public function showTailersInfo()
    {
        
        $showinfo = TailerInfo::all();
        return \view('admin.showTailersInfo', \compact('showinfo'));
    }

    // delete tailer info
    public function deletetailerinfo($id)
    {
        $data = TailerInfo::find($id);
        $data->delete();

        return \redirect()->back()->with('message', 'Tailer info recode Deleted successfully');
    }

    
    //Update tailerinfo
    public function updateTailerInfo($id)
    {
        $data = TailerInfo::find($id);
        return \view('admin.updateTailerInfo', compact('data'));
    }


    // uploadd update info
    public function uploadUpdateTailerInfo(Request $request, $id)
    {
        $data = TailerInfo::find($id);

        $image = $request->image;
        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $data->image=$imagename;
        }
        $data->shop_name=$request->sname;
        $data->location=$request->loc;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->suit_price=$request->suitprice;
        $data->delivery_time=$request->deliverytime;
        $data->services=$request->services;
        $data->save();

        return redirect()->back()->with('message', 'Tailer Detail info is successfully updated');
    }


    // show Measurments
    public function showMeasurment()
    {
        $data = Measurment::all();
        return \view('admin.showMeasurment', \compact('data'));

    }


    // delete measurment
    public function deletemeasurment($id)
    {
        $data = Measurment::find($id);
        $data->delete();

        return \redirect()->back()->with('message', 'Tailer info recode Deleted successfully');
    }

    
    //Update Measurment
    public function updatemeasurment($id)
    {
        $measurment = Measurment::find($id);
        return \view('admin.updateMeasurment', compact('measurment'));
    }



     // uploadd measurment
     public function uploadUpdateMeasurment(Request $request, $id)
     {
         $data = Measurment::find($id);

         $data->collar=$request->collar;
         $data->shoulder=$request->shoulder;
         $data->chest=$request->chest;
         $data->sleeves=$request->sleeves;
         $data->waist=$request->waist;
         $data->shirt_length=$request->slength;
         $data->paint_length=$request->plength;
         $data->bottom=$request->bottom;
 
         $data->save();
         return redirect()->back()->with('message', 'measurment  recode Updated successfully');
     }
 

}
