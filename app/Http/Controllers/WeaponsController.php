<?php

namespace App\Http\Controllers;

use App\Weapon;
use Illuminate\Http\Request;

class WeaponsController extends Controller
{
    public function GetWeapons(){
        $weapons = Weapon::get();
        return response()->json(['success' => true, 'content' => $weapons], 200);
    }

    public function GetWeapon(Int $id){
        $weapon = Weapon::find($id);
        return response()->json(['success' => true, 'content' => $weapon], 200);
    }

    public function PostWeapon(Request $request){
        if ($request) {
            $weapon = new Weapon();
            if ($request->hasFile('image')) {
                $image = $request->image;
                $fileName = hash('sha256', date('h-i-s, j-m-y, it is w Day')) . '.' . pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
                $destinationPath = base_path() . '/public/uploads/images/';
                $image->move($destinationPath, $fileName);
                $weapon->image = $fileName;
            } else {
                $weapon->image = 'noimage.png';
            }
            $weapon->name = $request->name;
            $weapon->precision = $request->precision;
            $weapon->scope = $request->scope;
            $weapon->hurt = $request->hurt;
            $weapon->save();
            return  response()->json(['success' => true]);
        }
    }

    public function PatchWeapon(Request $request, Int $id){
        // return response()->json(['id' => $id, 'weapon' => $request], 200);
        if ($request) {
            $weapon = Weapon::find($id);
            $weapon->name = $request->name;
            $weapon->precision = $request->precision;
            $weapon->scope = $request->scope;
            $weapon->hurt = $request->hurt;
            $weapon->save();
            return response()->json(['success' => true]);
        }
    }

    public function DeleteWeapon(Int $id){
        $weapon = Weapon::find($id);

        if ($weapon->delete()) {
            return response()->json(['success' => true], 200);
        } else {
            return response()->json(['success' => false], 404);
        }
    }
}
