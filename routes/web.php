<?php

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




Route::post('/company/store', 'CompanyController@store')->name('add-company');
Route::get('/company/show', 'CompanyController@show')->name('view-company');
Route::get('/company/edit/{id}', 'CompanyController@edit')->name('edit-company');
Route::post('/company/update', 'CompanyController@update')->name('update-company');
Route::get('/company/delete/{id}', 'CompanyController@destroy')->name('delete-company');


Route::get('/user/index', 'UserController@index')->name('new-user');
Route::post('/user/store', 'UserController@store')->name('add-user');
Route::get('/user/show', 'UserController@show')->name('view-user');


Route::get('/page/index', 'PageController@index')->name('new-page');
Route::get('/page/show', 'PageController@show')->name('view-page');
Route::post('/page/store', 'PageController@store')->name('add-page');
Route::get('/page/edit/{id}', 'PageController@edit')->name('edit-page');
Route::post('/page/update', 'PageController@update')->name('update-page');
Route::get('/page/destroy/{id}', 'PageController@destroy')->name('delete-page');


Route::get('/article/category/index', 'ArticleCategoryController@index')->name('article-category');
Route::get('/article/category/show', 'ArticleCategoryController@show')->name('view-article-category');
Route::post('/article/category/store', 'ArticleCategoryController@store')->name('add-article-category');
Route::get('/article/category/edit/{id}', 'ArticleCategoryController@edit')->name('edit-article-category');
Route::post('/article/category/update', 'ArticleCategoryController@update')->name('update-article-category');
Route::get('/article/category/delete/{id}', 'ArticleCategoryController@destroy')->name('delete-article-category');

Route::get('/article/sub/category/index', 'ArticleSubCategoryController@index')->name('article-sub-category');
Route::post('/article/sub/category/store', 'ArticleSubCategoryController@store')->name('add-article-sub-category');
Route::get('/article/sub/category/show', 'ArticleSubCategoryController@show')->name('view-article-sub-category');
Route::get('/article/sub/category/edit{id}', 'ArticleSubCategoryController@edit')->name('edit-article-sub-category');
Route::post('/article/sub/category/update', 'ArticleSubCategoryController@update')->name('update-article-sub-category');
Route::get('/article/sub/category/delete/{id}', 'ArticleSubCategoryController@destroy')->name('delete-article-sub-category');


Route::get('/news/body', 'ArticleSubCategoryController@news_body')->name('news-body');


//Route::get('/article/category/news', 'ArticleCategoryNewsController@index')->name('article-category-news');
//Route::get('/article/category/show', 'ArticleCategoryNewsController@show')->name('view-article-news');
//Route::post('/article/category/store', 'ArticleCategoryNewsController@store')->name('add-article-news');

Route::resource('article-category', 'ArticleCategoryNewsController');
Route::get('/article/news/category/delete/{id}', 'ArticleCategoryNewsController@destroy')->name('article-category-delete');

Route::resource('news','NewsController');
Route::get('news/delete/{id}', 'NewsController@destroy')->name('news-delete');


Route::resource('/','BusinessController');
Route::get('profile/login','BusinessController@profileLogin')->name('profile');
Route::get('profile/signup','BusinessController@profileSignup')->name('profile-signup');
Route::get('/profile','BusinessController@viewProfile');



Route::get('/profile/Dashboard','ProfileController@myProfile')->name('profile-dashboard');
Route::get('/profile/{id}/edit','ProfileController@profileCreate')->name('profile-edit');

Route::post('/profile/update','ProfileController@profileStore')->name('profile-store');


Route::post('/profile/login', 'Auth\LoginController@profileLogin');
Route::post('profile/signup', 'Auth\RegisterController@createProfile');

//Route::Post('profile/logout', 'Auth\LoginController@profileLogout')->name('profile-logout');

Route::view('/home', 'home')->middleware('auth');







Route::get('sadmin', function (){
    return view('auth.profile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
