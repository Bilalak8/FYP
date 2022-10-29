<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\AddTailer;
use App\Models\Measurment;

class RedirectController extends Controller
{
    public function redirect()

    {
        
          if(Auth::user()->hasRole('user')){
            
            // if($user =Auth::user()->id)
            // {
            // $data = Measurment::where('user_id', $user)->get();
            // return \view('user.userprofile', \compact('data'));
            // }
            // else
            // {   
                
                $data = AddTailer::inRandomOrder()->limit(6)->get();

                return view('frontend.index', compact('data'));

            }
          

          
           elseif(Auth::user()->hasRole('tailer')){
            $user = Auth::user()->id;
            $data = AddTailer::where('user_id',$user)->get();
            return view('tailer.home',compact('data'));
            
           }elseif(Auth::user()->hasRole('admin')){
            $data = AddTailer::all();
            return view('admin.home', \compact('data'));
    }

}
}