    <?php

use App\Http\Controllers\CategoryPaymentController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\CategoryProduct;
use App\Models\Payment;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartDetailController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\StatusController;
use App\Models\Products;
use App\Models\User;
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

Route::get('/dashboard', [IndexController::class, 'dashboard'])->middleware('admin');

Route::get('/dashboard/user', [UserController::class, 'index'])->middleware('admin');
Route::get('/dashboard/user/{id}/delete', [UserController::class, 'delete'])->middleware('admin');
Route::get('/dashboard/user/{id}/edit', [UserController::class, 'edit'])->middleware('admin');
Route::post('/dashboard/user', [UserController::class, 'store'])->middleware('admin');
Route::post('/dashboard/user/{id}/update', [UserController::class, 'update'])->middleware('admin');
Route::get('/dashboard/user/{id}/show',[UserController::class, 'show'])->middleware('admin');
Route::get('/dashboard/user/create', [UserController::class, 'create'])->middleware('admin');

Route::get('/dashboard/categoryproduct', [CategoryProductController::class, 'dashboardindex'])->middleware('admin');
Route::get('/dashboard/categoryproduct/{id}/delete', [CategoryProductController::class, 'delete'])->middleware('admin');
Route::get('/dashboard/categoryproduct/{id}/edit', [CategoryProductController::class, 'edit'])->middleware('admin');
Route::post('/dashboard/categoryproduct', [CategoryProductController::class, 'store'])->middleware('admin');
Route::post('/dashboard/categoryproduct/{id}/update', [CategoryProductController::class, 'update'])->middleware('admin');
Route::get('/dashboard/categoryproduct/{id}/show',[CategoryProductController::class, 'show'])->middleware('admin');
Route::get('/dashboard/categoryproduct/create', [CategoryProductController::class, 'create'])->middleware('admin');

Route::get('/dashboard/payment', [PaymentController::class, 'dashboardindex'])->middleware('admin');
Route::get('/dashboard/payment/{id}/delete', [PaymentController::class, 'delete'])->middleware('admin');
Route::get('/dashboard/payment/{id}/edit', [PaymentController::class, 'edit'])->middleware('admin');
Route::post('/dashboard/payment', [PaymentController::class, 'store'])->middleware('admin');
Route::post('/dashboard/payment/{id}/update', [PaymentController::class, 'update'])->middleware('admin');
Route::get('/dashboard/payment/create', [PaymentController::class, 'create'])->middleware('admin');

Route::get('/dashboard/product', [ProductController::class, 'dashboardindex'])->middleware('admin');
Route::get('/dashboard/product/{id}/delete', [ProductController::class, 'delete'])->middleware('admin');
Route::get('/dashboard/product/{id}/edit', [ProductController::class, 'edit'])->middleware('admin');
Route::post('/dashboard/product', [ProductController::class, 'store'])->middleware('admin');
Route::post('/dashboard/product/{id}/update', [ProductController::class, 'update'])->middleware('admin');
Route::post('/dashboard/product/update-quantity', [ProductController::class, 'updatequantity'])->name('update.quantity')->middleware('admin');
Route::get('/dashboard/product/{id}/show',[ProductController::class, 'show'])->middleware('admin');
Route::get('/dashboard/product/{id}/detail',[ProductController::class, 'detail'])->middleware('admin');
Route::get('/dashboard/product/create', [ProductController::class, 'create'])->middleware('admin');


Route::get('/dashboard/delivery', [DeliveryController::class, 'dashboardindex'])->middleware('admin');
Route::get('/dashboard/delivery/{id}/delete', [DeliveryController::class, 'delete'])->middleware('admin');
Route::get('/dashboard/delivery/{id}/edit', [DeliveryController::class, 'edit'])->middleware('admin');
Route::post('/dashboard/delivery', [DeliveryController::class, 'store'])->middleware('admin');
Route::post('/dashboard/delivery/{id}/update', [DeliveryController::class, 'update'])->middleware('admin');
Route::get('/dashboard/delivery/create', [DeliveryController::class, 'create'])->middleware('admin');

Route::get('/dashboard/c-Pending', [StatusController::class, 'pdashboardindex'])->middleware('admin');
Route::get('/dashboard/c-Success', [StatusController::class, 'sdashboardindex'])->middleware('admin');
Route::get('/dashboard/c-Success/{id}/show', [StatusController::class, 'showsuccess'])->middleware('admin');
Route::post('/dashboard/c-Pending/{id}/confirm', [StatusController::class, 'confirm'])->middleware('admin');
Route::get('/dashboard/c-Pending/{id}/tolak', [StatusController::class, 'tolak'])->middleware('admin');
Route::get('/',[IndexController::class, 'index'])->name('menu');

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{product:slug}', [ProductController::class,'show']);
Route::get('/history/{id}', [HistoryController::class,'detail']);
Route::get('/history/{id}/kirim-bukti', [HistoryController::class,'bukti']);
Route::post('/history/{id}/kirim-bukti', [HistoryController::class,'kirimbukti']);

Route::get('/categories', function(CategoryProduct $category){
    return view('products.categories', [
                'title' => 'All Categories',
                'category' => $category->nm_category,
                'categoryproduct' => $category->all()
            ]);
});

Route::get('/categories/{category:slug}', [CategoryProductController::class,'index']);

Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart']);

Route::post('update-cart', [CartController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');

Route::get('/cart',[CartController::class, 'cart'])->name('cart');
Route::post('/cart/{id}/delete',[CartController::class, 'delete']);

Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::post('/confirm-checkout', [CartController::class, 'confirm'])->middleware('auth');
Route::get('/ongkir', [DeliveryController::class,'ongkir']);
Route::get('/fee', [PaymentController::class,'fee']);

Route::get('/my-account', [MyAccountController::class, 'index'])->middleware('auth');
Route::get('/my-account/edit', [MyAccountController::class, 'edit'])->middleware('auth');
Route::post('/my-account/update', [MyAccountController::class, 'update'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/history', [HistoryController::class,'index']);


