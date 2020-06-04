<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Product;

class ModalController extends Controller
{
    public function postOne(){
        $id=(int)$_POST['id'];
        $obj= Product::find($id);
        return view('modal',compact('pr'));
    }
}