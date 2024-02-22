<?php include('includes/header.php'); ?>

<h2>Login Form </h2>
<section>
<!-- Create Form -->
<?php 
    require("includes/common.php");
    signon();
?>
<form action="login.php" method="post">
    <label>Username</label>
    <input type="text" name="username"/> 
    
    <label>Password</label>
    <input type="text" name="password"/> 

    <label>Enter a Number 1-10</label>
    <input type="text" name="number"/> 

    <input type="submit">
</form>
</section>

<?php include('includes/footer.php'); ?>



