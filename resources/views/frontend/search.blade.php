@extends('frontend')
@section('content')
    <section class="section fix">
        <div class="layout-home">
            <div class="col-left">

                <div class="box-uses">
                    <h3 class="bg-title01">
                        <span>Tìm kiếm theo từ khóa : {{$keyword}}</span>
                    </h3>

                    <div class="news-home" id="tab-news" style="display: block">
                        @foreach ($posts as $post)
                        <article class="item">
                            <a href="{{url($post->slug)}}" title="{{$post->title}}" class="thumbs">
                                <img src="{{url('image-cached/310x230', $post->image)}}" width="310" height="230" alt=""/>

                            </a>
                            <h3>
                                <a href="{{url($post->slug)}}" title="{{$post->title}}">{{str_limit($post->title, 40)}}</a>
                            </h3>
                            <p>{{str_limit($post->desc, 70)}}</p>
                        </article>
                        @endforeach
                        <div class="box-paging">
                            {!! with(new \App\Pagination\AcmesPresenter($posts))->render() !!}
                            <div class="clear"></div>
                        </div>
                    </div><!--//news-list-->

                    <div class="box-adv-center">
                        <div class="head"><span>Quảng cáo</span></div>
                        <div class="data">
                            <div class="item full">
                                <a href="#"><img src="{{url('images/banner_adv_left_content.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div><!--//box-adv-center-->
                </div>


            </div><!--//col-left-->
            @include('frontend.right')
            <div class="clear"></div>
        </div><!--//layout-home-->
        <div class="clear"></div>
    </section><!--//section-->
@endsection