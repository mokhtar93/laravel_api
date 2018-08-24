<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Team;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
     public function index()
    {
        $all = User::all();
        return response()->json($all, 200);
    }

    public function show($id)
    {
        $user = User::find($id);
        if (!empty($user)){
        return response()->json($user, 200);
        }else{
        return response()->json("No user found with this Id", 404);
        }
        
    }

    public function store(Request $request)
    { 
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|max:255'
        ]);
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function update($id , Request $request)
    {
        $user = User::find($id);
        if (!empty($user)){
            $user->update($request->all());
            return response()->json($user, 200);
            }else{
            return response()->json("No user found with this Id", 404);
        }

    }

    public function delete($id)
    {

        $user = User::find($id);
        if (!empty($user)){
            $user->delete();
            $user->teams()->wherePivot('user_id','=',$id)->detach();
            return response()->json("deleted user", 200);
        }else{
            return response()->json("No user found with this Id", 404);
        }
    }


    public function assign_user($user_id, Request $request)
    {
        $team = Team::find($request['ids']);
        $user = User::find($user_id);
        if (!empty($user)&& count($team)> 0){
            $user->teams()->sync($team ,false);
            return response()->json("assigned successfuly", 200);
        }else{
            return response()->json("please check user id and team ids", 400);
        }
    }

}
