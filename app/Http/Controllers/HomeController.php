<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   // Display the login page
   public function index()
   {
      return view('frontend.index');
   }

   public function about()
   {
      return view('frontend.about');
   }

   public function login()
   {
       return view('frontend.login');
   }

   public function plans()
   {
      return view('frontend.plans');
   }

   public function faq()
   {
      return view('frontend.faq');
   }

   public function api()
   {
      return view('frontend.api');
   }

   public function staticqr()
   {
      return view('frontend.staticqr');
   }

   
   public function typesofqr()
   {
      return view('frontend.typesofqr');
   }
}
