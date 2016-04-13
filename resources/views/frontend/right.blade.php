<div class="col-right">
    @if (!empty($page) && $page != 'video')
    @include('frontend.box_video')
    @endif
    @if (empty($page) || $page != 'index')
        @include('frontend.box_noibat')
    @endif
    @include('frontend.box_adv_normal')
    <div class="box-consult">
        <div class="bg-title03">
            <span>Tư vấn giảo cổ lam</span>
        </div>
        <article class="item">
            <a href="" title="">
                <img src="{{url('images/tuvan02.jpg')}}" width="306" height="134" alt="" class="thumbs">
            </a>
            <h3>
                <a href="" title="">
                    Tổng đài: 0912571190
                </a>
            </h3>
        </article>
        @if (!empty($page) && $page == 'index')
            @include('frontend.box_question')
        @endif
    </div>
    @if (!empty($page) && $page != 'index')
        @include('frontend.box_contact')
    @endif

</div><!--//col-right-->