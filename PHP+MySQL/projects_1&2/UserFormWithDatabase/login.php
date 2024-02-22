<?php include('includes/header.php'); 

$username = $_POST["username"];
$password = $_POST["password"];
$number = $_POST["number"];
?>

<section>
    <?php
        require("includes/common.php");
        
        if(!($didItWork = loginToSite($username, $password, $number))){
            header("Location: userform.php");
        }
        else{
            header("Location: index.html");
        }
    ?>
</section>




<?php include('includes/footer.php'); ?>
