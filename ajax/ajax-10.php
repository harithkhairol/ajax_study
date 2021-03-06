<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX PHP Example</title>
</head>
<body>

<h1>The XMLHttpRequest Object</h1>

<h3>Start typing a name in the input field below:</h3>

<form action="">
First name: <input type="text" id="txt1" onkeyup="showHint(this.value)"> 
</form>

<p>Suggestions: <span id="txtHint"></span></p>

<script>

function showHint(str){

    var xhttp;

    if(str.length == 0){

        document.getElementById("txtHint").innerHTML = "";
        return;

    }

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){

            document.getElementById("txtHint").innerHTML = this.responseText;

        }

    };

    xhttp.open("GET", "gethint.php?q="+str, true);
    xhttp.send();


}

</script>
    
</body>
</html>