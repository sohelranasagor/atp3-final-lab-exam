<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	
</head>
<body>

	<a href="{{route('admin.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>

<fieldset>
	<legend>Delete Profile</legend>
    <table>
        <tr>
            <td>Name:</td>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <td>Contact No:</td>
            <td>{{$user->cell}}</td>
        </tr>
        <tr>
            <td>Username:</td>
            <td>{{$user->username}}</td>
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