<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Components;
use RealRashid\SweetAlert\Facades\Alert;

class ComponentsController extends Controller
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

    public function update(Request $request, Int $id)
    {  
        $validator = Validator::make($request->all(), [
            'rear_view_mirror' => 'required',
            'windshield' => 'required',
            'air_conditioning_operation' => 'required',
            'dash_board_instrumentation' => 'required',
            'internal_lighting' => 'required',
            'floor_carpeting' => 'required',
            'tyre_condition' => 'required',
            'spear_wheel' => 'required',
            'toolkit' => 'required',
            'radio' => 'required',
            'session_id'=> 'required',
            'vehicle_id' => 'required'
        ]);

        if(!$validator){
            Alert::error('Error', 'The system is unable to create Session. Try again Later!');
            return redirect()->back()->withErrors($validator)
            ->withInput();
        }
        $data = $validator->validated();

        //dd($data);

        $updatedComponent = Components::where('id', $id)->update([
            'rear_view_mirror' => $data['rear_view_mirror'],
            'windshield' => $data['windshield'],
            'air_conditioning_operation' => $data['air_conditioning_operation'],
            'dash_board_instrumentation' => $data['dash_board_instrumentation'],
            'internal_lighting' => $data['internal_lighting'],
            'floor_carpeting' => $data['floor_carpeting'],
            'tyre_condition' => $data['tyre_condition'],
            'spear_wheel' => $data['spear_wheel'],
            'toolkit' => $data['toolkit'],
            'radio' => $data['radio'],
            'vehicle_id' => $data['vehicle_id'],
            'service_id' => $data['session_id']
        ]);

        if($updatedComponent){
            Alert::success('Success', 'Inspection Updated!');
            return redirect()->back();
        }else{
            Alert::error('Error', 'The system is unable to Update Inspection. Try again Later!');
            return redirect()->back();
        }  
        
    }
}
