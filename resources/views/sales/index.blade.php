@extends('layouts.main')

@section('content')


    @can('create_sales')
        <a href="{{ route('sales.create') }}" class="btn btn-success shadow rounded mb-3">
            {!! trans('messages.salesManagement') !!}
        </a>
    @endcan

    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-dark">Ventas del Mes / Clientes</h6>
        </div>
        <div class="card-body">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">{!! trans('messages.sales') !!}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">{!! trans('messages.costumers') !!}</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active mt-3" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <div class="table-responsive">
                        <table class="table" id="sales">
                            {{-- <table class="table" id="sales">
                                --}}
                                <thead>
                                    <tr>
                                        <th scope="col">{!! trans('messages.date') !!}</th>
                                        <th scope="col">{!! trans('messages.invoice') !!}</th>
                                        <th scope="col">{!! trans('messages.pay') !!}</th>
                                        <th scope="col">{!! trans('messages.state') !!}</th>
                                        <th scope="col">{!! trans('messages.total') !!}</th>
                                        {{-- <th scope="col">View</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sales as $sale)
                                        <tr>
                                            <td>{{ $sale->fecha_alta }}</td>
                                            <td>{{ $sale->folio }}</td>
                                            <td>{{ $sale->forma_pago }}</td>
                                            <td>{{ $sale->estado }}</td>
                                            <td>{{ $sale->total }}</td>

                                            {{-- <td>
                                                <a class="btn btn-outline-success"
                                                    href=" {{ route('sales.show', ['sale' => $sale->id]) }}">
                                                    <i class="far fa-file"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-warning"
                                                    href="{{ route('sales.edit', ['sale' => $sale->id]) }}">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <form class="formulario-eliminar"
                                                    action="{{ route('sales.destroy', ['sale' => $sale->id]) }}"
                                                    method="POST">
                                                    {{ csrf_field() }}
                                                    @method('DELETE')

                                                    <button class="btn btn-outline-danger" type="submit">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                    </button>
                                                </form>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                    </div>

                </div>




                <div class="tab-pane fade mt-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="table-responsive">
                        <table class="table" id="costumers">
                            <thead>
                                <tr>
                                    <th scope="col-md-2">{!! trans('messages.name') !!}</th>
                                    <th scope="col">{!! trans('messages.details') !!}</th>
                                    <th scope="col">{!! trans('messages.edit') !!}</th>
                                    <th scope="col">{!! trans('messages.delete') !!}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($costumers as $costumer)
                                    <tr>
                                        <td>{{ $costumer->name }}</td>
                                        <td>
                                            <a class="btn btn-outline-success"
                                                href="{{ route('costumers.show', ['costumer' => $costumer->id]) }}"><i
                                                    class="far fa-file"></i></a>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-warning"
                                                href="{{ route('costumers.edit', ['costumer' => $costumer->id]) }}"><i
                                                    class="far fa-edit"></i></a>
                                        </td>
                                        <td>
                                            <form class="formulario-eliminar"
                                                action="{{ route('costumers.destroy', ['costumer' => $costumer->id]) }}"
                                                method="POST">
                                                {{ csrf_field() }}
                                                @method('DELETE')

                                                <button class="btn btn-outline-danger" type="submit">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@stop

@section('scripts')

    {{-- DataTables --}}
    <script>
        $(document).ready(function() {
            $('#sales').DataTable({
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
                'Your file has been deleted.',
                'success'
            )

        </script>

    @endif

    {{-- Notificación de actualización --}}
    @if (session('update') == 'ok')
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your register has been updated!',
                // width: 300,
                showConfirmButton: false,
                timer: 1500
            })

        </script>

    @endif

    {{-- DataTables --}}
    <script>
        $(document).ready(function() {
            $('#costumers').DataTable({
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
