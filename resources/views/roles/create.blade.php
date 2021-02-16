@extends('layouts.main')

@section('content')

    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-dark">Crear Rol</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('roles.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label class="font-weight-bold" for="">Name</label>
                        <input value="{{ old('name') }}" type="text"
                            class="form-control @error('name') is-invalid @enderror" name="name">
                        @error('name')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label class="font-weight-bold" for="">Permits</label>
                        <select multiple class="custom-select form-control @error('permits') is-invalid @enderror" name="permits[]"
                            id="exampleFormControlSelect2">
                            @foreach ($permits as $i)
                                <option value="{{ $i->id }}">{{ $i->name }}</option>
                            @endforeach
                        </select>
                        {{-- <select
                            class="custom-select form-control @error('role') is-invalid @enderror" name="role">
                            <option selected>Choose...</option>
                            @foreach ($roles as $i)
                                <option value="{{ $i->name }}">{{ $i->name }}</option>
                            @endforeach
                        </select> --}}
                        @error('permits')
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
        </div>
    </div>

@stop
