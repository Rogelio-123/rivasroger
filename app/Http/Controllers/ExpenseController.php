<?php

namespace App\Http\Controllers;

use App\DetailExpense;
use Cart;
use App\Expense;
use App\Service;
use App\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $expenses = Expense::all();
        $expensesApprove = Expense::where('status', 1)->get();
        $expensesPending = Expense::where('status', 0)->get();
        return view('expenses.index', compact('expensesApprove', 'expensesPending'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Cart::clear();
        $providers = Provider::all();
        $items = Cart::getContent();
        $services = Service::all();
        return view('expenses.create', compact('providers', 'items', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        // Validación
        $validatedData = $request->validate([
            'date' => 'required',
            'name' => 'required',
            'pay' => 'required',
            'amount' => 'required'
        ]);

        $expense = new Expense;
        $expense->date = $validatedData['date'];
        $expense->name = $validatedData['name'];
        $expense->pay = $validatedData['pay'];
        $expense->amount = $validatedData['amount'];
        $expense->save();

        // Redirect
        return redirect()->action('ExpenseController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        $details = DetailExpense::where('expense_id', $expense->id)->get();
        return view('expenses.show', compact('details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        return view('expenses.edit', compact('expense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        // Validación
        $validatedData = $request->validate([
            'date' => 'required',
            'name' => 'required',
            'pay' => 'required',
            'amount' => 'required'
        ]);

        // Asignar los valores
        $expense->date = $validatedData['date'];
        $expense->name = $validatedData['name'];
        $expense->pay = $validatedData['pay'];
        $expense->amount = $validatedData['amount'];
        $expense->save();

        // Redireccionar
        return redirect()->action('ExpenseController@index')->with('update', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        $expense->delete();
        return redirect()->route('expenses.index')->with('delete', 'ok');
    }

    public function expense()
    {
        // $r = number_format(Cart::getSubTotal(), 2);
        // return $r;

        if (Cart::getContent()->count() > 0) {

            $total = Cart::getSubTotal();

            if ($total >= 500.00) {
                $expense = new Expense();
                $expense->code = time();
                $expense->total = $total;
                $expense->user_id = Auth::user()->id;
                $expense->status = 0;
                $expense->save();
                $shop = "not ok";
            } else {
                $expense = new Expense();
                $expense->code = time();
                $expense->total = $total;
                $expense->user_id = Auth::user()->id;
                $expense->status = 1;
                $expense->save();
                $shop = "ok";
            }

            foreach (Cart::getContent() as $r) {
                $detail = new DetailExpense();
                $detail->provider = $r->attributes->provider;
                $detail->service = $r->name;
                $detail->price = $r->attributes->priceSinTax;
                // $detail->priceSinTax = $r->attributes->priceSinTax;
                // $detail->priceWithTax = $r->price;
                $detail->quantity = $r->quantity;
                $detail->amount = $r->attributes->amount;
                $detail->tax = $r->attributes->tax;
                $detail->taxTotal = $r->attributes->taxTotal;
                $detail->total = $r->attributes->amount + $r->attributes->taxTotal;
                $detail->totalExpense = $total;
                $detail->expense_id = $expense->id;
                $detail->expenseCode = $expense->code;
                $detail->archive = $r->attributes->archive;
                $detail->save();
            }

            Cart::clear();

            return redirect()->action('ExpenseController@index')->with('expense', $shop);
        } else {
            return "No hay productos para procesar.";
        }
    }

    public function approve($id)
    {
        $expense = Expense::find($id);

        $expense->status = 1;
        $expense->save();

        return redirect()->route('expenses.index')->with('approve', 'ok');
    }
}
