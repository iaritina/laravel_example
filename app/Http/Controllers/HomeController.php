<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

/* 
    rehefa mamorona controller na model 
    dia aleo mijery doc officiel laravel fa 
    ao misy commande azo ampesaina amin'ny terminal
    manamora ny asa.
*/

class HomeController extends Controller
{
    /* Namorona fonction ou methode iray
     mitondra ny anarana index mba ahafana mi-affiche page iray */
    public function index() {
        /* Framework orienté objet ilay ampesaina de rehefa avy namorona model tsika 
            de afaka ampesaina iny model (objet) hi-manipuler-na donnée avy 
            any amin'ny BDD, tsy voatery mampiasa requete aty amin'ny back-end intsony 
            fa laravel manana moteur afaka mi-resaka tsara amin'ilay BDD, Eloquent ORM 
            no anaran'ilay izy, ORM pour Object Relational Mapping
        */

        /* Avy ni-creer model Utilisateur tsika ,
         dia ho ampesaina hakana an'ilay Utilisateurs rehetra misy ao BDD,
         ao amin'ny doc officiel zao ny solon'ny select * from table dia ny methode all(),
         dia namorona variable iray tsika hi-stocker_na ilay liste d'utilisateurs */

        $users = Utilisateur::all(); // ity zao ilay objet antsika (Utilisateur), de haka an'izy rehetra tsika de manao all()

        /* Mba ahafahana mi-passer donnée makany @ page iray 
        de misy fonction hoe compact an'ny php 8 miakatra izy,
         manamora ny fi-capturer-na variable iray @ alalan'ny anarany,
          ohatra netsika izao teto le liste utilisateurs stocké anaty variable iray mitondra anarana hoe users,
          dia le nom an ilay variable donc users,
           raha toa ka page ftsn ilay ho afficher-na de tsy asina compact izany, 
           fa ilay ananarin'ilay page ftsn (na ny dossier misy azy de . de  ny anarany aveo) */
        return view("index",compact("users"));
    }
}
