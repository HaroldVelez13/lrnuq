<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use App\Events\ReportCompleted;

/**
 * Class ImageController.
 *
 * @author  The scaffold-interface created at 2019-03-20 07:13:23am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        return view('image.index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = new Image();        
        $image->description = $request->description;        
        $image->url_name = $request->url_name; 
        $image->save();

        broadcast( new ReportCompleted($report->id,$user) );

        return redirect('image');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('image/'.$id);
        }

        $image = Image::findOrfail($id);
        return view('image.show',compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('image/'. $id . '/edit');
        }

        
        $image = Image::findOrfail($id);
        return view('image.edit',compact('image'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $image = Image::findOrfail($id);
    	
        $image->description = $request->description;
        
        $image->url_name = $request->url_name;
        
        
        $image->save();

        return redirect('image');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/image/'. $id . '/delete/');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$image = Image::findOrfail($id);
     	$image->delete();
        return URL::to('image');
    }
}
