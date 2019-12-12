<!DOCTYPE html>
<html>
<head>
    <title>Edit Car Info</title>
</head>
<body>
	<h1>Edit Car Info</h1>
	<a href="{{route('admin.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>
	
	<form action="" method="POST">
        <table border="1">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li><font color="red">{{ $error }}</font></li>
                    @endforeach
                </ul>
            </div>
        @endif
		
            <tr>
                <td>Category</td>
                <td><input type="text" name="category" value="{{$car->category}}"></td>
            </tr>
            <tr>
                <td>Car Name</td>
                <td><input type="text" name="carname" value="{{$car->cname}}"></td>
            </tr>
            <tr>
                <td>Price per day</td>
                <td><input type="text" name="price" value="{{$car->price}}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>