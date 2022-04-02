<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bejegyzesek;
use App\Models\tevekenyseg;

class BejegyzesekController extends Controller
{

    public function ujbejegyzes()
    {
        $tevekenysegs = tevekenyseg::all();
        return view('task/new', ['tevekenysegs' => $tevekenysegs]);
    }


    public function bejegyzes(Request $request) {

        
    
        $bejegyzesek = new bejegyzesek();
        $bejegyzesek -> osztaly_id = $request -> osztaly_id;
        $bejegyzesek->tevekenyseg_id = $request->tevekenyseg_neve;
        $bejegyzesek -> allapot = $request -> allapot;
        $bejegyzesek->save();
    
        return redirect('/task/bejegyzesek');
    }




    public function bejegyzesek()
{
    
    $bejegyzeseks = bejegyzesek::all();
    foreach ($bejegyzeseks as $bejegyzesek) {
        $bejegyzesek -> tevekenyseg;
    }
    return view('task.bejegyzesek', ['bejegyzesek' => $bejegyzesek]);
}
}
