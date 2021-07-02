<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amenity;

class AmenityController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:amenity-list|amenity-create|amenity-edit|amenity-delete', ['only' => ['index','store']]);
        $this->middleware('permission:amenity-create', ['only' => ['create','store']]);
        $this->middleware('permission:amenity-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:amenity-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sortBy = 'name';
        $orderBy = 'desc';
        $q = null;

        if ($request->has('orderBy'))
            $orderBy = $request->query('orderBy');
        if ($request->has('sortBy'))
            $sortBy = $request->query('sortBy');
        if ($request->has('q'))
            $q = $request->query('q');

        $amenities = Amenity::search($q)->orderBy($sortBy, $orderBy)->paginate(10);

        return view('amenities.index')->with([
            'amenities' => $amenities,
            'orderBy' => $orderBy,
            'sortBy' => $sortBy,
            'q' => $q
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'nullable'
        ]);

        // Create Amenity
        $amenity = new Amenity;
        $amenity->name = $request->input('name');
        $amenity->description = $request->input('description');
        $amenity->save();

        return redirect('/amenities')->with('success', 'Amenity Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $amenity = Amenity::find($id);
        $rooms = $amenity->types()->get();

        return view('amenities.show')->with([
            'amenity' => $amenity,
            'rooms' => $rooms
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $amenity = Amenity::find($id);

        return view('amenities.edit')->with([
            'amenity' => $amenity
        ]);
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'nullable'
        ]);

        // Update Amenity
        $amenity = Amenity::find($id);
        $amenity->name = $request->input('name');
        $amenity->description = $request->input('description');
        $amenity->save();

        return redirect('/amenities')->with('success', 'Amenity Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $amenity = Amenity::find($id);
        $amenity->types()->detach();
        $amenity->delete();

        return redirect()->route('amenities.index')->with('success', 'Amenity Deleted');
    }
}
