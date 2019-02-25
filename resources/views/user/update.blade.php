<html>

<h1>User update</h1>


<body>
	<form action="update" method="POST">

		Id:<input type="text" id="id" name="id" >
		Name:<input type="text" id="name" name="name" >
		Age:<input type="text" id="age" name="age" >
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	    <input type="submit" value="submit" />
	</form>
</body>
</html>