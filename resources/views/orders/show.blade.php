@extends('layouts.main')

@section('content')
    
    {{-- {{ $details }} --}}
    
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">{!! trans('messages.show') !!} {!! trans('messages.purchase') !!}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">{!! trans('messages.date') !!}</th>
                            <th scope="col">{!! trans('messages.provider') !!}</th>
                            <th scope="col">{!! trans('messages.product') !!}</th>
                            <th scope="col">{!! trans('messages.price') !!}</th>
                            <th scope="col">{!! trans('messages.quantity') !!}</th>
                            <th scope="col">U.M</th>
                            <th scope="col">{!! trans('messages.amount') !!}</th>
                            <th scope="col">{!! trans('messages.tax') !!}</th>
                            <th scope="col">%</th>
                            <th scope="col">SubTotal</th>
                            <th scope="col">{!! trans('messages.wayToPay') !!}Way To Pay</th>
                            <th scope="col"># {!! trans('messages.orders') !!}</th>
                            <th scope="col">{!! trans('messages.code') !!} {!! trans('messages.orders') !!}</th>
                            
                            <th scope="col"># {!! trans('messages.bank') !!}</th>
                            <th scope="col">{!! trans('messages.file') !!}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($details as $d)
                            <tr>
                                <td>{{ $d->created_at }}</td>
                                <td>{{ $d->provider }}</td>
                                <td>{{ $d->product }}</td>
                                <td>${{ $d->price }}</td>
                                <td>#{{ $d->quantity }}</td>
                                <td>{{ $d->um }}</td>
                                <td>${{ $d->price * $d->quantity }}</td>
                                <td>{{ $d->tax }}</td>
                                <td>${{ $d->taxTotal }}</td>
                                <td>${{ $d->taxTotal + ($d->price * $d->quantity) }}</td>
                                <td>{{ $d->pay }}</td>
                                <td>{{ $d->order_id }}</td>
                                <td>{{ $d->orderCode }}</td>
                                <td>{{ $d->bank_id }}</td>
                                <td>
                                    <a href='/download/{{ $d->archive }}'>Download</a>
                                    {{-- {{ $i->archive }} --}}
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="8"></td>
                            <td><b>Total</b></td>
                            <td><b>{{ $d->total }}</b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a class="btn btn-primary my-3" href="{{ route('shoppings.index') }}">{!! trans('messages.back') !!}</a>
        </div>
    </div>

    
@stop