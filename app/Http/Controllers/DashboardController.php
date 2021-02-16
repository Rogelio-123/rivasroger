<?php

namespace App\Http\Controllers;

use App\CloverSales;
use App\DoordashSales;
use App\Expense;
use App\GrubhubSales;
use App\Order;
use App\Payroll;
use App\PostmatesSales;
use App\RivasappSales;
use App\Sale;
use App\UberSales;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function store(Request $request)
    {
        $from = $request->from;
        $to = $request->to;

        // Ventas Clover
        $salesClover = CloverSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $to)
            ->where('estado', 'PAID FULL')
            ->get();

        $sumSalesClover = 0;
        foreach ($salesClover as $i) {
            $sumSalesClover += $i->total;
        }
        $salesClover = $sumSalesClover;

        // Ventas Uber
        $salesUber = UberSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $to)
            ->where('estado', 'PAID FULL')
            ->get();

        $sumSalesUber = 0;
        foreach ($salesUber as $i) {
            $sumSalesUber += $i->total;
        }
        $salesUber = $sumSalesUber;

        // Ventas Doordash
        $salesDoordash = DoordashSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $to)
            ->where('estado', 'PAID FULL')
            ->get();

        $sumSalesDoordash = 0;
        foreach ($salesDoordash as $i) {
            $sumSalesDoordash += $i->total;
        }
        $salesDoordash = $sumSalesDoordash;

        // Ventas Grubhub
        $salesGrubhub = GrubhubSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $to)
            ->where('estado', 'PAID FULL')
            ->get();

        $sumSalesGrubhub = 0;
        foreach ($salesGrubhub as $i) {
            $sumSalesGrubhub += $i->total;
        }
        $salesGrubhub = $sumSalesGrubhub;

        // Ventas Postmates
        $salesPostmates = PostmatesSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $to)
            ->where('estado', 'PAID FULL')
            ->get();

        $sumSalesPostmates = 0;
        foreach ($salesPostmates as $i) {
            $sumSalesPostmates += $i->total;
        }
        $salesPostmates = $sumSalesPostmates;

        // Ventas Rivasapp
        $salesRivasapp = RivasappSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $to)
            ->where('estado', 'PAID FULL')
            ->get();

        $sumSalesRivasapp = 0;
        foreach ($salesRivasapp as $i) {
            $sumSalesRivasapp += $i->total;
        }
        $salesRivasapp = $sumSalesRivasapp;

        // *** Ventas Generales con Filtro ***
        $sales = $salesClover + $salesDoordash + $salesGrubhub + $salesPostmates + $salesRivasapp + $salesUber;

        // Ordenes Count del Mes
        $ordersClover = CloverSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $to)
            ->where('estado', 'PAID FULL')
            ->count();

        $ordersUber = UberSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $to)
            ->where('estado', 'PAID FULL')
            ->count();

        $ordersPostmates = PostmatesSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $to)
            ->where('estado', 'PAID FULL')
            ->count();

        $ordersGrubhub = GrubhubSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $to)
            ->where('estado', 'PAID FULL')
            ->count();

        $ordersDoordash = DoordashSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $to)
            ->where('estado', 'PAID FULL')
            ->count();

        $ordersRivasapp = RivasappSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $to)
            ->where('estado', 'PAID FULL')
            ->count();

        // *** ORDERS ***
        $orders = $ordersClover + $ordersDoordash + $ordersGrubhub + $ordersPostmates + $ordersRivasapp + $ordersUber;

        // Approve
        $approve = 1;

        // Gastos
        $expenses = Expense::select('total')
            ->where('created_at', '>=', $from)
            ->where('created_at', '<=', $to)
            ->where('status', $approve)
            ->get();

        $sumExpenses = 0;
        foreach ($expenses as $i) {
            $sumExpenses += $i->total;
        }
        $totalExpense = $sumExpenses;

        // Purchases
        $purchases = Order::select('total')->where('created_at', '>=', $from)
            ->where('created_at', '<=', $to)
            ->where('status', $approve)
            ->get();

        $sumPurchases = 0;
        foreach ($purchases as $i) {
            $sumPurchases += $i->total;
        }
        $totalPurchase = $sumPurchases;

        // Compras
        $payrolls = Payroll::select('total')->where('created_at', '>=', $from)
            ->where('created_at', '<=', $to)
            ->get();

        $sumPayrolls = 0;
        foreach ($payrolls as $i) {
            $sumPayrolls += $i->total;
        }
        $totalPayroll = $sumPayrolls;

        // *** Expenses ***
        $e = $totalExpense + $totalPurchase + $totalPayroll;

        // Ventas Enero
        $sE = Sale::select('total')->where('fecha_alta', '>=', date('Y-\01-1'))
            ->where('fecha_alta', '<=', date('Y-\01-31'))
            ->where('estado', 'Pedido recogido')
            ->get();

        $sSE = 0;
        foreach ($sE as $i) {
            $sSE += $i->total;
        }
        $sTE = $sSE;

        // Ventas Febrero
        $sF = Sale::select('total')->where('fecha_alta', '>=', date('Y-\02-1'))
            ->where('fecha_alta', '<=', date('Y-\02-31'))
            ->where('estado', 'Pedido recogido')
            ->get();

        $sSF = 0;
        foreach ($sF as $i) {
            $sSF += $i->total;
        }
        $sTF = $sSF;

        // Ventas Marzo
        $sM = Sale::select('total')->where('fecha_alta', '>=', date('Y-\03-1'))
            ->where('fecha_alta', '<=', date('Y-\03-31'))
            ->where('estado', 'Pedido recogido')
            ->get();

        $sSM = 0;
        foreach ($sM as $i) {
            $sSM += $i->total;
        }
        $sTM = $sSM;

        // Ventas Abril
        $sA = Sale::select('total')->where('fecha_alta', '>=', date('Y-\04-1'))
            ->where('fecha_alta', '<=', date('Y-\04-31'))
            ->where('estado', 'Pedido recogido')
            ->get();

        $sSA = 0;
        foreach ($sA as $i) {
            $sSA += $i->total;
        }
        $sTA = $sSA;

        // Ventas Mayo
        $sMay = Sale::select('total')->where('fecha_alta', '>=', date('Y-\05-1'))
            ->where('fecha_alta', '<=', date('Y-\05-31'))
            ->where('estado', 'Pedido recogido')
            ->get();

        $sSMay = 0;
        foreach ($sMay as $i) {
            $sSMay += $i->total;
        }
        $sTMay = $sSMay;

        // Ventas Junio
        $sJ = Sale::select('total')->where('fecha_alta', '>=', date('Y-\06-1'))
            ->where('fecha_alta', '<=', date('Y-\06-31'))
            ->where('estado', 'Pedido recogido')
            ->get();

        $sSJ = 0;
        foreach ($sJ as $i) {
            $sSJ += $i->total;
        }
        $sTJ = $sSJ;

        // Ventas Julio
        $sJul = Sale::select('total')->where('fecha_alta', '>=', date('Y-\07-1'))
            ->where('fecha_alta', '<=', date('Y-\07-31'))
            ->where('estado', 'Pedido recogido')
            ->get();

        $sSJul = 0;
        foreach ($sJul as $i) {
            $sSJul += $i->total;
        }
        $sTJul = $sSJul;

        // Ventas Agosto
        $sAgo = Sale::select('total')->where('fecha_alta', '>=', date('Y-\08-1'))
            ->where('fecha_alta', '<=', date('Y-\08-31'))
            ->where('estado', 'Pedido recogido')
            ->get();

        $sSAgo = 0;
        foreach ($sAgo as $i) {
            $sSAgo += $i->total;
        }
        $sTAgo = $sSAgo;

        // Ventas Sep
        $sSep = Sale::select('total')->where('fecha_alta', '>=', date('Y-\09-1'))
            ->where('fecha_alta', '<=', date('Y-\09-31'))
            ->where('estado', 'Pedido recogido')
            ->get();

        $sSSep = 0;
        foreach ($sSep as $i) {
            $sSSep += $i->total;
        }
        $sTSep = $sSSep;

        // Ventas Oct
        $s10 = Sale::select('total')->where('fecha_alta', '>=', date('Y-\10-1'))
            ->where('fecha_alta', '<=', date('Y-\10-31'))
            ->where('estado', 'Pedido recogido')
            ->get();

        $sS10 = 0;
        foreach ($s10 as $i) {
            $sS10 += $i->total;
        }
        $sT10 = $sS10;

        // Ventas Nov
        $sNov = Sale::select('total')->where('fecha_alta', '>=', date('Y-\11-1'))
            ->where('fecha_alta', '<=', date('Y-\11-31'))
            ->where('estado', 'Pedido recogido')
            ->get();

        $sSNov = 0;
        foreach ($sNov as $i) {
            $sSNov += $i->total;
        }
        $sTNov = $sSNov;

        // Ventas Dic
        $sDic = Sale::select('total')->where('fecha_alta', '>=', date('Y-\12-1'))
            ->where('fecha_alta', '<=', date('Y-\12-31'))
            ->where('estado', 'Pedido recogido')
            ->get();

        $sSDic = 0;
        foreach ($sDic as $i) {
            $sSDic += $i->total;
        }
        $sTDic = $sSDic;

        // Ventas Generales del Mes

        return view(
            'dashboards.filter',
            compact(
                'sales',
                'orders',
                'e',
                'sTE',
                'sTF',
                'sTM',
                'sTA',
                'sTMay',
                'sTJ',
                'sTJul',
                'sTAgo',
                'sTSep',
                'sTNov',
                'sTDic',
                'sT10',
                'totalPayroll',
                'totalExpense',
                'totalPurchase',
                'salesClover',
                'salesUber',
                'salesDoordash',
                'salesPostmates',
                'salesGrubhub',
                'salesRivasapp',
            )
        );
    }
}
