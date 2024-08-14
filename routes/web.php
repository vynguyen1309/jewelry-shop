<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::middleware(AdminMiddleware::class)->prefix('admin')->group(function () {
    //--------------table users-------------
    //home
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/dashboard/users/listUsers', [UserController::class, 'listUsers'])->name('admin.userManagement.listUser');
    //create
    Route::get('/dashboard/users/createUser', [UserController::class, 'createForm'])->name('admin.userManagement.createForm');
    Route::post('/dashboard/users/createUser', [UserController::class, 'createUser'])->name('admin.userManagement.createUser');
    //edit
    Route::get('/dashboard/users/editUser/{user}', [UserController::class, 'editUser'])->name('admin.userManagement.editUser');
    Route::put('/dashboard/users/updateUser/{user}', [UserController::class, 'updateUser'])->name('admin.userManagement.updateUser');
    //delete
    Route::delete('/dashboard/users/delete/{user}', [UserController::class, 'deleteUser'])->name('admin.userManagement.deleteUser');
    //----------table products-------------
    //list
    Route::get('/dashboard/products/listProduct', [ProductController::class, 'listProduct'])->name('admin.productsManagement.listProduct');
    //create
    Route::get('/dashboard/products/create', [ProductController::class, 'createProForm'])->name('admin.productsManagement.createProForm');
    Route::post('/dashboard/products/create', [ProductController::class, 'createPro'])->name('admin.productsManagement.createPro');
    //edit
    Route::get('/dashboard/products/edit/{product}', [ProductController::class, 'editPro'])->name('admin.productsManagement.editPro');
    Route::put('/dashboard/products/update/{product}', [ProductController::class, 'updatePro'])->name('admin.productsManagement.updatePro');
    //delete
    Route::delete('/dashboard/products/delete/{product}', [ProductController::class, 'deletePro'])->name('admin.productsManagement.deletePro');

    //-------table category----------
    //list
    Route::get('/dashboard/categories/list', [CategoryController::class, 'listCate'])->name('admin.categoriesManagement.listCate');
        //create
    Route::get('/dashboard/categories/create', [CategoryController::class, 'createCateForm'])->name('admin.categoriesManagement.createCateForm');
    Route::post('/dashboard/categories/create', [CategoryController::class, 'createCate'])->name('admin.categoriesManagement.createCate');
    //delete
    Route::delete('/dashboard/categories/delete/{cate}', [CategoryController::class, 'deleteCate'])->name('admin.categoriesManagement.deleteCate');
    //edit
    Route::get('/dashboard/categories/edit/{cate}', [CategoryController::class, 'editCate'])->name('admin.categoriesManagement.editCate');
    Route::put('/dashboard/categories/update/{cate}', [CategoryController::class, 'updateCate'])->name('admin.categoriesManagement.updateCate');
});
//login + register
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'accLogin'])->name('accLogin');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'accRegister'])->name('accRegister');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
//home
Route::get('/', [ProductController::class, 'showNewProduct'])->name('users.home');
Route::get('/product/list', [ProductController::class, 'showProduct'])->name('users.listPro');
Route::get('/product/show-detail/{product}', [ProductController::class, 'showDetail'])->name('users.detailPro');
// Route::get('/product/search', [ProductController::class, 'search'])->name('search');
