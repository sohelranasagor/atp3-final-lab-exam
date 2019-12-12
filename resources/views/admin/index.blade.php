<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home.! {{$user->name}}</h1>
    <a href="{{route('admin.show')}}">My profile</a> | 
    <a href="{{route('admin.memberList')}}">Member List</a> |
    <a href="{{route('admin.addCarCategory')}}">Add Category</a> | 
    <a href="{{route('admin.addCars')}}">Add Car For Rent</a> |
    <a href="{{route('admin.carList')}}">Car List</a> |
	<a href="{{route('logout.index')}}">logout</a>

</body>
</html>