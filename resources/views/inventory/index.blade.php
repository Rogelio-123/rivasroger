@extends('layouts.main')

@section('content')

    <a href="{{ route('stocks.index') }}" class="btn btn-success shadow rounded">{!! trans('messages.go') !!} a {!! trans('messages.stock') !!}</a>
    <hr>

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{!! trans('messages.datatable') !!}</h6>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">{!! trans('messages.output') !!} de {!! trans('messages.merchandise') !!}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">{!! trans('messages.input') !!} de {!! trans('messages.merchandise') !!}</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" id="stock-tab" data-toggle="tab" href="#stock" role="tab" aria-controls="stock"
                        aria-selected="false">Stock</a>
                </li> --}}
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active mt-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive">
                        <table class="table" id="inputs">
                            <thead>
                                <tr>
                                    <th scope="col">{!! trans('messages.product') !!}</th>
                                    <th scope="col">{!! trans('messages.quantity') !!}</th>
                                    <th scope="col">{!! trans('messages.date') !!}</th>
                                    {{-- <th scope="col">Edit</th>
                                    --}}
                                    <th scope="col">{!! trans('messages.delete') !!}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inputs as $input)
                                    <tr>
                                        <td>{{ $input->product->name }}</td>
                                        <td>{{ $input->quantity }}</td>
                                        <td>{{ $input->date }}</td>
                                        {{-- <td class="text-center">
                                            <a class="mr-3" href="{{ route('inputs.edit', ['input' => $input->id]) }}"><i
                                                    class="far fa-edit" style="color: #F1C40F"></i></a>
                                        </td> --}}
                                        <td class="text-center">
                                            <form class="formulario-eliminar"
                                                action="{{ route('inputs.destroy', ['input' => $input->id]) }}"
                                                method="POST">
                                                {{ csrf_field() }}
                                                @method('DELETE')

                                                <button type="submit" style="border: none; background-color: transparent;">
                                                    <i class="fas fa-trash" style="color: #D31111 ;">
                                                    </i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade mt-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="table-responsive">
                        <table class="table" id="outputs">
                            <thead>
                                <tr>
                                    <th scope="col">{!! trans('messages.product') !!}</th>
                                    <th scope="col">{!! trans('messages.quantity') !!}</th>
                                    <th scope="col">U.M</th>
                                    <th scope="col">{!! trans('messages.reason') !!}</th>
                                    <th scope="col">{!! trans('messages.date') !!}</th>
                                    <th scope="col">{!! trans('messages.delete') !!}</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- {{ $outputs }} --}}
                                @foreach ($outputs as $output)
                                    <tr>
                                        <td>{{ $output->product->name }}</td>
                                        <td>{{ $output->quantity }}</td>
                                        <td>{{ $output->um }}</td>
                                        <td>{{ $output->reason }}</td>
                                        <td>{{ $output->date }}</td>
                                        <td class="text-center">
                                            <form class="formulario-eliminar"
                                                action="{{ route('outputs.destroy', ['output' => $output->id]) }}"
                                                method="POST">
                                                {{ csrf_field() }}
                                                @method('DELETE')

                                                <button type="submit" style="border: none; background-color: transparent;">
                                                    <i class="fas fa-trash" style="color: #D31111 ;">
                                                    </i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tfoot>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade mt-3" id="stock" role="tabpanel" aria-labelledby="stock-tab">

                </div>
            </div>
        </div>
    </div>

@stop

@section('css')

@stop

@section('script')

    {{-- DataTables --}}
    <script>
        $(document).ready(function() {
            $('#inputs').DataTable({
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
                drawCallback: function() {
                    var api = this.api();
                    $(api.column(1).footer()).html(
                        "Total: " + api.column(1, {
                            page: "current"
                        }).data().sum()
                    );
                    // $(api.column(4).footer()).html(
                    //     "Total: " + api.column(4, {
                    //         page: "current"
                    //     }).data().sum()
                    // );
                },
            });
        });

    </script>

    <script>
        $(document).ready(function() {
            $('#outputs').DataTable({
                responsive: true,
                autoWidth: true,
                drawCallback: function() {
                    var api = this.api();
                    $(api.column(1).footer()).html(
                        "Total: " + api.column(1, {
                            page: "current"
                        }).data().sum()
                    );
                },
            });
        });

    </script>

    <script>
        $(document).ready(function() {
            $('#stocks').DataTable({
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

@stop
