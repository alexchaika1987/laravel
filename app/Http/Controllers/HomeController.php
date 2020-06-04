<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\Product;
use App\Http\Requests\PresentRequest;
use App\Http\Requests\ProductRequest;
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

        $pr = Product::where('user_id', Auth::user()->id)->orderBy('id','DESC')->paginate(10);
        return view('additional', compact('pr'));
        
        
       

    }
    public function postIndex(PresentRequest $r){
        $r['picture'] = '';
        $r['user_id']=Auth::user()->id;
        $r['status']='new';
        $r['showhide']=1;
      $pic = \App::make('\App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);
      if ($pic) {
            $r['picture'] = $pic;
        }
        Present::create($r->all());
        return redirect()->back();


        
    }
 
     public function postAdd(ProductRequest $r){
        $r['picture'] = '';
        $r['user_id']=Auth::user()->id;
        $r['status']='new';
        $r['showhide']=1;
      $pic = \App::make('\App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);
      if ($pic) {
            $r['picture'] = $pic;
        }
        Product::create($r->all());
        return redirect()->back();


        
    }
    public function getDelete($id=null){
            
            $pr= Product::find($id);
            @unlink(public_path().'/uploads/'.$pr->user_id.'/'.$pr->picture);
            @unlink(public_path().'/uploads/'.$pr->user_id.'/s'.$pr->picture);
            @unlink(public_path().'/uploads/'.$pr->user_id.'/ss'.$pr->picture);
            $pr->delete();
            return redirect('additional');
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