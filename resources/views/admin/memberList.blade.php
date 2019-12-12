<!DOCTYPE html>
<html>
<head>
	<title>Member List</title>
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
	<h1>Member List</h1>
	<a href="{{route('admin.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>
	<input id="myInput" type="text" placeholder="Search.." style="width:100%;height:30px"><br><br>
	
	<table border="1">
		<thead>
			<tr>
				<th>Name</th>
				<th>User Name</th>
				<th>Contact No</th>
				<th>ACTION</th>
			</tr>
		</thead>

	 @foreach($users as $s)
		<tbody id="myTable">
			<tr>
				<td>{{$s->name}}</td>
				<td>{{$s->username}}</td>
				<td>{{$s->cell}}</td>
				<td>
					<a href="{{route('admin.deleteMember', $s->id)}}">Delete</a>
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