@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create Shopping</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    {{-- {{ $shopping }} --}}
    <hr>
    <form method="POST" action="{{ route('shoppings.update', ['shopping' => $shopping->id]) }}">
        {{ csrf_field() }}
        @method('PUT')

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="exampleFormControlSelect1">Provider's Name</label>
                <select class="form-control" name="provider" id="exampleFormControlSelect1">
                    @if (isset($shopping->provider->name))
                        <option value="{{ $shopping->provider->id }}">{{ $shopping->provider->name }}</option>
                    @endif
                    @foreach ($providers as $provider)
                        <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="exampleFormControlSelect1">Way To Pay</label>
                <select class="form-control" name="pay" id="exampleFormControlSelect1">
                    @if (isset($shopping->pay))
                        <option>{{ $shopping->pay }}</option>
                    @endif
                    <option>Cash</option>
                    <option>Credit Card</option>
                    <option>Debit</option>
                    <option>Wire Transfer</option>
                    <option>Bank Deposit</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="exampleFormControlSelect1">Bank</label>
                <select class="form-control" name="bank" id="exampleFormControlSelect1">
                    @if (isset($shopping->bank))
                        <option>{{ $shopping->bank }}</option>
                    @endif
                    <option>Bank 1</option>
                    <option>Bank 2</option>
                    <option>Bank 3</option>
                    <option>Bank 4</option>
                    <option>Bank 5</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="tax">Tax</label>
                <select class="form-control" name="tax" id="tax">
                    @if (isset($shopping->tax))
                        <option>{{ $shopping->tax }}</option>
                    @endif
                    <option value=".16">.16</option>
                    <option value=".08">.08</option>
                    <option value=".05">.05</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="">Payment Amount</label>
                <input placeholder="$" type="text" value="{{ $shopping->payment }}" name="payment" class="form-control"
                    id="">
            </div>
        </div>

        <button type="submit" class="btn btn-danger shadow rounded">Send</button>
        <a class="btn btn-dark shadow rounded" href="{{ route('shoppings.index') }}">Back</a>
    </form>
@stop

@section('css')

@stop

@section('js')

@stop
