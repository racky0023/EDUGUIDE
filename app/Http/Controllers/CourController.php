<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use App\Professeur;

class CourController extends Controller
{
    
    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
     
        return $file;
     }
    public function index(){
        
        $cours = \App\Cour::orderBy('created_at','DESC')->get();
        return view('cours.index', compact('cours')); 
    }

    public function cour_prof(){
        
        $cours = \App\Cour::orderBy('created_at','DESC')->get();
        return view('layout.donnees', compact('cours')); 
    }
      /**
* @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
*/

    public function create(){
       // dd("ici");
        //$cours = \App\Cour::pluck('nom_cour','id');
       // return view('cours.create', compact('cours'));
         //$cours->cour_id = $request->input('cour_id');
     
       // return redirect('nom_cour');  
     $professeurs = \App\Professeur::pluck('nom','prenom','id');
  //  $cours->professeur_id = $request->input('professeur_id');
   return view('cours.create', compact('professeurs'));
}    
    public function store(Request $request){
        $cours = new \App\Cour();
        $cours->nom_cour = $request->input('nom_cour');
        //$cours->name_prof= $request->input('name_prof');
        //$cours->description = $request->input('description');

        //return view('cours.index', compact('cours'));
        //return redirect('/');
        //return redirect()->route('cours')->with(['success' => "Produit enregistré"]);
        $data = $request->validate([
            'nom_cour'=>'required|min:5',
            //'name_prof' => 'required|max:7|numeric',
        //s 'description' => 'max:1000000'
        ]);
        //On verfie si une image est envoyée
        if($request->has('cour_image')){
            //On enregistre l'image dans un dossier
            $image = $request->file('cour_image');
            //Nous allons definir le nom de notre image en combinant le nom du produit et un timestamp
            $image_name = Str::slug($request->input('name')).'_'.time();
            //Nous enregistrerons nos fichiers dans /uploads/images dans public
            $folder = '/uploads/images/';
            //Nous allons enregistrer le chemin complet de l'image dans la BD
            $cours->cour_image = $folder.$image_name.'.'.$image->getClientOriginalExtension();
            //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
            $this->uploadImage($image, $folder, 'public', $image_name);
        }
        //dd($cours);
        $cours->save();
        return redirect()->route('cours')->with(['success' => "cour enregistré"]);
    }

//public function show($slog)
//{
    //return  view('home',compact("slog"));
//}
public function backoffi(){
 return  view('backoffice.index');
}             


public function edit($id)
{
    {
         $cours = \App\Cour::find($id);//on recupere le cour
         return view('cours.edit', compact('cours'));
    }
     

    {
      $prof = \App\Professeur::pluck('nom','prenom','id');
      return view('layouts.inscription', compact('professeurs'));
    }

$this->authorize('admin');
$cours = \App\Cour::find($id);
$prof = \App\Professeur::pluck('nom','prenom','id');
return view('cours.edit', compact('cours','professeurs'));

}  



    public function liste_prof(){
        $profs=Professeur::all();
        return view('layouts.inscription',compact('profs'));
    }
    public function ajout_prof(){
        return view('layout.creation');
    }

    public function nouveau_prof(Request $request){
        $prof= new Professeur();
        $prof->nom=$request->input('nom');
        $prof->prenom=$request->input('prenom');
        $prof->matiere=$request->input('matieres');
        $prof->grade=$request->input('grade');
        $prof->email=$request->input('email');
        $prof->naissance=$request->input('naissance');
        $prof->telephone=$request->input('phone');
        $prof->genre=$request->input('genre');
        $prof->save();
        $profs=Professeur::all();
        return redirect('/professeurs');
    }
  

public function update(Request $request, $id)
{
    
    $cours = \App\Cour::find($id);
    if($cours){
        $cours->nom_cour = $request->input('nom_cour');
        $cours->save();
        return redirect('/cours');
    
       $cours->update([
           'nom_cour' => $request->input('nom_cour'),
          // 'price' => $request->input('price'),
           //'description' => $request->input('description'),
           'professeur_id' => $request->input('professeur_id'),
           $cours->professeur_id = $request->input('professeur_id')
       ]);
   
   return redirect()->back();
 }
$data = $request->validate([
    'nom_cour'   => 'required',
    //'price' => 'required | numeric',
    'cour_image' => 'nullable | max:2048'
 ]);
 $cours = \App\Product::find($id);
 if($cours){
     if($request->has('cour_image')){
         //On enregistre l'image dans une variable
         $image = $request->file('cour_image');
         if(file_exists(public_path().$cour->images))//On verifie si le fichier existe
             Storage::delete(asset($cour->images));//On le supprime alors
         //Nous enregistrerons nos fichiers dans /uploads/images dans public
         $folder = '/uploads/images/';
         $image_name = Str::slug($request->input('name')).'_'.time();
         $cour->cour_image = $folder.$image_name.'.'.$image->getClientOriginalExtension();
         //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
         $this->uploadImage($image, $folder, 'public', $image_name);
     }
     $cours->nom_cour  = $request->input('nom_cour');
     //$product->price = $request->input('price');
     //$product->description = $request->input('description');
     $cours->category_id = $request->input('professeur_id');

     $cours->save();
 }
 return redirect()->back();
}



public function destroy($id)
{
   $cours = \App\Cour::find($id);
    $cours->delete();
    return back()->withInfo('un cour est suprime');
    
    {
       $prof = Professeur::find($id);
       if($prof)
           $prof->delete();
       return redirect()->route('professeurs');
    }
    
}


public function index_welcome(){
    $cours = \App\Cour::orderBy('created_at','DESC')->get();
    return view('layout.welcome', compact('cours'));
   


  
}
public function __construct()
{
   $this->middleware('auth');
}

public function show($id){
    $cours = \App\Cour::find($id);
    return view("cours.show", compact('cours'));
 }
 

}

