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
         $this->middleware('admin');
    }
    public function index(){
        
       /* $catalogs = Catalog::all();
        $user = $request->user;*/
        
        $pr = Product::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate(10);
       /* setcookie('user', Auth::user()->name, time()+3600, '/');*/
        return view('home', compact('pr'));
        
        
       

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
       echo '------------------->';
        echo $r->picture;

        if ($pic) {
            $r['picture'] = $pic;
        }
        Product::create($r->all());
        return redirect()->back();


        
    }
    public function getDelete($id=null){
            
            $pr= Product::find($id);
            @unlink(public_path() . '/uploads/' . $pr->user_id . '/' . $pr->picture);
            @unlink(public_path() . '/uploads/' . $pr->user_id . '/s' . $pr->picture);
            @unlink(public_path() . '/uploads/' . $pr->user_id . '/ss' . $pr->picture);
            $pr->delete();
            return redirect('home');
        }

    


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   

    /*public function additional(){

       
       
        return view('additional');
    }*/
    /*public function create()
    {
        return view('gift');
    }*/
    
}