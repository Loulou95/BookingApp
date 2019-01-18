<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;

class EnquiriesController extends Controller
{
    public function create()
{


    //return view('Enquiries');
}

   public function getall($id = null){
      return Customers::all();
      //must be json response
      $this->validate($request,[
          'number'=>'required|unique:user|email',
      ]);
   }

   public function getClient($id)
   {
       $customer=Customers::find($id);
       return view('Enquiries', ['customers' => $customers]);
   }

   public function delete($id)
      {
      	Customers::find($id)->delete();
      	return response()->json(['success'=>"Product Deleted successfully.", 'tr'=>'tr_'.$id]);
      }

   public function getlastenquiry()
   {
      $customers = Customers::all();
       return view('Enquiries', ['customers' => $customers]);
   }


}
