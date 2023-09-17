<?php
include "db.php";


$query = "SELECT * FROM courses";

$res = mysqli_query($$con,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Info courses</title>
</head>
<body>
    
<form action="/models/course.php" method="post">

    
<   <input type="text" name="name" placeholder="name"><br>
<input type="text" name="description" placeholder="description"><br>
<input type="number" name="price" placeholder="price"><br>
<input type="number" name="discount" placeholder="discount"><br>
<input type="text" name="rate" placeholder="rate"><br>




<select name="id"  >

<?php
for ($i=0; $i < $courses = mysqli_fetch_assoc($res) ; $i++) { 
    $id = $courses['id'];
    echo "<option value='$id'>$id</option>";
}
?>

</select><br>


<input type="submit" name="submit">

</form>



</body>
</html>