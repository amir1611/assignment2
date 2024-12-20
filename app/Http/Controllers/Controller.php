<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
    {
        // Fetch customers from the database
        $customers = Customer::all();

        // Return the data to the view
        return view('customers.index', compact('customers'));
    }
}
