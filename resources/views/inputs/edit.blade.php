@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <hr>

    <form method="POST" action="{{ route('inputs.update', ['input' => $input->id]) }}">
        {{ csrf_field() }}
        @method('PUT')

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="exampleFormControlSelect1">Product</label>
                <select class="form-control" name="product" id="exampleFormControlSelect1">
                    @if (isset($input->product->name))
                        <option value="{{ $input->product->id }}">{{ $input->product->name }}</option>
                    @endif
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-2">
                <label for="quantity">Quantity</label>
                <input placeholder="#" type="number" value="{{ $input->quantity }}" name="quantity" class="form-control"
                    id="quantity">
            </div>

            <div class="form-group col-md-4">
                <label for="date">Date</label>
                <input type="date" class="form-control" value="{{ $input->date }}" name="date" id="date">
            </div>

        </div>

        <button type="submit" class="btn btn-danger shadow rounded">Send</button>
        <a class="btn btn-dark shadow rounded" href="{{ route('inventory.index') }}">Back</a>
    </form>

@stop

@section('css')

@stop

@section('js')

@stop
