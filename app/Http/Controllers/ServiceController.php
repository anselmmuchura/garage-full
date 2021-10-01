<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Vehicle;
use App\Models\Service;
use App\Models\Comment;
use App\Models\Todo;
use App\Models\Components;
use Mail;
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
        
        $createdSession = Service::create([
            'kilometers' => $data['milleage'],
            'fuel' => $data['fuel'],
            'timeOut' => $data['timeOut'],
            'battery' => $data['battery'],
            'vehicle_id' => $data['vehicle_id'],
        ]);

        $createComponent = Components::create([
            'rear_view_mirror' => 'N/A',
            'windshield' => 'N/A',
            'air_conditioning_operation' => 'N/A',
            'dash_board_instrumentation' => 'N/A',
            'internal_lighting' => 'N/A',
            'floor_carpeting' => 'N/A',
            'tyre_condition' => 'N/A',
            'spear_wheel' => 'N/A',
            'toolkit' => 'N/A',
            'radio' => 'N/A',
            'vehicle_id' => $data['vehicle_id'],
            'service_id' => $createdSession->id
        ]);

        $vehicle = Vehicle::find($data['vehicle_id'])->first()->email;

        //dd($vehicle);

        $mailSent = Mail::send('email.vehicleAdded', ['user' => Vehicle::find($data['vehicle_id'])->first()->email], function($message) use($vehicle){
            $message->to($vehicle);
            $message->subject('Vehicle Service Initialization');
        });

        if($createdSession){
            Alert::success('Success', 'Session Added!');
            return redirect()->route('inspections.index', $createdSession->id);
        }else{
            Alert::error('Error', 'The system is unable to create Session. Try again Later!');
            return redirect()->back();
        }  
        
    }


    public function view(Int $sessionId)
    {
        $session = Service::where('id',$sessionId)->first();

        $vehicle = Vehicle::where('id', $session->vehicle_id)->first();

        $component = Components::where('vehicle_id', $vehicle->id)->where('service_id', $sessionId)->first();

        $tasks = Todo::where('component_id', $component->id)->get();

        $comments = Comment::where('component_id', $component->id)->get();

        return view('sessions.show', ['session'=> $session, 'vehicle' => $vehicle, 'inspection' => $component, 'tasks' => $tasks, 'comments' => $comments]);
    }

    public function update(Request $request, Int $id)
    {  
        $validator = Validator::make($request->all(), [
            'milleage'=> 'required',
            'fuel'=> 'required',
            'timeOut'=> 'required',
            'battery'=> 'required',
            'vehicle_id' => 'required'
        ]);

        if(!$validator){
            Alert::error('Error', 'The system is unable to create Task. Try again Later!');
            return redirect()->back()->withErrors($validator)
            ->withInput();
        }
        $data = $validator->validated();

        if (Service::where('id', $id)->exists()) {
            $service = Service::find($id);
            $service->kilometers = $data['milleage'];
            $service->fuel = $data['fuel'];
            $service->timeOut = $data['timeOut'];
            $service->battery = $data['battery'];
            $service->vehicle_id = $data['vehicle_id'];
            $service->save();

            Alert::success('Success', 'Session Updated!');
            return redirect()->route('sessions.index');
        }else{
            Alert::error('Error', 'The system is unable to update Task. Try again Later!');
            return redirect()->back();
        } 
    }
}
