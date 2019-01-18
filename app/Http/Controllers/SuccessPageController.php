<?php

namespace App\Http\Controllers;
use App\Customers;
use Illuminate\Http\Request;

class SuccessPageController extends Controller
{
    public function index()
    {
        return view('Enquiries');

    }



    public function store(Request $request)
    {
        //if(Customers::where('number',$request->number)->first()){

            //dd('123');
        //}

         $customer = new Customers;
         $customer->name = $request->name;
         $customer->number = $request->number;
         $customer->AppointmentTimeDate = $request->date;
         $customer->number = $request->number;


         $customer->save();
         return $customer;
     }



}
