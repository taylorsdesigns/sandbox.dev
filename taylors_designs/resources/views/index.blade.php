@extends('master')

@section('title', 'Home')

@section('content')
    <div class="row">
    	<div class="col-sm-12"><h1>
			{!! $newstr !!}
		</h1></div>
    </div>

 <div id="content" class="col-sm-12">
  <div class="row">
    <div class="col-sm-4"><img src="/assets/images/me.jpg" alt="An image of me" class="me img-responsive" /></div>
    <div class="col-md-4">
      <h2>A Little About Me</h2>
      <p>I'm am currently <?php echo date('m-d') < date("11-14") ? date('Y') - date("1994") - 1 : date('Y') - date("1994"); ?> years young. I am pursuing a computer science degree at Arizona State University. In my free time I love to code various software! Although web development is my strongest area, I do dapple around in languages such as C# and Java.</p>
<p>
However, coding is not my entire life. I love me some freestyle bmx! I've been riding since I was 15 years old. Everyone has a passion, and mine is riding my bicycle. </p>
    </div>
    <div class="col-md-4">
      <h3>SkillsUSA</h3>
      <p>In 2013, I attended the SkillsUSA dstate competition for Arizona. My partner and I took on twelve different teams in the web design competition. We won the gold medal and the right to represent Arizona at the national level later that year. We trained for hours a day before we competed. Our hard work paid off as we were awarded the gold medal for the SkillsUSA national web design competition.</p>
    <p>The same year, I also competed in Job Skill <abbr title="Demostration">Demo</abbr>, a competition that has you demostration any skill that is not related to your other competition. I choose to demostrate my skill in video game development. I developed a simple game, Pong, in C#. Then I demostrated how I could improve upon the game by adding bells and whisles to the game. Out of nine competitors, I earned the gold medal. However, the national competition only allows one competition per person. So I chose to stick by my partners side, and compete for web design.</p>
    </div>
  </div>
  <div class="row">
  	<div class="col-sm-12"><img src="assets/images/news.png" alt="News Paper Artical" class="news img-responsive"></div>
  </div>
</div>
@endsection