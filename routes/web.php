<?php

use App\Costumer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clovers', 'CloverSalesController@index')->name('clovers.index');
Route::get('/clovers/create', 'CloverSalesController@create')->name('clovers.create');
Route::post('/clovers', 'CloverSalesController@store')->name('clovers.store');
Route::get('/clovers/{clover}', 'CloverSalesController@show')->name('clovers.show');
Route::get('/clovers/{clover}/edit', 'CloverSalesController@edit')->name('clovers.edit');
Route::put('/clovers/{clover}', 'CloverSalesController@update')->name('clovers.update');
Route::delete('/clovers/{clover}', 'CloverSalesController@destroy')->name('clovers.destroy');

Route::get('/ubers', 'UberSalesController@index')->name('ubers.index');
Route::get('/ubers/create', 'UberSalesController@create')->name('ubers.create');
Route::post('/ubers', 'UberSalesController@store')->name('ubers.store');
Route::get('/ubers/{uber}', 'UberSalesController@show')->name('ubers.show');
Route::get('/ubers/{uber}/edit', 'UberSalesController@edit')->name('ubers.edit');
Route::put('/ubers/{uber}', 'UberSalesController@update')->name('ubers.update');
Route::delete('/ubers/{uber}', 'UberSalesController@destroy')->name('ubers.destroy');

Route::get('/postmates', 'PostmatesSalesController@index')->name('postmates.index');
Route::get('/postmates/create', 'PostmatesSalesController@create')->name('postmates.create');
Route::post('/postmates', 'PostmatesSalesController@store')->name('postmates.store');
Route::get('/postmates/{postmate}', 'PostmatesSalesController@show')->name('postmates.show');
Route::get('/postmates/{postmate}/edit', 'PostmatesSalesController@edit')->name('postmates.edit');
Route::put('/postmates/{postmate}', 'PostmatesSalesController@update')->name('postmates.update');
Route::delete('/postmates/{postmate}', 'PostmatesSalesController@destroy')->name('postmates.destroy');

Route::get('/grubhubs', 'GrubhubSalesController@index')->name('grubhubs.index');
Route::get('/grubhubs/create', 'GrubhubSalesController@create')->name('grubhubs.create');
Route::post('/grubhubs', 'GrubhubSalesController@store')->name('grubhubs.store');
Route::get('/grubhubs/{grubhub}', 'GrubhubSalesController@show')->name('grubhubs.show');
Route::get('/grubhubs/{grubhub}/edit', 'GrubhubSalesController@edit')->name('grubhubs.edit');
Route::put('/grubhubs/{grubhub}', 'GrubhubSalesController@update')->name('grubhubs.update');
Route::delete('/grubhubs/{grubhub}', 'GrubhubSalesController@destroy')->name('grubhubs.destroy');

Route::get('/doordashs', 'CloverSalesController@index')->name('doordashs.index');
Route::get('/doordashs/create', 'CloverSalesController@create')->name('doordashs.create');
Route::post('/doordashs', 'CloverSalesController@store')->name('doordashs.store');
Route::get('/doordashs/{doordash}', 'CloverSalesController@show')->name('doordashs.show');
Route::get('/doordashs/{doordash}/edit', 'CloverSalesController@edit')->name('doordashs.edit');
Route::put('/doordashs/{doordash}', 'CloverSalesController@update')->name('doordashs.update');
Route::delete('/doordashs/{doordash}', 'CloverSalesController@destroy')->name('doordashs.destroy');

Route::get('/rivasapps', 'CloverSalesController@index')->name('rivasapps.index');
Route::get('/rivasapps/create', 'CloverSalesController@create')->name('rivasapps.create');
Route::post('/rivasapps', 'CloverSalesController@store')->name('rivasapps.store');
Route::get('/rivasapps/{rivasapp}', 'CloverSalesController@show')->name('rivasapps.show');
Route::get('/rivasapps/{rivasapp}/edit', 'CloverSalesController@edit')->name('rivasapps.edit');
Route::put('/rivasapps/{rivasapp}', 'CloverSalesController@update')->name('rivasapps.update');
Route::delete('/rivasapps/{rivasapp}', 'CloverSalesController@destroy')->name('rivasapps.destroy');

