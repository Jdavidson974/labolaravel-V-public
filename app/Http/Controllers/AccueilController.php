<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class AccueilController extends Controller
{

    public function index(){
        $title = 'Accueil';
        // ICI ON RECHERCHE LE CV ACTIF POUR EXTRAIRE SONT ID ----------------------------------------------
        $cvActif = Cv::where('actif',1)->get();
        //ICI C'EST LE CAS OU IL N'Y A PAS DE CV ACTIF
        if($cvActif->isEmpty()){
            return view('accueil.accueil-sans-cv',[
                'title' => $title,
            ]);
        }

        foreach($cvActif as $elem){
            $idCv = $elem->id;
        }
        //--------------------------------------------------------------
        //ICI ON CHERCHE LE BON CV AVEC L'ID ET ON RECUPERE TOUTES LES DATA POUR LA VUE -----------------------
        $cv = Cv::find($idCv);
        //Recuperation de la citation du cv
        $citation = $cv->citation->example;
        // Recuperation du titre du cv
        $titreCv = $cv->titre_du_cv;
        // Recuperation des information du cv
        $info = $cv->informations->first();
        // Recuperation des diplomes/formations du cv
        $diplomeFormations = $cv->diplome_formations;
        // Recuperation des competences du cv
        $competences = $cv->competences;
        // Recuperation des experiences du cv
        $experiences = $cv->experiences;
        // Recuperation des atouts du cv
        $atouts = $cv->atouts;
        // Recuperation des langues du cv
        $langues = $cv->langues;
        // Recuperation des interets du cv
        $interets = $cv->interets;
        //----------------------------------------------------------------------------------------
        //--------------------RECUPERATION DE L'AGE AUTOMATIQUE EN FONCTION DE LA DATE DE NAISSANCE EN DB ET DE LA DATE DU SERVEUR------------------
        //recupere la date serveur
        $date_serv = Date::now();
        //recupere la date en db
        $date_db =  Date::create($info->naissance);
        //Calcule de l'age
        $age = $date_serv->format('Y') - $date_db->format('Y');
        //on check le mois ici
        if($date_serv->format('m') <= $date_db->format('m')){
            $age--;
        }else{
            //on check le jour ici
            if($date_serv->format('m') == $date_db->format('m') && $date_serv->format('d') < $date_db->format('d')){
                $age--;
            }
        }
        //------------------------------------------------------------------------

        return view('accueil.accueil',[
            "title" => $title,
            'titre_cv' => $titreCv,
            'citation' => $citation,
            "informations" =>$info,
            'age' => $age,
            'competences' => $competences,
            'diplomes_formations' => $diplomeFormations,
            'experiences' => $experiences,
            'atouts'=> $atouts,
            'langues'=> $langues,
            'interets' => $interets,
        ]);
    }
}
