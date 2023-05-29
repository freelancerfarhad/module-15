<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentControllers extends Controller
{
    //// task-1 form validation
    function FormValidation(Request $request){
        $validetData = $request->validate(array(
            'name'     => 'required|string|min:2',
            'email'    => 'required|email',
            'password' => 'required|string|min:8',
        ));
        if ($validetData) {
            return Response()->json($validetData);
        }else{
            return redirect()->back();
        }
    }
    public function checkLog()
    {
        return "please check the logs in laravel.log file";
    }
    public function profile(){
        return "Profile has been validated through AuthMiddleware ";
    }
    public function settings(){
        return "Settings has been validated through AuthMiddleware ";
    }


}





