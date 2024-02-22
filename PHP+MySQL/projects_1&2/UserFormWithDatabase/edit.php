<!DOCTYPE html>
<html>
<head>
  <title>Book-O-Rama Book Entry Results</title>
</head>
<body>
  <h1>Book-O-Rama Book Entry Results</h1>
  <?php

  // best practice: create a single if statement that checks to see if all four form items have been entered and exist. 
  //If yes - continue (use exit), if no - echo an error.  Page 284

  
  // create short variable names and collect the information from the form
  // in your HTML form - make sure that all are entered to test or we'll get an error
  $isbn = $_POST['ISBN'];
  $author = $_POST['Author'];
  $title = $_POST['Title'];
  $price = $_POST['Price'];
  

 // connect to the database and get the handle into a variable - this is the procedural way to invoke MySQL
 //https://www.php.net/manual/en/mysqli.construct.php
 //  host, user, password, database 
 $db = mysqli_connect('localhost','root','AA76530bb','bookorama');//change username and password 

 if(mysqli_connect_errno()) {
   echo '<p>Error: Could not connect to database.<br />
        Please try again later.</p>';
        exit;
 }

  // create a query that will INSERT the book, all values - use NULL for the id column
  // use the variables that were collected from the user, remember to put single quotes around 
  //each variable in the insert and use double quotes for the insert statement  
  //No quotes around null since it is a key word
  $query = "insert into books values (NULL, '$isbn', '$author', '$title', '$price')";

  //To see what we're actually inserting - uncomment below and you can copy/paste the information into PHPMyAdmin to see other errors
  //echo $query;

  //die function will echo and terminate the php script in case there are errors below this line - try it!
  //die($query);

  // execute your query into a variable 
  $result = mysqli_query($db,$query);
  if($result){
    echo  "Records inserted successfully.";
  }
  else{
    echo "ERROR: Could not execute. <br /><br />";
    echo $query;
  }

  // we are not retrieving records, but we can see if the insert worked
  //After this query works - comment out the select statement so that you may continue with the project for chapter 11
  //$row = mysqli_fetch_assoc($result);

  $query = "Select * from books";
  $resultSelect = mysqli_query($db, $query);

  // Associative array
  //$row = mysqli_fetch_assoc($result);

  echo "<form action='edit_book.php' method='post'><select>";
  while($row = mysqli_fetch_assoc($resultSelect)){
        $id = $row['ID']; //matches the column name
        $title = $row['Title']; //matches the column name
        
        echo "<option value ='".$id."'>";
        echo $title;
        echo "</option>";
  }
  echo"</select><input type='submit'></form>";

  /*if($USEYOURVARIABLE){
    echo "Records inserted successfully.";
  } else{
    echo "ERROR: Could not execute ";
  }*/
//check phpMyAdmin to see the records

  
    
  mysqli_close($db);

      // close the database pg 281
  ?>
</body>
</html>
