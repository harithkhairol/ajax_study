<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The responseXML Property GET</title>
</head>
<body>

<h1>The XMLHttpRequest Object</h1>

<p id="demo"></p>

<script>

var xhttp, xmlDoc, txt, x, i;

xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function(){

    if(this.readyState == 4 && this.status == 200){

        xmlDoc = this.responseXML;
        txt = "";
        x = xmlDoc.getElementsByTagName("ARTIST");

        for(i = 0; i < x.length; i++){

            txt = txt + x[i].childNodes[0].nodeValue + "<br>";

        }

        document.getElementById("demo").innerHTML = txt;

    }

};

xhttp.open("GET", "cd_catalog.xml", true);
xhttp.send();
</script>
    
</body>
</html>