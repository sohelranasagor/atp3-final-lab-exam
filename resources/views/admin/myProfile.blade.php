<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	
</head>
<body>

	<a href="{{route('admin.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>

<fieldset>
	<legend>My Profile</legend>

	@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li><font color="red">{{ $error }}</font></li>
                @endforeach
            </ul>
        </div>
    @endif

	<form method="post" >
		@csrf
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="{{$user->name}}"></td>
            </tr>
            <tr>
                <td>Contact No:</td>
                <td><input type="text" name="phn" value="{{$user->cell}}"></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" value="{{$user->username}}"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="text" name="password" value="{{$user->password}}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
	</form>
</fieldset>

</body>
</html>