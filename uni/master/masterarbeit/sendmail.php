<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sendemail Script</title>
</head>
<body>

<!-- Reminder: Add the link for the 'next page' (at the bottom) -->
<!-- Reminder: Change 'YourEmail' to Your real email -->

<?php
$visitor="nobody";

if (isset($_POST['visitor'])){
  $visitor = $_POST['visitor'];
}
if (isset($_POST['visitormail'])){
  $visitormail = $_POST['visitormail'];
}
if(isset($_POST['notes'])){
  $notes = $_POST['notes'];
}

if(empty($notes )) {
	echo "<h2 style='text-align:center'>Bitte einen Kommentar eintragen.</h2>\n";
} else {

	$todayis = date("l, F j, Y, g:i a") ;
	$subject = "MA Feedback";
	$notes = stripcslashes($notes);

	$message = "
	Message: $notes \n
	From: $visitor ( $visitormail )\n
	";

	$from = "From: $visitormail\r\n";
	mail("jan.hinzmann@gmail.com", $subject, $message, $from);
}
?>

<p align="center">
<?php echo $todayis ?>
<br />
Danke <?php echo "$visitor $visitormail"; ?>
<br />

<br />

<a href="index.php">Zur&uuml;ck</a>
</p>

</body>
</html>
