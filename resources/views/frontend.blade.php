<!DOCTYPE html>
<html lang="vi">
<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
    <link type="image/x-icon" href="{{url('favicon.ico')}}" rel="shortcut icon"/>
    <link href="https://plus.google.com/107515763736347546999" rel="publisher"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700italic,800italic,700,800&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('css/style.css')}}" type="text/css"/>
    <meta content='GCL' name='generator'/>
	<meta property="fb:app_id" content="813724318767864" />
    <title>{{!empty($meta_title)? $meta_title : 'Giảo Cổ Lam'}}</title>

    <meta property="og:title" content="{{!empty($meta_title)? $meta_title : 'Giảo Cổ Lam'}}">
    <meta property="og:description" content="{{!empty($meta_desc)? $meta_desc : 'Giảo Cổ Lam'}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{Request::url()}}">
    <meta property="og:image" content="{{!empty($meta_image)? $meta_image : url('favicon.ico')}}">
    <meta property="og:site_name" content="{{!empty($meta_title)? $meta_title : 'Giảo Cổ Lam'}}">
	<meta property="fb:app_id" content="813724318767864"/>

    <meta name="twitter:card" content="Card">
    <meta name="twitter:url" content="{{Request::url()}}">
    <meta name="twitter:title" content="{{!empty($meta_title)? $meta_title : 'Giảo Cổ Lam'}}">
    <meta name="twitter:description" content="{{!empty($meta_desc)? $meta_desc : 'Giảo Cổ Lam'}}">
    <meta name="twitter:image" content="{{!empty($meta_image)? $meta_image : url('favicon.ico')}}">

    <meta itemprop="name" content="{{!empty($meta_title)? $meta_title : 'Giảo Cổ Lam'}}t">
    <meta itemprop="description" content="{{!empty($meta_desc)? $meta_desc : 'Giảo Cổ Lam'}}">
    <meta itemprop="image" content="{{!empty($meta_image)? $meta_image : url('favicon.ico')}}">

    <meta name="ABSTRACT" content="{{!empty($meta_desc)? $meta_desc : 'Giảo Cổ Lam'}}"/>
    <meta http-equiv="REFRESH" content="1200"/>
    <meta name="REVISIT-AFTER" content="1 DAYS"/>
    <meta name="DESCRIPTION" content="{{!empty($meta_desc)? $meta_desc : 'Giảo Cổ Lam'}}"/>
    <meta name="KEYWORDS" content="{{!empty($meta_keywords)? $meta_keywords : 'Giảo Cổ Lam, bài viết, hướng dẫn'}}"/>
    <meta name="ROBOTS" content="index,follow"/>
    <meta name="AUTHOR" content="{{!empty($meta_title)? $meta_title : 'Giảo Cổ Lam'}}"/>
    <meta name="RESOURCE-TYPE" content="DOCUMENT"/>
    <meta name="DISTRIBUTION" content="GLOBAL"/>
    <meta name="COPYRIGHT" content="Copyright 2015 by TueLinh"/>
    <meta name="Googlebot" content="index,follow,archive" />
    <meta name="RATING" content="GENERAL"/>
    <!--[if lte IE 8]>
    <script src="{{url('js/html5.js')}}" type="text/javascript"></script>
    <![endif]-->
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="{{url('css/ie.css')}}" type="text/css"/>
    <![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    
    <script type="text/javascript">
            (function () {
                        var _eclickq = window._eclickq || (window._eclickq = []);
                        if (!_eclickq.loaded) {
                        var eclickTracking = document.createElement('script');
                             eclickTracking.async = true;
                             eclickTracking.src = ('https:'==document.location.protocol?'https:':'http:')+'//s.eclick.vn/delivery/retargeting.js';
                             var s = document.getElementsByTagName('script')[0];
                             s.parentNode.insertBefore(eclickTracking, s);
                             _eclickq.loaded = true;                                                           
                        }
                        _eclickq.push(['addPixelId', 13052]);
            })();
            window._eclickq = window._eclickq || [];
            window._eclickq.push(['track', 'PixelInitialized', {}]);
    </script>


</head>

<body class="home">
<!-- Facebook Code Comment-->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '813724318767864',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7&appId=813724318767864";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Facebook Code Comment-->

	
<div class="wrapper" id="wrapper">
    @include('frontend.header')
    @yield('content')
    @include('frontend.footer')
    <div class="overlay" id="overlay"></div>
    @include('frontend.menu_left')
</div>

<!-- Google Code dành cho Thẻ tiếp thị lại -->

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 868661090;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/868661090/?guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code dành cho Thẻ tiếp thị lại -->

<script type="text/javascript" src="{{url('js/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/common.js')}}"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-66012758-1', 'auto');
    ga('send', 'pageview');

</script>

<!-- Google Code dành cho Thẻ tiếp thị lại -->

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 954780037;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/954780037/?guid=ON&amp;script=0"/>
</div>
</noscript>

<div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <style>#cfacebook{position:fixed;bottom:0px;right:10px;z-index:999999999999999;width:250px;height:auto;box-shadow:6px 6px 6px 10px rgba(0,0,0,0.2);border-top-left-radius:5px;border-top-right-radius:5px;overflow:hidden;}#cfacebook .fchat{float:left;width:100%;height:270px;overflow:hidden;display:none;background-color:#fff;}#cfacebook .fchat .fb-page{margin-top:-130px;float:left;}#cfacebook a.chat_fb{float:left;padding:0 25px;width:250px;color:#fff;text-decoration:none;height:40px;line-height:40px;text-shadow:0 1px 0 rgba(0,0,0,0.1);background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAqCAMAAABFoMFOAAAAWlBMV…8/UxBxQDQuFwlpqgBZBq6+P+unVY1GnDgwqbD2zGz5e1lBdwvGGPE6OgAAAABJRU5ErkJggg==);background-repeat:repeat-x;background-size:auto;background-position:0 0;background-color:#3a5795;border:0;border-bottom:1px solid #133783;z-index:9999999;margin-right:12px;font-size:18px;}#cfacebook a.chat_fb:hover{color:yellow;text-decoration:none;}</style>
  <script>
  jQuery(document).ready(function () {
  jQuery(".chat_fb").click(function() {
jQuery('.fchat').toggle('slow');
  });
  });
  </script>
  <div id="cfacebook">
  <a href="javascript:;" class="chat_fb" onclick="return:false;"><i class="fa fa-facebook-square"></i> Liên hệ với chúng tôi </a>
  <div class="fchat">
  <div class="fb-page" data-tabs="messages" data-href="https://www.facebook.com/www.giaocolam.vn" data-width="250" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
  </div>
  </div>

@yield('footer')
</body>
</html>