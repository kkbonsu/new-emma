<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sortBy = 'username';
        $orderBy = 'desc';
        $q = null;

        if ($request->has('orderBy'))
            $orderBy = $request->query('orderBy');
        if ($request->has('sortBy'))
            $sortBy = $request->query('sortBy');
        if ($request->has('q'))
            $q = $request->query('q');

        $bookings = Booking::search($q)->orderBy($sortBy, $orderBy)->paginate(10);

        return view('bookings.index')->with([
            'bookings' => $bookings,
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
        // Create Booking
        $booking = new Booking;
        $booking->booking_code = random_int(1000, 9999);
        $booking->booking_date = Carbon::today()->toDateString();
        $booking->user_id = Auth::id();
        $booking->username = Auth::user()->name;
        $booking->room_name = $request->input('room_name');
        $booking->room_id = $request->input('room_id');
        $booking->programme = $request->input('programme');
        $booking->phone = $request->input('phone');
        $booking->nationality = $request->input('nationality');
        $booking->gender = $request->input('gender');
        $booking->level = $request->input('level');
        $booking->guardian_name = $request->input('guardian_name');
        $booking->guardian_phone = $request->input('guardian_phone');
        $booking->guardian_relationship = $request->input('guardian_relationship');
        $booking->guardian_email = $request->input('guardian_email');
        $booking->save();

        return Redirect::back()->with('success', 'Your Booking Has Been Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::find($id);

        return view('bookings.show')->with([
            'booking' => $booking
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
        $booking = Booking::find($id);

        return view('bookings.edit')->with([
            'booking' => $booking
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
        // Update Booking
        $booking = new Booking;
        $booking->checkin_date = $request->input('checkin_date');
        $booking->checkout_date = $request->input('checkout_date');
        $booking->user_id = Auth::id();
        $booking->username = Auth::user()->name;
        $booking->save();

        return redirect('/bookings')->with('success', 'Booking Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        return redirect('/bookings')->with('success', 'Booking Deleted');
    }
}
