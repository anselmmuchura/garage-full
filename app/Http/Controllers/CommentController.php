<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Vehicle;
use App\Models\Comment;
use App\Models\Components;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Request $request, Int $component_id)
    {  
        $validator = Validator::make($request->all(), [
            'comment'=> 'required',
            'sessionId' => 'required'
        ]);

        if(!$validator){
            Alert::error('Error', 'The system is unable to create Comment. Try again Later!');
            return redirect()->back()->withErrors($validator)
            ->withInput();
        }
        $data = $validator->validated();
        
        $createdComment = Comment::create([
            'comment' => Str::title($data['comment']),
            'service_id' => $data['sessionId'],
            'components_id' => $component_id,
        ]);

        if($createdComment){
            Alert::success('Success', 'Comment Added!');
            return redirect()->route('session.view', $data['sessionId']);
        }else{
            Alert::error('Error', 'The system is unable to add Comment. Try again Later!');
            return redirect()->back();
        }  
        
    }


    public function update(Request $request, Int $id)
    {  
        $validator = Validator::make($request->all(), [
            'comment'=> 'required',
            'sessionId' => 'required'
        ]);

        if(!$validator){
            Alert::error('Error', 'The system is unable to create Comment. Try again Later!');
            return redirect()->back()->withErrors($validator)
            ->withInput();
        }
        $data = $validator->validated();

        if (Comment::where('id', $id)->exists()) {
            $comment = Comment::find($id);
            $comment->comment = Str::title($data['comment']);
            $comment->save();

            Alert::success('Success', 'Comment Updated!');
            return redirect()->route('session.view', $data['sessionId']);
        }else{
            Alert::error('Error', 'The system is unable to update Comment. Try again Later!');
            return redirect()->back();
        } 
    }

    public function destroy ($id) {

        if (Comment::where('id', $id)->exists()) {
            $comment = Comment::find($id);
            $sessionId = $comment->component->service->first()->id;
            $comment->delete();
  
            Alert::success('Success', 'Comment Deleted!');
            return redirect()->route('session.view', $sessionId);
        }else{
            Alert::error('Error', 'The system is unable to delete Comment. Try again Later!');
            return redirect()->back();
        } 
      }
}
