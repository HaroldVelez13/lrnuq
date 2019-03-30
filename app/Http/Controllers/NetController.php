<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Net;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Plant;


/**
 * Class NetController.
 *
 * @author  The scaffold-interface created at 2019-03-20 07:08:32am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class NetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $nets = Net::all();
        return view('net.index',compact('nets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create($user, $plant)
    {        
                
        return view('net.create',compact('plant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request,$user,$plant)
    {
        $net = new Net();
        $net->name = $request->name;
        $net->type = $request->type;
        $net->rate_learning = $request->rate_learning;
        $net->itera = $request->itera;
        $net->number_layers = $request->number_layers;
        $net->establishment_time = $request->establishment_time;
        $net->sampling_time = $request->sampling_time;
        $net->reference = $request->reference;
        $net->plant_id = $plant;
        $net->user_id = $user;
        $net->save();
        return redirect()->route('user.plant.show',['user'=>$user,'plant'=>$plant]);
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($user, $plant, Net $net)
    {
        $reports = $net->reports;
       return view('net.show',compact('net' ,'plant','user','reports' ) );
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($user, $plant, Net $net)
    {
        return view('net.edit',compact('net' ,'plant','user' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update(Request $request,$user, $plant,Net $net)
    {   	
        $net->name = $request->name;        
        $net->type = $request->type;        
        $net->rate_learning = $request->rate_learning;        
        $net->itera = $request->itera;        
        $net->number_layers = $request->number_layers;        
        $net->establishment_time = $request->establishment_time;        
        $net->sampling_time = $request->sampling_time;        
        $net->reference = $request->reference; 
        $net->plant_id = $plant;        
        $net->save();

        return redirect()->route('user.plant.show',['user'=>$user,'plant'=>$plant]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($user, $plant,Net $net)
    {
     	$net->delete();
        return route('user.plant.show',['user'=>$user,'plant'=>$plant]);
    }
}
