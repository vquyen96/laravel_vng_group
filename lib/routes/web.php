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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace'=>'Admin'], function(){
	Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
		Route::get('/','LoginController@getLogin');
		Route::post('/','LoginController@postLogin');
		

	});

	Route::get('logout','LoginController@getLogout');

	Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'], function(){
		Route::get('/','AboutController@getList');

		Route::group(['prefix'=>'account'],function(){
			Route::get('/','AccountController@getList');
			Route::post('/','AccountController@postAdd');
			Route::get('edit/{id}','AccountController@getEdit');
			Route::post('edit/{id}','AccountController@postEdit');
			Route::get('delete/{id}','AccountController@getDelete');
		});
		Route::group(['prefix'=>'home'],function(){
			Route::get('/', 'HomeController@getHome');
			Route::get('detail/{name}','HomeController@getList');
			Route::post('detail/{name}','HomeController@postEdit');
			Route::get('delete/{id}','HomeController@getDelete');
		});
		Route::group(['prefix'=>'about'],function(){
			Route::get('letter','AboutController@getLetter');
			Route::post('letter/{id}','AboutController@postAbout');
			Route::get('history','AboutController@getHistory');
			Route::post('history/{id}','AboutController@postAbout');
			Route::post('add/history','AboutController@postHistoryAdd');
			Route::get('delete/history/{id}','AboutController@getHistoryDelete');

			Route::get('vision','AboutController@getVision');
			Route::post('vision/{id}','AboutController@postAbout');
			Route::get('cultural','AboutController@getCultural');
			Route::post('cultural/{id}','AboutController@postAbout');
			Route::get('ceo','AboutController@getCEO');
			Route::post('ceo/{id}','AboutController@postAbout');
		});
		Route::group(['prefix'=>'project'],function(){
			Route::get('/','ProjectController@getList');
			
			Route::get('add','ProjectController@getAdd');
			Route::post('add','ProjectController@postAdd');

			Route::get('edit/{id}','ProjectController@getEdit');
			Route::post('edit/{id}','ProjectController@postEdit');
			Route::get('delete/{id}','ProjectController@getDelete');
		});
		// Route::group(['prefix'=>'member'],function(){
		// 	Route::get('/','MemberController@getList');
		// 	Route::post('/','MemberController@postAdd');
		// 	Route::get('edit/{id}','MemberController@getEdit');
		// 	Route::post('edit/{id}','MemberController@postEdit');
		// 	Route::get('delete/{id}','MemberController@getDelete');
		// });
		// Route::group(['prefix'=>'image'],function(){
		// 	Route::get('/','ImageController@getHome');
		// 	Route::get('edit/{id}','ImageController@getEdit');
		// 	Route::post('edit/{id}','ImageController@postEdit');
		// });
		
		Route::group(['prefix'=>'news'],function(){
			Route::get('/','NewsController@getHome');
			Route::get('detail/{name}','NewsController@getList');
			Route::get('add','NewsController@getAdd');
			Route::post('add','NewsController@postAdd');
			Route::get('edit/{id}','NewsController@getEdit');
			Route::post('edit/{id}','NewsController@postEdit');
			Route::get('delete','NewsController@getDelete');
		});
		Route::group(['prefix'=>'video'],function(){
			Route::get('/','VideoController@getList');
			Route::post('/','VideoController@postAdd');
			Route::get('edit/{id}','VideoController@getEdit');
			Route::post('edit/{id}','VideoController@postEdit');
			Route::get('delete','VideoController@getDelete');
		});
		
		Route::group(['prefix'=>'contact'],function(){
			Route::get('/','ContactController@getHome');
			Route::get('top','ContactController@getTop');
			Route::post('top','ContactController@postTop');
			Route::get('mid','ContactController@getMid');
			Route::post('mid','ContactController@postMid');
			Route::get('bot','ContactController@getBot');
			Route::post('bot','ContactController@postBot');

			Route::get('list', 'ListContact@getList');
			Route::post('add', 'ListContact@postAdd');
			Route::get('delete/{id}', 'ListContact@delete');
		});
		
	});
});

Route::group(['namespace'=>'Frontend'], function(){
	Route::get('/', 'HomeController@getHome');
	Route::get('overview', 'HomeController@getOverView');
	Route::get('project', 'HomeController@getProject');
	Route::get('project/detail/{slug}', 'HomeController@getProjectDetail');
	Route::get('qhdt', 'HomeController@getQHDT');
	Route::get('news', 'HomeController@getNews');
	Route::get('news/detail/{slug}', 'HomeController@getNewsDetail');
	Route::get('video/detail/{slug}', 'HomeController@getVideoDetail');
	Route::get('recruit', 'HomeController@getRecruit');
	Route::get('contact', 'HomeController@getContact');

});