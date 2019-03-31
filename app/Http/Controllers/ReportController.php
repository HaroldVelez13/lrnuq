<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Report;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use App\Events\ReportCreated;
use App\Net;
use Pusher\Laravel\Facades\Pusher;


/**
 * Class ReportController.
 *
 * @author  The scaffold-interface created at 2019-03-20 07:12:06am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::all();
        return view('report.index',compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create($user, $plant, $net)
    {
        
        return view('report.create',compact('plant','net'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request,$user,$plant,$net)
    {
        $report = new Report();        
        $report->name = $request->name;        
        $report->type = $request->type;        
        $report->itera = $request->itera;        
        $report->rate_learning = $request->rate_learning;
        $report->net_id = $net;        
        $report->save();       
        //broadcast( new ReportCreated($report->id,$user))->toOthers();
         Pusher::trigger('newReport', 'report-created', ['report'=>$report->id, 'user'=>$user]);
        return redirect()->route('user.plant.net.show',['user'=>$user,'plant'=>$plant,'net'=>$net]);
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($user, $plant, $net, Report $report)
    {

        $images=$report->images;
        return view('report.show',compact('net' ,'plant','user','report','images' ) );
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit(Request $request,$user,$plant,$net,Report $report)
    {
        return view('report.edit',compact('user','plant','net','report' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update(Request $request,$user, $plant,$net, Report $report)
    {    	
        $report->name = $request->name;        
        $report->type = $request->type;        
        $report->itera = $request->itera;        
        $report->rate_learning = $request->rate_learning; 
        $report->net_id = $net;        
        $report->save();
        return redirect()->route('user.plant.net.show',['user'=>$user,'plant'=>$plant,'net'=>$net]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($user, $plant,$net, Report $report)
    {
     	$report->delete();
        return route('user.plant.net.show',['user'=>$user,'plant'=>$plant,'net'=>$net]);
    }
}
