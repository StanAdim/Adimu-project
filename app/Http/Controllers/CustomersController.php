<?php

namespace App\Http\Controllers;

use App\Events\NewOrderEvent;
use App\Mail\CustomerMail;
use Illuminate\Http\Request;
use App\Customer;
use App\Company;
use Illuminate\Support\Facades\Mail;

class CustomersController extends Controller





{
    public function __construct()
    {
       $this->middleware('auth')->only('index');
 //$this->middleware('test');
    }

    public function  index(){

        $companies = Company::all();
        $customers=Customer::all();

        return view('customers.index',compact('companies','customers'));


    }

    public function create(){
        $companies = Company::all();
        $customer= new Customer();

        return view('customers.create',compact('companies','customer'));
    }

    public function store(){
        $data= Customer::create($this->validatedData());

        event(new NewOrderEvent($data));

        return redirect('customers/create')->with('status','Thank you we are working for you Service.
        We will be in touch soon');
    }

    public function show(Customer $customer){


        return view('customers.show',compact('customer'));
    }


    public function edit(Customer $customer)
    {
        $companies = Company::all();
        return view('customers.edit',compact('customer','companies'));

    }

    public function update(Customer $customer)
    {
        $customer ->update($this->validatedData());
        return redirect('customers/' .$customer->id);
    }

    public function destroy(Customer $customer)
    {
        $customer-> delete();
        return redirect('customers');
    }


   private function validatedData()
   {
       return request()->validate([

           'name'=> 'required',
           'email'=> 'required|email',
           'phone'=> 'required|min:10|max:12',
           'status'=> 'required',
           'company_id'=> '',
           'product'=> 'required'

       ]);
   }
}
