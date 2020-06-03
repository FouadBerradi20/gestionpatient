<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use Carbon\Carbon;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Patient::all();

        return view('admin.patient.index',compact('all'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patient.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new Patient();
        $patient->matricule = $request->input('matricule');
        $patient->nom = $request->input('nom');
        $patient->prenom = $request->input('prenom');
        $patient->cin = $request->input('cin');
        $patient->datenaissance = $request->input('datenaissance');
        $patient->adresse = $request->input('adresse');
        $patient->pavillon = $request->input('pavillon');
        $patient->type = $request->input('type');
        $patient->age = 'fouad';
        $patient->matricule = $request->input('matricule');
        $patient->save();
       //session()->flash('success','patient a ete bien ajoutee');
        //return redirect()->intended('/system-management/patient');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
   
    return view('admin.patient.modifier',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);
    $patient->NomAdherents = $request->input('nom');
    $patient->Email = $request->input('mail');
    $patient->Numerotelephone = $request->input('numtele');

    $patient->save();   
    session()->flash('info','adherente a ete bien modifiee');

    return redirect('/system-management/adherente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
    $patient->delete();
    session()->flash('danger','patient supprimee');
    return redirect('system-management/adherente');
    }
}
