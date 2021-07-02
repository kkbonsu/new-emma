<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Room;
use App\Models\Amenity;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:room-type-list|room-type-create|room-type-edit|room-type-delete', ['only' => ['index','store']]);
        $this->middleware('permission:room-type-create', ['only' => ['create','store']]);
        $this->middleware('permission:room-type-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:room-type-delete', ['only' => ['destroy']]);
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

        $types = Type::search($q)->orderBy($sortBy, $orderBy)->paginate(10);
        $amenities = Amenity::orderBy('name', 'asc')->get();

        return view('types.index')->with([
            'types' => $types,
            'amenities' => $amenities,
            'sortBy' => $sortBy,
            'orderBy' => $orderBy,
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
            'beds' => 'required',
            'area' => 'nullable',
            'number_of_rooms' => 'required',
            'max_occupancy' => 'required',
            'description' => 'nullable'
        ]);

        // Create Room Type
        $type = new Type;
        $type->name = $request->input('name');
        $type->max_occupancy = $request->input('max_occupancy');
        $type->beds = $request->input('beds');
        $type->area = $request->input('area');
        $type->price = $request->input('price');
        $type->description = $request->input('description');
        $type->number_of_rooms = $request->input('number_of_rooms');
        $type->save();
        
        if ($request->has('amenities')) {
            $type->amenities()->attach($request->input('amenities'));
        }

        return redirect('/types')->with('success', 'Room Type Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type = Type::find($id);
        $rooms = Room::where('type_id', $id)->get();
        $amenities = $type->amenities()->get();

        return view('types.show')->with([
            'type' => $type,
            'rooms' => $rooms,
            'amenities' => $amenities
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
        $type = Type::find($id);
        $amenities = Amenity::orderBy('name', 'asc')->get();

        return view('types.edit')->with([
            'type' => $type,
            'amenities' => $amenities
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
            'beds' => 'required',
            'area' => 'nullable',
            'number_of_rooms' => 'required',
            'max_occupancy' => 'required',
            'description' => 'nullable'
        ]);

        // Update Room Type
        $type = Type::find($id);
        $type->name = $request->input('name');
        $type->max_occupancy = $request->input('max_occupancy');
        $type->beds = $request->input('beds');
        $type->area = $request->input('area');
        $type->price = $request->input('price');
        $type->description = $request->input('description');
        $type->number_of_rooms = $request->input('number_of_rooms');
        $type->save();

        if ($request->has('amenities')) {
            DB::table('amenity_type')->where('type_id', $id)->delete();
            $type->amenities()->attach($request->input('amenities'));
        }

        return redirect('/types')->with('success', 'Room Type Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Type::find($id);
        $type->amenities()->detach();
        $type->delete();

        return redirect()->route('types.index')
                        ->with('success','Room Type Deleted');
    }
}
