@extends('frontend')
@section('content')
    <section class="section fix">
        <div class="layout-home">
            <div class="col-left">
                <div class="box-uses">
                    <h3 class="bg-title01">
                        <span>{{$post->category->name}}</span>
                    </h3>
                    <article class="detail">
                        <div class="content">
                           {!! $post->content !!}
                        </div>
                    </article>
                    @include('frontend.box_follow')
                    <div class="box-product">
                        <h3 class="title">Bài liên quan</h3>
                        <div class="owl-carousel" id="slide-product">
                            @foreach ($post->related as $rPost)
                            <div class="item">
                                <a href="{{url($rPost->slug.'.html')}}" title="{{$rPost->title}}">
                                    <img src="{{url('image-cached/218x128', $rPost->image)}}" width="218" height="128" alt=""/>
                                </a>
                                <h3>
                                    <a href="{{url($rPost->slug.'.html')}}" title="{{$rPost->title}}">{{str_limit($rPost->title, 40)}}</a>
                                </h3>
                            </div>
                            @endforeach
                        </div>
                    </div><!--//box-product-->
                    @include('frontend.box_comment')
                    @include('frontend.box_adv_center')
                </div>
            </div><!--//col-left-->
            @include('frontend.right')
            <div class="clear"></div>
        </div><!--//layout-home-->
        <div class="clear"></div>
    </section><!--//section-->
@endsection