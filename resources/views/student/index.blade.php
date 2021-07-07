@extends('layouts.app')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="card">
    @if (count($booking) > 0)
    <div class="card-body">
        <p>Booking Date: {{ $booking['booking_date'] }}</p>
        <p>Your Name: {{ $booking['username'] }}</p>
        <p>Room Booked: {{ $booking['room_name'] }}</p>
        <p>Nationality: {{ $booking['nationality'] }}</p>
        <p>Programme of Study: {{ $booking['programme'] }}</p>
        <p>Academic Level: {{ $booking['level'] }}</p>
        <p>Your Gender: {{ $booking['gender'] }}</p>
        <p>Your Phone Number: {{ $booking['phone'] }}</p>
        <p>Guardian Details: {{ $booking['guardian_name'] }}</p>
        <p>Relationship with Guardian: {{ $booking['guardian_relationship'] }}</p>
        <p>Guardian Phone Number: {{ $booking['guardian_phone'] }}</p>
        <p>Guardian Email Address: {{ $booking['guardian_email'] }}</p>
        
    </div>
    <div class="card-body">
        @if ($booking->room->price = 5000)
        <a class="btn btn-lg btn-success" href="{{ route('printslips', [$booking->id]) }}">Print Booking Slip</a>
        <a class="btn btn-lg btn-info" href="https://ravesandbox.flutterwave.com/pay/df8dqks1zuao" target="_blank">Payment Link</a>
        @endif
    </div>
    @endif

</div>

@endsection