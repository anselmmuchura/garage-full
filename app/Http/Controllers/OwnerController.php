<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $clients = Vehicle::rightJoin('services', 'vehicles.id', '=', 'services.vehicle_id')->get();
        

        return view('clients');
    }
}