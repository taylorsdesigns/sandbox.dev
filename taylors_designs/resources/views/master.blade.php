<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Taylor's Designs | @yield('title') </title>
<link rel="shortcut icon" href="/assets/images/icon.png" />
<link type="text/css" href="/assets/css/bootstrap.min.css" rel="stylesheet" />
<link type="text/css" href="/assets/css/style.css" rel="stylesheet" />
<link type="text/css" href="/assets/css/mstyle.css" rel="stylesheet" media="(max-device-width:720px)" />
<meta name="viewport" content="initial-scale=1, width=device-width" />
<meta name="description" content="Website developer from Arizona. 21 years old and a SkillsUSA national champion in web page development." />
<meta name="keywords" content="Taylor's, Taylor's Designs, Nick, Nick Taylor, Web Services, Web Design, PHP, Web Development, SkillsUSA, SkillsUSA 2013, SkillsUSA 2013 Web Design, SkillsUSA 2013 Nationals" />
<script src="/assets/js/jquery-2.2.2.min.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/js/script.js" type="text/javascript"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<div class="container">
	<nav class="navbar navbar-default row" role="navbar">
     <div class="container-fluid">
    	<div class="navbar-header">
            <span class="visible-xs-inline-block"><a href="/"><img src="/assets//assets/images/logom.png" id="logo_mobile" /></a></span>
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="collapse">
        	<ul class="nav navbar-nav col-sm-12 row">
            	<li id="logo" class="hidden-xs col-md-8"><a href="/"><img src="/assets/images/logo.png" /></a></li>
            	<li class="col-md-1"><a href="/">home</a></li>
                <li class="col-md-1"><a href="/work">work</a></li>
                <li class="col-md-1"><a href="/resume">r&eacute;sum&eacute;</a></li>
                <li class="col-md-1"><a href="/contact">contact</a></li>
            </ul>
        </div>
      </div>
    </nav>
    @yield('content')
   </div><!-- end container -->
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51581506-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>