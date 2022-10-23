<?php

namespace App\Http\Controllers;

use App\Models\guest;

class formController extends Controller
{
    public function index()
    {
        if(request()->isMethod('post'))
        {
            $guest = new guest();
            $guest->name = request()->get('Name');
            $guest->surname = request()->get('Surname');
            $guest->email = request()->get('Email');
            $guest->save();
            //return redirect()->route('form');
        }
        return view('form');
    }
    
}