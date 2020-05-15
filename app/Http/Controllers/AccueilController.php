<?php

namespace App\Http\Controllers;

use App\Accueil;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accueils = Accueil::all();
        return view('back.accueil',compact('accueils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.accueilcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accueil=new Accueil();
        $accueil->titre=request('titre');
        $accueil->description=request('description');
        $accueil->img_accueil=request('img_Accueil');
        $accueil->save();
        return redirect()->route('accueil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function show(Accueil $accueil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $accueils = Accueil::find($id);
        return view('edit.accueiledit', compact('accueils'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $accueils = Accueil::find($id);
        $accueils ->titre=request('titre');
        $accueils ->description=request('description');
        $accueils ->img_Accueil=request('img_Accueil');
        $accueils ->save();
        return redirect()->route('accueil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Accueil::find($id)->delete();
        return redirect()->back();
    }
}
