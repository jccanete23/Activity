<html>
<head>
<title>  11th </title>
<body>

<form method = "post" action = "11th.php">
<pre>
Enter Your First Score:        <input type = "text" name ="a" width = "20"><br>
Enter Your Second Score:       <input type = "text" name ="b" width = "20"><br>
Enter Your Third Score:        <input type = "text" name ="c" width = "20"><br>
			          <input type = "submit" name = "submit" value = "SUBMIT">
			          <a href="po.html">Home</a>
</pre>
</form>
<?php
if (isset($_POST['submit'])){
	$fir = $_POST["a"];
	$se = $_POST["b"];
	$th = $_POST["c"];
	$ave = $fir + $se + $th;
	$aver = $ave/3;
	echo"The average of 3 scores is $aver</br>";
}
?>
</body>
</head>