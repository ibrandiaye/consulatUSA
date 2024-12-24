<?php
namespace App\Repositories;

use App\Models\Carte;
use App\Repositories\RessourceRepository;
use Illuminate\Support\Facades\DB;

class CarteRepository extends RessourceRepository{
    public function __construct(Carte $carte){
        $this->model = $carte;
    }
  
    public function chercherParNomPrenomDateNaiss($data){
        return DB::table("cartes")
        ->where("nom",$data->nom)
        ->where("prenom",$data->prenom)
        ->where("nom",$data->date_naiss)
        ->first();
    }
}
