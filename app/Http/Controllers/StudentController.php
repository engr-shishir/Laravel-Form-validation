<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function index()
   {
    return view('crud');
   }

   public function store(Request $request)
   {
    $request->validate([
      'name' => 'required',
      'class' => 'required',
      'roll' => 'required',
    ],[
      'name.required' => 'Please Input Your Name',
      'class.required' => 'Please Input Your Class',
      'roll.required' => 'Please Input Your Roll',
   ]);
   }
}
