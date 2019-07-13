@extends('frontend')
@section('content')
    <section class="section fix">
        <div class="layout-home">
            <div class="col-left">
                <ul class="breadCrumb cf">
                    <li><a href="{{url('/')}}">HOME</a></li>
                    <li class="active">Hỏi Đáp Chuyên Gia</li>
                </ul>


                @include('frontend.box_adv_hoidap')
                <div class="box-faq">
                    @foreach ($questions as $question)
                    <article class="item">
                        <div class="content">
                            <a href="" title="">
                                <img src="{{url('image-cached/220x130', $question->image)}}"  alt="">
                            </a>

                            <p>
                                <span>{{$question->question}}</span>
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
                        @include('frontend.pagination', ['paginate' => $questions])
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