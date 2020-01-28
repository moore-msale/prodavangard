<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\sub_category;
class CategoryController extends Controller
{
    public function viewCategory(Request $request, $id){
    	$category = Category::find($id);
    	return view('category.show')->with('category', $category);
    	}

    public function viewAll(Request $request){
    	$categories = Category::all();
    	$products = Product::all();
    	$data = [
            'products'=> $products,
            'categories'=> $categories
        ];
        return view('category.show_all')->with('data', $data);
    }

    public function viewSubCategory(Request $request,$id){
        $sub_name = sub_category::find($id)->name;
        $category_id = sub_category::find($id)->category_id;
        $categories = Category::all();
        $products = Product::all()->where('sub_category_id', $id);
        $data = [
            'products'=> $products,
            'categories'=> $categories,
            'category_id'=>$category_id,
            'sub_name'=>$sub_name
        ];
        return view('category.show_all')->with('data', $data);
    }
}
