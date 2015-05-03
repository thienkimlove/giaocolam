@extends('frontend')

@section('content')

    <!-- BoxEvent -->
    <div class="box-event">
        <h3 class="title">
            <span class="i-eye"></span><a href="{{url('sang-mat-sang-tuong-lai')}}">LYCO EYE SÁNG MẮT SÁNG TƯƠNG LAI</a>
        </h3>
        <div class="block-list">
            <div class="row">
                @foreach ($posts->slice(0, 3) as $post)
                <article class="item">
                    <a href="{{url($post->slug. '.html')}}" class="thumb">
                        <img src="{{url('render/?p=' . $post->image . '&w=509&h=338')}}" />

                    </a>
                    <h3>{{str_limit($post->title, 40)}}</h3>
                    <p>{{str_limit($post->desc, 70)}}</p>
                    <a href="{{url($post->slug. '.html')}}">Chi tiết</a>
                </article>
                @endforeach
            </div>
            <div class="row">
                @foreach ($posts->slice(3, 3) as $post)
                    <article class="item">
                        <a href="{{url($post->slug. '.html')}}" class="thumb">
                            <img src="{{url('render/?p=' . $post->image . '&w=509&h=338')}}" />

                        </a>
                        <h3>{{str_limit($post->title, 40)}}</h3>
                        <p>{{str_limit($post->desc, 70)}}</p>
                        <a href="{{url($post->slug. '.html')}}">Chi tiết</a>
                    </article>
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
            @foreach ($related as $post)
                <article class="item">
                    <a href="{{url($post->slug. '.html')}}" class="thumb">
                        <img src="{{url('render/?p=' . $post->image . '&w=509&h=338')}}" />

                    </a>
                    <h3>{{str_limit($post->title, 40)}}</h3>
                    <p>{{str_limit($post->desc, 70)}}</p>
                    <a href="{{url($post->slug. '.html')}}">Chi tiết</a>
                </article>
            @endforeach
        </div>
    </div>
    <!-- EndReleasedPost -->
    @include('frontend.box_office')
    @include('frontend.contact')
@endsection