<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Navbar;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        $DBNav = Navbar::all();
        $DBHero= Hero::all();
        // $DBHero=  ::all();

        return view ("welcome",compact ("DBNav", "DBHero"));
    }
}
