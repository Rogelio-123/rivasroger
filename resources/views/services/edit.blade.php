@extends('layouts.main')

@section('content')

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Edit Service</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('services.update', ['service' => $service->id]) }}">
                @method('PUT')
                @csrf
                <div class="form-row">

                    <div class="form-group col-md-3">
                        <label for="exampleFormControlSelect1">Service</label>
                        <input type="text" class="form-control" name="name" value="{{$service->name}}">

                        @error('name')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <button type="submit" class="btn btn-success shadow rounded mb-3">Send</button>
            </form>
        </div>
    </div>

@endsection





