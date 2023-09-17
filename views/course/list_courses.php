<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
   <?php 
   foreach($courses as $course):
   ?>
   <td><?=$course['name']?></td>
   <td><?=$course['description']?></td>
   <td><?=$course['price']?></td>
   <td><?=$course['discount']?></td>
   <td><?=$course['rate']?></td>
   <?php endforeach;?>
</body>
</html>