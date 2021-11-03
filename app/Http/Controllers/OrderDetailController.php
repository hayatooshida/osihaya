<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\OrderDetail;
class OrderDetailController extends Controller
{
    public function show($id){
        $details = OrderDetail::select('order_details.*','products.image','products.name','products.price')
        ->where('order_id',$id)
        ->join('products','products.id','=','order_details.product_id')
        ->get();
        
        return view('details.show',[
            'details' => $details,
        ]);
        
    }
}
