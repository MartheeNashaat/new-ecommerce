<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\brand;
use App\Models\image;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $images= image::all();               
        $input= \Request::get('searchy');
        $products = product::join('brands','products.brand_id','=','brands.id')
            ->join('categories','products.category_id','=','categories.id')
            ->select('*')
            ->where('description', 'LIKE','%'.$input.'%')
            ->orWhere('type', 'LIKE',  '%'.$input.'%')
            ->orWhere('brands.name', 'LIKE', '%'.$input.'%')
            ->orWhere('products.name', 'LIKE', '%'.$input.'%')
            ->orWhere('color', 'LIKE', '%'.$input.'%')
            ->get();
           return view('searchview')->with('products',$products)->with('images',$images) ;       
          }
}

?>
