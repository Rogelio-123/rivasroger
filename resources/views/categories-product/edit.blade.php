@extends('layouts.main')

@section('content')

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">{!! trans('messages.datatable') !!}</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}">
                {{ csrf_field() }}
                @method('PUT')

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="name">Category Product Name</label>
                        <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="name">
                    </div>
                </div>

                <button type="submit" class="btn btn-success shadow rounded">Send</button>
                <a class="btn btn-primary shadow rounded" href="{{ route('products.index') }}">Back</a>
            </form>
        </div>
    </div>

@stop
