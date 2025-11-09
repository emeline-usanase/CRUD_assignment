	<?php
include("connection.php");
$id=$_GET['a'];
$delete="DELETE FROM books WHERE id='$id'";
$data=mysqli_query($conn,$delete);
if ($data) {
	header("location:retrieve.php");
}else{

	echo "No data deleted";
}
	?>