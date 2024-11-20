<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        // Fetch customers from the database
        $customers = Customer::all();

        // Return the data to the view
        return view('index', compact('customers'));
    }
}
