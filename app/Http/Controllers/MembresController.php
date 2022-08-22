<?php

namespace App\Http\Controllers;

use App\Models\Membres;
use Illuminate\Http\Request;

class MembresController extends Controller
{
    public function membres(){
        $allMembres = Membres::all();
        return view('pages.membres', compact('allMembres'));
    }
    public function store(Request $request){
        $store = new Membres;
        $store->name = $request->name;
        $store->age = $request->age;
        $store->gender = $request->gender;
        $store->save();
        return redirect("/");
    }
    public function destroy($id){
        $destroy = Membres::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
