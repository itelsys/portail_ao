<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppelOffre;

class AppelOffreController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
   public function index(Request $request)
   {
       $s = $request->input('s');
       $appeloffres = AppelOffre::first()
       ->search($s)
       ->paginate(5);

       //Compact va créer un tableau de appeloffres qu'on va accéder depuis index
       return view('appeloffre.index', compact('appeloffres'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       //
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       //
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\appelOffre  $appelOffre
    * @return \Illuminate\Http\Response
    */
   public function show(AppelOffre $appelOffre)
   {

   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\appelOffre  $appelOffre
    * @return \Illuminate\Http\Response
    */
   public function edit(AppelOffre $appelOffre)
   {
       //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\appelOffre  $appelOffre
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, AppelOffre $appelOffre)
   {
       //
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\appelOffre  $appelOffre
    * @return \Illuminate\Http\Response
    */
   public function destroy(AppelOffre $appelOffre)
   {
       //
   }
}
