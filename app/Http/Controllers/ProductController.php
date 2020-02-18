<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\sub_category;
class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        // dd($products);
        // return view('index'); 
        $index_data = [
            'products'=> $products,
        ];
        
        // dd($index_data['products'][0]->name);
        return view('index')->with('index_data',$index_data); 

    }
    public function about(){
        return view('about.about'); 

    }
    public function contacts(){
        return view('about.contacts'); 
    }
    public function viewProduct(Request $request, $id){
        $sub_cat = Product::find($request->id)->sub_category_id;
        $cat_id = sub_category::find($sub_cat)->category_id;
        $cat = Category::find($cat_id);
        $product = Product::find($request->id);
        $data=[
            "product"=>$product,
            "cat"=>$cat
        ];
        return view('product.show')->with('data', $data); 
    }

    public function coop(Request $request){
        return view('coop.coop')->with('product', '$product'); 
    }
    public function part(Request $request){
        return view('coop.part')->with('product', '$product'); 
    }

    public function coop_map(Request $request){
        return view('coop.coop_map'); 
    }

    public function search(Request $request){
        $q = $request->q;
        // $products = Product::all()->where('name','LIKE','%'.$q.'%')->orWhere('description','LIKE','%'.$q.'%');
        $products = Product::where('name','LIKE','%'.$q.'%')->get();
        return view('product.search_results')->with('products', $products); 

    }
}
