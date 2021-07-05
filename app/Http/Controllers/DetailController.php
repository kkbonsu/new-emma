<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\User;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $detail = Detail::orderBy('username', 'desc')->get();

        return view('details.index')->with([
            'detail' => $detail
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('details.create')->with([
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create User Detail
        $detail = new Detail;
        $detail->user_id = $request->input('user_id');
        $detail->programme = $request->input('programme');
        $detail->phone = $request->input('phone');
        $detail->nationality = $request->input('nationality');
        $detail->gender = $request->input('gender');
        $detail->level = $request->input('level');
        $detail->guardian_name = $request->input('guardian_name');
        $detail->guardian_phone = $request->input('guardian_phone');
        $detail->guardian_relationship = $request->input('guardian_relationship');
        $detail->guardian_email = $request->input('guardian_email');
        $detail->save();

        return redirect('/details')->with('success', 'User Details Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detail = Detail::find($id);
        $detail->user_id = $request->input('user_id');
        $detail->programme = $request->input('programme');
        $detail->phone = $request->input('phone');
        $detail->nationality = $request->input('nationality');
        $detail->gender = $request->input('gender');
        $detail->level = $request->input('level');
        $detail->guardian_name = $request->input('guardian_name');
        $detail->guardian_phone = $request->input('guardian_phone');
        $detail->guardian_relationship = $request->input('guardian_relationship');
        $detail->guardian_email = $request->input('guardian_email');
        $detail->save();

        return redirect('/details')->with('success', 'User Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
