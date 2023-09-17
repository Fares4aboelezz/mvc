<?php
include "db.php";

$query = "SELECT * FROM courses";

$res = mysqli_query($con,$query);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User | Delete</title>
</head>
<body>

<form action="/models/course.php" method="post">


<select name="id">

<?php
for ($i=0; $i < $course = mysqli_fetch_assoc($res) ; $i++) { 
    $id = $course['id'];
    echo "<option value='$id'>$id</option>";
}
?>

</select><br>


<input type="submit" value="delete" name="delete">

</form>
    
</body>
</html>