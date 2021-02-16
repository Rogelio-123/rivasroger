@extends('layouts.main')

@section('content')

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">{!! trans('messages.datatable') !!}</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
                {{ csrf_field() }}
                @method('PUT')

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="name">Product Name</label>
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control" id="name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="costumer_name">Category</label>
                        <select class="form-control" name="category" id="costumer_name">
                            @if (isset($product->category->name))
                                <option value="{{ $product->category->id }}">{{ $product->category->name }}</option>
                            @endif
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="exampleFormControlSelect1">U.M</label>
                        <select class="form-control" name="um" id="exampleFormControlSelect1">
                            @if (isset($product->um))
                                <option>{{ $product->um }}</option>
                            @endif
                            <option>U.M 1</option>
                            <option>U.M 2</option>
                            <option>U.M 3</option>
                            <option>U.M 4</option>
                            <option>U.M 5</option>
                        </select>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="minimum">Minimun Amount</label>
                        <input placeholder="#" type="number" value="{{ $product->minimum }}" name="minimum"
                            class="form-control" id="minimum">
                    </div>
                </div>

                <button type="submit" class="btn btn-success shadow rounded">Send</button>
                <a class="btn btn-primary shadow rounded" href="{{ route('products.index') }}">Back</a>
            </form>
        </div>
    </div>

@stop
