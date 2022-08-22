<?php

namespace App\Http\Controllers;

use App\Models\Membres;
use Illuminate\Http\Request;

class FemmesController extends Controller
{
    public function femmes(){
        $femaleMembres = Membres::where('gender', '=', 'female')->get();
        return view('pages.femmes', compact('femaleMembres'));
    }
    public function destroy($id){
        $destroy = Membres::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
