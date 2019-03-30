<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Http\Request;
use App\User;
use App\Net;
use App\Report;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

        /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show( User $users)
    {
        $nets = $users->nets;
        
        return view('users.show',compact('users','nets'));
    }

    public function show_net( $users, Net $net)
    {
        $reports = $net->reports;
        
        return view('users.net_show',compact('users','net','reports'));
    }


    public function show_report( $users, $net, Report $report)
    {
        $images = $report->images;
        
        return view('users.report_show',compact('users','net','report','images'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->assignRole($request->role);

        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users)
    {
        $user = $users;
        $roles = Role::all();

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $users)
    {
        
        $users->email = $request->email;
        $users->name = $request->name;
        if ($users->password!='') {
            $users->password = Hash::make($request->password);
        } 
        $users->save();
        if ($request->role!=$users->roles->first()->namee) {
            $users->assignRole($request->role);
        }
        

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( User $users)
    {
        
        $users->delete();
        return route('users.index');
    }

}
