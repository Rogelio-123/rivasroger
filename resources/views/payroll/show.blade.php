@extends('layouts.main')

@section('content')
    
    {{-- {{ $details }} --}}
    
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Show Payrolls</h6>
        </div>
        <div class="card-body">
            
                <table class="table table-responsive" id="details">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Job Position</th>
                            <th scope="col">From</th>
                            <th scope="col">To</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Hours</th>
                            <th scope="col">Payment</th>
                            <th scope="col">Extra H.</th>
                            <th scope="col">T. Extra</th>
                            <th scope="col">Total</th>
                            <th scope="col">Payroll Code</th>
                            <th scope="col">Date</th>
                            <th scope="col">Print</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{$details}} --}}
                        @foreach ($details as $i)
                            <tr>
                                <th scope="row">{{ $i->id }}</th>
                                <td>{{ $i->name }}</td>
                                <td>{{ $i->surname }}</td>
                                <td>#{{ $i->job }}</td>
                                <td>{{ $i->from }}</td>
                                <td>{{ $i->to }}</td>
                                <td>${{ $i->salary }}</td>
                                <td>#{{ $i->hours }}</td>
                                <td>${{ $i->payment }}</td>
                                <td>#{{ $i->extraH }}</td>
                                <td>${{ $i->extraT }}</td>
                                <td>${{ $i->totalP }}</td>
                                <td>{{ $i->payrollCode }}</td>                                
                                <td>{{ $i->created_at }}</td>
                                <td>
                                    <a class="btn btn-outline-success" href="{{ route('payrolls.print', ['payroll' => $i->id]) }}"><i
                                            class="far fa-file"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        {{-- <tr>
                            <td colspan="7"></td>
                            <td><b>Total</b></td>
                            <td><b>${{ $i->total }}</b></td>
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tfoot>
                </table>
                <a class="btn btn-primary my-3" href="{{ route('payrolls.index') }}">Back</a>
        </div>
    </div>


    

@stop

@section('css')

@stop

@section('scripts')

     {{-- DataTables --}}
     <script>
        $(document).ready(function() {
            $('#details').DataTable({
                responsive: true,
                autoWidth: true,
                dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5',
                ],
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
                    $(api.column(8).footer()).html(
                        "$ " + api.column(8, {
                            page: "current"
                        }).data().sum()
                    );
                    $(api.column(10).footer()).html(
                        "$ " + api.column(10, {
                            page: "current"
                        }).data().sum()
                    );
                    $(api.column(11).footer()).html(
                        "$ " + api.column(11, {
                            page: "current"
                        }).data().sum()
                    );
                },
            });
        });

    </script>
@stop
