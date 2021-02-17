@extends('layouts.main')

@section('content')
    
    {{-- {{ $items }} --}}
    
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">{!! trans('messages.create') !!} {!! trans('messages.expenses') !!}</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('expense-cart.add') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
        
                <div class="product_inputs_div">
                    <div class="form-row">
        
                        <div class="form-group col-md-3">
                            <label for="exampleFormControlSelect1">{!! trans('messages.providers') !!}</label>
                            <select class="form-control @error('provider') is-invalid @enderror " name="provider"
                                id="exampleFormControlSelect1">
                                <option value="">-{!! trans('messages.choose') !!} {!! trans('messages.provider') !!}</option>
                                @foreach ($providers as $p)
                                    <option value="{{ $p->name }}" {{ old('provider') == $p->name ? 'selected' : '' }}>
                                        {{ $p->name }}
                                    </option>
                                @endforeach
                            </select>
        
                            @error('provider')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="form-group col-md-3">
                            <label for="exampleFormControlSelect1">{!! trans('messages.name') !!} de {!! trans('messages.service') !!}</label>
                            <select class="form-control @error('service') is-invalid @enderror " name="service"
                                id="exampleFormControlSelect1">
                                <option value="">-{!! trans('messages.choose') !!} {!! trans('messages.service') !!}</option>
                                @foreach ($services as $s)
                                    <option value="{{ $s->id }}" {{ old('product') == $s->id ? 'selected' : '' }}>
                                        {{ $s->name }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- <input class="form-control @error('provider') is-invalid @enderror"
                                name="service" type="text" placeholder="Service"> --}}
        
                            @error('service')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="form-group col-md-3">
                            <label for="exampleFormControlSelect1">{!! trans('messages.ticketNumber') !!}</label>
                            <input class="form-control @error('provider') is-invalid @enderror" name="ticket" type="text"
                                placeholder="#">
        
                            @error('service')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="form-group col-md-3">
                            <label for="exampleFormControlFile1">{!! trans('messages.file') !!} de {!! trans('messages.input') !!}</label>
                            <input type="file" name="archive" class="form-control-file" id="exampleFormControlFile1">
                        </div>
        
                        {{-- <div class="form-group col-md-4">
                            <label for="">U.M</label>
                            <select class="form-control @error('um') is-invalid @enderror " name="um"
                                id="exampleFormControlSelect1">
                                <option value="">- Choose</option>
                                <option {{ old('um') == 'Ounces' ? 'selected' : '' }}>Ounces</option>
                                <option {{ old('um') == 'Pounds' ? 'selected' : '' }}>Pounds</option>
                                <option {{ old('um') == 'Tons' ? 'selected' : '' }}>Tons</option>
                            </select>
        
                            @error('um')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> --}}
                    </div>
        
                    <div class="form-row">
        
                        <div class="form-group col-md-3">
                            <label for="">{!! trans('messages.price') !!}</label>
                            <input placeholder="$" name="price" type="text"
                                class="form-control @error('price') is-invalid @enderror " id="valor1" step="0.001"
                                oninput="calcular()" value={{ old('price') }}>
        
                            @error('price')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="form-group col-md-2">
                            <label for="">{!! trans('messages.quantity') !!}</label>
                            <input placeholder="#" name="quantity" type="number"
                                class="form-control @error('quantity') is-invalid @enderror " id="valor2" oninput="calcular()"
                                value={{ old('quantity') }}>
        
                            @error('quantity')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="form-group col-md-2">
                            <label for="">{!! trans('messages.amount') !!}</label>
                            <input placeholder="$" type="text" class="form-control" id="total" step="0.01">
                        </div>
        
                        <div class="form-group col-md-2">
                            <label for="">{!! trans('messages.tax') !!}</label>
                            <select class="form-control @error('tax') is-invalid @enderror " name="tax" id="valor3">
                                <option value="">-{!! trans('messages.choose') !!}</option>
                                <option value=".16" {{ old('tax') == '.16' ? 'selected' : '' }}>.16</option>
                                <option value=".08" {{ old('tax') == '.08' ? 'selected' : '' }}>.08</option>
                                <option value=".05" {{ old('tax') == '.05' ? 'selected' : '' }}>.05</option>
                            </select>
        
                            @error('tax')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="form-group col-md-3">
                            <label for="">{!! trans('messages.wayToPay') !!}</label>
                            <select class="form-control @error('pay') is-invalid @enderror " name="pay"
                                id="exampleFormControlSelect1">
                                <option value="">-{!! trans('messages.choose') !!} {!! trans('messages.pay') !!}</option>
                                <option {{ old('pay') == 'Debit' ? 'selected' : '' }}>{!! trans('messages.debit') !!}</option>
                                <option {{ old('pay') == 'Cash' ? 'selected' : '' }}>{!! trans('messages.cash') !!}</option>
                                <option {{ old('pay') == 'Credit Card' ? 'selected' : '' }}>{!! trans('messages.credit') !!}</option>
                                <option {{ old('pay') == 'Bank Transfer' ? 'selected' : '' }}>{!! trans('messages.transfer') !!}</option>
                            </select>
        
                            @error('um')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                    </div>
        
                </div>
        
                {{--
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="">Payment Amount</label>
                        <input placeholder="$" type="text" name="payment" class="form-control" id="">
                    </div>
                </div>
                --}}
        
                <button type="submit" class="btn btn-success shadow rounded">
                    <i class="fas fa-cart-plus"></i>{!! trans('messages.add') !!}
                </button>
        
                <a class="btn btn-primary shadow rounded" href="{{ route('expenses.index') }}">
                    <i class="fas fa-angle-left"></i>{!! trans('messages.back') !!}
                </a>
            </form>
        </div>
    </div>

    
    {{--
    <button class="btn btn-success add_more_courses shadow rounded my-3"><i class="fas fa-cart-plus"></i>
        Add Product</button>
    --}}

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">{!! trans('messages.archive') !!}</th>
                            <th scope="col">#</th>
                            <th scope="col">{!! trans('messages.provider') !!}</th>
                            <th scope="col">{!! trans('messages.service') !!}</th>
                            <th scope="col">{!! trans('messages.price') !!}</th>
                            <th scope="col">{!! trans('messages.quantity') !!}</th>
                            <th scope="col">{!! trans('messages.amount') !!}</th>
                            <th scope="col">{!! trans('messages.tax') !!}</th>
                            <th scope="col">%</th>
                            <th scope="col">Total</th>
                            <th scope="col">{!! trans('messages.pay') !!}</th>
                            <th scope="col">{!! trans('messages.remove') !!}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $i)
                            <tr>
                                <td>{{ $i->attributes->archive }}</td>
                                <th scope="row">{{ $i->id }}</th>
                                <td>{{ $i->attributes->provider }}</td>
                                <td>{{ $i->name }}</td>
                                <td>#{{ $i->attributes->priceSinTax }}</td>
                                <td>#{{ $i->quantity }}</td>
                                <td>${{ $i->attributes->amount }}</td>
                                <td>{{ $i->attributes->tax }}</td>
                                <td>{{ $i->attributes->taxTotal }}</td>                                
                                <td>${{ $i->price * $i->quantity }}</td>
                                <td>{{ $i->attributes->pay }}</td>    
                                <td>
                                    <form class="formulario-eliminar" action="{{ route('expense-cart.remove') }}" method="POST">
                                        {{ csrf_field() }}

                                        <input type="hidden" name="id" value="{{ $i->id }}">

                                        <button class="btn btn-outline-danger" type="submit">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="8"></td>
                            <td><b>SubTotal</b></td>
                            <td></td>
                            <td></td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row">
        <div class="p-2">
            <form class="formulario-vaciar" action="{{ route('expense-cart.clear') }}" method="POST">
                {{ csrf_field() }}

                <button class="btn btn-warning" type="submit">
                    <i class="fas fa-trash"></i>{!! trans('messages.cart') !!}
                </button>
            </form>
        </div>
        <div class="p-2">
            <a href="{{ route('expenses.order') }}" class="btn btn-success">
                <i class="fas fa-clipboard-check"></i>{!! trans('messages.process') !!} {!! trans('messages.expenses') !!}
            </a>
        </div>
    </div>

    {{-- <form class="formulario-vaciar" action="{{ route('cart.subtotal') }}" method="POST">
        {{ csrf_field() }}

        <button class="btn btn-success my-2" type="submit">
            Subtotal
        </button>
    </form> --}}

    {{-- {{ $items }} --}}

@stop

@section('scripts')

    <script>
        function calcular() {
            try {
                var a = parseFloat(document.getElementById("valor1").value) || 0,
                    b = parseFloat(document.getElementById("valor2").value) || 0;
                Math.round(document.getElementById("total").value = a * b).toFixed(2);
            } catch (error) {

            }
        }

    </script>

    {{-- Notificación add --}}
    @if (session('add') == 'ok')
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your service has been added uccessfully!',
                // width: 300,
                showConfirmButton: false,
                timer: 1500
            })

        </script>

    @endif

    {{-- Confirmación para eliminar --}}
    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })

        });

    </script>

    {{-- Notificación de eliminación --}}
    @if (session('destroy') == 'ok')
        <script>
            Swal.fire(
                'Deleted!',
                'Your purchease has been deleted.',
                'success'
            )

        </script>

    @endif

    {{-- Notificación de carrito limpio --}}
    @if (session('clear') == 'ok')
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your list has been clear successfully!',
                // width: 300,
                showConfirmButton: false,
                timer: 1500
            })

        </script>

    @endif

@stop
