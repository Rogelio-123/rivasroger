@extends('layouts.main')

@section('content')

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Create Providers</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('providers.store') }}">
                {{ csrf_field() }}

                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="">Provider's Name</label>
                        <input type="text" class="form-control" name="name" id="">
                        @error('name')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="">Phone</label>
                        <input type="number" class="form-control" name="phone" id="">
                        @error('phone')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="form-group col-md-4">
                        <label for="">Mobile Phone</label>
                        <input type="number" class="form-control" name="mobile" id="">
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
                        <input type="email" class="form-control" name="email" id="">
                        @error('email')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group col-md-4">
                        <label for="">Contact Name</label>
                        <input type="text" class="form-control" name="contact" id="">
                        @error('contact')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group col-md-4">
                        <label for="">City</label>
                        <input type="text" class="form-control" name="city" id="">
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
                        <input type="text" class="form-control" name="state" id="">
                        @error('state')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    <div class="form-group col-md-4">
                        <label for="">Postal Code</label>
                        <input type="number" class="form-control" name="postal" id="">
                        @error('postal')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group col-md-4">
                        <label for="">Country</label>
                        <input type="text" class="form-control" name="country" id="">
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
                        <input type="text" class="form-control" name="adress" id="">
                        @error('adress')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group col-md-6">
                        <label for="">Adress 2</label>
                        <input type="text" class="form-control" name="adressTwo" id="">
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
                        <textarea class="form-control" name="details" id="exampleFormControlTextarea1" rows="3"></textarea>
                        @error('details')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <button type="submit" class="btn btn-success shadow rounded mb-3">Send</button>
                <a class="btn btn-primary shadow rounded mb-3" href="{{ route('providers.index') }}">Back</a>
            </form>
        </div>
    </div>

@stop
