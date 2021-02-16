@extends('layouts.main')

@section('content')

    <hr>
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Detalles de Venta</h6>
        </div>
        <div class="card-body">
            <p>Costumer Name: <b>{{ $sale->costumer->name }}</b></p>
            <p>Way To Pay: <b>{{ $sale->wayToPay }}</b> </p>
            <p>Date: <b>{{ $sale->date }}</b> </p>
            <p>Service: <b>{{ $sale->service }}</b> </p>
            <p>Description: <b>{{ $sale->description }}</b> </p>
            <p>Price: <b>{{ $sale->price }}</b> </p>
            <p>Quantity: <b>{{ $sale->quantity }}</b> </p>
            <p>SubTotal: <b>{{ $sale->subtotal }}</b> </p>
            <p>Tax %: <b>{{ $sale->tax }}</b> </p>
            <p>Tax Total: <b>{{ $sale->taxTotal }}</b> </p>
            <p>Total: <b>{{ $sale->total }}</b> </p>
            <p>Payment Amount: <b>{{ $sale->paymentAmount }}</b> </p>
            <p>Debt: <b>{{ $sale->debt }}</b> </p>
            <a class="btn btn-primary shadow rounded mb-2" href="{{ route('sales.index') }}">Back</a>
        </div>
    </div>

@stop
