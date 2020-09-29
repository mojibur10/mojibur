<?php 
$name    = @$_POST['name'];
$email   = @$_POST['email'];
$Subject = @$_POST['Subject'];
$webside = @$_POST['webside'];
$sms     = @$_POST['sms'];
echo "<p>sender name :</p>.$name";
echo "<p>sender email :</p>.$email";
echo "<p>Subject     :</p>.$Subject";
echo "<p>sender webside :</p>.$webside";
echo "<p>sender sms :</p>.$sms";

 ?>