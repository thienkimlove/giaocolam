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

use App\Post;



Route::get('admin', 'AdminController@index');
Route::get('tu-khoa/{tag}', 'MainController@tag');

/*
 * for searching
 */
Route::get('search/{tag}', function ($tag) {
    if (preg_match('/tag-([a-z0-9\-]+)/', $tag, $matches)) {
        $keyword = $matches[1];
        $keyword = str_replace('-', ' ', $keyword);
        if (strlen($keyword) > 2) {
            $posts = Post::where('status', true)->tagged($keyword)->latest('updated_at')->paginate(20);
        } else {
            $posts = Post::where('status', true)->latest('updated_at')->paginate(20);
        }
        return view('frontend.search', compact('posts', 'keyword'))->with([
            'meta_title' => ' Kết quả tìm kiếm từ khóa ' . $keyword . ' tại Giảo Cổ Lam',
            'meta_desc' => '',
            'meta_keywords' => $keyword,
        ]);
    }
});

Route::get('chi-tiet/{slug}', 'MainController@question');


Route::resource('admin/posts', 'PostsController');
Route::resource('admin/categories', 'CategoriesController');
Route::resource('admin/questions', 'QuestionsController');
Route::resource('admin/settings', 'SettingsController');
Route::resource('admin/contacts', 'ContactsController');
Route::post('saveContact', ['as' => 'saveContact', 'uses' => 'MainController@saveContact']);
Route::post('createQuestion', ['as' => 'createQuestion', 'uses' => 'MainController@createQuestion']);
Route::post('registerEmail', ['as' => 'registerEmail', 'uses' => 'MainController@registerEmail']);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', function () {
    $page = 'index';

    return view('frontend.index', compact(
        'page'
    ))->with([
        'meta_title' => (!empty($settings['meta_title'])) ? $settings['meta_title'] : 'Giảo Cổ Lam',
        'meta_desc' => (!empty($settings['meta_desc'])) ? $settings['meta_desc'] : 'Giảo Cổ Lam',
        'meta_keywords' => (!empty($settings['meta_keywords'])) ? $settings['meta_keywords'] : 'Giảo Cổ Lam',
    ]);

});

