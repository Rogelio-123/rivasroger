@extends('layouts.main')

@section('content')
    
    {{-- {{ $details }} --}}
    
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Show Expenses</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Provider</th>
                            <th scope="col">Service</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Tax</th>
                            <th scope="col">%</th>
                            <th scope="col">Total</th>
                            <th scope="col">File</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{ $details }} --}}
                        @foreach ($details as $i)
                            <tr>
                                <th scope="row">{{ $i->id }}</th>
                                <td>{{ $i->provider }}</td>
                                <td>{{ $i->service }}</td>
                                <td>#{{ $i->price }}</td>
                                <td>#{{ $i->quantity }}</td>
                                <td>${{ $i->amount }}</td>
                                <td>{{ $i->tax }}</td>
                                <td>{{ $i->taxTotal }}</td>
                                <td>${{ $i->total }}</td>
                                <td>
                                    <a href='/download/{{ $i->archive }}'>Download</a>
                                    {{-- {{ $i->archive }} --}}
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="7"></td>
                            <td><b>SubTotal</b></td>
                            <td><b>${{ $i->totalExpense }}</b></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <a class="btn btn-primary my-3" href="{{ route('expenses.index') }}">Back</a>
            </div>
        </div>
    </div>

@stop