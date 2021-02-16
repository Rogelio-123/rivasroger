@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <hr>
    {{-- {{ $shopping }} --}}

    <p>Provider Name: {{ $shopping->provider->name }}</p>
    <p>Way To Pay: {{ $shopping->pay }}</p>
    <p>Bank: {{ $shopping->bank }}</p>
    <p>Product: {{ $shopping->pName }}</p>
    <p>Price: {{ $shopping->price }}</p>
    <p>Quantity: {{ $shopping->quantity }}</p>
    <p>Subtotal: {{ $shopping->subtotal }}</p>
    <p>Tax: {{ $shopping->tax }}</p>
    <p>Tax Total: {{ $shopping->taxTotal }}</p>
    <p>Total: {{ $shopping->total }}</p>
    <p>Payment Amount: {{ $shopping->payment }}</p>
    <p>Debt: {{ $shopping->debt }}</p>

    <a class="btn btn-dark shadow rounded mb-3" href="{{ route('shoppings.index') }}">Back</a>
@stop

@section('css')

@stop

@section('js')

@stop
