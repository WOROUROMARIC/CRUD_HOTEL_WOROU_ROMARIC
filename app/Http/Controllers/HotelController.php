<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hotel;

class HotelController extends Controller
{
    public function liste_hotel(){
        $hotels = Hotel :: orderBy('id')->paginate(2);
        return view('hotel.liste',compact('hotels'));
    }

    public function ajouter_hotel(){
        return view ('hotel.ajouter');
    }

    public function ajouter_hotel_traitement(Request $request){
        $request->validate([
            
            'Nom_de_lHotel' =>'required',
            'description_de_lHotel' =>'required',
            'nom_de_la_chambre' =>'required',
            'prix' =>'required',
            'Nombre_de_lits' =>'required',
            'max_dadultes' =>'required',
            'Enfants_maximum_autorisé' =>'required',
            'Attributs' =>'required',
           'Status' =>'required',
    
        ]);
        $hotel = new Hotel();
        
        $hotel ->Nom_de_lHotel = $request->Nom_de_lHotel;
        $hotel ->description_de_lHotel = $request->description_de_lHotel;
        $hotel ->nom_de_la_chambre = $request->nom_de_la_chambre;
        $hotel ->prix = $request->prix;
        $hotel ->Nombre_de_lits = $request->Nombre_de_lits;
        $hotel ->max_dadultes = $request->max_dadultes;
        $hotel ->Enfants_maximum_autorisé = $request->Enfants_maximum_autorisé;
        $hotel ->Attributs = $request->Attributs;
        $hotel ->Status = $request->Status;
        $hotel ->save();

        return redirect('/ajouter')->with('Status', 'Les informations de l\'hotel a été bien ajouter.');
}

public function update_hotel($id){
    $hotels = Hotel :: find($id);

    return view ('hotel.update', compact('hotels'));

}

public function update_hotel_traitement(Request $request){
    $request->validate([
            
        'Nom_de_lHotel' =>'required',
        'description_de_lHotel' =>'required',
        'nom_de_la_chambre' =>'required',
        'prix' =>'required',
        'Nombre_de_lits' =>'required',
        'max_dadultes' =>'required',
        'Enfants_maximum_autorisé' =>'required',
        'Attributs' =>'required',
       'Status' =>'required',

    ]);
    $hotel = Hotel::find($request->id);;
    
    $hotel ->Nom_de_lHotel = $request->Nom_de_lHotel;
    $hotel ->description_de_lHotel = $request->description_de_lHotel;
    $hotel ->nom_de_la_chambre = $request->nom_de_la_chambre;
    $hotel ->prix = $request->prix;
    $hotel ->Nombre_de_lits = $request->Nombre_de_lits;
    $hotel ->max_dadultes = $request->max_dadultes;
    $hotel ->Enfants_maximum_autorisé = $request->Enfants_maximum_autorisé;
    $hotel ->Attributs = $request->Attributs;
    $hotel ->Status = $request->Status;
    $hotel ->update();

    return redirect('/hotel')->with('Status', 'Les informations de l\'hotel ont été bien modifié avec succes.');
 
}

public function delete_hotel($id){
    $hotel = Hotel ::find($id);
    $hotel->delete();
    return redirect('/hotel')->with('Status', 'Les informations de l\'hotel ont été supprimé avec succes.');

}
}