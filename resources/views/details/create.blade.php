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
                    <h5 class="m-b-10">Add Details to User</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home"><i class="fas fa-hotel"></i></a></li>
                    <li class="breadcrumb-item"><a href="/users">Users</a></li>
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
                        <a class="btn btn-secondary mb-3 btn-sm" href="/details"><i class="fas fa-angle-left"></i> Back</a>
                    </div>
                </div>
                {!! Form::open(array('route' => 'details.store','method'=>'POST')) !!}
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Select User Name:</strong>
                            <select class="form-control" id="user_id" name="user_id">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Phone Number:</strong>
                            {!! Form::text('phone', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Nationality:</strong>
                            {!! Form::text('nationality', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Gender:</strong>
                            <select class="form-control" id="gender" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Academic Level:</strong>
                            <select class="form-control" id="level" name="level">
                                <option value="100">100</option>
                                <option value="200">200</option>
                                <option value="300">300</option>
                                <option value="400">400</option>
                                <option value="500">500</option>
                                <option value="600">600</option>
                                <option value="700">700</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Programme of Study:</strong>
                            {!! Form::text('programme', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Guardian Name:</strong>
                            {!! Form::text('guardian_name', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Guardian Phone:</strong>
                            {!! Form::text('guardian_phone', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Guardian Email:</strong>
                            {!! Form::text('guardian_email', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Guardian Relationship:</strong>
                            <select class="form-control" id="guardian_relationship" name="guardian_relationship">
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Uncle">Uncle</option>
                                <option value="Aunt">Aunt</option>
                                <option value="Sibling">Sibling</option>
                                <option value="Grandparent">Grandparent</option>
                                <option value="Other">Other</option>
                            </select>
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