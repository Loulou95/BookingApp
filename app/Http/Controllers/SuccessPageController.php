<?php

namespace App\Http\Controllers;
use App\Customers;
use Illuminate\Http\Request;

class SuccessPageController extends Controller
{
    public function index()
    {
        return view('SuccessPage');
    }




    public function store(Request $request)
    {
         $customer = new Customers;
         $customer->name = $request->name;
         $customer->number = $request->number;
         $customer->AppointmentTimeDate = $request->date;


         $customer->save();
         return $customer;
     }

}
