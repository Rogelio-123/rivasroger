@extends('layouts.main')

@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-dark">Editar Usuario</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('users.update', ['user' => $user->id]) }}">
                @csrf
                @method('PUT')

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label class="font-weight-bold" for="">Name</label>
                        <input value="{{ $user->name }}" type="text"
                            class="form-control @error('name') is-invalid @enderror" name="name">
                        @error('name')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label class="font-weight-bold" for="">Email</label>
                        <input value="{{ $user->email }}" type="text"
                            class="form-control @error('email') is-invalid @enderror" name="email">
                        @error('email')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label class="font-weight-bold" for="">Password</label>
                        <input type="text" class="form-control @error('password') is-invalid @enderror" name="password">
                        @error('password')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label class="font-weight-bold" for="">Role</label>
                        <select class="custom-select form-control @error('role') is-invalid @enderror" name="role">
                            @if (isset($user))
                                <option selected>{{ implode(" ", $user->roles()->pluck('name')->toArray() ) }}</option>
                            @endif
                            @foreach ($roles as $i)
                                <option value="{{ $i->name }}">{{ $i->name }}</option>
                            @endforeach
                        </select>
                        @error('password')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-success shadow rounded">
                    <i class="fas fa-check"></i> Send
                </button>

                <a class="btn btn-primary shadow rounded" href="{{ route('users.index') }}">
                    <i class="fas fa-angle-left"></i> Back
                </a>

            </form>
        </div>
    </div>
@stop
