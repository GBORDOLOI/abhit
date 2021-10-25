<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Chapter;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request){
        $cartCourse = [];
        $countItemInsideCart = 0;
        // $cart = [];
        $chapter = [];
        if(Auth::check()){
            $cartCourse=  Cart::with('course')->where('user_id',Auth::user()->id)->where('is_paid', 0)->distinct()->get(['course_id']);
            $countItemInsideCart = Cart::where('user_id',Auth::user()->id)->where('is_paid', 0)->distinct()->get(['course_id'])->count();
           
        }

        return view('website.cart.cart')->with(['cartCourse' => $cartCourse,'countItemInsideCart' => $countItemInsideCart]);
        
    }

    public function addToCart(Request $request){
        $course_id = $request->course_id;
        $chapter_id = $request->chapter_id;
        foreach($chapter_id as $item){
            $create = Cart::create([
                'user_id' => Auth::user()->id,
                'course_id' => $course_id,
                'chapter_id' => $item
            ]);    
        }
        return response()->json(['message' => "Item added to cart successfully."]);
        
    }
}
