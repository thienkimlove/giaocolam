<!DOCTYPE html>
<html data-ng-app="Application">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta name="description" content="{{!empty($meta_desc)? $meta_desc : 'LycoEye'}}" />
    <meta name="keyword" content="{{!empty($meta_keywords)? $meta_keywords : 'LycoEye, bài viết, hướng dẫn'}}" />
    <title>{{!empty($meta_title)? $meta_title : 'Lycoeye.vn'}}</title>
    <link rel="stylesheet" href="{{url('css/frontend.css')}}" type="text/css"/>
    <!--[if lte IE 8]>
    <script src="{{url('js/html5.js')}}" type="text/javascript"></script>
    <![endif]-->
</head>
<body data-ng-controler="MainController">
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '731488213627616',
            xfbml      : true,
            version    : 'v2.3'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=731488213627616&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class="wrapper">

    @include('frontend.header')

    @include('frontend.nav')

    <section class="section fixW">
       @yield('content')
    </section>
    <!-- Footer -->
    @include('frontend.footer')

    <script>
        var Config = {};
        Config.url = '{{ url('/') }}';

    </script>
    <script type="text/javascript" src="{{url('/js/frontend.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/frontend-custom.js')}}"></script>
    <script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",13099]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>
    @yield('footer')
</div>
</body>
</html>