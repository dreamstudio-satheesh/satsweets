<?php


use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',  [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
Route::get('/logout',  [App\Http\Controllers\Auth\LoginController::class, 'logout']);


//Sales
Route::get('saleslist', [App\Http\Controllers\CartController::class, 'saleslist'])->name('saleslist');
Route::get('/thermal/{id}', [App\Http\Controllers\PrintController::class, 'thermal'])->name('thermal.show');
Route::get('/invoice/{id}', [App\Http\Controllers\CartController::class, 'showinvoice'])->name('invoice.show');

   

Route::get('/addpayment/{id}', [App\Http\Controllers\PaymentController::class, 'create'])->name('payment.create');




Route::view('salesreturnlist', 'sales.salesreturnlist')->name('salesreturnlist');
Route::view('newsalesreturn', 'sales.newsalesreturn')->name('newsalesreturn');

//Purchase
Route::view('purchaselist', 'purchase.purchaselist')->name('purchaselist');
Route::view('addpurchase', 'purchase.addpurchase')->name('addpurchase');
Route::view('importpurchase', 'purchase.importpurchase')->name('importpurchase');

//Expense
Route::view('expenselist', 'expense.expenselist')->name('expenselist');
Route::view('addexpense', 'expense.addexpense')->name('addexpense');
Route::view('expensecategory', 'expense.expensecategory')->name('expensecategory');

//Quotation
Route::view('quotationlist', 'quotation.quotationlist')->name('quotationlist');
Route::view('addquotation', 'quotation.addquotation')->name('addquotation');

//Return
Route::view('salesreturnlists', 'return.salesreturnlists')->name('salesreturnlists');
Route::view('addsalesreturn', 'return.addsalesreturn')->name('addsalesreturn');
Route::view('purchasereturnlist', 'return.purchasereturnlist')->name('purchasereturnlist');
Route::view('addpurchasereturn', 'return.addpurchasereturn')->name('addpurchasereturn');

//People
Route::view('supplierlist', 'people.supplierlist')->name('supplierlist');
Route::view('addsupplier', 'people.addsupplier')->name('addsuppliers');

//Report
Route::view('purchaseorderreport', 'report.purchaseorderreport')->name('purchaseorderreport');
Route::view('inventoryreport', 'report.inventoryreport')->name('inventoryreport');
Route::view('salesreport', 'report.salesreport')->name('salesreport');
Route::view('invoicereport', 'report.invoicereport')->name('invoicereport');
Route::view('purchasereport', 'report.purchasereport')->name('purchasereport');
Route::view('supplierreport', 'report.supplierreport')->name('supplierreport');
Route::view('customerreport', 'report.customerreport')->name('customerreport');

//Settings
Route::view('generalsettings', 'settings.generalsettings')->name('generalsettings');
Route::view('grouppermissions', 'settings.grouppermissions')->name('grouppermissions');
Route::view('taxrates', 'settings.taxrates')->name('taxrates');



Auth::routes([

    'register' => false, // Register Routes...
  
    'reset' => false, // Reset Password Routes...
  
    'verify' => false, // Email Verification Routes...
  
  ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/test', [App\Http\Controllers\HomeController::class, 'index'])->name('test');








Route::group([
    'middleware' => 'auth'
], function () {
    // Admin Routes
    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => ['auth']
    ], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('users', UserController::class);

        
    });
    // User routes
    
     
     Route::get('pos', [App\Http\Controllers\CartController::class, 'pos'])->name('pos');
     Route::get('editcart/{id}', [App\Http\Controllers\CartController::class, 'editcart'])->name('editcart');

    //lines
    Route::resource('vendors', App\Http\Controllers\vendorController::class);
    Route::resource('customers', App\Http\Controllers\CustomerController::class);
    Route::resource('products', App\Http\Controllers\ProductController::class);
    Route::resource('categories', App\Http\Controllers\CategoryController::class);
    Route::resource('lines', App\Http\Controllers\LineController::class);

    // Common routes
    Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/{user}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/{user}/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
});
