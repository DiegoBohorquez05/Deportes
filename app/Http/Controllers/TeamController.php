<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function create(Request $request){
        // try{
        //     $request->validate([
        //         'name' => 'required|string',
        //         'fecha_creacion' => 'required|string',
                
        //     ]);
        // }catch (\Throwable $th){
            // return response()->json(['error' => $th->getMessage()], 400);
        // };
    }
}