// Users
Route::group(['middleware' => ['permission:view_users|create_users|edit_users|delete_users']], function () {
    Route::get('/users', 'UserController@index')->name('users.index');
    Route::get('/users/create', 'UserController@create')->name('users.create');
    Route::post('/users', 'UserController@store')->name('users.store');
    Route::get('/users/{user}', 'UserController@show')->name('users.show');
    Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit');
    Route::put('/users/{user}', 'UserController@update')->name('users.update');
    Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');
});

// Roles
Route::group(['middleware' => ['permission:view_roles|create_roles|edit_roles|delete_roles']], function () {
    Route::get('/roles', 'RoleController@index')->name('roles.index');
    Route::get('/roles/create', 'RoleController@create')->name('roles.create');
    Route::post('/roles', 'RoleController@store')->name('roles.store');
    Route::get('/roles/{role}', 'RoleController@show')->name('roles.show');
    Route::get('/roles/{role}/edit', 'RoleController@edit')->name('roles.edit');
    Route::put('/roles/{role}', 'RoleController@update')->name('roles.update');
    Route::delete('/roles/{role}', 'RoleController@destroy')->name('roles.destroy');
});

// Sales
Route::group(['middleware' => ['permission:view_sales|create_sales|edit_sales|delete_sales']], function () {
    Route::get('/sales', 'SaleController@index')->name('sales.index');
    Route::get('/sales/create', 'SaleController@create')->name('sales.create');
    Route::post('/sales', 'SaleController@store')->name('sales.store');
    Route::get('/sales/{sale}', 'SaleController@show')->name('sales.show');
    Route::get('/sales/{sale}/edit', 'SaleController@edit')->name('sales.edit');
    Route::put('/sales/{sale}', 'SaleController@update')->name('sales.update');
    Route::delete('/sales/{sale}', 'SaleController@destroy')->name('sales.destroy');
});

// Costumer
Route::group(['middleware' => ['permission:view_costumers|create_costumers|edit_costumers|delete_costumers']], function () {
    Route::post('/costumers', 'CostumerController@store')->name('costumers.store');
    Route::get('/costumers/{costumer}', 'CostumerController@show')->name('costumers.show');
    Route::get('/costumers/{costumer}/edit', 'CostumerController@edit')->name('costumers.edit');
    Route::put('/costumers/{costumer}', 'CostumerController@update')->name('costumers.update');
    Route::delete('/costumers/{costumer}', 'CostumerController@destroy')->name('costumers.destroy');
});

// Inventory
Route::group(['middleware' => ['permission:view_inventory|create_inventory|edit_inventory|delete_inventory']], function () {
    Route::get('/inventory', 'InventoryController@index')->name('inventory.index');
    Route::get('/inventory/create', 'InventoryController@create')->name('inventory.create');
});

// Stock
Route::group(['middleware' => ['permission:view_stock|create_stock|edit_stock|delete_stock']], function () {
    Route::get('/stock', 'StockController@index')->name('stocks.index');
});

// Inputs
Route::group(['middleware' => ['permission:view_stock|create_stock|edit_stock|delete_stock']], function () {
    Route::get('/inputs', 'InputController@index')->name('inputs.index');
    Route::get('/inputs/create', 'InputController@create')->name('inputs.create');
    Route::post('/inputs', 'InputController@store')->name('inputs.store');
    Route::get('/inputs/{input}', 'InputController@show')->name('inputs.show');
    Route::get('/inputs/{input}/edit', 'InputController@edit')->name('inputs.edit');
    Route::put('/inputs/{input}', 'InputController@update')->name('inputs.update');
    Route::delete('/inputs/{input}', 'InputController@destroy')->name('inputs.destroy');
});

