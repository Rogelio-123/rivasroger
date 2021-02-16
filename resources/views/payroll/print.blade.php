@extends('layouts.main')

@section('content')

    <hr>

    <p>ID: <b>{{ $pay->id }}</b></p>
    <p>Name: <b>{{ $pay->name }}</b></p>
    <p>Surname: <b>{{ $pay->surname }}</b></p>
    <p>Job Position: <b>{{ $pay->job }}</b></p>
    <p>From: <b>{{ $pay->from }}</b></p>
    <p>To: <b>{{ $pay->to }}</b></p>
    <p>Salary: <b>{{ $pay->salary }}</b></p>
    <p>Hours: <b>{{ $pay->hours }}</b></p>
    <p>Payment: <b>{{ $pay->payment }}</b></p>
    <p>Extra Hours: <b>{{ $pay->extraH }}</b></p>
    <p>Total Extra Hours: <b>{{ $pay->extraT }}</b></p>
    <p>Total Payment: <b>{{ $pay->totalP }}</b></p>
    <p>Payroll Code: <b>{{ $pay->payrollCode }}</b></p>
    <p>Date: <b>{{ $pay->created_at }}</b></p>

    {{-- <div>
        <a class="btn btn-dark" href="{{ route('payrolls.show') }}">Back</a>
    </div> --}}



    <a class="btn btn-primary my-3" href="{{ route('payrolls.index') }}">Back Payrolls</a>

@stop
