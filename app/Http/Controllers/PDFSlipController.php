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
        return $pdf->download();
    }

    function convert_booking_data_to_html($id)
    {
        $booking_data = $this->get_booking_data($id);
        $output = '

        ';
        foreach($booking_data as $booking_data)
        {
            $output .= '
            <img width="700px" height="100px" src="images/wag1.png" />
            <p style="text-align: center">KNUST Ayeduase</p>
            <p style="text-align: center">0203541258 / 0214587523</p>
            <p style="text-align: center">students.wagyingo@gmail.com</p>
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
            <hr>
            <h3>GUARDIAN DETAILS</h3>
            <p>Guardian Name: '.$booking_data->guardian_name.'</p>
            <p>Relationship: '.$booking_data->guardian_relationship.'</p>
            <p>Guardian Phone Number: '.$booking_data->guardian_phone.'</p>
            <p>Guardian Email: '.$booking_data->guardian_email.'</p>
            <hr>
            <br>
            <h2>CONTRACTUAL AGREEMENT BETWEEN RESIDENTS/ STUDENTS AND 
            WAGYINGO HOSTEL</h2>
            <ol>
            <li>Admission to hostel is offered for an academic year and is subject to renewal every academic year.</li>
            <li>Only full payment of fees would be made before students are admitted into residence.</li>
            <li>Full fees are not refundable after 24 hours of occupancy.</li>
            <li>Students are provided with contractual forms to be signed by both parties.</li>
            <li>Places offered are not transferrable and not allowed for perching.</li>
            <li>Students are expected to quit their rooms one week after the end of the academic year.</li>
            </ol>
            <br>
            <h3>REGULATIONS FOR THE HOSTEL</h3>
            <ol>
            <li>Visitors are not allowed on hostel premises beyond 11 pm.</li>
            <li>Residents leaving the hostel for lectures or church for more than forty-eight hours (48hrs) should keep the management informed.</li>
            <li>All regulations shall continue to be in force during vacations, and infringement of any such regulations shall render a student liable to verbal reprimand/expulsion or disciplinary action.</li>
            <li>All students must leave their rooms tidy before leaving for vacation. Residents leaving personal belonging in their rooms do so at their own risk. Space will be available for keeping belongings.</li>
            <li>Property left in residence without permission during vacations is liable to be disposed of at the discretion of hostel management.</li>
            <li>Damages to hostel properties will be charged against the offender. Students who consciously destroy hostel property would be reported to the Dean of students for sanctions.</li>
            <li>Smoking and alcoholic drinks are not permitted on hostel premises. Smoking in your rooms or on the compound or anywhere around the hostel will attract an instant expulsion.</li>
            <li>Cooking is not permitted in rooms. Kitchen is provided for cooking.</li>
            <li>No candles are allowed. Students are entreated to use rechargeable lamps. </li>
            <li>Noise must be kept at acceptable levels so that other inmates are not unduly inconvenienced.</li>
            <li>All theft cases should be reported to management for appropriate actions.</li>
            <li>Students will be handed over to the appropriated authority for any illegal connection.</li>
            <li>Students who misbehave in this hostel of residence would be blacklisted with all the hostel operators.</li>
            <li>Students should be able to draw managements attention to lapses in the management of the hostel.</li>
            <li>Students shall not bring and/or keep any pets in the premises including fish, cats, dogs, and so on. Students should desist from pampering stray dog by offering food, petting them etc.</li>
            <li>Various offences will attract varied sanctions including:
                <ul>
                <li>Verbal reprimand</li>
                <li>Fines</li>
                <li>Expulsion or disciplinary action</li>
                </ul>
            </li>
            </ol>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div style="float: left">
            <p>................................................</p>
            <p>Date</p>
            <br>
            <p>................................................</p>
            <p>Date</p>
            </div>
            <div style="float: right">
            <p>................................................</p>
            <p>Manager Signature</p>
            <br>
            <p>................................................</p>
            <p>Student Signature</p>
            </div>
            ';
        }
        return $output;
    }
}
