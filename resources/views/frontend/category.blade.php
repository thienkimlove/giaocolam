@extends('frontend')
@section('content')
    <section class="section fix">
        <div class="layout-home">
            <div class="col-left">

                <div class="box-uses">
                    <h3 class="bg-title01">
                        <span>{{$category->name}}</span>
                    </h3>
                    <ul class="news-type">
                        @foreach ($category->subCategories as $k => $cate)
                            <li>
                                <a href="javascript:void(0)" rel="nofollow" data-type="tab" data-content="tab-{{$cate->slug}}" data-parent="news-type" data-reset="news-home" title="{{$cate->name}}">
                                    {{$cate->name}}
                                </a>
                            </li>
                            @if (($k +1) != $category->subCategories->count())
                                <li class="line">|</li>
                            @endif
                        @endforeach
                    </ul><!--//news-type-->
                    <div class="news-home" id="tab-share" style="display: block">
                        @foreach ($firstSub = $category->subCategories->first()->paginate as $post)
                        <article class="item">
                            <a href="{{url($post->slug.'.html')}}" title="" class="thumbs">
                                <img src="{{url('image-cached/310x230', $post->image)}}" width="310" height="230" alt=""/>

                            </a>
                            <h3>
                                <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{str_limit($post->title, 40)}}</a>
                            </h3>
                            <p>{{str_limit($post->desc, 70)}}</p>
                        </article>
                        @endforeach
                        <div class="box-paging">
                            {!! with(new \App\Pagination\AcmesPresenter($firstSub))->render() !!}
                            <div class="clear"></div>
                        </div>
                    </div><!--//news-list-->
                    @foreach ($category->subCategories as $cate)
                    <div class="news-home" id="tab-{{$cate->slug}}">
                        @foreach ($cate->paginate as $post)
                            <article class="item">
                                <a href="{{url($post->slug.'.html')}}" title="" class="thumbs">
                                    <img src="{{url('image-cached/310x230', $post->image)}}" width="310" height="230" alt=""/>

                                </a>
                                <h3>
                                    <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{str_limit($post->title, 40)}}</a>
                                </h3>
                                <p>{{str_limit($post->desc, 70)}}</p>
                            </article>
                        @endforeach
                        <div class="box-paging">
                            {!! with(new \App\Pagination\AcmesPresenter($cate->paginate))->render() !!}
                            <div class="clear"></div>
                        </div>
                    </div><!--//news-list-->
                    @endforeach
                    @include('frontend.box_adv_center')
                </div>

            </div><!--//col-left-->
            @include('frontend.right')
            <div class="clear"></div>
        </div><!--//layout-home-->
        <div class="clear"></div>
    </section><!--//section-->
@endsection