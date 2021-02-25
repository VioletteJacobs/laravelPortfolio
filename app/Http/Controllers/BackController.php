<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class BackController extends Controller
{
    public function index(){

        $DBNav = Navbar::all();

       return view ("backoffice", compact("DBNav")); 
    }

    public function destroyNav($id){
        $destroy = Navbar::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function editNav($id){
        $edit = Navbar::find($id);
        return view ("pages.backoffice.editNav", compact('edit'));
    }

    public function updateNav(Request $request, $id){
        $update = Navbar::find($id);
        $update->li = $request->li;
        $update->href = $request->href;
        $update->save();
        return redirect('/');

    }
    
}
