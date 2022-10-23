<?php

namespace App\Http\Controllers;

use App\Models\guest;
use DB;
use Illuminate\Routing\RedirectController;
use Route;



class adminPanelController extends Controller
{
    public function index()
    {

        $guests = DB::table('guests')->simplePaginate(5);
        
        return view('adminPanel')->with('guests', $guests);
    }

    function destroy($id)
    {
        $delete = guest::find($id);
        $delete->delete();
        return redirect()->route('adminPanel');
    }
}