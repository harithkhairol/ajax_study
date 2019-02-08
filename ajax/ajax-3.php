<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request Data POST</title>
</head>
<body>

<button type="button" onclick="loadDoc()">Request Data</button>

<p id="demo"></p>
    
<script>

function loadDoc(){

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){

            document.getElementById("demo").innerHTML = this.responseText;

        }

    };
    
    xhttp.open("POST", "ajax-3-data.php", true);
    xhttp.send();

}

</script>

</body>
</html>