// Outputs
Route::group(['middleware' => ['permission:view_stock|create_stock|edit_stock|delete_stock']], function () {
    Route::get('/outputs', 'OutputController@index')->name('outputs.index');
    Route::get('/outputs/create', 'OutputController@create')->name('outputs.create');
    Route::post('/outputs', 'OutputController@store')->name('outputs.store');
    Route::get('/outputs/{output}', 'OutputController@show')->name('outputs.show');
    Route::get('/outputs/{output}/edit', 'OutputController@edit')->name('outputs.edit');
    Route::put('/outputs/{output}', 'OutputController@update')->name('outputs.update');
    Route::delete('/outputs/{output}', 'OutputController@destroy')->name('outputs.destroy');
});

// Providers
Route::group(['middleware' => ['permission:view_providers|create_providers|edit_providers|delete_providers']], function () {
    Route::get('/providers', 'ProviderController@index')->name('providers.index');
    Route::get('/providers/create', 'ProviderController@create')->name('providers.create');
    Route::post('/providers', 'ProviderController@store')->name('providers.store');
    Route::get('/providers/{provider}', 'ProviderController@show')->name('providers.show');
    Route::get('/providers/{provider}/edit', 'ProviderController@edit')->name('providers.edit');
    Route::put('/providers/{provider}', 'ProviderController@update')->name('providers.update');
    Route::delete('/providers/{provider}', 'ProviderController@destroy')->name('providers.destroy');
});

// Category Product
Route::group(['middleware' => ['permission:view_providers|create_providers|edit_providers|delete_providers']], function () {
    Route::post('/categories-product', 'CategoryProductController@store')->name('categories.store');
    Route::get('/categories-product/{category}', 'CategoryProductController@show')->name('categories.show');
    Route::get('/categories-product/{category}/edit', 'CategoryProductController@edit')->name('categories.edit');
    Route::put('/categories-product/{category}', 'CategoryProductController@update')->name('categories.update');
    Route::delete('/categories-product/{category}', 'CategoryProductController@destroy')->name('categories.destroy');
});

// Product
Route::group(['middleware' => ['permission:view_product|create_product|edit_product|delete_product']], function () {
    Route::get('/products', 'ProductController@index')->name('products.index');
    Route::get('/products/create', 'ProductController@create')->name('products.create');
    Route::post('/products', 'ProductController@store')->name('products.store');
    Route::get('/products/{product}', 'ProductController@show')->name('products.show');
    Route::get('/products/{product}/edit', 'ProductController@edit')->name('products.edit');
    Route::put('/products/{product}', 'ProductController@update')->name('products.update');
    Route::delete('/products/{product}', 'ProductController@destroy')->name('products.destroy');
});

// Purchease
Route::group(['middleware' => ['permission:view_purchase|create_purchase|edit_purchase|delete_purchase']], function () {
    Route::get('/shoppings', 'ShoppingController@index')->name('shoppings.index');
    Route::get('/shoppings/create', 'ShoppingController@create')->name('shoppings.create');
    Route::post('/shoppings', 'ShoppingController@store')->name('shoppings.store');
    Route::get('/shoppings/{shopping}', 'ShoppingController@show')->name('shoppings.show');
    Route::get('/shoppings{shopping}/edit', 'ShoppingController@edit')->name('shoppings.edit');
    Route::put('/shoppings/{shopping}', 'ShoppingController@update')->name('shoppings.update');
    Route::delete('/shoppings/{shopping}', 'ShoppingController@destroy')->name('shoppings.destroy');
});

// Order
Route::get('/order', 'ShoppingController@order')->name('shoppings.order');

// Details Order
Route::get('/orders', 'OrderController@index')->name('orders.index');
Route::get('/orders/create', 'OrderController@create')->name('orders.create');
Route::post('/orders', 'OrderController@store')->name('orders.store');
Route::get('/orders/{order}', 'OrderController@show')->name('orders.show');
Route::get('/orders/{order}/edit', 'OrderController@edit')->name('orders.edit');
Route::put('/orders/{order}', 'OrderController@update')->name('orders.update');
Route::delete('/orders/{order}', 'OrderController@destroy')->name('orders.destroy');

Route::get('/approve/{id}', 'OrderController@approve')->name('orders.approve');

