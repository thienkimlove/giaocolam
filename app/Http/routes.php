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
use App\Question;
use App\Setting;
use Intervention\Image\Facades\Image;


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
            $posts = Post::where('status', true)->tagged($keyword)->latest()->paginate(20);
        } else {
            $posts = Post::where('status', true)->latest()->paginate(20);
        }
        return view('frontend.search', compact('posts', 'keyword'))->with([
            'meta_title' => ' Kết quả tìm kiếm từ khóa ' . $keyword . ' tại Lycoeye.vn',
            'meta_desc' => '',
            'meta_keywords' => $keyword,
        ]);
    }
});
//display images.

Route::get('render', function () {

    $image = Image::make(public_path() . '/files/images/' . Request::input('p'));

    if (Request::input('w') && Request::input('h')) {
        $image->fit(Request::input('w'), Request::input('h'));
    }

    return $image->response();
});

Route::get('chi-tiet/{slug}', 'MainController@question');


Route::resource('admin/posts', 'PostsController');
Route::resource('admin/questions', 'QuestionsController');
Route::resource('admin/settings', 'SettingsController');
Route::resource('admin/contacts', 'ContactsController');
Route::post('saveContact', ['as' => 'saveContact', 'uses' => 'MainController@saveContact']);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', function () {
    $page = 'index';
    $settings = Setting::lists('value', 'name');

    $slidePosts = Post::where('status', true)->where('homepage_slide', true)->latest()->limit(4)->get();
    $introPosts = Post::where('status', true)->where('homepage_intro', true)->latest()->limit(4)->get();
    $discoveryPosts = Post::where('status', true)->where('homepage_discovery', true)->latest()->limit(4)->get();

    $latestEvents = Post::where('status', true)->where('type', 'su-kien-nhan-hang')->latest()->limit(3)->get();
    $mostViews = Post::where('status', true)->where('type', 'su-kien-nhan-hang')->orderBy('views', 'desc')->limit(3)->get();


    $questions = Question::latest()->limit(4)->get();


    return view('frontend.index', compact(
        'page',
        'slidePosts',
        'introPosts',
        'discoveryPosts',
        'latestEvents',
        'mostViews',
        'questions'
    ))->with([
        'meta_title' => (!empty($settings['meta_title'])) ? $settings['meta_title'] : 'LycoEye.vn',
        'meta_desc' => (!empty($settings['meta_desc'])) ? $settings['meta_desc'] : 'LycoEye.vn',
        'meta_keywords' => (!empty($settings['meta_keywords'])) ? $settings['meta_keywords'] : 'LycoEye.vn',
    ]);

});

Route::get('/{value}', function ($value) {
    if (preg_match('/([a-z0-9\-]+)\.html/', $value, $matches)) {

        $origin = $post = Post::where('slug', $matches[1])->first();
        $origin->views = $origin->views + 1;
        $origin->save();

        $page = $post->type;

        return view('frontend.post_details', compact(
            'page',
            'post'
        ))->with([
            'meta_title' => $post->title,
            'meta_desc' =>  $post->desc,
            'meta_keywords' =>  ($post->tagList)? implode(',', $post->tagList) : 'lycos, huongdan, bai viet'
        ]);
    } else {
        $page = $value;
        $settings = Setting::lists('value', 'name');
        if ($page == 'sang-mat-sang-tuong-lai') {

            $posts = Post::where('status', true)->where('type', $page)->latest()->limit(6)->get();
            $related = Post::where('status', true)->where('type', $page)->latest()->skip(6)->take(3)->get();

            return view('frontend.'.$page, compact(
                'page',
                'posts',
                'related'
            ))->with([
                'meta_title' => (!empty($settings['meta_title'])) ? $settings['meta_title'] : 'LycoEye.vn',
                'meta_desc' => (!empty($settings['meta_desc'])) ? $settings['meta_desc'] : 'LycoEye.vn',
                'meta_keywords' => (!empty($settings['meta_keywords'])) ? $settings['meta_keywords'] : 'LycoEye.vn',
            ]);
        } else if ($page == 'lycoeye') {

            return view('frontend.'.$page, compact(
                'page',
                'posts',
                'related',
                'settings'
            ))->with([
                'meta_title' => (!empty($settings['meta_title'])) ? $settings['meta_title'] : 'LycoEye.vn',
                'meta_desc' => (!empty($settings['meta_desc'])) ? $settings['meta_desc'] : 'LycoEye.vn',
                'meta_keywords' => (!empty($settings['meta_keywords'])) ? $settings['meta_keywords'] : 'LycoEye.vn',
            ]);
        } else if ($page == 'hoi-dap-chuyen-gia') {

            $questions = Question::latest()->paginate(6);

            return view('frontend.'.$page, compact(
                'page',
                'questions'
            ))->with([
                'meta_title' => (!empty($settings['meta_title'])) ? $settings['meta_title'] : 'LycoEye.vn',
                'meta_desc' => (!empty($settings['meta_desc'])) ? $settings['meta_desc'] : 'LycoEye.vn',
                'meta_keywords' => (!empty($settings['meta_keywords'])) ? $settings['meta_keywords'] : 'LycoEye.vn',
            ]);
        } else if ($page == 'su-kien-nhan-hang') {

            $posts = Post::where('status', true)->where('type', $page)->latest()->paginate(10);

            return view('frontend.'.$page, compact(
                'page',
                'posts'
            ))->with([
                'meta_title' => (!empty($settings['meta_title'])) ? $settings['meta_title'] : 'LycoEye.vn',
                'meta_desc' => (!empty($settings['meta_desc'])) ? $settings['meta_desc'] : 'LycoEye.vn',
                'meta_keywords' => (!empty($settings['meta_keywords'])) ? $settings['meta_keywords'] : 'LycoEye.vn',
            ]);
        } else if ($page == 'chia-se') {

            $posts = Post::where('status', true)->where('type', $page)->latest()->paginate(5);

            return view('frontend.'.$page, compact(
                'page',
                'posts'
            ))->with([
                'meta_title' => (!empty($settings['meta_title'])) ? $settings['meta_title'] : 'LycoEye.vn',
                'meta_desc' => (!empty($settings['meta_desc'])) ? $settings['meta_desc'] : 'LycoEye.vn',
                'meta_keywords' => (!empty($settings['meta_keywords'])) ? $settings['meta_keywords'] : 'LycoEye.vn',
            ]);
        } else if ($page == 'lien-he') {
            return view('frontend.'.$page, compact(
                'page'
            ))->with([
                'meta_title' => (!empty($settings['meta_title'])) ? $settings['meta_title'] : 'LycoEye.vn',
                'meta_desc' => (!empty($settings['meta_desc'])) ? $settings['meta_desc'] : 'LycoEye.vn',
                'meta_keywords' => (!empty($settings['meta_keywords'])) ? $settings['meta_keywords'] : 'LycoEye.vn',
            ]);
        }
    }
});
