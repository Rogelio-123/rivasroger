@extends('layouts.main')

@section('content')
    
    <a href="{{ route('expenses.create') }}" class="btn btn-success shadow rounded mb-3">{!! trans('messages.create') !!} {!! trans('messages.expenses') !!}</a>
    
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">{!! trans('messages.expenses') !!}</h6>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">{!! trans('messages.approve') !!}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">{!! trans('messages.pending') !!} - <?php echo count($expensesPending) ?></a>
                </li>
            </ul>
        
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active my-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive">
                        <table class="table" id="expenses">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{!! trans('messages.code') !!}</th>
                                    <th scope="col">{!! trans('messages.date') !!}</th>
                                    <th scope="col">{!! trans('messages.user') !!}</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">{!! trans('messages.view') !!}</th>
                                    <th scope="col">{!! trans('messages.delete') !!}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expensesApprove as $e)
                                    <tr>
                                        <td>{{ $e->id }}</td>
                                        <td>{{ $e->code }}</td>
                                        <td>{{ $e->created_at }}</td>
                                        <td>{{ $e->user->name }}</td>
                                        <td>${{ $e->total }}</td>
                                        <td>
                                            <a class="btn btn-outline-success" href=" {{ route('expenses.show', ['expense' => $e->id]) }}">
                                                <i class="far fa-file"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form class="formulario-eliminar" action="{{ route('expenses.destroy', ['expense' => $e->id]) }}"
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
                <div class="tab-pane fade my-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="table-responsive">
                        <table class="table" id="pendings">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Approve</th>
                                    <th scope="col">View</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expensesPending as $e)
                                    <tr>
                                        <td>{{ $e->id }}</td>
                                        <td>{{ $e->code }}</td>
                                        <td>{{ $e->created_at }}</td>
                                        <td>{{ $e->user->name }}</td>
                                        <td>${{ $e->total }}</td>
                                        <td>
                                            <a class="btn btn-outline-primary" href="{{route('expenses.approve', ['approve' => $e->id])}}">
                                                <i class="far fa-check-circle"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-success" href=" {{ route('expenses.show', ['expense' => $e->id]) }}">
                                                <i class="far fa-file"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form class="formulario-eliminar" action="{{ route('expenses.destroy', ['expense' => $e->id]) }}"
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

    {{-- Notificación de aprovación --}}
    @if (session('approve') == 'ok')
    <script>
        Swal.fire(
            'Approve!',
            'The purchase has been approved successfully.',
            'success'
        )

    </script>

    @endif

    {{-- Notificación de gasto mayor a 500 --}}
    @if (session('expense') == 'not ok')
    <script>
        Swal.fire(
            'Warning!',
            'The expense is greater than $500, it will be approved by the manager.',
            'warning'
        )

    </script>

    @endif

    {{-- DataTables --}}
    <script>
        $(document).ready(function() {
            $('#expenses').DataTable({
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

    {{-- DataTables --}}
    <script>
        $(document).ready(function() {
            $('#pendings').DataTable({
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

@stop
