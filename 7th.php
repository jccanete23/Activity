<html>
<head>
<title>  7th </title>
<body>
<form method = "post" action = "7th.php">
<pre>
Enter Name:               <input type = "text" name ="a" width = "20"><br>
			       <input type = "submit" name = "submit" value = "SUBMIT">
			       <a href="po.html">Home</a>   
</pre>
</form>
<?php
if (isset($_POST['submit'])){
	$nmb = $_POST["a"];
	echo"Your name is $nmb</br>";
}
?>
</body>
</head>
</html>