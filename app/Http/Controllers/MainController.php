<?php namespace App\Http\Controllers;


use App\Contact;
use App\Http\Requests;
use App\Http\Requests\ContactRequest;
use App\Post;
use App\Question;
use App\Setting;
use App\Tag;
use Illuminate\Http\Request;

class MainController extends Controller
{


    public function question($slug) {

        $page = 'hoi-dap-chuyen-gia';
        $settings = Setting::lists('value', 'name');

        $question = Question::where('slug', $slug)->first();
        $related = Question::where('id', '<>', $question->id)->latest()->limit(6)->get();


        return view('frontend.question_details', compact(
            'page',
            'question',
            'related'
        ))->with([
            'meta_title' => (!empty($settings['meta_title'])) ? $settings['meta_title'] : 'LycoEye.vn',
            'meta_desc' => (!empty($settings['meta_desc'])) ? $settings['meta_desc'] : 'LycoEye.vn',
            'meta_keywords' => (!empty($settings['meta_keywords'])) ? $settings['meta_keywords'] : 'LycoEye.vn',
        ]);

    }

    public function contact()
    {
        $page = 'contact';
        return view('frontend.contact', compact('page'))->with([
            'meta_title' => ' Liên hệ | Viemgan.com.vn ',
            'meta_desc' => '',
            'meta_keywords' => 'liên hệ',
        ]);
    }

    public function tag($keyword)
    {
        $tag = Tag::where('slug', $keyword)->first();
        $posts = $tag->posts();
        return view('frontend.search', compact('posts', 'keyword'))->with([
            'meta_title' => ' Các bài viết với nhãn '.$keyword.' tại Viemgan.com.vn ',
            'meta_desc' => '',
            'meta_keywords' => $keyword,
        ]);
    }

    /**
     * save contact form.
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function saveContact(ContactRequest $request)
    {
        Contact::create($request->all());
        return redirect('/');
    }

    /**
     * ajax increase likes.
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function increaseLikes(Request $request)
    {
        $post = Post::findOrFail($request->input('post_id'));
        $post->likes = $post->likes + 1;
        $post->save();

        return \Response::json([]);
    }

}
