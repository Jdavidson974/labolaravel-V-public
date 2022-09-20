<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use App\Models\Cv;
use Exception;
use Illuminate\Http\Request;

class CompetenceController extends Controller
{

    public function index(){
        $competences = Competence::all();
        return view("competences.page-gestion-competences",[
            'title' => 'Gestion des compétences',
            'competences' => $competences,
        ]);
    }
    //Creation compétence
    public function create_competences(Request $request){
        $competence = new Competence();
        $newCompetence = $request->competence;
        //verification si le champ est vide
        if(is_null($newCompetence)){
            return back()->with('error','Veuillez entrer une compétence dans le champ.');
        }
        //traitement
        $competence->nom_competence = $newCompetence;
        $competence->save();
        // On redirige sur index de CompetenceController avec une variable session pour le flash message
        return back()->with('success','La compétence [ '.$newCompetence.' ] a bien été rajouter!');
    }

    public function delete(Request $request){
        $competence = Competence::find($request->id_competence);
        if(is_null($competence)){
            return ['error' => 'undefined'];
        }else{
            try{
                $competence->delete();
                return ['success'=>'La competence '. $competence->nom_competence .' a bien été supprimée. '];
            }catch(Exception $e){
                return['error'=>'Error critique'];
            }
        }

    }
     public function show(Request $request){
        $competences = Competence::all();
        return
            [
                'statut' => 'success',
                'competences_list' => $competences,
            ]
        ;
     }
}
