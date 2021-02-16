@extends('layouts.main')

@section('content')

    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-dark">Crear Venta ó Cliente</h6>
        </div>
        <div class="card-body">
            {{-- Pestañas --}}
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">{!! trans('messages.sales') !!}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">{!! trans('messages.costumers') !!}</a>
                </li>
            </ul>

            {{-- Contenido 1er Pestaña --}}
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form method="POST" action="{{ route('sales.store') }}" role="form">
                        {{ csrf_field() }}

                        <div class="form-row mt-3">
                            <div class="form-group col-md-4">
                                <label for="costumer_name">{!! trans('messages.name') !!}</label>
                                <select class="form-control" name="costumerName" id="costumer_name">
                                    <option value="">- {!! trans('messages.choose') !!}</option>
                                    @foreach ($costumers as $costumer)
                                        <option value="{{ $costumer->id }}">{{ $costumer->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="way_to_pay">{!! trans('messages.pay') !!}</label>
                                <select class="form-control" name="wayToPay" id="way_to_pay">
                                    <option value="">- {!! trans('messages.choose') !!}</option>
                                    <option>{!! trans('messages.cash') !!}</option>
                                    <option>{!! trans('messages.credit') !!}</option>
                                    <option>{!! trans('messages.debit') !!}</option>
                                    <option>{!! trans('messages.transfer') !!}</option>
                                    <option>{!! trans('messages.deposit') !!}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="date">{!! trans('messages.date') !!}</label>
                                <input type="date" class="form-control" name="date" id="date">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="service">{!! trans('messages.services') !!}</label>
                                <input type="text" class="form-control" name="service" id="service">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="description">{!! trans('messages.description') !!}</label>
                                <input type="text" class="form-control" name="description" id="description">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="price">{!! trans('messages.price') !!}</label>
                                <input placeholder="$" type="text" class="form-control" name="price" id="price">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="quantity">{!! trans('messages.quantity') !!}</label>
                                <input placeholder="#" type="text" class="form-control" name="quantity" id="quantity">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="tax">{!! trans('messages.tax') !!}</label>
                                <select class="form-control" name="tax" id="tax">
                                    <option value=".16">.16</option>
                                    <option value=".08">.08</option>
                                    <option value=".05">.05</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="payment_amount">{!! trans('messages.payment') !!}</label>
                                <input placeholder="$" type="text" class="form-control" name="paymentAmount"
                                    id="payment_amount">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success shadow rounded">{!! trans('messages.send') !!}</button>
                        <a class="btn btn-primary shadow rounded" href="{{ route('sales.index') }}">{!!
                            trans('messages.back') !!}</a>
                    </form>
                </div>

                {{-- Contenido 2da Pestaña --}}
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form method="POST" action="{{ route('costumers.store') }}" role="form">
                        {{ csrf_field() }}

                        <div class="form-row mt-3">
                            <div class="form-group col-md-4">
                                <label for="name">{!! trans('messages.name') !!}</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success shadow rounded">{!! trans('messages.send') !!}</button>
                        <a class="btn btn-primary shadow rounded" href="{{ route('sales.index') }}">{!!
                            trans('messages.back') !!}</a>
                    </form>
                </div>
            </div>

        </div>
    </div>

@stop
