<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;

class EntrepriseController extends Controller
{
    public function index(){

        $entreprises = Entreprise::all();
       // dd($entreprises);
        return view('Bien.create',compact('entreprises'));


    }
}
