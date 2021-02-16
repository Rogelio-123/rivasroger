@extends('layouts.main')

@section('content')

    <a class="btn btn-success shadow mb-3" href="{{ route('roles.create') }}">Crear Rol</a>

    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-dark">Listado de Roles</h6>
        </div>
        <div class="card-body">
            <table class="table" id="roles">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Permits</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $i)
                        <tr>
                            <th scope="row">{{ $i->id }}</th>
                            <td>{{ $i->name }}</td>
                            <td>{{ implode(', ', $i->permissions->pluck('name')->toArray()) }}</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h fa-2x"></i>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item"
                                            href="{{ route('roles.show', ['role' => $i->id]) }}">Show</a>
                                        <a class="dropdown-item"
                                            href="{{ route('roles.edit', ['role' => $i->id]) }}">Edit</a>
                                        <form class="formulario-eliminar"
                                            action="{{ route('roles.destroy', ['role' => $i->id]) }}" method="POST">
                                            {{ csrf_field() }}
                                            @method('DELETE')

                                            <button class=" dropdown-item " type="submit">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('scripts')

    <script>
        $(document).ready(function() {
            $('#roles').DataTable({
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

@endsection
