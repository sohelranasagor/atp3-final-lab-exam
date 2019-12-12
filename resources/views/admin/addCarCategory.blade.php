<!DOCTYPE html>
<html>
<head>
	<title>Add Car Category</title>
</head>
<body>
	<h1>Add Car Category</h1>
	<a href="{{route('admin.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>
	
	<form method="post">
	@csrf
	<table>
		<tr>
			<td>Category</td>
			<td><input type="text" name="category"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save" ></td>
		</tr>
	</table>
</form>

</body>
</html>