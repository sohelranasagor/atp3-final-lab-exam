<!DOCTYPE html>
<html>
<head>
	<title>Add Cars</title>
	
</head>
<body>

	<a href="{{route('admin.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>

<fieldset>
	<legend>Add Car For Rent</legend>

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
                <td>Category:</td>
                <td>
                    <select name="category">
                        <option value="0" disabled="true" selected="ture">Select Category</option>
                        @foreach($category as $cat)
                        <option value="{{$cat->category}}">{{$cat->category}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Car Name:</td>
                <td><input type="text" name="carname"></td>
            </tr>
            <tr>
                <td>price per day:</td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="save"></td>
            </tr>
        </table>
	</form>
</fieldset>

</body>
</html>