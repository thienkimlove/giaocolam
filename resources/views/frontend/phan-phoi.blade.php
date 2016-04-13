@extends('frontend')
@section('content')
    <section class="section fix">
        <div class="layout-home">
            <div class="col-left">

                <ul class="breadCrumb cf">
                    <li><a href="{{url('/')}}">HOME</a></li>
                    <li class="active">Phân phối</li>
                </ul>

                <!-- BoxContact -->
                <div class="box-member cf">
                    @foreach ($category->subCategories as $cate)
                    <div class="title01">{{$cate->name}}</div>
                    <div class="data">
                        @foreach ($cate->cities->chunk(6)  as $gPost)
                        <article class="item">
                            @foreach ($gPost  as $post)
                            <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{$post->city}}</a>
                            @endforeach
                        </article>
                        @endforeach
                    </div>
                    @endforeach
                </div><!--//box-member-->
                <!-- EndBoxContact -->
            </div><!--//col-left-->
            @include('frontend.right')
            <div class="clear"></div>
        </div><!--//layout-home-->
        <div class="clear"></div>
    </section><!--//section-->
@endsection