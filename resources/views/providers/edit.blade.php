@extends('layouts.main')

@section('content')

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Edit Providers</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('providers.update', ['provider' => $provider->id]) }}">
                {{ csrf_field() }}
                @method('PUT')

                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="">Provider's Name</label>
                        <input type="text" class="form-control" value="{{ $provider->name }}" name="name" id="">
                        @error('name')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="">Phone</label>
                        <input type="number" class="form-control" value="{{ $provider->phone }}" name="phone" id="">
                        @error('phone')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="">Mobile Phone</label>
                        <input type="number" class="form-control" value="{{ $provider->mobile }}" name="mobile" id="">
                        @error('mobile')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="">Email</label>
                        <input type="email" class="form-control" value="{{ $provider->email }}" name="email" id="">
                        @error('email')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="">Contact Name</label>
                        <input type="text" class="form-control" value="{{ $provider->contact }}" name="contact" id="">
                        @error('contact')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="">City</label>
                        <input type="text" class="form-control" value="{{ $provider->city }}" name="city" id="">
                        @error('city')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">State</label>
                        <input type="text" class="form-control" value="{{ $provider->state }}" name="state" id="">
                        @error('state')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="">Postal Code</label>
                        <input type="number" class="form-control" value="{{ $provider->postal }}" name="postal" id="">
                        @error('postal')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="">Country</label>
                        <input type="text" class="form-control" value="{{ $provider->country }}" name="country" id="">
                        @error('country')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Adress</label>
                        <input type="text" class="form-control" value="{{ $provider->adress }}" name="adress" id="">
                        @error('adress')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="">Adress 2</label>
                        <input type="text" class="form-control" value="{{ $provider->adressTwo }}" name="adressTwo" id="">
                        @error('adressTwo')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlTextarea1">Details</label>
                        <textarea class="form-control" name="details" id="exampleFormControlTextarea1"
                            rows="3">{{ $provider->details }}
                        </textarea>
                        @error('details')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-success shadow rounded mb-2">Send</button>
                <a class="btn btn-primary shadow rounded mb-2" href="{{ route('providers.index') }}">Back</a>
            </form>
        </div>
    </div>

@stop
