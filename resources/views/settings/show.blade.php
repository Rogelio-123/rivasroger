@extends('layouts.main')

@section('content')
    
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Details Manager</h6>
        </div>
        <div class="card-body">
            <p>{{ $setting->branch }}</p>
            <p>{{ $setting->manager }}</p>
            <p>{{ $setting->adress }}</p>
            <p>{{ $setting->phone }}</p>
            <p>{{ $setting->uberUser }}</p>
            <p>{{ $setting->uberPass }}</p>
            <p>{{ $setting->grubUser }}</p>
            <p>{{ $setting->grubPass }}</p>
            <p>{{ $setting->doorUser }}</p>
            <p>{{ $setting->doorPass }}</p>
            <p>{{ $setting->cloverUser }}</p>
            <p>{{ $setting->cloverPass }}</p>
            <p>{{ $setting->postUser }}</p>
            <p>{{ $setting->postPass }}</p>
            <p>{{ $setting->rivasId }}</p>

            <a class="btn btn-primary shadow rounded my-3" href="{{ route('settings.index') }}">Back</a>
        </div>
    </div>

    
    
@stop