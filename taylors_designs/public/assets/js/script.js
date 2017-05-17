function changeWord() {
	var heart = document.getElementById("heart");
	heart.innerHTML = "&nbsp;&nbsp;&nbsp;&hearts;&nbsp;&nbsp;&nbsp;";
}
function changeHeart() {
	var heart = document.getElementById("heart");
	heart.innerHTML = "&amp;hearts;";
}
function validate()
{
	var isValid = true;
	var form = document.forms["myForm"];
	if(form["fname"].value == "" || form["fname"].value == null)
	{
		isValid = false;
	 	document.getElementById("fname").style.border = "1px #f00 solid";
	}
	
	if(form["email"].value == "" || form["email"].value == null)
	{
		isValid = false;
	 	document.getElementById("email").style.border = "1px #f00 solid";
	}
	
	return isValid;
}
//Google Analytics
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51581506-1', 'nicktaylordesigns.com');
  ga('send', 'pageview');