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
use Symfony\Polyfill\Intl\Idn\Info;

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

        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editNav", compact('edit', "DBFooter", "DBSocial"));
    }

    public function updateNav(Request $request, $id){

        $validation = $request->validate([
            "li" => "required|min:5|max:50",
            "href" => "required|max:100"
        ]);
        
        $update = Navbar::find($id);
        $update->li = $request->li;
        $update->href = $request->href;
        $update->save();
        return redirect('/');

    }
    public function editTitre($id){
        $edit = Titre::find($id);

        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editTitre", compact('edit', "DBFooter", "DBSocial"));
    }

    public function updateTitre(Request $request, $id){

        $validation = $request->validate([
            "titre" => "required|min:5|max:100",
            "span" => "required|max:100",
            "p" => "required|max:500",
        ]);
        
        $update = Titre::find($id);

        $update->titre = $request->titre;
        $update->span = $request->span;
        $update->p = $request->p;

        $update->save();
        return redirect('/');

    }
    public function editInfo($id){
        $edit = AboutInfo::find($id);

        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editinfo", compact('edit', "DBFooter", "DBSocial"));
    }

    public function updateInfo(Request $request, $id){

        $validation = $request->validate([
            "icon" => "required|min:5|max:50",
            "titre" => "required|max:50",
            "info" => "required|max:100",
        ]);
        
        $update = AboutInfo::find($id);
        
        $update->titre = $request->titre;
        $update->icon = $request->icon;
        $update->info = $request->info;

        $update->save();
        return redirect('/');

    }
    public function editAbout($id){
        $edit = AboutP2::find($id);

        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editAbout", compact('edit', "DBFooter", "DBSocial"));
    }

    public function updateAbout(Request $request, $id){

        $validation = $request->validate([
            "icon" => "required|min:5|max:50",
            "color" => "required|max:50",
            "span" => "required|max:50",
            "strong" => "required|max:50",
            "p" => "required|max:50",
        ]);
        
        $update = AboutP2::find($id);
        
        $update->icon = $request->icon;
        $update->color = $request->color;
        $update->strong = $request->strong;
        $update->span = $request->span;
        $update->p = $request->p;

        $update->save();
        return redirect('/');

    }
    public function editSumary($id){
        $edit = Sumary::find($id);

        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editSumary", compact('edit', "DBFooter", "DBSocial"));
    }

    public function updateSumary(Request $request, $id){

        $validation = $request->validate([
            "name" => "required|min:5|max:50",
            "adresse" => "required|max:50",
            "phone" => "required|max:50",
            "mail" => "required|max:50",
            "p" => "required|max:500",
        ]);
        
        $update = Sumary::find($id);
        
        $update->name = $request->name;
        $update->adresse = $request->adresse;
        $update->phone = $request->phone;
        $update->mail = $request->mail;
        $update->p = $request->p;

        $update->save();
        return redirect('/');

    }
    public function updateSkill(Request $request, $id){

        $validation = $request->validate([
            "language" => "required|min:5|max:50",
            "val" => "required|max:10",
            "valuenow" => "required",

        ]);
        
        $update = Skill::find($id);
        
        $update->language = $request->language;
        $update->val = $request->val;
        $update->valuenow = $request->valuenow;

        $update->save();
        return redirect('/');

    }
    public function editSkill($id){
        $edit = Skill::find($id);

        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editSkill", compact('edit', "DBFooter", "DBSocial"));
    }

    public function editEducation($id){
        $edit = Education::find($id);

        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editEducation", compact('edit', "DBFooter", "DBSocial"));
    }

    public function updateEducation(Request $request, $id){

        $validation = $request->validate([
            "title" => "required|min:5|max:100",
            "years" => "required|max:100",
            "school" => "required|max:100",
            "p" => "required|max:500",
        ]);
        
        $update = Education::find($id);
        
        $update->title = $request->title;
        $update->years = $request->years;
        $update->school = $request->school;
        $update->p = $request->p;

        $update->save();
        return redirect('/');

    }
    public function editExperience($id){
        $edit = Experience::find($id);

        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editExperience", compact('edit', "DBFooter", "DBSocial"));
    }

    public function updateExperience(Request $request, $id){

        $validation = $request->validate([
            "title" => "required|min:5|max:100",
            "years" => "required|max:100",
            "name" => "required|max:100",
            "task1" => "required|max:200",
            "task2" => "required|max:200",
            "task3" => "required|max:200",
            "task4" => "required|max:200",
        ]);
        
        $update = Experience::find($id);
        
        $update->title = $request->title;
        $update->years = $request->years;
        $update->name = $request->name;
        $update->task1 = $request->task1;
        $update->task2 = $request->task2;
        $update->task3 = $request->task3;
        $update->task4 = $request->task4;

        $update->save();
        return redirect('/');

    }

    
}
