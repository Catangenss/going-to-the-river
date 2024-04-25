<?php 
$link = mysqli_connect('localhost', 'root', 'iddqd');
if (!$link) {
	die('Error:' . mysqli_error());
}
echo 'Good!';
mysqli_close($link);
?>
