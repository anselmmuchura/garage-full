<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Vehicle;
use App\Models\Todo;
use App\Models\Components;
use RealRashid\SweetAlert\Facades\Alert;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     $sessions = Vehicle::rightJoin('services', 'vehicles.id', '=', 'services.vehicle_id')->get();

    //     $vehicles = Vehicle::get();

    //     return view('sessions', ['sessions'=> $sessions, 'vehicles' => $vehicles]);
    // }


    public function store(Request $request, Int $component_id)
    {  
        $validator = Validator::make($request->all(), [
            'todo'=> 'required',
            'sessionId' => 'required'
        ]);

        if(!$validator){
            Alert::error('Error', 'The system is unable to create Task. Try again Later!');
            return redirect()->back()->withErrors($validator)
            ->withInput();
        }
        $data = $validator->validated();

        //dd($data);
        
        $createdTask = Todo::create([
            'todo' => $data['todo'],
            'service_id' => $data['sessionId'],
            'component_id' => $component_id,
        ]);

        if($createdTask){
            Alert::success('Success', 'Task Added!');
            return redirect()->route('session.view', $data['sessionId']);
        }else{
            Alert::error('Error', 'The system is unable to add Task. Try again Later!');
            return redirect()->back();
        }  
        
    }


    public function update(Request $request, Int $id)
    {  
        $validator = Validator::make($request->all(), [
            'todo'=> 'required',
            'sessionId' => 'required'
        ]);

        if(!$validator){
            Alert::error('Error', 'The system is unable to create Task. Try again Later!');
            return redirect()->back()->withErrors($validator)
            ->withInput();
        }
        $data = $validator->validated();

        if (Todo::where('id', $id)->exists()) {
            $task = Todo::find($id);
            $task->todo = $data['todo'];
            $task->save();

            Alert::success('Success', 'Task Updated!');
            return redirect()->route('session.view', $data['sessionId']);
        }else{
            Alert::error('Error', 'The system is unable to update Task. Try again Later!');
            return redirect()->back();
        } 
    }

    public function complete(Request $request, Int $id)
    {  
        $validator = Validator::make($request->all(), [
            'completed' => 'required',
            'sessionId' => 'required'
        ]);

        if(!$validator){
            Alert::error('Error', 'The system is unable to update Task. Try again Later!');
            return redirect()->back()->withErrors($validator)
            ->withInput();
        }
        $data = $validator->validated();

        

        if (Todo::where('id', $id)->exists()) {
            $task = Todo::find($id);
            if($data['completed'] === '0'){
                $task->checked = true;
            }else{
                $task->checked = false;
            }
            $task->save();
            //dd($task->checked);

            Alert::success('Success', 'Task Updated!');
            return redirect()->route('session.view', $data['sessionId']);
        }else{
            Alert::error('Error', 'The system is unable to update Task. Try again Later!');
            return redirect()->back();
        } 
    }

    public function destroy ($id) {

        if (Todo::where('id', $id)->exists()) {
            $task = Todo::find($id);
            $sessionId = $task->component->service->first()->id;
            $task->delete();
  
            Alert::success('Success', 'Task Deleted!');
            return redirect()->route('session.view', $sessionId);
        }else{
            Alert::error('Error', 'The system is unable to delete Task. Try again Later!');
            return redirect()->back();
        } 
      }
}
