@extends('frontend')
@section('content')
    <section class="section fix">
        <div class="layout-home">
            <div class="col-left">
                <!-- BoxContact -->
                <div class="box-contact cf">
                    <div class="area-contact">
                        <h3 class="title">
                            <a href="#">Liên hệ</a>
                        </h3>
                        <div class="col-left">
                            {!! Form::open(['method' => 'POST', 'route' => ['saveContact'], 'name' => 'contactForm']) !!}
                            <input type="text"  name="name" class="txt txt-name" placeholder="Họ và tên"/>
                            <input type="email" name="email" class="txt txt-email" placeholder="Email"/>
                            <input type="text" name="phone" class="txt txt-phone" placeholder="Số điện thoại"/>
                            <textarea name="content"  class="txt txt-content" placeholder="Nội dung"></textarea>
                            <input type="submit" value="Gửi đi"  class="btn btn-submit">
                            {!!Form::close()!!}
                        </div>
                    </div>
                </div>
                <div class="box-map">
                    <iframe width="640" height="480" src="https://www.google.com/maps/d/embed?mid=z1FBqVhks5y8.koB5Ne4xwpZw"></iframe>
                </div>
                <!-- EndBoxContact -->
            </div><!--//col-left-->
            @include('frontend.right')
            <div class="clear"></div>
        </div><!--//layout-home-->
        <div class="clear"></div>
    </section><!--//section-->
@endsection