@extends('frontend')
@section('content')
    <div class="box-slider">
        <div class="owl-carousel" id="slide-homepage">
            <div class="item">
                <a class="thumb" href="{{url('san-pham')}}" title="">
                    <img src="{{$settings['index_slide_banner1']}}" />
                </a>
            </div>
            <div class="item">
                <a class="thumb" href="{{url('san-pham')}}" title="">
                    <img src="{{$settings['index_slide_banner2']}}" />
                </a>
            </div>
            <div class="item">
                <a class="thumb" href="{{url('san-pham')}}" title="">
                   <img src="{{$settings['index_slide_banner3']}}" />
                </a>
            </div>
        </div>
    </div><!--//box-slider-->
    <section class="section fix">
        <div class="layout-home">
            <div class="box-uses">
                <h1 class="bg-title02">
                    <span><a href="{{url('cong-dung')}}">Công dụng</a></span>
                </h1>
                <ul class="news-type">
                    @foreach ($congdung->subCategories as $k => $cate)
                        <li>
                            <a href="{{url($cate->slug)}}" rel="nofollow" data-type="tab" data-content="tab-{{$cate->slug}}" data-parent="news-type" data-reset="news-home" title="{{$cate->name}}">
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
                    <span><a href="{{url('thong-tin-khoa-hoc')}}">Thông tin khoa học</a></span>
                </h3>
                <ul class="news-type">
                    @foreach ($thongtinkhoahoc->subCategories as $k => $cate)
                        <li>
                            <a href="{{url($cate->slug)}}" rel="nofollow" data-type="tab" data-content="tab-{{$cate->slug}}" data-parent="news-type" data-reset="news-list" title="{{$cate->name}}">
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
                                <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{str_limit($post->title, 55)}}</a>
                            </h3>
                            <p>{{str_limit($post->desc, 170)}}</p>
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
                                <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{str_limit($post->title, 55)}}</a>
                            </h3>
                            <p>{{str_limit($post->desc, 170)}}</p>
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
                        <span><a href="{{url('tin-tuc')}}">Tin tức giảo cổ lam</a></span>
                    </h3>
                    @foreach ($tintuc->homepage as $k => $post)
                        @if($k == 0)
                        <div class="item01">
                            <a href="{{url($post->slug.'.html')}}" class="thumbs">
                                <img src="{{url('image-cached/300x177', $post->image)}}" alt="">
                            </a>
                            <h3>
                                <a href="{{url($post->slug.'.html')}}">{{str_limit($post->title, 40)}}</a>
                            </h3>
                            <p>{{str_limit($post->desc, 70)}}</p>
                        </div>
                        @else
                        <div class="item02">
                            <h3><a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{str_limit($post->title, 50)}}</a></h3>
                            <a href="{{url($post->slug.'.html')}}" class="thumbs">
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
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '813724318767864',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
