<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Service;

class HomeController extends Controller
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
        $users = DB::table('owners')
            ->rightJoin('vehicles', 'owners.id', '=', 'vehicles.owner_id')
            ->get();
            $profile;
            $client = array();

            foreach($users as $user){
                $profile = Service::where('vehicle_id', $user->id)->first();
                // array_push($users, $profile);
            }

            dd($users);
            
            

        return view('dashboard');
    }
}