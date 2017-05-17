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
    <img src="assets/images/resume.jpg" alt="Nick Taylor's Resume" class="center-block resume img-responsive" />
  </div>
</div>
@endsection