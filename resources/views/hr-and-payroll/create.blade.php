@extends('layouts.main')

@section('content')

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Create Employees</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('hr-and-payroll.store') }}">
                {{ csrf_field() }}

                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="">Employee Name</label>
                        <input type="text" name="name" class="form-control" id="">
                        @error('name')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="">Surname</label>
                        <input type="text" name="surname" class="form-control" id="">
                        @error('surname')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">Job Position</label>
                        <select class="form-control" name="job" id="exampleFormControlSelect1">
                            <option selected value="">- Choose</option>
                            <option>Job Position 1</option>
                            <option>Job Position 2</option>
                            <option>Job Position 3</option>
                            <option>Job Position 4</option>
                            <option>Job Position 5</option>
                        </select>
                        @error('job')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Phone</label>
                        <input type="number" name="phone" class="form-control" id="">
                        @error('phone')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" id="">
                        @error('email')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="">Birthdate</label>
                        <input type="date" name="birthdate" class="form-control" id="">
                        @error('birthdate')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Adress</label>
                        <input type="text" name="adress" class="form-control" id="">
                        @error('adress')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="">Recruitment Date</label>
                        <input type="date" name="rDate" class="form-control" id="">
                        @error('rDate')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="">Salary</label>
                        <input placeholder="$" name="salary" type="number" class="form-control" id="">
                        @error('salary')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-success shadow rounded">Send</button>
                <a class="btn btn-primary shadow rounded" href="{{ route('hr-and-payroll.index') }}">Back</a>
            </form>
        </div>
    </div>

@stop
