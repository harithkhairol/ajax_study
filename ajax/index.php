<!-- ./php/index.php -->

<html>
    <head>
        <title>Hello World</title>
    </head>

    <body>
        <h1>AJAX</h1>

        <h2>Ajax is a developer dreams because:</h2>

        <ol>
        
        <li>Update a web page without reloading the page</li>
        <li>Request data from a server - after the page has loaded</li>
        <li>Receive data from a server - after the page has loaded</li>
        <li>Send data to a server - in the background</li>

        </ol>

        <br>

        <table>

        <!-- start table style -->

        <style>
        
       table {

        font-family: arial, sans-serif;
        border-collapse: collapse;
        
        }

        td, th {

        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;

        }

        </style>



        <!-- end table style -->

        <tr>
        <th>Property</th>
        <th>Description</th>
        </tr>

        <tr>
        <td>onreadystatechange</td>
        <td>Defines a function to be called when the readyState property changes
        </td>
        </tr>

        <tr>
        <td>readyState</td>
        <td>Holds the status of the XMLHttpRequest. <br>
        0: request not initialized <br>
        1: server connection established <br>
        2: request received  <br>
        3: processing request  <br>
        4: request finished and response is ready</td>
        </tr>

        <tr>
        <td>status</td>
        <td>200: "OK" <br>
        403: "Forbidden" <br>
        404: "Page not found"</td>
        </tr>

        <tr>
        <td>statusText</td>
        <td>Returns the status-text (e.g. "OK" or "Not Found")</td>
        </tr>

        </table>
  
        <br><hr><br>



        <ul>
        <li><a href="ajax-1.php">Change Content GET</a></li>
        <li><a href="ajax-2.php">Send Information GET</a></li>
        <li><a href="ajax-3.php">Request Data POST</a></li>
        <li><a href="ajax-4.php">Send Information POST</a></li>
        <li><a href="ajax-5.php">Callback Function GET</a></li>
        <li><a href="ajax-6.php">The responseXML Property GET</a></li>
        <li><a href="ajax-7.php">The getAllResponseHeaders() Method</a></li>
        <li><a href="ajax-8.php">The getResponseHeader() Method</a></li>
        <li><a href="ajax-9.php">AJAX XML Example</a></li>
        <li><a href="ajax-10.php">AJAX PHP Example</a></li>
        <li><a href="ajax-11.php">AJAX ASP Example</a></li>
        </ul>
    </body>
</html>
