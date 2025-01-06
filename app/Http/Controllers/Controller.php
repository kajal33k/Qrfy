<?php

namespace App\Http\Controllers;

abstract class Controller
{
     // Display the login page
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

