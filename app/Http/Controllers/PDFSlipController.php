<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;

class PDFSlipController extends Controller
{
    function get_booking_data($id)
    {
        $booking_data = Booking::where('id', $id)->get();
        return $booking_data;
    }

    function pdf($id)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_booking_data_to_html($id));
        return $pdf->stream();
    }

    function convert_booking_data_to_html($id)
    {
        $booking_data = $this->get_booking_data($id);
        $output = '

        ';
        foreach($booking_data as $booking_data)
        {
            $output .= '
            <img width="700px" height="100px" src="images/wagyingo_logo.jpg" />
            <p style="text-align: center">KNUST Ayeduase</p>
            <p style="text-align: center">0203541258 / 0214587523</p>
            <p style="text-align: center">enquiries@wagyingohostel.com</p>
            <hr>
            <div class="col">
            <p>Date: '.Carbon::today()->toDateString().'</p>
            </div>
            <hr>
            <div style="float: left">
            <h3>STUDENT DETAILS</h3>
            <p>Name: '.$booking_data->user->name.'</p>
            <p>Programme: '.$booking_data->programme.'</p>
            <p>Academic Level: '.$booking_data->level.'</p>
            <p>Phone Number: '.$booking_data->phone.'</p>
            </div>
            <div style="float: right">
            <h3>BOOKING DETAILS</h3>
            <p>Room Booked: '.$booking_data->room_name.'</p>
            <p>Date Booked: '.$booking_data->booking_date.'</p>
            <p>Price: GHS'.$booking_data->room->price.'</p>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <hr>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div style="float: right">
            <p>................................................</p>
            <p>STAMP / Signature</p>
            </div>
            ';
        }
        return $output;
    }
}
