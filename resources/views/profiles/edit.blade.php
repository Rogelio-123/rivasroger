@extends('layouts.main')

@section('content')
    <form method="POST" action="{{ route('profiles.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-3">
                <label class="font-weight-bold" for="">Name</label>
                <input value="{{ $user->name }}" type="text" class="form-control @error('name') is-invalid @enderror"
                    name="name">
                @error('name')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-md-3">
                <label class="font-weight-bold" for="">Email</label>
                <input value="{{ $user->email }}" type="text" class="form-control @error('email') is-invalid @enderror"
                    name="email">
                @error('email')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-md-3">
                <label class="font-weight-bold" for="image">Email</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @error('image')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        </div>

        <button type="submit" class="btn btn-success shadow rounded">
            <i class="fas fa-check"></i> Send
        </button>

        <a class="btn btn-primary shadow rounded" href="{{ route('roles.index') }}">
            <i class="fas fa-angle-left"></i> Back
        </a>

    </form>
@endsection
