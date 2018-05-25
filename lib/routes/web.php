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

Route::get('/', function () {
    return view('welcome');
});

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
		Route::group(['prefix'=>'about'],function(){
			Route::get('letter','AboutController@getLetter');
			Route::post('letter','AboutController@postLetter');
			Route::get('detail','AboutController@getDetail');
			Route::post('detail','AboutController@postDetail');
			Route::get('history','AboutController@getHistory');
			Route::post('history','AboutController@postHistory');
			Route::get('vision','AboutController@getVision');
			Route::post('vision','AboutController@postVision');
			Route::get('cultural','AboutController@getCultural');
			Route::post('cultural','AboutController@postCultural');
			Route::get('download','AboutController@getDownload');
			Route::post('download','AboutController@postDownload');
		});
		Route::group(['prefix'=>'project'],function(){
			Route::get('/','ProjectController@getList');
			Route::post('/','ProjectController@postAdd');
			Route::get('edit/{id}','ProjectController@getEdit');
			Route::post('edit/{id}','ProjectController@postEdit');
			Route::get('delete/{id}','ProjectController@getDelete');
		});
		Route::group(['prefix'=>'member'],function(){
			Route::get('/','MemberController@getList');
			Route::post('/','MemberController@postAdd');
			Route::get('edit/{id}','MemberController@getEdit');
			Route::post('edit/{id}','MemberController@postEdit');
			Route::get('delete/{id}','MemberController@getDelete');
		});
		Route::group(['prefix'=>'image'],function(){
			Route::get('/','ImageController@getHome');
			Route::get('edit/{id}','ImageController@getEdit');
			Route::post('edit/{id}','ImageController@postEdit');
		});
		Route::group(['prefix'=>'news'],function(){
			Route::get('/','NewsController@getList');
			Route::post('/','NewsController@postAdd');
			Route::get('edit/{id}','NewsController@getEdit');
			Route::post('edit/{id}','NewsController@postEdit');
			Route::get('delete/{id}','NewsController@getDelete');
		});
		Route::group(['prefix'=>'news'],function(){
			Route::get('/','NewsController@getHome');
			Route::get('vng','NewsController@getVNG');
			Route::post('vng','NewsController@postAdd');
			Route::get('project','NewsController@getProject');
			Route::post('project','NewsController@postAdd');
			Route::get('recruit','NewsController@getRecruit');
			Route::post('recruit','NewsController@postAdd');
			
			Route::get('edit/{id}','NewsController@getEdit');
			Route::post('edit/{id}','NewsController@postEdit');
			Route::get('delete','NewsController@getDelete');
		});

		Route::group(['prefix'=>'contact'],function(){
			Route::get('/','ContactController@getHome');
			Route::get('top','ContactController@getTop');
			Route::post('top','ContactController@postTop');
			Route::get('mid','ContactController@getMid');
			Route::post('mid','ContactController@postMid');
			Route::get('bot','ContactController@getBot');
			Route::post('bot','ContactController@postBot');
		});
	});
});

Route::group(['namespace'=>'Frontend'], function(){
	Route::get('/', 'HomeController@getHome');
	Route::get('overview', 'HomeController@getOverView');
	Route::get('project', 'HomeController@getProject');
	Route::get('project/detail', 'HomeController@getProjectDetail');
	Route::get('qhdt', 'HomeController@getQHDT');
	Route::get('news', 'HomeController@getNews');
	Route::get('news/detail/{slug}', 'HomeController@getNewsDetail');
	Route::get('video/detail/{slug}', 'HomeController@getVideoDetail');
	Route::get('recruit', 'HomeController@getRecruit');
	Route::get('contact', 'HomeController@getContact');
});