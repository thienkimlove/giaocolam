@extends('frontend')
@section('content')
    <section class="section fix">
        <div class="layout-home">
            <div class="col-left">
                <div class="box-media">
                    <div class="hot-video cf">
                        <div class="col-left">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/RpVqM2TGhiE" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="col-right">
                            <ul class="list-video">
                                <li><a href="" class="active">Đầu tư “khủng” để Hoàng Nam vào top 200 thế giới</a></li>
                                <li><a href="">Chuyên gia tư vấn bi-a (P20): Caroom mượn má</a></li>
                                <li><a href="">Bầu cử Barca: Chủ tịch Real bị đem ra "công kích"</a></li>
                                <li><a href="">Chuyên gia tư vấn bi-a (P20): Caroom mượn má</a></li>
                                <li><a href="">Bầu cử Barca: Chủ tịch Real bị đem ra "công kích"</a></li>
                            </ul>
                        </div>
                    </div>
                    <article class="item">
                        <a class="thumb" href="" title="">
                            <img src="images/video-303x130-1.jpg" width="303" height="130" alt=""/>
                        </a>
                        <h3>
                            <a href="" title="">Đầu tư “khủng” để Hoàng Nam vào top 200 thế giới</a>
                            <span class="view">100 lượt xem</span>
                        </h3>
                    </article>
                    <article class="item">
                        <a class="thumb" href="" title="">
                            <img src="images/video-303x130-1.jpg" width="303" height="130" alt=""/>
                        </a>
                        <h3>
                            <a href="" title="">Đầu tư “khủng” để Hoàng Nam vào top 200 thế giới</a>
                            <span class="view">100 lượt xem</span>
                        </h3>
                    </article>
                    <article class="item">
                        <a class="thumb" href="" title="">
                            <img src="images/video-303x130-1.jpg" width="303" height="130" alt=""/>
                        </a>
                        <h3>
                            <a href="" title="">Đầu tư “khủng” để Hoàng Nam vào top 200 thế giới</a>
                            <span class="view">100 lượt xem</span>
                        </h3>
                    </article>
                    <article class="item">
                        <a class="thumb" href="" title="">
                            <img src="images/video-303x130-1.jpg" width="303" height="130" alt=""/>
                        </a>
                        <h3>
                            <a href="" title="">Đầu tư “khủng” để Hoàng Nam vào top 200 thế giới</a>
                            <span class="view">100 lượt xem</span>
                        </h3>
                    </article>
                    <div class="box-paging">
                        <ul class="nav-paging">
                            <li>
                                <a href="" title="">«</a>
                            </li>
                            <li>
                                <a class="current" href="" title="">1</a>
                            </li>
                            <li>
                                <a href="" title="">2</a>
                            </li>
                            <li>
                                <a href="" title="">3</a>
                            </li>
                            <li>
                                <a href="" title="">4</a>
                            </li>
                            <li>
                                <a href="" title="">5</a>
                            </li>
                            <li>
                                <a href="" title="">»</a>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div><!--//box-media-->
            </div><!--//col-left-->
            <div class="col-right">
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