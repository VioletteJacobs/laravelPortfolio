<?php

namespace App\Http\Controllers;

use App\Models\AboutInfo;
use App\Models\AboutP2;
use App\Models\Hero;
use App\Models\Navbar;
use App\Models\Skill;
use App\Models\Titre;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        $DBNav = Navbar::all();
        $DBHero = Hero::all();
        $DBTitre = Titre::all();
        $DBAboutInfo = AboutInfo::all();
        $DBAboutP2 = AboutP2::all();
        $DBSkills = Skill::all();

        return view ("welcome",compact ("DBNav", "DBHero", "DBTitre", "DBTitre", "DBAboutInfo", "DBAboutP2","DBSkills"));
    }
}
