<?php

namespace App\View\Components;
use Illuminate\View\Component;

class btn extends Component
{
    public $type;
    public $valeur;
    public $checkSubmitBtn;
    public $hauteur;
    public $largeur;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type,$valeur, $checkSubmitBtn = null, $largeur = null , $hauteur=null,$id=null)
    {
        $this->type = $type;
        $this->valeur = $valeur;
        $this->checkSubmitBtn = $checkSubmitBtn;
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // largeur par defaut 
        if(is_null($this->largeur)){
            $this->largeur = "w-32";
        }

        //Couleur du btn
        if($this->type == "error"){
            //Style btn error
            $couleur = "bg-red-600";
            $hover_couleur =  "bg-red-700";
        }elseif($this->type == "success"){
            //Style btn success
            $couleur = "bg-green-600";
            $hover_couleur =  "bg-green-700";
        }elseif($this->type == "info"){
            //Style btn info
            $couleur = "bg-blue-600";
            $hover_couleur =  "bg-blue-700";
        }elseif($this->type == "warning"){
            //Style btn warning
            $couleur = "bg-amber-600";
            $hover_couleur =  "bg-amber-700";
        }
        
        return view('components.btn',[
            'couleur' => $couleur,
            'hover_couleur' =>$hover_couleur,
            'valeur' => $this->valeur,
            'checkSubmitBtn' => $this->checkSubmitBtn,
            'hauteur' => $this->hauteur,
            'largeur' => $this->largeur,
        ]);
    }
}
