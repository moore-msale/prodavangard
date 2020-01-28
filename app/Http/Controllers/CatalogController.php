<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;
class CatalogController extends Controller
{
    public function index(){
		$catalogs = Catalog::all();
		return view('index')->with('catalogs', $catalogs); 
    }
    public function viewCatalog(Request $request, $id){
    	$catalog = Catalog::find($id);
    	// dd($catalog);
    	// dd($catalog->categories);
        return view('catalog.show')->with('catalog', $catalog);
    }
}
