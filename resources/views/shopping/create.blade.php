@extends('layouts.main')

@section('content')
    
    {{-- {{ $items }} --}}
   
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">{!! trans('messages.create') !!} {!! trans('messages.purchase') !!}</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('cart.add') }}" enctype="multipart/form-data">
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
                            <label for="exampleFormControlSelect1">{!! trans('messages.bank') !!}</label>
                            <select class="form-control @error('bank') is-invalid @enderror " name="bank"
                                id="exampleFormControlSelect1">
                                <option value="">-{!! trans('messages.choose') !!} {!! trans('messages.provider') !!}</option>
                                @foreach ($banks as $p)
                                    <option value="{{ $p->id }}" {{ old('bank') == $p->id ? 'selected' : '' }}>
                                        {{ $p->alias }}
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
                            <label for="exampleFormControlSelect1">{!! trans('messages.name') !!}</label>
                            <select class="form-control @error('product') is-invalid @enderror " name="product"
                                id="exampleFormControlSelect1">
                                <option value="">-{!! trans('messages.choose') !!} {!! trans('messages.product') !!}</option>
                                @foreach ($products as $p)
                                    <option value="{{ $p->id }}" {{ old('product') == $p->id ? 'selected' : '' }}>
                                        {{ $p->name }}
                                    </option>
                                @endforeach
                            </select>
        
                            @error('product')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="form-group col-md-3">
                            <label for="">U.M</label>
                            <select class="form-control @error('um') is-invalid @enderror " name="um"
                                id="exampleFormControlSelect1">
                                <option value="">-{!! trans('messages.choose') !!} U.M</option>
                                <option {{ old('um') == 'Ounces' ? 'selected' : '' }}>{!! trans('messages.ounces') !!}</option>
                                <option {{ old('um') == 'Pounds' ? 'selected' : '' }}>{!! trans('messages.pounds') !!}</option>
                                <option {{ old('um') == 'Tons' ? 'selected' : '' }}>{!! trans('messages.tons') !!}</option>
                            </select>
        
                            @error('um')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="form-group col-md-3">
                            <label for="">{!! trans('messages.pay') !!}</label>
                            <select class="form-control @error('pay') is-invalid @enderror " name="pay"
                                id="exampleFormControlSelect1">
                                <option value="">-{!! trans('messages.choose') !!} {!! trans('messages.payment') !!}</option>
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
        
                    <div class="form-row">
        
                        <div class="form-group col-md-2">
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
        
                        <div class="form-group col-md-4">
                            <label for="exampleFormControlFile1">{!! trans('messages.output') !!} {!! trans('messages.file') !!}</label>
                            <input type="file" name="archive" class="form-control-file" id="exampleFormControlFile1">
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
            
                    <a class="btn btn-primary shadow rounded" href="{{ route('shoppings.index') }}">
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
                            <th scope="col">#</th>
                            <th scope="col">{!! trans('messages.provider') !!}</th>
                            <th scope="col">{!! trans('messages.product') !!}</th>
                            <th scope="col">{!! trans('messages.price') !!}</th>
                            <th scope="col">{!! trans('messages.quantity') !!}</th>
                            <th scope="col">U.M</th>
                            <th scope="col">{!! trans('messages.amount') !!}</th>
                            <th scope="col">{!! trans('messages.tax') !!}</th>
                            <th scope="col">%</th>
                            <th scope="col">Total</th>
                            <th scope="col">{!! trans('messages.wayToPay') !!}</th>
                            <th scope="col">{!! trans('messages.remove') !!}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $i)
                            <tr>
                                <th scope="row">{{ $i->id }}</th>
                                <td>{{ $i->attributes->provider }}</td>
                                <td>{{ $i->name }}</td>
                                <td>${{ $i->attributes->priceSinTax }}</td>
                                <td>#{{ $i->quantity }}</td>
                                <td>{{ $i->attributes->um }}</td>
                                <td>${{ $i->attributes->priceSinTax * $i->quantity }}</td>
                                <td>{{ $i->attributes->tax }}</td>
                                <td>${{ ($i->price * $i->quantity) - ($i->attributes->priceSinTax * $i->quantity) }}</td>
                                <td>${{ $i->price * $i->quantity }}</td>
                                <td>{{ $i->attributes->pay }}</td>
                                <td>
                                    <form class="formulario-eliminar" action="{{ route('cart.remove') }}" method="POST">
                                        {{ csrf_field() }}
    
                                        <input type="hidden" name="id" value="{{ $i->id }}">
    
                                        <button type="submit" class="btn btn-outline-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="8"></td>
                            <td><b>SubTotal</b></td>
                            <td><b>${{ Cart::getSubTotal() }}</b></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row">
        <div class="p-2">
            <form class="formulario-vaciar" action="{{ route('cart.clear') }}" method="POST">
                {{ csrf_field() }}
        
                <button class="btn btn-warning" type="submit">
                    <i class="fas fa-trash"></i>{!! trans('messages.cart') !!}</button>
            </form>
        </div>
        <div class="p-2">
            <a href="{{ route('shoppings.order') }}" class="btn btn-success">
                <i class="fas fa-clipboard-check"></i>{!! trans('messages.process') !!} {!! trans('messages.orders') !!}
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

    <script>
        $(document).ready(function() {

            $(this).on("click", ".add_more_courses", function() {

                var html =
                    `
                                                                                        <div class="form-row">
                                                                                            <div class="form-group col-md-3">                               
                                                                                                <select class="form-control" name="pName[]" id="exampleFormControlSelect1">
                                                                                                     <option value="">- Choose Product</option>
                                                                                                        @foreach ($products as $p)
                                                                                                            <option value="{{ $p->name }}">{{ $p->name }}</option>
                                                                                                        @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group col-md-3">                                                                   
                                                                                                <input placeholder="$ Price" type="text"name="price[]" class="form-control" id="valor1">
                                                                                            </div>
                                                                                            <div class="form-group col-md-3">                                                                   
                                                                                                <input placeholder="# Quantity" name="quantity[]" type="text" class="form-control" id="valor2">
                                                                                            </div>
                                                                                        `;

                html +=
                    `
                                                                                            <a class="text-danger remove_product" href="#">Remove</a>
                                                                                        </div>`

                $(".product_inputs_div").append(html);

            });

            $(this).on("click", ".remove_product", function() {

                var tarjet_imput = $(this).parent();
                tarjet_imput.remove();
            });

        });

    </script>

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
    @if (session('delete') == 'ok')
        <script>
            Swal.fire(
                'Deleted!',
                'Your purchease has been deleted.',
                'success'
            )

        </script>

    @endif

    {{-- Notificación de agregado al carrito --}}
    @if (session('shop') == 'ok')
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your product has been added to cart successfully!',
                // width: 300,
                showConfirmButton: false,
                timer: 1500
            })

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

    {{-- DataTables --}}
    <script>
        $(document).ready(function() {
            $('#shops').DataTable({
                responsive: true,
                autoWidth: true,
                // dom: 'Bfrtip',
                // buttons: [
                //     'copyHtml5',
                //     'excelHtml5',
                //     'csvHtml5',
                //     'pdfHtml5',
                // ],
                // "language": {
                //     "lengthMenu": "Mostrar _MENU_ registros por página",
                //     "zeroRecords": "Nothing found - sorry",
                //     "info": "Mostrando la página _PAGE_ de _PAGES_",
                //     "infoEmpty": "No records available",
                //     "infoFiltered": "(filtrado de _MAX_ registros totales)",
                //     "search": "Buscar:",
                //     "paginate": {
                //         "next": "Siguiente",
                //         "previous": "Anterior"
                //     }
                // },
                // drawCallback: function() {
                //     var api = this.api();
                //     $(api.column(3).footer()).html(
                //         "Total: " + api.column(3, {
                //             page: "current"
                //         }).data().sum()
                //     );
                //     $(api.column(4).footer()).html(
                //         "Total: " + api.column(4, {
                //             page: "current"
                //         }).data().sum()
                //     );
                // },
            });
        });

    </script>
@stop
