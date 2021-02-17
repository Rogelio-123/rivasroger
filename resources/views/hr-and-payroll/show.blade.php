@extends('layouts.main')

@section('content')

    {{-- {{ $employee }} --}}

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">{!! trans('messages.show') !!} {!! trans('messages.employees') !!}</h6>
        </div>
        <div class="card-body">
            <p>{!! trans('messages.name') !!}: <b>{{ $employee->name }}</b></p>
            <p>{!! trans('messages.surname') !!}: <b>{{ $employee->surname }}</b></p>
            <p>{!! trans('messages.position') !!} {!! trans('messages.job') !!}: <b>{{ $employee->job }}</b></p>
            <p>{!! trans('messages.phone') !!}: <b>{{ $employee->phone }}</b></p>
            <p>Email: <b>{{ $employee->email }}</b></p>
            <p>{!! trans('messages.birthdate') !!}: <b>{{ $employee->birthdate }}</b></p>
            <p>{!! trans('messages.address') !!}: <b>{{ $employee->adress }}</b></p>
            <p>{!! trans('messages.recruitmentDate') !!}: <b>{{ $employee->rDate }}</b></p>
            <p>{!! trans('messages.salary') !!}: <b>{{ $employee->salary }}</b></p>

            <a class="btn btn-primary my-3" href="{{ route('hr-and-payroll.index') }}">{!! trans('messages.back') !!}</a>
        </div>
    </div>

@stop
