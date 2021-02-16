@extends('layouts.main')

@section('content')
    
    <a href="{{ route('shoppings.create') }}" class="btn btn-success shadow rounded mb-3">
        <i class="fas fa-folder-plus"></i> Create Purchase
    </a>
    {{-- {{ $shops[0]->id }} --}}
    
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Purchases</h6>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">Approve</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                    aria-selected="false">Pending Orders - <?php echo count($ordersPending) ?></a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active my-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive">
                        <table class="table" id="shops">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">View</th>
                                    <th scope="col">Delete</th>
            
                                </tr>
                            </thead>
                            <tbody>
            
                                @foreach ($ordersApprove as $o)
                                    <tr>
                                        <td>{{ $o->id }}</td>
                                        <td>{{ $o->user->name }}</td>
                                        <td>{{ $o->code }}</td>
                                        <td>{{ $o->total }}</td>
                                        <td>
                                            <a class="btn btn-outline-success" href="{{ route('orders.show', ['order' => $o->id]) }}"><i class="far fa-file"></i></a>
                                        </td>
                                        {{-- <td class="text-center">
                                            <a href="{{ route('shoppings.edit', ['shopping' => $s->id]) }}"><i class="far fa-edit"
                                                    style="color: #F1C40F;"></i></a>
                                        </td> --}}
                                        <td>
                                            <form class="formulario-eliminar"
                                                action="{{ route('orders.destroy', ['order' => $o->id]) }}" method="POST">
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
                                    <th scope="col">Total</th>
                                    <th scope="col">Approve</th>
                                    <th scope="col">View</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
            
                                @foreach ($ordersPending as $p)
                                        <tr>
                                            <td>{{ $p->id }}</td>
                                            <td>{{ $p->code }}</td>
                                            <td>{{ $p->total }}</td>
                                            <td>
                                                <a class="btn btn-outline-primary" href="{{route('orders.approve', ['id' => $p->id])}}">
                                                    <i class="far fa-check-circle"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-success" href="{{ route('orders.show', ['order' => $p->id]) }}">
                                                    <i class="far fa-file"></i>
                                                </a>
                                                {{-- style="color: green;" --}}
                                            </td>
                                            {{-- <td class="text-center">
                                                <a href="{{ route('shoppings.edit', ['shopping' => $s->id]) }}"><i class="far fa-edit"
                                                        style="color: #F1C40F;"></i></a>
                                            </td> --}}
                                            <td>
                                                <form class="formulario-eliminar"
                                                    action="{{ route('orders.destroy', ['order' => $p->id]) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    @method('DELETE')
            
                                                    {{-- style="border: none; background-color: transparent;"
                                                    style="color: #D31111 ;" --}}
                                                    <button class="btn btn-outline-danger"  type="submit">
                                                        <i class="fas fa-trash" ></i>
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

     {{-- DataTables Sales --}}
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

         {{-- DataTables Sales --}}
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

    {{-- Notificación de compra mayor a 500 --}}
    @if (session('shop') == 'not ok')
        <script>
            Swal.fire(
                'Warning!',
                'The purchase is greater than $500, it will be approved by the manager.',
                'warning'
            )

        </script>

    @endif

    {{-- Notificación pedido --}}
    @if (session('shop') == 'ok')
        <script>
            Swal.fire(
                'Success!',
                'The purchase is approve successfully.',
                'success'
            )

        </script>

    @endif

    {{-- Notificación de aprovación --}}
    @if (session('approve') == 'ok')
        <script>
            Swal.fire(
                'Approve!',
                'The expense has been approved successfully.',
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
