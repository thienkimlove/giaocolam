<div class="col-right">
    @if (!empty($page) && $page != 'video')
    <div class="box-video">
        <div class="data">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/4QEmJ3sPHIg" frameborder="0" allowfullscreen></iframe>
            <h3>
                Andres Iniesta ● Maestro Skills 2015 ||HD||
            </h3>
            <span class="view">1234 lượt xem</span>
        </div>
        <div class="item">
            <a href="#" class="thumbs">
                <img src="{{url('images/thumbs.jpg')}}" alt="">
            </a>
            <h3>
                Sở thích vừa học, vừa hát
            </h3>
            <p>
                Quán quân Vietnam's Got Talent muốn đi học ngay trong ngày đầu trở về nhà. Cậu bé ham học giữ chức lớp trưởng, đồng thời là học sinh giỏi 3 năm liền.
            </p>
            <span class="view">1234 lượt xem</span>
        </div>
    </div>
    @endif
    <div class="box-news">
        <div class="bg-title03">
            <span>Tin tức nổi bật</span>
        </div>
        <ul class="nav-list">
            @foreach ($noibat as $post)
            <li>
                <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{str_limit($post->title, 40)}}</a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="box-adv">
        <a href="#">
            <img src="{{url('images/adv_01.png')}}" alt="Tue linh">
        </a>
    </div>
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
                    Tổng đài: 0909090909
                </a>
            </h3>
        </article>
    </div>
    <div class="box-contact">
        <div class="bg-title03">
            <span>Đặt câu hỏi với chuyên gia</span>
        </div>
        <div class="col-right">
            {!! Form::open(['method' => 'POST', 'route' => ['createQuestion'], 'name' => 'questionForm']) !!}
                <input type="text" name="ask_person" class="txt txt-name" placeholder="Họ và tên"/>
                <input type="email" name="ask_email" class="txt txt-email" placeholder="Email"/>
                <input type="number" name="ask_phone" class="txt txt-phone" placeholder="Số điện thoại"/>
                <textarea name="question" class="txt txt-content" placeholder="Nội dung"></textarea>
                <input type="submit" value="gửi đi" class="btn btn-submit"/>
                <span class="mail-name">Chamsockhachhang@gmail.com</span>
            {!!Form::close()!!}
        </div>
    </div>
    <div class="box-social-fb">
        <img src="{{url('images/social.jpg')}}" alt="">
    </div>
</div><!--//col-right-->