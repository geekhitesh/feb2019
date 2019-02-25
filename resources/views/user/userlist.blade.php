<html>


<script>

function loadUserList() {


	  var endpoint='http://localhost:8000/user/list';
	  var xhttp;
	  xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	        /*var json_data = this.responseText;
	        var data = JSON.parse(json_data);
	        //console.log(json_data);
	        //console.log(data);

	        var length = data.length;
	        var div_string = '';

	        for(var i=0;i<length;i++) {
	        	div_string +=data[i]+'<br/>';

	        }

	        document.getElementById('userList').innerHTML = div_string;*/

	    }
	  };
	  xhttp.open("GET", endpoint, true);
	  xhttp.send();   

}


function greetUser() {


	  var endpoint='http://localhost:8000/greet/';
	  var xhttp;
	  var name = document.getElementById('name').value;
	  endpoint +=name;
	  xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	    	//console.log(this.responseText);

	    	document.getElementById('greetUserContent').innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", endpoint, true);
	  xhttp.send();   

}

</script>

<input type="button" name="list" onclick="loadUserList();" id="list" value="Show List"/><br/>
<input type="text" name="name" id="name" value=""/>
<input type="button" name="greet" onclick="greetUser();" id="greet" value="Greet User"/>

<div id="userList">
<p>Show List</p>

</div>

<br/>
<div id="greetUserContent">Greetings</div> 
</html>