<?php

namespace App\Http\Controllers;


use App\Models\Hero;
use App\Models\Navbar;
use App\Models\Titre;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        $DBNav = Navbar::all();
        $DBHero = Hero::all();
        $DBTitre = Titre::all();

        return view ("welcome",compact ("DBNav", "DBHero", "DBTitre", "DBTitre"));
    }
}
