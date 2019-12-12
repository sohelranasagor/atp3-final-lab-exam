<!DOCTYPE html>
<html>
<head>
	<title>Car List</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}
		
		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}
		
		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		</style>
</head>
<body>
	<h1>Car List</h1>
	<a href="{{route('admin.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>
	<input id="myInput" type="text" placeholder="Search.." style="width:100%;height:30px"><br><br>
	
	<table border="1">
		<thead>
			<tr>
				<th>Category</th>
				<th>Car Name</th>
				<th>Price per day</th>
				<th>ACTION</th>
			</tr>
		</thead>

	 @foreach($cars as $s)
		<tbody id="myTable">
			<tr>
				<td>{{$s->category}}</td>
				<td>{{$s->cname}}</td>
				<td>{{$s->price}}</td>
				<td>
                    <a href="{{route('admin.editCar', $s->carId)}}">Edit</a> |
                    <a href="{{route('admin.deleteCar', $s->carId)}}">Delete</a> |
                    <a href="{{route('admin.CarDetails', $s->carId)}}">Details</a> 
				</td>
			</tr>
		</tbody>
	@endforeach

	</table>
	<script>
	$(document).ready(function(){
	$("#myInput").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#myTable tr").filter(function() {
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
	});
	</script>

</body>
</html>