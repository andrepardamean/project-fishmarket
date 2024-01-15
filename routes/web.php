<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginregister;
use App\Http\Controllers\navbar;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PemesananController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', function () {return view('home');

//     Route::get('/auth/login', [loginregister::class, 'login'])->name('auth.login');
    
// });

Route::post('/postlogin', [loginregister::class, 'postlogin'])->name('postlogin');
Route::post('/postregister', [loginregister::class, 'postregister'])->name('postregister');

Route::middleware(['guest'])->group(function () {
Route::get('/', function () {return view('home');});

    Route::get('/auth/login', [loginregister::class, 'login'])->name('auth.login');
    Route::get('/auth/register',[loginregister::class, 'register'])->name('auth.register');
});

    Route::group(['middleware' => ['auth', 'checklevel:admin']], function (){
    Route::get('/admin/home', [loginregister::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/user', [AdminController::class, 'user'])->name('admin.user');
    Route::get('/admin/deleteuser/{id}', [AdminController::class, 'deleteuser'])->name('admin.deleteuser');
    Route::get('/admin/pemesanan', [AdminController::class, 'pemesanan'])->name('admin.pemesanan');
    Route::get('/admin/tambahpemesanan', [AdminController::class, 'tambahpemesanan'])->name('admin.tambahpemesanan');
    Route::get('/admin/deletepesanan/{id}', [AdminController::class, 'deletepesanan'])->name('admin.deletepesanan');
    Route::get('/admin/editpesanan/{id}', [AdminController::class, 'editpesanan'])->name('admin.editpesanan');
    Route::get('/user/edituser/{id}', [navbar::class, 'edituser'])->name('user.edituser');

    Route::get('/admin/produk', [AdminController::class, 'adminProduk'])->name('admin.produk');

    Route::get('/admin/tambahProduk', [AdminController::class, 'tambahProduk'])->name('admin.tambahProduk');
    Route::get('/admin/editProduk/{id}', [AdminController::class, 'editproduk'])->name('admin.editProduk');
    Route::get('/admin/deleteproduk/{id}', [AdminController::class, 'deleteproduk'])->name('admin.deleteproduk');
    
    
    




});
    
    Route::post('/posteditpesanan/{id}', [AdminController::class, 'posteditpesanan'])->name('posteditpesanan');
    Route::post('/postTambahProduk', [AdminController::class, 'postTambahProduk'])->name('posttambahProduk');
    Route::post('/postEditProduk/{id}', [AdminController::class, 'postEditProduk'])->name('postEditProduk');
    Route::post('/postTambahpemesanan', [AdminController::class, 'postTambahpemesanan'])->name('postTambahpemesanan');
    Route::post('/postTambahudang', [AdminController::class, 'postTambahudang'])->name('posttambahudang');
    Route::post('/postedituser/{id}', [navbar::class, 'postedituser'])->name('postedituser');

    Route::group(['middleware' => ['auth', 'checklevel:user', 'web']], function (){

    Route::get('/user/home', [loginregister::class, 'userHome'])->name('user.home');
    Route::get('/user/product',[navbar::class, 'product'])->name('user.product');
    Route::get('/user/product1',[navbar::class, 'product1'])->name('user.product1');
    Route::get('/user/product2',[navbar::class, 'product2'])->name('user.product2');

    Route::get('/user/profil', [navbar::class, 'profil'])->name('user.profil');
    Route::get('/user/edituser/{id}', [navbar::class, 'edituser'])->name('user.edituser');



    //Route::get('/user/keranjang/{id}',[navbar::class, 'keranjang'])->name('user.keranjang');
    Route::get('/user/jenis_ikan',[navbar::class, 'jenis_ikan'])->name('user.jenis_ikan');
    Route::get('/user/jenis_ikan1',[navbar::class, 'jenis_ikan1'])->name('user.jenis_ikan1');
    Route::get('/user/jenis_ikan2',[navbar::class, 'jenis_ikan2'])->name('user.jenis_ikan2');
    Route::get('/user/jenis_udang',[navbar::class, 'jenis_udang'])->name('user.jenis_udang');
    Route::get('/user/kontak', [navbar::class, 'kontak'])->name('user.kontak');
    //Route::post('/contact/send', 'ContactController@send')->name('contact.send');
    Route::post('/simpanpesanan', [navbar::class, 'simpanPesanan'])->name('simpan-pemesanan');
    //Route::any('/user/kontak', [EmailController::class, 'sendMail'])->name('user.sendMail');

    //Route::get('/user/kontak', [EmailController::class, 'sendMail'])->name('user.sendMail');
    //Route::post('/send-mail', [EmailController::class, 'sendMail'])->name('user.sendMail');
    //Route::get('/user/keranjang/{id}', [PemesananController::class, 'keranjang'])->name('user.keranjang');
    

    
});
    
    Route::get('/user/keranjang/{id}', [navbar::class, 'keranjang'])->name('user.keranjang');

    //Route::post('/addToCart/{id}', [CartController::class, 'addToCart'])->name('user.addToCart');

    Route::get('/product', 'ProductController@showProductPage');



Route::get('/logout', [loginregister::class, 'logout'])->name('logout');



//Route::get('/', function () {return view('home');});

    //Route::get('/auth/login', [loginregister::class, 'login'])->name('auth.login');
    //Route::get('/auth/register', [loginregister::class, 'register'])->name('auth.register');

//Route::get('/user/edituser', function () {return view('user/edituser');});

/*Route::get('/user/product', function () {return view('user/product');});

Route::get('/user/product1', function () {return view('user/product1');});

Route::get('/user/product2', function () {return view('user/product2');});

Route::get('/auth/login', function () {return view('auth/login');});

Route::get('/auth/register', function () {return view('auth/register');});

Route::get('/product', function () {return view('/user/product');});


Route::post('/postregister', [loginregister::class, 'postregister'])->name('postregister');
Route::get('/logout', [loginregister::class, 'logout'])->name('logout');


Route::get('/auth/login', [loginregister::class, 'login'])->name('auth.login');

Route::get('/auth/register', [loginregister::class, 'register'])->name('auth.register');

Route::get('/user/home', [loginregister::class, 'userHome'])->name('user.home');

Route::get('/admin/home', [loginregister::class, 'adminHome'])->name('admin.home');*/
