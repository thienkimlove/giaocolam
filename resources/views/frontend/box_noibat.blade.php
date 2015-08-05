<div class="box-news">
    <div class="bg-title03">
        <span>Tin tức nổi bật</span>
    </div>
    <ul class="nav-list">
        @foreach ($noibat as $post)
            <li>
                <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{str_limit($post->title, 40)}}</a>
            </li>
        @endforeach
    </ul>
</div>