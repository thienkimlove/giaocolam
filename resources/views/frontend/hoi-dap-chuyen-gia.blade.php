@extends('frontend')
@section('content')
    <section class="section fix">
        <div class="layout-home">
            <div class="col-left">
                @include('frontend.box_adv_center')
                <div class="box-faq">
                    @foreach ($questions as $question)
                    <article class="item">
                        <div class="content">
                            <a href="" title="">
                                <img src="{{url('image-cached/220x130', $question->image)}}" width="220" height="130" alt="">
                            </a>
                            <h3 class="title-faq">{{str_limit($question->question, 40)}}</h3>
                <span class="human">Người gửi:
                  <span>{{$question->ask_person}}</span>
                </span>
                            <time class="time" datetime="{{$question->updated_at}}">{{$question->updated_at}}</time>
                            <p>
                                <span class="question">Câu hỏi:</span>
                                <span>{{str_limit($question->question, 40)}}</span>
                            </p>
                        </div>
                        <div>
                            <a href="javascript:void(0)" class="answer">Xem trả lời</a>
                            <div class="accordion">
                                <div class="content">
                                    <p>{!! $question->answer !!}</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    <div class="box-paging">
                            {!! with(new \App\Pagination\AcmesPresenter($questions))->render() !!}
                            <div class="clear"></div>
                    </div>
                </div>
                @include('frontend.box_contact')
                @include('frontend.box_adv_center')
            </div><!--//col-left-->
            @include('frontend.right')
            <div class="clear"></div>
        </div><!--//layout-home-->
        <div class="clear"></div>
    </section><!--//section-->
@endsection
@section('footer')
    <script>
        $(function(){
            $('.accordion').hide();

            $('.answer').click(function(){
                $(this).next('div.accordion').toggle();
            });
        });

    </script>
@endsection