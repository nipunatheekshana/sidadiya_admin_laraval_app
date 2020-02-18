<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
   public function admin(){
      return view('pages.panel');
   }

   public function adminwall(){
      return view('pages.adminwall');
   }

   public function adminnotification(){
      return view('pages.notification');
   }

   public function adminwithdrawal(){
      return view('pages.withdrawal');
   }

   public function users(){
      return view('pages.users');
   }

   public function packages(){
      return view('pages.packages');
   }
}