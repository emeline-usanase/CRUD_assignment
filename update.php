<?php
include("connection.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM books WHERE id='$id'");
    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $update = "UPDATE books SET title='$title', author='$author' WHERE id='$id'";
    $data = mysqli_query($conn, $update);
    if ($data) {
        header("location:retrieve.php");
        exit();
    } else {
        echo "No data Updated";
    }
}
?>
<form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo isset($row['id']) ? $row['id'] : ''; ?>">
    Title of books: <input type="text" name="title" value="<?php echo isset($row['title']) ? $row['title'] : ''; ?>"><br><br>
    Author of books: <input type="text" name="author" value="<?php echo isset($row['author']) ? $row['author'] : ''; ?>"><br><br>
    <input type="submit" value="Update" name="update">
</form>		