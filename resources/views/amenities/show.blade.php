@extends('layouts.app')

@section('content')

<!-- page header -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Amenities</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home"><i class="fas fa-hotel"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Room Configuration</a></li>
                    <li class="breadcrumb-item"><a href="/amenities">Amenities</a></li>
                    <li class="breadcrumb-item"><a href="#">Amenity Details</a></li>
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
                        <a class="btn btn-secondary mb-3 btn-sm" href="/amenities"><i class="fas fa-angle-left"></i> Back</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Amenity Name:</strong>
                            {{ $amenity->name }}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $amenity->description }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center m-l-0">
                    <div class="col-sm-6">
                        <h5>Rooms Types with {{ $amenity->name }}</h5>
                    </div>
                </div>
                <div class="dt-responsive table-responsive">
                    <table id="user-list-table" class="table nowrap">
                        <thead>
                            <tr>
                                <th>Room Type</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        @foreach ($rooms as $room)
                        <tbody>
                            <tr>
                                <td>{{ $room->name }}</td>
                                <td>&#8373;{{ $room->price }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection