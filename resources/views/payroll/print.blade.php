@extends('layouts.main')

@section('content')

    <hr>

    <p>ID: <b>{{ $pay->id }}</b></p>
    <p>{!! trans('messages.name') !!}: <b>{{ $pay->name }}</b></p>
    <p>{!! trans('messages.surname') !!}: <b>{{ $pay->surname }}</b></p>
    <p>{!! trans('messages.position') !!} {!! trans('messages.job') !!}: <b>{{ $pay->job }}</b></p>
    <p>{!! trans('messages.from') !!}: <b>{{ $pay->from }}</b></p>
    <p>{!! trans('messages.to') !!}: <b>{{ $pay->to }}</b></p>
    <p>{!! trans('messages.salary') !!}: <b>{{ $pay->salary }}</b></p>
    <p>{!! trans('messages.hours') !!}: <b>{{ $pay->hours }}</b></p>
    <p>{!! trans('messages.payment') !!}: <b>{{ $pay->payment }}</b></p>
    <p>{!! trans('messages.hours') !!} Extras: <b>{{ $pay->extraH }}</b></p>
    <p>Total de Extra {!! trans('messages.hours') !!}: <b>{{ $pay->extraT }}</b></p>
    <p>Total {!! trans('messages.payment') !!}: <b>{{ $pay->totalP }}</b></p>
    <p>{!! trans('messages.payroll') !!} {!! trans('messages.code') !!}: <b>{{ $pay->payrollCode }}</b></p>
    <p>{!! trans('messages.date') !!}: <b>{{ $pay->created_at }}</b></p>

    {{-- <div>
        <a class="btn btn-dark" href="{{ route('payrolls.show') }}">Back</a>
    </div> --}}



    <a class="btn btn-primary my-3" href="{{ route('payrolls.index') }}">{!! trans('messages.back') !!}</a>

@stop
