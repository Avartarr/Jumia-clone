<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mybeauty;
use App\Models\Product;

class MybeautyController extends Controller
{
    public function Beauty(){
        $bea =Product::where("cat", "beauty")->get();
        return view("ProductList.Beauty", ["bea" => $bea]);
    }

    function Bstore(){
        $input = request()->validate([
            "item" => "required",
            "qty" => "required",
            "price" => "required",
            "image" => "required",
        ]);
         if (request("image")){
             $input["image"] = request("image")->store("Mybeauty");
        }
        Mybeauty:: create($input);
        return back();
    }

    public function Supermarket(){
        $food =Product::where("cat", "food")->get();
        return view('Jumiahome.Supermarket',["food" => $food]);
    }


    public function Office (){
        $off =Product::where("cat", "home appliances")-> get();
        return view("Jumiahome.Office", ["off" => $off]);
    }
}
