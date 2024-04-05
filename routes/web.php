<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


/*
- Ny Route dia afaka hanaovana requete HTTP
- Mila argument iray izy na maromaro miankina amin'ilay besoin
- Fa par défaut omena Controller iray izy (sous forme tableau [Controller_Name::class , "fonction"])
 de omena azy ilay mehode na fonction anatin'ilay controller nomena azy
- Ny route dia manana method GET, POST,PUT/UPDATE, DELETE, afaka hampiasana amina besoin spécifique iray , route iray = method iray 
*/


/*Route atao point d'entrée an 'ilay application */
/* 
    Nomena Controller iray izy hoe HomeController
     manaraka ilay efa voalaza teo ambony , ary io controller 
     io manana fonction na methode antsoina hoe index mamoaka na mi-return view na page iray
*/
Route::get('/', [HomeController::class,"index"] );
