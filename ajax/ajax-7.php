<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The getAllResponseHeaders() Method</title>
</head>

<body>

<h1>The XMLHttpRequest Object</h1>

<p>The getAllResponseHeaders() function returns all the header information of a resource, like length, server-type, content-type, last-modified, etc:</p>

<p id="demo"></p>

<script>

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function(){

    if(this.readyState == 4 && this.status == 200){

        document.getElementById("demo").innerHTML = this.getAllResponseHeaders();
        this.getAllResponseHeaders();

    }

};

xhttp.open("GET", "ajax_info.txt", true);
xhttp.send();

</script>
    
</body>
</html>