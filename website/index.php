<!DOCTYPE html>
<html lang="en">
<head>
   <title>Fruit Shop</title>
</head>
<body style="background-color: green;" >
   <h1>Welcome to our Fruit Shop</h1>
   <ul>
       <?php
           $json = file_get_contents('http://fruit-service');
           $obj = json_decode($json);
           $fruits = $obj->fruits;
           foreach ($fruits as $fruit){
               echo "<li>$fruit</li>";
           }
       ?>
   </ul>
</body>
</html>
