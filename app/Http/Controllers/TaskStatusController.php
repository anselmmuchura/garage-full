<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TaskStatus;
use RealRashid\SweetAlert\Facades\Alert;

class TaskStatusController extends Controller
{
    public function store(Request $request)
    {  
        $validator = Validator::make($request->all(), [
            'status'=> 'required',
            'sessionId' => 'required'
        ]);

        if(!$validator){
            Alert::error('Error', 'The system is unable to create Task. Try again Later!');
            return redirect()->back()->withErrors($validator)
            ->withInput();
        }
        $data = $validator->validated();
        
        $createdStatus = TaskStatus::create([
            'status' => $data['status']
        ]);

        if($createdStatus){
            Alert::success('Success', 'Task Added!');
            return redirect()->route('session.view', $data['sessionId']);
        }else{
            Alert::error('Error', 'The system is unable to add Task. Try again Later!');
            return redirect()->back();
        }  
        
    }
}
