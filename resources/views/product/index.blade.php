@extends('layouts.main')

@section('content')

    <a href="{{ route('products.create') }}" class="btn btn-success shadow rounded">Product Management</a>

    <div class="card shadow my-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">{!! trans('messages.datatable') !!}</h6>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">Product's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Category Product's</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active mt-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive">
                        <table class="table" id="products">
                            <thead>
                                <tr>
                                    <th scope="col">Product's Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">U.M</th>
                                    <th scope="col">Minimum A.</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->um }}</td>
                                        <td>#{{ $product->minimum }}</td>
                                        <td>
                                            <a class="btn btn-outline-warning"
                                                href="{{ route('products.edit', ['product' => $product->id]) }}"><i
                                                    class="far fa-edit"></i></a>
                                        </td>
                                        <td>
                                            <form class="formulario-eliminar"
                                                action="{{ route('products.destroy', ['product' => $product->id]) }}"
                                                method="POST">
                                                {{ csrf_field() }}
                                                @method('DELETE')

                                                <button class="btn btn-outline-danger" type="submit">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade mt-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="table-responsive">
                        <table class="table" id="categories">
                            <thead>
                                <tr>
                                    <th scope="col-md-2">Categories Product</th>
                                    {{-- <th scope="col">View</th>
                                    --}}
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        {{-- <td class="text-center">
                                            <a href="{{ route('categories.show', ['category' => $category->id]) }}"><i
                                                    class="far fa-file" style="color: green;"></i></a>
                                        </td> --}}
                                        <td>
                                            <a class="btn btn-outline-warning"
                                                href="{{ route('categories.edit', ['category' => $category->id]) }}"><i
                                                    class="far fa-edit"></i></a>
                                        </td>
                                        <td>
                                            <form class="formulario-eliminar"
                                                action="{{ route('categories.destroy', ['category' => $category->id]) }}"
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
