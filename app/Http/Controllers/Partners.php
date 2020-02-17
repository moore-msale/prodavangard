<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
class Partners extends Controller
{
    public function show(Request $request,$id){
    	$partner = Partner::find($id);
        return view('partners.show_part')->with('partner', $partner);
    }
}
