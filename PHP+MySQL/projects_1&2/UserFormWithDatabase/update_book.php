<!DOCTYPE html>
<html>
<head>
  <title>Book-O-Rama - Update Book Entry</title>

</head>

<body>
  <?php 
    $id=$_POST["id"];
    $isbn=$_POST["ISBN"];
    $author=$_POST["Author"];
    $title=$_POST["Title"];
    $price=$_POST["Price"];

    $db = mysqli_connect('localhost','root','AA76530bb','bookorama');

    $query = "update books set isbn='".$isbn."', author='".$author."', title='".$title."', price='".$price."' where id = '".$id."'";
   
    $result = mysqli_query($db,$query);
    
    if($result){
      echo "Record updated successfully.";
    } else{
      echo "ERROR: Could not execute ";
    }
  
  ?>  



</body>
</html>
