<!DOCTYPE html>
<html>
<head>
  <title>Book-O-Rama - New Book Entry</title>

    <style type="text/css">

      fieldset {
         width: 75%;
         border: 2px solid #cccccc;
      }

      label {
         width: 75px;
         float: left;
         text-align: left;
         font-weight: bold;
      }

      input {
         border: 1px solid #000;
         padding: 3px;
      }

    </style>
</head>

<body>
  <?php 
    $id = $_POST["updatebook"];
    $db = mysqli_connect('localhost','root','AA76530bb','bookorama');

    $query = "Select * from books where ID='".$id."'"; //
    $resultSelect = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($resultSelect);
    
    $isbn = $row['ISBN'];
    $author = $row['Author'];
    $title = $row['Title'];
    $price = $row['Price'];
    
  ?>

  <h1>Book-O-Rama - Edit Book Entry</h1>

  <form action="update_book.php" method="post">

  <fieldset>
    <p><label for="ISBN">ISBN</label>
    <input type="text" id="ISBN" name="ISBN" maxlength="13" size="13" value=<?php echo "'".$isbn."'";?>/></p>

    <p><label for="Author">Author</label>
    <input type="text" id="Author" name="Author" maxlength="30" size="30" value=<?php echo "'".$author."'";?>/></p>

    <p><label for="Title">Title</label>
    <input type="text" id="Title" name="Title" maxlength="60" size="30" value=<?php echo "'".$title."'";?>/></p>
  
    <p><label for="Price">Price</label>
    $ <input type="text" id="Price" name="Price" maxlength="7" size="7" value=<?php echo "'".$price."'";?>/></p> 
  </fieldset>
  <?php echo "<input type='hidden' id='id' name='id' value='".$id."'>"; ?> <!--hidden input-->
  <p><input type="submit" value="Update the Book" /></p>
  
      
  </form>
</body>
</html>
