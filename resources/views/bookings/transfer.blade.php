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
                    <h5 class="m-b-10">Transfer to another Room</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home"><i class="fas fa-hotel"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Bookings</a></li>
                    <li class="breadcrumb-item"><a href="#">Front Desk</a></li>
                    <li class="breadcrumb-item"><a href="/arrivals">Check-In</a></li>
                    <li class="breadcrumb-item"><a href="#">Transfer to another Room</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- page header end -->

<div class="row">
    <div class="col-lg-12">
        <div class="card user-profile-list">
            <div class="card-body">
                <div class="row align-items-center m-l-0">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6 text-right">
                        <a class="btn btn-secondary mb-3 btn-sm" href="/arrivals/{{ $arrival->id }}"><i class="fas fa-angle-left"></i> Back</a>
                    </div>
                </div>
                {!! Form::open(array('route' => 'transfers.store', 'method'=>'POST')) !!}
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Check-In*:</strong>
                            <select class="form-control" id="arrival_id" name="arrival_id">
                                <option value="{{ $arrival->id }}">{{ $arrival->billing_person }} from {{ $arrival->checkin_date }} to {{ $arrival->checkout_date }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Guest*:</strong>
                            <select class="form-control" id="guest" name="guest">
                                <option value="{{ $arrival->billing_person }}">{{ $arrival->billing_person }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Transfer Date*:</strong>
                            {!! Form::date('transfer_date', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Transfer Time:</strong>
                            {!! Form::time('transfer_time', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Select Room*:</strong>
                            <select class="form-control" id="room_id" name="room_id">
                                @foreach ($rooms as $room)
                                    <option value="{{ $room->id }}">#{{ $room->room_number }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Reason for Transfer*:</strong>
                            {!! Form::text('reason', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-success">Transfer</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection