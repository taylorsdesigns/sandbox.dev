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
		<div class="col-md-4"><img src="assets/images/contact.png" alt="Vibrant Shadows Artwork" class="img-responsive center-block"/>
		</div>
		<div class="col-md-4">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="myForm" onSubmit="return validate()">
				<div class="input_long">
					<label for="fname">Full Name</label>
					<br/>
					<input type="text" name="fname" id="fname" tabindex="1"/>
				</div>
				<div class="input_long">
					<label for="email">E-Mail</label>
					<br/>
					<input type="email" name="email" id="email" tabindex="2"/>
				</div>
				<div class="input_long">
					<label for="subject">Subject</label>
					<br/>
					<input type="text" name="subject" id="subject" tabindex="3"/>
				</div>
				<div class="input_long">
					<label for="message">Message</label>
					<br/>
					<textarea id="message" tabindex="4" name="message"></textarea>
				</div>
				<div class="input_long">
					<div class="g-recaptcha" data-sitekey="6LeITSAUAAAAAGLWN3RqsWXqDRgyO-rJlsidqcRg"></div>
				</div>
				<div class="input_long">
					<input type="submit" value="Submit" name="submit"/>
				</div>
			</form>
		</div>
		<div class="col-md-4">
			<ul id="contact" class="list-inline">
				<li><img src="assets/images/phone.png" alt="Phone Image"/>928-566-7901</li>
				<li><img src="assets/images/at.png" alt="At Image"/>nicholas.ryan.taylor@gmail.com</li>
			</ul>
		</div>
	</div>
</div>
@endsection