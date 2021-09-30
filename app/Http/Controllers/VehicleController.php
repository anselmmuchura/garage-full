<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::latest()->paginate(20);
        return view('vehicles.index', compact('vehicles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'regNo' => 'required|unique:vehicles',
        ]);
           
        $data = $request->all();

        
        
        $createVehicle = Vehicle::create([
            'regNo' => $data['regNo'],
            'make' => $data['make'],
            'model' => $data['model'],
            'engineNo' => $data['engineNo'],
            'vinNo' => $data['vinNo'],
            'fullName' => $data['name'],
            'email' => $data['email'],
            'phoneNumber' => $data['phone'],
        ]);
        
        Alert::success('Success', 'Vehicle Added!');
        return redirect("dashboard")->withSuccess('Success! Vehicle Added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function view(Int $id)
    {
        $client = Vehicle::find($id)->first();

        $sessions = $client->services;
        
        return view('clients.view', ['client'=> $client, 'sessions' => $sessions]);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Vehicle  $vehicle
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Vehicle $vehicle)
    // {
    //     return view('vehicles.edit', compact('vehicle'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Vehicle  $vehicle
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Vehicle $vehicle)
    // {
    //     request()->validate([
    //         'name' => 'required',
    //         'detail' => 'required',
    //     ]);

    //     $vehicle->update($request->all());

    //     return redirect()->route('vehicles.index')
    //         ->with('success', 'Vehicle updated successfully');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Vehicle  $vehicle
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Vehicle $vehicle)
    // {
    //     $vehicle->delete();

    //     return redirect()->route('vehicles.index')
    //         ->with('success', 'Vehicle deleted successfully');
    // }
}