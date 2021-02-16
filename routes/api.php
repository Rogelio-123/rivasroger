<?php

use App\HrAndPayroll;
use App\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('employees', function () {
    $query = HrAndPayroll::select('id', 'name', 'surname', 'job', 'salary')->get();
    return datatables($query)->make(true);
});

Route::get('sales', function () {
    $from = date('Y-m\-1');
    $now = date('Y-m-d');

    // Ventas
    $sales = Sale::select('total')->where('fecha_alta', '>=', $from)
    ->where('fecha_alta', '<=', $now)
    ->where('estado', 'Pedido recogido')
    ->get();

    $sumSales = 0;
    foreach ($sales as $i) {
        $sumSales += $i->total;
    }
    $sales = $sumSales;

    // $query = Sale::select('id', 'folio', 'fecha_alta', 'sucursal', 'cliente', 'forma_pago', 'total', 'estado')->get();
    return datatables($sales)->make(true);
});


