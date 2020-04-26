<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PresentRequest;
use App\Present;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function additional(){
        return view('additional');
    }
     public function postIndex(PresentRequest $r){
        
        $r['user_id']=Auth::user()->id;
        $r['status']='new';
        $r['showhide']=1;
        Present::create($r->all());
        return redirect()->back();

        
    }
    


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /*public function additional(){

       
       
        return view('additional');
    }*/
    /*public function create()
    {
        return view('gift');
    }*/
    
   
}
