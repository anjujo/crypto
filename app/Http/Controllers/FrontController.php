<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
   public function index()
   {
    return view('frontend.index');
   }
   public function bank()
   {
    return view('frontend.bank');
   }
   public function cardList()
   {
    return view('frontend.cardlist');
   }
   public function basketCart()
   {
    return view('frontend.basketcart');
   }
}

