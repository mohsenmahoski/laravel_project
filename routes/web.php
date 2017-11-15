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



Auth::routes();
Route::group(['prefix' => 'admin'],function(){
   
    Route::get('/login' , 'Auth\AdminLoginController@showloginform')->name('admin.login');
    Route::post('/login' , 'Auth\AdminLoginController@index')->name('admin.login.submit'); 
    Route::get('/' , 'AdminController@index')->name('admin.dashboard');

     //messages
    Route::get('/messages', 'AdminController@users_messages')->name('users_messages');
    Route::post('/messages/{id}', 'AdminController@users_messages_delete')->name('users_messages_delete');
    //slider routes
    Route::resource('/carsoul' , 'CarsoulController' , ['except' => ['store']]);
    //posts routes
    Route::post('/carsoul/{id}' ,['uses' => 'CarsoulController@store' , 'as' => 'carsoul.store']);
    //tags routes 
    Route::resource('/tags' , 'TagController');
    //posts routes 
    Route::resource('/posts','PostController');
    //category routees
    Route::resource('categories' , 'CategoryController',['except' => 'create']);
    //comment routes
    Route::post('/comment/{id}' ,['uses' => 'CommentController@store' ,'as' => 'comment.store']);
    Route::get('/comment/{id}/edit' , ['uses' => 'CommentController@edit' ,'as' => 'comment.edit']);
    Route::put('/comment/{id}' , ['uses' => 'CommentController@update' ,'as' => 'comment.update']);
    Route::delete('/comment/{id}' , ['uses' => 'CommentController@destroy' ,'as' => 'comment.destroy']);
    //footer routes
     Route::resource('footer' , 'FooterController');


    //Admin Reset Password
    Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    //Shop Routs
    Route::resource('/products' , 'ProductController');
    Route::resource('/product/category' , 'ProductCategoryController');
    Route::resource('/sellers' , 'AdminSellerController');

    //ajax product categories
    Route::get('/get-product-category','ProductCategoryController@newcat');
    Route::get('/get-parent-category/{level}','ProductCategoryController@parent');
    Route::post('/createcategory','ProductCategoryController@createcategory')->name('createcategory');
    Route::post('/updatecategory','ProductCategoryController@updatecategory')->name('updatecategory');
    Route::post('/deletecategory','ProductCategoryController@deletecategory')->name('deletecategory');
});



//Seller Routes
Route::group(['prefix' => 'seller'],function(){
   Route::get('/login' , 'seller\SellerLoginController@showloginform')->name('seller.login');
   Route::post('/login' , 'seller\SellerLoginController@login')->name('seller.login.submit');
   Route::get( '/register' , 'RegisterSellerController@show_register_form' )->name('seller.register');
   Route::post( '/register' , 'RegisterSellerController@new_seller' )->name('seller.submit');
   Route::get('/' , 'seller\SellerController@index')->name('seller.dashboard');
    
   //ForgotPassword Routes
   Route::post('/password/email','Auth\SellerForgotPasswordController@sendResetLinkEmail')->name('seller.password.email');
   Route::get('/password/reset','Auth\SellerForgotPasswordController@showLinkRequestForm')->name('seller.password.request');
   Route::post('/password/reset','Auth\SellerResetPasswordController@reset');
   Route::get('password/reset/{token}','Auth\SellerResetPasswordController@showResetForm')->name('seller.password.reset');
});





Route::group(['prefix' => 'users' ] , function(){
	  Route::get('acount' , 'UserAcountController@index')->name('users.account');
});



Route::group(['middleware' => 'auth'] , function(){
	Route::get('user/{id}' ,['uses' => 'Auth\ResetPasswordController@getReset' , 'as' => 'password.change'] );
    Route::post('user/{id}' ,['uses' => 'Auth\ResetPasswordController@postReset' , 'as' => 'password.update'] );
});


Route::get('/blog',['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
Route::get('blog/{slug}',['as' => 'blog.single' ,'uses' => 'BlogController@getsingleblog'])->where('slug','[\w\d\_\-]+');
Route::get('/about_us','PagesController@getAbout')->name('about_us');
Route::get('/contact_us', ['uses' => 'PagesController@getContact' , 'as' => 'contact']);
Route::post('/contact', ['uses' => 'PagesController@postContact' , 'as' => 'contact']);
//Shop Routes
Route::group(['prefix' => 'shop' ] , function(){
    Route::get('/' , 'ShopController@index' )->name('shop');
    Route::get('/product/{slug}' , 'ShopController@show_product' )->name('product.show');
   
});
Route::get('/', 'PagesController@getIndex')->name('home');
Route::post('search','SearchController@index')->name('search');
Route::post('send_message' , 'PagesController@send_message')->name('send_message');
Route::post('subscribe' , 'PagesController@subscribe' )->name('subscribe');
Route::get('gethint/{str}' , 'PagesController@gethint' )->name('gethint');

Route::get('/test' , function(){
  return view('home2');
});
