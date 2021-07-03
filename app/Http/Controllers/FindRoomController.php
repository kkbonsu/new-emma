<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Carbon\Carbon;

class FindRoomController extends Controller
{
    public function index()
    {
        return view('find-room.index');
    }
    
    public function findroom(Request $request)
    {
        $time_from = Carbon::now();
        $time_to = Carbon::now();
        $room = $request->input('room');
        
        if ($request->isMethod('POST')) {
            $rooms = Room::whereNotIn('id', function($query) use ($time_from, $time_to, $room) {
            $query->from('bookings')
                ->where('checkin_date', '=', $time_to)
                ->where('checkout_date', '=', $time_from)
                ->where('room_type', '=', $room)
                ->select('room_type');
                })->get();
        } else {
            $rooms = null;
        }

        return view('front-end.search', compact('rooms'));
    }
}
