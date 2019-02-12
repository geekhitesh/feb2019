<html>

<h1>User Registeration</h1>

<script src={{URL::asset('js/user.js')}} ></script>

<body>
	<form action="store" method="POST">
		<input type="text" id="name" name="name" >
		<input type="text" id="age" name="age" >
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	    <input type="submit" value="submit" />
	</form>
</body>
</html>