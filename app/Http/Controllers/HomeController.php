<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\type_demande;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $demandes=Demande::all();
        $type_demandes=type_demande::all();
        return view('home',['demandes'=>$demandes,'type_demandes'=>$type_demandes]);
    }

    public function create_demande(Request $r)
    {
        //dd($request->type_demande);
        $new_demande=new Demande();
        $new_demande->type_demande_id=$r->type_demande;
        $new_demande->date_atterissage =$r->date_att;
        $new_demande->demandeur=$r->demandeur;
        $new_demande->description=$r->description;
        $new_demande->duree=$r->duree;
        $new_demande->nombre_intervenat=$r->nombre_intervenant;
        $new_demande->nombre_intervenat_externe=$r->nombre_intervenant_externe;
        $new_demande->dependance_entite_voisine=$r->dependance;
        $new_demande->entite_id=Auth::user()->entite_id;
        $new_demande->user_id=Auth::user()->id;
        $new_demande->save();
        return Redirect("/home");

    }
}
