<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class FindRoomController extends Controller
{
    public function index()
    {
        return view('find-room.index');
    }
    
    public function findroom(Request $request)
    {
        $time_from = $request->input('time_from');
        $time_to = $request->input('time_to');
        
        if ($request->isMethod('POST')) {
            $rooms = Room::whereNotIn('id', function($query) use ($time_from, $time_to) {
            $query->from('bookings')
                ->where('checkin_date', '<=', $time_to)
                ->where('checkout_date', '>=', $time_from)
                ->select('room_id');
                })->get();
        } else {
            $rooms = null;
        }

        return view('find-room.available', compact('rooms', 'time_from', 'time_to'));
    }
}
