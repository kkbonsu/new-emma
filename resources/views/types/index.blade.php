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
                    <h5 class="m-b-10">Room Types</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home"><i class="fas fa-hotel"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Room Configurations</a></li>
                    <li class="breadcrumb-item"><a href="/types">Room Types</a></li>
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
                        <form action="{{ route('types.index') }}" class="form-inline">
                            <div class="form-group mr-sm-2">
                                <input class="form-control" type="search" name="q" value="" placeholder="Search...">
                            </div>
                            <div class="form-group mr-sm-2">
                                <select class="form-control" name="sortBy" value="">
                                    @foreach (['name'] as $col)
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
                        <button class="btn btn-success mb-3 btn-sm" data-toggle="modal" data-target="#modal-form"><i class="fas fa-plus"></i> Create Room Type</button>
                    </div>
                </div>
                <div class="dt-responsive table-responsive">
                    <table id="user-list-table" class="table nowrap">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Number of Rooms</th>
                                <th>Max Occupancy</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach ($types as $type)
                        <tbody>
                            <tr>
                                <td>{{ $type->name }}</td>
                                <td>GH&#8373;{{ $type->price }}</td>
                                <td>{{ $type->number_of_rooms }}</td>
                                <td>{{ $type->max_occupancy }}</td>
                                <td>
                                    <a class="btn btn-icon btn-outline-info" title="Show Details" href="{{ route('types.show', $type->id) }}"><i class="feather icon-eye"></i></a>
                                    <a class="btn btn-icon btn-outline-warning" title="Edit Details" href="{{ route('types.edit', $type->id) }}"><i class="feather icon-edit"></i></a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['types.destroy', $type->id], 'style'=>'display:inline']) !!}
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
{!! $types->render() !!}

<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Room Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                {!! Form::open(array('route' => 'types.store', 'method'=>'POST')) !!}
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Name*:</strong>
                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Price*:</strong>
                            {!! Form::number('price', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Number of Rooms of this Type*:</strong>
                            {!! Form::number('number_of_rooms', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Max Occupancy*:</strong>
                            {!! Form::number('max_occupancy', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Beds*:</strong>
                            {!! Form::number('beds', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Room Area (in square meters):</strong>
                            {!! Form::number('area', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    {{-- <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Status*:</strong>
                            <select class="form-control" id="status" name="status">
                                <option value="Visible">Visible</option>
                                <option value="Invisible">Invisible</option>
                            </select>
                        </div>
                    </div> --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            {!! Form::text('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Add Amenities to this Room:</strong>
                            @foreach ($amenities as $amenity)
                            <label for="">{{$amenity->name}}</label>
                            {!! Form::checkbox('amenities[]', $amenity->id, [], array('class' => 'name')) !!}
                            @endforeach
                        </div>
                    </div>
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