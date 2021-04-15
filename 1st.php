<html>
<head>
<title> 1st </title>
<body>
<form method = "post" action = "1st.php">
<pre>
Enter Name:               <input type = "text" name ="a" width = "20"><br>
Enter Course:             <input type = "text" name ="b" width = "20"><br>
Enter Section:            <input type = "text" name ="c" width = "20"><br>
Enter Contact Number:     <input type = "text" name ="d" width = "20"><br>
			       <input type = "submit" name = "submit" value = "SUBMIT">
			       <a href="po.html">Home</a>
</pre>
</form>
<?php
if (isset($_POST['submit'])){
	$nm = $_POST["a"];
	$cor = $_POST["b"];
	$sec = $_POST["c"];
	$con = $_POST["d"];
	echo"Name: $nm</br>";
	echo"Course: $cor</br>";
	echo"Section: $sec</br>";
	echo"Contact Number: $con</br>";
}
?>
</body>
</head>
</html>