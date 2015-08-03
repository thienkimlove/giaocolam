<div class="box-video">
    @foreach ($videoLists as $k => $video)
    @if ($k == 0)
    <div class="data">
        <iframe width="100%" height="315" src="{{url($video->file_name)}}" frameborder="0" allowfullscreen></iframe>
        <h3>{{str_limit($video->title, 40)}}</h3>
        <span class="view">{{$video->views}} lượt xem</span>
    </div>
    @else
    <div class="item">
        <a href="{{url('video', $video->slug)}}" class="thumbs">
            <img src="{{url('image-cached/105x69', $video->image)}}" alt="">
        </a>
        <h3>{{str_limit($video->title, 40)}}</h3>
        <p>{{str_limit($video->desc, 70)}}</p>
        <span class="view">{{$video->views}} lượt xem</span>
    </div>
    @endif
    @endforeach
</div>