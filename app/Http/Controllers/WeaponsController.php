<?php

namespace App\Http\Controllers;

use App\Weapon;
use Illuminate\Http\Request;

class WeaponsController extends Controller
{
    public function GetWeapons(){
        $weapons = Weapon::All();
        return response()->json(['success' => true, 'content' => $weapons], 200);
    }

    public function PostWeapon(Request $request){
        if ($request) {
            if ($request->hasFile('image')) {
                $image = $request->image;
                $fileName = hash('sha256', date('h-i-s, j-m-y, it is w Day')) . '.' . pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
                $destinationPath = base_path() . '/public/uploads/images/';
                $image->move($destinationPath, $fileName);
                
            }
            $weapon = new Weapon();
            $weapon->name = $request->name;
            $weapon->image = $fileName;
            $weapon->precision = $request->precision;
            $weapon->scope = $request->scope;
            $weapon->hurt = $request->hurt;
            $weapon->save();
            return  response()->json(['success' => true, 'weapon' => $weapon] ,200);
        }
    }
}
