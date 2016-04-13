<div class="question">
    <div class="bg-title03">
        <span><a href="http://www.giaocolam.vn/hoi-dap-chuyen-gia" style="color:#FFFFFF">Câu hỏi thường gặp</a></span>    </div>
    <ul class="nav-list">
        @foreach ($slideQuestions as $question)
        <li>
            <a href="{{url('hoi-dap-chuyen-gia')}}" title="">{{str_limit($question->question, 40)}}</a>
        </li>
        @endforeach
    </ul>
    <a href="{{url('hoi-dap-chuyen-gia')}}" class="ask">Đặt câu hỏi</a>
</div>