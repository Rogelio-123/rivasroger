@extends('layouts.main')

@section('content')

    {{-- {{ $employee }} --}}

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Show Employees</h6>
        </div>
        <div class="card-body">
            <p>Name: <b>{{ $employee->name }}</b></p>
            <p>Surname: <b>{{ $employee->surname }}</b></p>
            <p>Job Position: <b>{{ $employee->job }}</b></p>
            <p>Phone: <b>{{ $employee->phone }}</b></p>
            <p>Email: <b>{{ $employee->email }}</b></p>
            <p>Birthdate: <b>{{ $employee->birthdate }}</b></p>
            <p>Adress: <b>{{ $employee->adress }}</b></p>
            <p>Recruitment Date: <b>{{ $employee->rDate }}</b></p>
            <p>Salary: <b>{{ $employee->salary }}</b></p>

            <a class="btn btn-primary my-3" href="{{ route('hr-and-payroll.index') }}">Back</a>
        </div>
    </div>

@stop
