<?php

namespace App\Http\Controllers;

use Illuminate\HttpRequest;
use App\Models\JumiaH;
use App\Models\Product;
use App\Models\Cart;
use App\Models\order;
use App\Models\orderitems;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;

class JumiaHController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // home
    public function HomeP(){
        $car = Cart:: get();
        $cat =Product::where("cat", "device")->get();
        $bea =Product::where("cat", "beauty")->get();
        return view("Jumiahome.HomeP", ["car" => $car, "cat" => $cat, "bea" => $bea ]);
    }




    // end

    // cart
    public function myCART(){
        $get = Product::get();
        $car = Cart:: get();
        return view("MyCart.myCART", ["get"=>$get, "car" =>$car, ]);
    }
    function my_cart(Request $request){
        $input = request()->validate([
            "proId" => "required",
            "item" => "required",
            "qty" =>"required",
            "sqty" =>"required",
            "price" => "required",
            "cat" =>"required",
            // "userId" =>Auth::user()->id,
        ]);
        $input["userId"]=Auth::user()->id;


        $fix=Cart::where("proId", $request->proId)->first();

        if (!empty($fix)) {
            Session::flash('message', 'Item already exist');

        }
            else
            { Cart:: create($input);
            }




        return back();
    }

    public function order(){

            $input = new order();
            $input->name = request()->input('name');
            $input->phone = request()->input('phone');

            $input->save();

           $gets  = Cart::get();
// dd($get);

foreach($gets as $get){

    orderitems::create([
        'id' => $get['id'],
        'proId'=> $get['proId'],
        'item'=> $get['item'],
        'qty'=> $get['qty'],
        'sqty'=> $get['sqty'],
        'price'=> $get['price'],
        'cat'=> $get['cat'],
        'orderId' => $input['id']
       ]);

}

           $getCart = Cart::get();
           Cart::destroy($getCart);


           $curQty = Product::where("id", $get['proId'])->first()->qty;


           Product::where("id",$get['proId'])->update(['qty'=>$curQty- $get['qty']]);





             return back();


    }



    public function delete2($id){
        $remove = Cart::find($id);
        $remove -> delete();
        return back();
    }



    public function update2($id){
        $upload = request()->validate([
            "qty" => "required",
            "sqty" => "required",
        ]);
        if($upload["qty"] > $upload["sqty"]){
            return back();
        }else{
            Cart:: whereId($id)->update([
                "qty" =>$upload["qty"],
                "sqty" =>$upload["sqty"] - $upload["qty"]
            ]);



        // Product:: where("id", $getId->item)->update([
        //     "qty" =>$upload["sqty"] - $upload["qty"]
        // ]);
        return back();
    }
        return back();
    }

    // end


    // product list
    public function Productlist(){
        $get = Product::get();
        return view("ProductList.Productlist", ["get"=>$get]);
    }


    function Store(){
        $input = request()->validate([
            "item" => "required",
            "price" =>"required",
            "qty" => "required",
            "desc" =>"required",
            "cat" =>"required",
            "myimage" =>"required",
        ]);
        if(request("myimage")){
            $input["myimage"] = request("myimage")->store("Product");
        }

        Product:: create($input);
        return back();

    }

    public function update($id){
        $upload = request()->validate([
            "item" => "required",
            "price" =>"required",
            "qty" => "required",
            "desc" =>"required",
            "cat" =>"required",
            "myimage" =>"required",
        ]);



        Product:: whereId($id)->update($upload);
        return back();
    }

    public function delete($id){
        $remove = Product::find($id);
        $remove->delete();
        return back();
    }

    // start

    public function airPod(){
        return view("Airpod.airPod");
    }
    // end

    // start
    public function Phone(){
        return view("Airpod.Phone");
    }


    public function About(){
        return view("Jumiahome.About");
    }
}
