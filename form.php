<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    
    <form method="POST" action="#">
        Title of book:<input type="text" name="title"><br><br>
        Author of book:<input type="text" name="name"><br><br>
    <input type="submit" value="Submit" name="Send">
 </form>

<?php
include("connection.php");
if (isset($_POST['Send'])) {
    $title=$_POST['title'];
    $name=$_POST['name'];
    
$query="INSERT INTO books(id,title,author) VALUES ('','$title','$name')";
$data= mysqli_query ($conn,$query);
if($data){
 header("location:retrieve.php");
}else{
    echo"No";
}
}

?>
</body
</html>