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
                    <h5 class="m-b-10">Rooms</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home"><i class="fas fa-hotel"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Room Configurations</a></li>
                    <li class="breadcrumb-item"><a href="/rooms">Rooms</a></li>
                    <li class="breadcrumb-item"><a href="#">Edit Room Details</a></li>
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
                {!! Form::model($room, ['method' => 'PATCH', 'route' => ['rooms.update', $room->id]]) !!}
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Room Type*:</strong>
                            <select class="form-control" id="type_id" name="type_id">
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Room Number*:</strong>
                            {!! Form::text('room_number', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    {{-- <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Status:</strong>
                            <select class="form-control" id="status" name="status">
                                <option value="Clean">Clean</option>
                                <option value="Dirty">Dirty</option>
                                <option value="Out of Service">Out of Service</option>
                            </select>
                        </div>
                    </div> --}}
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