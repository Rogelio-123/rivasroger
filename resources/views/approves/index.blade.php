@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Approve Purchease</h1>
@stop

@section('content')
    <p>{{ $brand[0]->branch }} - {{ $brand[0]->manager }} - {{ $brand[0]->adress }} - {{ $brand[0]->phone }} </p>
    <a href="{{ route('shoppings.create') }}" class="btn btn-danger shadow rounded">Create Purchase</a>
    {{-- {{ $shops[0]->id }} --}}
    <hr>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">Shoppings</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                aria-selected="false">Pendings</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Provider</th>
                        <th scope="col">Product Name</th>
                        {{-- <th scope="col">Details</th> --}}
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">SubTotal</th>
                        {{-- <th scope="col">Way To Pay</th>
                        <th scope="col">Bank</th> --}}
                        <th scope="col">Tax</th>
                        <th scope="col">Tax Total</th>
                        <th scope="col">Total</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Debt</th>
                        <th scope="col">View</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($shoppings as $s)
                        <tr>
                            <td>{{ $s->provider_id }}</td>
                            <td>{{ $s->pName }}</td>
                            <td>{{ $s->price }}</td>
                            <td>{{ $s->quantity }}</td>
                            <td>{{ $s->subtotal }}</td>
                            <td>{{ $s->tax }}</td>
                            <td>{{ $s->taxTotal }}</td>
                            <td>{{ $s->total }}</td>
                            <td>{{ $s->payment }}</td>
                            <td>{{ $s->debt }}</td>
                            {{-- <td>Cash</td>
                            <td>None</td>
                            <td>$ 16.00</td>
                            <td>$ 116.00</td>
                            <td>$ 50.00</td>
                            <td>$ 66.00</td> --}}
                            <td class="text-center">
                                <a href="{{ route('shoppings.show', ['shopping' => $s->id]) }}"><i class="far fa-file"
                                        style="color: green;"></i></a>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('shoppings.edit', ['shopping' => $s->id]) }}"><i class="far fa-edit"
                                        style="color: #F1C40F;"></i></a>
                            </td>
                            <td class="text-center">
                                <form class="formulario-eliminar"
                                    action="{{ route('shoppings.destroy', ['shopping' => $s->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    @method('DELETE')

                                    <button style="border: none; background-color: transparent;" type="submit">
                                        <i class="fas fa-trash" style="color: #D31111 ;"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Provider</th>
                        <th scope="col">Product Name</th>
                        {{-- <th scope="col">Details</th> --}}
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">SubTotal</th>
                        {{-- <th scope="col">Way To Pay</th>
                        <th scope="col">Bank</th> --}}
                        <th scope="col">Tax</th>
                        <th scope="col">Tax Total</th>
                        <th scope="col">Total</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Debt</th>
                        <th scope="col">View</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($pendings as $p)
                        <tr>
                            <td>{{ $p->provider_id }}</td>
                            <td>{{ $p->pName }}</td>
                            <td>{{ $p->price }}</td>
                            <td>{{ $p->quantity }}</td>
                            <td>{{ $p->subtotal }}</td>
                            <td>{{ $p->tax }}</td>
                            <td>{{ $p->taxTotal }}</td>
                            <td>{{ $p->total }}</td>
                            <td>{{ $p->payment }}</td>
                            <td>{{ $p->debt }}</td>
                            {{-- <td>Cash</td>
                            <td>None</td>
                            <td>$ 16.00</td>
                            <td>$ 116.00</td>
                            <td>$ 50.00</td>
                            <td>$ 66.00</td> --}}
                            <td class="text-center">
                                <a href="{{ route('approves.show', ['approve' => $p->id]) }}"><i class="far fa-file"
                                        style="color: green;"></i></a>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('approves.edit', ['approve' => $p->id]) }}"><i class="far fa-edit"
                                        style="color: #F1C40F;"></i></a>
                            </td>
                            <td class="text-center">
                                <form class="formulario-eliminar"
                                    action="{{ route('approves.destroy', ['approve' => $p->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    @method('DELETE')

                                    <button style="border: none; background-color: transparent;" type="submit">
                                        <i class="fas fa-trash" style="color: #D31111 ;"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

@stop

@section('css')

@stop

@section('js')

@stop
