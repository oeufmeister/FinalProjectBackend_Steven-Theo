<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;
use App\Product;
use Illuminate\Support\Facades\Response;

class ReceiptController extends Controller
{
    public function index()
    {
        $data['products'] = DB::table('products')->get();
        return view("seg",$data);
    }
    
    public function getPrice()
    {
        $getPrice = $_GET['id'];
        $price  = DB::table('products')->where('id', $getPrice)->get();
        return Response::json($price);
    }   

    public function product(){
        $products = Product::latest()->paginate(5);
        return view('seg',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}