// Cart Purchease
Route::post('/cart-add', 'CartController@add')->name('cart.add');
Route::get('/cart-checkout', 'CartController@checkout')->name('cart.checkout');
Route::post('/cart-clear', 'CartController@clear')->name('cart.clear');
Route::post('/cart-remove', 'CartController@remove')->name('cart.remove');
Route::post('/cart-subtotal', 'CartController@subtotal')->name('cart.subtotal');

// Pendings
Route::get('/approves', 'ApproveController@index')->name('approves.index');
Route::get('/approves/create', 'ApproveController@create')->name('approves.create');
Route::post('approves', 'ApproveController@store')->name('approves.store');
Route::get('/approves/{approve}', 'ApproveController@show')->name('approves.show');
Route::get('/approves{approve}/edit', 'ApproveController@edit')->name('approves.edit');
Route::put('/approves/{approve}', 'ApproveController@update')->name('approves.update');
Route::delete('/approves/{approve}', 'ApproveController@destroy')->name('approves.destroy');
Route::get('/approves/{approve}/approve', 'ApproveController@approve')->name('approves.approve');

// Cart Expense
Route::post('/expense-add', 'CartExpenseController@add')->name('expense-cart.add');
Route::get('/expense-checkout', 'CartExpenseController@checkout')->name('expense-cart.checkout');
Route::post('/expense-clear', 'CartExpenseController@clear')->name('expense-cart.clear');
Route::post('/expense-remove', 'CartExpenseController@remove')->name('expense-cart.remove');
Route::post('/expense-subtotal', 'CartExpenseController@subtotal')->name('expense-cart.subtotal');

// Payroll
Route::group(['middleware' => ['permission:view_services|create_services|edit_services|delete_services']], function () {
    Route::get('/payrolls', 'PayrollController@index')->name('payrolls.index');
    Route::get('/payrolls/create', 'PayrollController@create')->name('payrolls.create');
    Route::post('payrolls', 'PayrollController@store')->name('payrolls.store');
    Route::get('/payrolls/{payroll}', 'PayrollController@show')->name('payrolls.show');
    Route::get('/payrolls{payroll}/edit', 'PayrollController@edit')->name('payrolls.edit');
    Route::put('/payrolls/{payroll}', 'PayrollController@update')->name('payrolls.update');
    Route::delete('/payrolls/{payroll}', 'PayrollController@destroy')->name('payrolls.destroy');
});

// Payroll Order
Route::post('/payroll-order', 'PayrollController@payroll')->name('payrolls.order');

// Payroll Print
Route::get('/payroll-print/{payroll}', 'PayrollController@print')->name('payrolls.print');

// Cart Payroll
Route::post('/payroll-cart-add', 'CartPayrollController@add')->name('payroll-cart.add');
Route::get('/payroll-cart-checkout', 'CartPayrollController@checkout')->name('payroll-cart.checkout');
Route::post('/payroll-cart-clear', 'CartPayrollController@clear')->name('payroll-cart.clear');
Route::post('/payroll-cart-remove', 'CartPayrollController@remove')->name('payroll-cart.remove');
Route::post('/payroll-cart-subtotal', 'CartPayrollController@subtotal')->name('payroll-cart.subtotal');

// Expense Order
Route::get('/expense-order', 'ExpenseController@expense')->name('expenses.order');

Route::group(['middleware' => ['permission:view_services|create_services|edit_services|delete_services']], function () {
    // Services
    Route::get('/services', 'ServiceController@index')->name('services.index');
    Route::get('/services/create', 'ServiceController@create')->name('services.create');
    Route::post('services', 'ServiceController@store')->name('services.store');
    Route::get('/services/{service}', 'ServiceController@show')->name('services.show');
    Route::get('/services{service}/edit', 'ServiceController@edit')->name('services.edit');
    Route::put('/services/{service}', 'ServiceController@update')->name('services.update');
    Route::delete('/services/{service}', 'ServiceController@destroy')->name('services.destroy');
});

