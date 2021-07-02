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
                    <h5 class="m-b-10">Add Receipt to Check-In</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home"><i class="fas fa-hotel"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Bookings</a></li>
                    <li class="breadcrumb-item"><a href="#">Front Desk</a></li>
                    <li class="breadcrumb-item"><a href="/arrivals">Check-In</a></li>
                    <li class="breadcrumb-item"><a href="#">Add Receipt to Check-In</a></li>
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
                {!! Form::open(array('route' => 'receipts.store', 'method'=>'POST')) !!}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Check-In*:</strong>
                            <select class="form-control" id="arrival_id" name="arrival_id">
                                <option value="{{ $arrival->id }}">{{ $arrival->billing_person }} from {{ $arrival->checkin_date }} to {{ $arrival->checkout_date }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Date*:</strong>
                            {!! Form::date('date', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Account Received Into*:</strong>
                            <select class="form-control" id="account_id" name="account_id">
                                @foreach ($accounts as $account)
                                    <option value="{{ $account->id }}">{{ $account->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Transaction Status*:</strong>
                            <select class="form-control" id="mode" name="mode">
                                <option value="---">---</option>
                                <option value="Paid">Paid</option>
                                <option value="To Be Paid Later">To Be Paid Later</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Amount*:</strong>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">&#8373;</span>
                                {!! Form::number('amount', null, array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            {!! Form::text('description', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection