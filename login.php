<?php

echo "DB saved information : <br>";
$dbUserName = "humaun";
$dbPassword = "1234";

echo $dbUserName;
echo "<br>";
echo $dbPassword;

echo "<hr>";

echo "User input information : <br>";
$userInput = $_REQUEST['username'];
$passInput = $_REQUEST['password'];

echo $userInput;
echo "<br>";
echo $passInput;

echo "<hr>";

echo "Login information : <br>";

if($dbUserName==$userInput && $dbPassword==$passInput ){

	echo "<font color='green'>your login successfull </font>";
}
else{
	echo "<font color='red'>Login failed</font>";
}
