<?php 
    function signon(){
        echo "<h2>Welcome, David</h2>";
    };

    function loginToSite($userid, $password, $num){
        if($password == "secretpassword"){
            echo "Success!";
            success($num);
            return true;
        }
        else{
            echo "Failure!";
            failure();
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