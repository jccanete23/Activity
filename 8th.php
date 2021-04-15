<html>
<head>
<title>  8th </title>
<body>
<form method = "post" action = "8th.php">
<pre>
Enter 1st Number:               <input type = "text" name ="a" width = "20"><br>
Enter 2nd Number:               <input type = "text" name ="b" width = "20"><br>
			             <input type = "submit" name = "submit" value = "SUBMIT">
			             <a href="po.html">Home</a>
</pre>
</form>
<?php
if (isset($_POST['submit'])){
	$fi = $_POST["a"];
	$se = $_POST["b"];
	$nmb = $fi + $se;
	echo"The sum of two number $nmb</br>";
}
?>
</body>
</head>
</html>