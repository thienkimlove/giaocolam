@extends('frontend')
@section('content')
    <section class="section fix">
        <div class="layout-home">
            <div class="col-left">
                <div class="box-media">
                    <div class="hot-video cf">
                        <div id="play-video" class="col-left">
                            <iframe width="100%" height="315" src="{{ !empty($videoMain) ? $videoMain->file_name :  $hotVideos->first()->file_name}}" frameborder="0" allowfullscreen></iframe>
                        </div>

                        <div class="col-right">
                            <ul class="list-video">
                                @foreach ($hotVideos as $k => $video)
                                <li><a class="{{((empty($videoMain) && $k == 0) || ($videoMain && $videoMain->id == $video->id)) ? 'active' : '' }}" href="{{url('video', $video->slug)}}">{{str_limit($video->title, 40)}}</a></li>
                                 @endforeach
                            </ul>
                        </div>
                    </div>
                    @foreach ($videos as $video)
                    <article class="item">
                        <a class="thumb" href="{{url('video', $video->slug)}}" title="{{$video->title}}">
                            <img src="{{url('image-cached/303x130', $video->image)}}"  alt=""/>
                        </a>
                        <h3>
                            <a href="{{url('video', $video->slug)}}" title="{{$video->title}}">{{str_limit($video->title, 40)}}</a>
                            <span class="view">{{$video->views}} lượt xem</span>
                        </h3>
                    </article>
                    @endforeach
                    <div class="box-paging">
                        {!! with(new \App\Pagination\AcmesPresenter($videos))->render() !!}
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div><!--//box-media-->
            </div><!--//col-left-->
            @include('frontend.right')
            <div class="clear"></div>
        </div><!--//layout-home-->
        <div class="clear"></div>
    </section><!--//section-->
@endsection