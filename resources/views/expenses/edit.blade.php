@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create Expenses</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <hr>
    <form method="POST" action="{{ route('expenses.update', ['expense' => $expense->id]) }}">
        {{ csrf_field() }}
        @method('PUT')

        <div class="form-row">

            <div class="form-group col-md-3">
                <label for="">Date</label>
                <input type="date" value="{{ $expense->date }}" name="date" class="form-control" id="">
            </div>

            <div class="form-group col-md-3">
                <label for="">Expense Name</label>
                <input type="text" value="{{ $expense->name }}" name="name" class="form-control" id="">
            </div>

            <div class="form-group col-md-3">
                <label for="exampleFormControlSelect1">Way To Pay</label>
                <select class="form-control" name="pay" id="exampleFormControlSelect1">
                    @if (isset($expense->pay))
                        <option>{{ $expense->pay }}</option>
                    @endif
                    <option>Cash</option>
                    <option>Credit Card</option>
                    <option>Debit</option>
                    <option>Wire Transfer</option>
                    <option>Bank Deposit</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="">Expense Amount</label>
                <input placeholder="$" value="{{ $expense->amount }}" name="amount" type="number" class="form-control"
                    id="">
            </div>
        </div>

        <button type="submit" class="btn btn-danger shadow rounded">Send</button>
        <a class="btn btn-dark shadow rounded" href="{{ route('expenses.index') }}">Back</a>
    </form>
@stop

@section('css')

@stop

@section('js')

@stop
