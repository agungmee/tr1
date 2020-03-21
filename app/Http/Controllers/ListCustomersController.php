<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListCustomer;
use Datatables;

class ListCustomersController extends Controller
{
    public function getAllCustomers()
    {   
        return Datatables::of(ListCustomer::query())->make(true);
    }

    public function index()
    {
        return view('customers.list_customers');
    }
}
