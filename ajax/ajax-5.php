<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Callback Function GET</title>
</head>
<body>


<h1>The XMLHttpRequst Object</h1>

<button type="button" onclick="loadDoc('ajax_info.txt' , myFunction1)">Change Content 1</button>
<button type="button" onclick="loadDoc('ajax_info.txt' , myFunction2)">Change Content 2</button>

<div id="demo1">abc</div>
<div id="demo2">defg</div>


<script>

function loadDoc(url, cFunction){

    var xhttp;
    xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){

            cFunction(this);

        }

    };

    xhttp.open("GET", url, true);
    xhttp.send();

}

function myFunction1(xhttp) {

  document.getElementById("demo1").innerHTML = xhttp.responseText;

}

function myFunction2(xhttp){

    document.getElementById("demo2").innerHTML = xhttp.responseText;

}

</script>

    
</body>
</html>