<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Branch;
use Illuminate\Support\Facades\DB;


class CustomerController extends Controller
{
    public function create(Request $request){
        $customer = new Customer();
        $customer->branch_id = $request->branch_id;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->mobile = $request->mobile;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->dob = $request->dob;
        $customer->save();
        return redirect()->route('customer.detiles');
    }
    public function detiles(){
      $branch = Branch::find(3);
      return view('customer.detiles', compact('branch'));
    }

   
}
