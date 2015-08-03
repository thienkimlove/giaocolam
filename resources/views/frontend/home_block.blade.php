<h3 class="bg-title01">
    <span>{{$category->title}}</span>
</h3>
<ul class="news-type">
    @foreach ($category->subCategories as $k => $cate)
        <li>
            <a href="javascript:void(0)" rel="nofollow" data-type="tab" data-content="tab-{{$cate->slug}}" title="{{$cate->name}}">
                {{$cate->name}}
            </a>
        </li>
        @if (($k +1) != $category->subCategories->count())
            <li class="line">|</li>
        @endif
    @endforeach
</ul><!--//news-type-->
<div class="news-home" id="tab-index" style="display:block;">
    @foreach ($category->homepage as $post)
        <article class="item">
            <a href="{{url($post->slug.'.html')}}" title="" class="thumbs">
                <img src="{{url('image-cached/310x230', $post->image)}}" width="310" height="230" alt=""/>
            </a>
            <h3>
                <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{str_limit($post->title, 40)}}</a>
            </h3>
            <p>{{str_limit($post->desc, 70)}}</p>
            <div class="related-post">
                <ul>
                    @foreach ($post->related->slice(0,2) as $relate)
                        <li><a href="{{url($relate->slug.'.html')}}">{{str_limit($relate->title, 40)}}</a></li>
                    @endforeach

                </ul>
            </div>
        </article>
    @endforeach
</div><!--//news-list-->
@foreach ($category->subCategories as $k => $cate)
    <div class="news-home" id="tab-{{$cate->slug}}">
        @foreach ($cate->homepage as $post)
            <article class="item">
                <a href="{{url($post->slug.'.html')}}" title="" class="thumbs">
                    <img src="{{url('image-cached/310x230', $post->image)}}" width="310" height="230" alt=""/>
                    <span>{{$cate->name}}</span>
                </a>
                <h3>
                    <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{str_limit($post->title, 40)}}</a>
                </h3>
                <p>{{str_limit($post->desc, 70)}}</p>
                <div class="related-post">
                    <ul>
                        @foreach ($post->related->slice(0,2) as $relate)
                            <li><a href="{{url($relate->slug.'.html')}}">{{str_limit($relate->title, 40)}}</a></li>
                        @endforeach

                    </ul>
                </div>
            </article>
        @endforeach
    </div><!--//news-list-->
@endforeach