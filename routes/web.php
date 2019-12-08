<?php

Route::get('/',[
    	'uses'	=> 'SubaController@index',
    	'as'	=> '/'
    	]);
Route::get('/category-product/{id}',[
    	'uses'	=> 'SubaController@categoryProduct',
    	'as'	=> 'category-product'
    	]);

Route::get('/product-details/{id}/{name}',[
    	'uses'	=> 'SubaController@productDetails',
    	'as'	=> 'product-details'
    	]);
/* Cart Info */
Route::post('/cart/add',[
    	'uses'	=> 'CartController@addToCart',
    	'as'	=> 'add-to-cart'
    	]);
Route::get('/cart/show',[
    	'uses'	=> 'CartController@showCart',
    	'as'	=> 'show-cart'
    	]);
Route::get('/cart/delete/{id}',[
    	'uses'	=> 'CartController@deleteCart',
    	'as'	=> 'delete-cart-item'
    	]);
Route::post('/cart/update',[
    	'uses'	=> 'CartController@updateCart',
    	'as'	=> 'update-cart'
    	]);
Route::get('/checkout',[
    	'uses'	=> 'CheckoutController@index',
    	'as'	=> 'checkout'
    	]);
/* End Cart Info */

/* Customer Info */
Route::post('/customer/register',[
    	'uses'	=> 'CheckoutController@customerSignUp',
    	'as'	=> 'customer-sinup-form'
    	]);
Route::get('/customer/login',[
    	'uses'	=> 'CheckoutController@customerLoginIndex',
    	'as'	=> 'sign-in'
    	]);
Route::get('/customer/new-login',[
        'uses'  => 'CheckoutController@newCustomerLogin',
        'as'    => 'customer-login'
        ]);

Route::post('/customer/new-save',[
        'uses'  => 'CheckoutController@newCustomerLoginIndex',
        'as'    => 'new-customer-login'
        ]);

Route::post('/customer/logout',[
        'uses'  => 'CheckoutController@customerLogout',
        'as'    => 'customer-logout'
        ]);
Route::post('/customer/save',[
        'uses'  => 'CheckoutController@customerLogin',
        'as'    => 'customer-login-form'
        ]);

Route::get('/ajax-email-check/{id}',[
        'uses'  => 'CheckoutController@ajaxEmailCheck',
        'as'    => 'ajax-email-check'
        ]);

/* End Customer Info */

/* Shipping Info */
Route::get('/checkout/shipping',[
        'uses'  => 'CheckoutController@shippingForm',
        'as'    => 'checkout-shipping'
        ]);
Route::post('/shipping/save',[
        'uses'  => 'CheckoutController@saveShippingInfo',
        'as'    => 'new-shipping'
        ]);
/* End Shipping Info */

/* Order Save Info */
Route::post('/checkout/order',[
        'uses'  => 'CheckoutController@newOrder',
        'as'    => 'new-order'
        ]);

/* End Order Save Info */
/* Payment Info */
Route::get('/checkout/payment',[
        'uses'  => 'CheckoutController@paymentForm',
        'as'    => 'checkout-payment'
        ]);
Route::get('/complete/order',[
        'uses'  => 'CheckoutController@completeOrder',
        'as'    => 'complete-order'
        ]);
/* End Payment Info */
Route::get('/contact-us', [
	'uses' => 'SubaController@contactUs',
	'as' => 'contact-us'
	]);
Route::get('/about-us', [
	'uses' => 'SubaController@aboutUs',
	'as' => 'about-us'
	]);
Route::get('/frequently-question',[
	'uses' => 'SubaController@frequentlyQuestion',
	'as'   =>'frequently-question'
	]);

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

/* Category Info */

Route::group(['middleware' => 'CheckLoginUser'], function () {
   
Route::get('/category/add', 'CategoryController@createCategory')->name('createCategory');
Route::post('/category/save', 'CategoryController@storeCategory')->name('storeCategory');
/*Route::get('/category/manage', 'CategoryController@manageCategory')->name('manageCategory');*/
Route::get('/category/manage',[
'uses'  =>  'CategoryController@manageCategory',
'as'    =>  'category-manage'
]);

Route::get('/category/unpublished/{id}',[
'uses'  =>  'CategoryController@unpublishedCategory',
'as'    =>  'unpublished-category'
]);

Route::get('/category/published/{id}',[
'uses'  =>  'CategoryController@publishedCategory',
'as'    =>  'published-category'
]);

Route::get('/category/edit/{id}',[
'uses'  =>  'CategoryController@editCategory',
'as'    =>  'edit-category'
]);

Route::post('/category/update',[
'uses'  =>  'CategoryController@updateCategory',
'as'    =>  'update-category'
]);

Route::get('/category/delete/{id}',[
'uses'  =>  'CategoryController@deleteCategory',
'as'    =>  'delete-category'
]);

});

