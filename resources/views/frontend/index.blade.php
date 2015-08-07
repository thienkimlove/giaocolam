@extends('frontend')
@section('content')
    <div class="box-slider">
        <div class="owl-carousel" id="slide-homepage">
            <div class="item">
                <a class="thumb" href="{{url('san-pham')}}" title="">
                    <img src="{{url('images/bannerslide.png')}}"/>
                </a>
                <div class="description">
                    <div class="fix">
                        <div class="caption">
                            <a href="{{url('san-pham')}}">Tìm hiểu thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <a class="thumb" href="{{url('san-pham')}}" title="">
                    <img src="{{url('images/slide_banner01.jpg')}}"/>
                </a>
                <div class="description">
                    <div class="fix">
                        <div class="caption">
                            <a href="{{url('san-pham')}}">Tìm hiểu thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--//box-slider-->
    <section class="section fix">
        <div class="layout-home">
            <div class="box-uses">
                <h3 class="bg-title02">
                    <span>Công dụng</span>
                </h3>
                <ul class="news-type">
                    @foreach ($congdung->subCategories as $k => $cate)
                        <li>
                            <a href="javascript:void(0)" rel="nofollow" data-type="tab" data-content="tab-{{$cate->slug}}" data-parent="news-type" data-reset="news-home" title="{{$cate->name}}">
                                {{$cate->name}}
                            </a>
                        </li>
                        @if (($k +1) != $congdung->subCategories->count())
                        <li class="line">|</li>
                        @endif
                    @endforeach
                </ul><!--//news-type-->
                <div class="news-home" id="tab-index" style="display:block;">
                    @foreach ($congdung->homepage as $post)
                        <article class="item">
                            <a href="{{url($post->slug.'.html')}}" title="" class="thumbs">
                                <img src="{{url('image-cached/310x230', $post->image)}}"  alt=""/>
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
                @foreach ($congdung->subCategories as $k => $cate)
                <div class="news-home" id="tab-{{$cate->slug}}">
                    @foreach ($cate->homepage as $post)
                        <article class="item">
                            <a href="{{url($post->slug.'.html')}}" title="" class="thumbs">
                                <img src="{{url('image-cached/310x230', $post->image)}}"  alt=""/>
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
            </div>
            <div class="col-left">
                <h3 class="bg-title02">
                    <span>Thông tin khoa học</span>
                </h3>
                <ul class="news-type">
                    @foreach ($thongtinkhoahoc->subCategories as $k => $cate)
                        <li>
                            <a href="javascript:void(0)" rel="nofollow" data-type="tab" data-content="tab-{{$cate->slug}}" data-parent="news-type" data-reset="news-list" title="{{$cate->name}}">
                                {{$cate->name}}
                            </a>
                        </li>
                        @if (($k +1) != $thongtinkhoahoc->subCategories->count())
                            <li class="line">|</li>
                        @endif
                    @endforeach
                </ul><!--//news-type-->
                <div class="news-list cf" id="tab-demo" style="display: block">
                    @foreach ($thongtinkhoahoc->homepage->slice(0,2) as $post)
                        <article class="item">
                            <a href="{{url($post->slug.'.html')}}" title="" class="thumbs">
                                <img src="{{url('image-cached/310x230', $post->image)}}"  alt=""/>
                            </a>
                            <h3>
                                <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{str_limit($post->title, 40)}}</a>
                            </h3>
                            <p>{{str_limit($post->desc, 70)}}</p>
                            <div class="related-post">
                                <ul>
                                    @foreach ($post->related->slice(0, 2) as $relate)
                                        <li><a href="{{url($relate->slug.'.html')}}">{{str_limit($relate->title, 40)}}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </article>
                    @endforeach

                </div><!--//news-list-->
                @foreach ($thongtinkhoahoc->subCategories as $k => $cate)
                <div class="news-list cf" id="tab-{{$cate->slug}}">
                    @foreach ($cate->homepage->slice(0,1) as $post)
                        <article class="item">
                            <a href="{{url($post->slug.'.html')}}" title="" class="thumbs">
                                <img src="{{url('image-cached/310x230', $post->image)}}"  alt=""/>
                                <span>{{$cate->name}}</span>
                            </a>
                            <h3>
                                <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{str_limit($post->title, 40)}}</a>
                            </h3>
                            <p>{{str_limit($post->desc, 70)}}</p>
                            <div class="related-post">
                                <ul>
                                    @foreach ($post->related->slice(0, 2) as $relate)
                                        <li><a href="{{url($relate->slug.'.html')}}">{{str_limit($relate->title, 40)}}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </article>
                    @endforeach
                </div><!--//news-list-->
                @endforeach
                @include('frontend.box_adv_center')
                <div class="box-news cf">
                    <h3 class="bg-title02">
                        <span>Tin tức giảo cổ lam</span>
                    </h3>
                    @foreach ($tintuc->homepage as $k => $post)
                        @if($k == 0)
                        <div class="item01">
                            <a href="{{url($post->slug.'.html')}}" class="thumbs">
                                <img src="{{url('image-cached/300x177', $post->image)}}" alt="">
                            </a>
                            <h3>
                                <a href="{{url($post->slug.'.html')}}">{{str_limit($post->title, 70)}}</a>
                            </h3>
                            <p>{{str_limit($post->desc, 70)}}</p>
                        </div>
                        @else
                        <div class="item02">
                            <h3>
                                {{str_limit($post->title, 70)}}
                            </h3>
                            <a href="" class="thumbs">
                                <img src="{{url('image-cached/110x70', $post->image)}}" alt="" >
                            </a>
                            <p>{{str_limit($post->desc, 70)}}</p>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div><!--//col-left-->
           @include('frontend.right')
            <div class="clear"></div>
        </div><!--//layout-home-->
        <div class="clear"></div>
    </section><!--//section-->
@endsection
