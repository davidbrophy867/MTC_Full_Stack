<?php 
    function signon(){
        echo "<h2>Welcome, David</h2>";
    };

    function loginToSite($userid, $password, $num){
        /*if($password == "secretpassword"){
            echo "Success!";
            success($num);
            return true;
        }
        else{
            echo "Failure!";
            failure();
            return false;
        }*/

        $db = mysqli_connect('localhost','root','AA76530bb','bookorama');

        if(mysqli_connect_errno()) {
            echo '<p>Error: Could not connect to database.<br />
                 Please try again later.</p>';
                 exit;
          }


          $query = "Select * from customers where username='".mysqli_real_escape_string($db, $userid)."'";
          $resultSelect = mysqli_query($db, $query);
          $row = mysqli_fetch_assoc($resultSelect);
          if($row['password'] == $password){
            return true;
          }
          else{
            return false;
          }

    }

    function success($num){
        if(($num > 10) || !(is_numeric($num))){$maxNum=10;}
        else{$maxNum=$num;}

        for($i=0; $i<$maxNum; $i++){
            echo "<img src='includes/success.jpg'>";
        }
    }

    function failure(){
        echo "<img src='includes/noLogin.jpg'>";
    }
?>