/* End Category Info */



/* Brand Info */

Route::group(['middleware' => 'CheckLoginUser'], function () {

Route::get('/brand/add',[
'uses'  =>  'BrandController@index',
'as'    =>  'add-brand'
]);

Route::post('/brand/save',[
'uses'  =>  'BrandController@saveBrand',
'as'    =>  'new-brand'
]);

});
/* End Brand Info */

/* Root Category Info */

Route::group(['middleware' => 'CheckLoginUser'], function () {

Route::get('/root/add',[
'uses'  =>  'RootController@index',
'as'    =>  'root-category-add'
]);

Route::post('/root/save',[
'uses'  =>  'RootController@saveRoot',
'as'    =>  'new-root'
]);
Route::get('/root/manage',[
'uses'  =>  'RootController@manageRootCategory',
'as'    =>  'root-category-manage'
]);



Route::get('/root/unpublished/{id}',[
'uses'  =>  'RootController@unpublishedRoot',
'as'    =>  'unpublished-root'
]);

Route::get('/root/published/{id}',[
'uses'  =>  'RootController@publishedRoot',
'as'    =>  'published-root'
]);

Route::get('/root/edit/{id}',[
'uses'  =>  'RootController@editRoot',
'as'    =>  'edit-root'
]);

Route::post('/root/update',[
'uses'  =>  'RootController@updateRoot',
'as'    =>  'update-root'
]);

Route::get('/root/delete/{id}',[
'uses'  =>  'RootController@deleteRoot',
'as'    =>  'delete-root'
]);





});

/* End Root Info */

/* Slider Info */

Route::get('/slider/add',[
'uses'  =>  'SliderController@index',
'as'    =>  'add-slider'
]);

Route::post('/slider/save',[
'uses'  =>  'SliderController@saveSlider',
'as'    =>  'new-slider'
]);

Route::get('/slider/manage',[
'uses'  =>  'SliderController@manageSlider',
'as'    =>  'sleder-manage'
]);
Route::get('/slider/unpublished/{id}',[
'uses'  =>  'SliderController@unpublishedSlider',
'as'    =>  'unpublished-slider'
]);

Route::get('/slider/published/{id}',[
'uses'  =>  'SliderController@publishedSlider',
'as'    =>  'published-slider'
]);

Route::get('/slider/delete/{id}',[
'uses'  =>  'SliderController@deleteSlider',
'as'    =>  'delete-slider'
]);
/* End Slider Info */


/* Product Info */

Route::group(['middleware' => 'CheckLoginUser'], function () {

Route::get('/product/add',[
'uses'  =>  'ProductController@index',
'as'    =>  'add-product'
]);

Route::post('/product/save',[
'uses'  =>  'ProductController@saveProduct',
'as'    =>  'new-product'
]);

Route::get('/product/manage',[
'uses'  =>  'ProductController@manageProduct',
'as'    =>  'product-manage'
]);

Route::get('/product/edit/{id}',[
'uses'  =>  'ProductController@editProduct',
'as'    =>  'edit-product'
]);
Route::get('/product/unpublished/{id}',[
'uses'  =>  'ProductController@unpublishedProduct',
'as'    =>  'unpublished-product'
]);

Route::get('/product/published/{id}',[
'uses'  =>  'ProductController@publishedProduct',
'as'    =>  'published-product'
]);
Route::post('/product/update',[
'uses'  =>  'ProductController@updateProduct',
'as'    =>  'update-product'
]);
Route::get('/product/delete/{id}',[
'uses'  =>  'ProductController@deleteProduct',
'as'    =>  'delete-product'
]);

});

/* End Product Info */

/* Manage Order */

Route::group(['middleware' => 'CheckLoginUser'], function () {

Route::get('/order/manage-order',[
'uses'  =>  'OrderController@manageOrderInfo',
'as'    =>  'manage-order'
]);
Route::get('/order/view-order-details/{id}',[
'uses'  =>  'OrderController@vieOrderDetails',
'as'    =>  'view-order-details'
]);
Route::get('/order/view-order-invoice/{id}',[
'uses'  =>  'OrderController@vieOrderInvoice',
'as'    =>  'view-order-invoice'
]);
Route::get('/order/download-order-invoice/{id}',[
'uses'  =>  'OrderController@downloadOrderInvoice',
'as'    =>  'download-order-invoice'
]);

});


/* End Manage Order */