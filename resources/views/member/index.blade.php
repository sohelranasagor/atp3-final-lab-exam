<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home.! {{$user->name}}</h1>
	<a href="{{route('member.show')}}">My profile</a> |
	<a href="{{route('member.carList')}}">Cars For Rent</a> | 
	<a href="{{route('logout.index')}}">logout</a>

</body>
</html>