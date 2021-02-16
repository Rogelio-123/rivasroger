@extends('layouts.main')

@section('content')
    
    {{-- {{ $details }} --}}
    
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Show Purchase</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Provider</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">U.M</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Tax</th>
                            <th scope="col">%</th>
                            <th scope="col">SubTotal</th>
                            <th scope="col">Way To Pay</th>
                            <th scope="col"># Order</th>
                            <th scope="col">Order Code</th>
                            
                            <th scope="col"># Bank</th>
                            <th scope="col">File</th>
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
            <a class="btn btn-primary my-3" href="{{ route('shoppings.index') }}">Back</a>
        </div>
    </div>

    
@stop