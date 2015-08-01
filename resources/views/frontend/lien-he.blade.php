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
                            <form action="" method="post">
                                <input type="text" name="name" class="txt txt-name" placeholder="Họ và tên"/>
                                <input type="email" name="email" class="txt txt-email" placeholder="Email"/>
                                <input type="number" name="phone" class="txt txt-phone" placeholder="Số điện thoại"/>
                                <input type="email" name="email" class="txt txt-add" placeholder="Địa chỉ"/>
                                <textarea name="content" class="txt txt-content" placeholder="Nội dung"></textarea>
                                <input type="submit" value="Gửi" class="btn btn-submit"/>
                                <input type="reset" value="Làm lại" class="btn btn-reset"/>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="box-map">
                    <img src="images/map.jpg" width="1360" height="450" alt="">
                </div>
                <!-- EndBoxContact -->
            </div><!--//col-left-->
            <div class="col-right">
                <div class="box-adv">
                    <a href="#">
                        <img src="images/tuvan_300_72.jpg" alt="Tổng đài">
                    </a>
                </div>
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
                            <img src="images/thumbs.jpg" alt="">
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
                <div class="box-news">
                    <div class="bg-title03">
                        <span>Tin tức nổi bật</span>
                    </div>
                    <ul class="nav-list">
                        <li>
                            <a href="" title="">Tiểu tử siêu quậy trong bộ phim kinh điển</a>
                        </li>
                        <li>
                            <a href="" title="">Mòng biển 'khiêu vũ' để kiếm thức ăn</a>
                        </li>
                        <li>
                            <a href="" title="">Vận may ngày thứ hai (13/7)</a>
                        </li>
                        <li>
                            <a href="" title="">Vụ vượt ngục chấn động đầu thế kỷ 21 của 'bố già' Mexico</a>
                        </li>
                        <li>
                            <a href="" title="">Những con số gây sốc về trùm ma túy El Chapo</a>
                        </li>
                    </ul>
                </div>
                <div class="box-adv">
                    <a href="#">
                        <img src="images/adv_01.png" alt="Tue linh">
                    </a>
                </div>
                <div class="box-consult">
                    <div class="bg-title03">
                        <span>Tư vấn giảo cổ lam</span>
                    </div>
                    <article class="item">
                        <a href="" title="">
                            <img src="images/tuvan02.jpg" width="306" height="134" alt="" class="thumbs">
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
                        <form action="" method="post">
                            <input type="text" name="name" class="txt txt-name" placeholder="Họ và tên"/>
                            <input type="email" name="email" class="txt txt-email" placeholder="Email"/>
                            <input type="number" name="phone" class="txt txt-phone" placeholder="Số điện thoại"/>
                            <textarea name="content" class="txt txt-content" placeholder="Nội dung"></textarea>
                            <input type="submit" value="gửi đi" class="btn btn-submit"/>
                            <span class="mail-name">Chamsockhachhang@gmail.com</span>
                        </form>
                    </div>
                </div>
                <div class="box-social-fb">
                    <img src="images/social.jpg" alt="">
                </div>
            </div><!--//col-right-->
            <div class="clear"></div>
        </div><!--//layout-home-->
        <div class="clear"></div>
    </section><!--//section-->
@endsection