Route::group(['middleware' => ['permission:view_expense|create_expense|edit_expense|delete_expense']], function () {
    // Expenses
    Route::get('/expenses', 'ExpenseController@index')->name('expenses.index');
    Route::get('/expenses/create', 'ExpenseController@create')->name('expenses.create');
    Route::post('expenses', 'ExpenseController@store')->name('expenses.store');
    Route::get('/expenses/{expense}', 'ExpenseController@show')->name('expenses.show');
    Route::get('/expenses{expense}/edit', 'ExpenseController@edit')->name('expenses.edit');
    Route::put('/expenses/{expense}', 'ExpenseController@update')->name('expenses.update');
    Route::delete('/expenses/{expense}', 'ExpenseController@destroy')->name('expenses.destroy');
    Route::get('/expenses/{approve}/approve', 'ExpenseController@approve')->name('expenses.approve');
});

// Human Resource and Payroll
Route::get('/hr-and-payroll', 'HrAndPayrollController@index')->name('hr-and-payroll.index');
Route::get('/hr-and-payroll/create', 'HrAndPayrollController@create')->name('hr-and-payroll.create');
Route::post('hr-and-payroll', 'HrAndPayrollController@store')->name('hr-and-payroll.store');
Route::get('/hr-and-payroll/{employee}', 'HrAndPayrollController@show')->name('hr-and-payroll.show');
Route::get('/hr-and-payroll{employee}/edit', 'HrAndPayrollController@edit')->name('hr-and-payroll.edit');
Route::put('/hr-and-payroll/{employee}', 'HrAndPayrollController@update')->name('hr-and-payroll.update');
Route::delete('/hr-and-payroll/{employee}', 'HrAndPayrollController@destroy')->name('hr-and-payroll.destroy');

Route::get('/employees', 'HrAndPayrollController@employees')->name('hr-and-payroll.employess');

// Settings
Route::group(['middleware' => ['permission:view_settings|create_settings|edit_settings|delete_settings']], function () {
    Route::get('/settings', 'SettingController@index')->name('settings.index');
    Route::get('/settings/create', 'SettingController@create')->name('settings.create');
    Route::post('settings', 'SettingController@store')->name('settings.store');
    Route::get('/settings/{setting}', 'SettingController@show')->name('settings.show');
    Route::get('/settings{setting}/edit', 'SettingController@edit')->name('settings.edit');
    Route::put('/settings/{setting}', 'SettingController@update')->name('settings.update');
    Route::delete('/settings/{setting}', 'SettingController@destroy')->name('settings.destroy');
});

// Knowledge
Route::get('/knowledge', 'KnowledgeController@index')->name('knowledge.index');

// Finanzas (Contabilidad)
Route::get('/finances', 'FinanceController@index')->name('finances.index');
Route::get('/finances/create', 'FinanceController@create')->name('finances.create');
Route::post('finances', 'FinanceController@store')->name('finances.store');
Route::get('/finances/{finance}', 'FinanceController@show')->name('finances.show');
Route::get('/finances{finance}/edit', 'FinanceController@edit')->name('finances.edit');
Route::put('/finances/{finance}', 'FinanceController@update')->name('finances.update');
Route::delete('/finances/{finance}', 'FinanceController@destroy')->name('finances.destroy');

// AJAX
Route::get('/sales-ajax', 'SaleController@sales')->name('sales.ajax');

// Dashboard Store
Route::post('/dashboard', 'DashboardController@store')->name('dash.store');

// Valores Meses
Route::get('/valores', 'HomeController@enero')->name('dash.enero');

// Lenguajes
Route::get('lang/{lang}', 'LanguageController@swap')->name('lang.swap');

// Download
Route::get('/download/{file}', 'Download@downloadFile');

//Perfil
Route::get('/profiles', 'ProfileController@edit')->name('profiles.edit');
Route::put('/profiles/update', 'ProfileController@update')->name('profiles.update');

// Credentials
Route::get('/credentials/{credential}/edit', 'CredentialController@edit')->name('credentials.edit');
Route::put('/credentials/{credential}', 'CredentialController@update')->name('credentials.update');
