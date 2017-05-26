<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h2>Name: {{$r->name}}</h2>
	<h2>From: {{$r->email}}</h2>
	<h2>Subject: {{$r->subject}}</h2>
	<p>{{$r->message}}</p>
</body>
</html>