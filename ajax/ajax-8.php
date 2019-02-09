<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The getResponseHeader() Method</title>
</head>
<body>

<h1>The XMLHttpRequest Object</h1>

<p>The getResponseHeader() function is used to return specific header information from a resource, like length, server-type, content-type, last-modified, etc:</p>

<p>Last modified: <span id="demo"></span></p>

<script>

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function(){

    if(this.readyState == 4 && this.status == 200){

        document.getElementById("demo").innerHTML = this.getResponseHeader("Last-Modified");

    }

};
xhttp.open("GET", "ajax_info.txt", true);
xhttp.send();

</script>
    
</body>
</html>