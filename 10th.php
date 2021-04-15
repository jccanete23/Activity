<html>
<head>
<title>  10th </title>
<body>
<form method = "post" action = "10th.php">
<pre>
Enter Your Surname:          <input type = "text" name ="a" width = "20"><br>
Enter Your First Name:       <input type = "text" name ="b" width = "20"><br>
Enter Your Middle Name:      <input type = "text" name ="c" width = "20"><br>
			          <input type = "submit" name = "submit" value = "SUBMIT">
			          <a href="po.html">Home</a>
</pre>
</form>
<?php
if (isset($_POST['submit'])){
	$sur = $_POST["a"];
	$f = $_POST["b"];
	$m = $_POST["c"];
	echo"$sur , $f $m.</br>";
}
?>
</body>
</head>