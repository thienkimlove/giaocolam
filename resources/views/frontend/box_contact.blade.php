<div class="box-contact">
    <div class="bg-title03">
        <span><a href="http://www.giaocolam.vn/hoi-dap-chuyen-gia" target="_blank" style="color:#FFFFFF">Đặt câu hỏi với chuyên gia</a></span>    </div>
    <div class="col-right">
        {!! Form::open(['method' => 'POST', 'route' => ['createQuestion'], 'name' => 'questionForm']) !!}
        <input type="text" name="ask_person" class="txt txt-name" placeholder="Họ và tên"/>
        <input type="email" name="ask_email" class="txt txt-email" placeholder="Email"/>
        <input type="number" name="ask_phone" class="txt txt-phone" placeholder="Số điện thoại"/>
        <textarea name="question" class="txt txt-content" placeholder="Nội dung"></textarea>
        <input type="submit" value="gửi đi" class="btn btn-submit"/>
        <span class="mail-name">chiasehay@tuelinh.com</span>
        {!!Form::close()!!}
    </div>
</div>