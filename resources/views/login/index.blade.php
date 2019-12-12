<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	
	
</head>
<body>

<fieldset>
	<legend>Login</legend>

	@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li><font color="red">{{ $error }}</font></li>
                @endforeach
            </ul>
        </div>
    @endif
        
    <div class="alert alert-danger">
        <font color="red">{{session('msg')}}</font>
    </div>
	<form method="post" >
		@csrf
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
        <tr>
			<td></td>
			<td><a href="{{route('reg.index')}}">Registration</a></td>
		</tr>
	</table>
	</form>
</fieldset>
</body>
</html>