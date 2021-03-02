<?php

namespace App\Http\Controllers;

use App\Models\AboutInfo;
use App\Models\AboutP2;
use App\Models\Bg;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Footer;
use App\Models\Hero;
use App\Models\Mail;
use App\Models\Navbar;
use App\Models\Phone;
use App\Models\Portfolio;
use App\Models\ResumeTitre;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Social;
use App\Models\Sumary;
use App\Models\Titre;
use App\Models\TitreContact;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        
        $DBNav = Navbar::all();
        $DBHero = Hero::all();
        $DBTitre = Titre::all();
        $DBBG = Bg::all();
        $DBAboutInfo = AboutInfo::all();
        $DBAboutP2 = AboutP2::all();
        $DBSkills = Skill::all();
        $DBResumeTitre = ResumeTitre::all();
        $DBSumary = Sumary::all();
        $DBEducation = Education::all();
        $DBExperiences = Experience::all();
        $DBServices = Service::all();
        $DBPortfolio = Portfolio::all();
        $DBTitreContact = TitreContact::all();
        $DBMail = Mail::all();
        $DBPhone = Phone::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();

        return view ("welcome",compact ("DBNav", "DBHero", "DBTitre","DBBG", "DBTitre", "DBAboutInfo", "DBAboutP2","DBSkills", "DBResumeTitre", "DBSumary", "DBEducation", "DBExperiences", "DBServices", "DBPortfolio", "DBTitreContact", "DBMail", "DBPhone", "DBSocial", "DBFooter"));
    }
}
