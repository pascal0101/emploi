<?php

namespace App\Http\Controllers;

use App\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $offres = offre::all();
            
        return view('emplois')->withOffres($offres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addjob1');
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
    
            $offre = new Offre();

           $offre->Email=$request->input('Email');
           $offre->Titre=$request->input('Titre');
           $offre->Lieu=$request->input('Lieu');
           $offre->Type=$request->input('Type');
           $offre->Categorie=$request->input('Categorie');
           $offre->Description=$request->input('Description');
           $offre->DateFin=$request->input('DateFin');
           $offre->Entreprise=$request->input('Entreprise');
           $offre->Site=$request->input('Site');
          
          //dd($offre);

             $offre->save();
           
        }

            session()->flash('message','Offre publier avec succes!!!');
                return redirect('/emp'); 
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function show(Offre $offre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function edit(Offre $offre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offre $offre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offre $offre)
    {
        //
    }
}
