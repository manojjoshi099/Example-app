<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ReservationController;

// use App\Http\Controllers\CategoryController;

Route::get('/new-login', function () {
    return "login";
});


Route::get('/test', function () {
    return "success";
})->middleware('auth');




// Route::view('post','/post');
Route::get('/post', function () {
    return view('post');
});
Route::get('/post/firstpost', function () {
    return "<h1>hello world</h1>";
});

Route::get('/items', [ItemController::class, 'index']);
Route::get('/', [ItemController::class, 'welcome']);
Route::get('/items/view', [ItemController::class, 'view']);
Route::get('/items/{item}/show', [ItemController::class, 'show']);


// Route For navbar section 
Route::get('/home', [ItemController::class, 'welcome'])->name('welcome');
Route::get('/menu', [ItemController::class, 'menu'])->name('menu');
Route::get('/reservation', [ItemController::class, 'reservation'])->name('reservation');
Route::get('/offers', [ItemController::class, 'offers'])->name('offers');
Route::get('/contact', [ItemController::class, 'contact'])->name('contact');

//Resourceful route
//Route::resource('/items', ItemController::class);





// for Registration 
// Route::post('register/store', [AuthController::class, 'store']);
// Route::get('/register/create', [AuthController::class, 'create'])->name('register.create');
// Route::get('/register', [AuthController::class, 'index'])->name('register');
// Route::put('/register', [AuthController::class, 'register'])->name('register.post');
// Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');



// Route::get('/admin', function () {
//     // return view('admin.login'); // Redirect to the login page if not authenticated
//     return redirect()->route('admin.login');
// });
// Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
// Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
// Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Route::middleware('admin')->prefix('admin')->group(function () {
//     Route::get('/', [CategoryController::class, 'index'])->name('admin.index');
//     Route::get('/index', [CategoryController::class, 'index'])->name('admin.index');
//     Route::resource('categories', CategoryController::class)->except(['create', 'store', 'edit', 'update', 'destroy', 'show']);
//     Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
//     Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
//     Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
//     Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
//     Route::delete('/{category}/index', [CategoryController::class, 'destroy'])->name('categories.destroy');
//     Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show');

//     Route::resource('menu_items', MenuItemController::class)->except(['create', 'store', 'edit', 'update', 'destroy']);
//     Route::get('/menu_items/create', [MenuItemController::class, 'create'])->name('menu-items.create');
//     Route::post('/menu_items/store', [MenuItemController::class, 'store'])->name('menu-items.store');
//     Route::get('/menu_items/{menuItem}/edit', [MenuItemController::class, 'edit'])->name('menu-items.edit');
//     Route::put('menu_items/{menuItem}', [MenuItemController::class, 'update'])->name('menu-items.update');
//     Route::delete('menu_items/{menuItem}', [MenuItemController::class, 'destroy'])->name('menu-items.destroy');

//     Route::get('/dashboard', function () { // Rename to something consistent
//         return view('admin.dashboard');
//     })->name('admin.dashboard');
// });



// Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
// Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
// Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
// Route::get('/admin', function () {
//     return redirect()->route('admin.login');
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/index', function () {return view('admin.category');})->name('admin.index');
//     Route::resource('categories', CategoryController::class)->except(['create', 'store', 'edit', 'update', 'destroy', 'show']);
//     Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
//     Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
//     Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
//     Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
//     Route::delete('/{category}/index', [CategoryController::class, 'destroy'])->name('categories.destroy');
//     Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show');

//     Route::resource('menu_items', MenuItemController::class)->except(['create', 'store', 'edit', 'update', 'destroy']);
//     Route::get('/menu_items/create', [MenuItemController::class, 'create'])->name('menu-items.create');
//     Route::post('/menu_items/store', [MenuItemController::class, 'store'])->name('menu-items.store');
//     Route::get('/menu_items/{menuItem}/edit', [MenuItemController::class, 'edit'])->name('menu-items.edit');
//     Route::put('menu_items/{menuItem}', [MenuItemController::class, 'update'])->name('menu-items.update');
//     Route::delete('menu_items/{menuItem}', [MenuItemController::class, 'destroy'])->name('menu-items.destroy');

//     Route::get('/dashboard', function () {
//             return view('admin.dashboard');
//         })->name('admin.dashboard');

//     });



Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
Route::get('/admin/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/admin/users', [UserController::class, 'store'])->name('users.store');
Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/admin/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::resource('users', UserController::class);


Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('admin/profile', function () {
    return view('admin.profile');
})->name('admin.profile');


Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', function () {
        return redirect()->route('admin.login');
    });

    Route::get('/menu_items', function () {
    });

    Route::get("/reservation", function () {
        // return "hello world";
        return view('admin.reservation');
    });

    // Route::get('/', [CategoryController::class, 'index'])->name('admin.index');
    // Route::get('/index', [CategoryController::class, 'index'])->name('admin.index');

    Route::resource('categories', CategoryController::class)->except(['create', 'store', 'edit', 'update', 'destroy', 'show']);
    Route::get('/index', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/{category}/index', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show');

    
    // Route::resource('menu_items', MenuItemController::class)->except(['create', 'store', 'edit', 'update', 'destroy']);
    Route::get('menu_items', [MenuItemController::class, 'index'])->name('menu_items.index');
    Route::get('/menu_items/create', [MenuItemController::class, 'create'])->name('menu_items.create');
    Route::post('/menu_items/store', [MenuItemController::class, 'store'])->name('menu_items.store');
    Route::get('/menu_items/{menuItem}/edit', [MenuItemController::class, 'edit'])->name('menu_items.edit');
    Route::put('/menu_items/{menuItem}', [MenuItemController::class, 'update'])->name('menu_items.update');
    Route::delete('/menu_items/{menuItem}', [MenuItemController::class, 'destroy'])->name('menu_items.destroy');

    // Route::get('/reservation',[ReservationController::class, 'index'])->name('reservation.index');


    // Route::get('/reservation',[ReservationController::class,'index'])->name('reservation.index');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});


