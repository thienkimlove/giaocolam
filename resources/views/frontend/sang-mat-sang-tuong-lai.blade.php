@extends('frontend')

@section('content')

        <!-- BoxEvent -->
<div class="box-event">
    <h3 class="title">
        <span class="i-eye"></span><a href="{{url('sang-mat-sang-tuong-lai')}}">LYCO EYE SÁNG MẮT SÁNG TƯƠNG LAI</a>
    </h3>

    <div class="list-eyes">
        <div class="owl-carousel" id="slide-project">
            @foreach ($posts->chunk(6) as $groupPost)
                <div class="block-eyes">
                    <article class="item">
                        @foreach ($groupPost->slice(0,3) as $post)
                                <div class="box">
                                    <a href="{{url($post->slug. '.html')}}" class="thumb">
                                        <img src="{{url('image-cached/509x338/' . $post->image)}}"/>
                                    </a>

                                    <h3>{{str_limit($post->title, 40)}}</h3>

                                    <p>{{str_limit($post->desc, 70)}}</p>
                                    <a href="{{url($post->slug. '.html')}}">Chi tiết</a>
                                </div>
                        @endforeach
                    </article>
                </div>
                <div class="block-eyes">
                    <article class="item">
                        @foreach ($groupPost->slice(3,3) as $post)
                            <div class="box">
                                <a href="{{url($post->slug. '.html')}}" class="thumb">
                                    <img src="{{url('image-cached/509x338/' . $post->image)}}"/>
                                </a>

                                <h3>{{str_limit($post->title, 40)}}</h3>

                                <p>{{str_limit($post->desc, 70)}}</p>
                                <a href="{{url($post->slug. '.html')}}">Chi tiết</a>
                            </div>
                        @endforeach
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- EndBoxEvent -->
<!-- ReleasedPost -->
<div class="box-event">
    <h3 class="title">
        <span class="i-event"></span><a href="#">Tin liên quan</a>
    </h3>
    <div class="block-list">
        @foreach ($related->chunk(3) as $postgroup)
            <div class="row">
                @foreach ($postgroup as $post)
                    <article class="item">
                        <a href="{{url($post->slug. '.html')}}" class="thumb">
                            <img src="{{url('image-cached/509x338/' . $post->image)}}" />
                        </a>
                        <h3>{{str_limit($post->title, 40)}}</h3>
                        <p>{{str_limit($post->desc, 70)}}</p>
                        <a href="{{url($post->slug. '.html')}}">Chi tiết</a>
                    </article>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
<!-- EndReleasedPost -->
@include('frontend.box_office')
@include('frontend.contact')
@endsection