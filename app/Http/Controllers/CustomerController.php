<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
        $custom = Customer::all();
        return($custom);
    }
    public function store($code_customer,$name,$email,$country,$city,$address,$contact_number){
        $custom = new Customer();
        $custom->code_customer = $code_customer;
        $custom->name          = $name;
        $custom->email         = $email;
        $custom->country       = $country;
        $custom->city          = $city;
        $custom->address       = $address;
        $custom->contact_number= $contact_number;
        $custom->save();
        return $custom;
    }

    public function update($id,$code_customer,$name,$email,$country,$city,$address,$contact_number){
        $custom = Customer::find($id);
        $custom->code_customer = $code_customer;
        $custom->name          = $name;
        $custom->email         = $email;
        $custom->country       = $country;
        $custom->city          = $city;
        $custom->address       = $address;
        $custom->contact_number= $contact_number;
        $custom->save();
        return $custom;
    }

    public function delete($id){
        $custom =Customer::find($id);
        $custom->delete();
        return $custom;
    }
}
