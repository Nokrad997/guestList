<?php

namespace App\Http\Controllers;

use App\Models\admin;
use DB;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        return view('adminLogin');
    }

    function check(Request $request)
    {

        $admin = DB::table('admin')
            ->where('email', $request->email)
            ->where('password', $request->password)
            ->get();


        foreach ($admin as $admin) {
            if ($admin->email && $admin->password = $request['password']) {
                return redirect()->route('adminPanel');
            }
        }

        return view('adminLogin');
            
    }
}
