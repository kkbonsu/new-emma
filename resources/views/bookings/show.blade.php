@extends('layouts.app')

@section('content')

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
                    <li class="breadcrumb-item"><a href="#">Check-In Details</a></li>
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
                    <div class="col-sm-12 text-right">
                        <a class="btn btn-primary mb-3 btn-sm" href="{{ route('transfer', $arrival->id) }}"><i class="fas fa-location-arrow"></i> Transfer To Another Room</a>
                        <a class="btn btn-info mb-3 btn-sm" href="{{ route('receipt', $arrival->id) }}"><i class="fas fa-plus"></i> Add Receipt to this Check-In</a>
                        <a class="btn btn-success mb-3 btn-sm" href="{{ route('attach', $arrival->id) }}"><i class="fas fa-link"></i> Attach Service to this Check-In</a>
                        <a class="btn btn-warning mb-3 btn-sm" href="{{ route('extend', $arrival->id) }}"><i class="fas fa-long-arrow-alt-right"></i> Extend Check-Out</a>
                        <a class="btn btn-dark mb-3 btn-sm" href="{{ route('check-out', $arrival->id) }}"><i class="fas fa-user-alt-slash"></i> Guest Check-Out</a>
                        <a class="btn btn-secondary mb-3 btn-sm" href="/arrivals"><i class="fas fa-angle-left"></i> Back</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Check-In Code:</strong>
                            #{{ $arrival->checkin_code }}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Number of Occupants:</strong>
                            {{ $arrival->occupants }}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Check-In Date/Time:</strong>
                            {{ $arrival->checkin_date }} at {{ $arrival->checkin_time }}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Check-Out Date/Time:</strong>
                            {{ $arrival->checkout_date }} at {{ $arrival->checkout_time }}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Room(s):</strong>
                            @foreach ($arrival->rooms as $room)
                            #{{ $room->room_number }} ({{$room->type->name}}), 
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Guests:</strong>
                            @foreach ($arrival->guests as $guest)
                            {{ $guest->name }}, 
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Check-In Tariff:</strong>
                            {{ $arrival->tariff->name }} (GH&#8373;{{ $arrival->tariff->rate }})
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Discount:</strong>
                            GH&#8373;{{ $arrival->discount }}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Agent Check-In Discount:</strong>
                            GH&#8373;{{ $disc }}
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
                        <h5>Voucher for this Check-In</h5>
                    </div>
                </div>
                <div class="dt-responsive table-responsive">
                    <table id="user-list-table" class="table nowrap">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Voucher Code</th>
                                <th>Amount</th>
                                <th>Voucher Type</th>
                            </tr>
                        </thead>
                        @foreach ($vouchers as $voucher)
                        <tbody>
                            <tr>
                                <td>{{ $voucher->date }}</td>
                                <td>#{{ $voucher->voucher_code }}</td>
                                <td>GH&#8373;{{ $voucher->amount }}</td>
                                <td>{{ $voucher->voucher_type }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Total = GH&#8373;{{$bill}}</td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td style="color: red">Tax = GH&#8373;{{$tax_amount}}</td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td style="color: red">VAT = GH&#8373;{{$vat_amount}} / NHIL = GH&#8373;{{$nhis_amount}} / GetFund = GH&#8373;{{$getfund_amount}}</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
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
                    <div class="col-sm-10">
                        <h5>Receipts for this Check-In</h5>
                    </div>
                    <div class="col-sm-2">
                        
                        <a class="btn btn-success mb-3 btn-sm" href="{{ route('printreceipt', $arrival->id) }}"><i class="fas fa-print"></i> Print Receipt</a>
                    </div>
                </div>
                <div class="dt-responsive table-responsive">
                    <table id="user-list-table" class="table nowrap">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Receipt Code</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        @foreach ($receipts as $receipt)
                        <tbody>
                            <tr>
                                <td>{{$receipt->date}}</td>
                                <td>#{{$receipt->receipt_code}}</td>
                                <td>GH&#8373;{{$receipt->amount}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Total = GH&#8373;{{$cumulative}}</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td style="color: red">Balance = GH&#8373;{{$balance}}</td>
                            </tr>
                        </tbody>
                    </table>
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
                        <h5>Services attached to this Check-In</h5>
                    </div>
                </div>
                <div class="dt-responsive table-responsive">
                    <table id="user-list-table" class="table nowrap">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Service Code</th>
                                <th>Service Type</th>
                                <th>Service Cost</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach ($services as $service)
                        <tbody>
                            <tr>
                                <td>{{$service->date}}</td>
                                <td>#{{$service->service_code}}</td>
                                <td>{{$service->service_type}}</td>
                                <td>GH&#8373;{{$service->cost}}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['services.destroy', $service->id], 'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total = GH&#8373;{{$services_total}}</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection