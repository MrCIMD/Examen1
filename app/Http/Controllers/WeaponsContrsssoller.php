<?php

namespace App\Http\Controllers;

use App\Weapon;
use Illuminate\Http\Request;
// WeaponsController
class WeaponsContrsssoller extends Controller
{
    public function GetWeapons(){
        $weapons = Weapon::All();
        return view('pages.weapons.index', ['weapons' => $weapons]);
    }

    public function GetWeapon($id){
        $weapon = Weapon::where('id','=',$id)->get();
        return json_encode($weapon);
    }
}
