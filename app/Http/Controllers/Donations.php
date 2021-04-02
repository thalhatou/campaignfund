<?php
namespace App\Http\Controllers;
use App\Models\PayUnit;
use Illuminate\Http\Request;

class Donations extends Controller
{
    //
    public function donate(Request $request){
    $amount = $request->input('amount');
     $myPayment = new PayUnit(
      "de5730bdffed6b520660e746598b82c7085a721a",
      "9aa2d4c3-b83b-44d7-968e-59b79665ee05",
      "payunit_sand_50Pf7uAtz",
      "http://127.0.0.1:8000/pay-status",
      "notifyUrl",
      "mode",
      "description",
      "purchaseRef",
      "XAF",
      "name"
    );
     $myPayment->makePayment($amount);
    }

}

