@extends('layouts.app')

@section('content')
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

<!-- page header -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Check-In</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home"><i class="fas fa-hotel"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Bookings</a></li>
                    <li class="breadcrumb-item"><a href="#">Front Desk</a></li>
                    <li class="breadcrumb-item"><a href="/arrivals">Check-In</a></li>
                    <li class="breadcrumb-item"><a href="#">Edit Check-In</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- page header end -->

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center m-l-0">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6 text-right">
                        <a class="btn btn-secondary mb-3 btn-sm" href="/arrivals"><i class="fas fa-angle-left"></i> Back</a>
                    </div>
                </div>
                {!! Form::model($arrival, ['method' => 'PATCH', 'route' => ['arrivals.update', $arrival->id]]) !!}
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Check-In Date:</strong>
                            {!! Form::date('checkin_date', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Check-In Time:</strong>
                            {!! Form::time('checkin_time', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Check-Out Date:</strong>
                            {!! Form::date('checkout_date', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Check-Out Time:</strong>
                            {!! Form::time('checkout_time', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Number of Occupants:</strong>
                            {!! Form::number('occupants', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Select Billing Guest:</strong>
                            <select class="form-control" id="billing_person" name="billing_person">
                                @foreach ($billings as $billing)
                                    <option value="{{$billing->name}}">{{$billing->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Select Reservation:</strong>
                            <select class="form-control" id="reservations" name="reservations">
                                <option value="">None</option>
                                @foreach ($reservations as $reservation)
                                    <option value="{{$reservation->id}}">{{$reservation->room_name}} for {{$reservation->billing_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Select Tariff:</strong>
                            <select class="form-control" id="tariff_id" name="tariff_id">
                                @foreach ($tariffs as $tariff)
                                    <option value="{{$tariff->id}}">{{$tariff->name}} (&#8373;{{$tariff->rate}})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Discount Amount:</strong>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">&#8373;</span>
                                {!! Form::number('discount', null, array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Arrival From:</strong>
                            {!! Form::text('arrival_from', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Departure To:</strong>
                            {!! Form::text('departure_to', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Select Room(s):</strong>
                            @foreach ($rooms as $room)
                            <label for="">#{{$room->room_number}}</label>
                            {!! Form::checkbox('rooms', $room->id, array('class' => 'form-control')) !!}
                            {{-- <input type="checkbox" id="rooms" name="rooms" value="{{ $room->id }}"> --}}
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Select Guest(s):</strong>
                            @foreach ($guests as $guest)
                            <label for="">{{$guest->name}}</label>
                            {!! Form::checkbox('guests', $guest->id, array('class' => 'form-control')) !!}
                            {{-- <input type="checkbox" id="guests" name="guests" value="{{ $guests->id }}"> --}}
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection