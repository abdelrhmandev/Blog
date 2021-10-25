<?php

// Route
Route::get('/', 'HomeController@index')->name('admin.dashboard');

// /*
//  Muli Languages Application Handle
// */
// Route::resource('languages','LanguageController'); // Language

// Route::get('/form/add', function(){
//     return view('admin.forms.add');
// });

// Route::resource('posts','PostController'); // Post

 
// Menu Management
 Route::post('/create-menu',[App\Http\Controllers\admin\MenuController::class,'store'])->name('create-menu');	
Route::get('/manage-menus/{id?}',[App\Http\Controllers\admin\menuController::class,'index'])->name('manage-menus');	
Route::get('/add-page-to-menu',[App\Http\Controllers\admin\MenuController::class,'addpageToMenu'])->name('add-page-to-menu');
Route::post('/add-custom-link',[App\Http\Controllers\admin\MenuController::class,'addCustomLink'])->name('add-custom-link');	
Route::post('update-menu',[App\Http\Controllers\admin\MenuController::class,'updateMenu'])->name('update-menu');	
Route::post('update-menuitem/{id}',[App\Http\Controllers\admin\MenuController::class,'updateMenuItem'])->name('update-menuitem');
Route::get('delete-menuitem/{id}/{key}/{in?}',[App\Http\Controllers\admin\MenuController::class,'deleteMenuItem'])->name('delete-menuitem');	
Route::get('delete-menu/{id}',[App\Http\Controllers\admin\MenuController::class,'destroy'])->name('delete-menu');	
 

 
//Route::get('wmenuindex', array('uses'=>'\Harimayco\Menu\Controllers\MenuController@wmenuindex'));
// $path = rtrim(config('menu.route_path'));
// Route::post($path . '/addcustommenu', array('as' => 'haddcustommenu', 'uses' => '\Harimayco\Menu\Controllers\MenuController@addcustommenu'));
// Route::post($path . '/deleteitemmenu', array('as' => 'hdeleteitemmenu', 'uses' => '\Harimayco\Menu\Controllers\MenuController@deleteitemmenu'));
// Route::post($path . '/deletemenug', array('as' => 'hdeletemenug', 'uses' => '\Harimayco\Menu\Controllers\MenuController@deletemenug'));
// Route::post($path . '/createnewmenu', array('as' => 'hcreatenewmenu', 'uses' => '\Harimayco\Menu\Controllers\MenuController@createnewmenu'));
// Route::post($path . '/generatemenucontrol', array('as' => 'hgeneratemenucontrol', 'uses' => '\Harimayco\Menu\Controllers\MenuController@generatemenucontrol'));
// Route::post($path . '/updateitem', array('as' => 'hupdateitem', 'uses' => '\Harimayco\Menu\Controllers\MenuController@updateitem'));


// End Of Menu Management


Route::resource('pages','PageController');// Pages


// Route::resource('banners','BannerController');// Bnnner
// Route::resource('users','UserController');// Banner
// Route::get('profile','AdminController@profile')->name('admin-profile'); // Profile
// Route::post('/profile/{id}','AdminController@profileUpdate')->name('profile-update'); // Profile Update
// Route::resource('products-categories','ProductCategoryController'); // Product Categories
// Route::resource('products','ProductController');// Product
// Route::resource('post-category','PostCategoryController'); // POST category

// Route::resource('posts-tags','PostTagController'); // Post tag



// Route::resource(LaravelLocalization::transRoute('routes.posts'),'PostController'); // Post

// Route::resource('faqs','FaqController');// faqs
//Route::resource('messages','MessageController'); // Message
//Route::get('/messages/five','MessageController@messageFive')->name('messages.five'); 




/* Ecommerce Rotues */
// Route::resource('orders','OrderController'); // Order
// Route::resource('shippings','ShippingController'); // Shipping
// Route::resource('coupons','CouponController'); // Coupon
// Route::resource('brands','BrandController');// Brands


// Route::get('settings','AdminController@settings')->name('settings'); // Settings
?>