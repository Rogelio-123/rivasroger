@extends('layouts.main')

@section('content')
    <div class="table-responsive">
        <table class="table" id="employees">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Job Position</th>
                    <th scope="col">Salary</th>
                </tr>
            </thead>
        </table>
    </div>
@stop

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#employees').DataTable({
                "serverSide": true,
                "ajax": 'api/employees',
                "columns": [
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'surname'},
                    {data: 'job'},
                    {data: 'salary'}
                ]
            });
        });

    </script>
@stop
