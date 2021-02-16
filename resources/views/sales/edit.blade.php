@extends('layouts.main')

@section('content')

    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-dark">Crear Venta ó Cliente</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('sales.update', ['sale' => $sale->id]) }}" role="form">
                {{ csrf_field() }}
                @method('PUT')

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="costumer_name">Costumer Name</label>
                        <select class="form-control" name="costumerName" id="costumer_name">
                            @if (isset($sale->costumer->name))
                                <option value="{{ $sale->costumer->id }}">{{ $sale->costumer->name }}</option>
                            @endif
                            @foreach ($costumers as $costumer)
                                <option value="{{ $costumer->id }}">{{ $costumer->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="way_to_pay">Way To Pay</label>
                        <select class="form-control" name="wayToPay" id="way_to_pay">
                            @if (isset($sale->wayToPay))
                                <option>{{ $sale->wayToPay }}</option>
                            @endif
                            <option>Cash</option>
                            <option>Credit Card</option>
                            <option>Debit</option>
                            <option>Wire Transfer</option>
                            <option>Bank Deposit</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" value="{{ $sale->date }}" name="date" id="date"
                            aria-describedby="help">
                        <small id="help" class="form-text text-muted"><b>{{ $sale->date }}</b></small>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="service">Service</label>
                        <input type="text" class="form-control" value="{{ $sale->service }}" name="service" id="service">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" value="{{ $sale->description }}" name="description"
                            id="description">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="price">Price</label>
                        <input placeholder="$" type="text" class="form-control" value="{{ $sale->price }}" name="price"
                            id="price">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="quantity">Quantity</label>
                        <input placeholder="#" type="text" class="form-control" value="{{ $sale->quantity }}"
                            name="quantity" id="quantity">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="tax">Tax</label>
                        <select class="form-control" name="tax" id="tax">
                            @if (isset($sale->tax))
                                <option>{{ $sale->tax }}</option>
                            @endif
                            <option value=".16">.16</option>
                            <option value=".08">.08</option>
                            <option value=".05">.05</option>
                        </select>

                    </div>
                    <div class="form-group col-md-3">
                        <label for="payment_amount">Payment Amount</label>
                        <input placeholder="$" type="text" class="form-control" value="{{ $sale->paymentAmount }}"
                            name="paymentAmount" id="payment_amount">
                    </div>
                </div>

                <button type="submit" class="btn btn-success shadow rounded">Send</button>
                <a class="btn btn-primary shadow rounded" href="{{ route('sales.index') }}">Back</a>
            </form>
        </div>
    </div>

@stop
