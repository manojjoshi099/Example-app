<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\AdminAuthController;

// use App\Http\Controllers\CategoryController;

Route::get('/new-login', function () {
    return "login";
});




// Route::view('post','/post');
Route :: get('/post',function(){
    return view('post');
});
Route:: get('/post/firstpost',function(){
    return"<h1>hello world</h1>";
});

Route::get('/items',[ItemController::class, 'index']);
Route::get('/',[ItemController::class, 'welcome']);
Route::get('/items/view',[ItemController::class, 'view']);
Route::get('/items/{item}/show',[ItemController::class, 'show']);


// Route For navbar section 
Route::get('/home',[ItemController::class, 'welcome'])->name('welcome');
Route::get('/menu',[ItemController::class, 'menu'])->name('menu');
Route::get('/reservation',[ItemController::class, 'reservation'])->name('reservation');
Route::get('/offers',[ItemController::class, 'offers'])->name('offers');
Route::get('/contact',[ItemController::class, 'contact'])->name('contact');

//Resourceful route
//Route::resource('/items', ItemController::class);


//for table views
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::resource('users', UserController::class);

// for Registration 
Route::post('register/store', [AuthController::class, 'store']);
Route::get('/register/create', [AuthController::class, 'create'])->name('register.create');
Route::get('/register', [AuthController::class, 'index'])->name('register');
Route::put('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');



// Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    
//     Route::get('/admin',[CategoryController::class, 'index'])->name('admin.index');
//     Route::get('/admin/index',[CategoryController::class, 'index'])->name('admin.index');
//     Route::get('/admin',[CategoryController::class, 'index'])->name('categories.index');
// });
// Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
// // Route::get('/admin/login', function () {
// //     return view('admin.login');
// // }) ->name('admin.login');

// Route::resource('categories', CategoryController::class);
// Route::get('/admin/create',[CategoryController::class, 'create'])->name('categories.create');
// Route::post('/admin/store',[CategoryController::class, 'store'])->name('categories.store');
// Route::get('/admin/{category}/edit',[CategoryController::class, 'edit'])->name('categories.edit');
// Route::put('/admin/{category}',[CategoryController::class, 'update'])->name('categories.update');
// Route::delete('/admin/{category}/index',[CategoryController::class, 'destroy'])->name('categories.destroy');
// Route::get('/admin/{category}',[CategoryController::class, 'show'])->name('categories.show');



// Route::get('/admin/menu_items', [MenuItemController::class,'index'])->name('menu-items.index');
// Route::get('/admin/menu_items/create', [MenuItemController::class,'create']) ->name('menu-items.create');
// Route::post('/admin/menu_items/store', [MenuItemController::class,'store'])->name('menu-items.store');
// Route::get('/admin/menu_items/{menuItem}/edit', [MenuItemController::class,'edit'])->name('menu-items.edit');
// Route::put('admin/menu_items/{menuItem}', [MenuItemController::class,'update'])->name('menu-items.update');
// Route::delete('admin/menu_items/{menuItem}', [MenuItemController::class,'destroy'])->name('menu-items.destroy');






// Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
// Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// // Protected admin routes
// Route::get('/admin', function () {
//     return redirect()->route('admin.login');
// });

//     Route::middleware(['admin.auth'])->group(function () {
//     Route::get('/admin/index', function () {
//         return view('admin.dashboard'); // 👈 Make sure this Blade file exists
//     });
// });



// Route::get('/admin', function () {
//     // return view('admin.login'); // Redirect to the login page if not authenticated
//     return redirect()->route('admin.login');
// });
// Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
// Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
// Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
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



Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
Route::get('/admin', function () {
    return redirect()->route('admin.login');
});
Route::prefix('admin')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('admin.index');
    Route::get('/index', [CategoryController::class, 'index'])->name('admin.index');
    Route::resource('categories', CategoryController::class)->except(['create', 'store', 'edit', 'update', 'destroy', 'show']);
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/{category}/index', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show');

    Route::resource('menu_items', MenuItemController::class)->except(['create', 'store', 'edit', 'update', 'destroy']);
    Route::get('/menu_items/create', [MenuItemController::class, 'create'])->name('menu-items.create');
    Route::post('/menu_items/store', [MenuItemController::class, 'store'])->name('menu-items.store');
    Route::get('/menu_items/{menuItem}/edit', [MenuItemController::class, 'edit'])->name('menu-items.edit');
    Route::put('menu_items/{menuItem}', [MenuItemController::class, 'update'])->name('menu-items.update');
    Route::delete('menu_items/{menuItem}', [MenuItemController::class, 'destroy'])->name('menu-items.destroy');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});
