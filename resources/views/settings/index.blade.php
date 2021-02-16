@extends('layouts.main')

@section('content')
    
    <a class="btn btn-success shadow rounded mb-3" href="{{ route('settings.create') }}">Manage</a>
    
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Manage Settings</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="settings">
                    <thead>
                        <tr>
                            <th scope="col">Branch</th>
                            <th scope="col">Manager</th>
                            <th scope="col">Adress</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Details</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sets as $s)
                            <tr>
                                <th>{{ $s->branch }}</th>
                                <td>{{ $s->manager }}</td>
                                <td>{{ $s->adress }}</td>
                                <td>{{ $s->phone }}</td>
                                <td>
                                    <a class="btn btn-outline-success" href="{{ route('settings.show', ['setting' => $s->id]) }}">
                                        <i class="far fa-file"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-outline-warning" href="{{ route('settings.edit', ['setting' => $s->id]) }}">
                                        <i class="far fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form class="formulario-eliminar"
                                        action="{{ route('settings.destroy', ['setting' => $s->id]) }}" method="POST">
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
    
    
@stop

@section('scripts')

    {{-- DataTables --}}
    <script>
        $(document).ready(function() {
            $('#settings').DataTable({
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
