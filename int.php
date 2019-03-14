<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="bootstap/css/bootstrap-theme.css" type="text/css"/>

    <!--jQuery library-->   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("form").toggle();
  });
});
</script>
</head>
<body>
<nav>
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><p align="center">PHONE DIRECTORY </p></center></a>
                </div>
                   
            </div>  
        
        </nav>

<button style="margin-top:60px">Add</button>
<form action="connectionn.php" method="post" style="margin-top:50px" >
            Name: <input type="text" name="name">
            Phone: <input type="number" name="phone">
            <input type="submit"  name="submit" value="submit">
        </form>
</body>
</html>

