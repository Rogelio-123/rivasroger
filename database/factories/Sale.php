<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sale;
use Faker\Generator as Faker;

$factory->define(Sale::class, function (Faker $faker) {
    return [
        'folio'      => rand(),
        'fecha_alta' => date('m-d-Y'),
        'sucursal'   => 'Rivas',
        'cliente'    => 'cliente',
        'forma_pago' => 'efectivo',
        'total'      => random_int(20, 100),
        'estado'     => 'Pagado'
    ];
});
