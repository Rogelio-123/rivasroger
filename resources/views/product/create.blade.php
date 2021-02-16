@extends('layouts.main')

@section('content')

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">{!! trans('messages.datatable') !!}</h6>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">Create Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Create Category Product</a>
                </li>

            </ul>

            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active mt-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form method="POST" action="{{ route('products.store') }}">
                        {{ csrf_field() }}

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="name">Product Name</label>
                                <input type="text" name="name" class="form-control" id="name">
                                @error('name')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlSelect1">Category</label>
                                <select class="form-control" name="category" id="exampleFormControlSelect1">
                                    <option value="">- Choose</option>

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                                @error('category')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-2">
                                <label for="exampleFormControlSelect1">U.M</label>
                                <select class="form-control" name="um" id="exampleFormControlSelect1">
                                    <option value="" selected>- Choose</option>
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

                            <div class="form-group col-md-2">
                                <label for="minimum">Minimun Amount</label>
                                <input placeholder="#" type="number" name="minimum" class="form-control" id="minimum">
                                @error('minimum')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success shadow rounded">Send</button>
                        <a class="btn btn-primary shadow rounded" href="{{ route('products.index') }}">Back</a>
                    </form>
                </div>

                <div class="tab-pane fade mt-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form method="POST" action="{{ route('categories.store') }}">
                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="name">Category Product Name</label>
                                <input type="text" name="name" class="form-control" id="name">
                                @error('name')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success shadow rounded">Send</button>
                        <a class="btn btn-primary shadow rounded" href="{{ route('products.index') }}">Back</a>
                    </form>
                </div>

            </div>
        </div>
    </div>

@stop
