@extends('layouts.main')

@section('content')
    <div class="table-responsive">
        <table class="table" id="sales">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Folio</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Sucursal</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Forma Pago</th>
                    <th scope="col">Total</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
@stop

@section('scripts')

<script>
    $(document).ready(function() {
        $('#sales').DataTable({
            "serverSide": true,
            "ajax": 'api/sales',
            "columns": [
                {data: 'id'},
                {data: 'folio'},
                {data: 'fecha_alta'},
                {data: 'sucursal'},
                {data: 'cliente'},
                {data: 'forma_pago'},
                {data: 'total'},
                {data: 'estado'}
            ]
        });
    });

</script>

@stop
