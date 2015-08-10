<div class="question">
    <div class="bg-title03">
        <span>Câu hỏi thường gặp</span>
    </div>
    <ul class="nav-list">
        @foreach ($slideQuestions as $question)
        <li>
            <a href="{{url('hoi-dap-chuyen-gia')}}" title="">{{str_limit($question->question, 40)}}</a>
        </li>
    </ul>
    <a href="{{url('hoi-dap-chuyen-gia')}}" class="ask">Đặt câu hỏi</a>
</div>