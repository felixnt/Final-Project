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
use App\Post;

Route::get('/', 'FrontController@index');

Route::get('/menu', 'FrontController@menu');

Route::get('/about', 'FrontController@about');

Route::get('/gallery', 'FrontController@gallery');

Route::get('/contact', 'FrontController@contact');

Route::get('/dietplan', 'FrontController@plan');

Route::get('/restaurant', 'FrontController@res');

Route::get('/menubuy', 'FrontController@menubuy');

Route::get('/payment', 'FrontController@payment');

//Route::get('/add', 'AdminController@add');



//Route::get('menu/prawn-tagliatelle', function () {
//    return view('menus.menu_prawntagliatelle');
//});

Route::get('/menu/prawn-tagliatelle', 'FoodsController@prawnt');

Route::get('/menu/choco-pancake', 'FoodsController@chocopancake');

Route::get('/menu/tumis-udang-sayur', 'FoodsController@tumisudangsayur');

Route::get('/menu/chicken-veggie-salad', 'FoodsController@chickenveggiesalad');

Route::get('/menu/pecel-khas-jawa', 'FoodsController@pecelkhasjawa');

Route::get('/menu/fruitbowl', 'FoodsController@fruitbowl');

Route::get('/menu/veggie-spring-roll', 'FoodsController@veggiespringroll');

Route::get('/menu/cookies-labu-siam', 'FoodsController@cookieslabusiam');

Route::get('/menu/watermelon-mojito', 'FoodsController@watermelonmojito');

Route::get('/menu/lemon-infused-water', 'FoodsController@lemoninfusedwater');

Route::get('/menu/mango-juice', 'FoodsController@mangojuice');

//backend route
//Menu Post

Route::get('addPost', 'AdminController@addPost')->middleware('checklogin');

Route::post('addMenu','crudController@insertData');

Route::get('deleteMenu/{id}','AdminController@deleteMenu')->middleware('checklogin');

Route::get('editMenu/{id}','AdminController@editMenu')->middleware('checklogin');

Route::post('updateMenu/{id}','crudController@updateMenu');

Route::get('allPost','AdminController@allPost')->middleware('checklogin');



Route::get('addRestaurant', 'AdminController@addRes')->middleware('checklogin');

Route::get('allRestaurant', 'AdminController@allRes')->middleware('checklogin');

Route::post('addRs','crudController@insertData');

Route::get('deleteRs/{id}','AdminController@deleteRestaurant')->middleware('checklogin');

Route::get('editRs/{id}','AdminController@editRestaurant')->middleware('checklogin');

Route::post('updateRs/{id}','crudController@updateMenu');
//

//Diet Post

Route::get('allDietplan','AdminController@allDiet')->middleware('checklogin');

Route::get('addDietplan', 'AdminController@addDiet')->middleware('checklogin');

Route::post('addDp','crudController@insertData');

Route::get('deleteDp/{id}','AdminController@deleteDiet')->middleware('checklogin');

Route::get('editDp/{id}','AdminController@editDiet')->middleware('checklogin');

Route::post('updateDp/{id}','crudController@updateMenu');
//

Route::get('addPostCategory','AdminController@addpostcats')->middleware('checklogin');

Route::get('deleteFc/{id}','AdminController@deleteFc')->middleware('checklogin');

Route::get('editFc/{id}','AdminController@editFc')->middleware('checklogin');

Route::post('addFc','crudController@insertData');
//end

Route::get('sendMessage','FrontController@sendMessage');

Route::get('allContact', 'AdminController@allContact')->middleware('checklogin');


Route::get('sendSubscribe','FrontController@sendSubscribe');

Route::get('allSubscribe', 'AdminController@allSubscribe')->middleware('checklogin');

///
Route::get('logAdmin', 'AdminController@logAdmin');

Route::post('checklog', 'AdminController@checklog');

Route::get('outAdmin', 'AdminController@outAdmin');
///

Route::get('/dietplan/monday', 'DietController@monday');

Route::get('/dietplan/tuesday', 'DietController@tuesday');

Route::get('/dietplan/wednesday', 'DietController@wednesday');

Route::get('/dietplan/thursday', 'DietController@thursday');

Route::get('/dietplan/friday', 'DietController@friday');

Route::get('/dietplan/saturday', 'DietController@saturday');

Route::get('/dietplan/sunday', 'DietController@sunday');



Route::get('/search', 'FrontController@search');

Route::get('/menu/search', 'FrontController@search');




Route::get('/map', 'FrontController@map');
