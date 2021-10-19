<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Vehicle;
use App\Models\Service;
use App\Models\Comment;
use App\Models\Todo;
use App\Models\Components;
use RealRashid\SweetAlert\Facades\Alert;

class InspectionController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Int $id)
    {
        
        $sessions = Service::where('id',$id)->first();

        $vehicle = $sessions->vehicle()->first();

        $component = Components::where('vehicle_id', $vehicle->id)->where('service_id', $id)->first();

        return view('inspections', ['sessions'=> $sessions, 'vehicle' => $vehicle, 'component' => $component]);
    }

}
