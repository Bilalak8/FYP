<?php

namespace App\Http\Controllers\Tailer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\AddTailer;
use App\Models\Measurment;
use App\Models\TailerInfo;

class TailerAdminController extends Controller
{
    public function index(){
        $user = Auth::user()->id;
        $data = AddTailer::where('user_id',$user)->get();
        return view('tailer.home',compact('data'));
    }

    
    public function myprofile(){

        $user = Auth::user()->id;
        $data = AddTailer::where('user_id', $user)->get();

        return \view('tailer.myprofile', compact('data'));
    }

    // public function myprofile(){

    //     $user = Auth::user()->id;
    //     $data = AddTailer::where('user_id', $user)->get();

    //     return \view('tailer.myprofile', compact('data'));
    // }

    public function userprofile(){
        $user = Auth::user()->id;

        $data = Measurment::where('user_id', $user)->get();

        return \view('user.userprofile', \compact('data'));
    }

    public function singletailerinfo(){

        $user = Auth::user()->id;

        $data = TailerInfo::where('user_id', $user)->get();
        return \view('tailer.singletailerinfo', \compact('data'));
    }

    public function totalmeasurmentrecord(){
        $user = Auth::user()->id;
        $tailer = AddTailer::where('user_id', $user)->first();
       $data = Measurment::where('add_tailer_id', $tailer->id)->get();

        return \view('tailer.totalmeasurmentrecord', compact('data'));
    }

    public function hidetailerinfo()
    {
        $user = Auth::user()->id;
        $data = AddTailer::where('user_id',$user)->get();
        return view('tailer.tailersidebar',compact('data'));
    }

    public function addtailerfortailer()
    {
        $user = Auth::user()->id;
        $data = AddTailer::where('user_id',$user)->get();
        return view('tailer.addtailerfortailer',compact('data'));
    }

    public function tailerdetailinfo()
    {
        $user = Auth::user()->id;
        $data = AddTailer::where('user_id',$user)->get();
        $addtailer = AddTailer::orderBy('updated_at', 'desc')->get();
        return view('tailer.tailerdetailinfo',compact('data','addtailer'));
    }
}

