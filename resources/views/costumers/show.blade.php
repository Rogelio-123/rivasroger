@extends('layouts.main')

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <hr>

    <p>Costumer Name: <b>{{ $costumer->name }}</b> </p>
@stop