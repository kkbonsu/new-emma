@extends('layouts.app')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<!-- page header -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Available Rooms</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home"><i class="fas fa-hotel"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Front Desk</a></li>
                    <li class="breadcrumb-item"><a href="#">Bookings</a></li>
                    <li class="breadcrumb-item"><a href="/findroom">Available Rooms</a></li>
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
                {!! Form::open(array('route' => 'findrooms', 'method'=>'POST')) !!}
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Arrival Date:</strong>
                            {!! Form::date('time_from', null, array('placeholder' => 'Enter arrival date','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Departure Date:</strong>
                            {!! Form::date('time_to', null, array('placeholder' => 'Enter departure date','class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Find Room</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card user-profile-list">
            <div class="card-header">
                <h5>Available Rooms</h5>
            </div>
            <div class="card-body">
                <div class="row align-items-center m-l-0">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6 text-right">
                        {{-- <button class="btn btn-success mb-3 btn-sm" data-toggle="modal" data-target="#modal-form"><i class="fas fa-plus"></i> Add Payment</button> --}}
                    </div>
                </div>
                <div class="dt-responsive table-responsive">
                    <table id="user-list-table" class="table nowrap">
                        <thead>
                            <tr>
                                <th>Room Number</th>
                                <th>Room Type</th>
                                <th>Rate</th>
                                <th>Status</th>
                                {{-- <th>Actions</th> --}}
                            </tr>
                        </thead>
                        @if (!is_null($rooms))
                        @foreach ($rooms as $room)
                        <tbody>
                            <tr data-entry-id="{{ $room->id }}">
                                <td>#{{ $room->room_number }}</td>
                                <td>{{ $room->type->name }}</td>
                                <td>GH&#8373;{{ $room->tariff->rate }}</td>
                                <td>{{ $room->status }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('book', $room->id) }}">Reserve</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                        @else
                        <tbody>
                            <tr>
                                <td>Sorry...there are no rooms available for this range.</td>
                            </tr>
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection