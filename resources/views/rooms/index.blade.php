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
                <div class="row align-items-center m-l-0 mb-2">
                    <div class="col-sm-8">
                        <form action="{{ route('rooms.index') }}" class="form-inline">
                            <div class="form-group mr-sm-2">
                                <input class="form-control" type="search" name="q" value="" placeholder="Search...">
                            </div>
                            <div class="form-group mr-sm-2">
                                <select class="form-control" name="sortBy" value="">
                                    @foreach (['room_number', 'status'] as $col)
                                        <option @if ($col == $sortBy)
                                            selected
                                        @endif value="{{ $col }}">{{ ucfirst($col) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mr-sm-2">
                                <select class="form-control" name="orderBy" value="">
                                    @foreach (['desc', 'asc'] as $order)
                                        <option @if ($order == $orderBy)
                                            selected
                                        @endif value="{{ $order }}">{{ ucfirst($order) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-4 text-right">
                        <button class="btn btn-success mb-3 btn-sm" data-toggle="modal" data-target="#modal-form"><i class="fas fa-plus"></i> Create Room</button>
                    </div>
                </div>
                <div class="dt-responsive table-responsive">
                    <table id="user-list-table" class="table nowrap">
                        <thead>
                            <tr>
                                <th>Room Number</th>
                                <th>Room Type</th>
                                <th>Rate</th>
                                <th>Max Occupancy</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach ($rooms as $room)
                        <tbody>
                            <tr>
                                <td>#{{ $room->room_number }}</td>
                                <td>{{ $room->type->name }}</td>
                                <td>&#8373;{{ $room->type->price }}</td>
                                <td>{{ $room->type->max_occupancy }}</td>
                                <td>
                                    <a class="btn btn-icon btn-outline-info" title="Show Details" href="{{ route('rooms.show', $room->id) }}"><i class="feather icon-eye"></i></a>
                                    <a class="btn btn-icon btn-outline-warning" title="Edit Details" href="{{ route('rooms.edit', $room->id) }}"><i class="feather icon-edit"></i></a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['rooms.destroy', $room->id], 'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-icon btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{!! $rooms->render() !!}

<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Room</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                {!! Form::open(array('route' => 'rooms.store','method'=>'POST')) !!}
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
                            <strong>Status*:</strong>
                            <select class="form-control" id="status" name="status">
                                <option value="Clean">Clean</option>
                                <option value="Dirty">Dirty</option>
                                <option value="Out of Service">Out of Service</option>
                            </select>
                        </div>
                    </div> --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-success">Create</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection