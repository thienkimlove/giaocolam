@extends('frontend')
@section('content')
    <section class="section fix">
        <div class="layout-home">
            <div class="col-left">
                <div class="box-uses">
                    <div class="hot-product cf">
                        <div class="row">
                            @foreach ($products as $sProduct)
                            <div class="item">
                                <a href="{{url('san-pham', $sProduct->slug)}}">
                                    <img src="{{url('image-cached/290x150', $sProduct->image)}}" alt="">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="title">{{$product->title}}</div>
                    <ul class="news-type">
                        <li class="active">
                            <a href="javascript:void(0)" rel="nofollow" data-type="tab" data-content="tab-infoproduct" data-parent="news-type" data-reset="news-home" title="Nghiên cứu lâm sàng">
                                Thông tin sản phẩm</a>
                        </li>
                        <li class="line">|</li>
                        <li>
                            <a href="javascript:void(0)" rel="nofollow" data-type="tab" data-content="tab-research01" data-parent="news-type" data-reset="news-home" title="Nghiên cứu lâm sàng">
                                Nghiên cứu lâm sàng</a>
                        </li>
                        <li class="line">|</li>
                        <li>
                            <a href="javascript:void(0)" rel="nofollow" data-type="tab" data-content="tab-video" data-parent="news-type" data-reset="news-home" title="Video">
                                Video
                            </a>
                        </li>
                    </ul><!--//news-type-->
                    <div class="news-home" id="tab-infoproduct" style="display: block">
                        <article class="detail">
                            {!! $product->thongtin !!}

                            <div class="released-post">
                                <h3>Tin liên quan</h3>
                                <ul class="list-released">
                                    @foreach ($product->related1 as $post)
                                    <li><a href="{{url($post->slug.'.html')}}">{{$post->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            @include('frontend.box_comment')
                        </article>
                    </div><!--//news-list-->
                    <div class="news-home" id="tab-research01">
                        <article class="detail">
                            {!! $product->nghiencuu !!}

                            <div class="released-post">
                                <h3>Tin liên quan</h3>
                                <ul class="list-released">
                                    @foreach ($product->related2 as $post)
                                        <li><a href="{{url($post->slug.'.html')}}">{{$post->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            @include('frontend.box_comment')
                        </article>
                    </div><!--//news-list-->
                    <div class="news-home" id="tab-video">
                        <div class="box-media">
                            <div class="hot-video cf">
                                @if ($first = $product->hotVideos->shift())
                                <div class="col-left">
                                    <iframe width="100%" height="315" src="{{$first->file_name}}" frameborder="0" allowfullscreen></iframe>
                                </div>
                                @endif
                                <div class="col-right">
                                    <ul class="list-video">
                                        @foreach ($product->hotVideos as $video)
                                        <li><a href="{{url('video', $video->slug)}}" class="active">{{str_limit($video->title, 40)}}</a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            @foreach ($product->vlist as $video)
                            <article class="item">
                                <a class="thumb" href="" title="">
                                    <img src="{{url('image-cached/303x130', $video->image)}}" width="303" height="130" alt=""/>
                                </a>
                                <h3>
                                    <a href="{{url('video', $video->slug)}}" title="">{{str_limit($video->title, 40)}}</a>
                                    <span class="view">{{$video->views}} lượt xem</span>
                                </h3>
                            </article>
                            @endforeach
                            <div class="box-paging">
                                {!! with(new \App\Pagination\AcmesPresenter($product->vlist))->render() !!}
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div><!--//box-media-->
                    </div><!--//news-list-->
                    @include('frontend.box_adv_center')
                </div>
            </div><!--//col-left-->
            @include('frontend.right')
            <div class="clear"></div>
        </div><!--//layout-home-->
        <div class="clear"></div>
    </section><!--//section-->
@endsection