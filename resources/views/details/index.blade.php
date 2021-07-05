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
                    <h5 class="m-b-10">Users Details</h5>
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
                        <a class="btn btn-success mb-3 btn-sm" href="/details/create"><i class="fas fa-plus"></i> Add Details to a User</a>
                    </div>
                </div>
                <div class="dt-responsive table-responsive">
                    <table id="user-list-table" class="table nowrap">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Programme</th>
                                <th>Level</th>
                                <th>Phone</th>
                                <th>Nationality</th>
                                <th>Gender</th>
                            </tr>
                        </thead>
                        @foreach ($detail as $detail)
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-inline-block align-middle">
                                        <div class="d-inline-block">
                                            <h6 class="m-b-0">{{ $detail->user->name }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $detail->programme }}</td>
                                <td>{{ $detail->level }}</td>
                                <td>{{ $detail->phone }}</td>
                                <td>{{ $detail->nationality }}</td>
                                <td>{{ $detail->gender }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- {!! $detail->render() !!} --}}

@endsection
