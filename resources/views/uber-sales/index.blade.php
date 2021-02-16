@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            {!! trans('messages.dashboard') !!} - {!! trans('messages.current') !!}
        </h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="window.print()"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <form method="POST" action="">
        @csrf
        <div class="form-row">
            <div class="input-group mb-3 col-md-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">{!! trans('messages.from') !!}</span>
                </div>
                <input autocomplete="off" type="date" class="form-control" name="from" aria-describedby="help"
                    placeholder="From">
                <small id="help" class="form-text text-muted"><b></b></small>
            </div>

            <div class="input-group mb-3 col-md-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">{!! trans('messages.to') !!}</span>
                </div>
                <input autocomplete="off" type="date" class="form-control" name="to" aria-describedby="help"
                    placeholder="From">
                <small id="help" class="form-text text-muted"><b></b></small>
            </div>

            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-danger shadow rounded">{!! trans('messages.filter') !!}</button>
            </div>
        </div>
    </form>

    <div class="row">

        <div class="col-md-6">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                {!! trans('messages.orders') !!} </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $orders }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                {!! trans('messages.sales') !!}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                ${{ number_format($sales, 2) }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
