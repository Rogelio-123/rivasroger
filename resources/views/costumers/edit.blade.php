@extends('layouts.main')

@section('content')

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Edit Costumer</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('costumers.update', ['costumer' => $costumer->id]) }}" role="form">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="name">Costumer Name</label>
                        <input type="text" class="form-control" value="{{ $costumer->name }}" name="name" id="name"
                            aria-describedby="help">
                        <small id="help" class="form-text text-muted"><b></b></small>
                    </div>

                </div>

                <button type="submit" class="btn btn-success shadow rounded">Send</button>
                <a class="btn btn-primary shadow rounded" href="{{ route('sales.index') }}">Back</a>
            </form>
        </div>
    </div>

@stop
