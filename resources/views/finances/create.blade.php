@extends('layouts.main')

@section('content')
    
   <div class="card shadow">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Finances</h6>
    </div>
       <div class="card-body">
        <form method="POST" action="{{ route('finances.store') }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="">Alias</label>
                    <input value="{{ old('alias') }}" type="text" class="form-control @error('alias') is-invalid @enderror"
                        name="alias">
                    @error('alias')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
    
                <div class="form-group col-md-3">
                    <label for="">Bank</label>
                    <input value="{{ old('bank') }}" type="text" class="form-control @error('bank') is-invalid @enderror"
                        name="bank">
                    @error('bank')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
    
                <div class="form-group col-md-3">
                    <label for="">Account</label>
                    <input value="{{ old('account') }}" type="text" class="form-control @error('account') is-invalid @enderror"
                        name="account">
                    @error('account')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
    
                <div class="form-group col-md-3">
                    <label for="">Owner</label>
                    <input value="{{ old('owner') }}" type="text" class="form-control @error('owner') is-invalid @enderror"
                        name="owner">
                    @error('owner')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
    
            <button type="submit" class="btn btn-success shadow rounded">
                <i class="fas fa-cart-plus"></i> Send
            </button>
    
            <a class="btn btn-primary shadow rounded" href="{{ route('finances.index') }}">
                <i class="fas fa-angle-left"></i> Back
            </a>
    
        </form>
    
       </div>
   </div>

    
@stop

