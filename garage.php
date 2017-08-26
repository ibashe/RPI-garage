<html>
<head>
</head>
<body>
    <form name="theform" method="post" action="<?php print($_SERVER['PHP_SELF']); ?>">
<?php

$status="1";
if(isset($_POST['turnon'])){
    // this is where you call your python or whatever when the status is already 1
    $status="0";
    echo shell_exec("/home/pi/garage/gpio7.py 2>&1");
}

if(isset($_POST['turnoff'])){
    // this is where you call your python or whatever when status is already 0
    $status="1";
    echo shell_exec("/home/pi/garage/gpio7.py 2>&1");
}

if ($status==="1") {
    echo "<input name=\"turnon\" type=\"submit\" style=\"background-color:#FF0000; width: 400px; height:350px; font-size:60px;\" value=\"Open Garage\">";
}  else {
    echo "<input name=\"turnoff\" type=\"submit\" style=\"background-color:#009900; width: 400px; height:350px; font-size:60px;\" value=\"Close Garage\">";
}
?>
</form>
</body>
</html>
