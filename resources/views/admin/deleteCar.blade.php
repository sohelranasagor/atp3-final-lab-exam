<!DOCTYPE html>
<html>
<head>
	<title>Delete Car</title>
	
</head>
<body>

	<a href="{{route('admin.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>

<fieldset>
	<legend>Delete Car</legend>
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
    <form method="post">
    @csrf
        <h3>Are you sure?</h3>
        <input type="submit" name="submit" value="Confirm">
    </form>
</fieldset>

</body>
</html>