
function display_room(model){

	var hr = new XMLHttpRequest();
    	// Variable erstellen
    	var url = "http://127.0.0.1/habblet/getroom.php";
    	var vars = "model="+model;
    	hr.open("POST", url, true);
 
    	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    	hr.onreadystatechange = function() {
   	if(hr.readyState == 4 && hr.status == 200) {
   	var return_data = hr.responseText;
		document.getElementById("roomshow").innerHTML = return_data;
		document.getElementById('colorform').value = model;

   		}
    	}
    hr.send(vars); // Actually execute the request
    document.getElementById("roomshow").innerHTML = "L&auml;dt";
	
}



