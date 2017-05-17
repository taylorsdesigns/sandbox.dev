@extends('master')

@section('title', 'Work')

@section('content')
    <div class="row">
    	<div class="col-sm-12"><h1>
			{!! $newstr !!}
		</h1></div>
    </div>
    
<div id="content" class="col-sm-12">
  <div class="row">
  	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
<div class="item active">
      <a href="http://www.riosalado.edu/web/interactive/riolearn-demo/default.aspx" target="_blank"><img src="assets/images/work/rio.jpg" alt="Riolearn Demo">
      <div class="carousel-caption">
        <p>The web team of Rio Salado replicated our online course, to allow students to see what it would be like to take a class with us.</p>
      </div></a>
    </div>
    
    <div class="item">
      <a href="http://www.azpbs.org" target="_blank"><img src="assets/images/work/pbs.jpg" alt="PBS mobile friendly">
      <div class="carousel-caption">
        <p>I replicated the old AZ PBS website, then added Foundation 5 to make it mobile friendly.</p>
      </div></a>
    </div>

    <div class="item">
      <a href="http://wholesale.aag.rocks" target="_blank"><img src="assets/images/work/aag.jpg" alt="Anderson Auto Group">
      <div class="carousel-caption">
        <p>User authentication complete with admin and non-admin sections.</p>
      </div></a>
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
</div>
@endsection