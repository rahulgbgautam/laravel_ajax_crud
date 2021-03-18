<?php

namespace App\Http\Controllers;

use App\Models\ajaxformmodel;

use Illuminate\Http\Request;

class AjaxFormController extends Controller
{
    
    public function submit(Request $request){

    		return $request->all();

    		return view('welcome');


    		$data = new ajaxformmodel;

    		$data->name = $request->get('name');
    		$data->phone_no = $request->get('phone_no');

    		$data->save();








    }

}
