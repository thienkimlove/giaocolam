<!-- Header -->
<header class="header">
    <div class="fixW in">
        <h1 class="fl">
            <a href="{{url('/')}}" title="Lycoeye" class="logo"><img src="{{url('images/Logo-01.png')}}" alt="Lycoeye"></a>
        </h1>
        <div class="slogan">
            <img src="{{url('images/Slogan-01.png')}}" />
        </div>
        <div class="box-search" id="box-search">
           @include('frontend.search_form')
        </div>
    </div>
</header>
<!-- endHeader -->