<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;

Route::middleware(['admin'])->group(function () {
   Route::get('admin/dashboard', [BackendController::class,'dashboard']);
   Route::get('admin/login',[BackendController::class, 'login']);
   Route::post('admin/login',[BackendController::class,'loggedIn']);
   Route::get('admin/logout',[BackendController::class,'logout']);
   //category routes
   Route::get('admin/categories',[BackendController::class,'Category']);
   Route::post('admin/categorystore',[BackendController::class,'CategoryStore']);
   Route::get('admin/categorylist',[BackendController::class,'CategoryList']);
   Route::get('admin/categoryedit/{id}',[BackendController::class,'CategoryEdit']);
   Route::post('admin/CategoryUpdate',[BackendController::class,'CategoryUpdate']);
   Route::get('admin/categorydelete/{id}',[BackendController::class,'CategoryDelete']);
   Route::get('admin/categorystatus/{id}',[BackendController::class,'CategoryStatus']);
   
      //Author routes
      Route::get('admin/addauthor',[BackendController::class,'AddAuthor']);
      Route::post('admin/storeauthor',[BackendController::class,'StoreAuthor']);
      Route::get('admin/authorlist',[BackendController::class,'AuthorList']);
      Route::get('admin/authordelete/{id}',[BackendController::class,'AuthorDelete']);
   
      //Book
      Route::get('admin/addbook',[BackendController::class,'AddBook']);
      Route::post('admin/bookstore',[BackendController::class,'BookStore']);
      Route::get('admin/booklist',[BackendController::class,'BookList']);
      Route::get('admin/bookedit/{id}',[BackendController::class,'BookEdit']);
      Route::post('admin/bookupdate/{id}',[BackendController::class,'BookUpdate']);
      Route::get('admin/bookdelete/{id}',[BackendController::class,'BookDelete']);
      Route::get('admin/bookstatus/{id}',[BackendController::class,'BookStatus']);

      //borrow
      Route::get('admin/borrow',[BackendController::class,'Borrow']);
      Route::get('admin/rejected/{id}',[BackendController::class,'Rejected']);
      Route::get('admin/returned/{id}',[BackendController::class,'Returned']);
      Route::get('admin/approved/{id}',[BackendController::class,'Approved']);

      //Users
      Route::get('admin/users',[BackendController::class,'Users']);
      Route::get('admin/userstatus/{id}', [BackendController::class,'UserStatus']);
      Route::get('admin/userdelete/{id}', [BackendController::class,'UserDelete']);
      
   });
Route::get('/',[FrontendController::class,'Index']);
Route::get('explore',[FrontendController::class,'Explore']);
Route::get('categories/{id}',[FrontendController::class,'CategoryData']);
Route::get('search',[FrontendController::class,'Search']);
Route::get('book/{id}/{slug}',[FrontendController::class,'BookDetail']);
Route::get('login',[FrontendController::class,'Login']);
Route::get('logout/',[FrontendController::class,'Logout']);

Route::get('signup',[FrontendController::class,'Signup']);
Route::post('register',[FrontendController::class,'Register']);
Route::get('loggedin',[FrontendController::class,'LoggedIn']);
Route::get('request',[FrontendController::class,'Request']);
Route::post('/borrow', [FrontendController::class, 'ApplyBorrow'])->name('borrow.store');
Route::get('cancel/{id}',[FrontendController::class,'Cancel']);

