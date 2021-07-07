<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Type;

class RoomController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:room-list|room-create|room-edit|room-delete', ['only' => ['index','store']]);
        $this->middleware('permission:room-create', ['only' => ['create','store']]);
        $this->middleware('permission:room-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:room-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sortBy = 'room_name';
        $orderBy = 'desc';
        $q = null;

        if ($request->has('orderBy'))
            $orderBy = $request->query('orderBy');
        if ($request->has('sortBy'))
            $sortBy = $request->query('sortBy');
        if ($request->has('q'))
            $q = $request->query('q');

        $rooms = Room::search($q)->orderBy($sortBy, $orderBy)->paginate(10);

        return view('rooms.index')->with([
            'rooms' => $rooms,
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
        $types = Type::orderBy('id', 'asc')->get();

        return view('rooms.create')->with([
            'types' => $types
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
        $this->validate($request, [
            'room_name' => 'required',
        ]);

        // Create Room
        $room = new Room;
        $room->room_name = $request->input('room_name');
        // $room->room_type = $request->input('room_type');
        $room->max_occupancy = $request->input('max_occupancy');
        $room->beds = $request->input('beds');
        $room->area = $request->input('area');
        $room->price = $request->input('price');
        $room->description = $request->input('description');
        $room->save();

        return redirect('/rooms')->with('success', 'Room Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::find($id);

        return view('rooms.show')->with([
            'room' => $room,
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
        $room = Room::find($id);
        $types = Type::orderBy('id', 'asc')->get();

        return view('rooms.edit')->with([
            'room' => $room,
            'types' => $types
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
            'room_name' => 'required',
        ]);

        // Update Room
        $room = Room::find($id);
        $room->room_number = $request->input('room_number');
        $room->type_id = $request->input('type_id');
        $room->save();

        return redirect('/rooms')->with('success', 'Room Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::find($id);
        $room->delete();

        return redirect()->route('rooms.index')
                        ->with('success','Room Deleted');
    }

    public function book($id)
    {
        $room = Room::find($id);

        return view('reservations.reserve')->with([
            'room' => $room
        ]);
    }
}
