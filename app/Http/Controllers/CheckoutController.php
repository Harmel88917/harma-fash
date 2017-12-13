<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function checkout()
   {
       return view('checkout');
   }
 
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function checkoutPost(Request $request)
   {
       $this->validate($request, [
        'name' => 'required',
        'addressLine' => 'required',
        'city' => 'required',
        'state' => 'required',
        'country' => 'required',
        'phone' => 'required'
        ]);
 
       checkout::create($request->all());
 
       return back()->with('success', 'You can now pay, your form has been submitted');
   }
}
