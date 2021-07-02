@extends('layouts.app')

@section('content')

<!-- page header -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Room Configurations</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home"><i class="fas fa-hotel"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Room Configurations</a></li>
                    <li class="breadcrumb-item"><a href="/rooms">Rooms</a></li>
                    <li class="breadcrumb-item"><a href="#">Room  Details</a></li>
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
                        <a class="btn btn-secondary mb-3 btn-sm" href="/rooms"><i class="fas fa-angle-left"></i> Back</a>
                    </div>
                </div>
                <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Room Number:</strong>
                        #{{ $room->room_number }}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Number of beds:</strong>
                        {{ $room->type->beds }}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Area:</strong>
                        {{ $room->type->area }} sq.m.
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Price:</strong>
                        GH&#8373;{{ $room->type->price }}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Max Occupancy:</strong>
                        {{ $room->type->max_occupancy }}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection