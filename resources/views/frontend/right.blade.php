<div class="col-right">
    @if (!empty($page) && $page != 'video')
    @include('frontend.box_video')
    @endif
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
    @include('frontend.box_adv_normal')
    <div class="box-consult">
        <div class="bg-title03">
            <span>Tư vấn giảo cổ lam</span>
        </div>
        <article class="item">
            <a href="" title="">
                <img src="{{url('images/tuvan02.jpg')}}" width="306" height="134" alt="" class="thumbs">
            </a>
            <h3>
                <a href="" title="">
                    Tổng đài: 0909090909
                </a>
            </h3>
        </article>
    </div>
    @include('frontend.box_contact')
    <div class="box-social-fb">
        <img src="{{url('images/social.jpg')}}" alt="">
    </div>
</div><!--//col-right-->