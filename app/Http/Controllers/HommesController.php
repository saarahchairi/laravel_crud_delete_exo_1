<?php

namespace App\Http\Controllers;

use App\Models\Membres;
use Illuminate\Http\Request;

class HommesController extends Controller
{
    public function hommes(){
        $maleMembres = Membres::where('gender', '=', 'male')->take(15)->get();
        return view('pages.hommes', compact('maleMembres'));
    }
    public function destroy($id){
        $destroy = Membres::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
