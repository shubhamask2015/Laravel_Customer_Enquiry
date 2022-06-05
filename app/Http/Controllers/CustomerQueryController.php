<?php

namespace App\Http\Controllers;
use App\Models\CustomerQuery;

use Illuminate\Http\Request;

class CustomerQueryController extends Controller
{
    public function query(Request $req){

        $req->validate([
            'name' => 'required|max:30',
            'email' => 'required',
            'contact_no' => 'required|min:10|max:10',
            'query' => 'min:10|max:150'
        ]);
        CustomerQuery::create($req->all());
        return redirect()->back()->with('message', 'Query Sent Successfully!');
    }
}
