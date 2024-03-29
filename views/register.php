<?php

include("../layout/header.php");
?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header">Sign Up</div>
                <form action="../scripts/logout.php" method="POST">
                    <input type="submit" value="logout">
                </form>
                <div class="card-body">
                    <?php
                    session_start();
                    if(isset($_SESSION['errors'])){
                        foreach($_SESSION['errors'] as $error){
                            echo "<p>$error</p>";
                        }
                        $_SESSION['errors']=[];

                    } 
                    $fname= $lname=$email="";

                    if(isset($_SESSION['fname']) && isset($_SESSION['lname']) && isset($_SESSION['email'])){
                        $fname=$_SESSION['fname'];
                        $lname=$_SESSION['lname'];
                        $email=$_SESSION['email'];
                    }
        ?>
                   <form action="../scripts/register.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control my-3" placeholder="First Name" name="fname" value="<?php echo $fname; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control  my-3" placeholder="Last Name" name="lname" value="<?php echo $lname; ?>">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control  my-3" placeholder="Your@email.com" name="email" value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control  my-3" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control  my-3" placeholder="Confirm Password" name="confirm">
                        </div>
                        <button type="submit" class="btn">Submit</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>