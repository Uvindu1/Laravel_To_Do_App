<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request){
        $task = new Task;
        $this -> validate($request,[
          'task' =>'required|max:100|min:5'
        ]);
        $task -> task = $request -> task;
        $task -> save();
        $data = task::all();

        return viwe('tasks')->with('tasks',$data);
        
     //   return redirect()->back();
     /*   $this->validate($request,[
            'task'=>'required|max:100|min:5',
        ]);
      */  
    }
    public function UpdateTaskAsCompleted($id){
        $task = Task::find($id);
        $task -> iscompleted = 1;
        $task -> save();
        return redirect()->back(); 
    }

    public function UpdateTaskAsNotCompleted($id){
      $task = Task::find($id);
      $task -> iscompleted = 0;
      $task -> save();
      return redirect()->back(); 
    }

    public function Deleted($id){
      $task = Task::find($id);
      $task -> delete();
      return redirect()->back(); 

    }
}
