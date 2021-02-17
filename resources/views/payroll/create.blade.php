@extends('layouts.main')

@section('content')

    {{-- {{ $items }} --}}
    
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">{!! trans('messages.create') !!} {!! trans('messages.payrolls') !!}</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('payroll-cart.add') }}">
                {{ csrf_field() }}
        
                <div class="form-row">
        
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">{!! trans('messages.employee') !!}</label>
                        <select class="form-control @error('employee') is-invalid @enderror " name="employee"
                            id="exampleFormControlSelect1">
                            <option value="">-{!! trans('messages.choose') !!} {!! trans('messages.employee') !!}</option>
                            @foreach ($employs as $e)
                                <option value="{{ $e }}" {{ old('employee') == $e->id ? 'selected' : '' }}>
                                    {{ $e->name }} {{ $e->surname }} -{!! trans('messages.salary') !!} ${{ $e->salary }}
                                </option>
                            @endforeach
                        </select>
        
                        @error('employee')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
        
                    <div class="form-group col-md-1">
                        <label for="">{!! trans('messages.hours') !!}</label>
                        <input placeholder="#" name="hours" type="number" class="form-control @error('hours') is-invalid @enderror "
                            id="valor2" oninput="calcular()" value={{ old('hours') }}>
        
                        @error('hours')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
        
                    <div class="form-group col-md-1">
                        <label for="">Extra</label>
                        <input placeholder="#" value="0" name="extra" type="number"
                            class="form-control @error('extra') is-invalid @enderror " value={{ old('extraHours') }}>
        
                        @error('extra')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
        
                    <div class="form-group col-md-3">
                        <label for="">{!! trans('messages.from') !!}</label>
                        <input type="date" class="form-control" name="from">
                    </div>
        
                    <div class="form-group col-md-3">
                        <label for="">{!! trans('messages.to') !!}</label>
                        <input type="date" class="form-control" name="to">
                    </div>
        
        
                    {{-- <div class="form-group col-md-3">
                        <label for="">Amount</label>
                        <input placeholder="$" type="text" class="form-control" id="total" step="0.01">
                    </div> --}}
        
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
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="payrolls">
                            <thead>
                                <tr>
                                    {{-- <th scope="col">#</th>
                                    --}}
                                    <th scope="col">{!! trans('messages.name') !!}</th>
                                    <th scope="col">{!! trans('messages.surname') !!}</th>
                                    <th scope="col">{!! trans('messages.position') !!} {!! trans('messages.job') !!}</th>
                                    <th scope="col">{!! trans('messages.from') !!}</th>
                                    <th scope="col">{!! trans('messages.to') !!}</th>
                                    {{-- <th scope="col">Salary</th>
                                    --}}
                                    <th scope="col">{!! trans('messages.hours') !!}</th>
                                    <th scope="col">{!! trans('messages.payment') !!}</th>
                                    <th scope="col">{!! trans('messages.hours') !!} Extra</th>
                                    <th scope="col">Total de {!! trans('messages.hours') !!} Extra</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">{!! trans('messages.remove') !!}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $i)
                                    <tr>
                                        {{-- <th scope="row">{{ $i->id }}</th>
                                        --}}
                                        <td>{{ $i->name }}</td>
                                        <td>{{ $i->attributes->surname }}</td>
                                        <td>{{ $i->attributes->job }}</td>
                                        <td>{{ $i->attributes->from }}</td>
                                        <td>{{ $i->attributes->to }}</td>
                                        {{-- <td>${{ $i->price }}</td>
                                        --}}
                                        <td>{{ $i->quantity }}</td>
                                        <td>${{ $i->price * $i->quantity }}</td>
                                        <td>{{ $i->attributes->extraH }}</td>
                                        <td>${{ $i->attributes->extraT }}</td>
                                        <td>${{ $i->price * $i->quantity + $i->attributes->extraT }}</td>
                                        <td>
                                            <form class="formulario-eliminar" action="{{ route('payroll-cart.remove') }}"
                                                method="POST">
                                                {{ csrf_field() }}

                                                <input type="hidden" name="id" value="{{ $i->id }}">

                                                <button class="btn btn-outline-danger" type="submit">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- <tr>
                                    <td colspan="6"></td>
                                    <td><b>Total</b></td>
                                    <td><b>${{ Cart::getSubTotal() }}</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr> --}}
                            </tbody>
                            <tfoot>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row">
        <div class="p-2">
            <form class="formulario-vaciar" action="{{ route('payroll-cart.clear') }}" method="POST">
                {{ csrf_field() }}

                <button class="btn btn-warning" type="submit">
                    <i class="fas fa-trash"></i>{!! trans('messages.cart') !!}
                </button>
            </form>
        </div>
        <div class="p-2">
            <form method="POST" action="{{ route('payrolls.order') }}">
                {{ csrf_field() }}
                {{-- <input class="form-control" type="text" id="total">
                --}}
                <button id="process" type="submit" class="btn btn-success">
                    <i class="fas fa-clipboard-check"></i>{!! trans('messages.process') !!} {!! trans('messages.payroll') !!}
                </button>
            </form>
            {{-- <a id="process" class="btn btn-success" href="{{ route('payrolls.order') }}">
                <i class="fas fa-clipboard-check"></i> Process Payroll
            </a> --}}
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

    {{-- DataTables --}}
    <script>
        $(document).ready(function() {
            var tabla = $('#payrolls').DataTable({
                responsive: true,
                autoWidth: true,
                // dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                //         "<'row'<'col-sm-12'tr>>" +
                //         "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
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
                drawCallback: function() {
                    var api = this.api();
                    $(api.column(9).footer()).html(
                        "<b>$ </b>" + api.column(9, {
                            page: "current"
                        }).data().sum()
                    );
                    //     $(api.column(4).footer()).html(
                    //         "Total: " + api.column(4, {
                    //             page: "current"
                    //         }).data().sum()
                    //     );
                },
            });

            var total = tabla.column(11).data().sum();

            $("#process").click(function() {
                $.ajax({
                    url: '/payroll-order',
                    type: 'POST',
                    async: true,
                    data: total,
                });
            })

        });

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
