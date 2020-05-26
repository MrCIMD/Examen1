<?php

namespace App\Http\Controllers;

use App\Weapon;
use Illuminate\Http\Request;

class WeaponsController extends Controller
{
    public function GetWeapons(){
        $weapons = Weapon::All();
        return 'Hola mundo!';
        // return json_encode($weapons);
    }

    public function GetWeapon($id){
        $weapon = Weapon::where('id','=',$id)->get();
        return 'Hola mundo!';
    }
}
