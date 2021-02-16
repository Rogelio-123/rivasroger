@extends('layouts.main')

@section('content')

    <!-- Begin Page Content -->
    {{-- <div class="container-fluid"> --}}

        <!-- Page Heading -->
        {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> --}}

        <a href="{{ route('services.create') }}" class="btn btn-success mb-3 shadow rounded">
            {!! trans('messages.new') !!}
        </a>

        {{-- <div class="row">
            <div class="col-md-3 my-2">
                <label for="">Date:</label>
                <input class="form-control" id="Date_search" type="text" placeholder="Search by Date" /><br>
            </div>
        </div> --}}

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">{!! trans('messages.services') !!}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{!! trans('messages.name') !!}</th>
                                <th scope="col">{!! trans('messages.created') !!}</th>
                                <th scope="col">{!! trans('messages.updated') !!}</th>
                                <th scope="col">{!! trans('messages.edit') !!}</th>
                                <th scope="col">{!! trans('messages.delete') !!}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $i)
                                <tr>
                                    <th scope="row">{{ $i->id }}</th>
                                    <td>{{ $i->name }}</td>
                                    <td>{{ $i->created_at }}</td>
                                    <td>{{ $i->updated_at }}</td>
                                    <td>
                                        <a class="btn btn-outline-warning" href="{{ route('services.edit', ['service' => $i->id]) }}">
                                            <i class="far fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form class="formulario-eliminar"
                                            action="{{ route('services.destroy', ['service' => $i->id]) }}" method="POST">
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

        {{--
    </div> --}}
    <!-- /.container-fluid -->

@stop

@section('scripts')

    {{-- DataTables --}}
    <script>
        minDateFilter = "";
        maxDateFilter = "";
        $.fn.dataTableExt.afnFiltering.push(
            function(oSettings, aData, iDataIndex) {
                if (typeof aData._date == 'undefined') {
                    aData._date = new Date(aData[0]).getTime();
                }

                if (minDateFilter && !isNaN(minDateFilter)) {
                    if (aData._date < minDateFilter) {
                        return false;
                    }
                }

                if (maxDateFilter && !isNaN(maxDateFilter)) {
                    if (aData._date > maxDateFilter) {
                        return false;
                    }
                }

                return true;
            }
        );

        $(document).ready(function() {
            $("#Date_search").val("");
        });

        var table = $('#dataTable').DataTable({
            deferRender: true,
            "autoWidth": false,
            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
            ],
            "search": {
                "regex": true,
                "caseInsensitive": false,
            },
        });


        $("#Date_search").daterangepicker({
            "locale": {
                "format": "YYYY-MM-DD",
                "separator": " to ",
                "applyLabel": "Apply",
                "cancelLabel": "Cancel",
                "fromLabel": "From",
                "toLabel": "To",
                "customRangeLabel": "Custom",
                "weekLabel": "W",
                "daysOfWeek": [
                    "Su",
                    "Mo",
                    "Tu",
                    "We",
                    "Th",
                    "Fr",
                    "Sa"
                ],
                "monthNames": [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "September",
                    "October",
                    "November",
                    "December"
                ],
                "firstDay": 1
            },
            "opens": "center",
        }, function(start, end, label) {
            maxDateFilter = end;
            minDateFilter = start;
            table.draw();
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

    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

    </script>

    {{-- Notificación de actualización --}}
    @if (session('update') == 'ok')
        <script>
           Toast.fire({
            icon: 'success',
            title: 'Updated successfully'
        })

        </script>

    @endif

    {{-- Notificación store --}}
    @if (session('store') == 'ok')
        <script>
           Toast.fire({
            icon: 'success',
            title: 'Created successfully'
        })

        </script>

    @endif

@endsection

