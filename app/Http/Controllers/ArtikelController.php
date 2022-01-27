<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    //

    public function showCreate(){
        return view('backend/artikelCreate');
    }

    public function create(Request $request){
        $artikel = $request->validate([
            'naam' => 'required',
            'link_to_site' => 'required',
            'plaatje' => 'required|image|mimes:png,jpeg,jpg,gif',
            'beschrijving' => 'required',
            'prijs' => 'required'
        ]);

        Wishlist::create($request->all);
        return redirect()->back();
    }

    public function update(Request $request, $id){
        Wishlist::update
    }
}
