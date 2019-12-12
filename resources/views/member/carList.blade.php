<!DOCTYPE html>
<html>
<head>
	<title>Cars For Rent</title>
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
	<h1>Cars For Rent</h1>
	<a href="{{route('member.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>
	<input id="myInput" type="text" placeholder="Search.." style="width:100%;height:30px"><br><br>
	<select name="category">
        <option value="0" disabled="true" selected="ture">Select Category</option>
        @foreach($category as $cat)
        <option value="{{$cat->category}}">{{$cat->category}}</option>
        @endforeach
    </select> <br><br>
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
                    <a href="">Add to rent List</a>
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