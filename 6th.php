<html>
<head>
<title> 6th </title>
<body>
<form method = "post" action = "6th.php">
<pre>
Enter Number:               <input type = "text" name ="a" width = "20"><br>
			         <input type = "submit" name = "submit" value = "SUBMIT">
			         <a href="po.html">Home</a>
</pre>
</form>
<?php
if (isset($_POST['submit'])){
	$nmb = $_POST["a"];
	echo"You input  $nmb</br>";
}
?>
</body>
</head>
</html>