<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ajaxformpost;


class AjaxFormPostController extends Controller
{
    

    public function submit(Request $request){

    		// return $request->all();

    		// return view('welcome');


    		$data = new ajaxformpost;

    		$data->name = $request->post('name');
    		$data->phone_no = $request->post('phone_no');

    		$data->save();

    }



}
