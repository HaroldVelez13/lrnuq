<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Plant;
use App\User;

/**
 * Class PlantController.
 *
 *   
 */
class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $plants = Plant::all();
        return view('plant.index',compact('plants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {       
        $users = User::all();        
        return view('plant.create',compact('users'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request, $user)
    {
        $this->_plant_validate($request);
        $plant = new Plant();        
        $plant->name = $request->name;        
        $plant->description = $request->description;     
        $plant->user_id = $user;        
        $plant->save(); 
        return redirect()->route('user.plant.index',['user'=>$user]);
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param     $plant
     * @return  \Illuminate\Http\Response
     */
    public function show(Request $request,$user,Plant $plant)
    {
        
        $nets = $plant->nets->where('user_id', $user);        
        return view('plant.show',compact('plant','nets'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit(Request $request,$user,Plant $plant)
    {      
        
        $users = User::all();
        return view('plant.edit',compact('plant' ,'users' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update(Request $request,$user,Plant $plant)
    {  
        $this->_plant_validate($request);          	
        $plant->name = $request->name;        
        $plant->description = $request->description;       
        $plant->user_id = $request->user_id;        
                
        $plant->save();
        return redirect()->route('user.plant.index',['user'=>$user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy(Request $request,$user,Plant $plant)
    {
        
     	$plant->delete();
        return route('user.plant.index',['user'=>$user]);
    }

    public function _plant_validate($request){
        $messages = [
            'name.required' => 'El Nombre es Requerido',     
            'name.max' => 'El Nombre debe contener maximo 192 caracteres',
            'description.required' => 'La Descripción es Requerida',     
            'description.max' => 'La Descripción debe contener maximo 192 caracteres',
        ];
        $request->validate([
            'name' => 'required|string|max:192',
            'description' => 'required|string|max:192',
            'user_id' => 'required|numeric',
        ], $messages);
    }
}
