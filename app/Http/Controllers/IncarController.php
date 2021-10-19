<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Vehicle;
use App\Models\Incar;
use App\Models\Components;
use RealRashid\SweetAlert\Facades\Alert;

class IncarController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, Int $component_id)
    {  
        $validator = Validator::make($request->all(), [
            'incar'=> 'required',
            'sessionId' => 'required'
        ]);

        if(!$validator){
            Alert::error('Error', 'The system is unable to create Incar. Try again Later!');
            return redirect()->back()->withErrors($validator)
            ->withInput();
        }
        $data = $validator->validated();
        
        $createdIncar = Incar::create([
            'incar' => $data['incar'],
            'service_id' => $data['sessionId'],
            'component_id' => $component_id,
        ]);

        if($createdIncar){
            Alert::success('Success', 'Incar Added!');
            return redirect()->route('session.view', $data['sessionId']);
        }else{
            Alert::error('Error', 'The system is unable to add Incar. Try again Later!');
            return redirect()->back();
        }  
        
    }


    public function update(Request $request, Int $id)
    {  
        $validator = Validator::make($request->all(), [
            'incar'=> 'required',
            'sessionId' => 'required'
        ]);

        if(!$validator){
            Alert::error('Error', 'The system is unable to create Incar. Try again Later!');
            return redirect()->back()->withErrors($validator)
            ->withInput();
        }
        $data = $validator->validated();

        if (Incar::where('id', $id)->exists()) {
            $incar = Incar::find($id);
            $incar->incar = $data['incar'];
            $incar->save();

            Alert::success('Success', 'Incar Updated!');
            return redirect()->route('session.view', $data['sessionId']);
        }else{
            Alert::error('Error', 'The system is unable to update Incar. Try again Later!');
            return redirect()->back();
        } 
    }

    public function destroy ($id) {

        if (Incar::where('id', $id)->exists()) {
            $incar = Incar::find($id);
            $sessionId = $incar->component->service->first()->id;
            $incar->delete();
  
            Alert::success('Success', 'Incar Deleted!');
            return redirect()->route('session.view', $sessionId);
        }else{
            Alert::error('Error', 'The system is unable to delete Incar. Try again Later!');
            return redirect()->back();
        } 
      }
}
