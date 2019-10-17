<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller 
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'text' => 'required',
            'author' => 'required',
            'background' => 'required'
        ]);

        return Quote::create($request->all());
    }
}