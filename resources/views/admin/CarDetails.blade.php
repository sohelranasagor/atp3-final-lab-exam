<!DOCTYPE html>
<html>
<head>
	<title>Car Details</title>
	
</head>
<body>

	<a href="{{route('admin.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>

<fieldset>
	<legend>Car Details</legend>
    <table>
        <tr>
            <td>Category:</td>
            <td>{{$car->category}}</td>
        </tr>
        <tr>
            <td>Car Name:</td>
            <td>{{$car->cname}}</td>
        </tr>
        <tr>
            <td>Price per day:</td>
            <td>{{$car->price}}</td>
        </tr>
    </table>
</fieldset>

</body>
</html>