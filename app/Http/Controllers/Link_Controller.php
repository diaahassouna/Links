<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class Link_Controller extends Controller
{
    //Create Links Form
    public function createform(Request $request) {
            return view('welcome');
    }

    //Store Links Form Data
    public function linksform(Request $request) {

        //Form Validation
        $this->validate($request, [
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]);

        //Store Data in the Database
        Link::create($request->all());

        //
        return back()->with('Success', 'Your Link is submitted');
    }
}
