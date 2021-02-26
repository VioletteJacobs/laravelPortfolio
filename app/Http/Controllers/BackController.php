<?php

namespace App\Http\Controllers;

use App\Models\AboutInfo;
use App\Models\AboutP2;
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

class BackController extends Controller
{
    public function index(){

        $DBNav = Navbar::all();
        $DBHero = Hero::all();
        $DBTitre = Titre::all();
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

       return view ("backoffice", compact ("DBNav", "DBHero", "DBTitre", "DBTitre", "DBAboutInfo", "DBAboutP2","DBSkills", "DBResumeTitre", "DBSumary", "DBEducation", "DBExperiences", "DBServices", "DBPortfolio", "DBTitreContact", "DBMail", "DBPhone", "DBSocial", "DBFooter")); 
    }



    // Destroy
    public function destroyNav($id){
        $destroy = Navbar::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function destroyTitre($id){
        $destroy = Titre::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function destroyInfo($id){
        $destroy = AboutInfo::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function destroyAboutP2($id){
        $destroy = AboutP2::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function destroySkill($id){
        $destroy = Skill::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function destroySumary($id){
        $destroy = Sumary::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function destroyEducation($id){
        $destroy = Education::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function destroyExperience($id){
        $destroy = Experience::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function destroyService($id){
        $destroy = Service::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function destroyPortfolio($id){
        $destroy = Portfolio::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function destroyMail($id){
        $destroy = Mail::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function destroyPhone($id){
        $destroy = Phone::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    



    // edit & update
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
