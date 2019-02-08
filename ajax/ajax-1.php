<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>

<div id="demo">
<h1>The XMLHttpRequest Object</h1>
<button type="button" onclick="loadDoc()">Change Content</button>
</div>

<script>

function loadDoc(){

// XMLHttpRequest object can be used to exchange data with a server behind the scenes
var xhttp = new XMLHttpRequest();

//onreadystatechange : Defines a function to be called when the readyState property changes
xhttp.onreadystatechange = function(){

    // readyState : Holds the status of the XMLHttpRequest.
        //status : Returns the status-number of a request
    if(this.readyState == 4 && this.status == 200){

        // responseText	: Returns the response data as a string
        document.getElementById("demo").innerHTML = this.responseText;

    }

};

//open(method,url,async,user(optional),psw(optional) )	Specifies the request
xhttp.open("GET", "ajax_info.txt", true);

//Sends the request to the server (for GET request)
xhttp.send();

}

</script>


    
</body>
</html>