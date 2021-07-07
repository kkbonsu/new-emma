<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Carbon\Carbon;

class FindRoomController extends Controller
{   
    public function findroom(Request $request)
    {
        $room = $request->input('room');
        
        if ($request->isMethod('POST')) {
            $rooms = Room::without('booking', '<', 2)->whereHas('booking', function ($q) use ($room) {
                $q->where(function ($q2) use ($room) {
                    $q2->where('room_name', 'like', 'room');
                });
            })->orWhereDoesntHave('booking')->get();
        } else {
            $rooms = null;
        }

        return view('front-end.search', compact('rooms'));
    }

    public function book($id)
    {
        $room = Room::find($id);

        return view('front-end.book_room')->with([
            'room' => $room
        ]);
    }
}
