<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Vehicle;
use App\Models\Service;
use App\Models\Components;
use RealRashid\SweetAlert\Facades\Alert;


class ServiceController extends Controller
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
    public function index()
    {
        $sessions = Vehicle::rightJoin('services', 'vehicles.id', '=', 'services.vehicle_id')->get();

        $vehicles = Vehicle::get();

        return view('sessions', ['sessions'=> $sessions, 'vehicles' => $vehicles]);
    }


    public function store(Request $request)
    {  
        $validator = Validator::make($request->all(), [
            'milleage'=> 'required',
            'fuel'=> 'required',
            'timeIn'=> 'required',
            'timeOut'=> 'required',
            'battery'=> 'required',
            'vehicle_id' => 'required'
        ]);

        if(!$validator){
            Alert::error('Error', 'The system is unable to create Session. Try again Later!');
            return redirect()->back()->withErrors($validator)
            ->withInput();
        }
        $data = $validator->validated();

        //dd($data);
        
        $createSession = Service::create([
            'kilometers' => $data['milleage'],
            'fuel' => $data['fuel'],
            'timeIn' => $data['timeIn'],
            'timeOut' => $data['timeOut'],
            'battery' => $data['battery'],
            'vehicle_id' => $data['vehicle_id'],
        ]);

        if($createSession){
            Alert::success('Success', 'Session Added!');
            return redirect()->back();
        }else{
            Alert::error('Error', 'The system is unable to create Session. Try again Later!');
            return redirect()->back();
        }  
        
    }


    public function view(Int $sessionId)
    {
        $session = Service::where('id',$sessionId)->first();

        $vehicle = Vehicle::where('id', $session->vehicle_id)->first();

        $inspection = Components::where('vehicle_id', $vehicle->id)->where('service_id', $sessionId)->first();

        return view('sessions.show', ['session'=> $session, 'vehicle' => $vehicle, 'inspection' => $inspection, 'inspection' => $inspection]);
    }
}