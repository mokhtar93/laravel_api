<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\User;

class TeamController extends Controller
{

        public function index()
        {
            $all = Team::all();
            return response()->json($all, 201);
        }
    
        public function show($id)
        {
            $team = Team::find($id);
            if (!empty($team)){
                return response()->json($team, 200);
                }else{
                return response()->json("No Team found with this Id", 404);
            }
        }
    
        public function store(Request $request)
        { 
          
            $team = Team::create($request->all());
    
            return response()->json($team, 201);
        }
    
        public function update($id , Request $request)
        {
            $team = Team::find($id);
            if (!empty($team)){
                $team->update($request->all());
                return response()->json($team, 200);
                }else{
                return response()->json("No Team found with this Id", 404);
            }
        }
    
        public function delete($id)
        {
            $team = Team::find($id);
            if (!empty($team)){
                $team->delete();
                $team->users()->wherePivot('team_id','=',$id)->detach();
                return response()->json("deleted", 200);
                }else{
                return response()->json("No Team found with this Id", 404);
            }
        }

      
        public function list_teams($user_id)
        {
            $user = User::find($user_id);
            if (!empty($user)){
                $teams = $user->teams()->wherePivot('user_id', '=', $user_id)->get();
                return response()->json($teams, 200);
                }else{
                return response()->json("No User found with this Id", 404);
            }
        
        }
    }
