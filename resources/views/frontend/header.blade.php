<header class="header">
    <div class="header-mid">
        <div class="fix">

                <a href="" title="" class="banner">
                    <img src="{{url('images/banner.png')}}" alt="">
                </a>

            <div class="box-find" id="box-find">
                {!! Form::open(['method' => 'GET', 'url' =>  url('tim-kiem') ]) !!}
                    <input type="text"  placeholder="Từ khóa tìm kiếm" name="q" class="txt"/>
                    <input type="submit" value="" name="submit" class="btn-find"/>
                {!! Form::close() !!}
            </div>
            <ul class="nav-social">
                <li><a href="https://www.facebook.com/www.giaocolam.vn
"><img src="{{url('images/i_fb.png')}}" alt=""></a></li>
                <li><a href="https://www.youtube.com/channel/UCrFLHc7P7e1O1OA3lNIG7wA"><img src="{{url('images/i_ytube.png')}}" alt=""></a></li>
            </ul>
        </div>
    </div>
    <nav class="bg-nav">
        <div class="fix">
            <ul class="nav-main">
                <li>
                    <a class="{{(!empty($page) && $page == 'index') ? 'active' : ''}}" href="{{url('/')}}" title="">TRANG CHỦ</a>
                </li>
                <li>
                    <a class="{{(!empty($page) && $page == 'cong-dung') ? 'active' : ''}}" href="{{url('cong-dung')}}" title="">Công dụng</a>
                </li>
                <li>
                    <a class="{{(!empty($page) && $page == 'thong-tin-khoa-hoc') ? 'active' : ''}}" href="{{url('thong-tin-khoa-hoc')}}" title="">Thông tin khoa học</a>
                </li>
                <li>
                    <a class="{{(!empty($page) && $page == 'san-pham') ? 'active' : ''}}" href="{{url('san-pham')}}" title="">Sản phẩm</a>
                </li>
                <li>
                    <a class="{{(!empty($page) && $page == 'chia-se') ? 'active' : ''}}" href="{{url('chia-se')}}" title="">Chia sẻ</a>
                </li>
                <li>
                    <a class="{{(!empty($page) && $page == 'hoi-dap-chuyen-gia') ? 'active' : ''}}" href="{{url('hoi-dap-chuyen-gia')}}" title="">Hỏi đáp chuyên gia</a>
                </li>
                <li>
                <li>
                    <a class="{{(!empty($page) && $page == 'tin-tuc') ? 'active' : ''}}" href="{{url('tin-tuc')}}" title="">Tin tức</a>
                    <ul>
                        <li><a href="{{url('bach-nien-giai-lao')}}">Bách niên giai lão</a></li>
                    </ul>
                </li>
                <li>
                    <a class="{{(!empty($page) && $page == 'video') ? 'active' : ''}}" href="{{url('video')}}" title="">Video</a>
                </li>
                <li>
                    <a class="{{(!empty($page) && $page == 'lien-he') ? 'active' : ''}}" href="{{url('lien-he')}}" title="">Liên hệ</a>
                </li>
                <li>
                    <a class="{{(!empty($page) && $page == 'phan-phoi') ? 'active' : ''}}" href="{{url('phan-phoi')}}" title="">Phân phối</a>
                </li>
            </ul>
        </div>
    </nav>
</header>