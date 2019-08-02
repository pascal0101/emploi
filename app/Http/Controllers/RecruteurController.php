<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recruteur;

class RecruteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addjob');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
             if($request->isMethod('post')){
    
            $recruteur = new Recruteur();

           $recruteur->NomEnt=$request->input('NomEnt');
           $recruteur->Adresse=$request->input('Adresse');
           $recruteur->Ville=$request->input('Ville');
           $recruteur->Site=$request->input('Site');
           $recruteur->Logo=$request->input('Logo');
           $recruteur->Secteur=$request->input('Secteur');

           $recruteur->Description=$request->input('Description');
           $recruteur->NomProp=$request->input('NomProp');
           $recruteur->PrenomProp=$request->input('PrenomProp');
           $recruteur->Tel=$request->input('Tel');
           $recruteur->email=$request->input('email');
           $recruteur->Lieu=$request->input('Lieu');

           $recruteur->MotPasse=$request->input('MotPasse');


          //dd($recruteur);

             $recruteur->save();
           
        }
             session()->flash('message1','Votre Entreprise a été enrégistré avec succes!!!');
                return redirect('/addjob'); 

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
