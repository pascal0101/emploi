<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postulant;

class PostulantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $postulants = postulant::all();
            
        return view('postulant')->withPostulants($postulants);
    }


    public function liste(){
        $postulants = postulant::all();
        return view('page2')->withPostulants($postulants);
    }

        public function liste1(){
             
            return view('index');
        }
       

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page1');
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
    
            $postulant = new Postulant();

           $postulant->Nom=$request->input('Nom');
           $postulant->Email=$request->input('Email');
           $postulant->Offre=$request->input('Offre');
           $postulant->Lettre=$request->input('Lettre');
           $postulant->Cv=$request->input('Cv');
          


          //dd($postulant);

           $postulant->save();
           
        }
 
       session()->flash('message2','Votre demande a été enrégistré avec succes!!!');
                return redirect('/emplois'); 


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
