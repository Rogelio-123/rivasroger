@extends('layouts.main')

@section('content')

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Create Inventory</h6>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">Entry Merchandise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Output Merchandise</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active mt-4" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form method="POST" action="{{ route('inputs.store') }}">
                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlSelect1">Product</label>
                                <select class="form-control" name="product" id="exampleFormControlSelect1">
                                    <option value="">- Choose</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                                @error('product')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-2">
                                <label for="quantity">Quantity</label>
                                <input placeholder="#" type="number" name="quantity" class="form-control" id="quantity">
                                @error('quantity')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" name="date" id="date">
                                @error('date')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <button type="submit" class="btn btn-success shadow rounded">Send</button>
                        <a class="btn btn-primary shadow rounded" href="{{ route('stocks.index') }}">Stock</a>
                    </form>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form method="POST" action="{{ route('outputs.store') }}">
                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlSelect1">Product</label>
                                <select class="form-control" name="product" id="exampleFormControlSelect1">
                                    <option value="">- Choose</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                    @error('product')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </select>
                            </div>

                            {{-- <div class="form-group col-md-2">
                                <label for="">Stock</label>
                                <input placeholder="100" type="number" class="form-control" id="">
                            </div> --}}

                            <div class="form-group col-md-2">
                                <label for="">Quantity</label>
                                <input placeholder="#" type="number" name="quantity" class="form-control" id="">
                                @error('quantity')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-2">
                                <label for="exampleFormControlSelect1">U.M</label>
                                <select class="form-control" name="um" id="exampleFormControlSelect1">
                                    <option>U.M 1</option>
                                    <option>U.M 2</option>
                                    <option>U.M 3</option>
                                    <option>U.M 4</option>
                                    <option>U.M 5</option>
                                </select>
                                @error('um')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlSelect1">Reason</label>
                                <select class="form-control" name="reason" id="exampleFormControlSelect1">
                                    <option>Reason 1</option>
                                    <option>Reason 2</option>
                                    <option>Reason 3</option>
                                    <option>Reason 4</option>
                                    <option>Reason 5</option>
                                </select>
                                @error('reason')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-2">
                                <label for="">Date</label>
                                <input type="date" name="date" class="form-control" id="">
                                @error('date')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <button type="submit" class="btn btn-success shadow rounded">Send</button>
                        <a class="btn btn-primary shadow rounded" href="{{ route('stocks.index') }}">Stock</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
