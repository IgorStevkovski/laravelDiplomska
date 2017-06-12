<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'uses'=>'ProductController@getIndex',
    'as'=>'product.index'
]);

Route::get('/mens',[
   'uses'=>'ProductController@getMens',
    'as'=>'product.mens'
]);

Route::get('/womens',[
    'uses'=>'ProductController@getWomens',
    'as'=>'product.womens'
]);

Route::get('/kids',[
    'uses'=>'ProductController@getKids',
    'as'=>'product.kids'
]);

Route::get('/brand/{name}',[
    'uses'=>'ProductController@getBrandProducts',
    'as'=>'product.getBrandProduct'
]);

Route::get('/sorted-products',[
    'uses'=>'ProductController@getSortedProducts',
    'as'=>'product.getSortedProducts'
]);

Route::post('/sorted-products', [
   'uses'=>'ProductController@postSortedProducts',
    'as'=>'product.postSortedProducts'
]);


//Route::match(['get', 'post'],
//    'sorted-products', [
//        'uses' => 'ProductController@getSortedProducts',
//        'as' => 'product.getSortedProducts']
//);

Route::get('/add-to-cart/{id}',[
    'uses'=>'ProductController@getAddToCart',
    'as'=>'product.addToCart'
]);

Route::get('/reduce/{id}',[
    'uses'=>'ProductController@getReduceByOne',
    'as'=>'product.reduceByOne'
]);

Route::get('/remove/{id}',[
    'uses'=>'ProductController@getRemoveItem',
    'as'=>'product.remove'
]);

Route::get('/shopping-cart',[
    'uses'=>'ProductController@getCart',
    'as'=>'product.shoppingCart'
]);

Route::get('/checkout',[
    'uses'=>'ProductController@getCheckout',
    'as'=>'checkout',
    'middleware'=>'auth'
]);

Route::post('/checkout',[
    'uses'=>'Productcontroller@postCheckout',
    'as'=>'checkout',
    'middleware'=>'auth'
]);

Route::get('/one-product/{id}',[
    'uses'=>'ProductController@getOneProduct',
    'as'=>'product.oneProduct'
]);

Route::group(['prefix'=>'user'], function() {
    Route::get('/signup', [
        'uses' => 'UserController@getSignup',
        'as' => 'user.signup',
        'middleware' => 'guest'
    ]);

    Route::post('/signup', [
        'uses' => 'UserController@postSignup',
        'as' => 'user.signup',
        'middleware' => 'guest'
    ]);

    Route::get('/signin',[
        'uses'=>'UserController@getSignin',
        'as'=>'user.signin',
        'middleware'=>'guest'
    ]);

    Route::post('/signin',[
        'uses'=>'UserController@postSignin',
        'as'=>'user.signin',
        'middleware'=>'guest'
    ]);

    Route::get('/profile',[
        'uses'=>'UserController@getProfile',
        'as'=>'user.profile',
        'middleware'=>'auth'
    ]);

    Route::get('/logout', [
        'uses'=>'UserController@getLogout',
        'as'=>'user.logout',
        'middleware'=>'auth'
    ]);
});

//Admin routes
Route::get('/admin/products',[
   'uses'=>'AdminController@getAdminProducts',
    'as'=>'admin.getProducts',
    'middleware'=>['isAdmin']                    //'middleware'=>['auth','isAdmin']
]);

Route::get('/admin/products/delete/{id}',[
    'uses'=>'AdminController@getDeleteAdminProduct',
    'as'=>'admin.getDeleteProduct',
    'middleware'=>'isAdmin'
]);

Route::get('/admin/products/edit/{id}',[
    'uses'=>'AdminController@getEditAdminProduct',
    'as'=>'admin.getEditProduct',
    'middleware'=>'isAdmin'
]);

Route::post('/admin/products/edit/{id}',[
    'uses'=>'AdminController@postEditAdminProduct',
    'as'=>'admin.getEditProduct',
    'middleware'=>'isAdmin'
]);

Route::get('/admin/addProduct',[
    'uses'=>'AdminController@getAddProduct',
    'as'=>'admin.getAddProduct',
    'middleware'=>'isAdmin'
]);

Route::post('/admin/addProduct',[
    'uses'=>'AdminController@postAddProduct',
    'as'=>'admin.getAddProduct',
    'middleware'=>'isAdmin'
]);