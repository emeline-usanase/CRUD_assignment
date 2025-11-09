<?php
include("connection.php");
$query="SELECT * FROM  books";
$data=mysqli_query($conn,$query);
if(mysqli_num_rows($data)){
	echo"<center>";
	echo"<table border=1>";
		echo"<tr><th>books id</th><th>books_title</th><th>book_author</th><th>update</th><th>Delete</th></tr>";
		while($row=mysqli_fetch_array($data)) {
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['title']."</td>";
	echo "<td>".$row['author']."</td>";
	echo "<td><a href='update.php? a=".$row['id']." &b=".$row['title']." &c=".$row['author']."'>update</a></td>";
	echo "<td><a href='delete.php? a=".$row['id']."'>Delete</a></td>";
	
}
echo "</tr>";

echo "</table>";


echo "<a href='form.php'>Add new record</a>";

	echo "</center>";
}

	?>