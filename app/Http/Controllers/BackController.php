<?php

namespace App\Http\Controllers;

use App\Models\AboutInfo;
use App\Models\AboutP2;
use App\Models\Bg;
use App\Models\Color;
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
        $DBColor = Color::all();

       return view ("backoffice", compact ("DBNav", "DBHero", "DBTitre", "DBBG", "DBTitre", "DBAboutInfo", "DBAboutP2","DBSkills", "DBResumeTitre", "DBSumary", "DBEducation", "DBExperiences", "DBServices", "DBPortfolio", "DBTitreContact", "DBMail", "DBPhone", "DBSocial", "DBFooter", "DBColor")); 
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
    public function destroyColor($id){
        $destroy = Color::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    



    // edit & update
    public function editNav($id){
        $edit = Navbar::find($id);
        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editNav", compact('edit', "DBFooter", "DBSocial","DBColor"));
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
        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editTitre", compact('edit', "DBFooter", "DBSocial","DBColor"));
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

        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editinfo", compact('edit', "DBFooter", "DBSocial","DBColor"));
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

        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editAbout", compact('edit', "DBFooter", "DBSocial","DBColor"));
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

        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editSumary", compact('edit', "DBFooter", "DBSocial","DBColor"));
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

        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editSkill", compact('edit', "DBFooter", "DBSocial","DBColor"));
    }

    public function editEducation($id){
        $edit = Education::find($id);

        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editEducation", compact('edit', "DBFooter", "DBSocial","DBColor"));
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

        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editExperience", compact('edit', "DBFooter", "DBSocial", "DBColor"));
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
    public function editService($id){
        $edit = Service::find($id);

        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editService", compact('edit', "DBFooter", "DBSocial","DBColor"));
    }

    public function updateService(Request $request, $id){

        $validation = $request->validate([
            "title" => "required|min:5|max:50",
            "icon" => "required|max:50",
            "p" => "required|max:500",
        ]);
        
        $update = Service::find($id);
        
        $update->title = $request->title;
        $update->icon = $request->icon;
        $update->p = $request->p;

        $update->save();
        return redirect('/');

    }
    public function editPhone($id){
        $edit = Phone::find($id);

        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editPhone", compact('edit', "DBFooter", "DBSocial","DBColor"));
    }

    public function updatePhone(Request $request, $id){

        $validation = $request->validate([
            "phone" => "required",

        ]);
        
        $update = Phone::find($id);
        
        $update->phone = $request->phone;

        $update->save();
        return redirect('/');

    }
    public function editMail($id){
        $edit = Mail::find($id);
        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editMail", compact('edit', "DBFooter", "DBSocial","DBColor"));
    }

    public function updateMail(Request $request, $id){

        $validation = $request->validate([
            "mail" => "required",
        ]);
        
        $update = Mail::find($id);
        
        $update->mail = $request->mail;


        $update->save();
        return redirect('/');

    }
    public function editPortfolio($id){
        $edit = Portfolio::find($id);

        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editPortfolio", compact('edit', "DBFooter", "DBSocial","DBColor"));
    }

    public function updatePortfolio(Request $request, $id){

        $validation = $request->validate([
            "title" => "required|min:5|max:20",
            "img" => "required|max:90",
            "p" => "required|max:100",
            "filter" => "required|max:30",
            "href1" => "required|max:90",
            "href2" => "required|max:90",
        ]);
        
        $update = Portfolio::find($id);
        
        $update->title = $request->title;
        $update->img = $request->img;
        $update->p = $request->p;
        $update->href1 = $request->href1;
        $update->href2 = $request->href2;
        $update->filter = $request->filter;

        $update->save();
        return redirect('/');

    }
    public function editColor($id){
        $edit = Color::find($id);

        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.editColor", compact('edit', "DBFooter", "DBSocial","DBColor"));
    }

    public function updateColor(Request $request, $id){

        $validation = $request->validate([
            "nom" => "required|min:3|max:20",
            "rgba" => "required|max:90",

        ]);
        
        $update = Color::find($id);
        
        $update->nom = $request->nom;
        $update->rgba = $request->rgba;


        $update->save();
        return redirect('/');

    }



    // create
    Public function createTitre(){
        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.create.createTitre", compact("DBFooter", "DBSocial","DBColor"));
    }
    Public Function storeTitre(Request $request){

        $validation = $request->validate([
            "titre" => "required|min:5|max:100",
            "span" => "required|max:100",
            "p" => "required|max:500",
        ]);


        $newEntry = new Titre;

        $newEntry->titre = $request->titre;
        $newEntry->span = $request->span;
        $newEntry->p = $request->p;

        $newEntry->save();

        return redirect()->back();

    }

    Public function createNav(){
        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.create.createNav", compact("DBFooter", "DBSocial",'DBColor'));
    }
    Public Function storeNav(Request $request){

        $validation = $request->validate([
            "li" => "required|min:5|max:50",
            "href" => "required|max:100"
        ]);

        $newEntry = new Navbar;

        $newEntry->li = $request->li;
        $newEntry->href = $request->href;

        $newEntry->save();
        return redirect()->back();

    }


    Public function createInfo(){
        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.create.createInfo", compact("DBFooter", "DBSocial","DBColor"));
    }
    Public Function storeInfo(Request $request){

        $validation = $request->validate([
            "icon" => "required|min:5|max:50",
            "titre" => "required|max:50",
            "info" => "required|max:100",
        ]);

        $newEntry = new AboutInfo;

        $newEntry->icon = $request->icon;
        $newEntry->titre = $request->titre;
        $newEntry->info = $request->info;

        $newEntry->save();
        return redirect()->back();

    }


    Public function createAbout(){
        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.create.createAbout", compact("DBFooter", "DBSocial","DBColor"));
    }
    Public Function storeAbout(Request $request){

        $validation = $request->validate([
            "icon" => "required|min:5|max:50",
            "color" => "required|max:50",
            "span" => "required|max:50",
            "strong" => "required|max:50",
            "p" => "required|max:50",
        ]);

        $newEntry = new AboutP2;

        $newEntry->icon = $request->icon;
        $newEntry->color = $request->color;
        $newEntry->span = $request->span;
        $newEntry->strong = $request->strong;
        $newEntry->p = $request->p;

        $newEntry->save();
        return redirect()->back();

    }
    Public function createSumary(){
        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.create.createSumary", compact("DBFooter", "DBSocial","DBColor"));
    }
    Public Function storeSumary(Request $request){

        $validation = $request->validate([
            "name" => "required|min:5|max:50",
            "adresse" => "required|max:50",
            "phone" => "required|max:50",
            "mail" => "required|max:50",
            "p" => "required|max:500",
        ]);
        
        $newEntry = new Sumary;

        $newEntry->name = $request->name;
        $newEntry->adresse = $request->adresse;
        $newEntry->phone = $request->phone;
        $newEntry->mail = $request->mail;
        $newEntry->p = $request->p;

        $newEntry->save();
        return redirect()->back();

    }
    Public function createEducation(){
        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.create.createEducation", compact("DBFooter", "DBSocial", "DBColor"));
    }
    Public Function storeEducation(Request $request){

        $validation = $request->validate([
            "title" => "required|min:5|max:100",
            "years" => "required|max:100",
            "school" => "required|max:100",
            "p" => "required|max:500",
        ]);

        $newEntry = new Education;

        $newEntry->title = $request->title;
        $newEntry->years = $request->years;
        $newEntry->school = $request->school;
        $newEntry->p = $request->p;

        $newEntry->save();
        return redirect()->back();

    }
    Public function createExperience(){
        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.create.createExperience", compact("DBFooter", "DBSocial", "DBColor"));
    }
    Public Function storeExperience(Request $request){

        $validation = $request->validate([
            "title" => "required|min:5|max:100",
            "years" => "required|max:100",
            "name" => "required|max:100",
            "task1" => "required|max:200",
            "task2" => "required|max:200",
            "task3" => "required|max:200",
            "task4" => "required|max:200",
        ]);

        $newEntry = new Experience;

        $newEntry->title = $request->title;
        $newEntry->years = $request->years;
        $newEntry->name = $request->name;
        $newEntry->task1 = $request->task1;
        $newEntry->task2 = $request->task2;
        $newEntry->task3 = $request->task3;
        $newEntry->task4 = $request->task4;

        $newEntry->save();
        return redirect()->back();

    }
    Public function createSkill(){
        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.create.createSkill", compact("DBFooter", "DBSocial","DBColor"));
    }
    Public Function storeSkill(Request $request){

        $validation = $request->validate([
            "language" => "required|min:2|max:50",
            "val" => "required|max:10",
            "valuenow" => "required",

        ]);

        $newEntry = new Skill;

        $newEntry->language = $request->language;
        $newEntry->val = $request->val;
        $newEntry->valuenow = $request->valuenow;

        $newEntry->save();
        return redirect()->back();

    }
    Public function createService(){
        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.create.createService", compact("DBFooter", "DBSocial","DBColor"));
    }
    Public Function storeService(Request $request){

        $validation = $request->validate([
            "titre" => "required|min:5|max:50",
            "icon" => "required|max:50",
            "p" => "required|max:500",
        ]);

        $newEntry = new Service;

        $newEntry->titre = $request->titre;
        $newEntry->icon = $request->icon;
        $newEntry->p = $request->p;

        $newEntry->save();
        return redirect()->back();

    }
    Public function createPhone(){
        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.create.createPhone", compact("DBFooter", "DBSocial","DBColor"));
    }
    Public Function storePhone(Request $request){

        $validation = $request->validate([
            "phone" => "required",
        ]);

        $newEntry = new Phone;

        $newEntry->phone = $request->phone;

        $newEntry->save();
        return redirect()->back();

    }

    Public function createMail(){
        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.create.createMail", compact("DBFooter", "DBSocial", "DBColor"));
    }
    Public Function storeMail(Request $request){

        $validation = $request->validate([
            "mail" => "required",
        ]);

        $newEntry = new Mail;

        $newEntry->mail = $request->mail;

        $newEntry->save();
        return redirect()->back();

    }
    Public function createPortfolio(){
        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.create.createPortfolio", compact("DBFooter", "DBSocial", "DBColor"));
    }
    Public Function storePortfolio(Request $request){

        $validation = $request->validate([
            "title" => "required|min:5|max:20",
            "img" => "required|max:90",
            "p" => "required|max:100",
            "filter" => "required|max:30",
            "href1" => "required|max:90",
            "href2" => "required|max:90",
        ]);

        $newEntry = new Portfolio;

        $newEntry->title = $request->title;
        $newEntry->img = $request->img;
        $newEntry->p = $request->p;
        $newEntry->filter = $request->img;
        $newEntry->href1 = $request->href1;
        $newEntry->href2 = $request->href2;

        $newEntry->save();
        return redirect()->back();

    }
    Public function createColor(){
        $DBColor = Color::all();
        $DBSocial = Social::all();
        $DBFooter = Footer::all();
        return view ("pages.backoffice.create.createColor", compact("DBFooter", "DBSocial","DBColor"));
    }
    Public Function storeColor(Request $request){

        $validation = $request->validate([
            "nom" => "required|min:3|max:20",
            "rgba" => "required|max:90",
        ]);

        $newEntry = new Color;

        $newEntry->nom = $request->nom;
        $newEntry->rgba = $request->rgba;

        $newEntry->save();
        return redirect()->back();

    }
    
}
